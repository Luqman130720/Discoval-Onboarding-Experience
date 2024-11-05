<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\VirtualClassController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;

Route::get('/', function () {
    return view('welcome');
});


// Login Routes
Route::group(['prefix' => 'login', 'as' => 'login.', 'controller' => LoginController::class], function () {
    Route::get('/portal', 'portal')->name('portal');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/student', 'studentLoginForm')->name('student');
    Route::get('/operator', 'operatorLoginForm')->name('operator');
    Route::get('/teacher', 'teacherLoginForm')->name('teacher');
    Route::post('/operator', 'loginOperator')->name('operator.post');
    Route::post('/teacher', 'loginTeacher')->name('teacher.post');
    Route::post('/student', 'loginStudent')->name('student.post');
    Route::post('/logout', 'logout')->name('logout');
});


Route::group(['prefix' => 'student/', 'as' => 'student.dashboard.', 'middleware' => 'role:student', 'controller' => StudentDashboardController::class], function () {
    
    Route::get('/', 'index')->name('index');

});

// Admin Dashboard Routes
Route::group([
    'prefix' => 'operator/',
    'as' => 'operator.',
    'middleware' => 'role:operator',
    'controller' => AdminDashboardController::class],
    
    function () {    
        Route::get('/', 'index')->name('index');

    // Profile Routes
    Route::group([
        'prefix' => 'profile', 
        'as' => 'profile.', 
        'controller' => ProfileController::class
    ],
    
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit', 'edit')->name('edit');
            Route::post('/store', 'store')->name('store');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/{id}', 'destroy')->name('destroy');
    });

    // Classroom Routes
    Route::group([
        'prefix' => 'classroom/',
        'as' => 'classroom.',
        'controller' => ClassroomController::class],
        
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/{id}', 'destroy')->name('destroy');
            Route::post('/import', 'import')->name('import');
    });

    // Teacher Routes
    Route::group([
        'prefix' => 'teachers/',
        'as' => 'teachers.',
        'controller' => TeacherController::class],
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/{teacher}', 'destroy')->name('destroy');
            Route::get('/{id}', 'show')->name('show');
            Route::post('/import', 'import')->name('import');
    });


    // Student Routes
    Route::group([
        'prefix' => 'students/',
        'as' => 'students.',
        'controller' => StudentController::class],
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::get('/{student}', 'show')->name('show');
            Route::delete('/{id}', 'destroy')->name('destroy');
            Route::post('/import', 'import')->name('import');
    });


    // Subject Routes
    Route::group([
        'prefix' => 'subjects',
        'as' => 'subjects.',
        'controller' => SubjectController::class],
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::get('/{id}', 'show')->name('show');
            Route::delete('/{id}', 'destroy')->name('destroy');
            Route::post('/import', 'import')->name('import');
    });

});


Route::group(['prefix' => 'teacher/dashboard', 'as' => 'teacher.dashboard.', 'middleware' => 'role:teacher', 'controller' => TeacherDashboardController::class], function () {
    
    Route::get('/', 'index')->name('index');

    Route::group(['prefix' => 'teacher/assignments', 'as' => 'teacher.assignments.', 'controller' => AssignmentController::class], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::group(['prefix' => 'teacher/virtual-class', 'as' => 'teacher.virtual-class.', 'controller' => VirtualClassController::class], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

});

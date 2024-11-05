<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Subject;
use App\Models\Classroom;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        // Mengambil data guru yang sudah ada
        $teacher1 = User::where('nip', '198501012008012001')->first(); // Operator
        $teacher2 = User::where('nip', '197702022002122002')->first(); // Guru 1
        $teacher3 = User::where('nip', '198312212005012002')->first(); // Guru 2
        $teacher4 = User::where('nip', '198904032006042002')->first(); // Guru 3
        $teacher5 = User::where('nip', '199001022007042002')->first(); // Guru 4

        // Mengambil data kelas yang sudah ada
        $class1 = Classroom::where('class_code', 'CLASS001')->first();
        $class2 = Classroom::where('class_code', 'CLASS002')->first();
        $class3 = Classroom::where('class_code', 'CLASS003')->first();

        Subject::create([
            'subject_code' => 'SUBJ001',
            'subject_name' => 'Matematika',
            'class_id' => $class1->id, // Kelas A
            'teacher_id' => $teacher2->id, // Guru 1
        ]);

        Subject::create([
            'subject_code' => 'SUBJ002',
            'subject_name' => 'Biologi',
            'class_id' => $class1->id, // Kelas A
            'teacher_id' => $teacher3->id, // Guru 2
        ]);

        Subject::create([
            'subject_code' => 'SUBJ003',
            'subject_name' => 'Kimia',
            'class_id' => $class2->id, // Kelas B
            'teacher_id' => $teacher4->id, // Guru 3
        ]);

        Subject::create([
            'subject_code' => 'SUBJ004',
            'subject_name' => 'Fisika',
            'class_id' => $class2->id, // Kelas B
            'teacher_id' => $teacher5->id, // Guru 4
        ]);

        Subject::create([
            'subject_code' => 'SUBJ005',
            'subject_name' => 'Bahasa Inggris',
            'class_id' => $class3->id, // Kelas C
            'teacher_id' => $teacher2->id, // Guru 1
        ]);
    }
}

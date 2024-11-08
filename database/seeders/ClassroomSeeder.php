<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $teacher1 = User::where('nip', '198501012008012001')->first();
        $teacher2 = User::where('nip', '197702022002122002')->first();
        $teacher3 = User::where('nip', '198312212005012002')->first();

        Classroom::create([
            'class_code' => 'CLASS001',
            'class_name' => 'Class A',
            'grade_level' => '10',
            'homeroom_teacher_id' => $teacher1->id,
        ]);

        Classroom::create([
            'class_code' => 'CLASS002',
            'class_name' => 'Class B',
            'grade_level' => '10',
            'homeroom_teacher_id' => $teacher2->id,
        ]);

        Classroom::create([
            'class_code' => 'CLASS003',
            'class_name' => 'Class C',
            'grade_level' => '10',
            'homeroom_teacher_id' => $teacher3->id,
        ]);
    }

}

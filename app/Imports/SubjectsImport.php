<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Subject;
use App\Models\Classroom;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;


class SubjectsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function __construct()
    {
        HeadingRowFormatter::default('none');
    }
    
    public function model(array $row)
    {
        // dd($row);
        $classroom = Classroom::where('class_code', $row['Class Code'])->first();

        $teacher = User::where('nip', $row['Teacher Code (NIP)'])->first();

        if ($classroom && $teacher) {
            return new Subject([
                'subject_code' => $row['Subject Code'],
                'subject_name' => $row['Subject Name'],
                'class_id' => $classroom->id,
                'teacher_id' => $teacher->id,
            ]);
        }

        return null;
    }
}

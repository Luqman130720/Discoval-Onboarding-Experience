<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeachersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'nip' => $row['nip'],
            'email' => $row['e_mail'],
            'first_name' => $row['nama_depan'],
            'last_name' => $row['nama_belakang'],
            'rank' => $row['gelar'],
            'address' => $row['alamat'],
            'city' => $row['kota'],
            'province' => $row['provinsi'],
            'postal_code' => $row['kode_pos'],
            'country' => $row['negara'],
            'phone_number' => $row['nomor_telepon'],
            'about' => $row['tentang_kami'],
            'place_of_birth' => $row['tempat_lahir'],
            'date_of_birth' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir'])->format('Y-m-d'),
            'gender' => ($row['jenis_kelamin'] === 'Laki-laki') ? 'L' : 'P',
            'religion' => $row['agama'],
            'profile_picture' => null,
            'role' => 'teacher',
            'password' => bcrypt($row['e_mail']),
        ]);

    }
}

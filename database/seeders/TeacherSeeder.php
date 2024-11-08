<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     
     public function run(): void
    {
        User::create([
            'nip' => '198501012008012001',
            'email' => 'admin@example.com',
            'first_name' => 'Budi',
            'last_name' => 'Prabowo',
            'rank' => 'S.Kom',
            'password' => bcrypt('password'),
            'role' => 'operator',
        ]);

        User::create([
            'nip' => '197702022002122002',
            'email' => 'teacher1@example.com',
            'first_name' => 'Siti',
            'last_name' => 'Rahmawati',
            'rank' => 'S.Pd',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        User::create([
            'nip' => '198312212005012002',
            'email' => 'teacher2@example.com',
            'first_name' => 'Ahmad',
            'last_name' => 'Suhada',
            'rank' => 'M.Pd',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        User::create([
            'nip' => '198904032006042002',
            'email' => 'teacher3@example.com',
            'first_name' => 'Dewi',
            'last_name' => 'Mulia',
            'rank' => 'S.Sos',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        User::create([
            'nip' => '199001022007042002',
            'email' => 'teacher4@example.com',
            'first_name' => 'Rudi',
            'last_name' => 'Santoso',
            'rank' => 'S.T',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        User::create([
            'nip' => '199305152008122002',
            'email' => 'teacher5@example.com',
            'first_name' => 'Lina',
            'last_name' => 'Sari',
            'rank' => 'S.E',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);
    }


}

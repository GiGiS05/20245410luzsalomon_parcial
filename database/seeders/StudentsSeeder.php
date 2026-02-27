<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'full_name' => 'John Doe',
                'badge' => 'JD123456',
                'institutional_email' => 'JD123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],
            [
                'full_name' => 'Cristian Doe',
                'badge' => 'CD123456',
                'institutional_email' => 'CD123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],            
            [
                'full_name' => 'Johana Hamilton',
                'badge' => 'JH123456',
                'institutional_email' => 'JH123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],            
            [
                'full_name' => 'Christopher Walkens',
                'badge' => 'CW123456',
                'institutional_email' => 'CW123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],
            [
                'full_name' => 'Julia Roberts',
                'badge' => 'JR123456',
                'institutional_email' => 'JR123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],
            [
                'full_name' => 'Henry Cavill',
                'badge' => 'HC123456',
                'institutional_email' => 'HC123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],
            [
                'full_name' => 'Felipe Damascus',
                'badge' => 'FD123456',
                'institutional_email' => 'FD123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],
            [
                'full_name' => 'Moriarty Holmes',
                'badge' => 'MH123456',
                'institutional_email' => 'MH123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],
            [
                'full_name' => 'Orwell Smith',
                'badge' => 'OS123456',
                'institutional_email' => 'OS123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ],
            [
                'full_name' => 'Elizabeth Taylor',
                'badge' => 'ET123456',
                'institutional_email' => 'ET123456@universidad.edu.sv',
                'available_permits' => 3,
                'state' => 'activa'
            ]
        ]);
    }
}

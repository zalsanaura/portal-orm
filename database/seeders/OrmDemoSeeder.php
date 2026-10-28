<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrmDemoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('study_programs')->insert([
            ['id' => 1, 'name' => 'Informatika'],
            ['id' => 2, 'name' => 'Sistem Informasi'],
        ]);

        DB::table('courses')->insert([
            ['id' => 1, 'name' => 'Pemrograman Web'],
            ['id' => 2, 'name' => 'Basis Data'],
            ['id' => 3, 'name' => 'Pemodelan Sistem'],
        ]);

        DB::table('students')->insert([
            [
                'id' => 1,
                'name' => 'Alya',
                'study_program_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Bima',
                'study_program_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Citra',
                'study_program_id' => 2,
            ],
        ]);

        DB::table('profiles')->insert([
            [
                'student_id' => 1,
                'address' => 'Palopo',
            ],
            [
                'student_id' => 2,
                'address' => 'Makassar',
            ],
        ]);

        DB::table('course_student')->insert([
            [
                'student_id' => 1,
                'course_id' => 1,
                'enrolled_at' => now(),
            ],
            [
                'student_id' => 1,
                'course_id' => 2,
                'enrolled_at' => now(),
            ],
            [
                'student_id' => 2,
                'course_id' => 1,
                'enrolled_at' => now(),
            ],
        ]);
    }
}

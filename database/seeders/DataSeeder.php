<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = [
            ['name' => 'Dare-e-Arqam', 'location' => 'Islamabad', 'classrooms' => '20'],
            ['name' => 'Reader', 'location' => 'Rawalpindi', 'classrooms' => '20'],
            ['name' => 'The Right', 'location' => 'Sargodha', 'classrooms' => '20'],
            ['name' => 'iiui', 'location' => 'Islamabad', 'classrooms' => '20'],
            ['name' => 'Kims', 'location' => 'Faisalabad', 'classrooms' => '20'],
        ];
        DB::table('schools')->insert($schools);

        $students = [
            ['school_id' =>  1, 'name' => 'Sheraz', 'father_name' => 'Riaz', 'section' => 'A'],
            ['school_id' =>  2, 'name' => 'Wahab', 'father_name' => 'Sher', 'section' => 'B'],
            ['school_id' =>  3, 'name' => 'Sufyan', 'father_name' => 'Sajid', 'section' => 'A'],
            ['school_id' =>  1, 'name' => 'Ali Imran', 'father_name' => 'Imran', 'section' => 'B'],
            ['school_id' =>  1, 'name' => 'Sami', 'father_name' => 'Wahab', 'section' => 'A'],
        ];
        DB::table('students')->insert($students);

        $teachers = [
            ['school_id' => 1, 'name' => 'Nazar', 'mobile_no' => '0345-1234567'],
            ['school_id' => 2, 'name' => 'Mukhtar', 'mobile_no' => '0345-1234567'],
            ['school_id' => 3, 'name' => 'Abbas', 'mobile_no' => '0345-1234567'],
            ['school_id' => 4, 'name' => 'Tariq', 'mobile_no' => '0345-1234567'],
            ['school_id' => 5, 'name' => 'Sikandar', 'mobile_no' => '0345-1234567'],
        ];
        DB::table('teachers')->insert($teachers);

        $results = [
            ['student_id' =>  1, 'math' => '67', 'phy' => '77', 'chem' => '56', 'cs' => '80', 'average' => '70', 'percentage' => '70%'],
            ['student_id' =>  2, 'math' => '80', 'phy' => '58', 'chem' => '67', 'cs' => '70', 'average' => '68.75', 'percentage' => '68.75%'],
            ['student_id' =>  3, 'math' => '90', 'phy' => '89', 'chem' => '56', 'cs' => '60', 'average' => '73.75', 'percentage' => '73.75%'],
            ['student_id' =>  4, 'math' => '75', 'phy' => '85', 'chem' => '79', 'cs' => '50', 'average' => '72.25', 'percentage' => '72.25%'],
            ['student_id' =>  5, 'math' => '60', 'phy' => '49', 'chem' => '68', 'cs' => '68', 'average' => '61.25', 'percentage' => '61.25%'],
        ];
        DB::table('assesment_results')->insert($results);
    }
}

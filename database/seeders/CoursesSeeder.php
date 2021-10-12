<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\course;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**DB::table('courses')->insert([
                'title' => 'Informatika dan Keterampilan Generik',
                'slug' => 'informatika-dan-keterampilan-generik',
                'excerpt' => 'Excerpt pertama',
                'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus veniam quis, itaque nulla incidunt vel animi officia sint distinctio repellat eos dolorum quae a velit, nam nihil.</p><p>Officia earum delectus sunt placeat obcaecati, quidem dolore quam neque soluta saepe sint blanditiis aliquam ad ullam expedita vitae eos quia odio doloribus impedit quasi dolorem rem? Nobis qui totam modi veritatis, tenetur quisquam quasi magni rem? Eligendi dolorem dolorum quos nobis itaque cupiditate numquam, quae hic et nihil maxime officia nisi quia iste dolores laborum aspernatur ullam placeat praesentium a unde quo magni esse! Fugit suscipit quasi necessitatibus, sint pariatur corrupti. Dolorem.</p>'

        ]);*/

        course::create([
            'title' => 'Informatika dan Keterampilan Generik',
            'slug' => 'informatika-dan-keterampilan-generik',
            'excerpt' => 'Excerpt pertama',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus veniam quis, itaque nulla incidunt vel animi officia sint distinctio repellat eos dolorum quae a velit, nam nihil.</p><p>Officia earum delectus sunt placeat obcaecati, quidem dolore quam neque soluta saepe sint blanditiis aliquam ad ullam expedita vitae eos quia odio doloribus impedit quasi dolorem rem? Nobis qui totam modi veritatis, tenetur quisquam quasi magni rem? Eligendi dolorem dolorum quos nobis itaque cupiditate numquam, quae hic et nihil maxime officia nisi quia iste dolores laborum aspernatur ullam placeat praesentium a unde quo magni esse! Fugit suscipit quasi necessitatibus, sint pariatur corrupti. Dolorem.</p>'
        ]);

        course::create([
            'title' => 'Sistem Komputer',
            'slug' => 'sistem-komputer',
            'excerpt' => 'Excerpt kedua',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus veniam quis, itaque nulla incidunt vel animi officia sint distinctio repellat eos dolorum quae a velit, nam nihil.</p><p>Officia earum delectus sunt placeat obcaecati, quidem dolore quam neque soluta saepe sint blanditiis aliquam ad ullam expedita vitae eos quia odio doloribus impedit quasi dolorem rem? Nobis qui totam modi veritatis, tenetur quisquam quasi magni rem? Eligendi dolorem dolorum quos nobis itaque cupiditate numquam, quae hic et nihil maxime officia nisi quia iste dolores laborum aspernatur ullam placeat praesentium a unde quo magni esse! Fugit suscipit quasi necessitatibus, sint pariatur corrupti. Dolorem.</p>'
        ]);

        course::create([
            'title' => 'Jaringan Komputer dan Internet',
            'slug' => 'jaringan-komputer-dan-internet',
            'excerpt' => 'Excerpt ketiga',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus veniam quis, itaque nulla incidunt vel animi officia sint distinctio repellat eos dolorum quae a velit, nam nihil.</p><p>Officia earum delectus sunt placeat obcaecati, quidem dolore quam neque soluta saepe sint blanditiis aliquam ad ullam expedita vitae eos quia odio doloribus impedit quasi dolorem rem? Nobis qui totam modi veritatis, tenetur quisquam quasi magni rem? Eligendi dolorem dolorum quos nobis itaque cupiditate numquam, quae hic et nihil maxime officia nisi quia iste dolores laborum aspernatur ullam placeat praesentium a unde quo magni esse! Fugit suscipit quasi necessitatibus, sint pariatur corrupti. Dolorem.</p>'
        ]);

        course::create([
            'title' => 'Algoritma dan Pemrograman',
            'slug' => 'algoritma-dan-pemrograman',
            'excerpt' => 'Excerpt keempat',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus veniam quis, itaque nulla incidunt vel animi officia sint distinctio repellat eos dolorum quae a velit, nam nihil.</p><p>Officia earum delectus sunt placeat obcaecati, quidem dolore quam neque soluta saepe sint blanditiis aliquam ad ullam expedita vitae eos quia odio doloribus impedit quasi dolorem rem? Nobis qui totam modi veritatis, tenetur quisquam quasi magni rem? Eligendi dolorem dolorum quos nobis itaque cupiditate numquam, quae hic et nihil maxime officia nisi quia iste dolores laborum aspernatur ullam placeat praesentium a unde quo magni esse! Fugit suscipit quasi necessitatibus, sint pariatur corrupti. Dolorem.</p>'
        ]);
    }
}

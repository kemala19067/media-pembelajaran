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
            'body' => 'Informatika adalah bidang ilmu mengenai studi, perancangan, dan pembuatan sistem komputasi, serta prinsip-prinsip yang menjadi dasar perancangan tersebut. Komputasi adalah ilmu yang berkaitan dengan pemodelan matematika dan penggunaan komputer untuk memecahkan masalah-masalah sains. Informatika mencakup aspek teoretis dan praktis, mendorong kalian untuk mengembangkan daya pikir kritis dan kreatif untuk menghasilkan penemuan (invention) terkait komputer dan sistem komputasi.'
        ]);

        course::create([
            'title' => 'Sistem Komputer',
            'slug' => 'sistem-komputer',
            'excerpt' => 'Excerpt kedua',
            'body' => 'Sistem Komputer merupakan suatu jaringan elektronik yang terdiri atas perangkat lunak dan perangkat keras yang memperagakan tugas tertentu (menerima input, memproses input, menyimpan perintah-perintah, dan menyediakan output dalam struktur informasi).'
        ]);

        course::create([
            'title' => 'Jaringan Komputer dan Internet',
            'slug' => 'jaringan-komputer-dan-internet',
            'excerpt' => 'Excerpt ketiga',
            'body' => 'Jaringan komputer adalah dua atau lebih komputer yang terhubung satu sama lain dan digunakan untuk berbagi data. Sebuah jaringan dibangun dengan perpaduan konfigurasi hardware dan software untuk menciptakan sebuah sistem yang dapat bekerja dengan mulus. Sebuah jaringan perangkat juga mungkin dibuat dengan menggunakan gabungan teknologi kabel dan wireless. Perangkat jaringan berkomunikasi melalui medium transmisi kabel atau wireless. Untuk jaringan yang menggunakan kabel, Anda mungkin membutuhkan optical fiber, coaxial cable, atau kabel tembaga. Sementara itu, jalur jaringan wireless termasuk dalam kategori jaringan yang menggunakan koneksi data nirkabel untuk menghubungkan titik akhir. Titik akhir ini termasuk radio siaran, radio seluler, microwave, dan satelit.'
        ]);

        course::create([
            'title' => 'Algoritma dan Pemrograman',
            'slug' => 'algoritma-dan-pemrograman',
            'excerpt' => 'Excerpt keempat',
            'body' => 'Algoritma adalah langkah-langkah yang disusun secara tertulis dan berurutan untuk menyelesaikan suatu masalah.  Sedangkan Algoritma Pemrograman adalah langkah-langkah yang ditulis secara berurutan untuk menyelesaikan masalah pemrograman komputer. Dalam pemrograman yang sederhana, algoritma merupakan langkah pertama yang harus ditulis sebelum menuliskan program. Masalah yang dapat diselesaikan dengan pemrograman komputer adalah masalah-masalah yang berhubungan dengan perhitungan matematik.'
        ]);
    }
}

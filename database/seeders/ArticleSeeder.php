<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $post1 = [
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 1',
                'slug' => 'post-one',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 2',
                'slug' => 'post-two',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 3',
                'slug' => 'post-three',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 4',
                'slug' => 'post-four',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 5',
                'slug' => 'post-five',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 6',
                'slug' => 'post-six',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 7',
                'slug' => 'post-seven',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 8',
                'slug' => 'post-eight',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 9',
                'slug' => 'post-nine',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => rand(1, 3),
                'user_id' => 1,
                'title' => 'Title 10',
                'slug' => 'post-ten',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus ipsam possimus illum adipisci quod deleniti id eaque quis, unde totam ab, magnam fugit, necessitatibus iste dolorum facere porro eius.',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],


        ];
        $post2 = [

            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Resmi Dipecat Nih Bos! Manchester United Akhirnya Depak Ole Gunnar Solskjaer',
                'slug' => 'resmi-dipecat-nih-bos-manchester-united-akhirnya-depak-ole-gunnar-solskjaer',
                'excerpt' => 'Raksasa Premier League Manchester United akhirnya resmi memecat Ole',
                'body' => '<p>Raksasa Premier League Manchester United akhirnya resmi memecat Ole Gunnar Solskjaer, Minggu (21/11/2021) petang WIB.</p> <p>Pemecatan itu resmi diumumkan kurang dari sehari usai Manchester United dipermalukan oleh Watford di matchday 12 Premier League 2021-22. Bermain di Vicarage Road, MU dipermak dengan skor telak 4-1.</p> <p>Usai laga tersebut, ada kabar bahwa manajemen Man United menggelar rapat darurat. Dewan klub dikabarkan ingin agar Solskjaer segera dipecat.</p> <p>Pada akhirnya, rapat itu menghasilkan keputusan bulat bahwa pria asal Norwegia itu akan memutuskan kontraknya dengan MU. Keputusan itu juga sudah direstui oleh pemilik Setan Merah yakni keluarga Glazer.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Januari, Kepa Bakal Cabut dari Chelsea?',
                'slug' => 'januari-kepa-bakal-cabut-dari-chelsea',
                'excerpt' => 'Spekulasi baru beredar mengenai masa depan Kepa Arrizabalaga.',
                'body' => '<p>Spekulasi baru beredar mengenai masa depan Kepa Arrizabalaga. Kiper asal Spanyol itu dilaporkan akan hengkang dari Chelsea di musim dingin nanti.</p> <p>Kepa pertama kali bergabung dengan Chelsea di tahun 2019. Pada saat itu The Blues harus memecahkan rekor kiper termahal dunia untuk mendatangkan Kepa.</p> <p>Namun selama di Chelsea, Kepa kesulitan untuk tampil konsisten. Alhasil sejak musim lalu posisinya sudah digusur oleh Edouard Mendy.</p> <p>Dilansir Sport Witness, Kepa sudah mulai jengah dengan situasinya saat ini. Ia diberitakan akan cabut dari Chelsea di bulan Januari nanti.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Feburari Aku berkenalan denganmu',
                'slug' => 'post-tiga',
                'excerpt' => 'Januari, Kepa Bakal Cabut dari Chelsea?',
                'body' => '<p>Spekulasi baru beredar mengenai masa depan Kepa Arrizabalaga. Kiper asal Spanyol itu dilaporkan akan hengkang dari Chelsea di musim dingin nanti.</p> <p>Kepa pertama kali bergabung dengan Chelsea di tahun 2019. Pada saat itu The Blues harus memecahkan rekor kiper termahal dunia untuk mendatangkan Kepa.</p> <p>Namun selama di Chelsea, Kepa kesulitan untuk tampil konsisten. Alhasil sejak musim lalu posisinya sudah digusur oleh Edouard Mendy.</p> <p>Dilansir Sport Witness, Kepa sudah mulai jengah dengan situasinya saat ini. Ia diberitakan akan cabut dari Chelsea di bulan Januari nanti.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Januari, desember',
                'slug' => 'januari-desember',
                'excerpt' => 'Januari, Kepa Bakal Cabut dari Chelsea?',
                'body' => '<p>Spekulasi baru beredar mengenai masa depan Kepa Arrizabalaga. Kiper asal Spanyol itu dilaporkan akan hengkang dari Chelsea di musim dingin nanti.</p> <p>Kepa pertama kali bergabung dengan Chelsea di tahun 2019. Pada saat itu The Blues harus memecahkan rekor kiper termahal dunia untuk mendatangkan Kepa.</p> <p>Namun selama di Chelsea, Kepa kesulitan untuk tampil konsisten. Alhasil sejak musim lalu posisinya sudah digusur oleh Edouard Mendy.</p> <p>Dilansir Sport Witness, Kepa sudah mulai jengah dengan situasinya saat ini. Ia diberitakan akan cabut dari Chelsea di bulan Januari nanti.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Januari Maret',
                'slug' => 'januari-maret',
                'excerpt' => 'Januari, Kepa Bakal Cabut dari Chelsea?',
                'body' => '<p>Spekulasi baru beredar mengenai masa depan Kepa Arrizabalaga. Kiper asal Spanyol itu dilaporkan akan hengkang dari Chelsea di musim dingin nanti.</p> <p>Kepa pertama kali bergabung dengan Chelsea di tahun 2019. Pada saat itu The Blues harus memecahkan rekor kiper termahal dunia untuk mendatangkan Kepa.</p> <p>Namun selama di Chelsea, Kepa kesulitan untuk tampil konsisten. Alhasil sejak musim lalu posisinya sudah digusur oleh Edouard Mendy.</p> <p>Dilansir Sport Witness, Kepa sudah mulai jengah dengan situasinya saat ini. Ia diberitakan akan cabut dari Chelsea di bulan Januari nanti.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Kualifikasi FIBA World Cup 2023: Indonesia Dua Kali Dilibas Lebanon',
                'slug' => 'kualifikasi-fiba-world-cup-2023-indonesia-dua-kali-dilibas-lebanon',
                'excerpt' => 'Indonesia menelan dua kekalahan melawan Lebanon di windows pertama kualifikasi',
                'body' => '
<p>
  Indonesia menelan dua kekalahan melawan Lebanon di windows pertama kualifikasi
  FIBA World Cup 2023. Meskipun begitu, mereka dinilai sudah maksimal.
</p>

<p>
  Bertanding di Zouk Mikael Arena, Lebanon, pada Senin (29/11/3021), Timnas
  basket Indonesia kembali mengalami kekalahan. Sempat bermain apik dengan
  mengimbangi perolehan poin di dua kuarter awal, Andakara Prastawa dkk harus
  menutup game ini dengan kedudukan 64-110. Pada laga pertama mereka juga kalah
  38-96 dari Lebanon.
</p>

<p>
  Perbedaan kualitas, pengalaman, dan ukuran pemain membuat Indonesia Patriots
  harus menerima kenyataan. Belum lagi, Lester Posper yang harus terparkir
  karena positif COVID-19 di menit akhir jelang pertandingan.
</p>

<p>
  Padahal, saat tes terakhir yang dilakukan manajemen timnas elite Indonesia
  sehari sebelum pertandingan, Prosper dinyatakan negatif. Situasi ini mengulang
  pada pertemuan pertama lalu. Saat itu, Prosper yang jalani tiga kali tes usap
  dinyatakan negatif. Namun ketika panitia melakukan tes usap jelang
  pertandingan menyatakan Prosper positif dan terpaksa harus menjalani
  karantina.
</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Ganesha Warriors, dari Karawang untuk Basket Indonesia',
                'slug' => 'ganesha-warriors-dari-karawang-untuk-basket-indonesia',
                'excerpt' => 'Ada banyak cara dilakukan untuk memajukan prestasi perbasketan Indonesia',
                'body' => '
<p>
  Ada banyak cara dilakukan untuk memajukan prestasi perbasketan Indonesia,
  salah satunya pembinaan usia dini. Itulah yang sedang dilakukan akademi
  Ganesha Warriors.
</p>

<p>
  Ganesha Warriors yang didirikan pada 15 April 2008 terinspirasi dari Dewa
  Pendidikan, Ganesha, dalam ajaran agam Hindu. Filosofi inilah yang dipakai
  saat pertama kali membangun klub tersebut.
</p>

<p>
  Diharapkan atlet yang dibina tak hanya gemilang dari sisi prestasi
  non-akademik, tapi juga akademi karena dibekali pendidikan yang bagus. Ganesha
  Warriors memang sudah menyasar pembinaan basket sejak usia dini, yakni tingkat
  TK hingga SMA.
</p>

<p>
  Nah, demi mempercepat proses pembinaan di usia dini, maka Ganesha Warriors
  bekerjasama dengan Manusia Basket Indonesia (MBI) menggelar acara Coaching
  Clinic, Sabtu (27/11/2021) kemarin di GaneshArena Indoor Court.
</p>
', 'published_at' => now(), 'created_at' => now(), 'updated_at' => now()
            ],

            [
                'category_id' => 2,
                'user_id' => 1, 'title' => 'DBL Diperluas dengan Prokes Ketat', 'slug'
                => 'dbl-diperluas-dengan-prokes-ketat',
                'excerpt' => 'Ketua Komite Penanganan Covid-19 dan Pemulihan Ekonomi Nasional (KPC-PEN),
            Airlangga Hartarto', 'body' => '
<p>
  Ketua Komite Penanganan Covid-19 dan Pemulihan Ekonomi Nasional (KPC-PEN),
  Airlangga Hartarto, mendukung penyelenggaraan kompetisi bola basket tingkat
  pelajar Development Basketball League (DBL) Indonesia, selama dilaksanakan
  dengan protokol kesehatan ketat.
</p>

<p>
  "Saat kasus aktif telah turun, kita tetap tidak boleh lengah dan harus tetap
  menjaga penegakan prokes agar tidak terjadi lagi kenaikan kasus yang tidak
  kita harapkan. Di sisi lain, olahraga mempunyai peran sangat penting, karena
  menjaga kesehatan dan meningkatkan imunitas tubuh, bahkan menguatkan mental,"
  kata Airlangga dalam keterangan pers.
</p>

<p>
  Gelaran DBL wilayah luar Jawa-Bali tahun ini akan dilaksanakan di lima lokasi,
  di antaranya adalah Banda Aceh, Jayapura, Padang, Manado, dan Jambi. Kemudian,
  pada 2022 akan dilanjutkan di delapan lokasi yakni Pekanbaru, Samarinda,
  Banjarmasin, Medan, Bandar Lampung, Pontianak, Kupang, dan Makassar.
</p>

<p>
  Sebagai salah salah satu penggemar olahraga basket, Airlangga berharap gelaran
  DBL dapat diperluas, agar setiap anak muda dapat memiliki kesempatan yang sama
  dalam meraih prestasi. Menurutnya, kompetisi tersebut juga diperlukan untuk
  membangun karakter generasi muda.
</p>
', 'published_at' => now(), 'created_at' => now(), 'updated_at' => now()
            ],

            [
                'category_id' => 2,
                'user_id' => 1, 'title' => '13 Tim Bersaing Jadi yang Terbaik di LIMA
Basketball 2021',
                'slug' => '13-tim-bersaing-jadi-yang-terbaik-di-lima-basketball-2021', 'excerpt' => 'Liga Mahasiswa (LIMA) membuka perhelatan LIMA Basketball 2021.', 'body' => '
<p>
  Liga Mahasiswa (LIMA) membuka perhelatan LIMA Basketball 2021. Ada 13 tim yang
  bersaing untuk jadi juara. Kira-kira siapa bakal berjaya?
</p>

<p>
  Tipoff dilakukan di Robinson Cisarua Resort, Bogor, Jawa Barat, Rabu
  (1/12/2021), oleh Wakil Bupati Bogor Iwan Setiawan. Ini jadi penanda
  dimulainya persaingan tim-tim bola basket terbaik dari beberapa perguruan
  tinggi.
</p>

<p>
  Pembukaan juga dihadiri berbagai pihak yakni G. Radityo Gambiro selaku Ketua
  Bidang Pembinaan Prestasi KONI Pusat dan dr Harry Papilaya Selaku Sub
  koordinator olahraga prestasi Kemenkes RI.
</p>

<p>
  Sebagai salah salah satu penggemar olahraga basket, Airlangga berharap gelaran
  DBL dapat diperluas, agar setiap anak muda dapat memiliki kesempatan yang sama
  dalam meraih prestasi. Menurutnya, kompetisi tersebut juga diperlukan untuk
  membangun karakter generasi muda.
</p>
', 'published_at' => now(), 'created_at' => now(), 'updated_at' => now()
            ],

            [
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Lagu Indonesia Diputar Tak Utuh, Perbasi Ajukan Protes ke Lebanon',
                'slug' => 'lagu-indonesia-diputar-tak-utuh-perbasi-ajukan-protes-ke-lebanon',
                'excerpt' => 'Pengalaman mengecewakan dialami Timnas basket Indonesia.',
                'body' => '
<p>
    Pengalaman mengecewakan dialami Timnas basket Indonesia. Lagu Indonesia Raya tak diputar sampai selesai pada Kualifikasi FIBA World Cup 2023.
</p>

<p>
    Hal itu dialami skuad Rajko Toroman sebelum laga window pertama berlangsung di Lebanon, Sabtu (27/11/2021) dini hari. Lagu Indonesia tak diputar secara utuh. PP PERBASI yang mengetahui itu kecewa berat dengan Lebanon.
</p>

<p>

Sebagai tuan rumah, Lebanon dinilai tak bisa menunjukkan rasa hormat kepada Indonesia sebagai tim tamu.

</p>

<p>
    "Kami kecewa kepada Lebanon. Saat memutar lagu kebangsaan Indonesia Raya dipotong. Tidak diputar sampai selesai. Kami protes keras dengan kejadian ini," ungkap Sekretaris Jenderal PP PERBASI Nirmala Dewi dalam rilis Perbasi.
</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'BWF World Tour Finals: Greysia/Apriyani Tembus Semifinal!',
                'slug' => 'bwf-world-tour-finals-greysiaapriyani-tembus-semifinal',
                'excerpt' => 'Greysia Polii/Apriyani Rahayu menghadapi Pearly Tan/Thinaah Muralitharan',
                'body' => '<p>Greysia Polii/Apriyani Rahayu menghadapi Pearly Tan/Thinaah Muralitharan di BWF World Tour Finals. Greysia/Apriyani menang, akhirnya ke semifinal!</p> <p>Laga terakhir di Grup A ganda putri BWF World Tour Finals mempertemukan Greysia Polii/Apriyani Rahayu vs Pearly Tan/Thinaah Muralitharan. Laga ini digelar di Bali International Convention Centre, Nusa Dua, Jumat (3/12) siang WIB.</p> <p>Ini adalah pertandingan penentuan bagi kedua pasangan. Yang menang, lolos ke semifinal BWF World Tour Finals 2021.</p> <P>Greysia/Apriyani akhirnya raih tiket ke semifinal dengan kemenangan straight game, 21-18 dan 21-11.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Main Agresif, Praveen/Melati pun Menang',
                'slug' => 'main-agresif-praveenmelati-pun-menang',
                'excerpt' => 'Praveen Jordan/Melati Daeva Oktavianti menjaga kans ke semifinal BWF',
                'body' => '<p>Praveen Jordan/Melati Daeva Oktavianti menjaga kans ke semifinal BWF World Tour Finals 2021 usai menang atas pasangan Inggris. Main agresif jadi kuncinya.</p> <p>Kemenangan dipetik Praveen Jordan/Melati Daeva Oktavianti atas ganda campuran Inggris Marcus Ellis/Lauren Smith, Kamis (2/12/2021) malam WITA. Pertandingan di Bali International Convention Center itu dimenangi Praveen/Melati straight game 21-16 dan 21-13.</p> <P>Ganda campuran andalan Indonesia itu praktis mengontrol pertandingan sepanjang waktu. Praveen/Melati memang sejak awal berencana mendesak lawan.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Ini Fokus Jonatan Christie dkk Jelang Kejuaraan Dunia',
                'slug' => 'ini-fokus-jonatan-christie-dkk-jelang-kejuaraan-dunia',
                'excerpt' => 'Setelah gagal lolos ke BWF World Tour Finals 2021, Jonatan Christie dkk',
                'body' => '<p>Setelah gagal lolos ke BWF World Tour Finals 2021, Jonatan Christie dkk memfokuskan persiapannya untuk Kejuaraan Dunia Bulutangkis. Fisik dan pikiran jadi prioritas.</p> <p>Kejuaraan Dunia digulirkan di Huelva, Spanyol, mulai 12 sampai 19 Desember 2021. Khusus sektor tunggal putra, mereka telah kembali ke Pelatnas PBSI, Cipayung, guna mempersiapkan diri menuju turnamen terakhir di akhir 2021.</p> <p>Pelatih tunggal putra, Irwansyah, mengatakan timnya memang langsung buru-buru terbang ke Jakarta karena mengejar persiapan Kejuaraan Dunia tersebut. Bagaimana pun waktu yang tersisa cukup sedikit, sementara atletnya masih butuh pemulihan pascacedera Thomas Cup lalu.</p> <p>"Mau tak mau tiga hari ini kita coba penguatan otot dan feelingnya. Tetap kami beri latihan yang agak kencang sedikit tapi jangan sampai cedera juga. Memang waktunya mepet banget tapi kami usahakan bagus untuk stamina fisiknya. Sebab, apa lagi yang mau dikejar selain bagaimana mereka bisa kembali naik dan stabil, baik dari fisik maupun pikirannya," kata Irwansyah kepada detikSport, Jumat (3/12/2021).</p> <p>"Jika pikiran sudah lebih tenang, sudah tak beban, insya Allah bisa. Namanya kita berusaha kan Allah yang menentukan. Jadi yang paling penting kita coba dulu," imbuhnya.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Kejuaraan Dunia Bulutangkis: Minions & 5 Wakil RI Lainnya Dapat Bye',
                'slug' => 'kejuaraan-dunia-bulutangkis-minions--5-wakil-ri-lainnya-dapat-bye',
                'excerpt' => 'Enam wakil Indonesia di Kejuaraan Dunia Bulutangkis langsung melaju ke putaran kedua',
                'body' => '<p>Enam wakil Indonesia di Kejuaraan Dunia Bulutangkis langsung melaju ke putaran kedua. Mereka mendapat bye.</p> <p></p> <p>Kejuaraan Dunia akan dilangsungkan di Huelva, Spanyol, mulai 12 sampai 19 Desember 2021. Menukil tournamentsoftware BWF, enam wakil itu terdiri dari tiga sektor yaitu tiga wakil dari ganda putra Kevin Sanjaya Sukamuljo/Marcus Fernaldi Gideon, Hendra Setiawan/Mohammad Ahsan, dan Fajar Alfian/Muhammad Rian Ardianto.</p> <p>Di babak kedua, Kevin/Marcus yang merupakan unggulan pertama akan berhadapan dengan pemenang dari Giovanni Greco/Kevin Strobl dengan Keiichiro Matsui/Yoshinori Takeuchi. Sedangkan Fajar/Rian menunggu pemenang dari Bjarne Geiss/Jan Colin Volker dengan Solis Jonathan/Anibal Marroquin.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Pram/Yere Kalah Akibat Tak Bisa Keluar dari Tekanan Hoki/Kobayashi',
                'slug' => 'pramyere-kalah-akibat-tak-bisa-keluar-dari-tekanan-hokikobayashi',
                'excerpt' => 'Ganda muda Indonesia Pramudya Kusumawardana/Yeremia Erich Yoche Yacob',
                'body' => '<p>Ganda muda Indonesia Pramudya Kusumawardana/Yeremia Erich Yoche Yacob Rambitan kalah di laga pertama BWF World Tour Finals 2021. Mereka gagal lepas dari tekanan.</p> <p>Pramudya Kusumawardana/Yeremia Erich Yoche Yacob Rambitan menghadapi ganda Jepang Takuro Hoki/Yugo Kobayashi pada partai pertama BWF World Tour Finals 2021, di Bali International Convention Center, Rabu (1/12/2021) sore. Pram/Yere takluk 21-14 dan 21-19 dari jawara Indonesia Masters 2021 tersebut.</p>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        Article::insert($post2);
    }
}

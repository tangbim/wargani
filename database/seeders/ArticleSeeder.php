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
    $post2 = [

      [
        'category_id' => 1,
        'user_id' => 2,
        'image' => 'https://i.ibb.co/yq1tYsz/ole-gunnar-solskjaer-1d1a478.jpg',
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
        'user_id' => 2,
        'image' => 'https://i.ibb.co/SnCnY0C/kepa-arrizabalaga-ee15531.jpg',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/hCLfPFC/massimiliano-allegri-169.jpg',
        'title' => "Ballon d'Or 2021: Allegri Akui Messi yang Terbaik Secara Teknik",
        'slug' => "ballon-dor-2021-allegri-akui-messi-yang-terbaik-secara-teknik",
        'excerpt' => 'Massimilano Allegri mengomentari Lionel Messi',
        'body' => "<p>Turin - Massimilano Allegri mengomentari Lionel Messi, pemenang Ballon d'Or 2021. Striker Argentina itu dinilai memang yang terbaik secara teknik.</p> <p>Messi memenangkan Ballon d'Or 2021 pada Selasa (30/11/2021) dini hari WIB. Itu menjadi bola emas ketujuh yang diraih La Pulga, mengungguli Cristiano Ronaldo, yang baru mengoleksi 5 gelar Ballon d'Or.</p> <p>Messi mengalahkan Robert Lewandowski dan Jorginho dalam pemungutan suara. Sementara Ronaldo cuma menempati urutan ke-6 dalam hasil akhir Ballon d'Or kemarin.</p> <p>Kemenangan Messi sendiri kemudian dipertanyakan banyak pihak. Sebab, pemain yang kini membela Paris Saint-Germain itu dinilai tak lebih garang ketimbang Lewandowski.</p> <p>Sepanjang musim 2020/2021, saat masih berseragam Barcelona, Messi memenangkan Copa del Rey dan mengantar Timnas Argentina juara Copa America. Catatan golnya mencapai 41 gol di 2021.</p> <p>Sementara Lewandowski lebih garang sepanjang 2021, dengan mengemas 64 gol. Penyerang 33 tahun itu juga mengantar Bayern Munich memenangkan trofi utama Bundesliga serta Piala Super Jerman.</p> <p>Massimilano Allegri, pelatih Juventus, turut terseret dalam perdebatan itu. Ia menyebut, bahwa Lionel Messi memang yang terbaik secara teknik, meski keputusan Ballon d'Or 2021 kemarin tetap menghadirkan tanda tanya. </p> <p>'Mereka memilih Messi dan kami dapat mengatakan, bahwa secara teknis, dia adalah pemain terbaik di dunia,' kata Allegri, seperti dikutip dari Tuttomercatoweb.</p>",
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'category_id' => 1,
        'user_id' => 3,
        'image' => 'https://i.ibb.co/mRGG3vg/kylian-mbappe.jpg',
        'title' => 'Menanti Akhir Drama, Mbappe-Madrid-PSG',
        'slug' => 'menanti-akhir-drama-mbappe-madrid-psg',
        'excerpt' => 'Real Madrid menanti kedatangan Kylian Mbappe',
        'body' => '<p>Madrid - Real Madrid menanti kedatangan Kylian Mbappe. Madrid pede betul, Mbappe tidak akan memperpanjang kontrak di PSG!</p> <p>Kylian Mbappe akan habis kontraknya di Paris Saint-Germain (PSG) pada 30 Juni 2022 alias di musim panas mendatang. Kini, pihak PSG masih berusaha untuk menahan Mbappe lebih lama.</p> <p>PSG akan melakukan negosiasi secara resmi di 1 Januari 2022, pada fase bursa transfer musim dingin. Itu memang jadi momentum pihak klub-klub di Eropa untuk bernegosiasi untuk memperpanjang kontrak para pemainnya.</p> <p>Dilansir dari Marca, Kylian Mbappe sudah dirumorkan akan menuju Real Madrid. Mbappe dinilai butuh tantangan baru.</p> <p>Mbappe masih muda, masih 22 tahun. Namun, Mbappe punya prestasi selangit seperti sudah menjuarai Ligue 1 dan membawa Timnas Prancis juara Piala Dunia 2018.</p> <p>Real Madrid pun sudah dari dua musim terakhir merayu Kylian Mbappe untuk datang. Sayangnya belum juga kejadian, karena PSG memagari dengan harga mahal.</p> <p>Kini Madrid percaya, Mbappe tidak akan memperpanjang kontraknya di PSG. Los Blancos yakin, Mbappe siap mengemas koper menuju Madrid!</p>',
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'category_id' => 1,
        'user_id' => 3,
        'image' => 'https://i.ibb.co/vwDdn41/b20e8c97-b085-41a3-8fc0-a582f87b51f0.jpg',
        'title' => 'Geger Dokter Gadungan, PSS Sleman Laporkan Elwizan Aminudin ke Polisi',
        'slug' => 'geger-dokter-gadungan-pss-sleman-laporkan-elwizan-aminudin-ke-polisi',
        'excerpt' => 'Manajemen PSS Sleman akhirnya menempuh jalur hukum dan resmi melaporkan Elwizan Aminudin ke Polres Sleman',
        'body' => "<p>Sleman - Manajemen PSS Sleman akhirnya menempuh jalur hukum dan resmi melaporkan Elwizan Aminudin ke Polres Sleman. Elwizan disebut-sebut sebagai dokter gadungan.
        Elwizan sendiri telah mengundurkan diri dari PSS Sleman pada 1 Desember lalu. Namun bukan berarti kasus ini berhenti. Direktur Operasional PT PSS Hempri Suyatna didampingi dengan didampingi tim hukum PT PSS telah melaporkan kasus ini pada Jumat (3/12) lalu.</p> <p>Ia membawa berkas lengkap berupa bukti kontrak dan berkas verifikasi ijazah dari Universitas Syiah Kuala Aceh milik Elwizan.</p> <p>'Kami membawa berkas lengkap dari internal PT PSS berupa kontrak kerja dari yang bersangkutan. Kemudian berkas verifikasi keabsahan ijazah No: 5752/UN11/WA.01.00/2021 dari Universitas Syiah Kuala, Banda Aceh yang menyatakan ijazahnya palsu,' kata Hempri kepada wartawan, Sabtu (4/12/2021).</p> <p>Kasus dokter gadungan yang menyangkut nama Elwizan ini langsung menyita perhatian. Apalagi pria yang biasa disapa dokter Amin itu pernah menjadi dokter beberapa tim klub lokal seperti Persita, Barito Putera, Bali United, PS Tira, Kalteng, bahkan Timnas Indonesia U-19.</p> <p>'Setelah verifikasi data dari pihak Polres Sleman, laporan kami sudah diproses. Kami mendapatkan Surat Tanda Terima Laporan Polisi, Nomor: STTLP-B/1573/XII/2021/SPKT/POLRES SLEMAN/POLDA DIY,' imbuhnya.</p>",
        'published_at' => now(),
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'category_id' => 2,
        'user_id' => 3,
        'image' => 'https://i.ibb.co/NmDcKQB/timnas-basket-2.jpg',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/TL7QDns/akademi-basket-ganesha-warriors-169.jpg',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/fV3Chms/development-basketball-league-dbl-169.jpg',
        'title' => 'DBL Diperluas dengan Prokes Ketat',
        'slug' => 'dbl-diperluas-dengan-prokes-ketat',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/HH19tN5/lima-basketball-169.jpg',
        'title' => '13 Tim Bersaing Jadi yang Terbaik di LIMA Basketball 2021',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/B35V0Gw/timnas-basket-43.jpg',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/nM9K6q8/greysiaapriyani-2.jpg',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/qxzV79d/download.jpg',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/jvsKymb/jonatan-christie-indonesia-open-2021-169.jpg',
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
        'user_id' => 3,
        'image' => 'https://i.ibb.co/7gZWp33/curi-perhatian-kevin-sanjaya-tampir-mempesona-dengan-headband-169.jpg',
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
        'user_id' => 4,
        'image' => 'https://i.ibb.co/rtRDnMd/pramudya-kusumawardanayeremia-erich-yoche-yacob-rambitan-169.jpg',
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

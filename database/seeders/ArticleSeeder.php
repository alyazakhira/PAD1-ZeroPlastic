<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Article::create([
            'judul' => 'Sampah, Mengintip Masa Depan yang Ditimbulkannya',
            'id_penulis' => 1,
            'ar_slug' => 'sampah-mengintip-masa-depan-yang-ditimbulkannya-1',
            'ringkasan' => 'Apa yang akan terjadi bila sampah tidak dikelola dengan baik?',
            'artikel' => 'Dilansir dari situs resmi DPR RI, Anggota Komisi IV DPR RI Suhardi Duka menyoroti data 
            Direktorat Jenderal Pengelolaan Sampah, Limbah dan B3 (Ditjen PSLB3) Kementerian 
            Lingkungan Hidup dan Kehutanan (KLHK) pada tahun 2021, yang menyebutkan volume sampah 
            di Indonesia tercatat 68,5 juta ton dan tahun 2022 naik mencapai 70 juta ton.(sementara ini masih WIP)',
            'gambar' => 'placeholder-1200x600.png',
            'diunggah_pada' => '2022-10-11',
        ]);

        Article::create([
            'judul' => 'Pemanasan Global dan Dampak Buruknya Bagi Kehidupan Bumi',
            'id_penulis' => 1,
            'ar_slug' => 'pemanasan-global-dan-dampak-buruknya-bagi-kehidupan-bumi-2',
            'ringkasan' => 'Pemanasan global adalah suatu fenomena global yang dipicu oleh kegiatan manusia terutama yang berkaitan dengan penggunaan bahan fosil dan kegiatan alih guna lahan.',
            'artikel' => 'Bumi adalah habitat dan tempat tinggal untuk berbagai makhluk hidup yang ada di dunia, termasuk manusia. Namun, semakin hari bumi semakin memanas akibat pemanasan global. Apakah Sobat SMP sudah mengetahui apa itu pemanasan global?
            Pemanasan global adalah suatu fenomena global yang dipicu oleh kegiatan manusia terutama yang berkaitan dengan penggunaan bahan fosil dan kegiatan alih guna lahan. Kegiatan ini menghasilkan gas-gas yang semakin lama semakin banyak jumlahnya di atmosfer, terutama gas karbon dioksida (CO2) melalui proses yang disebut efek rumah kaca.
            Efek rumah kaca (greenhouse effect) adalah sebuah istilah yang cukup erat kaitannya dengan pemanasan global. Disebut dengan efek rumah kaca karena  adanya peningkatan suhu bumi akibat suhu panas yang terjebak di dalam atmosfer bumi. Prosesnya mirip seperti rumah kaca yang berfungsi untuk menjaga kehangatan suhu tanaman di dalamnya. Peningkatan suhu dalam rumah kaca terjadi karena adanya pantulan sinar matahari oleh benda-benda yang ada di dalam rumah kaca yang terhalang oleh dinding kaca, maka udara panas tidak dapat keluar (greenhouse effect).
            Apa yang menjadi penyebab pemanasan global?
            Di atas permukaan bumi, efek rumah kaca juga bisa terjadi. Hal ini dapat terjadi karena sebanyak 25% energi matahari yang masuk ke bumi dipantulkan oleh awan atau partikel lain di atmosfer, 25% diserap awan, 45% diabsorpsi permukaan bumi, dan 5% lainnya dipantulkan kembali oleh permukaan bumi.
            Energi matahari yang telah diabsorpsi akan dipantulkan kembali dalam bentuk radiasi inframerah oleh awan dan juga permukaan bumi. Namun, energi yang dipantulkan tersebut bisa terhalang oleh karbon dioksida (CO2) dan gas lainnya yang terdapat di atmosfer bumi. Banyaknya CO2 di udara menjadi salah satu faktor terjadinya pemanasan global.
            Sebenarnya zat CO2 dibutuhkan dan akan diserap oleh tumbuhan untuk melakukan proses fotosintesis. Akan tetapi, karena semakin menipisnya hutan dan lahan hijau membuat kadar CO2  di atmosfer tidak terkendali. Faktor pemanasan global lainnya adalah seperti gas industri, polusi bahan bakar, dan gas metana yang dihasilkan dari sampah plastik.
            Seperti apa dampak yang ditimbulkan dari pemanasan global?Tadi sudah sempat dijelaskan bahwa pemanasan global akan meningkatkan suhu di permukaan bumi. Suhu bumi yang meningkat dapat menyebabkan berbagai dampak buruk bagi lingkungan dan ekosistem lainnya karena adanya perubahan iklim dunia.
            Salah satu contoh dampak yang ditimbulkan dari pemanasan global adalah mencairnya glasier dan es di kutub. Hal ini akan mengakibatkan naiknya permukaan air laut dan membuat sebagian daerah terendam air laut.
            Contoh dampak buruk lainnya dari pemanasan global adalah seperti curah hujan yang tinggi, kegagalan panen, hilangnya terumbu karang, kepunahan berbagai spesies, hingga penipisan lapisan ozon pada atmosfer bumi.
            Lantas, bagaimana kita dapat menanggulangi pemanasan global?
            Terdapat berbagai cara untuk menanggulangi permasalahan yang sudah sejak lama ini. Salah satunya adalah dengan mengurangi pemakaian bahan bakar fosil seperti minyak dan batu bara. Pasalnya, bahan bakar fosil adalah penyebab terbesar tingginya kadar CO2 di bumi.
            Cara lainnya adalah dengan melakukan reboisasi, yaitu proses penanaman kembali hutan yang telah ditebang dan memperbanyak lahan hijau. Dengan begitu, CO2 akan terserap oleh tumbuhan dan mengurangi dampak pemanasan global.
            Terakhir, kita bisa mengurangi pemakaian plastik untuk menghindari tumpukan limbah plastik yang bisa menghasilkan gas metana. Selain itu, limbah plastik akan sulit terurai oleh lingkungan. Mulailah beralih ke bahan yang lebih mudah terurai.',
            'gambar' => 'placeholder-1200x600.png',
            'diunggah_pada' => '2022-10-11',
        ]);

        Article::create([
            'judul' => 'Mengenal Plastik dan Penanganan Sampah Plastik',
            'id_penulis' => 1,
            'ar_slug' => 'mengenal-plastik-dan-penanganan-sampah-plastik-3',
            'ringkasan' => 'Keberadaan sampah plastik harus diakui tidak dapat terhindarkan, hampir di setiap penjuru lingkungan sekitar kita.',
            'artikel' => 'Keberadaan sampah plastik harus diakui tidak dapat terhindarkan, hampir di setiap penjuru lingkungan sekitar kita.

            Jika dicermati, saat ini berbagai produk plastik terdapat kode-kode tertentu. Kode menyatakan jenis plastik yang membentuk material, sehingga mempermudah untuk mendaur ulang.
            
            Contohnya adalah kode segitiga 3 R dengan angka di tengah-tengahnya. Angka menunjukkan jenis plastiknya dan kadang pula diikuti dengan singkatan, seperti:
            
            PET (Polietilena Tereftalat), pada umumnya terdapat pada botol minuman atau bahan konsumsi lainnya yang cair.
            
            HDPE (High Densy Polyethylene) atau Polietilena berdensitas tinggi, biasanya terdapat pada botol detergen.
            
            PVC (Polivinil Klorid), biasanya terdapat pada pipa dan furniture lainnya.
            
            LDPE (Low Density Polyethylene) atau Polietilena berdensitas rendah, biasanya terdapat pada bungkus makanan.
            
            PP (Polipropilena), umumnya terdapat pada tutup botol minuman, sedotan, dan beberapa jenis mainan.
            
            PS (Polistirena), umumnya terdapat pada kotak makanan, kotak pembungkus daging, cangkir, dan peralatan dapur lainnya.
            
            Semakin bertambahnya tingkat konsumsi masyarakat, maka akan semakin bertambah pula sampah plastik yang dihasilkan. Wajar jika kemudian menjadi permasalahan lingkungan yang serius.
            
            Perlu diketahui bahwa sampah plastik sangat sulit untuk hancur. Dibutuhkan puluhan bahkan ratusan tahun agar terurai. Oleh karena itu, diperlukan solusi alternatif agar keberadaan sampah plastik dapat ditangani dengan baik. Alternatif penanganannya antara lain dengan 6 R, sebagai berikut:
            
            Reuse (Memanfaatkan ulang)
            Menggunakan kembali barang bekas tanpa pengolahan dahulu untuk tujuan yang sama atau berbeda dari tujuan bahan awal. Contohnya: memakai sampah plastik sebagai bahan baku kerajinan, ban bekas dikemas menjadi tempat duduk, dan sebagainya.
            
            Recycle (Mengolah kembali)
            Memanfaatkan barang bekas dengan mengolah materinya untuk digunakan lebih lanjut. Contoh: sampah organik diolah menjadi kompos.
            
            Reduce (Mengurangi)
            Merupakan semua bentuk kegiatan atau perilaku yang dapat mengurangi produksi sampah. Contoh: pergi belanja membawa keranjang/tas belanja dari rumah.
            
            Replace (Mengganti)
            Menggantikan dengan bahan yang bias dipakai ulang sebagai upaya mengubah kebiasaan yang dapat mempercepat produksi sampah. Contoh: membungkus kue menggunakan daun pisang.
            
            Refill (Mengisi kembali)
            Mengisi kembali wadah-wadah produk kemasan yang habis dipakai. Contoh: memanfaatkan botol parfum untuk diisi kembali dengan parfum isi ulang.
            
            Repair (Memperbaiki)
            Melakukan pemeliharaan atau perawatan agar tidak menambah produksi sampah. Contoh: sandal yang talinya putus, diperbaiki kembali dengan tali yang baru, tanpa perlu beli sandal baru selama masih layak.
            
            Di samping alternatif solusi di atas, dilansir dari berbagai sumber, saat ini juga sedang dikembangkan pemanfaatan sampah plastik sebagai sumber energi. Semoga berhasil dan terealisir dengan baik.',
            'gambar' => 'placeholder-1200x600.png',
            'diunggah_pada' => '2022-10-11',
        ]);
    }
}


<?php include 'partial/header.php'; ?>
    <!-- Navbar End -->

<style>
    @media  (max-width: 768px) {
        .kursus-feature h6{
            font-size: 25px  !important;
}
}

.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
    z-index: 99999999;
}


.popup-content {
    background-color: #fff;
    width: 80%;
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
}

@media screen and (min-width: 1200px) {
    .popup-content {
        width: 50%;
        max-width: 800px; 
    }
}
    
</style>
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Detail Kursus</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase"> Kursus</p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Detail Kursus</p>
            </div>
           
        </div>
    </div>
    <!-- Header End -->

   
    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-prmr text-uppercase pb-2">Detail Kursus</h6>
                            <h1 class="display-4">Java Beginner</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4"  src="assets/course_image/1c260dcf-09be-11ee-8734-005056470331.jpg" alt="Image">
                        <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                        
                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.</p>
                    </div>

                    <h2 class="mb-3">Kursus Lainnya</h2>
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="assets/course_image/1c260dcf-09be-11ee-8734-005056470331.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Web design & development courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-tag mr-2"></i><small>Rp</small> 10000000</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="assets/course_image/1c260dcf-09be-11ee-8734-005056470331.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Web design & development courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-tag mr-2"></i><small>Rp</small> 10000000</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="assets/course_image/1c260dcf-09be-11ee-8734-005056470331.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Web design & development courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-tag mr-2"></i><small>Rp</small> 10000000</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
               </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-primary kursus-feature mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Fitur-Fitur Kursus</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Instruktur</p>
                            <p class="text-white my-3">John Doe</p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Tag Kursus</p>
                            <p class="text-white my-3">Java</p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Jenis Program</p>
                            <p class="text-white my-3">Webinar</p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Level</p>
                            <p class="text-white my-3">Beginner</p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Jumlah Modul</p>
                            <p class="text-white my-3">20</p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Tanggal mulai</p>
                            <p class="text-white my-3">23 September 2023</p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Harga Normal</p>
                            <p class="text-white my-3"><del>RP 4000000</del> </p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Diskon</p>
                            <p class="text-white my-3">20% </p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <p class="text-white my-3">Karga Khusus</p>
                            <p class="text-white my-3">Rp 3500000 </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom px-4">
                        <p class="text-white my-3">Referral code</p>
                            <input class="my-3 py-1 px-2" placeholder="Input Referral Code" type="text" p>
                        </div>

                        <!-- <div class="d-flex justify-content-between px-4">
                        <h6 class="text-white my-3 mr-2"><input type="checkbox"/></h6>
                            <h6 class="text-white my-3">(Opsional) Biaya tambahan sertifikat BNSP* </h6>
                        </div> -->

                        <!-- <div class="flex-row justify-content-between px-4  py-2">
                            <div>
                                 <input  class="text-white my-1 mr-2"  type="checkbox"  name="refund">
                                <a class="text-white my-3" href="https://softuni.id/terms/Return-and-Refund-Policy_Softuni-Indonesia.pdf" target="_blank" >Return & Refund Policy</a>
                            </div>
                            <div class="">
                                <input type="checkbox"  class="text-white my-1 mr-2"  name="terms">
                                <a href="https://softuni.id/terms/Terms-and-Conditions_SoftUni-Indonesia-Site.pdf" class="text-white my-3" target="_blank" >Terms & Conditions</a>
                            </div>
                        </div> -->
                        <div class="px-4 mt-3">
                        <a type="button"  data-toggle="modal" data-target="#syaratKetentuan" class="btn btn-block btn-warning py-3 px-5">Daftar Sekarang</a>
                        </div>
                    </div>
<!-- 
                    <div class="mb-5">
                        <h2 class="mb-3">Categories</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Java</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Python</a>
                                <span class="badge badge-primary badge-pill">131</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">C#</a>
                                <span class="badge badge-primary badge-pill">78</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Java Script</a>
                                <span class="badge badge-primary badge-pill">56</span>
                            </li>
                        </ul>
                    </div> -->

                    <div class="mb-5">
                        <h2 class="mb-4">Recent Courses</h2>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Java Beginner</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-tag text-primary mr-2"></i>Rp 2000000</small>
                                </div>
                            </div>
                        </a>

                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Java Beginner</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-tag text-primary mr-2"></i>Rp 2000000</small>
                                </div>
                            </div>
                        </a>

                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Java Beginner</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-tag text-primary mr-2"></i>Rp 2000000</small>
                                </div>
                            </div>
                        </a>

                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Java Beginner</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-tag text-primary mr-2"></i>Rp 2000000</small>
                                </div>
                            </div>
                        </a>
                       
                      
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->



<!-- Modal -->
<div class="modal fade" id="syaratKetentuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Syarat dan Ketentuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container mt-3">
  <div class="">
    <p class="text-center">TERMS &amp; CONDITIONS</p>
    <h4 class="text-center">(Syarat &amp; Ketentuan Penggunaan Softuni.id)</h4>
    <p><br /></p>
    <h4>PERJANJIAN PENGGUNAAN LAYANAN SITUS</h4>
    <p>
      Perjanjian Penggunaan Layanan Situs Softuni.id (Perjanjian) antara
      Pengguna yaitu orang yang mengunjungi dan menikmati layanan dari
      softuni.id dan Softuni.id sebagai penyedia layanan edukasi online yang
      digunakan, ini memuat syarat-syarat dan ketentuan penggunaan layanan situs
      Softuni.id yang berlaku bagi Pengguna untuk dapat menggunakan situs
      Softuni.id. Untuk selanjutnya Softuni.id disebut juga istilah “Kami”.
    </p>
    <p><br /></p>
    <p>
      Perhatian di mohon untuk membaca dengan seksama Perjanjian ini. Anda harus
      membaca, memahami, menerima dan menyetujui semua persyaratan dan ketentuan
      dalam Perjanjian ini sebelum menggunakan aplikasi dan/atau menerima konten
      yang terdapat di dalamnya.
    </p>
    <p><br /></p>
    <p>
      Dengan menggunakan aplikasi dan/atau melanjutkan akses/berselancar pada
      situs softuni.id, Anda telah menyetujui persyaratan dan ketentuan dari
      Kami, dan oleh karena itu membuktikan Anda telah menyetujui untuk terikat
      dalam suatu kontrak dengan Kami dan menyatakan persetujuan untuk dapat
      menerima layanan dan akses atas seluruh konten yang terdapat dalam situs
      aplikasi ini.
    </p>
    <p><br /></p>
    <p>
      Apabila Anda tidak menerima dan menyetujui Perjanjian ini, maka Anda tidak
      diperkenankan untuk mengakses lebih lanjut layanan Softuni.id dan
      dipersilahkan untuk meninggalkan situs Softuni.id.
    </p>
    <p><br /></p>
    <p>
      Setiap kegiatan terkait dengan penggunaan situs, maka baik Penyelenggara,
      Pengguna dalam hal ini termasuk juga adalah Guru dan Murid yang
      menggunakan layanan Softuni.id, dilindungi secara hukum melalui Undang –
      Undang Republik Indonesia No.11 Tahun 2008 tentang Informasi dan
      Teknologi, Undang-Undang Republik Indonesia No. 19 Tahun 2002 tentang Hak
      Cipta, dan terhadap segala bentuk perikatan yang timbul dari segala
      aktifitas pada situs Softuni.id telah memenuhi kaidah dan syarat sahnya
      suatu perikatan sebagaimana yang tercantum dalam Kitab Undang-Undang Hukum
      Perdata Indonesia.
    </p>
    <p><br /></p>
    <p><br /></p>
    <h4>PENDAHULUAN</h4>
    <p>
      Perjanjian diatur dan diinterprestasikan berdasarkan Hukum Republik
      Indonesia (Indonesia). Pihak-pihak yang disebutkan dalam Perjanjian ini
      dengan ini telah sepakat untuk tunduk kepada pengadilan di Indonesia.
    </p>
    <p><br /></p>
    <p>
      Dalam Perjanjian ini yang dimaksud dengan “Pengguna” adalah orang
      perseorangan, baik Warga Negara Indonesia, Warga Negara Asing, maupun
      Badan Hukum dengan kemampuan menggunakan komputer, jaringan, komputer
      dan/atau media elektronik lainnya mampu untuk mengakses situs Softuni.id
      sesuai dengan keperluannya. Dalam hal ini termasuk juga Pengguna yang
      telah mendaftarkan diri pada situs Softuni.id sebagai Pengguna Terdaftar,
      Pengguna tersebut membayar untuk layanan tertentu yang mungkin disediakan
      oleh situs Softuni.id.
    </p>
    <p><br /></p>
    <p>
      Dengan mengakses atau menggunakan situs Softuni.id ini, Pengguna yang
      termasuk dalam kategori Pengguna sebagaimana disebutkan dalam poin di atas
      secara sadar dan tanpa paksaan dari pihak manapun menyatakan diri setuju
      untuk menerima semua syarat dan ketentuan yang tercantum dalam Perjanjian
      ini. Sebagai Pengguna, Pengguna terikat dengan syarat dan ketentuan dalam
      Perjanjian yang berlaku, dalam hal Pengguna mengakses atau menggunakan
      situs Softuni.id ini. Jika Pengguna tidak menerima semua syarat dan
      ketentuan dalam Perjanjian ini, Pengguna diharuskan untuk langsung
      meninggalkan situs Softuni.id.
    </p>
    <p><br /></p>
    <p>
      Kami dapat mengubah atau memperbarui Perjanjian ini setiap waktu dengan
      mencantumkan Perjanjian yang telah diubah atau diperbarui di dalam situs
      dan persyaratan dan ketentuan yang telah diubah dan diperbarui akan segera
      berlaku setelah persyaratan dan ketentuan yang telah diubah dan diperbarui
      dicantumkan oleh situs Softuni.id, dan Pengguna diwajibkan untuk setiap
      saat membaca persyaratan dan ketentuan baru dan dianggap telah menyetujui
      perubahan atau pembaruan yang dilakukan, apabila telah dimuat dalam situs
      Softuni.id dan Pengguna terus menggunakan situs Softuni.id.
    </p>
    <p><br /></p>
    <p>
      Dalam situs Softuni.id akan atau telah terdapat sambungan atau hyperlink
      (Pranala) yang terhubung situs milik pihak ketiga yang terdapat dalam
      Pranala di luar situs Softuni.id dan Kami dengan ini menyatakan tidak
      bertanggung jawab atas isi Pranala di luar situs Softuni.id atau situs
      yang disediakan atau dipasang oleh pihak ketiga (Isi Pihak Ketiga), baik
      yang dimasukkan oleh pengguna yang tidak disebutkan namanya atau oleh
      penyedia isi yang memperoleh pembayaran, atau bukan dibuat oleh Kami.
      Dengan ditampilkannya Isi Pihak Ketiga dalam situs
    </p>
    <p>
      Softuni.id, tidak berarti bahwa Kami maupun pihak terafiliasi, pejabat,
      petugas atau pegawainya menjalin hubungan kerja sebagai agen penjualan
      dengan pihak ketiga tersebut. Isi Pihak Ketiga sepenuhnya merupakan
      tanggung jawab pihak penyedia isi. Kami tidak menjamin bahwa semua isi
      pihak ketiga akurat, tidak melanggar susila, absah atau adalah yang
      sesungguhnya, dan tidak bertanggung jawab jika Pengguna menganggap bahwa
      isi pihak ketiga tersebut dapat dipercaya isinya. Selain itu Kami tidak
      bertanggung jawab atas kegiatan yang dilakukan oleh Pengguna dan tidak
      dapat dimintai pertanggungjawaban oleh siapa pun berkaitan dengan kerugian
      yang diderita pihak lain sebagai akibat perbuatan Pengguna.
    </p>
    <p><br /></p>
    <h4>KETENTUAN UMUM PENGGUNAAN SITUS</h4>
    <p>
      Saat mengunjungi dan menggunakan situs ini, termasuk setiap fitur dan
      layanannya, Setiap Pengguna wajib untuk mematuhi ketentuan Pengguna Situs
      berikut ini:
    </p>
    <ol id="l1">
      <ol id="l2">
        <li data-list-text="1.1">
          <p>
            Pengguna minimum berusia 17 Tahun, atau yang telah memiliki
            persyaratan yang diakui secara hukum termasuk dalam kategori
            Pengguna yang sudah dewasa / terlepas dari Hukum Perlindungan Anak.
          </p>
        </li>
        <li data-list-text="1.2">
          <p>
            Setiap Pengguna sepakat untuk tidak menyalin, menggunakan atau
            mengunduh semua informasi, tulisan, gambar, rekaman video,
            direktori, dokumen, database atau iklan yang ada di situs Softuni.id
            atau yang diperoleh melalui Situs softuni.id dengan tujuan apapun
            termasuk dan tidak terbatas pada di antaranya menjual kembali atau
            menyebarkan kembali isi situs Softuni.id, melakukan pemasaran massal
            (lewat email, SMS, surat biasa atau lainnya), menjalankan usaha
            untuk menyaingi situs Softuni.id atau memanfaatkan situs Softuni.id
            untuk keperluan komersial di luar kegiatan transaksi dengan
            Softuni.id. Pengguna tidak diperbolehkan mengambil isi situs
            Softuni.id secara sistematis untuk membuat atau menyusun, baik
            secara langsung maupun tidak langsung, koleksi, kompilasi, database
            atau direktori (baik menggunakan perangkat otomatis ataupun proses
            manual) tanpa izin tertulis dari Kami. Selain itu Pengguna tidak
            diperkenankan menggunakan isi atau bahan tersebut di atas untuk
            tujuan apa pun yang tidak disebutkan di dalam Perjanjian ini.
          </p>
        </li>
      </ol>
    </ol>
    <p><br /></p>
    <p>
      Saat mengunjungi dan menggunakan situs Softuni.id, termasuk setiap fitur
      dan layanannya, Setiap Pengguna tidak perkenankan untuk:
    </p>
    <ol id="l3">
      <ol id="l4">
        <li data-list-text="2.1">
          <p>
            Melanggar setiap hukum yang berlaku (termasuk tetapi tidak terbatas
            pada peraturan mengenai pengawasan ekspor, perlindungan konsumen,
            persaingan tidak sehat, anti diskriminasi atau iklan palsu), hak-hak
            pihak lain baik hak intelektual, asasi, dan lainnya, dan
            aturan-aturan yang diatur pada Perjanjian ini.
          </p>
        </li>
        <li data-list-text="2.2">
          <p>
            Memberikan informasi dan konten yang salah, tidak akurat, bersifat
            menyesatkan, bersifat memfitnah, bersifat asusila, mengandung
            pornografi, bersifat diskriminasi atau rasis.
          </p>
        </li>
        <li data-list-text="2.3">
          <p>
            Mengambil tindakan yang dapat mengacaukan sistem saran atau masukan
            dan atau peringkat (seperti menampilkan, mengimpor atau mengekspor
            informasi atau masukan dari situs luar atau menggunakannya untuk
            tujuan yang tidak terkait dengan situs Softuni.id).
          </p>
        </li>
        <li data-list-text="2.4">
          <p>
            memberikan account di situs Softuni.id (termasuk saran atau masukan)
            dan nama account kepada pihak lain tanpa sepengetahuan Kami.
          </p>
        </li>
        <li data-list-text="2.5">
          <p>
            Menyebarkan spam, hal-hal yang tidak berasusila, atau pesan
            elektronik yang berjumlah besar, pesan bersambung.
          </p>
        </li>
        <li data-list-text="2.6">
          <p>
            Menyebarkan virus atau seluruh teknologi lainnya yang sejenis yang
            dapat merusak dan/atau merugikan situs Softuni.id, afiliasinya dan
            pengguna lainnya.
          </p>
        </li>
        <li data-list-text="2.7">
          <p>
            Memasukkan atau memindahkan fitur pada situs Softuni.id tidak
            terkecuali tanpa sepengetahuan dan persetujuan dari Kami.
          </p>
        </li>
        <li data-list-text="2.8">
          <p>
            Menyimpan, meniru, mengubah, atau menyebarkan konten dan fitur situs
            Softuni.id, termasuk cara pelayanan, konten, hak cipta dan
            intelektual yang terdapat pada situs Softuni.id.
          </p>
        </li>
        <li data-list-text="2.9">
          <p>
            Mengambil atau mengumpulkan informasi dari pengguna lain, termasuk
            alamat email, tanpa sepengetahuan pengguna lain.
          </p>
        </li>
      </ol>
    </ol>
    <p><br /></p>
    <p>
      Kami berhak membatasi atau tidak memberikan akses, atau memberikan akses
      yang berbeda untuk dapat membuka situs Softuni.id dan fitur di dalamnya
      kepada masing-masing Pengguna, atau mengganti salah satu fitur atau
      memasukkan fitur baru tanpa ada pemberitahuan sebelumnya. Setiap Pengguna
      sadar bahwa jika situs Softuni.id tidak dapat digunakan seluruhnya atau
      sebagian karena alasan apapun, maka kegiatan apapun yang dilakukan
      Pengguna dapat terganggu. Setiap Pengguna dengan ini sepakat bahwa karena
      alasan apapun membebaskan Kami dari segala bentuk pertanggungjawaban
      terhadap Pengguna atau terhadap pihak ketiga jika yang bersangkutan tidak
      dapat menggunakan situs Softuni.id (baik karena gangguan, dibatasinya
      akses, dilakukannya perubahan fitur atau tidak dimasukkannya lagi fitur
      tertentu atau karena alasan lain); atau jika komunikasi atau transmisi
      tertunda, gagal atau tidak dapat berlangsung; atau jika timbul kerugian
      (secara langsung, tidak langsung) karena digunakannya atau tidak dapat
      digunakannya situs Softuni.id atau salah satu fitur di dalamnya.
    </p>
    <p>
      Dengan terus melakukan akses atau terus menggunakan situs Softuni.id,
      Pengguna dianggap telah membaca, memahami dan menyetujui ketentuan situs
      Softuni.id tentang Privacy Policy yang mengatur masalah penggunaan
      informasi yang dimasukkan masing-masing Pengguna ke dalam situs
      Softuni.id. Pengguna menerima ketentuan ini serta tambahan atau setiap
      perubahan atau pembaruannya. Pengguna memahami dan mengetahui secara sadar
      bahwa Kami dapat mengubah ketentuan tentang Kerahasiaan Pribadi ini
      sewaktu-waktu dan akan memuat versi terbarunya di situs Softuni.id. Jika
      terus menggunakan situs Softuni.id, Pengguna dianggap menerima dan
      menyetujui ketentuan tentang Privacy Policy yang tercantum di situs
      Softuni.id pada saat digunakan.
    </p>
    <p>
      Pengguna mengetahui dan menyetujui dengan sadar bahwa harga yang tercantum
      pada situs Softuni.id dapat mengalami perubahan secara sewaktu-waktu dan
      tanpa pemberitahuan terlebih dahulu. Dan akses situs ini hanya
      diperkenankan untuk keperluan dan kepentingan edukasi dan informasi
      terkait dengan layanan situs ini.
    </p>
    <p>
      Pengguna tidak diperkenankan untuk mereproduksi, mendistribusikan,
      memajang, menjual, menyewakan, mengirimkan, membuat karya turunan,
      menerjemahkan, memodifikasi, merekayasa balik, membongkar, mengurai atau
      mengeksploitasi situs ini.
    </p>
    <p><br /></p>
    <p>
      Pengguna tidak diperkenankan untuk memuat dan menerbitkan konten yang:
      3.1Melanggar hak cipta, paten, merek dagang, merek layanan, rahasia
      dagang,
    </p>
    <p>atau hak kepemilikan lainnya.</p>
    <p>
      3.2Mengancam, tidak senonoh, pornografi atau bisa menimbulkan segala
      kewajiban Hukum perdata atau pidana Indonesia atau hukum internasional.
    </p>
    <p>
      3.3Meretas, bug, virus, worm, pintu perangkap, trojan horse atau kode dan
      properti berbahaya lainnya.
    </p>
    <p><br /></p>
    <h4>PENGGUNA TERDAFTAR – MEMBERSHIP (CUSTOMER DATA PRIVACY POLICY)</h4>
    <p>
      Menjadi Pengguna Terdaftar, selanjutnya akan disebut sebagai &quot;Member
      Softuni.id&quot;, tidak dipungut biaya / gratis.
    </p>
    <p>
      Dengan memilih untuk membuat akun sebagai member dari situs Softuni.id,
      maka Anda akan bersedia berbagi informasi data diri untuk keperluan akun
      dan password ketika menyelesaikan proses registrasi.
    </p>
    <p>
      Member Softuni.id bertanggung jawab untuk menjaga kerahasiaan dan keamanan
      atas nama akun dan password serta pengguna terdaftar bertanggung jawab
      sepenuhnya atas segala kegiatan yang mengatasnamakan nama akun pengguna
      terdaftar.
    </p>
    <p>
      Kami dengan sepenuhnya berhak untuk membatasi, memblokir atau mengakhiri
      pelayanan dari suatu akun, melarang akses ke situs Softuni.id dan konten,
      layanan, dan memperlambat atau menghapus hosted content, dan mengambil
      langkah-langkah hukum untuk menjaga Member Softuni.id atau pengguna lain
      jika Kami menganggap Member Softuni.id atau pengguna lain melanggar
      hukum-hukum yang berlaku, melanggar hak milik intelektual dari pihak
      terkait, atau melakukan suatu pelanggaran yang melanggar hal-hal yang
      tertera pada Perjanjian ini.
    </p>
    <p>
      Member softuni.id tidak diperkenankan menjual, berupaya menjual,
      menawarkan untuk menjual, memberikan, menyerahkan atau mengalihkan Akun,
      Identitas Pengguna atau Sandi kepada pihak ketiga tanpa sepengetahuan dan
      persetujuan tertulis sebelumnya dari Kami. Kami dapat menangguhkan atau
      menghentikan Akun Member Softuni.id atau Akun pihak yang menerima
      pengalihan dari Member Softuni.id yang dijual, ditawarkan untuk dijual,
      diberikan, diserahkan atau dialihkan
    </p>
    <p>
      dengan melanggar ketentuan dalam Pasal ini. Apabila dengan keterbatasan
      kemampuan Kami dalam mengidentifikasi pelanggaran ini, maka seluruh
      akibat, resiko adalah merupakan tanggung jawab dari Member Softuni.id yang
      mengalihkan.
    </p>
    <p><br /></p>
    <p>Member Softuni.id menyetujui untuk:</p>
    <ol id="l5">
      <ol id="l6">
        <li data-list-text="4.1">
          <p>
            Segera memberitahukan kepada Kami setiap adanya dugaan penggunaan
            yang tidak sah / valid dengan pengatasnamaan nama akun Member Anda.
          </p>
        </li>
        <li data-list-text="4.2">
          <p>
            Memastikan bahwa Member Softuni.id keluar (logout) dari akun pada
            setiap akhir dari aktivitas pada situs Softuni.id untuk menghindari
            kemungkinan terjadinya penyalahgunaan atas akun yang bersangkutan.
          </p>
        </li>
      </ol>
    </ol>
    <p><br /></p>
    <h4>HAK DAN KEWAJIBAN PENGGUNA</h4>
    <p>
      Setiap Pengguna berkewajiban untuk membayar penuh atas transaksi yang
      dilakukan sesuai dengan ketentuan transaksi dan pembayaran.
    </p>
    <p>
      Setiap Pengguna bertanggung jawab atas seluruh hal yang dilakukan di situs
      Softuni.id yang pada atas nama Pengguna tersebut.
    </p>
    <p>
      Setiap Pengguna bertanggung jawab sepenuhnya jika Pengguna melakukan
      pelanggaran terhadap ketentuan-ketentuan yang telah dirincikan pada
      Perjanjian ini, dan menyetujui untuk melepaskan Kami beserta afiliasinya
      atas seluruh kerugian yang diakibatkan oleh pelanggaran yang dilakukan
      oleh Pengguna.
    </p>
    <p>
      Pengguna berhak mendapatkan layanan yang sesuai dan telah dibayar penuh
      sebelumnya oleh Pengguna atau sesuai dengan ketentuan pembayaran yang ada,
      pembayaran tidak dapat dikembalikan atau dibatalkan secara sepihak oleh
      Pengguna.
    </p>
    <p>
      Pengguna berhak mendapatkan layanan yang telah dibayar penuh sepanjang
      layanan tersebut dicantumkan dengan harga dan rabat yang benar dan tidak
      mengandung informasi yang salah termasuk tidak terbatas pada akibat
      kesalahan pengetikan maupun kesalahan sistim operasional situs Softuni.id.
    </p>
    <p><br /></p>
    <h4>DESKRIPSI PRODUK / LAYANAN</h4>
    <p>
      Softuni.id selalu berusaha untuk memberikan deskripsi layanan jasa
      seakurat mungkin. Tetapi kami tidak dapat 100% menjamin bahwa seluruh
      deskripsi atau konten yang terdapat di dalam website adalah akurat,
      lengkap, terbaru, atau bebas dari error.
    </p>
    <p>
      Member Softuni.id berhak mendapatkan layanan yang telah dijanjikan pada
      setiap deskripsi layanan yang disediakan oleh situs Softuni.id, jika tidak
      maka Member Softuni.id dapat mengajukan permintaan pengembalian dana
      layanan Softuni.id.
    </p>
    <h4>HARGA</h4>
    <p>
      Jika dalam keadaan tertentu, terdapat kesalahan harga ataupun informasi
      mengenai suatu layanan produk tertentu yang disebabkan oleh kesalahan
      pengetikan (Typo) atau kesalahan harga dan informasi yang berasal dari
      pusat Softuni.id maupun human error dan system error, kami berhak untuk
      menolak ataupun membatalkan pesanan yang menggunakan harga yang salah
      termasuk pesanan yang sudah dibayarkan. Dan kami tidak bertanggung jawab
      jika Anda menjual/memasarkan kembali produk Kami sebelum adanya
      kesepakatan atau proses transaksi antara pihak Kami dengan Anda selaku
      pelanggan/pengunjung situs web Kami.
    </p>
    <p><br /></p>
    <h4>REVIEW&amp;KOMENTAR</h4>
    <p>
      Seluruh Komentar dan Review yang dituliskan pada situs Softuni.id akan
      dikategorikan dan diperlakukan sebagai konten yang bersifat tidak rahasia
      melalui moderasi dari pihak Softuni.id
    </p>
    <p>
      Review yang telah dituliskan menjadi milik Softuni.id dan tidak dapat
      dikembalikan. Anda dilarang menulis dengan menggunakan identitas orang
      lain.
    </p>
    <p>
      Anda dilarang untuk menuliskan komentar atau review yang mengandung
      kalimat pelecehan terhadap Softuni.id atau pihak ketiga lainnya.
    </p>
    <p>
      Softuni.id berhak merubah atau menghapus komentar dan review yang
      mengandung unsur kalimat yang tidak layak tayang (SARA, Pornografi,
      Pelecehan, Penghinaan, Pencemaran , dsb).
    </p>
    <p><br /></p>
    <h4>KETENTUAN PEMBAYARAN</h4>
    <p>
      Kami bekerja sama dengan penyedia jasa perbankan/pembayaran yang
      terpercaya dalam menyediakan berbagai metode pembayaran yang dapat
      digunakan oleh Pengguna.
    </p>
    <p>
      Setiap Pengguna berhak untuk memilih metode pembayaran yang telah
      disediakan oleh Kami, yang mana Pengguna merasa lebih nyaman dan mudah
      dalam bertransaksi pada situs Softuni.id, di mana setiap biaya transaksi
      pembayaran akan ditangguhkan kepada Pengguna tersebut.
    </p>
    <p>
      Setiap Pengguna berkewajiban untuk membayar penuh atas pemesanan yang
      dilakukan dalam jangka waktu yang ditentukan oleh Kami spesifik untuk
      setiap metode pembayaran sebelum Kami dapat memproses lebih lanjut atas
      pemesanan Pengguna. Bilamana Pengguna belum melaksanakan pembayaran dalam
      kurun waktu yang ditentukan maka Kami berhak menyatakan bahwa pemesanan
      telah dibatalkan oleh Pengguna tersebut.
    </p>
    <p>
      Setiap Pengguna dapat mengklarifikasi transaksi pembayaran yang telah
      dilaksanakan secara langsung ke penyedia jasa perbankan yang bekerja sama
      dengan Kami sesuai dengan syarat dan ketentuan yang berlaku.
    </p>
    <p><br /></p>
    <h4>TRANSAKSI</h4>
    <p>
      Harga yang tertera di katalog layanan produk situs Softuni.id belum
      termasuk biaya lainnya seperti pajak dan biaya transaksi yang dikenakan
      oleh pihak ketiga selaku penyedia jasa keuangan.
    </p>
    <p>
      Untuk pembelian layanan produk Softuni.id di mana pesanan akan di proses
      setelah pembayaran diterima dan dikonfirmasi oleh pihak Softuni.id. Lama
      waktu proses konfirmasi disesuaikan dengan trafik pada saat berlangsung.
    </p>
    <p>
      Setiap layanan produk yang dibeli dari Softuni.id memiliki masa waktu
      berlaku yang disesuaikan dengan pemilihan layanan produk dan apabila
      layanan produk telah usai maka Member Softuni.id maka masa akses layanan
      akan dihentikan oleh pihak Softuni.id
    </p>
    <p>
      Layanan produk Softuni.id yang telah dibeli tidak dapat dikembalikan atau
      ditukar dengan layanan Softuni.id lainnya, kecuali ada perjanjian terlebih
      dahulu.
    </p>
    <p>
      Segala usaha maksimal telah dilakukan untuk menyakinkan ketepatan seluruh
      informasi yang dimuat. Softuni.id tidak dapat menjamin dengan segala
      hormat akan ketepatan data tersebut.
    </p>
    <p>
      Jika dalam masa layanan produk, terjadi masalah atau error, silakan
      menghubungi Technical Center Softuni.id yang tertera pada situs
      Softuni.id.
    </p>
    <h4>KEAMANAN DAN KEBIJAKAN KARTU PEMBAYARAN</h4>
    <p>
      Kami berusaha memberikan kemudahan dan kepastian bagi pelanggan dalam
      melakukan transaksi dengan Softuni.id dengan mengimplementasikan suatu
      sistem pembayaran online dengan menggunakan pilihan sistem pembayaran dari
      Visa/Master dan semua transaksi akan diproses dalam mata uang Rupiah
      Indonesia.
    </p>
    <p>
      Untuk keamanan data pelanggan, Kami tidak akan menyimpan data atau
      informasi mengenai kartu kredit atau pun payment card lainnya yang
      sifatnya pribadi bagi, sehingga kami memastikan data-data payment card
      akan tetap aman.
    </p>
    <p>
      Proses pembayaran order Anda akan Kami pastikan aman dengan protokol
      Secure Sockets Layer (SSL) di mana SSL menyediakan keamanan penuh setiap
      pelanggan dan kebebasan untuk belanja online tanpa rasa khawatir mengenai
      kemungkinan pencurian informasi kartu kredit, dan guna mencegah informasi
      tersebut ditangkap, diinterfensi atau dirubah.
    </p>
    <p><br /></p>
    <h4>LINKS</h4>
    <p>
      Situs Softuni.id dapat berisi link internet ke situs lainnya yang dimiliki
      dan dioperasikan oleh pihak ketiga. Perlu Anda ketahui, bahwa Softuni.id
      tidak bertanggung jawab terhadap pengoperasian ataupun konten yang
      terletak di situs tersebut.
    </p>
    <p><br /></p>
    <h4>HAK MILIK INTELEKTUAL</h4>
    <p>
      Softuni.id adalah platform belajar edukasi online di Indonesia yang
      berafiliasi dengan Softuni.org yang dikelola dan dioperasikan oleh
      Software University Global yang menjadi pemilik atau pemegang sah semua
      hak atas Situs dan konten situs dengan penyerahan hak cipta dari
      pembuat/developer website. Seluruh konten yang terdapat di dalam situs ini
      mencakup hak milik intelektual yang dilindungi oleh undang-undang hak
      cipta dan undang-undang yang melindungi kekayaan intelektual lainnya yang
      berlaku di seluruh dunia. Semua hak milik dan hak milik intelektual atas
      situs ini dan isinya tetap pada Kami, dan sebagiannya berafiliasi pada
      pemilik lisensi isi situs Softuni.org.
    </p>
    <p>
      Situs softuni.id, nama, dan ikon serta logo terkait merupakan merek dagang
      terdaftar di berbagai wilayah hukum dan dilindungi undang-undang tentang
      hak cipta, merek dagang atau hak milik kekayaan intelektual lainnya.
      Dilarang keras menggunakan, mengubah, atau memasang merek-merek tersebut
      di atas untuk kepentingan pribadi dan untuk mendeskriditkan Softuni.id.
    </p>
    <p><br /></p>
    <h4>PEMBERITAHUAN</h4>
    <p>
      Semua pemberitahuan atau permintaan informasi kepada atau tentang Kami
      akan diproses jika dibuat secara tertulis dan dikirimkan kepada:
      SOFTUNI.ID, Jalan Wolter Monginsidi No. 71, RT.1/RW.4, Kebayoran Baru,
      Jakarta Selatan, DKI Jakarta, 12180.
    </p>
    <p><br /></p>
    <p>
      Semua pemberitahuan atau permintaan kepada atau tentang Pengguna akan
      diproses jika diserahkan langsung, dikirimkan melalui kurir, surat
      tercatat, faksimili atau email ke alamat surat, faks atau alamat email
      yang diberikan oleh Pengguna kepada Kami atau dengan cara memasang
      pemberitahuan atau permintaan tersebut di satu tempat di situs Softuni.id
      yang dapat diakses oleh umum tanpa dikenai biaya. Pemberitahuan kepada
      Pengguna akan dianggap sudah diterima oleh Pengguna tersebut jika dan
      bila:
    </p>
    <p><br /></p>
    <ol id="l7">
      <ol id="l8">
        <li data-list-text="5.1">
          <p>
            Kami dapat menunjukkan bahwa komunikasi itu, baik dalam bentuk fisik
            maupun elektronik, telah dikirimkan kepada Pengguna tersebut, atau
          </p>
        </li>
        <li data-list-text="5.2">
          <p>
            Kami sudah memasang pemberitahuan tersebut di tempat di situs
            Softuni.id yang dapat diakses oleh umum tanpa dikenai biaya.
          </p>
        </li>
      </ol>
    </ol>
    <h4>PENUTUP</h4>
    <p>
      Kami dan Pengguna merupakan hubungan independen dan tidak ada hubungan
      keagenan, kemitraan, usaha patungan, karyawan-perusahaan atau pemilik
      waralaba-pewaralaba yang akan dibuat atau dibuat dengan adanya Perjanjian
      ini.
    </p>
    <p>
      Judul di dalam Perjanjian ini dibuat sebagai acuan saja, dan sama sekali
      tidak menetapkan, membatasi, menjelaskan atau menjabarkan apa yang ada
      atau tercakup dalam pasal tersebut.
    </p>
    <p>
      Tidak dilaksanakannya hak Kami untuk menuntut hak Kami berdasarkan
      Perjanjian ini ataupun tidak diambilnya tindakan oleh Kami terhadap
      pelanggaran yang dilakukan oleh Pengguna terhadap Perjanjian ini tidak
      akan mengesampingkan atau tidak mengesampingkan hak Kami untuk mengambil
      tindakan terhadap pelanggaran serupa atau pelanggaran berikutnya.
    </p>
    <p class="text-center mt-5">RETURN &amp; REFUND POLICY</p>
    <h4 class="text-center">(Kebijakan Pengembalian Softuni.id)</h4>
    <p><br /></p>
    <h4>KEBIJAKAN ATAS KLAIM(REFUND/RETUR/GARANSIPOLICY)</h4>
    <p>Syarat dan Ketentuan Pengembalian Uang / Refund</p>
    <ol id="l9">
      <li data-list-text="A.">
        <p>
          Softuni.id akan memberikan refund pengembalian uang secara penuh
          apabila tidak dapat menyediakan layanan produk yang telah dibeli oleh
          Pengguna dan juga atau karena adanya kesalahan memasukan data ke
          situs.
        </p>
      </li>
      <li data-list-text="B.">
        <p>
          Terdapat ketentuan yang telah diatur pada awal pembelian layanan
          produk seperti halnya layanan produk Programming Basics
        </p>
      </li>
      <li data-list-text="C.">
        <p>
          Tim Softuni.id akan menerima pengajuan pengembalian uang dan melakukan
          prosesnya jika terdapat kendala pada pembelian dengan melampirkan
          bukti dan data diri yang sah menurut hukum.
        </p>
      </li>
      <li data-list-text="D.">
        <p>
          Softuni.id tidak dapat memberikan refund pengembalian uang apabila
          layanan produk telah selesai.
        </p>
      </li>
      <li data-list-text="E.">
        <p>
          Softuni.id tidak dapat memberikan refund pengembalian uang dengan
          alasan kesalahan peng-inputan data-data oleh Pengguna, baik itu
          merupakan data-data informasi alamat rumah, alamat pengiriman, dll.
        </p>
        <p><br /></p>
        <p>Prosedur atau tata cara untuk refund pengembalian uang adalah:</p>
        <ol id="l10">
          <li data-list-text="1.">
            <p>
              Pengguna melakukan permohonan refund melalui email atau telephone
              ke Softuni.id dengan melampirkan bukti pembayaran (Bank Transfer ,
              ATM, E-Banking, Setor Tunai, dll)
            </p>
          </li>
          <li data-list-text="2.">
            <p>
              Apabila refund pengembalian uang dikirimkan ke rekening Pengguna,
              Pengguna wajib memberikan data-data rekening bank yang dituju
              (Atas Nama , Nama Bank, No Rekening, Cabang Bank, Kota)
            </p>
          </li>
          <li data-list-text="3.">
            <p>
              Softuni.id akan melakukan pengecekan dan refund pengembalian uang
              ke Rekening / Kartu Kredit Pengguna selambat-lambatnya 30 hari
              kerja, terhitung dari diterimanya semua persyaratan secara
              lengkap.
            </p>
            <p><br /></p>
            <p>
              Syarat dan Ketentuan Pengembalian / Retur Dana Layanan Produk:
            </p>
            <ol id="l11">
              <li data-list-text="A.">
                <p>
                  Softuni.id tidak menerima penukaran layanan produk dengan
                  alasan apapun juga baik itu karena ketidakcocokan, kesalahan
                  order Pengguna dan sebagainya.
                </p>
              </li>
              <li data-list-text="B.">
                <p>
                  Jika memang terdapat tidak sesuai deskripsi layanan produk
                  yang diterima oleh Pengguna, maka Pengguna dapat menghubungi
                </p>
                <p>
                  Softuni.id dan tim Softuni.id akan melakukan pengecekkan
                  terkait laporan dan bukti yang ada pada lapangan.
                </p>
              </li>
              <li data-list-text="C.">
                <p>
                  Layanan produk Softuni.id memiliki masa di mana pada saat masa
                  tersebut selesai maka Softuni.id berhak untuk tidak
                  mengembalikan dana pembelian kepada Pengguna dengan alasan
                  apapun.
                </p>
              </li>
              <li data-list-text="D.">
                <p>
                  Untuk layanan produk promo, dana yang dikembalikan berdasarkan
                  jumlah yang di transfer oleh Pengguna ketika melakukan
                  pembelian layanan produk.
                </p>
              </li>
            </ol>
          </li>
        </ol>
      </li>
    </ol>
    <p><br /></p>
    <p>Lainnya</p>
    <ol id="l12">
      <li data-list-text="A.">
        <p class="s2">
          Peraturan ini dapat berubah sewaktu-waktu tanpa harus adanya
          pemberitahuan terlebih dahulu kepada Pengguna.
        </p>
      </li>
      <li data-list-text="B.">
        <p>
          Hal lainnya yang tidak tercantum didalam peraturan ini akan diatur
          kemudian oleh Softuni.id.
        </p>
      </li>
    </ol>
    <p><br /></p>
    <p>
      Persyaratan dan ketentuan ini adalah merupakan bagian dari Perjanjian Jual
      Beli Layanan /Jasa antara Softuni.id dan Pengguna.
    </p>
    <p>
      Apabila Pengguna tetap melanjutkan mengakses situs ini dan atau melakukan
      pemesanan atau transaksi pembelian, maka Pengguna dianggap telah membaca,
      memahami dan menyetujui seluruh isi dari syarat dan ketentuan yang
      berlaku.
    </p>
  </div>
</div>

      </div>
      <div class="text-center py-3">
  <form action="" method="POST">
    <input
      type="hidden"
      name="s0ftun1.1d"
      value="2b7029dc9317df1b502fd63629560d6c"
    />
    <input type="checkbox" id="agree"> <label for="agree">Saya setuju dengan syarat dan ketentuan:</label>
    <div class="d-block">
      <button
        class="btn btn-warning btn-start"
        type="submit"
        id="submitBtn"
        disabled
      >
        Daftar Sekarang
      </button>
    </div>
  </form>
</div>

    </div>
  </div>
</div>
<script>
  const agreeCheckbox = document.getElementById("agree");
  const submitBtn = document.getElementById("submitBtn");

  agreeCheckbox.addEventListener("change", function () {
    if (this.checked) {
      submitBtn.removeAttribute("disabled");
    } else {
      submitBtn.setAttribute("disabled", "disabled");
    }
  });
</script>
    <!-- Footer -->
    <?php include 'partial/footer.php'; ?>
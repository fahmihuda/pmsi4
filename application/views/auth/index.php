<link rel="stylesheet" href="<?= base_url('assets/css/faq.css'); ?>">
<nav class="navbar navbar-expand-lg navbar-dark bg-lima fixed-top">
  <div class="container">
  	<a href="#home"><img src="<?= base_url(); ?>assets/img/img_properties/diamondlogo.png" alt="logo" class="img-fluid rounded mb-2" width="70">
    <a style="font-size: 30px" class="page-scroll oleo-font navbar-brand" href="#home">Diamond Laundry</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav text-center">
        <a class="text-light nav-item nav-link page-scroll" href="#tentang">Tentang</a>
        <a class="text-light nav-item nav-link page-scroll" href="#faq">FAQ</a>
		<a class="text-light nav-item nav-link page-scroll" href="#kontak">Kontak</a>
      </div>
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link px-3 py-2 btn btn-satu rounded-pill text-dark" href="<?= base_url('auth/cekStatusPesanan'); ?>"><i class="fas fa-fw fa-check"></i> Cek Status Pesanan</a>
	</div>
    </div>
  </div>
</nav>

<section class="pt-5">
  <div class="jumbotron jumbotron-fluid bg-tiga">
    <div class="container text-white text-center">
      <img src="<?= base_url(); ?>assets/img/img_properties/diamondlogo.png" alt="logo" class="img-fluid rounded mb-2" width="200">
      <h1 class="text-shadow display-4 oleo-font font-weight-bold">Diamond Laundry</h1>
      <h4 class="text-shadow my-3">Mencuci dengan <span class="font-weight-bold">Cepat</span> dan menjaga pakaian tetap <span class="font-weight-bold">Berkualitas.</span></h4>
      <h4 class="text-shadow my-2">Namanya juga hidup pasti banyak <span class="font-weight-bold">Cobaan</span>, kalo banyak <span class="font-weight-bold">Cucian</span> bawa aja ke <span class="font-weight-bold oleo-font">Diamond Laundry.</span></h>
      <a href="#tentang" class="page-scroll px-3 py-2 btn btn-satu rounded-pill my-5 text-dark">Tentang Kami</a>
    </div>
  </div>
</section>

<section id="tentang" class="tentang bg-lima mt-n5 p-5">
  <div class="container">
    <div class="row">
      <div class="col-lg my-4 mb-5 text-white text-center">
        <h2>Tentang Kami</h2>
      </div>
    </div>
    <div class="row">
    	<div class="col-lg text-white text-center">
    		<p class="text-white"><span class="oleo-font">Diamon Laundry</span> adalah sistem laundry untuk membantu ibu rumah tangga agar <strong>meringankan</strong> pekerjaan rumahnya. Selain itu, aplikasi ini dapat melihat <strong>timeline</strong> pakaian yang anda laundry menggunakan fitur <strong>cek status pesanan</strong>. Sehingga, anda tidak perlu repot-repot datang ke tempat laundry bila pakaian anda yang sedang dilaundry belum selesai (Belum bisa diambil).</p>
    	</div>
    </div>
    <div class="row pb-3">
    	<div class="col-lg text-center">
			<a href="#faq" class="page-scroll px-3 py-2 btn btn-satu rounded-pill my-5 text-dark">FAQ</a>
    	</div>
    </div>
  </div>
</section>

<section id="faq" class="faq bg-tiga mt-n5 p-5">
	<div class="container">
		<div class="row">
			<div class="col-lg my-4 mb-5 text-shadow text-center">
				<h2>Frequently Asked Questions (FAQ)</h2>
			</div>
		</div>
		<div class="container">
		<div class="accordion">
			<div class="icon"></div>
			<h5>Apakah ada minimum order untuk laundry kiloan?</h5>
		</div>
		<div class="panel">
			<p>
			Ya, minimal laundry kiloan adalah 3 Kg, karena kami mengggunakan mesin modern yang kapasitasnya cukup besar 
			dan kami tidak mencampur dengan pakaian orang lain.
			</p>
		</div>
		<div class="accordion">
			<div class="icon"></div>
			<h5>Bagaimana proses laundry kiloan di Diamond Laundry?</h5>
		</div>
		<div class="panel">
			<p>
			Proses laundry kiloan yang kami lakukan adalah 1 mesin untuk 1 pelanggan 
			tanpa menandai pakaian/tagging, tanpa dicampur dengan pakaian orang lain, 
			tujuannya adalah untuk menjaga kebersihan dan tidak tertukar dengan pakaian pelanggan lain.
			</p>
		</div>
		<div class="accordion">
			<div class="icon"></div>
			<h5>Bagaimana proses laundry satuan di Diamond Laundry?</h5>
		</div>
		<div class="panel">
			<p>
			Proses laundry satuan yang kami lakukan adalah melakukan pemilahan 
			dan prosen laundry berdasarkan warna dan jenis bahan pakaian anda, 
			selanjutnya kami menggunakan detergen dan chemical terbaik untuk dapat 
			merawat pakaian anda sehingga warna terjaga tetap cerah. Jika terdapat 
			noda-noda pada pakaian anda, kami akan berusaha menghilangkan noda tersebut 
			dengan spotting agent terbaik kami.
			</p>
		</div>
		<div class="accordion">
			<div class="icon"></div>
			<h5>Bagaimana Cara Cek Status Laundry-an Saya?</h5>
		</div>
		<div class="panel">
			<p>
			Anda dapat memilih “Cek Status Pesanan” pada sistem yang terletak 
			pada header paling kanan. Setelah itu masukkan “Kode Invoice” yang 
			telah diberikan sebelumnya di awal pemesanan. Setelah itu masukkan 
			Kode Invoice dengan baik dan benar. Maka akan muncul status 
			pesanan Anda!			
			</p>
		</div>
		<div class="accordion">
			<div class="icon"></div>
			<h5>Bagaimana saat mengambil pesanan tapi nota hilang?</h5>
		</div>
		<div class="panel">
			<p>
			Pengambilan laundry WAJIB dengan membawa nota untuk 
			diserahkan kepada kasir. Jika nota hilang bisa dengan 
			menunjukan SMS notifikasi yang kami kirimkan melalui 
			SMS Center ketika laundry selesai, pastikan nomor handphone 
			anda yang aktif terdaftar pada sistem kami. Jika pengambilan 
			oleh orang lain maka WAJIB mengisi buku tamu/serah terima laundry 
			dengan menyerahkan fotocopy identitas diri (KTP/SIM)
			</p>
		</div>
		<div class="accordion">
			<div class="icon"></div>
			<h5>Bagaimana saya bisa mengajukan keluhan jika cucian saya bau setelah dikirim?</h5>
		</div>
		<div class="panel">
			<p>
			Anda dapat mengajukan keluhan setelah pesanan Anda dikirimkan, 
			maksimal 1 hari setelah dikirim. Dengan cara menghubungi layanan 
			pelanggan kami untuk menangani keluhan Anda melalui WhatsApp di 08111566664. 
			Kami akan meninjau keluhan Anda dan akan mencuci ulang cucian jika hasil 
			peninjauan benar kesalahan dari pelayanan kami.
			</p>
		</div>
		</div>
	</div>
	
</section>

<footer id="kontak" class="kontak bg-lima text-white p-4">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-6 my-3">
		    	<h3 class="oleo-font">Diamond Laundry</h3>
		    	<div class="row">
		    		<div class="col-lg">
						<span>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a>. CV DIAMOND WIRA SEJAHTERA</span>
		    		</div>
		    	</div>
			</div>
			<div class="col-lg-6 my-3">
        <h4>Kontak Kami</h4>
        <div class="row my-2 ml-0">
		  <div class="col-xs-1 mr-2"><a class="text-white" target="_blank" href="https://wa.me/+6285872323239?text=Selamat%20Datang%20di%20Diamond%20Laundry"><i class="fab fa-fw fa-whatsapp"></i></a></div>
          <div class="col-xs-1 mr-2"><a class="text-white" target="_blank" href="https://twitter.com"><i class="fab fa-fw fa-twitter"></i></a></div>
          <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://facebook.com"><i class="fab fa-fw fa-facebook"></i></a></div>
          <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://instagram.com"><i class="fab fa-fw fa-instagram"></i></a></div>
          <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://linkedin.com"><i class="fab fa-fw fa-linkedin-in"></i></a></div>
          <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://pinterest.com"><i class="fab fa-fw fa-pinterest"></i></a></div>
        </div>    
        <div class="row text-left my-2">
          <div class="col-lg-4">
            <i class="fas fa-fw fa-map-marker-alt"></i> Alamat 
          </div>
          <div class="col-lg-8">Komplek Jodoh Point Blok B No.7-8 Batam Kepulauan Riau Indonesia</div>
        </div>
      </div>
		</div>
		<div class="row">
			<div class="col-lg">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.169244038304!2d103.9436821142244!3d1.0335103627993276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d645c6d1e65%3A0xe7ba9d5d6484ab6a!2sBlk.%20B%20No.7%2C%20Sungai%20Lekop%2C%20Kec.%20Sagulung%2C%20Kota%20Batam%2C%20Kepulauan%20Riau%2029425!5e0!3m2!1sid!2sid!4v1665320184214!5m2!1sid!2sid" height="300" frameborder="0" style="border:0; margin-top: 15px;width: 100%" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
</footer>
<!-- Script -->
<script src="<?= base_url('assets/js/faq.js'); ?>"></script>
<link href="<?= base_url('assets/pages/css/about.min.css') ?>" rel="stylesheet" type="text/css" />
<div class="page-content-inner">
  <div class="row margin-bottom-40 about-header">
     <div class="col-md-12">
         <h1>Selamat Datang</h1>
         <?php if (!$this->session->login): ?>

           <h2>Segera daftarkan diri Anda, nikmati Materi lengkap dengan Kualitas materi yang baik</h2>
           <a href="<?= base_url('signup') ?>" class="btn btn-danger">JOIN US TODAY</a>
           <p class="" style="color: white">
             or
           </p>
           <a href="<?= base_url('signin') ?>" class="btn btn-success">SUDAH PUNYA AKUN</a>
         <?php endif; ?>
     </div>
  </div>
</div>

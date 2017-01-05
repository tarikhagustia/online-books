<link href="<?= base_url('assets/css/home.css') ?>" rel="stylesheet" type="text/css" />
<div class="page-content-inner">
  <div class="row margin-bottom-40 profile-header">
    <div class="prfile-body" style="margin-top: 20px;">
      <div class="col-sm-2">
        <div class="profile-picture" style="margin-top: 20px;">
          <img class="center-block img-responsive circle" src="/assets/images/hidayatkampai.png" alt="Hidayat Kampai" style="" />
        </div>
      </div>
      <div class="col-sm-10">
        <h2>Hidayat Kampai</h2>
        <p>
          Nama saya Hidayatullah,SE.,MSi.,Mkom.,Akt.,CA.,CPAI lebih dekenal dengan panggilan Hidayat Kampai,saya masuk ke dunia profesional Accountant sejak tahun 2007 menjadi seorang Ekternal Auditor. Latar belakang pendidikan antara lain : - S1 Akuntansi Universitas Trisakti - Akt Program Pendidikan Akuntansi Universitas Trisaksi - Magister Akuntansi Universitas Trisakti - Magister Ilmu Komputer Universitas Budi Luhur saya mengajar di kampus sejak tahun 2006 dan mengjara di beberapa kampus antara lain : - Universitas Trisakti - Trisakti School of Management - Binus University - Universitas Mercubuana Mata kuliah yang pernah saya ampu antara lain : - Akuntansi Keuangan - Akuntansi Biaya - Audit Eksternal - Audit Internal - Audit Kecurangan - Etika Profesi Akuntan - Etika Bisnis - Audit SIstem Informasi - Sistem Informasi Akuntansi - Lab Audit dengan ACL - Akuntansi dengan Myob
        </p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="portlet light portlet-fit ">
          <div class="portlet-title">
              <div class="caption">
                  <i class=" icon-layers font-green"></i>
                  <span class="caption-subject font-green bold uppercase">Uploads</span>
              </div>
          </div>
          <div class="portlet-body">
              <div class="mt-element-card mt-element-overlay">
                  <div class="row">
                    <?php foreach ($book_data as $key => $value): ?>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                          <div class="mt-card-item">
                              <div class="mt-card-avatar mt-overlay-1">
                                  <img src="<?php echo base_url('images/thumb_create/?image=' . base64_encode($value->book_source )) ?>" />
                                  <div class="mt-overlay">
                                      <ul class="mt-info">
                                          <li>
                                              <a class="btn default btn-outline" href="<?= base_url('book/view/'. $value->book_url) ?>">
                                                  BACA
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="mt-card-content">
                                  <h3 class="mt-card-name"><?= $value->book_name ?></h3>
                                  <p class="mt-card-desc font-grey-mint"><?= $value->category_name ?></p>
                                  <p>
                                    <strong><?= number_format($value->book_sheet) ?> Halaman</strong>
                                  </p>
                              </div>
                          </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

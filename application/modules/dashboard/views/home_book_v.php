
<link rel="stylesheet" href="/assets/vendors/owl-carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/vendors/owl-carousel/dist/assets/owl.theme.green.min.css">
<link href="<?= base_url('assets/css/home.css') ?>" rel="stylesheet" type="text/css" />
<div class="page-content-inner">
  <div class="row margin-bottom-40 profile-header">
    <div class="prfile-body" style="margin-top: 20px;">
      <div class="col-sm-2">
        <div class="profile-picture" style="margin-top: 20px;">
          <img class="center-block img-responsive circle" src="<?php echo modules::run('images/gravatar' , $author->author_email) ?>" alt="Hidayat Kampai" style="" width="100%"/>
        </div>
      </div>
      <div class="col-sm-10">
        <h2><?php echo $author->author_name ?></h2>
        <p>
          <?php echo $author->author_desc ?>
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
                  <div class="row owl-carousel">
                    <div class="">
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
</div>

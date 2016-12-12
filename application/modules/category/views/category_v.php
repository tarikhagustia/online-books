<div class="page-content-inner">
  <div class="row">
    <div class="col-md-12">
      <div class="portlet light portlet-fit ">
          <div class="portlet-title">
              <div class="caption">
                  <i class=" icon-layers font-green"></i>
                  <span class="caption-subject font-green bold uppercase">Kategori Buku</span>
              </div>
          </div>
          <div class="portlet-body">
              <div class="mt-element-card mt-element-overlay">
                  <div class="row">
                    <?php foreach ($book_data as $key => $value): ?>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                          <div class="mt-card-item">
                              <div class="mt-card-avatar mt-overlay-1">
                                  <img src="<?= base_url($value->book_images) ?>" />
                                  <div class="mt-overlay">
                                      <ul class="mt-info">
                                          <li>
                                              <a class="btn default btn-outline" href="javascript:;">
                                                  BACA
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="mt-card-content">
                                  <h3 class="mt-card-name"><?= $value->book_name ?></h3>
                                  <p class="mt-card-desc font-grey-mint"><?= $value->category_name ?></p>
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

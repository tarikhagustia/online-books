<link href="<?php echo base_url() ?>assets/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />
<div class="page-content-inner">
  <div class="profile">
    <div class="tabbable-line tabbable-full-width">
      <ul class="nav nav-tabs">
        <li class="active">
          <a href="#tab_1_1" data-toggle="tab"> Overview </a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1_1">
          <div class="row">
            <div class="col-md-3">
              <ul class="list-unstyled profile-nav">
                <li>
                  <img src="<?php echo base_url('images/thumb_create/' . base64_encode($book_data->book_source)) ?>" class="img-responsive pic-bordered" alt="<?php echo $book_data->book_name ?>" />
                </li>
                <?php if ($book_data->is_free): ?>
                  <li>
                    <div class="alert alert-success text-center">
                      GRATIS
                    </div>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-8 profile-info">
                  <h1 class="font-green sbold uppercase">
                    <a href="<?php echo base_url('book/read/'. $book_data->book_url) ?>"><?php echo $book_data->book_name ?></a>
                  </h1>
                  <div class="book_description">
                    <?php echo $book_data->book_description ?>
                  </div>

                  <ul class="list-inline">
                  <li>
                      <i class="fa fa-calendar"></i><?php echo $this->format->date_indonesia($book_data->created_at) ?>
                  <li>
                      <a href="#"><i class="fa fa-briefcase"></i><?php echo $book_data->category_name ?></a>
                  </li>
                  </ul>
                  <?php if ($this->session->flashdata()): ?>
                    <div class="alert alert-success">
                      <?php echo $this->session->flashdata('status') ?>
                    </div>
                  <?php endif; ?>
                  <div class="row">
                    <div class="col-sm-12">
                        <a href="<?php echo base_url('book/read/'. $book_data->book_url) ?>" class="btn btn-primary">Baca</a>
                        <?php if ($book_data->library_id == null): ?>
                          <a href="<?= base_url('perpustakaan/simpan/'. $book_data->book_url) ?>" class="btn btn-warning">Simpan Ke Perpustakaan</a>
                        <?php else: ?>
                          <a href="#" class="btn btn-warning" disabled>Materi sudah ada di perpustakaan anda</a>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
                            <!--end col-md-8-->
                <div class="col-md-4">
                  <div class="portlet sale-summary">
                    <div class="portlet-title">
                      <div class="caption font-red sbold"> Ringkasan Pembaca </div>
                      <div class="tools">
                        <a class="reload" href="javascript:;"> </a>
                      </div>
                    </div>
                    <div class="portlet-body">
                      <ul class="list-unstyled">
                        <li>
                          <span class="sale-info"> Total pembaca</span>
                          <span class="sale-num"> <?= count($reader); ?> </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                            <!--end col-md-4-->
              </div>
                          <!--end row-->
                          <div class="tabbable-line tabbable-custom-profile">
                            <ul class="nav nav-tabs">
                              <li class="active">
                                <a href="#tab_1_11" data-toggle="tab"> Pembaca Terakhir </a>
                              </li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane active" id="tab_1_11">
                                <div class="portlet-body">
                                  <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                      <tr>
                                        <th>
                                          User
                                        </th>
                                        <th>
                                          Tanggal baca
                                        </th>
                                      </tr>
                                    </thead>
                                      <tbody>
                                        <?php foreach ($reader as $key => $value): ?>
                                          <tr>
                                            <td>
                                              <a href="#"><?= $value->full_name ?></a>
                                            </td>
                                            <td>

                                              <?php
                                              // echo timespan($post_date, $now, $units);
                                              echo timespan(mysql_to_unix($value->created_at), time()). " ago";
                                              ?>
                                            </td>
                                          </tr>
                                        <?php endforeach; ?>
                                      </tbody>
                                    </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

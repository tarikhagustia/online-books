<div class="portlet light portlet-fit portlet-form " id="form_wizard_1">
  <div class="portlet-title">
      <div class="caption">
          <i class=" icon-layers font-green"></i>
          <span class="caption-subject font-green sbold uppercase">Upload buku</span>
      </div>
      <div class="actions">
          <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-cloud-upload"></i>
          </a>
          <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-wrench"></i>
          </a>
          <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-trash"></i>
          </a>
      </div>
  </div>
  <div class="portlet-body">
      <!-- BEGIN FORM-->


      <!-- <form action="#" class="form-horizontal"> -->
      <?php echo form_open_multipart('dashboard/upload', ['class' => 'form-horizontal']) ?>
          <div class="form-body">
              <?php echo modules::run('alert/validation'); ?>
              <?php echo modules::run('alert/show'); ?>
              <h3 class="form-section">Isi identitas Judul, nama Buku dan lampiran Cover Buku kamu</h3>
              <div class="form-group">
                  <label class="control-label col-md-3" for="book_name">Judul Buku</label>
                  <div class="col-md-4">
                      <input type="text" class="form-control" id="book_name" name="book_name" value="<?php echo set_value('book_name') ?>" />
                      <span class="help-block"> Tulis judul tanpa sepesial character </span>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="category_id">Kategori</label>
                  <div class="col-md-4">
                      <select class="form-control" name="category_id" id="category_id">
                        <?php foreach (modules::run('category/get_category') as $key => $value): ?>
                          <option value="<?php echo $value->category_id ?>" <?php if($value->category_id == set_value('category_id')): echo "selected"; endif; ?>><?php echo $value->category_name; ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="book_sheet">Jumlah Halaman</label>
                  <div class="col-md-4">
                      <input type="text" name="book_sheet" class="form-control" value="<?php echo set_value('book_sheet') ?>" />
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="book_sheet">Pilih Cover Buku</label>
                  <div class="col-md-4">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                      <div>
                          <span class="btn red btn-outline btn-file">
                              <span class="fileinput-new"> Select image </span>
                              <span class="fileinput-exists"> Change </span>
                              <input type="file" name="book_cover"> </span>
                          <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="book_sheet">Pilih Buku</label>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                     <div class="input-group input-large">
                         <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                             <i class="fa fa-file fileinput-exists"></i>&nbsp;
                             <span class="fileinput-filename"> </span>
                         </div>
                         <span class="input-group-addon btn default btn-file">
                             <span class="fileinput-new"> Select file </span>
                             <span class="fileinput-exists"> Change </span>
                             <input type="file" name="book_source"> </span>
                         <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                     </div>
                 </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3" for="book_sheet">Isi Keterangan</label>
                  <div class="col-md-9">
                    <textarea class="ckeditor form-control" name="book_description" rows="6"><?php echo set_value('book_description') ?></textarea>
                  </div>
                 </div>
              </div>
          </div>
          <div class="form-actions">
              <div class="row">
                  <div class="col-md-offset-3 col-md-9">
                      <button type="submit" class="btn green">Submit</button>
                      <button type="button" class="btn default">Cancel</button>
                  </div>
              </div>
          </div>
      </form>
      <!-- END FORM-->
  </div>
  </div>
  <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/vendors/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- <script src="<?php echo base_url() ?>assets/vendors/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/vendors/autosize/autosize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script> -->
        <!-- END PAGE LEVEL PLUGINS -->

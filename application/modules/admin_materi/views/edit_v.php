<div class="x_panel">
  <div class="x_title">
    <h2>Edit Materi</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo form_open_multipart('myadmin/materi/edit', ['class' => 'form-horizontal']);
    echo form_hidden('book_id', $materis->book_id);
    ?>
        <div class="form-body">
            <?php echo modules::run('alert/validation'); ?>
            <?php echo modules::run('alert/show'); ?>
            <div class="form-group">
                <label class="control-label col-md-3" for="book_name">Judul Materi</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="book_name" name="book_name" value="<?php echo set_value('book_name', $materis->book_name) ?>" />
                    <span class="help-block"> Tulis judul tanpa sepesial character </span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="category_id">Kategori</label>
                <div class="col-md-4">
                    <select class="form-control" name="category_id" id="category_id">
                      <?php foreach (modules::run('category/get_category') as $key => $value): ?>
                        <option value="<?php echo $value->category_id ?>" <?= ($value->category_id == $materis->category_id) ? "selected" : ""; ?> ><?php echo $value->category_name; ?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="book_sheet">Jumlah Halaman</label>
                <div class="col-md-4">
                    <input type="text" name="book_sheet" class="form-control" value="<?php echo $materis->book_sheet ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="book_sheet">Pilih Cover Materi</label>
                <div class="col-md-9">
                  <input type="file" name="book_cover">
                  <span class="help-block">Hanya bisa JPG dan PNG</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="book_sheet">Pilih Materi</label>
                <div class="col-md-9">
                  <input type="file" name="book_source">
                  <span class="help-block">Hanya bisa PDF, doc, Ppt</span>
                </div>
             </div>
             <div class="form-group">
                 <label class="control-label col-md-3" for="book_sheet">Apakah gratis ?</label>
                 <div class="col-md-9">
                   <input type="checkbox" name="is_free" value="on" <?= ($materis->is_free == true) ? "checked" : "" ; ?>> ya, Materi ini gratis
                 </div>
              </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="book_sheet">Isi Keterangan</label>
                <div class="col-md-9">
                  <textarea class="ckeditor form-control" name="book_description" rows="6" id="editor1"><?php echo $materis->book_description ?></textarea>
                </div>
               </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
  </div>
</div>
<script type="text/javascript">
   CKEDITOR.replace( 'editor1' );
</script>

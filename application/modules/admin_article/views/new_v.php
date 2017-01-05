<div class="x_panel">
  <div class="x_title">
    <h2>Edit Profil Author</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo modules::run('alert/show') ?>
    <?php echo form_open('myadmin/article/new'); ?>
      <div class="form-group">
        <label for="profile_name">Nama Artikel</label>
        <input class="form-control" type="text" name="article_name" value="" id="profile_picture" required/>
      </div>
      <div class="form-group">
        <label for="article_category">Kategori</label>
        <select class="form-control" name="article_category">
          <option value="Article">Artikel</option>
          <option value="FAQs">FAQss</option>
        </select>
      </div>
      <div class="form-group">
        <label for="article_desc">Keterangan</label>
        <textarea class="ckeditor form-control" name="article_desc" rows="6" id="editor1"><?php echo set_value('book_description') ?></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>
<script type="text/javascript">
   CKEDITOR.replace( 'editor1' );
</script>

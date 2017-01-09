<div class="x_panel">
  <div class="x_title">
    <h2>Edit Profil Author</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="alert alert-info">
      Profile picture menggunakan Gravatar
    </div>
    <?php echo modules::run('alert/show') ?>
    <?php echo form_open_multipart('myadmin/author/edit'); ?>
    <?php echo form_hidden('author_id', $author->author_id); ?>
      <div class="form-group">
        <label for="profile_name">Nama</label>
        <input class="form-control" type="text" name="profile_name" value="<?php echo set_value('profile_name', $author->author_name); ?>" id="profile_picture" required/>
      </div>
      <div class="form-group">
        <label for="profile_picture">Pilih foto profil</label>
        <input type="file" name="profile" value="">
      </div>
      <div class="form-group">
        <label for="profile_desc">Keterangan</label>
        <textarea name="profile_desc" class="form-control" rows="8" cols="40" id="profile_desc"><?php echo set_value('profile_desc', $author->author_desc); ?></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>

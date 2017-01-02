<div class="x_panel">
  <div class="x_title">
    <h2>Edit data <strong><?php echo $user->full_name ?></strong> </h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo validation_errors('<div class="alert alert-danger">' , '</div>'); ?>

    <?php
    echo form_open('myadmin/user/edit');
    echo form_hidden('user_id', $user->user_id);
    ?>
      <div class="form-group">
        <label for="full_name">Nama</label>
        <input type="full_name" class="form-control" id="full_name" placeholder="Nama Lengkap" name="full_name" value="<?php echo $user->full_name ?>">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email"  value="<?php echo $user->email ?>">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Kata Sandi" name="password">
      </div>
      <div class="form-group">
        <label for="cpassword">Konfirmasi Password</label>
        <input type="password" class="form-control" id="cpassword" placeholder="Kata Sandi" name="cpassword">
      </div>
      <div class="form-group">
        <label for="group_id">Akses</label>
        <select class="form-control" name="group_id">
          <?php foreach ($groups as $key => $value): ?>
            <option value="<?= $value->group_id ?>" <?php echo ($value->group_id == $user->group_id) ? "selected" : ""; ?>><?= $value->group_name ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="is_pay">Status keanggotaan</label>
        <select class="form-control" name="is_pay">
          <option value="0" <?php echo ($user->is_pay == false) ? "selected" : ""; ?>>Gratis</option>
          <option value="1" <?php echo ($user->is_pay == true) ? "selected" : ""; ?>>Premium</option>
        </select>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    <?php echo form_close() ?>
  </div>
</div>

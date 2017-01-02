<div class="x_panel">
  <div class="x_title">
    <h2>Lihat Pengguna</h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Settings 1</a>
          </li>
          <li><a href="#">Settings 2</a>
          </li>
        </ul>
      </li>
      <li><a class="close-link"><i class="fa fa-close"></i></a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo modules::run('alert/show') ?>
    <div class="table-responsive">
      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr class="headings">
            <th class="column-title"> No </th>
            <th class="column-title">Nama </th>
            <th class="column-title">Email </th>
            <th class="column-title">Akses </th>
            <th class="column-title">Status </th>
            <th class="column-title"> OPSI </th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($list as $key => $value): ?>
            <tr>
              <td><?php echo  $key+1; ?></td>
              <td><?php echo  $value->full_name; ?></td>
              <td><?php echo  $value->email; ?></td>
              <td><?php echo  $value->group_name; ?></td>
              <td><?php echo  ($value->is_pay == true) ? "Premium" : "Gratis"; ?></td>
              <td><a href="<?php echo base_url('myadmin/user/edit/'. $value->user_id) ?>">Edit</a> | <a href="<?php echo base_url('myadmin/user/delete/'. $value->user_id) ?>" onclick="return confirm('Menghapus pengguna akan menghapus semua buku yang diupload pengguna ini, apakah anda yakin ?')">Hapus</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

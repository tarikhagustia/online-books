<div class="x_panel">
  <div class="x_title">
    <h2>Lihat Kategori</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo modules::run('alert/show') ?>
    <?php echo modules::run('alert/validation') ?>
    <p>
      <a href="<?= base_url('myadmin/category/new') ?>" class="btn btn-info">Buat Kategori Baru</a>
    </p>
    <div class="table-responsive">
      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr class="headings">
            <th class="column-title"> No </th>
            <th class="column-title"> Nama Kategori </th>
            <th class="column-title"> Tanggal Ditambah </th>
            <th class="column-title"> OPSI </th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($list as $key => $value): ?>
            <tr>
              <td><?php echo  $key+1; ?></td>
              <td><?php echo  $value->category_name; ?></td>
              <td><?php echo  $value->created_at; ?></td>
              <td><a href="<?php echo base_url('myadmin/category/edit/'. $value->category_id) ?>">Edit</a> | <a href="<?php echo base_url('myadmin/category/delete/'. $value->category_id) ?>" onclick="return confirm('Menghapus Kategori akan menghapus semua buku yang diupload dengan kategori ini, apakah anda yakin ?')">Hapus</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

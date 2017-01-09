<div class="x_panel">
  <div class="x_title">
    <h2>List Artikel</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo modules::run('alert/show') ?>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Tanggal ditambah</th>
          <th>OPSI</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($materis as $key => $value): ?>
          <tr>
            <td>
              <?php echo $key+1; ?>
            </td>
            <td>
              <?php echo $value->article_name; ?>
            </td>
            <td>
              <?php echo $value->article_category; ?>
            </td>
            <td>
              <?php echo $value->updated_at; ?>
            </td>
            <td>
              <a href="<?php echo base_url('myadmin/article/edit/'. $value->article_id); ?>">Edit</a>
              |
              <a href="<?php echo base_url('myadmin/article/delete/'. $value->article_id); ?>">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

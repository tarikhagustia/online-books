<div class="x_panel">
  <?php if ($this->session->flashdata()): ?>
    <div class="alert alert-success">
      <?php echo $this->session->flashdata('status') ?>
    </div>
  <?php endif; ?>
  <div class="x_title">
    <h2>List Materi</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="table-responsive">
      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr class="headings">
            <th class="column-title">No </th>
            <th class="column-title">Nama Materi</th>
            <th class="column-title">Halaman </th>
            <th class="column-title">Tanggal diupload</th>
            <th class="column-title no-link last"><span class="nobr">Action</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($materis as $key => $value): ?>
            <tr>
              <td><?php echo $key+1; ?></td>
              <td><?php echo $value->book_name; ?></td>
              <td><?php echo $value->book_sheet; ?></td>
              <td><?php echo $value->created_at; ?></td>
              <td><?php echo anchor(base_url('myadmin/materi/edit/'. $value->book_id), 'Edit') ?>   | <a href="<?= base_url('myadmin/materi/hapus/'. $value->book_id) ?>" onClick = "return confirm('Apakah anda yakin igin menghapus Materi ini')">Hapus</a></td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

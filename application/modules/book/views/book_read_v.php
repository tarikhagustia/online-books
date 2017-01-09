<div class="page-content-inner">
    <div class="note note-info">
      <?php if ($this->session->is_pay == true || $book->is_free == true): ?>


        <h1><?php echo $book->book_name; ?></h1>
        <p>
          Tanggal terbit : <?= $book->created_at ?>
        </p>
        <br>
        <?php echo form_open('book/download') ?>
        <?php echo form_hidden('book_url', $book->book_url) ?>
          <button type="submit" name="button" class="btn btn-primary">Download</button>
        <?php echo form_close(); ?>

        <br>
        <div class="row">
          <div class="col-sm-12">
            <iframe src="<?php echo base_url($book->book_source) ?>" width="100%" height="500px"></iframe>
          </div>
        </div>
      <?php else: ?>
        <div class="alert alert-success">
          Maaf anda harus menjadi <strong>Premium member</strong> untuk Membaca / Mendownload Materi ini.
          <p>
            <a href="<?php echo base_url('faqs') ?>">Cara menjadi premium member</a>
          </p>
        </div>
      <?php endif; ?>
    </div>
</div>

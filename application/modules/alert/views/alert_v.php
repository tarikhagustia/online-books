<?php if ($this->session->flashdata()): ?>
<div class="alert alert-warning">
  <?php echo $this->session->flashdata('success') ?>
  <?php echo $this->session->flashdata('warning') ?>
  <?php echo $this->session->flashdata('danger') ?>
</div>
<?php endif; ?>

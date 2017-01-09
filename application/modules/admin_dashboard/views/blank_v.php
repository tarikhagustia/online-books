<div class="x_panel">
  <div class="x_title">
    <h2>Dashboard</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <h1>Selamat datang di Panel admin <?php echo $this->config->item('client_name') ?></h1>
    <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count"><?php echo number_format($s_users); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-book"></i> Total materi didownload</span>
              <div class="count"><?php echo number_format($s_download); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-eye"></i> Total Materi dibaca</span>
              <div class="count"><?php echo number_format($s_reader); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-book"></i> Total Materi</span>
              <div class="count"><?php echo number_format($s_materis); ?></div>
            </div>
          </div>
          <!-- /top tiles -->
  </div>
</div>

<?php
$category = modules::run('category/get_category');
$potongans = array_chunk($category, 10);
?>
<div class="hor-menu  ">
    <ul class="nav navbar-nav">
        <li class="menu-dropdown classic-menu-dropdown ">
            <a href="<?php echo base_url('dashboard') ?>">
              Home
            </a>
        </li>
        <li class="menu-dropdown mega-menu-dropdown  ">
            <a href="javascript:;"> Materi
                <span class="arrow"></span>
            </a>
            <ul class="dropdown-menu" style="min-width: 710px">
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <?php foreach ($potongans as $key => $categorys): ?>
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                  <?php foreach ($categorys as $key => $value): ?>
                                    <li>
                                      <a href="<?php echo base_url('category/'. $value->category_url) ?>"> <?php echo $value->category_name ?> </a>
                                    </li>
                                  <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="menu-dropdown mega-menu-dropdown  ">
            <a href="javascript:;"> Perpustakaan
                <span class="arrow"></span>
            </a>
            <ul class="dropdown-menu" style="min-width: 710px">
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <a href="<?php echo base_url('library/list') ?>">Daftar materi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="menu-dropdown classic-menu-dropdown ">
            <a href="<?php echo base_url('article') ?>">
              Artikel
            </a>
        </li>
        <li class="menu-dropdown classic-menu-dropdown ">
            <a href="<?php echo base_url('faqs') ?>">
              FAQs
            </a>
        </li>
        <?php if (!$this->session->login): ?>

        <li class="menu-dropdown mega-menu-dropdown  ">
            <a href="javascript:;"> Member
                <span class="arrow"></span>
            </a>
            <ul class="dropdown-menu" style="min-width: 710px">
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <a href="<?php echo base_url('signup') ?>">Registrasi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <a href="<?php echo base_url('signin') ?>">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
          </li>
        <?php endif; ?>
        <!-- <li class="menu-dropdown classi  c-menu-dropdown ">
            <a href="javascript:;"> Upload
                <span class="arrow"></span>
            </a>
            <ul class="dropdown-menu pull-left">
                <li class=" ">
                    <a href="<?=  base_url('dashboard/upload/?type=book') ?>" class="nav-link  ">
                        <i class="icon-graph"></i> Upload Buku
                    </a>
                </li>
            </ul>
        </li> -->
    </ul>
</div>

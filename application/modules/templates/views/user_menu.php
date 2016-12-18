<div class="hor-menu  ">
    <ul class="nav navbar-nav">
        <li class="menu-dropdown classic-menu-dropdown ">
            <a href="<?php echo base_url('dashboard') ?>">
              Home
            </a>
        </li>
        <li class="menu-dropdown mega-menu-dropdown  ">
            <a href="javascript:;"> Kategori Buku
                <span class="arrow"></span>
            </a>
            <ul class="dropdown-menu" style="min-width: 710px">
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                  <?php foreach (modules::run('category/get_category') as $key => $value): ?>
                                    <li>
                                        <a href="<?php echo base_url('category/'. $value->category_url) ?>"> <?php echo $value->category_name ?> </a>
                                    </li>
                                  <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>

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

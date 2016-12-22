<div class="page-content-inner">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green"></i>
                        <span class="caption-subject font-green bold uppercase">List materi</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Nama materi </th>
                                    <th> Kategori </th>
                                    <th> Status Buku </th>
                                    <th> Tanggal ditambah </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($books as $key => $value): ?>
                                <tr>
                                    <td> <?php echo $key+1; ?> </td>
                                    <td> <a href="<?= base_url('book/view/'. $value->book_url) ?>"><?= $value->book_name ?></a> </td>
                                    <td> <?= $value->category_name ?> </td>
                                    <td>
                                      <?php if ($value->is_free): ?>
                                        <span class="label label-success">GRATIS</span>
                                      <?php else: ?>
                                        <span class="label label-warning">BERBAYAR</span>
                                      <?php endif; ?>
                                    </td>
                                    <td>
                                        <?= $value->created_at; ?>
                                    </td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>

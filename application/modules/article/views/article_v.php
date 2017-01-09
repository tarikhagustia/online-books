<link rel="stylesheet" href="/assets/css/faq.css" media="screen" title="no title" charset="utf-8">
<!-- BEGIN PAGE CONTENT INNER -->
<div class="page-content-inner">
  <div class="faq-page faq-content-1">
    <div class="faq-content-container">
      <div class="row">
        <div class="col-md-12">
          <div class="faq-section ">
            <div class="panel-group accordion faq-content">
              <!--  -->
              <?php foreach ($articles as $key => $article): ?>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <i class="fa fa-circle"></i>
                    <a class="accordion-toggle" href="<?php echo base_url('article/read/'.$article->article_url . '.html') ?>"> <?php echo $article->article_name; ?></a>
                  </h4>
                </div>
                </div>
                <?php endforeach; ?>
                <!--  -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

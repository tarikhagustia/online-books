<link rel="stylesheet" href="/assets/css/faq.css" media="screen" title="no title" charset="utf-8">
<!-- BEGIN PAGE CONTENT INNER -->
<div class="page-content-inner">
  <div class="faq-page faq-content-1">
    <div class="faq-content-container">
      <div class="row">
        <div class="col-md-12">
          <div class="faq-section ">
            <h2 class="faq-title uppercase font-blue">General</h2>
            <div class="panel-group accordion faq-content" id="accordion1">
              <!--  -->
              <?php foreach ($faqs as $key => $faq): ?>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <i class="fa fa-circle"></i>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $faq->article_url ?>"> <?php echo $faq->article_name; ?></a>
                  </h4>
                </div>
                <div id="<?php echo $faq->article_url ?>" class="panel-collapse collapse">
                  <div class="panel-body">
                    <?php echo $faq->article_desc; ?>
                  </div>
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

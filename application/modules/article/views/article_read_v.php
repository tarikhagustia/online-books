<link href="/assets/css/blog.min.css" rel="stylesheet" type="text/css" />
<div class="page-content-inner">
  <div class="blog-page blog-content-2">
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-single-content bordered blog-container">
          <div class="blog-single-head">
            <h1 class="blog-single-head-title"><?php echo $article->article_name ?></h1>
            <div class="blog-single-head-date">
              <i class="icon-calendar font-blue"></i>
              <a href="javascript:;"><?php echo $article->updated_at ?></a>
            </div>
          </div>
          <div class="blog-single-desc">
            <?php echo $article->article_desc ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

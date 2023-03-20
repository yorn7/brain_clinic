<?php get_header();?>

<!-- page-title開始 -->
<div class="page__title">
  <h2 class="page-title__text">
    News<span>お知らせ</span>
  </h2>
  <div class="page-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri();?>/img/news/news.title_pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri();?>/img/news/news.title.jpg" alt="脳のイラストです。">
    </picture>
  </div>
</div>
<!-- page-title終了 -->
<!-- headline開始 -->
<div class="headline page__headline inner">
  <p class="before-page">home</p>
  <span>＞</span>
  <p class="current-page">お知らせ</p>
</div>
<!-- headline終了 -->
<div class="news-page__inner inner">
  <!-- news-items開始 -->
<section class="news-topics">
  <div class="news-topics__wrapper">

  <?php
   if(has_post_thumbnail()):
    $id=get_post_thumbnail_id();
    $img_src=wp_get_attachment_image_src($id)[0];
   endif;
   ?>

  <?php
      /**
     * メインループ開始位置
     */
    if(have_posts()):
      while(have_posts()): the_post();

  ?>
      <ul class="news-topic__items topic-items"> 
      <li class="news-topic__item topic-item">
        <a href="<?php the_permalink();?>">
          <div class="news-topic__wrapper">
            <div class="topic-content">
              <div class="news-item__meta topic-meta">
                <span class="news-item__category topic-category">
                <?php categories_label() ?>
                </span>
              </div>
              <h3 class="news-item__title topic-title"><?php the_title();?></h3>
              <time datetime="<?php the_time('Y.m.d');?>" class="news-item__date topic-date"><?php the_time('Y.m.d');?></time>
            </div>
            <div class="news-item__img topic-img">
              <img src="<?php echo $img_src;?>" alt="newsに関する画像">
            </div>
          </div>
        </a>
      </li>
    </ul>
  <div class="pagenation-wrapper">  
    <?php endwhile;

        /* 以下、ページャーの表示 */
        if ( function_exists( 'pagenation' ) ) :
            pagenation( $wp_query->max_num_pages, get_query_var( 'paged' ) );
        endif;

        else :
          echo 'まだ記事がありません。';
        endif;
    ?>
  </div>

  </div>
</section>
<!-- news-topics終了 -->

<div class="page-category__inner inner">
<?php get_sidebar(); ?>
</div>

<?php get_footer();?>
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
  <span class="arrow1">＞</span>
  <p class="current-page current">お知らせ</p>
  <span class="arrow2">＞</span>
  <p class="details-page"><?php if(get_the_category());?><?php echo get_the_category()[0]->name;?></p>
</div>
<!-- headline終了 -->

<div class="news-details__inner inner">
  <div class="news-details__wrapper">
    <div class="news-details__img">
      <img src="<?php echo get_template_directory_uri();?>/img/news/news.img.jpg" alt="">
    </div>
    <div class="news-details__meta u-desktop">
      <div class="news-item__meta topic-meta">
        <span class="news-item__category topic-category">
          <?php categories_label() ?>
        </span>
        <time datetime="2022-01-01" class="news-item__date topic-date"><?php the_time('Y/m/d');?></time>
      </div>
    </div>
    <div class="news-details__title"><?php echo wp_trim_words(get_the_title());?></div>
    <div class="news-details__text">
      <?php echo get_the_content();?>
    </div>
    <div class="news-details__btn">
      <div class="newsbtn-before__after">
        <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
        <div class="details-btn__before">
          <a href="<?php echo get_permalink($prevpost->ID); ?>">前の記事</a>
        </div>
        <?php endif; ?>
        <div class="details-newsbtn__wrapper u-desktop">
          <a href="<?php echo home_url(); ?>/news" class="treatment-btn details-btn">お知らせ一覧へ</a>
        </div> 
        <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
        <div class="details-btn__after">
          <a href="<?php echo get_permalink($nextpost->ID); ?>">後の記事</a>
        </div>
        <?php endif; ?>
      </div>
      <div class="details-newsbtn__wrapper u-mobile">
        <a href="" class="treatment-btn details-btn">お知らせ一覧へ</a>
      </div> 
    </div>
  </div>
<!-- news-category開始 -->
<div class="page-category__inner inner">
<?php get_sidebar(); ?>
</div>

<?php get_footer();?>
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
  <?php $cat = get_the_category(); ?>
  <p class="current-page">
  <?php echo '<div class="###">' . $cat_name = $cat[0]->cat_name . '</div>'; ?>
  </p>
</div>
<!-- headline終了 -->

<?php $cat = get_the_category(); ?>
  <h1 class="category-title__wrapper inner ###">
    <?php echo '<div class="###">' . $cat_name = $cat[0]->cat_name . '</div>'; ?>
  </h1>

<div class="news-page__inner inner">
  <section class="news-topics inner">

<div class="###">
            <?php     
            if(has_post_thumbnail()):
              $id=get_post_thumbnail_id();
              $img_src=wp_get_attachment_image_src($id)[0];
            endif;
            ?>
<?php if(have_posts()):?>
     
  <?php while (have_posts()) : the_post();?>

    <ul class="news-topic__items ###" href="<?php the_permalink(); ?>">
      <li class="news-topic__item topic-item ###">
        <a href="<?php the_permalink();?>">
        <div class="news-topic__wrapper">
          <div class="topic-content">
            <div class="news-item__meta topic-meta">
              <span class="news-item__category topic-category">
                <?php categories_label() ?>
              </span>
            </div>
            <h3 class="news-item__title topic-title"><?php the_title();?></h3>
              <time datetime="2022-01-01" class="news-item__date topic-date"><?php echo get_the_date();?></time>
          </div>
          <div class="news-item__img topic-img">
            <img src="<?php echo $img_src;?>" alt="newsに関する画像">
          </div>
        </div>
       </a>
      </li>
    </ul>
    <div class="pagenation-wrapper">
    <?php endwhile;?> 
    <?php the_posts_pagination(); ?>
    <?php else:?>
      <p><?php single_cat_title();?>の記事はありませんでした。</p>
    <?php endif;?>
    </div>
  </div>
  </section>

<div class="page-category__inner inner">
<?php get_sidebar(); ?>
</div>

</div>

<?php get_footer();?>
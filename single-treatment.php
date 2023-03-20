<?php get_header();?>

<!-- page-title開始 -->
<div class="page__title">
  <h2 class="page-title__text">
    Treatment<span>診療科目</span>
  </h2>
  <div class="page-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri();?>/img/treatment/treatment.title.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri();?>/img/treatment/treatment.title_pc.jpg" alt="脳のイラストです。">
    </picture>
  </div>
</div>
<!-- page-title終了 -->
<!-- headline開始 -->
<div class="headline page__headline inner">
  <p class="before-page">home</p>
  <span class="arrow1">＞</span>
  <p class="current-page current">診療科目</p>
  <span class="arrow2">＞</span>
  <p class="details-page"><?php the_title();?></p>
</div>
<!-- headline終了 -->
<!--  details開始 -->
<div class="details details__inner inner">
  <div class="details__img">
  <?php     
    if(has_post_thumbnail()):
    $id=get_post_thumbnail_id();
    $img_src=wp_get_attachment_image_src($id)[0];
    endif;
  ?>
    <img src="<?php echo $img_src;?>" alt="診療科目の画像">
  </div>
  <h3 class="details__title">
    <?php the_title();?>
  </h3>
  <div class="details__text-wrapper">
    <p class="details__text">
      <?php the_content();?>
    </p>
  </div>
  <div class="details-btn__wrapper">
    <a href="<?php echo home_url(); ?>/treatment/" class="treatment-btn details-btn">診療科目一覧へ</a>
  </div> 
</div>
<!--  details終了 -->

<?php get_footer();?>
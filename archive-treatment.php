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
  <span>＞</span>
  <p class="current-page">診療科目</p>
</div>
<!-- headline終了 -->
<!-- treatment-btn開始 -->
<div class="treatment-page__btn">
  <div class="treatment-btn__wrapper">
    <a href="#pain-section" class="treatment-btn">身体の痛み</a>
  </div> 
  <div class="treatment-btn__wrapper">
    <a href="#feeling-section" class="treatment-btn">身体機能の不調</a>
  </div> 
  <div class="treatment-btn__wrapper">
    <a href="#checked-section" class="treatment-btn">健診</a>
  </div> 
</div>
<!-- treatment-btn終了 --> 
<!-- pain開始 -->
<section class="pain top-pain" id="pain-section">
  <div class="title-wrapper inner">
    <div class="section__title section-title">
      <div class="section-title__img">
        <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
      </div>
      <div class="section-title__text">
        <h2 class="main__title">身体の痛み</h2>
      </div>
    </div>
    <p class="trearment-title__text">
      ちょっとした痛みからやってくる病気も少なからず存在します。<br>
      <span> 少しでも異変を感じたら早期に受診しましょう。</span>
    </p>
  </div>
  <div class="pain__inner inner">
    <ul class="pain-category__items pain-items">

        <?php
          $args = array(
            'post_type' => 'treatment',
            'taxonomy' => 'genre',
            'term' => 'body',
            'posts_per_page' => -1,
            'order' => 'DESC',
          );
        $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post(); ?>
        <li class="pain-category__wrapper pain-item">
          <a href="<?php the_permalink(); ?>">
            <div class="pain-category__img">
              <?php     
                  if(has_post_thumbnail()):
                    $id=get_post_thumbnail_id();
                    $img_src=wp_get_attachment_image_src($id)[0];
                  endif;
              ?>
              <span class="mask">
                <img src="<?php echo $img_src;?>" alt="診療内容">
              </span>
            </div>
            <h5 class="pain-category__text"><?php the_title(); ?></h5>
          </a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>

    </ul>
  </div>
</section>
<!-- pain終了 -->
<!-- feeling開始 -->
<section class="feeling top-feeling" id="feeling-section">
  <div class="title-wrapper inner">
    <div class="section__title section-title">
      <div class="section-title__img">
        <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
      </div>
      <div class="section-title__text">
        <h2 class="main__title">身体機能の不調</h2>
      </div>
    </div>
    <p class="trearment-title__text feeling-title__text">
      歩行障害や呂律が回らないなど、脳の病気を疑う要注意症状です。<br>
      <span>一刻も早く頭部CT/MRIなどの精査を行い、速やかに原因を特定、治療を開始する必要があります。</span>
    </p>
  </div>
  <div class="pain__inner inner">
    <ul class="pain-category__items pain-items">
    <?php
          $args = array(
            'post_type' => 'treatment',
            'taxonomy' => 'genre',
            'term' => 'physical',
            'posts_per_page' => -1,
            'order' => 'DESC',
          );
        $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post(); ?>
        <li class="pain-category__wrapper pain-item">
          <a href="<?php the_permalink(); ?>">
            <div class="pain-category__img">
              <?php     
                  if(has_post_thumbnail()):
                    $id=get_post_thumbnail_id();
                    $img_src=wp_get_attachment_image_src($id)[0];
                  endif;
              ?>
              <span class="mask">
                <img src="<?php echo $img_src;?>" alt="診療内容">
              </span>
            </div>
            <h5 class="pain-category__text"><?php the_title(); ?></h5>
          </a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
  </div>
</section>
<!-- feeling終了 -->
<!-- checked開始 -->
<section class="checked top-checked" id="checked-section">
  <div class="title-wrapper inner">
    <div class="section__title section-title">
      <div class="section-title__img">
        <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
      </div>
      <div class="section-title__text">
        <h2 class="main__title">健診</h2>
      </div>
    </div>
    <p class="trearment-title__text checked-title__text">
      脳卒中は予防が第一です。早期発見・早期治療で人生まだまだ楽しみたい！<br>
      <span class="checked-text">脳の状態を知ることのできる大変貴重な機会です。</span>一度受診してみませんか？
    </p>
  </div>
  <div class="pain__inner inner">
    <ul class="pain-category__items pain-items">
    <?php
          $args = array(
            'post_type' => 'treatment',
            'taxonomy' => 'genre',
            'term' => 'checkup',
            'posts_per_page' => -1,
            'order' => 'DESC',
          );
        $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post(); ?>
        <li class="pain-category__wrapper pain-item">
          <a href="<?php the_permalink(); ?>">
            <div class="pain-category__img">
              <?php     
                  if(has_post_thumbnail()):
                    $id=get_post_thumbnail_id();
                    $img_src=wp_get_attachment_image_src($id)[0];
                  endif;
              ?>
              <span class="mask">
                <img src="<?php echo $img_src;?>" alt="診療内容">
              </span>
            </div>
            <h5 class="pain-category__text"><?php the_title(); ?></h5>
          </a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
  </div>
</section>
<!-- checked終了 -->

<?php get_footer();?>
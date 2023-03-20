<?php get_header();?>
<!-- main開始 -->
<main>
<!-- mv開始 -->
<section class="mv">
  <div class="mv-wrapper">
    <h2 class="mv_text mv-text">
      <img src="<?php echo get_template_directory_uri();?>/img/font/mv-text.png" alt="頭痛・めまい・物忘れ あなたの第一の相談相手">
    </h2>
    <div class="mv_slider-wrapper">
      <div class="mv_slider" id="slider"></div>
      <div class="mv_back mv-back"></div>
    </div>
    <div class="circle-wrapper">
      <div class="circle circle-1"></div>
    </div>
  </div>
</section>
<!-- mv終了 -->
<!-- news開始 -->
<section class="news top-news">
  <div class="section__title section-title news-title">
    <div class="section-title__img">
      <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
    </div>
    <div class="section-title__text">
      <h2 class="main__title">お知らせ
        <span class="sub__title">News</span>
      </h2>
    </div>
   </div>
  <div class="news__inner inner">
    <ul class="news__items news-lists">
    <?php
      $args = array(
        'post_type' => 'post',
        'post_per_page' =>3
      );
      $the_query = new WP_Query( $args );
      //The Loop

      if ( $the_query->have_posts()):
        while ( $the_query->have_posts()):$the_query->the_post(); ?>
        <li class="news-lists__item news-item">
          <a href="<?php the_permalink();?>">
            <div class="news-item__meta">
              <time datetime="2022-01-01" class="news-item__date"><?php the_time('Y/m/d');?></time>
              <span class="news-item__category"<?php if(get_the_category());?>><?php echo get_the_category()[0]->name;?></span>
            </div>
            <h3 class="news-item__title"><?php echo wp_trim_words(get_the_title());?></h3>
          </a>
        </li>
        <?php endwhile;
        wp_reset_postdata();
      else:?>
      <p>記事はありませんでした。</p>
      <?php endif;?>
    </ul>
    <div class="btn__wrapper news-btn">
      <a href="" class="btn bgleft"><span>もっと見る</span></a>
    </div>
  </div>
</section>
<!-- news終了 -->

<!-- about開始 -->
<section class="about top-about">
  <div class="circle-wrapper">
    <div class="circle circle-2"></div>
  </div>
  <div class="top-items about__inner">
    <div class="top-items__img about-img">
      <div class="top-img1 about-img__person">
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/img/top/top.about1_pc.jpg" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri();?>/img/top/top.about1.jpg" alt="院長の写真です。">
        </picture>
      </div>
      <div class="top-img2 about-img__other">
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/img/top/top.about2_pc.jpg" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri();?>/img/top/top.about2.jpg" alt="クリニック内の写真です。">
        </picture>
      </div>
    </div>
    <div class="top__content-wrapper">
      <div class="section__title section-title top__items-title">
        <div class="section-title__img">
          <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
        </div>
        <div class="section-title__text">
          <h2 class="main__title">クリニックのご紹介
            <span class="sub__title">About</span>
          </h2>
        </div>
      </div>
      <div class="top__content-items">
        <div class="top__content-title">安心して相談できるかかりつけ医</div>
        <p class="top__content-text">
          地域の皆様の第一の相談相手になりたい<br>
          頭のことなら”渡邉脳神経外科クリニック”<br>
          そんなニーズにお応えできるクリニックを<br class="u-mobile">目指しています。
        </p>
        <div class="btn__wrapper top__content-btn">
          <a href="http://testexercises.local/about/" class="btn bgleft"><span class="u-mobile">もっと見る</span><span class="u-desktop">クリニックのご紹介</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about終了 -->
<!-- treatment開始 -->
<section class="treatment top-treatment">
  <div class="circle-wrapper">
    <div class="circle circle-3"></div>
  </div>
  <div class="top-items treatment__inner">
    <div class="top-items__img treatment-img">
      <div class="top-img1 treatment-img__mri">
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/img/top/top.treatment1_pc.jpg" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri();?>/img/top/top.treatment1.jpg" alt="MRIの写真です。">
        </picture>
      </div>
      <div class="top-img2 treatment-img__person">
        <picture>
          <source srcset="<?php echo get_template_directory_uri();?>/img/top/top.treatment2_pc.jpg" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri();?>/img/top/top.treatment2.jpg" alt="診察の様子の写真です。">
        </picture>
      </div>
    </div>
    <div class="top__content-wrapper">
      <div class="section__title section-title top__items-title">
        <div class="section-title__img">
          <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
        </div>
        <div class="section-title__text">
          <h2 class="main__title">診療科目
            <span class="sub__title">Treatment</span>
          </h2>
        </div>
      </div>
      <div class="top__content-items">
        <div class="top__content-title">早期発見・早期治療が<br class="u-mobile">大事な脳の病気。</div>
        <p class="top__content-text">
          頭の専門医として、脳卒中や認知症だけではなく、<br class="u-mobile">頭痛やめまい、しびれなどの<br>
          日常的な症状まで幅広く治療を行っております。<br>
          どんなに小さな悩みでもお気軽にご相談ください。
        </p>
        <div class="btn__wrapper top__content-btn">
          <a href="http://testexercises.local/treatment/" class="btn bgleft"><span>もっと見る</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- treatment終了 -->
<!-- contact開始 -->
<section class="contact top-contact">
  <div class="contact__inner">
    <div class="circle-wrapper u-mobile">
      <div class="circle circle-4"></div>
    </div>

    <div class="contact__img u-mobile">
      <img src="<?php echo get_template_directory_uri();?>/img/top/top.contact.jpg" alt="診察の様子の写真です。">
    </div>
    <div class="contact-content__wrapper">
      <div class="section__title section-title">
        <div class="section-title__img">
          <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
        </div>
        <div class="section-title__text">
          <h2 class="main__title">お問い合わせ
            <span class="sub__title">Contact</span>
          </h2>
        </div>
      </div>
      <div class="top__content-items">
        <p class="top__content-text contact-text">
          当クリニックは地域の皆様の第一の相談相手を<br class="u-mobile">目指しております。<br>
          何でもお気軽にお問合せください。
        </p>
        <div class="btn__wrapper contact-btn">
          <a href="http://testexercises.local/contact/" class="btn bgleft"><span class="u-mobile">お問い合わせへ</span><span class="u-desktop">お問い合わせ</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact終了 -->
<!-- access開始 -->
<section class="access top-access">
  <div class="section__title section-title access-title">
    <div class="section-title__img">
      <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
    </div>
    <div class="section-title__text">
      <h2 class="main__title">アクセス
        <span class="sub__title">Access</span>
      </h2>
    </div>
   </div>
   <div class="access__inner access-items">
    <div class="access__map access-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.8255296483553!2d130.40280311468624!3d33.58387894971439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541919a314c25c7%3A0x12fcd6329cd82930!2z5rih6L666YCa6aeF!5e0!3m2!1sja!2sjp!4v1670059534918!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="access__text">
      <p class="access__text-item">
        病院の敷地内に6台の駐車スペースを<br class="u-mobile">ご用意しております。<br>
        ※駐車場内での事故等のトラブルについては一切責任を負いかねます。あらかじめご了承ください。
      </p>
    </div>
    <div class="access__time time-img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri();?>/img/top/top.time_pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri();?>/img/top/top.time.jpg" alt="診察スケジュール表">
      </picture>
    </div>
   </div>
</section>
<!-- access終了 -->
</main>
<!-- main終了 -->
<?php get_footer();?>
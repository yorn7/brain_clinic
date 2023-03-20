<?php get_header();?>
<!-- page-title開始 -->
<div class="page__title">
  <h2 class="page-title__text">
    About<span>クリニックのご紹介</span>
  </h2>
  <div class="page-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri();?>/img/about/about.title_pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri();?>/img/about/about.title.jpg" alt="MRIの写真です。">
    </picture>
  </div>
</div>
<!-- page-title終了 -->
<!-- headline開始 -->
<div class="headline page__headline inner">
  <p class="before-page">home</p>
  <span>＞</span>
  <p class="current-page">クリニックのご紹介</p>
</div>
<!-- headline終了 -->
<!-- director開始 -->
<section class="director top-director">
  <h2 class="about-section__title">院長紹介</h2>
  <div class="director__inner inner">

    <div class="circle-wrapper u-desktop">
      <div class="circle circle-about1"></div>
    </div>
    <div class="circle-wrapper u-desktop">
      <div class="circle circle-about2"></div>
    </div>

    <div class="director__img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri();?>/img/about/about.director_pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri();?>/img/about/about.director.jpg" alt="院長の写真です。">
      </picture>
    </div>
    <div class="director__introduction director-introduction">
      <div class="introduction__text-wrapper">
        <p class="introduction__text text1">
          院長の渡邊和則と申します。
        </p>
        <p class="introduction__text text2">
          平成10年に医師免許を取得し、その後脳神経外科専門医を取得。
        </p>
        <p class="introduction__text text3">
          大学病院や総合病院での経験を経て、平成20年に日本脳卒中学会脳卒中専門医を取得。平成28年、福岡市に「渡邉脳神経外科クリニック」を開院させていただくことになりました。
        </p>
      </div>
      <div class="introduction__text-wrapper2">
        <h3 class="introduction__title">
          “あなたの第一の相談相手”
        </h3>
        <p class="introduction__text text4">
          当クリニックではつらい症状から些細な症状まで気軽に受診できる、地域に密着したクリニックを目指しております。
        </p>
        <p class="introduction__text text5">
          ちょっとした軽い症状を放置し、取り返しのつかない事態となることも少なくありません。<br class="u-desktop">
          どんなに些細な症状や心配事でも構いませんので、どうぞお気軽に受診ください。
        </p>
      </div>
      <div class="director__name-wrapper">
        <p class="clinic__name">
          渡邉脳神経外科クリニック院長
        </p>
        <div class="director__name">
          <img src="<?php echo get_template_directory_uri();?>/img/font/director-name.png" alt="渡邉 和則">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- director終了 -->
<!-- clinic開始 -->
<section class="clinic top-clinic">
  <h2 class="about-section__title">院内紹介</h2>
  <div class="clinic__inner inner">

    <div class="circle-wrapper u-desktop">
      <div class="circle circle-about3"></div>
    </div>
    
    <div class="clinic__text-wrapper">
      <p class="clinic__text"><?php the_field('about-text');?></p>
      <p class="clinic__text"><?php the_field('about-text2');?></p>
      <p class="clinic__text"><?php the_field('about-text3');?></p>
    </div>
    <ul class="clinic__img-wrapper">
      <li class="clinic__img">
        <img src="<?php the_field('about-img1'); ?>" alt="院内受付の写真です。">
      </li>
      <li class="clinic__img">
        <img src="<?php the_field('about-img2'); ?>" alt="院内の写真です。">
      </li>
      <li class="clinic__img">
        <img src="<?php the_field('about-img3'); ?>" alt="院内待合場の写真です。">
      </li>
      <li class="clinic__img">
        <img src="<?php the_field('about-img4'); ?>" alt="診察の様子の写真です。">
      </li>
      <li class="clinic__img">
        <img src="<?php the_field('about-img5'); ?>" alt="診察台の写真です。">
      </li>
      <li class="clinic__img">
        <img src="<?php the_field('about-img6'); ?>" alt="MRIをしている様子の写真です。">
      </li>
    </ul>
  </div>
</section>
<!-- clinic終了 -->
<?php get_footer();?>
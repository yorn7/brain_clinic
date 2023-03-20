<?php get_header();?>

<!-- page-title開始 -->
<div class="page__title">
  <h2 class="page-title__text">
    Contact<span>お問い合わせ</span>
  </h2>
  <div class="page-mv__img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri();?>/img/contact/contact.title_pc.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri();?>/img/contact/contact.title.jpg" alt="メモをとっている様子。">
    </picture>
  </div>
</div>
<!-- page-title終了 -->
<!-- headline開始 -->
<div class="headline page__headline inner">
  <p class="before-page">home</p>
  <span>＞</span>
  <p class="current-page">お問い合わせ</p>
</div>
<!-- headline終了 -->
<div class="contact-page__inner inner">
  <!-- title -->
  <div class="section__title section-title top__items-title contact-page__title">
    <div class="section-title__img">
      <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
    </div>
    <div class="section-title__text">
      <h2 class="main__title">お問い合わせフォーム</h2>
      <p class="section-title__content">
        ご質問、ご要望、ご相談は下記フォームをご利用ください。<br>
        ※体調に不安がある方は、直接医師の診察をお勧めします。
      </p>
    </div>
  </div>
  <!-- form -->
  <div class="contact-page__form">
    <form action="" class="form__items">
      <?php the_content();?>
    </form>
  </div>
</div>

<?php get_footer();?>
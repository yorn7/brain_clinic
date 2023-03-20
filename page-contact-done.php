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
<div class="done-page__inner inner">
  <div class="section__title section-title top__items-title contact-page__title">
    <div class="section-title__img">
      <img src="<?php echo get_template_directory_uri();?>/img/top/title.logo.png" alt="脳のイラスト">
    </div>
    <div class="section-title__text">
      <h2 class="main__title">送信完了</h2>
      <p class="section-title__content">
        この度はお問い合わせいただき、有難うございました。<br>
        3営業日以内にご返信させていただきますので、しばらくお待ちくださいませ。
      </p>
    </div>
  </div>
  <div class="contact__btn contact-home">
    <a href="<?php echo home_url( '/' );?>" class="treatment-btn contact-done__btn">ホームに戻る</a>
  </div> 
</div>

<?php get_footer();?>
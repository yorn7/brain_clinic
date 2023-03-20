<!-- footer開始 -->
<footer class="footer">
  <div class="footer__inner inner">
    <div class="footer__nav footer-nav footer-right__pc">
      <ul class="footer-nav__items">
        <li class="footer-nav__item">
          <a href="<?php echo home_url( '/' );?>">
            ホーム
          </a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo home_url(); ?>/about/">
            クリニックについて
          </a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo home_url(); ?>/news/">
            お知らせ
          </a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo home_url(); ?>/treatment/">
            診療案内
          </a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo home_url(); ?>/contact/">
            お問い合わせ
          </a>
        </li>
      </ul>
      <div class="footer__adress adress-wrapper u-desktop">
        <p class="adress__text">
          福岡県福岡市中央区渡邉123
        </p>
        <p class="adress__tel">
          Tel. 093-1234-5678
        </p>
      </div>
    </div>
    <div class="footer__logo footer-left__pc">
      <a href="<?php echo home_url( '/' );?>">
        <img src="<?php echo get_template_directory_uri();?>/img/common/footer-logo.png" alt="クリニックロゴです。">
      </a>
    </div>
    <div class="footer__adress adress-wrapper u-mobile">
      <p class="adress__text">
        福岡県福岡市中央区渡邉123
      </p>
      <p class="adress__tel">
        Tel. 093-1234-5678
      </p>
    </div>
  </div>
  <p class="footer__copyright">
    &copy;2022 Watanabe neuro-spone clinic
  </p>
</footer>
<!-- footer終了 -->
<?php wp_footer();?>
</body>
</html>
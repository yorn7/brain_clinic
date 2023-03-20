<aside id="sidebar">
      
      <!-- news-category開始 -->
  <section class="news-page__category">
    <h4 class="category__title">カテゴリー</h4>
    <ul class="category-page__wrapper">
    <?php $arg = array(
        'hide_empty' => 0, // 投稿のないカテゴリーも含める
    );
    $categories = get_categories( $arg ); ?>
    <?php foreach($categories as $category) : ?>
        <li class="category-page__title">
            <a href="<?php echo get_category_link( $category->term_id ); ?>">
                <?php echo $category->name; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    </section>
    <!-- news-category終了 -->


    <!-- news-archive開始 -->
    <section class="news-page__archive">
    <h4 class="category__title archive__wrapper">月別アーカイブ</h4>

    <?php
      $year_month = Null;
      $year = Null;
      $month = Null;
      $args = array(
        'post_type' => 'post', //投稿タイプを指定
        'orderby' => 'date', // 日付順で表示
        'order' => 'DESC',
        'posts_per_page' => -1 // すべての投稿を表示
      );
      $the_query = new WP_Query($args);
      ?>
      <ul class="category-page__wrapper">
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php if ($year_month != get_the_date('Y.m')) : // 同じ年月でなければ表示 
              $year_month = get_the_date('Y.m');
              $year = get_the_date('Y'); // 年の取得
              $month = get_the_date('m'); // 月の取得
            ?>
              <!-- 月別アーカイブリスト -->
              <li class="category-page__title archive-title">
                <a href="<?= home_url(); ?>/<?php echo $year; ?>/<?php echo $month; ?>/"><?php echo $year; ?>年<?php echo $month; ?>月</a>
              </li>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </section>
    <!-- news-archive終了 -->
    </div>
</aside>
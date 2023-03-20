<?php
 function custom_setup() {
	add_theme_support( 'post-thumbnails' );
 }
 add_action('after_setup_theme','custom_setup');


 if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side-title">',
    'after_title' => '</h3>'
 ));
}

function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args['has_archive']='news'; /* アーカイブにつけるスラッグ名 */
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*アーカイブページの最大投稿表示数*/
function change_posts_per_page($query) {
  if( is_admin() || ! $query->is_main_query())
  return;
  if( $query->is_archive()) {
    $query->set( 'posts_per_page', 5);
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );




// 設定
// 取得、20記事
// 日付、ソート
// 日付、降順
// ポストタイプ、postやカスタム投稿タイプなど
$def['posts_per_page'] = 5;
$def['orderby'] = 'date';
$def['order'] = 'DESC';
$def['post_type'] = 'カスタム投稿など';

$args = array(
  'paged' => $paged,//このパラメータを設定。現在のページを判定。2ページ以降で正しい記事を表示するため。
  'posts_per_page' => $def['posts_per_page'],
  'orderby' => $def['orderby'],
  'order' => $def['order'],
  'post_type' => $def['post_type'],
);

//ポストデータ取得
//WP_Queryでデータ取得すると総ページ数を取得できる。
//get_posts()だと取得できない・・・。
$myposts = new WP_Query($args);

//以下、取得したデータの処理
if($myposts->have_posts()) {

  //記事のループ処理whileにあたる部分
  foreach($myposts->posts as $post){
    //$post->ID
    //でポストIDが取得できます。
    //カスタムフィールドを取得したい場合
    //get_post_meta($post->ID, 'カスタムフィールド名', true);
  }

  //ページネーション
  if (function_exists("pagination")) {
    $max_page = $myposts->max_num_pages;  //WP_Queryでデータ取得すると総ページ数を取得できる。
    pagination($max_page);  //ページネーションのfunction（関数）
  }
}

wp_reset_query();


  /**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagenation( $pages, $paged, $range = 3, $show_only = false ) {

  $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

  $start = max( $paged - $range, 2);//ページ番号始点
  $end   = min( $paged + $range, $pages - 1);//ページ番号終点

  //表示テキスト
  //$text_first   = "« 最初へ";
  $text_before  = "＜";
  $text_next    = "＞";
  $text_dots    = "...";
  //$text_last    = "最後へ »";

  //ページ番号格納
  $nums  = []; //ページ番号格納用
  for ( $i = $start; $i <= $end; $i++ ) {
    $nums[] = $i;
  }

  if ( $show_only && $pages === 1 ) {
      // １ページのみで表示設定が true の時
      echo '<div class="pagination"><span class="current pager">1</span></div>';
      return;
  }

  if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

  if ( 1 !== $pages ) {
      //２ページ以上の時
      echo '<div class="pagination"><span class="page_num">Page ', $paged ,' of ', $pages ,'</span>';
      // if ( $paged > $range + 1 ) {
      //     // 「最初へ」 の表示
      //     echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
      // }
      if ( $paged > 1 ) {
        // 「＜(前へ)」 の表示
        echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
      }
      if ( $start > $range ) {
         echo '<span class="dot">', $text_dots ,'</span>'; //ドットの表示
      } 
      //最初のページ番号へのリンク
      if ( $paged > 1 ) {
         echo '<a href="?paged=1" class="paging_item">1</a>';
      } else {
         echo '<span class="paging_item current">1</span>';
      }

      //ページリンク表示ループ
      foreach ( $nums as $num ) {

        //現在のページ番号
        if ( $num == $paged ) {
          echo '<span class="paging_item current">' . $num . '</span>';
        } else {
          //ページ番号リンク表示
          echo '<a href="?paged=' . $num .'" class="paging_item num">' . $num . '</a>';
        }
      }

      if ( ($pages - 1) > $end) {
         echo '<span class="dot">', $text_dots ,'</span>';//ドットの表示
      }
      //最後のページ番号へのリンク
      if ( $paged < $pages ) {
         echo '<a href="?paged=' . $pages .'" class="paging_item">' . $pages .'</a>';
      } else {
         echo '<span class="paging_item current">' . $pages . '</span>';
      }

      if ( $paged < $pages ) {
          // 「＞(次へ)」 の表示
          echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
      }
      // if ( $paged + $range < $pages ) {
      //     // 「最後へ」 の表示
      //     echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
      // }
      echo '</div>';
  }
};


// //カテゴリ抽出用(カテゴリー色反映の為の)
function categories_label() {
  $cats = get_the_category();
  if(!empty($cats)){
    if(!is_wp_error($cats)){
      foreach($cats as $cat){
        $cat_name = $cat->name;
        $cat_id = $cat->cat_ID;
        $cat_color = 'category_'.$cat_id;
        $back_color = get_field('category-color',$cat_color); //カスタムフィールドで設定したものの'slug'
        $txt_color = get_field('category-text',$cat_color);
        echo '<p class="news-item__cat" style="border: 1px solid '.$back_color.'; color: '.$txt_color.';">'.$cat_name.'</p>';
      }
    }
  }
};


/* テーマカスタマイザー
---------------------------------------------------------- */
add_action( 'customize_register', 'theme_customize' );

function theme_customize($wp_customize){

	//ロゴ画像
	$wp_customize->add_section( 'logo_section', array(
		'title' => 'ロゴ画像', //セクションのタイトル
		'priority' => 60, //セクションの位置
		'description' => 'ロゴ画像を使用する場合はアップロードしてください。画像を使用しない場合はタイトルがテキストで表示されます。', //セクションの説明
	));

		$wp_customize->add_setting( 'logo_url' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_url', array(
			'label' => 'ロゴ画像',//セッティングのタイトル
			'section' => 'logo_section', //セクションID
			'settings' => 'logo_url', //セッティングID
			'description' => 'ロゴ画像を設定してください。', //セッティングの説明
		)));
}

/* テーマカスタマイザーで設定された画像のURLを取得
---------------------------------------------------------- */
//ロゴ画像
function get_the_logo_url(){
	return esc_url( get_theme_mod( 'logo_url' ) );
}
<?php

remove_action('wp_head','wp_generator');

$url = $_SERVER['REQUEST_URI'];

add_theme_support('post-thumbnails');

add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//更新日が投稿日より後なら返す
function get_mtime($format) {
    $mtime = get_the_modified_time('Ymd');
    $ptime = get_the_time('Ymd');
    if ($ptime >= $mtime) {
        return null;
    } else {
        return get_the_modified_time($format);
    }
}

// パンくずリスト
function breadcrumb(){
	global $post;
	$str ='';
	if(!is_home()&&!is_admin()){ /* !is_admin は管理ページ以外という条件分岐 */
		$str.= '<div id="breadcrumb">';
		$str.= '<ul>';
		$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . home_url('/') .'" class="home" itemprop="url" ><span itemprop="title">TOP</span></a>&nbsp;&gt;&nbsp;</li>';

		/* 投稿のページ */
		if(is_single()){
			$categories = get_the_category($post->ID);
			$cat = $categories[0];
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor).'"  itemprop="url" ><span itemprop="title">'. get_cat_name($ancestor). '</span></a>&nbsp;&gt;&nbsp;</li>';
									}
			}
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url" ><span itemprop="title">'. $cat-> cat_name . '</span></a>&nbsp;&gt;&nbsp;</li>';
			$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. $post -> post_title .'</span></li>';
		}

		/* 固定ページ */
		elseif(is_page()){
			if($post -> post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestor){
					$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink($ancestor).'" itemprop="url" ><span itemprop="title">'. get_the_title($ancestor) .'</span></a>&nbsp;&gt;&nbsp;</li>';
									}
			}
			$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. $post -> post_title .'</span></li>';
		}

		/* カテゴリページ */
		elseif(is_category()) {
			$cat = get_queried_object();
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor) .'" itemprop="url" ><span itemprop="title">'. get_cat_name($ancestor) .'</span></a>&nbsp;&gt;&nbsp;</li>';
				}
			}
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. $cat -> name . '</span></li>';
		}

		/* タグページ */
		elseif(is_tag()){
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. single_tag_title( '' , false ). '</span></li>';
		}

		/* 時系列アーカイブページ */
		elseif(is_date()){
			if(get_query_var('day') != 0){
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_year_link(get_query_var('year')). '" itemprop="url" ><span itemprop="title">' . get_query_var('year'). '年</span></a></li>';
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_month_link(get_query_var('year'), get_query_var('monthnum')). '" itemprop="url" ><span itemprop="title">'. get_query_var('monthnum') .'月</span></a></li>';
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. get_query_var('day'). '</span>日</li>';
			} elseif(get_query_var('monthnum') != 0){
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_year_link(get_query_var('year')) .'" itemprop="url" ><span itemprop="title">'. get_query_var('year') .'年</span.</a></li>';
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. get_query_var('monthnum'). '</span>月</li>';
			} else {
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. get_query_var('year') .'年</span></li>';
			}
		}

		/* 投稿者ページ */
		elseif(is_author()){
			$str .='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">投稿者 : '. get_the_author_meta('display_name', get_query_var('author')).'</span></li>';
		}

		/* 添付ファイルページ */
		elseif(is_attachment()){
			if($post -> post_parent != 0 ){
				$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink($post -> post_parent).'" itemprop="url" ><span itemprop="title">'. get_the_title($post -> post_parent) .'</span></a></li>';
			}
			$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">' . $post -> post_title . '</span></li>';
		}

		/* 検索結果ページ */
		elseif(is_search()){
			if(strstr($_SERVER['REQUEST_URI'],'artist')==true){

			$str.='<li><a href="/artist.php" ><span itemprop="title">artist</span></a>&nbsp;&gt;&nbsp;</li>
			<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. get_search_query() .'</span></li>';
		}
		elseif(strstr($_SERVER['REQUEST_URI'],'artist')==false){
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">「'. get_search_query() .'」で検索した結果</span></li>';
		}
		}

		elseif(strstr($_SERVER['REQUEST_URI'],'artist.php')==true){
			$str.='<li><span itemprop="title">artist</span></li>';
		}


		/* 404 Not Found ページ */
		elseif(is_404()){
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">お探しの記事は見つかりませんでした。</span></li>';
		}

		/* その他のページ */
		else{
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. wp_title('', false) .'</span></li>';
		}
		$str.='</ul>';
		$str.='</div>';
	}
	echo $str;
}

//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4){
  $showitems = ($range * 2)+1;

  global $paged;
  if(empty($paged)) $paged = 1;

  //ページ情報の取得
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i=1; $i <= $pages; $i++)     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
        echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
      }
    }
    //1つ進む
    echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
    //最後尾へ
    echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
    echo '</ul>';
  }
}

// 【管理画面】管理者以外の投稿メニューを非表示
if (!current_user_can('administrator')) { // 管理者以外を対象
  function remove_menus () {
    global $menu;
    remove_menu_page('edit.php'); // 投稿を非表示
  }
  add_action('admin_menu', 'remove_menus');
}

// カスタム投稿タイプを追加
add_action( 'init', 'custom_post_type' );
function custom_post_type() {

	register_post_type( 'kitasenju', // カスタム投稿タイプのスラッグ
		array(
			'labels' => array(
				'name' => __( '北千住お知らせ' ),          // メニューに表示される名称
				'singular_name' => __( '北千住お知らせ' ), // 単体系の名称
				'add_new' => _x('新規追加', 'news'),
				'add_new_item' => __('新規追加')
			),
			'public' => true,
			'has_archive' => true,            // アーカイブを有効に
			'hierarchical' => false,          // ページ階層の指定
			'menu_position' => 5,              // 管理画面上の配置指定
			'supports' => array('title','editor','thumbnail','revisions') // サポート指定
		)
	);

	register_post_type( 'sakura',
		array(
			'labels' => array(
				'name' => __( '佐倉お知らせ' ),
				'singular_name' => __( '佐倉お知らせ' ),
				'add_new' => _x('新規追加', 'news'),
				'add_new_item' => __('新規追加')
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','revisions')
		)
	);

	register_post_type( 'shinkoiwa',
	array(
		'labels' => array(
			'name' => __( '新小岩お知らせ' ),
			'singular_name' => __( '新小岩お知らせ' ),
			'add_new' => _x('新規追加', 'news'),
			'add_new_item' => __('新規追加')
		),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','revisions')
		)
	);

	register_post_type( 'yachiyo',
	array(
		'labels' => array(
			'name' => __( '八千代お知らせ' ),
			'singular_name' => __( '八千代お知らせ' ),
			'add_new' => _x('新規追加', 'news'),
			'add_new_item' => __('新規追加')
		),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','revisions')
		)
	);

	register_post_type( 'kitanarashino',
	array(
		'labels' => array(
			'name' => __( '北習志野お知らせ' ),
			'singular_name' => __( '北習志野お知らせ' ),
			'add_new' => _x('新規追加', 'news'),
			'add_new_item' => __('新規追加')
		),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','revisions')
		)
	);

	register_post_type( 'motoyawata',
	array(
		'labels' => array(
			'name' => __( '本八幡お知らせ' ),
			'singular_name' => __( '本八幡お知らせ' ),
			'add_new' => _x('新規追加', 'news'),
			'add_new_item' => __('新規追加')
		),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','revisions')
		)
	);

	register_post_type( 'all',
	array(
		'labels' => array(
			'name' => __( 'オールお知らせ' ),
			'singular_name' => __( 'オールお知らせ' ),
			'add_new' => _x('新規追加', 'news'),
			'add_new_item' => __('新規追加')
		),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','revisions')
		)
	);

	register_post_type( 'kinshichou',
	array(
		'labels' => array(
			'name' => __( '錦糸町お知らせ' ),
			'singular_name' => __( '錦糸町お知らせ' ),
			'add_new' => _x('新規追加', 'news'),
			'add_new_item' => __('新規追加')
		),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','revisions')
		)
	);
}

function add_taxonomy(){
	register_taxonomy(
		'news_cat',
		'news',
		array(
			'hierarchical' => true, //階層（trueでカテゴリー、falseでタグ）
			'label' => 'お知らせカテゴリー',
			'public' => true,
			'show_ui' => true,
			'show_admin_column' => true, //記事一覧に投稿に紐づくカテゴリーを出力
		)
	);
}
add_action( 'init', 'add_taxonomy' );

add_action( 'restrict_manage_posts', 'add_custom_taxonomies_term_filter' );
function add_custom_taxonomies_term_filter() {
	global $post_type;
	if ( $post_type == 'news' ) {
		$taxonomy = 'news_cat';
		wp_dropdown_categories( array(
			'show_option_all' => 'すべてのカテゴリー',
			'orderby'         => 'name',
			'selected'        => get_query_var( $taxonomy ),
			'hide_empty'      => 0,
			'name'            => $taxonomy,
			'taxonomy'        => $taxonomy,
			'value_field'     => 'slug',
		) );
	}
}


function my_unregister_taxonomies() {
	global $wp_taxonomies;
	/*
	* 投稿機能から「カテゴリー」を非表示
	*/
	if (!empty($wp_taxonomies['category']->object_type)) {
		foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
			if ($object_type == 'post') {
					unset($wp_taxonomies['category']->object_type[$i]);
			}
		}
	}
  return true;
}
add_action('init', 'my_unregister_taxonomies');


// 管理画面で特定メニューを非表示
function add_admin_css_hidden_customize() {
	if (current_user_can('administrator')) {
		echo '<style type="text/css">
			#menu-posts-shinkoiwa, #menu-posts-kitasenju,#menu-posts-sakura,#menu-posts-yachiyo,#menu-posts-kinshichou,#menu-posts-kitanarashino,#menu-posts-motoyawata,#menu-posts-all { display:none; }
		</style>';
	}
	if (current_user_can('editor_shinkoiwa')) {
		echo '<style type="text/css">
			#menu-posts-kitasenju,#menu-posts-sakura,#menu-posts-yachiyo,#menu-posts-kinshichou,#menu-posts-kitanarashino,#menu-posts-motoyawata,#menu-posts-all { display:none; }
		</style>';
	}
	if (current_user_can('editor_kitasenju')) {
		echo '<style type="text/css">
			#menu-posts-shinkoiwa,#menu-posts-sakura,#menu-posts-yachiyo,#menu-posts-kinshichou,#menu-posts-kitanarashino,#menu-posts-motoyawata,#menu-posts-all { display:none; }
		</style>';
	}
	if (current_user_can('sakura')) {
		echo '<style type="text/css">
			#menu-posts-shinkoiwa,#menu-posts-kitasenju,#menu-posts-yachiyo,#menu-posts-kinshichou,#menu-posts-kitanarashino,#menu-posts-motoyawata,#menu-posts-all { display:none; }
		</style>';
	}
	if (current_user_can('yachiyo')) {
		echo '<style type="text/css">
			#menu-posts-shinkoiwa,#menu-posts-kitasenju,#menu-posts-sakura,#menu-posts-kinshichou,#menu-posts-kitanarashino,#menu-posts-motoyawata,#menu-posts-all { display:none; }
		</style>';
	}
	if (current_user_can('kitanarashino')) {
		echo '<style type="text/css">
			#menu-posts-shinkoiwa,#menu-posts-kitasenju,#menu-posts-sakura,#menu-posts-kinshichou,#menu-posts-yachiyo,#menu-posts-motoyawata,#menu-posts-all { display:none; }
		</style>';
	}
	if (current_user_can('all')) {
		echo '<style type="text/css">
			#menu-posts-shinkoiwa,#menu-posts-kitasenju,#menu-posts-sakura,#menu-posts-yachiyo,#menu-posts-kitanarashino,#menu-posts-motoyawata,#menu-posts-kinshichou { display:none; }
		</style>';
	}
	if (current_user_can('kinshichou')) {
		echo '<style type="text/css">
			#menu-posts-shinkoiwa,#menu-posts-kitasenju,#menu-posts-sakura,#menu-posts-yachiyo,#menu-posts-kitanarashino,#menu-posts-motoyawata,#menu-posts-all { display:none; }
		</style>';
	}
	if (current_user_can('motoyawata')) {
		echo '<style type="text/css">
			#menu-posts-shinkoiwa,#menu-posts-kitasenju,#menu-posts-kinshichou,#menu-posts-sakura,#menu-posts-yachiyo,#menu-posts-kitanarashino,#menu-posts-all { display:none; }
		</style>';
	}
}
add_action('admin_head', 'add_admin_css_hidden_customize', 100);


//カスタム投稿タイプにタグ付け機能を追加
add_action( 'init', function () {
	register_taxonomy( 'post_tag', [ 'post', 'all' ],
			[
					'hierarchical' => false,
					'query_var'    => 'tag',
			]
	);
});
add_action('pre_get_posts', function ($query){
	if ( is_admin() && ! $query->is_main_query() ) {
			return;
	}
	if ( $query->is_category() || $query->is_tag() ) {
			$query->set('post_type', ['post','all']);
	}
});

//カスタム投稿一覧（管理画面）にタグの項目を追加
function add_tag_post_column_title( $columns ) {
	$columns[ 'slug' ] = "タグ";
	return $columns;
}
function add_tag_post_column( $column_name, $post_id ) {
	if( $column_name == 'slug' ) {
			$tags = get_the_tags();
			if($tags){
					foreach ( $tags as $tag ) {
							echo $tag->name .' ';
					}
			}
	}
}
add_filter( 'manage_top_posts_columns', 'add_tag_post_column_title' );
add_action( 'manage_top_posts_custom_column', 'add_tag_post_column', 10, 2 );

// 店舗別と全体のお知らせを取得する共通関数
function get_store_and_global_posts($store_name, $posts_per_page = 10) {
	$args = array(
			'post_type' => array($store_name, 'all'), // 店舗専用 + 全体投稿
			'posts_per_page' => $posts_per_page,
			'orderby' => 'date',
			'order' => 'DESC',
			'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
			'meta_query' => array(
					'relation' => 'OR',
					array( // 店舗専用投稿タイプはそのまま表示
							'post_type' => $store_name,
					),
					array( // 全体投稿タイプで店舗にチェックがあるもの
							'key' => 'display_stores', // SCFフィールド名
							'value' => $store_name,    // 現在の店舗名
							'compare' => 'LIKE',       // チェックマークが付いている投稿を取得
					),
			),
	);

	return new WP_Query($args);
}

?>

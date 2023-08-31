<aside class="archive">
	<h2 class="archive_title">カテゴリ 一覧</h2>
	<ul class="archive_list">
    <?php 
    $args = [
      'title_li' => '', //見出し削除
      // 'style' => '',
      // 'separator' => '🌟',
      // 'show_count' => true,
    ];
      wp_list_categories($args);
    ?>
	</ul>

</aside>
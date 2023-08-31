<aside class="archive">
	<h2 class="archive_title">月別アーカイブ</h2>
		<ul class="archive_list">
      <?php 
      $args = [
        'type' => 'monthly',
        // 'before' = > '🌟';
      ];
      wp_get_archives($args);
      ?>
		</ul>
</aside>
<?php
    $i = 0;
?>
<h2 class="nav-tab-wrapper">
    <?php foreach( $field['tabs'] as $tab ) { ?>
	<a href="#<?=esc_attr($tab['id']);?>" class="js-md_yam_nav-tab nav-tab<?=( $i === 0 ? ' nav-tab-active' : '');?>"><?=$tab['title'];?></a>
	<?php $i++; } ?>
</h2>

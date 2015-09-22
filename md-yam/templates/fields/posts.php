<?php
$options = '';
if ( isset($meta['options']['required']) ) {
    $options .= ' required="required"';
}
if ( isset($meta['options']['disabled']) ) {
    $options .= ' disabled="disabled"';
}

if ( isset($meta['options']['post_type']) ) {
    $post_type = $meta['options']['post_type'];
} else {
    $post_type = 'page';
}

if ( !isset( $meta['values'] ) ) {
    $meta['values'] = get_posts([
        'posts_per_page' => -1,
        'post_type' => $post_type,
        'post_status' => 'any',
    ]);
}

?>
<tr>
    <th scope="row"><label for="<?=$meta['id'];?>"><?=$meta['title'];?></label></th>
    <td>
        <select name="<?=$meta['id'];?>" id="<?=$meta['id'];?>"<?=$options;?>>
            <option value=""><?php _e('-- Select --', 'md-yam'); ?></option>
        <?php foreach ( $meta['values'] as $post ) { ?>
            <option value="<?=$post->ID;?>" <?php selected($meta['value'], $post->ID);?>><?=$post->post_title;?></option>
        <?php } ?>
        </select>
        <?php if ( isset($meta['description']) ) { ?><p class="description"><?=$meta['description'];?></p><?php } ?>
    </td>
</tr>
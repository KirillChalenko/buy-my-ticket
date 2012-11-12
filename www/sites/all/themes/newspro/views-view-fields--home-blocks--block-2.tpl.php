<li>
<?php if ($fields['entity_id_1']->content) { ?><div class="image-holder"><?php print $fields['entity_id_1']->content ?></div><?php } ?>
<div class="text-holder">
<h3 class="title"><?php print $fields['title']->content; ?></h3>
<ul class="info-list">
<li><?php print $fields['created']->content; ?></li>
<?php if ($fields['comment_count']->content) { ?><li><?php print format_plural($fields['comment_count']->content, '1 Comment', '@count Comments') ?></li><?php } ?>
</ul>
<p><?php print $fields['entity_id']->content; ?></p>
</div>
<div class="field field-name-field-price field-type-number-float field-label-inline clearfix"><div class="field-label">Цена:&nbsp;</div>
<?php print $fields['field_price']->content; ?>
<div class="views-field views-field-field-dateunix"><div class="field-label">Дата события:&nbsp;</div>
<?php print $fields['field_dateunix']->content; ?> 
</div>
<?php print $fields['view_node']->content; ?>
</li>
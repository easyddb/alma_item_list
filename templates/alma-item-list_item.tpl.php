<?php
/**
 * @file
 *
 * Template file for single item list item.
 */
?>
<div class="alma-item-list-item item-local_id-<?php print $faust; ?>">
  <?php print $image; ?>
  <div class="item-details">
    <div class="item-title"><a href="/ting/object/<?php print $faust; ?>"><?php print $title; ?></a></div>
    <div class="item-author"><?php if (!empty($author)) { print t('By @author', array('@author' => $author)); } ?> (<?php print $year;?>)</div>
    <?php if ($has_rating): ?>
      <div class="item-rating">
        <div class="rating-value-<?php print $rating; ?>"><?php print $rating; ?></div>
        <span class="rating-count">(<?php print $rating_count; ?>)</span>
      </div>
      <div class="item-reviews">(<?php print $review_count;?>) <?php print t('reviews'); ?></div>
    <?php endif; ?>
    <div class="item-loan"><?php print $loan_form; ?></div>
  </div>
</div>

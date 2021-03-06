<?php
$collectionTitle = strip_formatting(metadata('collection', array('Dublin Core', 'Title')));
?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>

<h1><?php echo $collectionTitle; ?></h1>

<?php echo all_element_texts('collection'); ?>

<div id="collection-items">
    <p class="view-items-link"><?php echo link_to_items_browse(__('Items in the %s', $collectionTitle), array('collection' => metadata('collection', 'id')));?></p>
    <?php $counter = 1; ?>
    <?php if (metadata('collection', 'total_items') > 0): ?>
      <?php foreach (loop('items') as $item): ?>
        <?php if ($counter > 5): ?>
           <?php break;?>
        <?php else: ?>
           <?php $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>
             <div class="item hentry">
              <?php if (metadata('item', 'has thumbnail')): ?>
                <div class="item-img">
                  <?php echo link_to_item(item_image('square_thumbnail', array('height'=>"42", 'width'=>"42", 'alt' => $itemTitle))); ?>
                </div>
              <?php endif; ?>
             </div>
        <?php endif; ?>
           <?php $counter++;?>
      <?php endforeach; ?>
    <?php else: ?>
        <p><?php echo __("There are currently no items within this collection."); ?></p>
    <?php endif; ?>
</div><!-- end collection-items -->

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>

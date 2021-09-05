<?php
$columns = array(1,2,3);

$columns = array_map( function($index) {
  return array( 
    "icon" => get_sub_field("icon_".$index),
    "title" => get_sub_field("titel_".$index),
    "content" => get_sub_field("kolom_".$index)
  );
}, $columns );

$background = get_sub_field('achtergrond');
?>

<div class="dranger c_drie_kolommen" id="drie_kolommen">
  <div 
    class="background"
    <?php if( $background ): ?>
      style="background-image: url('<?php echo get_sub_field('achtergrond'); ?>'"
    <?php endif; ?>
  >
    <div class='entry-content'>
      <div class='columns'>

        <?php foreach($columns as $column): ?>
        <div class='column'>
          <?php echo $column['icon']; ?>
          <h4>
            <?php echo $column['title']; ?>
          </h4>
          <?php echo $column['content']; ?>
        </div>
        <?php endforeach; ?>
        
      </div>
    </div>
  </div>
</div>

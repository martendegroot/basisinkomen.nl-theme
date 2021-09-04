<?php 
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $args = array(
    'post_type'=>'post',
    'posts_per_page' => 4,
  );
  $pusts = new WP_Query($args);
?>

<div class="dranger c_recent_posts c_component" id="recente_berichten">
  <div class="entry-content">

    <div class="header_block">
      <h2>Recente berichten</h2>
      <a href="https://google.com" class="reference">bekijk archief<div class="reference__arrow">&rarr;</div></a>
    </div>

    <div class="posts">
      <?php foreach($pusts->posts as $post): ?>

        <a href="<? echo get_the_permalink($post->ID) ?>" class="item">
          <div class="item__header">
            <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
          </div>
          <div class="item__meta">
            <h3 class="item__link">Lees dit artikel&nbsp;&nbsp;&rarr;</h3>
            <h5 class="item__date">
              <?php echo get_the_date('', $post->ID); ?>
            </h5>
          </div>
          <h3 class="item__title">
            <?php echo $post->post_title ?>
          </h3>
        </a>

      <?php endforeach; ?>
    </div>

  </div>
</div>

<?php wp_reset_postdata(); ?>

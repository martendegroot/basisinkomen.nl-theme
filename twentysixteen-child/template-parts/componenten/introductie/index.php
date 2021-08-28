<?php 

$title = get_sub_field('block_title');
$content = get_sub_field('block_content');
$movie_tiles = get_sub_field('movie_blocks');

?>

<div class="dranger c_introductie" id="introductie">
  <div class="entry-content rij kolom1 rkop">

    <div class="header_block">
      <h3><?php echo $title; ?></h3>
      <p><?php echo $content; ?></p>
    </div>

    <div class="movie_tiles">
    <?php 
      foreach($movie_tiles as $tile):
      $background_url = $tile['movie_background']['sizes']['medium']; 
    ?>
      <a class="movie_tiles__movie_item" href="<?php echo $tile['movie_url'] ?>" target="_blank" rel="noreferrer noopener">
        <div class="movie_tiles__movie_item__overlay">
          <div class="movie_tiles__movie_item__overlay__play-icon">
            <img src="https://vectorified.com/images/play-button-icon-white-39.png" />
          </div>
          <div class="movie_tiles__movie_item__overlay__title"><?php echo $tile['movie_title'] ?></div>
        </div>
        <div class="movie_tiles__movie_item__backdrop" 
          style='background-image: url("<?php echo $background_url ?>");'>
        </div>
      </a>
    <?php endforeach; ?>
    </div>

    <div class="seperator">
      <div class="seperator__line"></div>
      <div class="seperator__link">
        <div class="seperator__link__text">Meer over het basisinkomen</div>
        <div class="seperator__link__arrow">&rarr;</div>
      </div>
    </div>
</div>

<?php 
  $arguments = get_sub_field('arguments');
?>

<div class="dranger c_arguments_favor c_component" id="arguments_favor">
  <div class="entry-content rij kolom1 rkop">

    <div class="arguments">
      <div class="arguments__header">
        <svg class="arguments__header__icon" width="100" height="75" viewBox="0 0 94 94" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect y="34" width="94" height="26" fill="#2BC213"/>
          <rect x="34" y="94" width="94" height="27" transform="rotate(-90 34 94)" fill="#2BC213"/>
        </svg>
        <h3 class="arguments__header__title">Pluspunten</h3>
      </div>
      <?php foreach($arguments as $argument): ?>
        <div class="arguments__item">
          <div class="arguments__item__icon"><?php echo $argument['icon'] ?></div>
          <div class="arguments__item__text">
            <h4><?php echo $argument['title'] ?></h4>
            <p><?php echo $argument['text'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php 
      $reference = get_sub_field('reference');
      if($reference && $reference['text'] && $reference['url']) : 
    ?>
      <div class="seperator">
        <div class="seperator__line"></div>
        <a href="<?php echo $reference['url'] ?>" class="seperator__link">
          <div class="seperator__link__text"><?php echo $reference['text'] ?></div>
          <div class="seperator__link__arrow">&rarr;</div>
        </a>
      </div>
    <?php endif; ?>
  </div>
</div>

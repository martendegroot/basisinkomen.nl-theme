<?php 
  $arguments = get_sub_field('arguments');
?>

<div class="dranger c_arguments_against c_component" id="arguments_against">
  <div class="entry-content kolom1 rkop">

    <div class="wrapper">
      <div class="colored_spacer"></div>
      <div class="arguments">
        <div class="arguments__header">
        <svg class="arguments__header__icon" width="100" height="75" viewBox="60 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M128 101L128 7L155 7L155 101L128 101Z" fill="#D90A0A"/>
            <path d="M148 54.5L74.5 101.698L74.5 7.30161L148 54.5Z" fill="#D90A0A"/>
            <path d="M98 54.5L24.5 101.698L24.5 7.30161L98 54.5Z" fill="white"/>
          </svg>
          <h3 class="arguments__header__title">Tegenwerpingen</h3>
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

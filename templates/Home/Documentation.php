<?php
  $dtcsRow1 = [
    ['sections' => 'P0001-P0199', 'dtcsInfo' => 'Fuel and Air Metering'],
    ['sections' => 'P0200-P0299', 'dtcsInfo' => 'Fuel and Air Metering (Injector Circuit)'],
    ['sections' => 'P0300-P0399', 'dtcsInfo' => 'Ignition System or Misfire'],
  ];
  $dtcsRow2 = [
    ['sections' => 'P0400-P0499', 'dtcsInfo' => 'Auxiliary Emissions Controls'],
    ['sections' => 'P0500-P0599', 'dtcsInfo' => 'Vehicle Speed Controls and Idle Control System'],
    ['sections' => 'P0600-P0699', 'dtcsInfo' => 'Computer Output Circuit'],
  ];
  $dtcsRow3 = [
    ['sections' => 'P0700-P0899', 'dtcsInfo' => 'Transmission']
  ];
?>

<section class="section is-medium pt-6 has-background-light" id='Documentation'>
  <h1 class="title has-text-centered has-text-dark">Diagnostic Trouble Code (DTCs)</h1>
  <div class="container p-5">

    <div class="tile is-ancestor m-5">
      <?php foreach($dtcsRow1 as $R1) {?>
        <div class="tile is-parent">
          <article class="tile is-child box is-h8rem">
            <a href="/phpweb/templates/DTCs/<?php echo $R1['sections'] ?>.php">
              <p class="title has-text-dark is-size-4">
                <?php echo $R1['sections'] ?>
              </p>
              <p class="subtitle has-text-info">
                – <?php echo $R1['dtcsInfo'] ?>
              </p>
            </a>
          </article>
        </div>
      <?php } ?>
    </div>
    
    <div class="tile is-ancestor mx-5 mb-5">
      <?php foreach($dtcsRow2 as $R2) {?>
        <div class="tile is-parent">
          <article class="tile is-child box is-h8rem">
            <a href="/phpweb/templates/DTCs/<?php echo $R2['sections'] ?>.php">
              <p class="title has-text-dark is-size-4">
                <?php echo $R2['sections'] ?>
              </p>
              <p class="subtitle has-text-info">
                – <?php echo $R2['dtcsInfo'] ?>
              </p>
            </a>
          </article>
        </div>
      <?php } ?>
    </div>

    <div class="tile is-ancestor mx-5 mb-5">
      <div class="tile is-parent is-4 is-offset-8">
        <article class="tile is-child box is-h8rem">
          <a href="/phpweb/templates/DTCs/<?php echo $dtcsRow3[0]['sections'] ?>.php">
          <p class="title has-text-dark is-size-4">
            <?php echo $dtcsRow3[0]['sections'] ?>
          </p>
          <p class="subtitle has-text-info">
            <?php echo $dtcsRow3[0]['dtcsInfo'] ?>
          </p>
          </a>
        </article>
      </div>
    </div> 
  </div>
</section>
    
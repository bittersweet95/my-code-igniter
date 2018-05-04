<div class="row">
<?php 
  foreach($vessels as $ship):
    ?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card">
      <div class="card-header">
        <?php echo $ship['Name'] ?>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $ship['Country_ID'] ?></h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
    </div>
   <?php
  endforeach
  ?>
</div>
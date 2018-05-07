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
      <?php 
      $hidden['vesselID'] = $ship['id'];
      echo form_open('fishingvessel/delete_vessel','',$hidden);
      ?>
      <input type="submit" name="submit" value="ลบ" class="btn btn-primary">
      </form>
    </div>
    <img src="<?php echo base_url($ship['imagePath']); ?>" class="card-img-bottom" alt="">
    </div>
   <?php
  endforeach
  ?>
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Profile Summary</h4>
        <hr/>
        <p>Name: <?php echo $uname; ?></p>
        <p>Email: <?php echo $uemail; ?></p>
        <a href="<?php echo base_url(); ?>index.php/supply" class="btn btn-primary">Sell</a>
        <a href="<?php echo base_url(); ?>index.php/inventory" class="btn btn-primary">Inventory</a>
      </div>

    </div>
  </div>
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
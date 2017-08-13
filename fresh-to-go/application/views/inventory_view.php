	    <div class="container">
        <div class="row">        
            <?php foreach ($supply as $sup) : ?> 
            <div class="card w-25" style="margin-top: 5%; margin-bottom: -3%; margin-right: 2%">
                <img class="card-img-top" src="<?php echo base_url('assets/img/5.jpeg'); ?>" width="auto" height="220" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title"><?=  $sup->supply_name  ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?=  $sup->supply_category  ?></h6>
                    <p class="card-text"><?=  $sup->supply_description  ?></p>
                    <p>Price: <code><?= $sup->supply_price ?></code></p>
                    <p>Quantity: <code><?= $sup->supply_stock ?></code></p>
                </div>

                <div class="card-footer text-muted">
                        <?php if ($this->session->userdata('login') && $this->session->userdata('uid')==($sup->supply_owner_id)) { ?>
                        <?=  anchor('supply/edit/'.$sup->id,'Edit',['class'=>'btn btn-success btn-xs']) ?>
                        <?=  anchor('supply/delete/'.$sup->id,'Delete',['class'=>'btn btn-danger btn-xs',
                            'onclick'=>'return confirm(\'Are you sure? \')'
                            ]) ?>
                            <?php } else { ?>
                            <?=  anchor('home/add_to_cart/'.$sup->id,'Add to Cart',['class'=>'btn btn-success  btn-xs','role'=>'button']) ?>
                            <?php } ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
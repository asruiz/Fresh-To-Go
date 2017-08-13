<div class="container">

    <div class="row">

        <div class="col-lg-2">

            <h1 class="my-4">Shop Name</h1>
            <h4>Category</h4>
            <?php $this->load->view('templates/category')?>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-10">
            <h1 class="my-4">Products</h1>
            <div class="row">
                <?php foreach ($comes as $sup) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-90">
                            <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#"><?=  $sup->supply_name ?></a></h4>
                                <h5>P <?= $sup->supply_price ?></h5>
                                <p class="card-text"><i>Sold by <?=  $sup->supply_owner_name ?></i></p>
                                <p class="card-text"><?=  $sup->supply_description ?></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                <hr/>
                                <?php if ($this->session->userdata('login') && $this->session->userdata('uid')==($sup->supply_owner_id)) { ?>
                                <?=  anchor('supply/edit/'.$sup->id,'Edit',['class'=>'btn btn-success btn-xs']) ?>
                                <?=  anchor('supply/delete/'.$sup->id,'Delete',['class'=>'btn btn-danger btn-xs',
                                'onclick'=>'return confirm(\'Are you sure? \')'
                                ]) ?>
                                <?php } else { ?>
                                <?=  anchor('buyer/add_to_cart/'.$sup->id,'Add to Cart',['class'=>'btn btn-success  btn-xs','role'=>'button']) ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->


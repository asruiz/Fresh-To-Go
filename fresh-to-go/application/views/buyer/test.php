 <div class="col-lg-10">
            <h1 class="my-4">Categories</h1>
            <div class="row">
                <?php foreach ($categories as $cat) : ?> 
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-90">
                            <div class="card-block">
                                <h4 class="card-title"><a href="#"><?=  $cat->cat_name ?></a></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-10 -->
    </div>
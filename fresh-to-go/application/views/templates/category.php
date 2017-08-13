        
    
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Choose... 
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><?=  anchor('buyer/all_supplies','All Products',['class'=>'dropdown-item']) ?></li>

                <?php foreach ($starts as $start) : ?>
                <!-- here to get name of product and show all ot same type -->
                <li><?=  anchor('buyer/showme/'.$start->cat_name,$start->cat_name,['class'=>'dropdown-item']) ?></li>
                <?php endforeach; ?>

                <li><?=  anchor('buyer/showmesales','Sales',['class'=>'dropdown-item']) ?></li>
          </ul>
     </div>
    
     
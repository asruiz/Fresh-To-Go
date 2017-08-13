

<h4>My Carts : <?=  $this->cart->total_items()?> <i class="fa fa-shopping-cart"></i></h4>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>

    <?php
        $i=0;
        foreach ($this->cart->contents() as $items):
        $i++;
    ?>

    <tbody>
        <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $items['name'] ?></td>
            <td><?= $items['desc'] ?></td>
            <td><?= $items['qty'] ?></td> 
            <td><?php echo $this->cart->format_number( $items['price'] );?></td>
        </tr>
        
        <?php endforeach;?>

        <tr>
            <th scope="row">Total</th>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo $this->cart->format_number( $this->cart->total() ); ?></td>
        </tr>
    </tbody>
</table>
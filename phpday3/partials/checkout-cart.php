<?php
$string = file_get_contents('items.json');
$items  = json_decode($string, true);
?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h5><i class="fa fa-shopping-cart fa-lg"></i> Shopping Cart</h5>
                    </div>
                    <div class="col-6">
                        <a href="index.php" class="btn btn-primary btn-sm btn-block">
                            <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <h3>Product</h3>
                            </div>
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-3">
                                        Price
                                    </div>
                                    <div class="col-3">
                                        Quantity
                                    </div>
                                    <div class="col-4">
                                        Subtotal
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php foreach ($_SESSION['cart'] as $key => $value): ?>
                        <hr>
                        <div class="row">
                            <div class="col-1"><img class="img-fluid" src="<?php echo $items[$key]['img'] ?>">
                            </div>
                            <div class="col-6">
                                <h5 class="product-name"><strong><?php echo $items[$key]['name'] ?></strong></h5>
                                <h5><small><?php echo $items[$key]['description'] ?></small></h5>
                            </div>
                            <div class="col-5">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <h6 class=""><strong>P </strong><strong class="product-price"><?php echo $items[$key]['price'] ?></strong></h6>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" min="1" class="form-control form-control-sm product-quantity" value="<?php echo $value ?>">
                                    </div>
                                    <div class="col-4">
                                        <h6><strong class="product-lineprice"><?php echo $value ?></strong></h6>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-link btn-xs product-removal">
                                            <i class="fa fa-trash-o fa-2x"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach?>
            </div>
            <div class="card-footer text-muted">
                <div class="row text-center">
                    <div class="col-md-9">
                        <h4 class="text-right">Total: 
                        <strong id="cartTotalCost"></strong>
                        </h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-success btn-block">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
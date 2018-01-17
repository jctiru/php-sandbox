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
                        <button type="button" class="btn btn-primary btn-sm btn-block">
                            <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2"><img class="img-fluid" src="img/Zeronots1_01.jpg">
                    </div>
                    <div class="col-4">
                        <h4 class="product-name"><strong>Product name</strong></h4>
                        <h4><small>Product description</small></h4>
                    </div>
                    <div class="col-6">
                        <div class="row align-items-center">
                            <div class="col-6 text-right">
                                <h6 class=""><strong>25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control form-control-sm" value="1">
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-link btn-xs">
                                    <i class="fa fa-trash-o fa-2x"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-2"><img class="img-fluid" src="img/Overlord_Volume_01.png">
                    </div>
                    <div class="col-4">
                        <h4 class="product-name"><strong>Product name</strong></h4>
                        <h4><small>Product description</small></h4>
                    </div>
                    <div class="col-6">
                        <div class="row align-items-center">
                            <div class="col-6 text-right">
                                <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control form-control-sm" value="1">
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-link btn-xs">
                                    <i class="fa fa-trash-o fa-2x"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="row text-center">
                    <div class="col-md-9">
                        <h4 class="text-right">Total <strong>$50.00</strong></h4>
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
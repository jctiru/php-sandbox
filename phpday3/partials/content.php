<?php
$string = file_get_contents('items.json');
$items  = json_decode($string, true);
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form class="form-inline">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option disabled selected>Category</option>
                        <option>All</option>
                        <option>Horror</option>
                        <option>Romantic Comedy</option>
                        <option>Isekai</option>
                        <option>Action</option>
                    </select>
                    <button type="button" class="btn btn-primary ml-1">Search</button>
                </form>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <?php foreach ($items as $index => $item): ?>
                        <div class="col-lg-3 col-md-6 col-12 mt-3 mb-3 d-flex">
                            <div class="card mb-xs-5 mt-xs-5">
                                <img class="card-img-top" src="<?php echo $item['img']; ?>">
                                <div class="card-body">
                                    <h4 class="card-title"><strong><?php echo $item['name']; ?></strong></h4>
                                    <h6 class="card-subtitle mb-3 text-muted"><?php echo $item['category']; ?></h6>
                                    <p class="card-text">
                                        <?php echo $item['description'] ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <?php if ($_SESSION['username'] == 'admin'): ?>
                                        <button data-index="<?php echo $index ?>" data-toggle="modal" data-target="#editModal" class="btn btn-block btn-primary modalEditButton"><i class="fa fa-pencil-square-o fa-lg"></i> Edit</button>
                                        <button data-index="<?php echo $index ?>" data-toggle="modal" data-target="#deleteModal" class="btn btn-block btn-danger modalDeleteButton"><i class="fa fa-trash-o fa-lg"></i> Delete</button>
                                    <?php else: ?>
                                        <button data-index="<?php echo $index ?>" class="btn btn-block btn-primary mr-1 cartButton"><i class="fa fa-shopping-cart fa-lg"></i> Add to Cart</button>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="modalBody" class="modal-body">
                                <img class="modalItemImage" style="width: 100%;" src="">
                                <form id="modalForm" action="" method="POST">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control modalItemTitle" type="text" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input class="form-control modalItemCategory" type="text" name="category">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control modalItemDescription" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control modalItemPrice" type="text" name="price">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" form="modalForm" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="modalBody" class="modal-body">
                                <div class="card">
                                    <img class="card-img-top modalItemImage" src="">
                                    <div class="card-body">
                                        <h4 class="card-title modalItemTitle"><strong></strong></h4>
                                        <h6 class="card-subtitle mb-3 text-muted modalItemCategory"></h6>
                                        <p class="card-text modalItemDescription"></p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="modalItemPrice"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" data-index="" class="btn btn-danger modalItemDelete">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
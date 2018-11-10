<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 10:13 AM
 */

include("index_view.php");
include ("header.php");
?>


<span class="count"><?= $this->cart->total_items() ?></span>
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12">
                <?php foreach($details as $key=>$value){?>
                <main class="card">
                    <div class="row no-gutters">
                        <aside class="col-sm-6 border-right">
                            <article class="gallery-wrap">
                                <div class="img-big-wrap">
                                    <div> <a href="<?php echo base_url(); ?><?php echo $value->file_path;?>" data-fancybox="">
                                            <img src="<?php echo base_url(); ?><?php echo $value->file_path;?>">
                                        </a></div>
                                </div> <!-- slider-product.// -->
                            </article> <!-- gallery-wrap .end// -->
                        </aside>
                        <aside class="col-sm-6">
                            <article class="card-body">
                                <!-- short-info-wrap -->
                                <h3 class="title mb-3"><?php echo $value->title;?></h3>

                                <div class="mb-3">
                                    <var class="price h3 text-warning">
                                        <span class="currency">LKR </span><span class="num"><?php echo $value->price;?></span>
                                    </var>
                                </div> <!-- price-detail-wrap .// -->
                                <dl>
                                    <dt>Description</dt>
                                    <dd><p><?php echo $value->description;?> </p></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-3">ISBN No</dt>
                                    <dd class="col-sm-9"><?php echo $value->isbn_no;?></dd>

                                    <dt class="col-sm-3">Author</dt>
                                    <dd class="col-sm-9"><?php echo $value->author;?></dd>

                                    <dt class="col-sm-3">Year</dt>
                                    <dd class="col-sm-9"><?php echo $value->year;?></dd>

                                    <dt class="col-sm-3">Stock Quantity</dt>
                                    <dd class="col-sm-9"><?php echo $value->stock_quantity;?></dd>

                                    <dt class="col-sm-3">Category</dt>
                                    <dd class="col-sm-9"><?php echo $value->name;?></dd>
                                </dl>
                                <div class="rating-wrap">

                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div> <!-- rating-wrap.// -->
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <dl class="dlist-inline">
                                            <dt>Quantity: </dt>
                                            <dd>
                                                <input type="number" name="quantity" value="1" class="quantity form-control">
                                            </dd>
                                        </dl>  <!-- item-property .// -->
                                    </div> <!-- col.// -->
                                </div> <!-- row.// -->
                                <hr>
                                <a href="<?php echo site_url('ShoppingCartController/addToCart/'.$value->id); ?>">Buy Now</a>
                                <button class="add_cart btn btn-success">Add To Cart  </button>
                                <!-- short-info-wrap .// -->
                            </article> <!-- card-body.// -->
                        </aside> <!-- col.// -->
                    </div> <!-- row.// -->
                </main> <!-- card.// -->
                <!-- PRODUCT DETAIL .// -->
                <?php } ?>
            </div> <!-- col // -->


            <!-- WHO VIEWED THIS BOOK ALSO VIEWED -->
            <aside class="col-xl-12 col-md-12 col-sm-12">
                <div class="card mt-3">
                    <div class="card-header">
                        The People who viewed this book also viewed
                    </div>
                    <div class="card-body row">
                        <div class="col-xl-2 col-md-3 col-sm-12">
                            <figure class="item border-bottom mb-3">
                                <a href="#" class="img-wrap"> <img src="<?php echo base_url(); ?>assets/images/items/2.jpg" class="img-md"></a>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">The name of product</a>
                                    <div class="price-wrap mb-3">
                                        <span class="price-new">$280</span>
                                    </div> <!-- price-wrap.// -->
                                </figcaption>
                            </figure> <!-- card-product // -->
                        </div> <!-- col.// -->
                    </div> <!-- card-body.// -->
                </div> <!-- card.// -->
            </aside> <!-- col // -->
        </div> <!-- row.// -->
    </div><!-- container // -->

    <script>
        $(document).ready(function() {

        });
    </script>

</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->
<?php
include("footer.php");
?>


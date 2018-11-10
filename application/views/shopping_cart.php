<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 11:14 AM
 */

include("index_view.php");
include("header.php");
?>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
    <div class="container">

        <div class="row">
            <main class="col-sm-9">

                <div class="card">
                    <table class="table table-hover shopping-cart-wrap">
                        <thead class="text-muted">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col" width="120">Quantity</th>
                            <th scope="col" width="120">Price</th>
                            <th scope="col" class="text-right" width="200">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($items as $key=>$value){?>

                        <tr>
                            <td>
                                <figure class="media">
                                    <div class="img-wrap"><img src="<?php echo base_url(); ?><?php echo $value;?>" class="img-thumbnail img-sm"></div>
                                    <figcaption class="media-body">
                                        <h6 class="title text-truncate"><?php echo $value?> </h6>
                                        <dl class="dlist-inline small">
                                            <dt>ISBN#:</dt>
                                            <dd><?php echo $value;?></dd>
                                        </dl>
                                    </figcaption>
                                </figure>
                            </td>
                            <td>
                                <input type="number" name="quantity" id="<?php echo $value;?>" value="1" class="quantity form-control">
                            </td>
                            <td>
                                <div class="price-wrap">
                                    <var class="price"><?php echo $value;?></var>
                                </div> <!-- price-wrap .// -->
                            </td>
                            <td class="text-right">
                                <a href="" class="btn btn-outline-danger"> × Remove</a>
                            </td>
                        </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div> <!-- card.// -->

            </main> <!-- col.// -->
            <aside class="col-sm-3">
                <p class="alert alert-success">These are the items of your order Please Checkout to Complete the Purchase</p>
                <dl class="dlist-align h4">
                    <dt>Total:</dt>
                    <dd class="text-right"><strong>50</strong></dd>
                </dl>
                <hr>
                <figure class="itemside mb-3">
                    <aside class="aside"><img src="<?php echo base_url(); ?>assets/images/icons/pay-visa.png"></aside>
                    <div class="text-wrap small text-muted">
                        Pay by VISA Card
                    </div>
                </figure>
                <figure class="itemside mb-3">
                    <aside class="aside"> <img src="<?php echo base_url(); ?>assets/images/icons/pay-mastercard.png"> </aside>
                    <div class="text-wrap small text-muted">
                        Pay by MasterCard and Save 40%. <br>
                    </div>
                </figure>
                <div class="itemside mb-3">
                    <div class="itemside mb-1">
                        <a href="#" class="btn  btn-danger">Go Back </a>
                    </div>
                    <div class="itemside mb-1">
                        <a href="#" class="btn  btn-success">Proceed Checkout </a>
                    </div>
                </div>



            </aside> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<?php
include("footer.php");
?>
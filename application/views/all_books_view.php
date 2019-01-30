<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/27/2018
 * Time: 5:30 PM
 */

include("index_view.php");
include ("header.php");
?>
    <script type="text/javascript">
        function myFunction() {

            var bookid       = document.getElementById('bookid').value ;
            var quantity     = 1;
            var price        = document.getElementById('price').value;
            var title        = document.getElementById('title').value;

            $.ajax({
                url: "<?php echo site_url('ShoppingCartController/addToCart');?>",
                method: "POST",
                data: {
                    bookid  : bookid,
                    quantity: quantity,
                    price   : price,
                    title   : title
                },
                success: function(data) {
                    $('.count').html(data.count);
//                location.reload();
                    console.log(data);
                }
//                    success: function (data) {
//                        $('#detail_cart').html(data);
//                    }
            });
        }

    </script>

    <div class="col-lg-12-24 col-sm-10 center">
        <form action="<?php echo base_url() . 'index.php/ItemsListController/viewAllBooks'; ?>" method="get" class="py-1">
            <div class="input-group w-100">
                <select id="category" name="category" class="form-control">
                    <?php foreach($category as $key=>$value):?>
                        <option value="<?php echo $key?>"><?php echo $value?></option>
                    <?php endforeach;?>
                </select>
                <input type="text" class="form-control" style="width:50%;" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
            </div>
        </form> <!-- search-wrap .end// -->
    </div> <!-- col.// -->

<!-- ========================= SECTION ITEMS ========================= -->
<section class="section-request bg padding-y-sm">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg text-uppercase">View All Books</h4>
        </header>

        <div class="row-sm">
            <?php foreach($details as $key=>$value){?>
                <div class="col-md-2">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="<?php echo base_url(); ?><?php echo $value->file_path;?>"></div>
                        <figcaption class="info-wrap">
                            <h6 class="title"><a href="<?php echo base_url(); ?>index.php/BookDetailController/viewBookDetail/<?php echo $value->id;?>"><?php echo $value->title;?></a></h6>

                            <input type="hidden" value="<?php echo $value->id;?>" name="bookid"  id="bookid" >
                            <input type="hidden" value="<?php echo $value->price;?>" name="price"  id="price" >
                            <input type="hidden" value="<?php echo $value->title;?>" name="title"  id="title" >
                            <input type="hidden" value="<?php echo $value->file_path;?>" name="image"  id="image" >
                            <div class="price-wrap">
                                <span class="price-new">LKR <?php echo $value->price;?></span>
                                <button class="btn btn-success btn-sm" name="add_cart" onclick="myFunction();">Add To Cart  </button>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col // -->
            <?php } ?>
        </div> <!-- row.// -->
        <br>
        <div class="col-md-6 text-right">
            <ul class="tsc_pagination">

                <!-- Show pagination links -->
                <?php foreach ($links as $link) {
                    echo "<span class='price-new'>". $link."</span>";
                } ?>
            </ul>
        </div>


    </div><!-- container // -->
</section>
<!-- ========================= SECTION ITEMS .END// ========================= -->

<?php
include("footer.php");
?>
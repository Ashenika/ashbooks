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
                            <h6 class="title "><a href="<?php echo base_url(); ?>index.php/BookDetailController/index"><?php echo $value->title;?></a></h6>

                            <div class="price-wrap">
                                <span class="price-new"><?php echo $value->price;?></span>
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
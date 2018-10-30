<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/26/2018
 * Time: 10:52 PM
 */
include("index_view.php");
include ("header.php");
?>
<html>
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-y-sm">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row row-sm">
                        <aside class="col-md-6-24">
                            <h5 class="text-uppercase">Book Categories</h5>
                            <ul class="menu-category list-dots">
                                <li> <a href="#">Novels </a></li>
                                <br>
                                <li> <a href="#">Science Fictions and Fantasy</a></li>
                                <br>
                                <li> <a href="#">Short Stories and Anthologies</a></li>
                                <br>
                                <li> <a href="#">Education  </a></li>
                            </ul>

                        </aside> <!-- col.// -->
                        <div class="col-md-12-24">

                            <!-- ================= main slide ================= -->
                            <div class="owl-init slider-main owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                <div class="item-slide">
                                    <img src="<?php echo base_url(); ?>assets/images/banners/slide1.jpg">
                                        <h6 class="title">Novels</h6>
                                        <a href="#">Good link</a>
                                </div>
                                <div class="item-slide">
                                    <img src="<?php echo base_url(); ?>assets/images/banners/slide2.jpg">
                                </div>
                                <div class="item-slide">
                                    <img src="<?php echo base_url(); ?>assets/images/banners/slide3.jpg">
                                </div>
                                <div class="item-slide">
                                    <img src="<?php echo base_url(); ?>assets/images/banners/slide4.jpg">
                                </div>
                            </div>
                            <!-- ============== main slidesow .end // ============= -->

                        </div> <!-- col.// -->

                        <aside class="col-md-3">
                            <figure class="col-lg-6-24">
                                <img src="<?php echo base_url(); ?>assets/images/banners/banner.jpg" height="330" class="img-bg">
                            </figure>
                        </aside>

                    </div> <!-- row.// -->
                </div> <!-- card-body .// -->
            </div> <!-- card.// -->
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">MACHINERY</h4>
            </header>

            <div class="card ">
                <div class="row no-gutters">
                    <div class="col-md-3">

                        <article href="#" class="card-banner h-100 bg2">
                            <div class="card-body zoom-wrap">
                                <h5 class="title">Books come in many Types</h5>
                                <p>Some books are to read, some books you enjoy
                                    but some books just swallow you up Heart and Soul. It`s Love from Within make your choice.. </p>
                                <a href="<?php echo base_url(); ?>index.php/ItemsListController/index" class="btn btn-warning">Explore Books</a>
                                <a href="<?php echo base_url(); ?>index.php/AdminController/index" class="btn btn-warning">Admin Test</a>
                            </div>
                        </article>

                    </div> <!-- col.// -->
                    <div class="col-md-9">
                        <ul class="row no-gutters border-cols">
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Novels  </p>
                                        <img class="img-sm" src="<?php echo base_url(); ?>assets/images/items/1.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Science Fictions and Fantasy</p>
                                        <img class="img-sm" src="<?php echo base_url(); ?>assets/images/items/2.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Short Stories and Anthologies</p>
                                        <img class="img-sm" src="<?php echo base_url(); ?>assets/images/items/4.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Education </p>
                                        <img class="img-sm" src="<?php echo base_url(); ?>assets/images/items/5.jpg">
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <ul class="row no-gutters border-cols">
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Romantic Fictions</p>
                                        <img class="img-sm" src="<?php echo base_url(); ?>assets/images/items/6.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Language</p>
                                        <img class="img-sm" src="<?php echo base_url(); ?>assets/images/items/7.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3">
                                <a href="#" class="itembox">
                                    <div class="card-body">
                                        <p class="word-limit">Kids</p>
                                        <img class="img-sm" src="<?php echo base_url(); ?>assets/images/items/8.jpg">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->

            </div> <!-- card.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


</html>
<?php
include("footer.php");
?>
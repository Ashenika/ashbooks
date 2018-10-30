<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 9:31 PM
 */

include ("admin_main_view.php");
?>

<section id="content_body">
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h3 class="box-title">Books List</h3>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                            <button type="button" class="btn btn-primary btn-sm pull-right" onclick="window.location.href='#'"><i class="fa fa-plus" style="padding-right: 5px;"></i>Book</button>
                        </div>
                    </div>
                </div>

        <div class="box-body">

            <form method="get">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="" class="control-label">ISBN No</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="col-sm-2">
                        <label for="" class="control-label">Book Category</label>
                        <select name="source" id="source" class="form-control chosen">
                            <option value="">-Select Type-</option>

                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="" class="control-label">Author</label>
                        <input type="text" class="form-control" name="date_from" id="date_from" placeholder="Date From" value="">
                    </div>
                    <div class="col-sm-2">
                        <label for="" class="control-label">Title</label>
                        <input type="text" class="form-control " name="date_to" id="date_to" placeholder="Date To" value="">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <button class="btn btn-default pull-right" type="submit"><i class="fa fa-search"></i> Filter</button>
                    </div>
                </div>
            </form>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center" width="3%">#</th>
                    <th class="text-center" width="5%">Book Title</th>
                    <th class="text-center" width="5%">ISBN No</th>
                    <th class="text-center" width="5%">Category</th>
                    <th class="text-center" width="5%">Year</th>
                    <th class="text-center" width="5%">Author</th>
                    <th class="text-center" width="5%">Publisher</th>
                    <th class="text-center" width="5%">Price</th>
                    <th class="text-center" width="5%">Stock</th>
                    <th class="text-center" width="5%">Action</th>
                </tr>
                </thead>
                <tbody>

                <tr>

                </tr>

                </tbody>
            </table>

            <br>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

            </div>
            <div class="col-md-6 text-right">

            </div>

        </div>
    </div>
        </div>
    </div>
</section>
<!-- !!Main content -->
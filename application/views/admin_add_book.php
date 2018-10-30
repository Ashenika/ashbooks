<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 9:17 PM
 */

include ("admin_main_view.php");
?>
<section id="content_body">
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Category</h3>
                </div>
            <br>
        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="box-body">

                <div class="form-group @if($errors->has('category')) has-error @endif">
                    <label for="" class="col-sm-2 control-label required">Book Category</label>
                    <div class="col-sm-8">
                        <select name="category" id="category" class="form-control chosen">
                            <option value="">-Select Type-</option>
                        </select>
                    </div>
                </div>
                <div class="form-group @if($errors->has('isbn')) has-error @endif">
                    <label for="" class="col-sm-2 control-label required">ISBN No</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="isbn" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('amount')) has-error @endif">
                    <label for="" class="col-sm-2 control-label required">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="amount" value="">

                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Author</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="remark" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="remark" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Publisher Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="remark" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Year</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="remark" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="remark" value="LKR">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Stock Quantity</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="remark" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('file')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Book Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="file[]" multiple>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div><!-- /.box-body -->
        </form>
            </div><!-- /.box -->
        </div>
    </div>
</section>
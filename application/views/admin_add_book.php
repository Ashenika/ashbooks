<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 9:17 PM
 */

include ("admin_main_view.php");
?>

<style>

</style>

<section id="content_body">
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Book</h3>
                </div>
        <form action="<?php echo base_url(); ?>index.php/AdminController/addBook" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="box-body">

                <div class="form-group @if($errors->has('category')) has-error @endif">
                    <label for="" class="col-sm-2 control-label required">Book Category</label>
                    <div class="col-sm-6">
                        <select required id="category" name="category" class="form-control">
                            <?php foreach($category as $key=>$value):?>
                                <option value="<?php echo $key?>"><?php echo $value?></option>
                            <?php endforeach;?>

                        </select>
                    </div>
                </div>

                <div class="form-group @if($errors->has('isbn')) has-error @endif">
                    <label for="" class="col-sm-2 control-label required">ISBN No</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="isbn" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('amount')) has-error @endif">
                    <label for="" class="col-sm-2 control-label required">Title</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="title" value="">

                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Author</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="author" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="description" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Publisher Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="publisher" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Year</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="year" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="price" value="LKR">
                    </div>
                </div>
                <div class="form-group @if($errors->has('remark')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Stock Quantity</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="stockQty" value="">
                    </div>
                </div>
                <div class="form-group @if($errors->has('file')) has-error @endif">
                    <label for="" class="col-sm-2 control-label">Book Image</label>
                    <div class="col-sm-6">
                        <input type="file" multiple="" name="images[]">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div><!-- /.box-body -->
        </form>
            </div><!-- /.box -->
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".chosen").chosen();

    });
</script>
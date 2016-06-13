@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Customer</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="firstname" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Middle Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="middlename" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="lastname" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email Address</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="text" name="phonenumber" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="button" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</button>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Add</button>
            </div><!-- box-footer -->
        </div><!-- /.box -->
    </div>
</div>
@endsection

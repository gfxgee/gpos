@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
                 @if (session('status'))
        <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('status') }}
                </div>
                @endif
                <a href="{{ url('items/add') }}" class="btn btn-primary margin-20 pull-right">New Item</a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">List of Item</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="table table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>c->customer_id</td>
                            <td>c->firstname.' '.c->lastname</td>
                            <td>c->email</td>
                            <td>c->phonenumber</td>
                            <th>test</th>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer" style="display:none;">
            </div><!-- box-footer -->
        </div><!-- /.box -->
    </div>
</div>
@endsection

@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-md-12" style="padding-bottom: 20px;">
        @if (session('status'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            {{ session('status') }}
        </div>
        @endif
        <a href="{{ url('customers/add') }}" class="btn btn-primary margin-20 pull-right">New Customer</a>
    </div>
    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Customer List</h3>
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
                        @foreach($cust as $c)
                        <tr>
                            <td>{{ $c->customer_id }}</td>
                            <td>{{ $c->firstname.' '.$c->lastname }}</td>
                            <td>{{ $c->email }}</td>
                            <td>{{ $c->phonenumber }}</td>
                            <th><a href="{{ url('customers/edit/'.$c->customer_id) }}" data-toggle="tooltip" data-placement="top"  title="Edit" class="btn btn-link glyphicon glyphicon-edit" id="{{ $c->customer_id }}"></button></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer" style="display:none;">
            </div><!-- box-footer -->
        </div><!-- /.box -->
    </div>
</div>
@endsection

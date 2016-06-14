@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Customer</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal" method="post" action="{{ url('customers/add') }}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ old('firstname') }}" name="firstname" class="form-control" placeholder="">
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Middle Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="middlename" value="{{ old('middlename') }}" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" placeholder="">
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label">Email Address</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="text" name="phonenumber" value="{{ old('phonenumber') }}" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <a type="button" href="{{ url('customers') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Add</button>
            </div><!-- box-footer -->
             </form>
        </div><!-- /.box -->
    </div>
</div>
@endsection

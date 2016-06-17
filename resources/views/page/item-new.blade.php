@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Item</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal" method="post" action="{{ url('items/add') }}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label" style="color: red;">Item Name</label>
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
                            <label class="col-sm-2 control-label" style="color: red;">Category</label>
                            <div class="col-sm-10">
                                <input type="text" name="middlename" value="{{ old('middlename') }}" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label" style="color: red;">Cost</label>
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
                            <label class="col-sm-2 control-label" style="color: red;">Retail Cost</label>
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
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="phonenumber" cols="17" rows="5" class="form-control">{{ old('phonenumber') }}</textarea>
                            </div>
                        </div>
                    </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <a type="button" href="{{ url('customers') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Add</button>
            </div><!-- box-footer -->
             </form>
        </div><!-- /.box -->
    </div>
</div>
@endsection

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Cats</h1>
@stop

@section('content')
    <p>You're in cat section ... omg it works</p>
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add a cat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('cats.create') }}" method="post">
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cat name</label>
                  <input class="form-control" id="InputCatName" placeholder="Enter cat name" type="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Allowed food per day</label>
                  <input class="form-control" id="InputFood" placeholder="Enter the number of meal per day" type="int">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Badge id</label>
                  <input class="form-control" id="InputBadgeid" placeholder="Enter the badge id of your cat" type="string">
                </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <!-- /.box --></div>
@stop

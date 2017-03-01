@extends('adminlte::page')

@section('title', 'Chatmallow')

@section('content_header')
    <h1>Cats</h1>
@stop

@section('content')

    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajoutez Vos chats ici</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('cats.create') }}" method="post">
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cat name</label>
                  <input class="form-control" id="exampleInputEmail1" placeholder="Enter cat name" type="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Allowed food per day</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="Enter the number of meal per day" type="password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Badge id</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="Enter the badge if of your cat" type="password">
                </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <!-- /.box --></div>
@stop

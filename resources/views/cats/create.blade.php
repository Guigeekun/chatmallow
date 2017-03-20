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
            <form role="form" action="{{ route('cats.create') }}" method="POST">
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group">
                  <label>Cat name</label>
                  <input class="form-control" name="name" placeholder="Enter cat name">
                </div>
                <div class="form-group">
                  <label>Allowed food per day</label>
                  <input class="form-control" name="allowedfood" placeholder="Enter the number of meal per day">
                </div>
                <div class="form-group">
                  <label>Badge ID</label>
                  <input class="form-control" name="badgeid" placeholder="Enter the badge if of your cat">
                </div>
                <div class="form-group">
                  <label>Icon</label>
                  <input class="form-control" name="icon" placeholder="Enter an Icon ID">
                </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <!-- /.box --></div>
@stop

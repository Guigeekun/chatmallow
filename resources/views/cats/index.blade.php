@extends('adminlte::page')

@section('title', 'Cats')

@section('content_header')
    <h1>Cats</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('cats.create') }}" method="post">
                {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  <label for="name">Cat Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter a cat name" value="{{ old('name') }}">
                  @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th>ID</th>
              <th>name</th>
              <th>created</th>
              <th>updated</th>
            </tr>
            @foreach ($cats as $cat)
            <tr>
              <td>{{$cat->id}}</td>
              <td>{{$cat->name}}</td>
              <td>{{$cat->created_at}}</td>
              <td>{{$cat->updated_at}}</td>
            </tr>
            @endforeach


          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@stop

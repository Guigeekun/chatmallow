@extends('adminlte::page')

@section('title', 'Cats')

@section('content_header')
    <h1>Cats</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box" id="catTableBox">
        <div class="box-body table-responsive">
          <table id="catTable" class="table table-hover">
            <thead>
              <tr>
                <th>Icon</th>
                <th>name</th>
                <th>Has ate today</th>
          <!-- <th>Created at</th> -->
                <th>Cat weight(Kg)</th>
                <th>ID</th>
                <th>Delete ?</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($cats as $cat)
              <tr>
                <td><img src="../img/catIcon/{{$cat->icon}}.png" width="50px"></td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->usedfood}}</td>
          <!-- <td>{{$cat->created_at}}</td> -->
                <td>{{$cat->allowedfood}}</td>        
                <td>{{$cat->id}}</td>
                <td>
                  <form role="form" action="{{route('cats.delete')}}" method="POST">
                    {!! csrf_field() !!}
                    <input name="id" value="{{$cat->id}}" type="hidden">
                    <button type="submit" class="btn btn-primary" value="{{$cat->id}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
        <!-- /.box-body -->
    </div>
      <!-- /.box -->
  </div>
</div>
@stop
@section('js')
<script>
$(function(){$('#catTable').dataTable({
    "info": false,
    "lengthChange": false,
    "order": [1, 'asc'],
    "language": { infoEmpty: "There are no cats here.",
                emptyTable: "There are no cats here.",
                zeroRecords: "There are no cats here."
},});});
</script>
@stop

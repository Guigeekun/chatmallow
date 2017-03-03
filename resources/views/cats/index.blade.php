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
                <th>ID</th>
                <th>name</th>
                <th>created</th>
                <th>Icon</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($cats as $cat)
              <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->created_at}}</td>
                <td>{{$cat->icon}}</td>
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

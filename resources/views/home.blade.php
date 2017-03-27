@extends('adminlte::page')

@section('title', 'Chatmallow')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">
          <p>Global stats here !</p>
          <h1>WIP</h1>
      </div>
        <!-- /.box-body -->
    </div>
      <!-- /.box -->
  </div>
</div>
<ul class="timeline">
@if(empty($timeline[0]))
<li class="time-label">
    <span class="bg-red">
        {{date("l j F")}}
    </span>
</li>
<li>
    <i class="fa fa-frown-o bg-red"></i>
    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date("H:i")}}</span>

        <h3 class="timeline-header"><a>Empty</a></h3>
        <div class="timeline-body">
          <p>Il n'y a aucun event.</p>
        </div>
    </div>
</li>
@else
@foreach ($timeline as $events)
    <li class="time-label">
        <span class="bg-{{$color}}">
            {{$events[0]['date']}}
        </span>
    </li>
  @foreach ($events as $event)
    <li>
        <i class="fa {{$event['icon']}} bg-{{$event['color']}}"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> {{$event['hour']}}</span>

            <h3 class="timeline-header"><a>{{$event['type']}}</a></h3>
            <div class="timeline-body">
              <p>{{$event['MSGcontent']}}</p>
            </div>
        </div>
    </li>
  @endforeach
@endforeach
@endif
    <!-- END timeline item -->
    <li>
      <i class="fa fa-clock-o bg-gray"></i>
    </li>
</ul>
@stop

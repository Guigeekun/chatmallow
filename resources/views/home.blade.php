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
@foreach ($timeline as $events)
    <li class="time-label">
        <span class="bg-red">
            {{ $events->date}}
        </span>
    </li>
  @foreach ($events->events as $event)
    <li>
        <i class="fa fa-rocket bg-blue"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa {{$event->icon}}"></i> {{$event->hour}}</span>

            <h3 class="timeline-header"><a>{{$event->type}}</a></h3>
            <div class="timeline-body">
              <p>{{$event->MSGcontent}}</p>
            </div>
        </div>
    </li>
  @endforeach
@endforeach
    <li class="time-label">
        <span class="bg-red">
            03 March. 2017
        </span>
    </li>
    <!-- /.timeline-label -->
    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-rocket bg-blue"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 15:47</span>

            <h3 class="timeline-header"><a href="">It lives !!</a></h3>

            <div class="timeline-body">
              <p>First launch of Chatmallow</p>
              <img src="../img/LogoMini.png" width="50%"></img>
            </div>
        </div>
    </li>
    <!-- END timeline item -->
    <li>
      <i class="fa fa-clock-o bg-gray"></i>
    </li>
</ul>
@stop

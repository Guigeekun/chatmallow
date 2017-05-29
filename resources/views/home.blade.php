@extends('adminlte::page')

@section('title', 'Chatmallow')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body" style="font-size: 3em; text-align: center;">
          <td>
            @if($supply->food_supply >= 80)
              <i class="fa fa-cutlery" aria-hidden="true" style="color: green;">
            @elseif($supply->food_supply >= 20)
              <i class="fa fa-cutlery" aria-hidden="true" style="color: yellow;">
            @else
              <i class="fa fa-cutlery" aria-hidden="true" style="color: red;">
            @endif
          </i> {{$supply->food_supply}}%</td>
          <br>
          <td>
            @if($supply->water_supply >= 80)
              <i class="fa fa-tint" aria-hidden="true" style="color: green;">
            @elseif($supply->water_supply >= 20)
              <i class="fa fa-tint" aria-hidden="true" style="color: yellow;">
            @else
              <i class="fa fa-tint" aria-hidden="true" style="color: red;">
            @endif
          </i> ~{{$supply->water_supply}}%</td>
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

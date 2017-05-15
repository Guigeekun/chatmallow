@extends('adminlte::page')

@section('title', 'Chatmallow')

@section('content_header')
    <h1>Config & info</h1>
@stop

@section('content')
    <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">General info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Version</dt>
                <dd>Chatmallow BETA</dd>
                <br>
                <dt>Développement</dt>
                <dd>Développé dans le cadre du PPE de Si 2017 au lycée Gustave Eiffel</dd>
                <br>
                <dt>Développement web</dt>
                <dd>MORIZOT Marvin</dd>
                <dd>BENOIT Guilleme</dd>
                <br>
                <dt>Développement physique</dt>
                <dd>BELIAEFF Marina</dd>
                <dd>CARRY Mathias</dd>
                <dd>JEAN Raphaël</dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
@stop

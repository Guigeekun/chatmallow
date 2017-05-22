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
                <dd>PROTO Chatmallow MNG</dd>
                <br>
                <dt>Support physique</dt>
                <dd>Chatmallow Manager (ce site) ne peux fonctionner qu'avec le support physique Chatmallow</dd>
                <br>
                <dt>Développement</dt>
                <dd>Développé dans le cadre du PPE de Si 2017 au lycée Gustave Eiffel</dd>
                <br>
                <dt>Composant</dt>
                <dd><a href="https://laravel.com/">Laravel</a></dd>
                <dd><a href="https://adminlte.io/themes/AdminLTE/index2.html">Admin LTE</a></dd>
                <dd><a href="http://fontawesome.io/">Font Awesome</a></dd>
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

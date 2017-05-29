@extends('adminlte::page')

@section('title', 'Chatmallow')

@section('content_header')
    <h1>Config & info</h1>
@stop

@section('content')
    <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-info-circle" aria-hidden="true"></i>

              <h3 class="box-title">General info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Version</dt>
                <dd>PROTO Chatmallow MNG</dd>
                <br>
                <dt>Support physique</dt>
                <dd>Chatmallow Manager (ce site) ne peux fonctionner qu'avec le support physique Chatmallow.</dd>
                <br>
                <dt>Développement</dt>
                <dd>Développé dans le cadre du PPE de Si 2017 au lycée Gustave Eiffel.</dd>
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

          <div class="box box-solid">
                  <div class="box-header with-border">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>

                    <h3 class="box-title">FAQ</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <dl class="dl-horizontal">
                      <dt>Water level</dt>
                      <dd>Le niveau d'eau ne peux afficher que "~25%" ou "~75%" suite à des contraintes matérielles.</dd>
                      <br>
                      <dt>Cats update</dt>
                      <dd>On ne peut pour l'instant pas mettre à jour les informations d'un chat, on peut cependant le supprimer et le recréer.</dd>
                      <br>
                      <dt>Cats logs</dt>
                      <dd>L'historique relatif à un chat est supprimé en même temps que le chat.</dd>
                      <dd>L'historique ne conserve que les 30 dernier événements.
                    </dl>
                  </div>
                  <!-- /.box-body -->
                </div>
@stop

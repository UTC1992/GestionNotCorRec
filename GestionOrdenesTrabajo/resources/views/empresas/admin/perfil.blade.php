@extends('layouts.dashboard')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Perfil
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('user.perfil') }}"><i class="fa fa-user"></i>Perfil</a></li>
      <li class="active">Aqui</li>
    </ol>
  </section>
  <div class="container">
    <!--contenido de la pagina-->
    <h1>Hola mundooo</h1>
  </div>
@endsection

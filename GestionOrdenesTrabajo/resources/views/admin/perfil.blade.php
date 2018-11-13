@extends('layouts.admin-dashboard')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Perfil
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-user"></i>Perfil</a></li>
      <li class="active">Usuario</li>
    </ol>
  </section>
  <br>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Puedes editar tu información personal aquí:') }}</div>
                  <br>
                  <div class="card-body">
                      <form method="POST" action="{{ route('admin.update-perfil') }}" aria-label="{{ __('Update') }}">
                          @csrf
                          <input type="hidden" name="id_admin" value="{{ $usuario->id_admin }}">
                          <div class="form-group row">
                              <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                              <div class="col-md-6">
                                  <input id="nombres" type="text" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{ $usuario->nombres }}" required autofocus>

                                  @if ($errors->has('nombres'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('nombres') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                              <div class="col-md-6">
                                  <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ $usuario->apellidos }}" required autofocus>

                                  @if ($errors->has('apellidos'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('apellidos') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

                              <div class="col-md-6">
                                  <input id="cedula" type="text" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" name="cedula" value="{{ $usuario->cedula }}" required autofocus>

                                  @if ($errors->has('cedula'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('cedula') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                              <div class="col-md-6">
                                  <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ $usuario->telefono }}" required autofocus>

                                  @if ($errors->has('telefono'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('telefono') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                              <div class="col-md-6">
                                  <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ $usuario->direccion }}" required autofocus>

                                  @if ($errors->has('direccion'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('direccion') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                              <div class="col-md-6">

                                  <select id="estado" type="text" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" name="estado" value="" required autofocus >

                                      @if ($usuario->estado == 1)
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                      @else
                                        <option value="0">Inactivo</option>
                                        <option value="1">Activo</option>
                                      @endif
                                  </select>

                                  @if ($errors->has('estado'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('estado') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $usuario->email }}" required>

                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Actualizar perfil') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="card-header">{{ __('Puedes editar tu password aquí:') }}</div>
                  <br>
                  <div class="card-body">
                      <form method="POST" action="{{ route('admin.update-password') }}" aria-label="{{ __('Actualizar Password') }}">
                          @csrf
                          <input type="hidden" name="id_admin" value="{{ $usuario->id_admin }}">
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password anterior') }}</label>

                              <div class="col-md-6">
                                  <input id="passwordanterior" type="password" placeholder="Password anterior" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="passwordanterior" required>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nuevo password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" placeholder="Nuevo password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar nuevo Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" placeholder="Repita el nuevo password" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Actualizar password') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

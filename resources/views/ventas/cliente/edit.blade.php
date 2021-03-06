@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Cliente: {{$persona->nombre}}</h3>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            {!! Form::model($persona,['method'=>'PUT','route'=>['cliente.update',$persona->idpersona]])!!}
            {{Form::token()}}
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" value="{{ $persona->nombre }}" name="nombre" placeholder="Nombre...">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" value="{{ $persona->direccion }}" name="direccion" placeholder="Direccion...">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="tipo_documento">Documento</label>
                        <select name="tipo_documento" class="form-control">
                            @if($persona->tipo_documento=='DNI')
                                <option value="DNI" selected >DNI</option>
                                <option value="RUC">RUC</option>
                                <option value="PAS">PAS</option>
                            @elseif($persona->tipo_documento=='RUC')
                                <option value="DNI" >DNI</option>
                                <option value="RUC" selected>RUC</option>
                                <option value="PAS">PAS</option>
                            @else
                                <option value="DNI">DNI</option>
                                <option value="RUC">RUC</option>
                                <option value="PAS" selected>PAS</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="num_documento">Número de documento</label>
                        <input type="text" class="form-control" value="{{ $persona->num_documento }}" name="num_documento" placeholder="Número de documento...">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" value="{{$persona->telefono}}" name="telefono" placeholder="Teléfono...">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="{{$persona->email}}" name="email" placeholder="Email...">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
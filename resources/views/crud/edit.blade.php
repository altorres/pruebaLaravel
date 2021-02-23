@extends('plantilla')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Editar </h2></div>
                    @include('custom.message')
                    <div class="card-body">

                        <form action="{{ route('crud.update',$crud->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="container">
                                <div class="form-group">
                                    <input type="text" class="form-control"

                                           placeholder="Nombre "
                                           name="nombre"
                                           required
                                           value="{{ old('nombre',$crud->nombre)}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"

                                           placeholder="Apellido "
                                           name="apellido"
                                           required
                                           value="{{ old('apellido',$crud->apellido)}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"

                                           placeholder="Telefono "
                                           name="telefono"
                                           required
                                           value="{{ old('telefono',$crud->telefono)}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"

                                           placeholder="correo "
                                           name="correo"
                                           required
                                           value="{{ old('correo',$crud->correo)}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"

                                           placeholder="Direccion "
                                           name="direccion"
                                           required
                                           value="{{ old('direccion',$crud->direccion)}}"
                                    >
                                </div>



                                <hr>
                                <input class="btn btn-primary" type="submit" value="Actualizar">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

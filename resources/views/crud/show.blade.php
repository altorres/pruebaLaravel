@extends('plantilla')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Mostrar </h2></div>
                    @include('custom.message')
                    <div class="card-body">

                        <form action="{{ route('crud.store')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           disabled
                                           placeholder="Nombre "
                                           name="nombre"
                                           required
                                           value="{{ old('nombre',$crud->nombre)}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           disabled
                                           placeholder="Apellido "
                                           name="apellido"
                                           required
                                           value="{{ old('apellido',$crud->apellido)}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           disabled
                                           placeholder="Telefono "
                                           name="telefono"
                                           required
                                           value="{{ old('telefono',$crud->telefono)}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"
                                           disabled
                                           placeholder="correo "
                                           name="correo"
                                           required
                                           value="{{ old('correo',$crud->correo)}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           disabled
                                           placeholder="Direccion "
                                           name="direccion"
                                           required
                                           value="{{ old('direccion',$crud->direccion)}}"
                                    >
                                </div>



                                <hr>
                                <td colspan="col"><a class="btn btn-success" href="{{ route('crud.edit',$crud->id)}}">editar</a></td>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

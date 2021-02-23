@extends('plantilla')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Agregar </h2></div>
                    @include('custom.message')
                    <div class="card-body">

                        <form action="{{ route('crud.store')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="form-group">
                                    <input type="text" class="form-control"

                                           placeholder="Nombre "
                                           name="nombre"
                                           required
                                           value="{{ old('nombre')}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"

                                           placeholder="Apellido "
                                           name="apellido"
                                           required
                                           value="{{ old('apellido')}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"

                                           placeholder="Telefono "
                                           name="telefono"
                                           required
                                           value="{{ old('telefono')}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"

                                           placeholder="correo "
                                           name="correo"
                                           required
                                           value="{{ old('correo')}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"

                                           placeholder="Direccion "
                                           name="direccion"
                                           required
                                           value="{{ old('direccion')}}"
                                    >
                                </div>



                                <hr>
                                <input class="btn btn-primary" type="submit" value="Guardar">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

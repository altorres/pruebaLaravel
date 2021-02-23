@extends('plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Lista <a class="btn btn-info" href="{{ route('crud.create')}}">crear</a> </h2></div>
                <div class="card-body">
                    @include('custom.message')

                    <table class="table wrapper  ">
                        <thead>
                        <tr>

                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">telefono</th>
                            <th colspan="col">correo</th>
                            <th colspan="col">direccion</th>
                            <th colspan="col">ver</th>
                            <th colspan="col">Editar</th>
                            <th colspan="col">Eliminar</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($cruds as $crud)
                                <td scope="col">{{$crud->nombre}}</td>
                                <td scope="col">{{$crud->apellido}}</td>
                                <td scope="col">{{$crud->telefono}}</td>
                                <td colspan="col">{{$crud->correo}}</td>
                                <td colspan="col">{{$crud->direccion}}</td>
                                <td colspan="col"><a class="btn btn-info" href="{{ route('crud.show',$crud->id)}}">ver</a></td>
                                <td colspan="col"><a class="btn btn-success" href="{{ route('crud.edit',$crud->id)}}">editar</a></td>
                                <td colspan="col">  <form action="{{ route('crud.destroy',$crud->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Eliminar</button>
                                    </form></td>
                            @endforeach


                        </tbody>
                    </table>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection

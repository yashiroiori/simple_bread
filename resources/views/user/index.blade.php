@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Consulta de usuarios <a href="{{route('user.create')}}" class="btn btn-primary btn-sm float-right" role="button" aria-pressed="true">Nuevo</a></div>
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo electrónico</th>
                            <th class="text-center" style="width: 150px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users AS $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="text-right">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('user.show',$user->id)}}" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Ver</a>
                                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                                        <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="card-footer">
                    <div class="row justify-content-md-center">
                        <div class="col-6 align-self-center">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
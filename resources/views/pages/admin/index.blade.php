
@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar')
@endsection    
@if (Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
@section('content')
    <a href="{{url('/admin/create')}}">Registar</a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>id</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($admin as $ad)
                
            
            <tr>
                <td>{{$ad->id}}</td>
                <td>{{$ad->primerNombre}}</td>
                <td>{{$ad->segundoNombre}}</td>
                <td>{{$ad->apellido}}</td>
                <td>{{$ad->correo}}</td>
                <td><a href="{{url('/admin/'.$ad->id.'/edit')}}">
                    Editar    
                </a> | 
                <form action="{{url('/admin/'.$ad->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres eliminar el registro?')" value="Borrar">
                
                </form>    
                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection    
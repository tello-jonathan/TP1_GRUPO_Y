@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar')
@endsection    
@section('content')
@include('pages.admin.index');
@endsection

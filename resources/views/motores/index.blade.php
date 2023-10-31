@extends('inicio.inicio')
<header class="header-motores">
@include('motores.header')
</header>
@section('dinamico')
    @include('motores.content')
@endsection

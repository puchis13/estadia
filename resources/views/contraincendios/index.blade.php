@extends('inicio.inicio')
<header class="header-contraincendios">
@include('contraincendios.header')

</header>
@section('dinamico')
    @include('contraincendios.content')
@endsection

@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-xylem">
    @include('bombas/xylem.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/xylem.content')
@endsection
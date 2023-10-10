@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-zoeller">
    @include('bombas/zoeller.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/zoeller.content')
@endsection

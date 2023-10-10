@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-aurora">
    @include('bombas/aurora.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/aurora.content')
@endsection

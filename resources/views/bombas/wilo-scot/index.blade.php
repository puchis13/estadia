@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-wilo-scot">
    @include('bombas/wilo-scot.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/wilo-scot.content')
@endsection

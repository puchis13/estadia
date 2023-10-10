@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-flygt">
    @include('bombas/flygt.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/flygt.content')
@endsection

@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-franklin">
    @include('bombas/franklin.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/franklin.content')
@endsection

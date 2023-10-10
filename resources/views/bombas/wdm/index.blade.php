@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-wdm">
    @include('bombas/wdm.header')
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/wdm.content')
@endsection

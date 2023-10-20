@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-wilo-scot">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/wilo-scot.content')
@endsection

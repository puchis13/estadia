@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-armstrong">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/armstrong.content')
@endsection

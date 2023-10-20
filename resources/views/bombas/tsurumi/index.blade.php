@extends('inicio.inicio')
{{-- Header propio --}}
<header class="header-tsurumi">
</header>
{{-- "dinamico" es la directiva yield colocada en inicio --}}
@section('dinamico')
{{-- content propio --}}
    @include('bombas/tsurumi.content')
@endsection

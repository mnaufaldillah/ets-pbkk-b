@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $rekaman->title }}</h3>
    <h6>Dokter: <a href="/dokters/{{  $rekaman->dokter->slug }}" class="text-decoration-none">{{ $rekaman->dokter->name }}</a></h6>
    <h6>Pasien: <a href="/pasiens/{{  $rekaman->pasien->slug }}" class="text-decoration-none">{{ $rekaman->pasien->name }}</a></h6>
    <p>{!! $rekaman->body !!}</p>
</article>
@endsection
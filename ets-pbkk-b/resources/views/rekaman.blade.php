@extends('template')

@section('container')
    <h1>{{ $title }}</h1>
    <hr/>
    @foreach ($rekamans as $rekaman)
        <article class="mb-5 border-bottom pb-4">
            <h3>
                <a href="rekaman/{{ $rekaman->slug }}" class="text-decoration-none">
                    {{ $rekaman->title }}
                </a>
                <h6>Dokter: <a href="/dokters/{{  $rekaman->dokter->slug }}" class="text-decoration-none">{{ $rekaman->dokter->name }}</a></h6>
                <h6>Pasien: <a href="/pasiens/{{  $rekaman->pasien->slug }}" class="text-decoration-none">{{ $rekaman->pasien->name }}</a></h6>
                <p>{{ $rekaman->excerpt }}</p>
                <a href="rekaman/{{ $rekaman->slug }}" class="text-decoration-none">
                    Read More..
                </a>
            </h3>
        </article>
    @endforeach
@endsection
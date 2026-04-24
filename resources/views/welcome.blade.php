@extends('layouts.portfolio')

@section('content')
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/profil.jpg') }}"
                 class="rounded-circle shadow-lg border border-5 border-white"
                 style="width: 280px; height: 280px; object-fit: cover;">
        </div>
        <div class="col-md-6">
            <h1 class="display-3 fw-bold mb-3">Salut, moi c'est <span class="text-primary">Kyondwa Kalonda Pacifique</span></h1>
            <p class="lead text-muted mb-4">Étudiant en BAC 2 Génie Logiciel à l'UPL. Je crée des solutions web modernes et performantes.</p>
            <a href="/projets" class="btn btn-primary btn-lg rounded-pill px-5 shadow">Voir mes projets</a>

        </div>

    </div>
</div>
@endsection

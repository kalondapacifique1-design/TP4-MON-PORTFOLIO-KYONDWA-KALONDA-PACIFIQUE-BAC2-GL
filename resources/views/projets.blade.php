@extends('layouts.portfolio')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Mes Projets</h1>

    @auth
        <div class="mb-4">
            <a href="/projets/create" class="btn btn-primary">Ajouter un projet</a>
        </div>
    @endauth

    <div class="row">
        @foreach($projets as $projet)
            <div class="col-md-4">
                <div class="card mb-4">
                   <img src="{{ asset('storage/' . $projet->image) }}" class="card-img-top" alt="Image projet">
                    <div class="card-body">
                        <h5 class="card-title">{{ $projet->title }}</h5>
                        <h5>{{ $projet->titre }}</h5>
                        <p class="card-text">{{ $projet->description }}</p>

                        @auth
                             <div class="card-body">



    <a href="{{ route('projets.edit', $projet->id) }}" class="btn btn-warning btn-sm">Modifier</a>

    <form action="{{ route('projets.destroy', $projet->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Es-tu sûr ?')">Supprimer</button>
    </form>
</div>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layouts.portfolio')

@section('content')
<div class="container py-5">
    <div class="card shadow p-4">
        <h2>Ajouter un nouveau projet</h2>
        <form action="{{ route('projets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titre du projet</label>
                <input type="text" name="titre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Image du projet</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer le projet</button>
            <a href="/projets" class="btn btn-secondary">Annuler</a>
        </form>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </div>
</div>
@endsection

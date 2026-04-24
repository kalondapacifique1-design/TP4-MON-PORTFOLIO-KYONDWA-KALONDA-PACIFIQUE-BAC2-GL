@extends('layouts.portfolio')
@section('content')
<div class="container py-5">
    <h2>Modifier le projet</h2>
    <form action="{{ route('projets.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <div class="mb-3">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" value="{{ $project->titre }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Image (Laisser vide pour garder l'ancienne)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
@endsection

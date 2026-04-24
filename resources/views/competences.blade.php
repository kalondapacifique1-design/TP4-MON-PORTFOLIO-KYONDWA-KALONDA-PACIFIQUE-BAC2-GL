@extends('layouts.portfolio')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5 fw-bold">Mes Compétences</h1>

    <div class="row text-center">
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/html.png') }}" class="mb-3" width="80">
                    <h5>HTML</h5>
                    <p class="text-muted">Structure et balisage de pages web.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/css.png') }}" class="mb-3" width="80">
                    <h5>CSS</h5>
                    <p class="text-muted">Design et mise en forme responsive.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/js.png') }}" class="mb-3" width="80">
                    <h5>JavaScript</h5>
                    <p class="text-muted">Interactivité et logique côté client.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ asset('images/php.png') }}" class="mb-3" width="80">
                    <h5>PHP</h5>
                    <p class="text-muted">Programmation côté serveur et Laravel.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

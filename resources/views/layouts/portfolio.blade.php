<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Force la barre en haut */
        body { padding-top: 60px; }
        .navbar { position: fixed; top: 0; width: 100%; z-index: 1000; }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif !important;
        background-color: #f4f7f6; /* Un gris très clair, plus chic que le blanc */
        color: #2d3436;
    }

    .card {
    border: none !important;
    border-radius: 20px !important; /* Des coins très arrondis pour le côté moderne */
    box-shadow: 0 10px 20px rgba(0,0,0,0.05); /* Ombre douce et large */
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-10px); /* L'effet "pop" quand on passe la souris */
}

.btn-primary {
    background: linear-gradient(135deg, #0d6efd, #0099ff);
    border: none;
    padding: 12px 30px;
    transition: 0.3s;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #0056b3, #0077cc);
    box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
}
</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/competences">Compétences</a></li>
                <li class="nav-item"><a class="nav-link" href="/projets">Projets</a></li>
                <li class="nav-item"><a class="nav-link" href="/histoire">Histoire</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact.show') }}">Contact</a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Admin</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ route('admin.messages') }}">Messages</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-danger" style="border:none; background:none; cursor:pointer;">
                                Déconnexion
                            </button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

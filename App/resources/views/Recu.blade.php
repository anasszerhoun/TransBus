<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reçu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
        .card-body p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
            <h4>Reçu de Réservation</h4>
            </div>
            <div class="card-body">
            <p><strong>Nom:</strong> {{ $nom }}</p>
            <p><strong>Prénom:</strong> {{ $prenom }}</p>
            <p><strong>Pièce d'identité:</strong> {{ $pieceIdentite }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Téléphone:</strong> {{ $telephone }}</p>
            <p><strong>Numéro de place:</strong> {{ $numeroPlace }}</p>
            <p><strong>Ville de départ:</strong> {{ $villeDepart }}</p>
            <p><strong>Ville d'arrivée:</strong> {{ $villeArrivee }}</p>
            <p style="float: right"><strong>Date:</strong> {{ $dateDepart }}</p>
            <p><strong>Heure de départ:</strong> {{ $heureDepart }}</p>
            <p><strong>Heure d'arrivée:</strong> {{ $heureArrivee }}</p>
            <p><strong>Prix:</strong> {{ $prix }} DH</p>
            </div>
            <div class="card-footer text-center">
            <small>Merci d'avoir réservé !</small>
            </div>
            <div class="card-footer text-right">
            </div>
        </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

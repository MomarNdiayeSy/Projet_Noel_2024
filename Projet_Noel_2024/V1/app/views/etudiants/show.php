<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin: 10px 0;
            padding: 10px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        p strong {
            color: #333;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Détails de l'Étudiant</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nom :</strong> <?= htmlspecialchars($etudiant['nom']) ?></li>
            <li class="list-group-item"><strong>Prénom :</strong> <?= htmlspecialchars($etudiant['prenom']) ?></li>
            <li class="list-group-item"><strong>Email :</strong> <?= htmlspecialchars($etudiant['email']) ?></li>
            <li class="list-group-item"><strong>Filière :</strong> <?= htmlspecialchars($etudiant['filiere']) ?></li>
        </ul>
        <a href="index.php?controller=etudiant" class="btn btn-secondary mt-3">Retour</a>
    </div>
</body>
</html>

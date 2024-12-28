<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Rendez-vous</title>
    <style>
        h1 {
            font-size: 2.5em;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 1.8em;
            color:rgb(229, 232, 235);
            margin-top: 30px;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.5;
            margin: 10px 0;
        }

        strong {
            color: #007BFF;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color:rgb(178, 190, 181);
            color: white;
            text-decoration: none;
            font-size: 15px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }

        a:hover {
            background-color: #218838;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Détails du Rendez-vous</h1>

        <p><strong>Date :</strong> <?= $rendezVous['dates'] ?></p>
        <p><strong>Heure :</strong> <?= $rendezVous['heure'] ?></p>
        <p><strong>Description :</strong> <?= $rendezVous['descriptions'] ?></p>

        <h2>Informations du Client</h2>
        <p><strong>Nom :</strong> <?= $rendezVous['client_nom'] ?></p>
        <p><strong>Prénom :</strong> <?= $rendezVous['client_prenom'] ?></p>
        <p><strong>Téléphone :</strong> <?= $rendezVous['client_telephone'] ?></p>
        <p><strong>Email :</strong> <?= $rendezVous['client_email'] ?></p>

        <a href="index.php?controller=rendezvous">Retour à la liste</a>
    </div>
</body>
</html>

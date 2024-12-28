<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Client</title>
    <style>
        h1 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        h1::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color:rgb(31, 133, 228);
            margin: 10px auto;
        }

        p {
            font-size: 1.1em;
            margin: 10px 0;
            color: #555;
        }

        strong {
            color: #000;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color:rgb(116, 122, 129);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        a:hover {
            background-color:rgb(56, 136, 226);
        }
    </style>
</head>
<body>
    <h1>Détails du Client</h1>
    <!-- <p><strong>ID :</strong> <?= $client['id'] ?></p> -->
    <p><strong>Nom :</strong> <?= $client['nom'] ?></p>
    <p><strong>Prénom :</strong> <?= $client['prenom'] ?></p>
    <p><strong>Email :</strong> <?= $client['email'] ?></p>
    <p><strong>Téléphone :</strong> <?= $client['telephone'] ?></p>
    <a href="index.php?controller=clients">Retour à la liste</a>
</body>
</html>

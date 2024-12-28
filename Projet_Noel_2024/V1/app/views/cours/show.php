<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du cours</title>
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
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
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
    <div class="container">
        <h1>Détails du cours</h1>
        <p hidden><strong>ID :</strong> <?= htmlspecialchars($cours['id']); ?></p>
        <p><strong>Nom du cours :</strong> <?= htmlspecialchars($cours['nom_du_cours']); ?></p>
        <p><strong>Code du cours :</strong> <?= htmlspecialchars($cours['code_du_cours']); ?></p>
        <p><strong>Nombre d'heure :</strong> <?= htmlspecialchars($cours['nombre_d_heures']); ?></p>
        <a href="?controller=cours&action=index">Retour à la liste des cours</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
            color: #555;
        }

        input[type="text"], 
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px 0;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        button:hover {
            background-color: #0056b3;
        }

        textarea {
            resize: vertical;
            height: 50px;
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
    </style>
</head>
<body>
    <h1>Modifier un cours</h1>
    <form action="?controller=cours&action=update" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($cours['id']); ?>">
        <label for="nom">Nom du cours :</label>
        <input type="text" name="nom_du_cours" id="nom_du_cours" value="<?= htmlspecialchars($cours['nom_du_cours']); ?>" required>

        <label for="code_du_cours">Code du cours :</label>
        <textarea name="code_du_cours" id="code_du_cours" required><?= htmlspecialchars($cours['code_du_cours']); ?></textarea>

        <label for="nombre_d_heures">Nombre d'heures :</label>
        <textarea name="nombre_d_heures" id="nombre_d_heures" required><?= htmlspecialchars($cours['nombre_d_heures']); ?></textarea>

        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>

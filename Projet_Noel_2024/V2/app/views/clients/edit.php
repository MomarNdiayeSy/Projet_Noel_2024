<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Client</title>
    <style>
        h1 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 1.1em;
            margin: 10px 0 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Modifier un Client</h1>
    <form action="index.php?controller=clients&action=update" method="POST">
        <input type="hidden" name="id" value="<?= $client['id'] ?>">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?= $client['nom'] ?>" required>
        <label>Prénom :</label>
        <input type="text" name="prenom" value="<?= $client['prenom'] ?>" required>
        <label>Email :</label>
        <input type="email" name="email" value="<?= $client['email'] ?>" required>
        <label>Téléphone :</label>
        <input type="text" name="telephone" value="<?= $client['telephone'] ?>" required>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>

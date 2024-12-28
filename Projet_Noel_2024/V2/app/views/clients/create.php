<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Client</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
            display: block;
            font-weight: bold;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f9f9f9;
            transition: all 0.3s;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #4CAF50;
            background-color: #fff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 480px) {
            form {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

    <div>
        <h1>Ajouter un Client</h1>
        <form action="index.php?controller=clients&action=save" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" required>

            <button type="submit">Enregistrer</button>
        </form>
    </div>

</body>
</html>

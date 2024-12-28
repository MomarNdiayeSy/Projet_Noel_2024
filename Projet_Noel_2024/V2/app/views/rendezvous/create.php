<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Rendez-vous</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            text-align: center;
            margin-top: 30px;
        }

        .form-container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        label {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 10px;
            display: block;
        }

        input[type="date"],
        input[type="time"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        button {
            padding: 12px 20px;
            font-size: 1.2em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .form-container {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <h1>Ajouter un Rendez-vous</h1>

    <div class="form-container">
        <form action="index.php?controller=rendezvous&action=save" method="POST">
            <label>Date :</label>
            <input type="date" name="dates" required>

            <label>Heure :</label>
            <input type="time" name="heure" required>

            <label>Description :</label>
            <textarea name="descriptions" required></textarea>

            <label>Client :</label>
            <select name="client_id" required>
                <?php foreach ($clients as $client): ?>
                    <option value="<?= $client['id'] ?>"><?= $client['nom'] . ' ' . $client['prenom'] ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>

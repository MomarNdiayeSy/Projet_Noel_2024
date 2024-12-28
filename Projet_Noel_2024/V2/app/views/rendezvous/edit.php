<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Rendez-vous</title>
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

        input[type="date"],
        input[type="time"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        input[type="date"]:focus,
        input[type="time"]:focus,
        textarea:focus,
        select:focus {
            border-color: #007BFF;
            outline: none;
        }

        textarea {
            resize: vertical;
            height: 50px;
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
    <h1>Modifier un Rendez-vous</h1>
    <form action="index.php?controller=rendezvous&action=update" method="POST">
        <input type="hidden" name="id" value="<?= $rendezVous['id'] ?>">
        <label>Date :</label>
        <input type="date" name="dates" value="<?= $rendezVous['dates'] ?>" required>
        <label>Heure :</label>
        <input type="time" name="heure" value="<?= $rendezVous['heure'] ?>" required>
        <label>Description :</label>
        <textarea name="descriptions" required><?= $rendezVous['descriptions'] ?></textarea>
        <label>Client :</label>
        <select name="client_id" required>
            <?php foreach ($clients as $client): ?>
                <option value="<?= $client['id'] ?>" <?= $client['id'] == $rendezVous['client_id'] ? 'selected' : '' ?>>
                    <?= $client['nom'] . ' ' . $client['prenom'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>

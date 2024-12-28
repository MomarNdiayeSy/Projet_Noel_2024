<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Rendez-vous</title>
    <style>
        h1 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color:rgb(138, 137, 143);
            color: white;
            text-decoration: none;
            font-size: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        a:hover {
            background-color:rgb(55, 70, 59);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        td a {
            color:rgb(229, 234, 240);
            text-decoration: none;
            margin: 0 5px;
        }

        td a:hover {
            text-decoration: underline;
        }

        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des Rendez-vous</h1>
    <a href="index.php?controller=rendezvous&action=add">Ajouter un Rendez-vous</a>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Heure</th>
                <th>Description</th>
                <th>Client (Email)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rendezVous as $rdv): ?>
                <tr>
                    <td><?= $rdv['dates'] ?></td>
                    <td><?= $rdv['heure'] ?></td>
                    <td><?= $rdv['descriptions'] ?></td>
                    <td><?= $rdv['client_email'] ?></td>
                    <td>
                        <a href="index.php?controller=rendezvous&action=show&id=<?= $rdv['id'] ?>">Voir</a> |
                        <a href="index.php?controller=rendezvous&action=edit&id=<?= $rdv['id'] ?>">Modifier</a> |
                        <a href="index.php?controller=rendezvous&action=remove&id=<?= $rdv['id'] ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

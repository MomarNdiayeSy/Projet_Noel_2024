<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #343a40;
        }

        .container {
            margin-top: 40px;
            max-width: 1000px;
        }

        .btn-add-client {
            margin-bottom: 20px;
        }

        table {
            background-color: #ffffff;
            border-radius: 5px;
            overflow: hidden;
        }

        table thead th {
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        table tbody td {
            text-align: center;
        }

        .btn-actions a {
            margin: 0 5px;
            text-decoration: none;
            color: #fff;
        }

        .btn-actions .btn-view {
            background-color: #17a2b8;
        }

        .btn-actions .btn-edit {
            background-color: #ffc107;
        }

        .btn-actions .btn-delete {
            background-color: #dc3545;
        }

        .btn-actions a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Clients</h1>
        <a href="index.php?controller=clients&action=add" class="btn btn-primary btn-add-client">Ajouter un Client</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?= htmlspecialchars($client['nom']) ?></td>
                        <td><?= htmlspecialchars($client['prenom']) ?></td>
                        <td><?= htmlspecialchars($client['email']) ?></td>
                        <td><?= htmlspecialchars($client['telephone']) ?></td>
                        <td class="btn-actions">
                            <a href="index.php?controller=clients&action=show&id=<?= $client['id'] ?>" class="btn btn-sm btn-view">Voir Plus</a>
                            <a href="index.php?controller=clients&action=edit&id=<?= $client['id'] ?>" class="btn btn-sm btn-edit">Modifier</a>
                            <a href="index.php?controller=clients&action=remove&id=<?= $client['id'] ?>" class="btn btn-sm btn-delete">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

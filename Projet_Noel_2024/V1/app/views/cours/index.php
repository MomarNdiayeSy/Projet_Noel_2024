<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
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

        .btn-add {
            display: block;
            width: fit-content;
            margin: 10px auto 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-align: center;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn-add:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            margin: 0 auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #dee2e6;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #343a40;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        .actions a {
            margin-right: 10px;
        }

        .actions a:first-child {
            color: #ffc107;
        }

        .actions a:nth-child(2) {
            color: #dc3545;
        }

        .actions a:last-child {
            color: #007bff;
        }

        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Liste des cours</h1>
    <a href="?controller=cours&action=add" class="btn-add">Ajouter un nouveau cours</a>
    <table>
        <thead>
            <tr>
                <!-- <th>ID</th> -->
                <th>Nom</th>
                <th>Code du cours</th>
                <th>Nombre d'heures</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cours as $c): ?>
                <tr>
                    <!-- <td><?= htmlspecialchars($c['id']); ?></td> -->
                    <td><?= htmlspecialchars($c['nom_du_cours']); ?></td>
                    <td><?= htmlspecialchars($c['code_du_cours']); ?></td>
                    <td><?= htmlspecialchars($c['nombre_d_heures']); ?></td>
                    <td class="actions">
                        <a href="?controller=cours&action=edit&id=<?= $c['id']; ?>">Modifier</a>
                        <a href="?controller=cours&action=remove&id=<?= $c['id']; ?>" onclick="return confirm('Êtes-vous sûr ?');">Supprimer</a>
                        <a href="?controller=cours&action=show&id=<?= $c['id']; ?>">Voir Plus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

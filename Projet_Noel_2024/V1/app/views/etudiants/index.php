<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
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

    
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .actions a {
            margin-right: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des étudiants</h1>
        <a href="?controller=etudiant&action=add">Ajouter un nouvel étudiant</a>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Filière</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiants as $e): ?>
                    <tr>
                        <td><?= htmlspecialchars($e['nom']); ?></td>
                        <td><?= htmlspecialchars($e['prenom']); ?></td>
                        <td><?= htmlspecialchars($e['email']); ?></td>
                        <td><?= htmlspecialchars($e['filiere']); ?></td>
                        <td class="actions">
                            <a href="?controller=etudiant&action=edit&id=<?= $e['id']; ?>">Modifier</a>
                            <a href="?controller=etudiant&action=remove&id=<?= $e['id']; ?>" onclick="return confirm('Êtes-vous sûr ?');">Supprimer</a>
                            <a href="?controller=etudiant&action=show&id=<?= $e['id']; ?>">Voir Plus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

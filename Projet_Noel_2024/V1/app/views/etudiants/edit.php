<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color:rgb(118, 137, 155);
        }

        button.btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        button.btn-secondary {
            color:rgb(43, 102, 153);
            background-color: #ffffff;
            border-color: #6c757d;
        }

        button.btn-secondary:hover {
            color: #ffffff;
            background-color: #6c757d;
            border-color: #545b62;
        }

        label {
            font-weight: bold;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color:rgb(229, 236, 245);
            text-decoration: underline;
        }
        
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Modifier un Étudiant</h2>
        <form action="index.php?controller=etudiant&action=update" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($etudiant['id']) ?>">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($etudiant['nom']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= htmlspecialchars($etudiant['prenom']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($etudiant['email']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="filiere" class="form-label">Filière</label>
                <input type="text" class="form-control" id="filiere" name="filiere" value="<?= htmlspecialchars($etudiant['filiere']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="index.php?controller=etudiant" class="btn btn-secondary">Annuler</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

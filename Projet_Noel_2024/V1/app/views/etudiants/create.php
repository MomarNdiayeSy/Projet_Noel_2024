<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Ajouter un Étudiant</h2>
        <form action="index.php?controller=etudiant&action=save" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="filiere" class="form-label">Filière</label>
                <input type="text" class="form-control" id="filiere" name="filiere" required>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="index.php?controller=etudiant" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>

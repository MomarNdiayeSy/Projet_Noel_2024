<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un cours</title>
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

        form {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 8px;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #495057;
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.25);
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 20px auto 0;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
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
    <h1>Ajouter un nouveau cours</h1>
    <form action="?controller=cours&action=save" method="POST">
        <label for="nom">Nom du cours :</label>
        <input type="text" name="nom_du_cours" id="nom_du_cours" required>
        
        <label for="Code">Code du cours :</label>
        <textarea name="code_du_cours" id="code_du_cours" required></textarea>
        
        <label for="Heure">Nombre d'heure :</label>
        <textarea name="nombre_d_heures" id="nombre_d_heures" required></textarea>
        
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>

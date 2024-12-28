<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Cours et Étudiants</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .sidebar a {
            color: #ecf0f1;
            text-decoration: none;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #34495e;
        }
        .sidebar h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Menu</h2>
    <a href="index.php?controller=cours&action=index">Gestion des Cours</a>
    <a href="index.php?controller=etudiant&action=index">Gestion des Étudiants</a>
</div>

<div class="content">
    <?php
    require_once '../app/db.php'; 
    require_once '../app/models/CoursModel.php';
    require_once '../app/models/EtudiantModel.php';
    require_once '../app/controllers/CoursController.php'; 
    require_once '../app/controllers/EtudiantController.php'; 

    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'cours';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    switch ($controller) {
        case 'cours':
            switch ($action) {
                case 'index':
                    indexC();
                    break;
                case 'remove':
                    removeC();
                    break;
                case 'add':
                    pageAddC();
                    break;
                case 'save':
                    saveC();
                    break;
                case 'edit':
                    getCours();
                    break;
                case 'update':
                    updateCours();
                    break;
                case 'show':
                    showC();
                    break;
                default:
                    echo "Action inconnue pour le contrôleur cours.";
            }
            break;

        case 'etudiant':
            switch ($action) {
                case 'index':
                    index();
                    break;
                case 'add':
                    pageAdd();
                    break;
                case 'save':
                    save();
                    break;
                case 'edit':
                    getEtudiant();
                    break;
                case 'update':
                    update();
                    break;
                case 'remove':
                    remove();
                    break;
                case 'show':
                    show();
                    break;
                default:
                    echo "Action inconnue pour le contrôleur étudiant.";
            }
            break;

        default:
            echo "Contrôleur inconnu.";
    }
    ?>
</div>

</body>
</html>

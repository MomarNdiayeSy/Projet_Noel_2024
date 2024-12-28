<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Clients et Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="?controller=clients&action=index">Gestion des Clients</a>
        <a href="?controller=rendezvous&action=index">Gestion des Rendez-vous</a>
    </div>

    <div class="content">
        <?php
        require_once '../app/db.php';
        require_once '../app/models/ClientsModel.php';
        require_once '../app/models/RendezVousModel.php';
        require_once '../app/controllers/ClientsController.php';
        require_once '../app/controllers/RendezVousController.php';

        $database = new Database();
        $connexion = $database->getConnexion();

        $clientsModel = new ClientsModel($connexion);
        $rendezVousModel = new RendezVousModel($connexion);

        $clientsController = new ClientsController($clientsModel);
        $rendezVousController = new RendezVousController($rendezVousModel);

        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'clients';
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        try {
            switch ($controller) {
                case 'clients':
                    switch ($action) {
                        case 'index':
                            $clientsController->index();
                            break;
                        case 'add':
                            $clientsController->pageAdd();
                            break;
                        case 'save':
                            $clientsController->save();
                            break;
                        case 'edit':
                            $clientsController->getClient();
                            break;
                        case 'update':
                            $clientsController->update();
                            break;
                        case 'remove':
                            $clientsController->remove();
                            break;
                        case 'show':
                            $clientsController->show();
                            break;
                        default:
                            throw new Exception("Action inconnue pour le contrôleur 'clients'.");
                    }
                    break;

                case 'rendezvous':
                    switch ($action) {
                        case 'index':
                            $rendezVousController->index();
                            break;
                        case 'add':
                            $rendezVousController->pageAdd();
                            break;
                        case 'save':
                            $rendezVousController->save();
                            break;
                        case 'edit':
                            $rendezVousController->getRendezVous();
                            break;
                        case 'update':
                            $rendezVousController->update();
                            break;
                        case 'remove':
                            $rendezVousController->remove();
                            break;
                        case 'show':
                            $rendezVousController->show();
                            break;
                        default:
                            throw new Exception("Action inconnue pour le contrôleur 'rendezvous'.");
                    }
                    break;
                default:
                    throw new Exception("Contrôleur inconnu.");
            }
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include("../traitement.php");
session();
deconnexion();
modifierprofil()
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SGEPP </title>

    <!-- Custom fonts for this template-->
    <link href="../user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="../user/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../style.css">


    <!-- Custom styles for this template-->
    <link href="../user/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

                <img src="img/sgepp.png" alt="" width="100" height="40">
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Accueil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU Administrateur
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="gestion.php">
                    <i class="fas fa-exclamation-triangle fa-fw"></i>
                    <span>Gestion des incidents</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Gestion des utilisateurs</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="utilisateur.php">Utilisateurs</a>
                        <a class="collapse-item" href="service.php">Services</a>
                        <a class="collapse-item" href="categorie.php">Categories</a>


                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="h&r.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span> Historiques Rapports</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-warning badge-counter"><?php nombrenotifadmin();?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notifications
                                </h6>
                              <?php messageadmin();?>
                              
                               
                            </div>

                        </li>

                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $data['nom_utilisateur']; ?> <?php echo $data['prenom_utilisateur']; ?></span>
                                <img class="img-profile rounded-circle" src="img/icone.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profilModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-power-off fa-sm fa-fw mr-2 text-danger"></i>
                                    Deconnexion
                                </a>
                            </div>
                            <div class="modal fade" id="profilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <form action="" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="" align="center"><img class="img-profile rounded-circle" src="img/icone.png" width="100"></div>

                                                <div class="modal-body">
                                                    <form id="addUserForm" action="" method="post">
                                                        <input type="hidden" value="<?php echo $data['id_utilisateur']; ?>" name="modif">
                                                        <input type="hidden" value="<?php echo $data['id_role']; ?>" name="role">
                                                        <div class="form-group">
                                                            <label for="username">Nom :</label>
                                                            <input type="text" class="form-control" id="service" name="nom" value="<?php echo $data['nom_utilisateur']; ?>" required autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Prenom :</label>
                                                            <input type="text" class="form-control" id="service" name="prenom" value="<?php echo $data['prenom_utilisateur']; ?>" required autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="role">Email :</label>
                                                            <input type="text" class="form-control" id="service" name="email" value="<?php echo $data['email_utilisateur']; ?>" required autocomplete="off">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="role">Mot de passe :</label>
                                                            <input type="password" class="form-control" id="service" name="mdp" value="" required autocomplete="off">
                                                        </div>
                                                        <div class=" modal-footer">
                                                            <button type="submit" class="btn btn-primary" name="modifprofil">Valider</button>
                                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Annuler</button>
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container mt-5 ">


                    <!-- Page Heading -->

                    <!-- Exemple de DataTable -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Historique des Rapports</h6>



                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Expediteur</th>
                                            <th>Mail</th>
                                            <th>Site</th>
                                            <th>Activité</th>
                                            <th>Conséquences</th>
                                            <th>Date</th>
                                            <th>Statuts</th>
                                            <th>Etat de reponse</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $recup = $connexion->prepare("SELECT incident.*, utilisateur.* FROM incident JOIN utilisateur ON  incident.id_utilisateur = utilisateur.id_utilisateur ORDER BY incident.id_incident DESC;");
                                        $recup->execute();
                                        while ($trouv = $recup->fetch()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $trouv['nom_utilisateur']; ?> <?php echo $trouv['prenom_utilisateur']; ?></td>
                                                <td><?php echo $trouv['email_utilisateur']; ?></td>
                                                <td><?php echo $trouv['site']; ?></td>
                                                <td><?php echo $trouv['activite']; ?></td>
                                                <td><?php echo substr($trouv['consequences'],0,30); ?></td>
                                                <td><?= date('d/m/Y', strtotime($trouv['date_mise_a_jours'])); ?></td>
                                                <td><?= $trouv['statut'] == 1 ? 'Non traité' : ' Traité'; ?></td>
                                                <td><?= $trouv['statut_incident'] == 1 ? 'Sans réponse' : 'Répondue'; ?></td>
                                                <td>
                                                    <!-- button de vision du document -->
                                                    <button class="btn btn-sm btn-success me-2" data-toggle="modal" data-target="#vueModal<?php echo $trouv['id_incident']; ?>">
                                                        <i class='fas fa-eye text-light'></i>
                                                    </button>
                                                    <!-- affiche du modal de vision -->
                                                    <div class="modal fade" id="vueModal<?php echo $trouv['id_incident']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Rapport</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="container mt-3">

                                                                        <div class="d-flex justify-content-between align-items-start">
                                                                            <div>
                                                                                <img src="img/rt.png" width="100" alt="Logo" class="img-fluid">
                                                                            </div>
                                                                            <div>
                                                                                <h6 class="text-primary">Societe gabonaise d'entreposage de produit petrolier</h6>
                                                                                <h6>Societe au capitale de 900 0000 Fca</h6>
                                                                                <h6>siege sociale:Libreville BP2218 Tel 01700101 -Telefax 01700021</h6>
                                                                                <h6>Depot MOANDA - BP :189 - Telefax 01 66 11 78</h6>
                                                                            </div>

                                                                        </div>

                                                                        <h3 class="text-center text-primary m-4"><u>DECLARATION D'EVENEMENT</u></h3>
                                                                        <table class="table table-sm ">
                                                                            <tbody>

                                                                                <tr>
                                                                                    <td>photo: <img src="../photo/<?php echo $trouv['photo']; ?>" width="40" alt="" srcset=""></td>

                                                                                    <td>
                                                                                        <u>N°:</u><?php echo $trouv['id_incident']; ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        Accident <input type="checkbox" name="" id=""> <br>Situation anormale <input type="checkbox" name="" id="">
                                                                                    </td>
                                                                                    <td>
                                                                                        Incident <input type="checkbox" name="" id=""> <br>Non-conformité <input type="checkbox" name="" id="">
                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <br><br>

                                                                        <table class="table table-bordered table-sm">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Date: <?= date('d/m/Y', strtotime($trouv['date_mise_a_jours'])); ?> <br>Heure: <?= date('H:i:s', strtotime($trouv['date_mise_a_jours'])); ?></td>
                                                                                    <td><u>Site :</u> <br><?php echo $trouv['site']; ?></td>
                                                                                    <td><u>Activité :</u><br><?php echo $trouv['activite']; ?></td>
                                                                                    <td><u>Lieu exact :</u><br><?php echo $trouv['lieu']; ?></td>
                                                                                    <td><u>Transport</u><br>Contrat annuel <br>Entreprises Extérieures <br>Travaux-contrat > 400h <br>Autre travaux < 400h</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5">
                                                                                        <h5>Circonstances.</h5><br>
                                                                                        <h6 class="text-warning"> <?php echo $trouv['circonstance']; ?></h6>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="4">
                                                                                        <h5>Conséquences.</h5><br>
                                                                                        <h6 class="text-warning"><?php echo $trouv['consequences']; ?></h6> <br>
                                                                                        <h5>Actions Immediates Adoptées.</h5><br>
                                                                                        <h6 class="text-warning"><?php echo $trouv['action']; ?></h6>
                                                                                    </td>
                                                                                    <td style="text-align: center;" class="p-5">
                                                                                        <h5 class="text-primary">Risques</h5>
                                                                                        <input type="checkbox" name="checkbox1" value="option1"> G <br><br>
                                                                                        <input type="checkbox" name="checkbox2" value="option2"> F <br><br>
                                                                                        <input type="checkbox" name="checkbox3" value="option3"> R
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5">
                                                                                        <h5>Causes Immediates.</h5><br>
                                                                                        <h6 class="text-warning"><?php echo $trouv['cause_immediate']; ?></h6>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5">
                                                                                        <h5>Causes Fondamentales.</h5><br>
                                                                                        <h6 class="text-warning"><?php echo $trouv['cause_fondamentale']; ?></h6>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5">
                                                                                        <h5>Actions Correctives / Préventives.</h5><br>
                                                                                        <h6 class="text-warning"><?php echo $trouv['action_corrective']; ?></h6>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2">Nom et Visa du Rédeacteur <br><br></td>
                                                                                    <td>Nom et Visa du Superieur Hierarchique</td>
                                                                                    <td colspan="2">Nom et Visa du DAIRQ</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                        <h6>Copie :</h6>
                                                                        <h6>
                                                                            DG /DG /DEX /DT /DAF /CDHSE /CDPB /CDGPLS /CA Cellule sanitaire /RH pour transmission à<br>l'assurance avant 48 heures
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Fermer</button>
                                                                    <button class="btn btn-primary" type="button" onclick="imprimerPDF(<?php echo $trouv['id_incident']; ?>)">Imprimer</button>
                                                                    <script>
                                                                        function imprimerPDF(idIncident) {
                                                                            window.location.href = '../impression.php?id_incident=' + idIncident;
                                                                        }
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <!-- button de image -->
                                                    <button class="btn btn-sm btn-primary me-2" data-toggle="modal" data-target="#photoModal<?php echo $trouv['id_incident']; ?>"><i class="fas fa-image all text-light"></i></button>
                                                    <!-- modal de image -->
                                                    <div class="modal fade" id="photoModal<?php echo $trouv['id_incident']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Photo de l'incident</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="supp" value="<?php echo $trouv['id_incident']; ?>">
                                                                    <div class="modal-body"><img src="../photo/<?php echo $trouv['photo']; ?>" width="450" alt="" srcset=""> </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Fermer</button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Script pour initialiser DataTable avec personnalisation en français -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#dataTable').DataTable({
                                language: {
                                    search: "Rechercher :",
                                    lengthMenu: "Afficher _MENU_ entrées",
                                    info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                                    infoEmpty: "Aucune entrée disponible",
                                    infoFiltered: "(filtré à partir de _MAX_ entrées totales)",
                                    zeroRecords: "Aucun résultat trouvé",
                                    paginate: {
                                        first: "Premier",
                                        last: "Dernier",
                                        next: "Suivant",
                                        previous: "Précédent"
                                    },
                                    aria: {
                                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                                    }
                                }
                            });
                        });
                    </script>






                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; SGEPP 2024</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->



            <div class="modal fade" id="supModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suprimer</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Etes vous sur de vouloir supprimer cette ligne.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-primary" href="">Valider</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Etes vous sur de vouloir vous deconnecté ?</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Non</button>
                                <input type="submit" class="btn btn-primary" name="deconnexion" value="Oui">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="../user/vendor/jquery/jquery.min.js"></script>
            <script src="../user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="../user/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="../user/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="../user/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="../user/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../user/js/demo/datatables-demo.js"></script>

</body>

</html>
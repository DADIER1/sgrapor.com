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

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

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
            <li class="nav-item">
                <a class="nav-link" href="gestion.php">
                    <i class="fas fa-exclamation-triangle fa-fw"></i>
                    <span>Gestion des incidents</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-users "></i>
                    <span>Gestion des utilisateurs</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item active" href="utilisateur.php">Utilisateurs</a>
                        <a class="collapse-item" href="service.php">Services</a> 
                        <a class="collapse-item" href="categorie.php">Categories</a> 


                    </div>
                </div>
            </li>

            <!-- Divider -->
            <!-- Nav Item - Tables -->
            <li class="nav-item">
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
                            <h6 class="m-0 font-weight-bold text-primary">Gestion des utilisateurs</h6>
                            <!-- Bouton Ajouter Utilisateur avec seulement une icône -->
                            <div class="d-flex flex-wrap justify-content-end">
                                <button class="btn btn-sm btn-success me-2" data-toggle="modal" data-target="#modifModal">
                                    Ajouter un utilisateur <i class='fas fa-users text-light'></i>
                                </button>

                                <div class="modal fade" id="modifModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModalLabel">Ajouter un utilisateur</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="addUserForm" action="" method="post">

                                                    <div class="form-group">
                                                        <label for="username">Nom :</label>
                                                        <input type="text" class="form-control" id="service" name="nom" value="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username">Prenom :</label>
                                                        <input type="text" class="form-control" id="service" name="prenom" value="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role">Email :</label>
                                                        <input type="text" class="form-control" id="service" name="email" value="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="service">Mot de passe :</label>
                                                        <input type="text" class="form-control" id="service" name="mdp" value="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="service">Role :</label>
                                                        <select class="form-control" id="service" name="rol" value="">
                                                            <option value="1">Administrateur</option>
                                                            <option value="2">Utilisateur</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class=" modal-footer">
                                                <input type="submit" class="btn btn-primary" name="inscription" value="Inscrire">
                                                <button class="btn btn-danger" type="button" data-dismiss="modal">Annuler</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <?php

                                //inscription utilisateur
                                inscriptionadmin();
                                //supression utilisateur
                                supressionutilisateur();
                                //modifier les informations personnelles
                                modifieruser();
                                ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                            <th>Date de creation</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $recup = $connexion->prepare("SELECT * FROM  utilisateur  ORDER BY id_utilisateur DESC ");
                                        $recup->execute();
                                        while ($trouv = $recup->fetch()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $trouv['nom_utilisateur']; ?></td>
                                                <td><?php echo $trouv['prenom_utilisateur']; ?></td>
                                                <td><?php echo $trouv['email_utilisateur']; ?></td>
                                                <td><?= date('d/m/Y', strtotime($trouv['date_creation'])); ?></td>
                                                <td><?= $trouv['id_role'] == 2 ? 'Utilisateur' : 'Administrateur'; ?></td>
                                                <td>
                                                    <!-- button de modification -->
                                                    <button class="btn btn-sm btn-warning me-2" data-toggle="modal" data-target="#modifModal<?php echo $trouv['id_utilisateur']; ?>">
                                                        <i class='fas fa-edit text-light'></i>
                                                    </button>
                                                    <!-- moodal de modification -->
                                                    <div class="modal fade" id="modifModal<?php echo $trouv['id_utilisateur']; ?>" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="formModalLabel">Modification Utilisateur</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="addUserForm" action="" method="post">
                                                                        <input type="hidden" value="<?php echo $trouv['id_utilisateur']; ?>" name="modif">

                                                                        <div class="form-group">
                                                                            <label for="username">Nom :</label>
                                                                            <input type="text" class="form-control" id="service" name="nom" value="<?php echo $trouv['nom_utilisateur']; ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="username">Prenom :</label>
                                                                            <input type="text" class="form-control" id="service" name="prenom" value="<?php echo $trouv['prenom_utilisateur']; ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="role">Email :</label>
                                                                            <input type="text" class="form-control" id="service" name="email" value="<?php echo $trouv['email_utilisateur']; ?>" required>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="service">Role :</label>
                                                                            <select class="form-control" id="service" name="rol" value="">
                                                                                <option value="<?php echo $trouv['id_role']; ?>"><?= $trouv['id_role'] == 2 ? 'Utilisateur' : 'Administrateur'; ?></option>
                                                                                <option value="1">Administrateur</option>
                                                                                <option value="2">Utilisateur</option>
                                                                            </select>
                                                                            <div class=" modal-footer">
                                                                                <button type="submit" class="btn btn-primary" name="modifuser">Valider</button>
                                                                                <button class="btn btn-danger" type="button" data-dismiss="modal">Annuler</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <!-- button de supression -->
                                                    <button class="btn btn-sm btn-danger me-2" data-toggle="modal" data-target="#supModal<?php echo $trouv['id_utilisateur']; ?>"><i class="fas fa-trash all text-light"></i></button>
                                                    <!-- modal de supression -->
                                                    <div class="modal fade" id="supModal<?php echo $trouv['id_utilisateur']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="supp" value="<?php echo $trouv['id_utilisateur']; ?>">
                                                                    <div class="modal-body">Etes vous sur de vouloir supprimer cet utilisateur <?php echo $trouv['nom_utilisateur']; ?> ?</div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Non</button>
                                                                        <input type="submit" class="btn btn-danger" name="supprimer" value="Oui">

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
                        <input type="submit"class="btn btn-primary" name="deconnexion" value="Oui">
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
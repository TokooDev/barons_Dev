<!doctype html>
<html lang="en">
  <head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  </head>
  <body>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg white-bg fixed-top" id="mainNav">      
        <h5><i class="fa fa-2x fa-shekel-sign logo mt-1"></i> <span class="move-text text-logo">Gestion allocation chambres</span></h5>
        
            <button class="navbar-toggler navbar-toggler-right logo" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div><h6 class="message">Bienvenue sur votre application</h6></div>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item mt-3 d-md-block d-sm-block d-xs-block d-lg-none"><a class="nav-link" href="admin-home.php?page=questions"><i class="fas fa-user-graduate"></i> Etudiants</a></li>
                        <li class="nav-item mt-3 d-md-block d-sm-block d-xs-block d-lg-none"><a class="nav-link" href="admin-home.php?page=administrateurs"><i class="fas fa-building"></i> Chambres</a></li>
                        <li class="nav-item mt-3 d-md-block d-sm-block d-xs-block d-lg-none"><a class="nav-link" href="admin-home.php?page=players"><i class="fas fa-chart-line"></i> Report</a></li>
                <li class="nav-item">
                <a class="btn btn-default move-btn" href="../login/">Déconnexion</a>
                </li>
            </ul>
            </div>    
        </nav>
          <div class="row">
              <div class="col-lg-2 col-md-3 d-none d-lg-block d-md-none d-sm-none d-xs-none side-nav">
                <ul class="sidebar navbar-nav">
                    <li class="mb-2 mt-3"><div class="avatar"><i class="fas fa-3x fa-user-lock"></i></div> </li>
                    <li class="mb-2 title">Hello ! administrateur</li>
                    <li class="mb-2"><a class="nav-link active-link" href=""><i class="fas fa-user-graduate"></i> Etudiants</a></li>
                    <li class="mb-2"><a class="nav-link" href=""><i class="fas fa-building"></i> Chambres</a></li>
                    <li class="mb-2 mr-3"><a class="nav-link" href=""><i class="fas fa-chart-line"></i> Report</a></li>
                </ul>
              </div>
              <div class="col-lg-9 ml-auto mr-5 col-md-12 col-sm-12 content-to-load-section">
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="row">
                                <div class="col-10">
                                    <h5 class="logo"> <i class="fas fa-list"></i> LISTE DES ETUDIANTS</h5>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-default move-btn float-right" data-toggle="modal" data-target="#addStudent-modal"><i class="fas fa-plus-circle"></i> <span class="d-none d-md-inline d-sm-none d-xs-none d-xs-none d-lg-inline">Ajouter</span></button>
                                </div>
                            
                        </div>
                        <hr class="my-1">
                        <div class="col-12 mt-4 table-responsive" id="showStudents">

                        </div>
                    </div>
                    <!--col-->
                </div>
                <!--row-->
            </div>
              <!--col10-->
          </div>
          <!--Row-->

          
            <!-- ADD -->
        <div class="modal" id="addStudent-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addStudentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title logo" id="addStudentLabel"><i class="fas fa-plus-square"></i> AJOUT D'UN ETUDIANT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="col-lg-12 col-md-10 col-sm-10 pt-4">
                                <form method="post" action="" id="addStudent-form" >
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="n">Nom</label>
                                                <input type="text" name="nom" id="n" placeholder="Tapez le nom" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="p">Prénom</label>
                                                <input type="text" name="prenom" id="p" placeholder="Tapez le prénom" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="t">Téléphone</label>
                                                <input type="text" name="tel" id="t" placeholder="Tapez le téléphone" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="d">Date de naissance</label>
                                                <input type="date" name="datenaissance" id="d" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="e">Email</label>
                                                <input type="text" name="email" id="e" placeholder="Tapez l'adresse email" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" id="tp" name="type">
                                                    <option value="">Selectionner le type d'étudiant</option>
                                                    <option value="Boursier logé">Boursier logé</option>
                                                    <option value="Boursier non logé">Boursier non logé</option>
                                                    <option value="Non boursier">Non boursier</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="a">Adresse</label>
                                                <input type="text" name="adresse" id="a" placeholder="Tapez l'adresse de l'étudiant" class="form-control my-input">
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                    <input type="submit" name="addStudent" id="addStudent" value="Enregister" class="btn addStudentBtn btn-default move-btn">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EDIT -->
    <div class="modal" id="editStudent-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addStudentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title logo" id="addStudentLabel"><i class="fas fa-plus-square"></i> MODIFICATION D'UN ETUDIANT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col-lg-12 col-md-10 col-sm-10 pt-4">
                                <form method="post" action="" id="editStudent-form">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                            <input type="hidden" name="id" id="id">
                                                <label class="ml-2 text-secondary" for="nom">Nom</label>
                                                <input type="text" name="nom" id="nom" placeholder="Tapez le nom" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                
                                                <label class="ml-2 text-secondary" for="prenom">Prénom</label>
                                                <input type="text" name="prenom" id="prenom" placeholder="Tapez le prénom" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="telephone">Téléphone</label>
                                                <input type="text" name="tel" id="tel" placeholder="Tapez le téléphone" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="telephone">Date de naissance</label>
                                                <input type="date" name="datenaissance" id="datenaissance" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="email">Email</label>
                                                <input type="text" name="email" id="email" placeholder="Tapez l'adresse email" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" id="type" name="type">
                                                    <option value="">Selectionner le type d'étudiant</option>
                                                    <option value="Boursier logé">Boursier logé</option>
                                                    <option value="Boursier non logé">Boursier non logé</option>
                                                    <option value="Non boursier">Non boursier</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="adresse">Adresse</label>
                                                <input type="text" name="adresse" id="adresse" placeholder="Tapez l'adresse de l'étudiant" class="form-control my-input">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                    <input type="submit" name="updateStudent" id="updateStudent" value="Enregister" class="btn editStudentBtn btn-default move-btn">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>
        <!--EDIT-->
      </div>
      <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="../../public/js/script.js"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <title>Chambres</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.css">
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
                <a class="btn btn-default move-btn" href="index.php?p=login">Déconnexion</a>
                </li>
            </ul>
            </div>    
        </nav>
          <div class="row">
              <div class="col-lg-2 col-md-3 d-none d-lg-block d-md-none d-sm-none d-xs-none side-nav">
                <ul class="sidebar navbar-nav">
                    <li class="mb-2 mt-3"><div class="avatar"><i class="fas fa-3x fa-user-lock"></i></div> </li>
                    <li class="mb-2 title">Hello ! administrateur</li>
                    <li class="mb-2"><a class="nav-link" href=""><i class="fas fa-user-graduate"></i> Etudiants</a></li>
                    <li class="mb-2"><a class="nav-link active-link" href=""><i class="fas fa-building"></i> Chambres</a></li>
                    <li class="mb-2 mr-3"><a class="nav-link" href=""><i class="fas fa-chart-line"></i> Report</a></li>
                </ul>
              </div>
              <div class="col-lg-8 offset-lg-3 col-md-12 col-sm-12 content-to-load-section">
              <div class="row">
                <div class="col-12 mt-4">
                <div class="row">
                        <div class="col-10">
                            <h5 class="logo"> <i class="fas fa-list"></i> LISTE DES CHAMBRES</h5>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-default move-btn float-right" data-toggle="modal" data-target="#addRoom-modal"><i class="fas fa-plus-circle"></i> <span class="d-none d-md-inline d-sm-none d-xs-none d-xs-none d-lg-inline">Ajouter</span></button>
                        </div>
                    
                </div>
                <hr class="my-1">
                <div class="col-12 mt-4 table-responsive" id="showRooms">
                </div>
                
            </div>
            <!-- ADD -->
        <div class="modal" id="addRoom-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addRoomLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title logo" id="addRoomLabel"><i class="fas fa-plus-square"></i> AJOUT D'UNE CHAMBRE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="statusMsg"></div>
                <div class="col-lg-12 col-md-10 col-sm-10 pt-4">
                                <form method="post" action="" id="addRoom-form" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="nB">Numéro bâtiment</label>
                                                <input type="text" name="numBat" id="nB" placeholder="Tapez le numéro du bâtiment" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="nC">Numéro chambre</label>
                                                <input type="text" name="numChamb" id="nC" placeholder="Tapez le numéro de la chambre" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control my-input" id="tp" name="type">
                                                    <option value="">Selectionner le type de chambres</option>
                                                    <option value="A DEUX">Chambre à deux</option>
                                                    <option value="INDIVIDUEL">Chambre individuelle</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                    <input type="submit" name="addRoom" id="addRoom" value="Enregister" class="btn addRoomBtn btn-default move-btn">
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
    <div class="modal" id="editRoom-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addRoomLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title logo" id="editRoomLabel"><i class="fas fa-plus-square"></i> MODIFICATION D'UNE CHAMBRE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col-lg-12 col-md-10 col-sm-10 pt-4">
                                <form method="post" action="" id="editRoom-form">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                            <input type="hidden" name="id" id="id">
                                                <label class="ml-2 text-secondary" for="numBat">Numéro bâtiment</label>
                                                <input type="text" name="numBat" id="numBat" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="numChamb">Numéro chambre</label>
                                                <input type="text" name="numChamb" id="numChamb" class="form-control my-input">
                                            </div>
                                            <div class="form-group">
                                                <label class="ml-2 text-secondary" for="type">Type</label>
                                                <input type="text" name="type" id="type" class="form-control my-input">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                    <input type="submit" name="updateRoom" id="updateRoom" value="Enregister" class="btn editRoomBtn btn-default move-btn">
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
        <!--EDIT-->
              
          </div>
          
</div>
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
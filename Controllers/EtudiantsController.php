<?php
    require_once('../Models/EtudiantsModel.php');
    $etudiants= new EtudiantsModel;
    //Show all students
    if(isset($_POST['action']) && $_POST['action']== "view"){
        $output = '';
        $data = $etudiants->read();
        if($etudiants->totalRowCount() > 0){
            $output .= '<table class="table table-hover table-bordered" id="table-students" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th>Matricule</th>
                    <th>Nom complet</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Adresse</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            foreach($data as $row){
                $output .= '<tr class="text-center">
                <td>'.$row['matricule'].'</td>
                <td>'.$row['prenom'].' '.$row['nom'].'</td>
                <td>'.$row['tel'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['type'].'</td>
                <td>'.$row['adresse'].'</td>
                <td>
                <a href="#" title="Modifier étudiant" id="'.$row['id'].'" class="text-warging edit-student-Btn" data-toggle="modal" data-target="#editStudent-modal"><i class="fa fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                </td>
                </tr>';
            }
            $output .='</tbody></table>';
            echo $output;
        }else{
            echo '<h3 class="text-center mt-5">Aucune donnée chargée, votre table est vide</h3>';
        }
    }

    //Add student
    if(isset($_POST['action']) && $_POST['action']== "insert"){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $ll = substr($prenom, -2);
        $cc = substr($nom,0,2); 
        $year = date("Y");
        $rand = (rand(1, 10000));
        $matricule= $year.$cc.$ll.$rand;
        $tel = $_POST['tel'];
        $datenaissance = $_POST['datenaissance'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $adresse = $_POST['adresse'];
        $etudiants->insert($matricule,$nom,$prenom,$tel,$datenaissance,$email,$type,$adresse);
    }

    //Show student details

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $row = $etudiants->getEtudiantById($id);
        echo json_encode ($row);
    }

    //Update student
    if(isset($_POST['action']) && $_POST['action']== "update"){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['tel'];
        $datenaissance = $_POST['datenaissance'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $adresse = $_POST['adresse'];
        $etudiants->update($id,$nom,$prenom,$tel,$datenaissance,$email,$type,$adresse);
    }
?>
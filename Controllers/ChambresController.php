<?php
    require_once('../Models/ChambresModel.php');
    $chambres= new ChambresModel;
    //Show all rooms
    if(isset($_POST['action']) && $_POST['action']== "view"){
        $output = '';
        $data = $chambres->read();
        if($chambres->totalRowCount() > 0){
            $output .= '<table class="table table-hover table-bordered" id="table-rooms">
            <thead>
                <tr class="text-center">
                    <th style="display: none"></th>
                    <th>Numéro du bâtiment</th>
                    <th>Numéro de la chambre</th>
                    <th>Type de la chambre</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            foreach($data as $row){
                $output .= '<tr class="text-center">
                <td hidden="true">'.$row['id'].'</td>
                <td>'.$row['numBat'].'</td>
                <td>'.$row['numChamb'].'</td>
                <td>'.$row['type'].'</td>
                <td>
                <a href="#" title="Modifier chambre" id="'.$row['id'].'" class="text-warging editBtn" data-toggle="modal" data-target="#editRoom-modal"><i class="fa fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                <a href="#" title="Supprimer chambre" id="'.$row['id'].'" class="text-danger delBtn"><i class="fa fa-trash-alt fa-lg"></i></a></td>
                </tr>';
            }
            $output .='</tbody></table>';
            echo $output;
        }else{
            echo '<h3 class="text-center mt-5">Aucune donnée chargée</h3>';
        }
    }

    //Add room
    if(isset($_POST['action']) && $_POST['action']== "insert"){
        $numBat = $_POST['numBat'];
        $numChamb = $_POST['numChamb'];
        $type = $_POST['type'];
        $chambres->insert($numBat,$numChamb,$type);
    }

    //Show room details

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $row = $chambres->getChambreById($id);
        echo json_encode ($row);
    }

    //Update room
    if(isset($_POST['action']) && $_POST['action']== "update"){
        $id = $_POST['id'];
        $numBat = $_POST['numBat'];
        $numChamb = $_POST['numChamb'];
        $type = $_POST['type'];
        $chambres->update($id,$numBat,$numChamb,$type);
    }

    //Delete room

    if(isset($_POST['del_id'])){
        $id = $_POST['del_id'];
        $chambres->delete($id);
    }
?>
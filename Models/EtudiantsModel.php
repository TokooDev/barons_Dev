<?php
require_once('../libs/Db.php');
    class EtudiantsModel extends Db{
        public function insert($matricule,$nom,$prenom,$tel,$datenaissance,$email,$type,$adresse){
                $sql = "INSERT INTO etudiants (matricule, nom, prenom,tel,datenaissance,email,type,adresse) VALUES(:matricule, :nom, :prenom,:tel,:datenaissance,:email,:type,:adresse)";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['matricule'=>$matricule,'nom'=>$nom,'prenom'=>$prenom,'tel'=>$tel,'datenaissance'=>$datenaissance,'email'=>$email,'type'=>$type,'adresse'=>$adresse]);
                return true;
        }

        public function read(){
                $data= array();
                $sql = "SELECT * FROM etudiants";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as $row){
                        $data[] = $row;
                }
                return $data;

        }

        public function getEtudiantById($id){
                $sql = "SELECT * FROM etudiants WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['id'=>$id]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
        }
        public function getEtudiantByMatricule($matricule){
                $sql = "SELECT * FROM etudiants WHERE matricule = :matricule";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['matricule'=>$matricule]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
        }

        public function update($id,$nom,$prenom,$tel,$datenaissance,$email,$type,$adresse){
                $sql= "UPDATE etudiants SET nom = :nom, prenom = :prenom, tel = :tel, datenaissance = :datenaissance, email = :email, type = :type, adresse = :adresse  WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['nom'=>$nom,'prenom'=>$prenom,'tel'=>$tel,'datenaissance'=>$datenaissance,'email'=>$email,'type'=>$type,'adresse'=>$adresse, 'id'=>$id]);
                return true;

        }

        public function delete($id){
                $sql = "DELETE FROM etudiants WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['id'=>$id]);
                return true;
        }

        public function totalRowCount(){
                $sql = "SELECT * FROM etudiants";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $t_rows = $stmt->rowCount();
                return $t_rows;
        }
        
    }
?>
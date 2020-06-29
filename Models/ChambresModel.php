<?php
require_once('../libs/Db.php');
class ChambresModel extends Db{
        public function insert($numBat,$numChamb,$type){
                $sql = "INSERT INTO chambres (numBat, numChamb, type) VALUES(:numBat,:numChamb, :type)";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['numBat'=>$numBat,'numChamb'=>$numChamb,'type'=>$type]);
                return true;
        }

        public function read(){
                $data= array();
                $sql = "SELECT * FROM chambres";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as $row){
                        $data[] = $row;
                }
                return $data;

        }
        
        public function getChambreById($id){
                $sql = "SELECT * FROM chambres WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['id'=>$id]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
        }

        public function update($id,$numBat,$numChamb,$type){
                $sql= "UPDATE chambres SET numBat = :numBat, numChamb = :numChamb,type = :type WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['numBat'=>$numBat,'numChamb'=>$numChamb,'type'=>$type, 'id'=>$id]);
                return true;

        }

        public function delete($id){
                $sql = "DELETE FROM chambres WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['id'=>$id]);
                return true;
        }

        public function totalRowCount(){
                $sql = "SELECT * FROM chambres";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $t_rows = $stmt->rowCount();
                return $t_rows;
        }
}
?>
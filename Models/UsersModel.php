<?php
class UsersModel extends Db
{
    public function findUserByLoginAndPassword($login,$password)
    {
        $sql = "SELECT * FROM users WHERE login = :login AND password = :password ";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute(['login'=>$login,'password'=>$password]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
    }

    public function totalRowCount($login,$password){
        $sql = "SELECT * FROM users WHERE login = :login AND password = :password";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['login'=>$login,'password'=>$password]);
        $t_rows = $stmt->rowCount();
        return $t_rows;
}
}
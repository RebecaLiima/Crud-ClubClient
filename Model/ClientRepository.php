<?php



class ClientRepository
{


    public function create($name, $cpf, $dateOfBirth)
    {
        $mysqli = ConectionBD::getInstance();
        $stmt = $mysqli->prepare("INSERT INTO livros (``, ``, ``, ``, ``) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss", $name, $cpf, $dateOfBirth, $dateOfBirth);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function update($name)
    {
        $mysqli = ConectionBD::getInstance();
        $stmt = $mysqli->prepare("UPDATE `` SET `nome` = ?, WHERE `nome` = ?");
        $stmt->bind_param("sssssss",$name);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function delete()
    {
        $mysqli = ConectionBD::getInstance();
        if($mysqli->query("DELETE FROM `` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function read()
    {
        $mysqli = ConectionBD::getInstance();
        $result = $mysqli->query("SELECT * FROM ");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

}
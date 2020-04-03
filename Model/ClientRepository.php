<?php



class ClientRepository
{


    public function create($name, $cpf, $age, $gender)
    {
        $mysqli = ConectionBD::getInstance();
        $stmt = $mysqli->prepare("INSERT INTO cadastro (`name`, `cpf`, `idade`, `sexo`) VALUES (?,?,?,?)");
        $stmt->bind_param("sssss", $name, $cpf, $age, $gender);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function update($name, $age, $gender, $cpf)
    {
        $mysqli = ConectionBD::getInstance();
        $stmt = $mysqli->prepare("UPDATE `` SET `nome` = ?, `idade` =?, `sexo` =? WHERE `cpf` = ?");
        $stmt->bind_param("sssssss",$name, $age, $gender, $cpf);
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
        $result = $mysqli->query("SELECT * FROM cadastro");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

}
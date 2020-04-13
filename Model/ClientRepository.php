<?php
require_once("ConectionBD.php");

class ClientRepository
{

    public function create($name, $cpf, $age, $gender)
    {
        $conn = new ConectionBD();
        $mysqli = $conn->getInstance();

        $sql = "INSERT INTO cliente (nome, cpf, idade, sexo) VALUES ('$name', '$cpf', '$age', '$gender')";

        if ($mysqli->query($sql) === TRUE) {
            echo "<script type='text/javascript'>window.alert('Cliente cadastrado com sucesso!');</script>";
            echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../View/Cadastro.php">';
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

    public function update($name, $age, $gender, $cpf)
    {
        $conn = new ConectionBD();
        $mysqli = $conn->getInstance();

        $sql = "UPDATE Customers SET name = '$name', idade= '$age' sexo = '$gender' WHERE cpf = '$cpf'";

        if ($mysqli->query($sql) === TRUE) {
            echo "Cliente atualizado com sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function delete($cpf)
    {
        $conn = new ConectionBD();
        $mysqli = $conn->getInstance();

        if($mysqli->query("DELETE FROM `` WHERE `cpf` = '$cpf';")== TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function read()
    {
        $mysqli = ConectionBD::getInstance();
        $result = $mysqli->query("SELECT * FROM cliente");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

}
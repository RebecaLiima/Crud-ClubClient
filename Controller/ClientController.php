<?php
require_once("../Model/ClientRepository.php");

class ClientController
{

    private $client;

    public function __construct()
    {
        $this->client = new ClientRepository();

    }

    public function insertClient($name, $age, $cpf, $gender)
    {
        return $this->client->create($name, $age, $cpf, $gender);
    }

    public function UpdateClient($name, $age, $cpf, $gender)
    {
        return $this->client->update($name, $age, $cpf, $gender);
    }

    public function deleteClient($name, $age, $cpf, $gender)
    {
        return $this->client->delete($name, $age, $cpf, $gender);
    }

    public function getClients()
    {
        return $this->client->read();
    }

}
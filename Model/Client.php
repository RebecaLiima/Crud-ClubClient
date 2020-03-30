<?php


class Client
{
    private $id;
    private $name;
    private $dependentes;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDependentes()
    {
        return $this->dependentes;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $dependentes
     */
    public function setDependentes($dependentes)
    {
        $this->dependentes = $dependentes;
    }
}
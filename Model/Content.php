<?php

namespace ContentBundle\Model;

class Content
{
    private $id;
    private $auteur;
    private $titre;
    private $description;

    public function __construct(array $data)
    {
        $this->populate($data);
    }
    
    public function populate(array $data)
    {
        foreach ($data as $key => $value) {

        $setter = 'set'.ucfirst($key);

        if (method_exists($this, $setter)) {
            $this->$setter($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }
}
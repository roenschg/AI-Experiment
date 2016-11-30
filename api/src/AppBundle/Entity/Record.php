<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="record")
 */
class Record
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="string", length=1024)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $client_name;

    /**
     * @ORM\Column(type="string", length=524288)
     */
    private $json;


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function getDate(){
        return $this->created;
    }

    public function setDate($created){
        $this->created = $created;

        return $this;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;

        return $this;
    }

    public function getClientName(){
        return $this->client_name;
    }

    public function setClientName($client_name){
        $this->client_name = $client_name;

        return $this;
    }

    public function getJson(){
        return $this->json;
    }

    public function setJson($json){
        $this->json = $json;

        return $this;
    }
}

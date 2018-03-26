<?php 
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity 
 * @ORM\Table(name="experience")
**/

class Experiences {
    
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    
    /** @ORM\Column(type="string") **/
    private $name;
    
    /** @ORM\Column(type="string") **/
    private $dateDebut;
    
    /** @ORM\Column(type="string") **/
    private $dateFin;
    
    /** @ORM\Column(type="string") **/
    private $lieu;
    
    function getId()
    {
        return $this->id;
    }
    
    function getname()
    {
        return $this->name;
    }
    
    function getdateDebut()
    {
        return $this->dateDebut;
    }
    
    function getdateFin()
    {
        return $this->dateFin;
    }
    
    function getlieu()
    {
        return $this->lieu;
    }

}



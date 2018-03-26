<?php 

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity 
 * @ORM\Table(name="loisirs")
**/

class Loisirs {
    
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
    
    function getlieu()
    {
        return $this->lieu;
    }
    function setname($name)
    {
        return $this->name=$name;
    }
}



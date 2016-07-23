<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

namespace Application\Entity;

/**
 * @ORM\Entity
 * @ORM\Table="gallery"
 */
class Gallery
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */  
    protected $id;
    
    /** @ORM\Column(type="string") */
    protected $name;
    
    /** @ORM\Column(type="string") */
    protected $visibility;
    
    /**
     * @ORM\OneToMany(targetEntity="Photograph", mappedBy="gallery")
     */
    protected $photographs;
    
    public function __construct()
    {
        $this->photographs = new ArrayCollection();
    }
    
    public function addPhotograph($photograph)
    {
        $this->photographs[] = $photograph;
        return $this;
    }
    
    public function removePhotograph($photograph)
    {
        $this->photographs->remove($photograph);
        return $this;
    }
    
    public function getPhotographs()
    {
        return $this->photographs->toArray();
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }
    
}

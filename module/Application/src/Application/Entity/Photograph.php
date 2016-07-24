<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

namespace Applcation\Entity;

/**
 * @ORM\Entity
 * @ORM\Table="photograph"
 */
class Photograph
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */ 
    protected $id;
    
    /** @ORM\Column(type="string") */
    protected $title;
    
    /** @ORM\Column(type="text") */
    protected $caption;
    
    /** @ORM\Column(type="string") */
    protected $filename;
    
    /** @ORM\Column(type="string", name="original_filename") */
    protected $originalFilename;
    
    /** @ORM\Column(type="integer") */
    protected $height;
    
    /** @ORM\Column(type="integer") */
    protected $width;
    
    /** @ORM\Column(type="date") */
    protected $dateTaken;
    
    /** @ORM\Column(type="string") */
    protected $location;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gallery", mappedBy="photographs")
     */
    protected $gallery;
    
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getCaption()
    {
        return $this->caption;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getDateTaken()
    {
        return $this->dateTaken;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;
        return $this;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function setDateTaken($dateTaken)
    {
        $this->dateTaken = $dateTaken;
        return $this;
    }

    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }
}
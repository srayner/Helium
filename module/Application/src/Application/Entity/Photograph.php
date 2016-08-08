<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table="image"
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
    
    /** @ORM\Column(type="date", name="date_taken") */
    protected $dateTaken;
    
    /** @ORM\Column(type="string") */
    protected $location;
    
    /** @ORM\Column(type="string") */
    protected $type;
    
    /** @ORM\Column(type="integer") */
    protected $size;
    
    /** @ORM\Column(type="string") */
    protected $make;
    
    /** @ORM\Column(type="string") */
    protected $model;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gallery", inversedBy="photographs")
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

    public function getSize()
    {
        return $this->size;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    function getMake()
    {
        return $this->make;
    }

    function getModel()
    {
        return $this->model;
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
    
    function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
    
    function setGallery($gallery)
    {
        $this->gallery = $gallery;
        return $this;
    }
    
    public function setMake($make)
    {
        $this->make = $make;
        return $this;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }


}
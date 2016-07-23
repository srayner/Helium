<?php

namespace Applcation\Entity;

class Photograph
{
    protected $id;
    
    protected $title;
    
    protected $caption;
    
    protected $filename;
    
    protected $originalFilename;
    
    protected $height;
    
    protected $width;
    
    protected $dateTaken;
    
    protected $location;
    
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
<?php

namespace Application\Entity;

class Gallery
{
    protected $id;
    
    protected $name;
    
    protected $visibility;
    
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

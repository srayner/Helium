<?php

namespace Application\Service;

class ImageService
{
    protected $form;
    protected $serviceLocator;

    public function __construct($form)
    {
        $this->form = $form;
    }
    
    public function getForm()
    {
        return $this->form;
    }
}
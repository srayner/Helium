<?php

namespace Application\Form;

use Zend\Form\Form;

class GalleryForm extends Form
{
    public function __construct($name = null, $options = array())
    {
        parent::__construct($name, $options);
        $this->addElements();
    }
    
    private function addElements()
    {
        // Gallery name
        $this->add(array(
            'name' => 'name',
            'options' => array(
                'label' => 'Gallery Name',
            ),
            'attributes' => array(
                'type'  => 'text',
            ),
        ));
        
        // Visibility
        $this->add(array(
            'name' => 'visibility',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Visibility',
                'value_options' => array(
                    'private' => 'Private',
                    'public'  => 'Public'
                ),
            ),
        ));
        
        // Submit button
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Add',
            ),
        ));
    }
}
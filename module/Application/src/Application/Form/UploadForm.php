<?php

namespace Application\Form;

use Zend\Form\Form;
 
class UploadForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct();
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');
         
        $this->add(array(
            'name' => 'caption',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Caption',
            ),
        ));
 
         
        $this->add(array(
            'name' => 'file',
            'attributes' => array(
                'type'  => 'file',
            ),
            'options' => array(
                'label' => 'File Upload',
            ),
        )); 
         
         
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Upload Now'
            ),
        )); 
    }
}
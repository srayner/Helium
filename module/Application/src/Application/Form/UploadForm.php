<?php

namespace Application\Form;

use Zend\InputFilter;
use Zend\Form\Element;
use Zend\Form\Form;
 
class UploadForm extends Form
{
    protected $dir;
    
    public function __construct($dir, $name = null, $options = array())
    {
        parent::__construct($name, $options);
        $this->dir = $dir;
        $this->addElements();
        $this->addFilter();
    }
    
    private function addElements()
    {
        // File upload element.
        $file = new Element\File('image-file');
        $file->setLabel('Image Upload');
        $file->setAttribute('id', 'image-file');
        $file->setAttribute('multiple', true);
        $this->add($file); 
        
        // Submit element.
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Upload Now'
            ),
        )); 
    }
    
    private function addFilter()
    {
        $inputFilter = new InputFilter\InputFilter();
        
        $fileInput = new InputFilter\FileInput('image-file');
        $fileInput->setRequired(true);
        $fileInput->getValidatorChain()
                  ->attachByName('filesize',         array('max' => 204800))
                  ->attachByName('filemimetype',     array('mimeType' => 'image/jpg'));
        
        $fileInput->getFilterChain()->attachByName('filerenameupload', array(
                      'target'    => './data/tmpuploads/avatar.png',
                      'randomize' => true,
                  ));
                  
        $inputFilter->add($fileInput);
        $this->setInputFilter($inputFilter);
    }
}
<?php

namespace Application\Form;

use Zend\InputFilter\InputFilter;

class UploadFilter extends InputFilter
{
    public function __construct()
    {
        // Caption
        $this->add(array(
            'name'       => 'caption',
            'required'   => true,
            'validators' => array(
                array(
                    'name'    => 'StringLength',
                    'options' => array(
                        'max' => 128,
                    ),
                ),
            ),
            'filters'   => array(
                array('name' => 'StringTrim'),
            ),
        ));
        
    }
}
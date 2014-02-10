<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;

class LoginForm extends Form implements InputFilterProviderInterface
{

    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('userlogin');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'Username',
            'type' => 'Text',
            'options' => array(
                'label' => 'Username',
            ),
            'attributes' => array(
                'placeholder' => 'Username',
                'class' => 'form-control'
            )
        ));
        $this->add(array(
            'name' => 'Password',
            'type' => 'Password',
            'options' => array(
                'label' => 'Password',
            ),
            'attributes' => array(
                'placeholder' => 'Password',
                'class' => 'form-control'
            ) 
        ));      

        $this->add(array(
            'name' => 'Submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Login',
                'class' => 'btn btn-default'
            ),
        ));

    }

    public function getInputFilterSpecification()
    {

        $elements = $this->getElements();
        return array(
            'Username' => array(
                'required' => true,
                'allowEmpty' => false,
                'validators' => array(
                    array(
                      'name' =>'NotEmpty', 
                        'options' => array(
                            'messages' => array(
                                \Zend\Validator\NotEmpty::IS_EMPTY => 'Please fill out the login form.' 
                            ),
                        ),
                    ),
                )
            ),
            'Password' => array(
                'required' => true,
                'allowEmpty' => false,
                'validators' => array(
                    array(
                      'name' =>'NotEmpty', 
                        'options' => array(
                            'messages' => array(
                                \Zend\Validator\NotEmpty::IS_EMPTY => 'Please fill out the login form.' 
                            ),
                        ),
                    ),
                )                
            ),            
        );
    } 

       
}
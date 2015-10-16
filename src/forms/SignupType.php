<?php

namespace ExpressLibrary\forms;

use Symfony\Component\Form\AbstractType;
use SYmfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class SignupType extends AbstractType 
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('username', 'text',  array(
                'constraints' => new Assert\NotBlank()))

				->add('password', 'repeated', array(
    					'type' => 'password',
    					'invalid_message' => 'The password fields must match.',
    					'options' => array('attr' => array('class' => 'password-field')),
    					'required' => true,
    					'first_options'  => array('label' => 'Password'),
    					'second_options' => array('label' => 'Repeat Password')))

				->add('email', 'email', array(
					'constraints' =>	[new Assert\NotBlank(), new Assert\Email()]
					))
				->add('signup', 'submit');
	}
}

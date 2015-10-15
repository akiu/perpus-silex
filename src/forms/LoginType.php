<?php

namespace ExpressLibrary\forms;

use Symfony\Component\Form\AbstractType;
use SYmfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class LoginType extends AbstractType 
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('username', 'text',  array(
                'constraints' => new Assert\NotBlank()))
				->add('password', 'password',  array(
                'constraints' => new Assert\NotBlank()))
				->add('login', 'submit');
	}
}

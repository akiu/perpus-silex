<?php

namespace ExpressLibrary\forms;

use Symfony\Component\Form\AbstractType;
use SYmfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class AddCategory extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text',  array(
            'constraints' => new Assert\NotBlank()))
            ->add('slug', 'text',  array(
                'constraints' => new Assert\NotBlank()))
            ->add('login', 'submit');
    }
}

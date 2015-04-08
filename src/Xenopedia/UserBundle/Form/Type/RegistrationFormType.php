<?php

namespace Xenopedia\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
		$builder->add('username','text',array(
						'required' => true));
		$builder->add('UrlGravatar','email');
		$builder->add('captcha','captcha');
        
    }

    public function getName()
    {
        return 'xenopedia_user_registration';
    }
	
}
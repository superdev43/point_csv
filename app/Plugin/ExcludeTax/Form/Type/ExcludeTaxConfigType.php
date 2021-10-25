<?php

/*
 * This file is part of the ExcludeTax
 *
 * Copyright (C) 2017 税抜き表記プラグイン
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ExcludeTax\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ExcludeTaxConfigType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => '項目A',
                'required' => true,
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
            ));
    }

    public function getName()
    {
        return 'excludetax_config';
    }

}

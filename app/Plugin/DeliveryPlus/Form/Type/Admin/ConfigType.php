<?php
/*
* Plugin Name : DeliveryPlus
*
* Copyright (C) 2016 BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\DeliveryPlus\Form\Type\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConfigType extends AbstractType
{
    public $app;

    public function __construct(\Silex\Application $app)
    {
        $this->app = $app;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $app = $this->app;

        $builder
            ->add('tpl_detail', 'textarea', array(
                'label' => '詳細ページテンプレート',
                'mapped' => false,
                'required' => true,
                'constraints' => array()
            ))
            ->add('tpl_cart', 'textarea', array(
                'label' => 'カートテンプレート',
                'mapped' => false,
                'required' => true,
                'constraints' => array()
            ))
            ->addEventSubscriber(new \Eccube\Event\FormEventSubscriber())
        ;

    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'admin_setting_deliveryplus';
    }
}

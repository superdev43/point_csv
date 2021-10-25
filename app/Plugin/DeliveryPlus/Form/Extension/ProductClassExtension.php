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

namespace Plugin\DeliveryPlus\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ProductClassExtension extends AbstractTypeExtension
{
    public $app;

    public function __construct(\Silex\Application $app)
    {
        $this->app = $app;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $app = $this->app;
        
        $builder
            ->add(
                'plg_deliveryplus_weight',
                'number',
                array(
                    'label' => '重さ',
                    'required' => false,
                    'mapped' => false,
                    'constraints' => array(
                        new Assert\Regex(array(
                            'pattern' => "/^\d+$/u",
                            'message' => 'form.type.numeric.invalid'
                        )),
                    ),
                )
            )
            ->add(
                'plg_deliveryplus_size',
                'number',
                array(
                    'label' => 'サイズ',
                    'required' => false,
                    'mapped' => false,
                    'constraints' => array(
                        new Assert\Regex(array(
                            'pattern' => "/^\d+$/u",
                            'message' => 'form.type.numeric.invalid'
                        )),
                    ),
                )
            );                
        $builder
            ->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) use($app) {
                /** @var \Eccube\Entity\ProductClass $data */
                $ProductClass = $event->getData();
                /** @var \Symfony\Component\Form\Form $form */
                $form = $event->getForm();
                if (is_null($ProductClass)) {
                    return;
                }
                $data = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $ProductClass->getId()));
                if($data){
                    $form['plg_deliveryplus_weight']->setData($data->getWeight());
                    $form['plg_deliveryplus_size']->setData($data->getSize());
                }
            });
    }
 
    public function getExtendedType()
    {
        return 'admin_product_class';
    }

}

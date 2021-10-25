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

class DeliveryExtension extends AbstractTypeExtension
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
                'deliveryplus_weight_min',
                'number',
                array(
                    'label' => '重さ（下限）',
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
                'deliveryplus_weight_max',
                'number',
                array(
                    'label' => '重さ（上限）',
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
                'deliveryplus_size_min',
                'number',
                array(
                    'label' => 'サイズ（下限）',
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
                'deliveryplus_size_max',
                'number',
                array(
                    'label' => 'サイズ（上限）',
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
                'deliveryplus_subtotal_min',
                'number',
                array(
                    'label' => '購入金額（上限）',
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
                'deliveryplus_subtotal_max',
                'number',
                array(
                    'label' => '購入金額（下限）',
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

        if($app['eccube.deliveryplus.service.util']->checkInstallPlugin('DeliveryCool')){
            $arrCoolType = array();
            $arrCoolType[1] = 'クール便';
            $arrCoolType[2] = '冷凍便';

            $builder
                ->add(
                    'deliveryplus_cool_type',
                    'choice',
                    array(
                        'label' => 'クール便・冷凍便対応',
                        'required' => false,
                        'mapped' => false,
                        'choices' => $arrCoolType,
                        'multiple' => true,
                        'expanded' => true,
                        'empty_value' => false,
                    )
                );
        }

        $builder
            ->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) use($app) {
                $Delivery = $event->getData();
                /** @var \Symfony\Component\Form\Form $form */
                $form = $event->getForm();
                if (is_null($Delivery)) {
                    return;
                }
                $data = $app['eccube.deliveryplus.repository.delivery']->findOneBy(array('delivery_id' => $Delivery->getId()));
                if($data){
                    $form['deliveryplus_weight_min']->setData($data->getWeightMin());
                    $form['deliveryplus_weight_max']->setData($data->getWeightMax());
                    $form['deliveryplus_size_min']->setData($data->getSizeMin());
                    $form['deliveryplus_size_max']->setData($data->getSizeMax());
                    $form['deliveryplus_subtotal_min']->setData($data->getSubtotalMin());
                    $form['deliveryplus_subtotal_max']->setData($data->getSubtotalMax());
                }

                if($form->has('deliveryplus_cool_type')){
                    $data = $app['eccube.deliveryplus.repository.delivery_cool']->findBy(array('delivery_id' => $Delivery->getId()));
                    if($data){
                        $check = array();
                        foreach($data as $plgDeliveryCool){
                            $check[] = $plgDeliveryCool->getType();
                        }
                        $form['deliveryplus_cool_type']->setData($check);
                    }
                }
            });
    }

    public function getExtendedType()
    {
        return 'delivery';
    }

}

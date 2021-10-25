<?php

namespace Plugin\GmoEpsilon\Form\Type\Admin;

use Plugin\GmoEpsilon\Util\PaymentUtil;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ConfigType extends AbstractType
{
    private $app;
    private $subData;

    public function __construct(\Eccube\Application $app, $subData = null)
    {
        $this->app = $app;
        $this->subData = $subData;
    }

    /**
     * Build config type form
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return type
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $objUtil = new PaymentUtil($this->app);
        if (empty($this->subData)) {
            $this->subData = array(
                'contract_code' => null,
                'destination_url' => null,
                'info_conf_url' => null,
                'ssl_version' => 6,
                'use_payment' => array(),
                'use_convenience' => array(),
                'regular' => 0,
            );
        } else if (!isset($this->subData['ssl_version'])) {
        	$this->subData['ssl_version'] = 6;
        }
        $arrPayments = $objUtil->getPaymentNames();
        $arrConveniences = $objUtil->getConvenienceNames();
        $arrSSLVersion_number = $objUtil->getSSLVersionNumber();

        $builder
            ->add('contract_code', 'text', array(
                'label' => '契約コード',
                'attr' => array(
                    'class' => 'lockon_card_row',
                ),
                'constraints' => array(
                    new Assert\NotBlank(array('message' => '※ 契約コードが入力されていません。')),
                ),
                'data' => $this->subData['contract_code'],
            ))

            ->add('destination_url', 'text', array(
                'label' => '接続先URL',
                'required' => false,
                'attr' => array(
                    'class' => 'lockon_card_row',
                ),
                'data' => $this->subData['destination_url'],
                'constraints' => array(
                    new Assert\NotBlank(array('message' => '※ 接続先URLが入力されていません。')),
                    new Assert\Url(),
                ),
            ))

            ->add('info_conf_url', 'text', array(
                'label' => '情報確認URL',
                'required' => false,
                'attr' => array(
                    'class' => 'lockon_card_row',
                ),
                'data' => $this->subData['info_conf_url'],
                'constraints' => array(
                    new Assert\NotBlank(array('message' => '※ 情報確認URLが入力されていません。')),
                    new Assert\Url(),
                ),
            ))

            ->add('ssl_version', 'choice', array(
            		'label' => 'SSLバージョン選択',
            		'choices' => $arrSSLVersion_number,
            		'expanded' => false,
            		'multiple' => false,
            		'data' => $this->subData['ssl_version'],
            ))

            ->add('use_payment', 'choice', array(
                'label' => '利用決済方法',
                'choices' => $arrPayments,
                'expanded' => true,
                'multiple' => true,
                'data' => $this->subData['use_payment'],
                'constraints' => array(
                    new Assert\NotBlank(array('message' => '※ 利用決済方法が選択されていません。')),
                ),
            ))

            ->add('use_convenience', 'choice', array(
                'label' => '利用コンビニ',
                'choices' => $arrConveniences,
                'expanded' => true,
                'multiple' => true,
                'data' => $this->subData['use_convenience'],

            ))

            ->add('regular', 'choice', array(
                'choices' => array(
                    0 => '利用しない',
                    1 => '利用する',
                ),
                'data' => $this->subData['regular'],
                'multiple' => false,
                'expanded' => true,
            ))

            ->addEventSubscriber(new \Eccube\Event\FormEventSubscriber());
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'config';
    }
}

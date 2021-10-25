<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\ExcludeTax;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Entity\CartItem;
use Eccube\Entity\Category;
use Eccube\Entity\Order;
use Eccube\Entity\OrderDetail;
use Eccube\Entity\Product;
use Eccube\Entity\ProductClass;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Eccube\Service\CartService;
use Eccube\Util\Str;
use Plugin\ExcludeTax\Service\TwigService;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\DomCrawler\Crawler;

class Event
{
    /**
     * @var \Eccube\Application
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

	/**
	 * 商品一覧テンプレート
	 *
	 * @param TemplateEvent $event
	 */
	public function onProductListRender(TemplateEvent $event)
	{
		$service = $this->app['plugin.exclude_tax.service.twig'];
		$service->initWithTemplateEvent($event);

		$search = 'Product.getPrice01IncTaxMin';
		$replace = 'Product.getPrice01Min';
		$service->replace($search, $replace);

		$search = 'Product.getPrice01IncTaxMax';
		$replace = 'Product.getPrice01Max';
		$service->replace($search, $replace);

		$search = 'Product.getPrice02IncTaxMin';
		$replace = 'Product.getPrice02Min';
		$service->replace($search, $replace);

		$search = 'Product.getPrice02IncTaxMax';
		$replace = 'Product.getPrice02Max';
		$service->replace($search, $replace);

		$search = '<span class="small">税込</span>';
		$replace = '<span class="small">税抜</span>';
		$service->replace($search, $replace);


		$event->setSource($service->getSource());

	}

	/**
	 * 商品詳細テンプレート
	 *
	 * @param TemplateEvent $event
	 */
	public function onProductDetailRender(TemplateEvent $event)
	{
		$service = $this->app['plugin.exclude_tax.service.twig'];
		$service->initWithTemplateEvent($event);

		$search = 'Product.getPrice01IncTaxMin';
		$replace = 'Product.getPrice01Min';
		$service->replace($search, $replace);

		$search = 'Product.getPrice01IncTaxMax';
		$replace = 'Product.getPrice01Max';
		$service->replace($search, $replace);

		$search = 'Product.getPrice02IncTaxMin';
		$replace = 'Product.getPrice02Min';
		$service->replace($search, $replace);

		$search = 'Product.getPrice02IncTaxMax';
		$replace = 'Product.getPrice02Max';
		$service->replace($search, $replace);

		$search = '<span class="small">税込</span>';
		$replace = '<span class="small">税抜</span>';
		$service->replace($search, $replace);

		$service->replace('Product.class_categories', 'app["plugin.exclude_tax.service.product"].getClassCategories(Product)');
		$event->setSource($service->getSource());


	}

	/**
	 * ブロックカートテンプレート
	 *
	 * @param TemplateEvent $event
	 */
	public function onBlockCartRender(TemplateEvent $event)
	{
		$service = $this->app['plugin.exclude_tax.service.twig'];
		$service->initWithTemplateEvent($event);

		$search = 'CartItem.price';
		$replace = 'CartItem.Object.price02';
		$service->replace($search, $replace);

		$search = '<span class="small">税込</span>';
		$replace = '<span class="small">税抜</span>';
		$service->replace($search, $replace);

		$event->setSource($service->getSource());
	}


	/**
	 * Get ClassCategories
	 *
	 * @return array
	 */
	private function getClassCategories(Product $Product)
	{
		$Product->_calc();

		$class_categories = array(
			'__unselected' => array(
				'__unselected' => array(
					'name'              => '選択してください',
					'product_class_id'  => '',
				),
			),
		);
		foreach ($Product->getProductClasses() as $ProductClass) {
			/* @var $ProductClass \Eccube\Entity\ProductClass */
			$ClassCategory1 = $ProductClass->getClassCategory1();
			$ClassCategory2 = $ProductClass->getClassCategory2();

			$class_category_id1 = $ClassCategory1 ? (string) $ClassCategory1->getId() : '__unselected2';
			$class_category_id2 = $ClassCategory2 ? (string) $ClassCategory2->getId() : '';
			$class_category_name1 = $ClassCategory1 ? $ClassCategory1->getName() . ($ProductClass->getStockFind() ? '' : ' (品切れ中)') : '';
			$class_category_name2 = $ClassCategory2 ? $ClassCategory2->getName() . ($ProductClass->getStockFind() ? '' : ' (品切れ中)') : '';

			$class_categories[$class_category_id1]['#'] = array(
				'classcategory_id2' => '',
				'name'              => '選択してください',
				'product_class_id'  => '',
			);
			$class_categories[$class_category_id1]['#'.$class_category_id2] = array(
				'classcategory_id2' => $class_category_id2,
				'name'              => $class_category_name2,
				'stock_find'        => $ProductClass->getStockFind(),
				'price01'           => number_format($ProductClass->getPrice01IncTax()),
				'price02'           => number_format($ProductClass->getPrice02IncTax()),
				'product_class_id'  => (string) $ProductClass->getId(),
				'product_code'      => $ProductClass->getCode(),
				'product_type'      => (string) $ProductClass->getProductType()->getId(),
			);
		}

		return $class_categories;
	}

	/**
	 * カートテンプレート
	 *
	 * @param TemplateEvent $event
	 */
	public function onCartIndexRender(TemplateEvent $event)
	{
		$service = $this->app['plugin.exclude_tax.service.twig'];
		$service->initWithTemplateEvent($event);

		$search = '/\{\{\s*CartItem.price.*\}\}/u';
		
		$file_content = $service->getTwigFile('ExcludeTax/Resource/template/default/Cart/index_add.twig');
		$replace = '$0'.$file_content;
		$service->preg_replace($search, $replace);

		/* TODO 別プラグインへ 円表記に変更 */
		$search = '/[￥\¥]\s*\{\{([^\}]+)\|number_format\s*\}\}/u';
		$replace = '{{ $1|price }}';
		$service->preg_replace($search, $replace);

		$event->setSource($service->getSource());

	}

	public function onRecommendProductBlock(TemplateEvent $event){
		$service = $this->app['plugin.exclude_tax.service.twig'];
		$service->initWithTemplateEvent($event);

		$search = 'Product.getPrice01IncTaxMin';
		$replace = 'Product.getPrice01Min';
		$service->replace($search, $replace);

		$search = 'Product.getPrice01IncTaxMax';
		$replace = 'Product.getPrice01Max';
		$service->replace($search, $replace);

		$search = 'Product.getPrice02IncTaxMin';
		$replace = 'Product.getPrice02Min';
		$service->replace($search, $replace);

		$search = 'Product.getPrice02IncTaxMax';
		$replace = 'Product.getPrice02Max';
		$service->replace($search, $replace);

		$search = '<span class="small">税込</span>';
		$replace = '<span class="small">税抜</span>';
		$service->replace($search, $replace);


		$event->setSource($service->getSource());
	}

	public function onCheckedItemBlock(TemplateEvent $event){
		$service = $this->app['plugin.exclude_tax.service.twig'];
		$service->initWithTemplateEvent($event);

		$search = 'getPrice01IncTaxMin';
		$replace = 'getPrice01Min';
		$service->replace($search, $replace);

		$search = 'getPrice01IncTaxMax';
		$replace = 'getPrice01Max';
		$service->replace($search, $replace);

		$search = 'getPrice02IncTaxMin';
		$replace = 'getPrice02Min';
		$service->replace($search, $replace);

		$search = 'getPrice02IncTaxMax';
		$replace = 'getPrice02Max';
		$service->replace($search, $replace);

		$search = '<span class="small">税込</span>';
		$replace = '<span class="small">税抜</span>';
		$service->replace($search, $replace);

		$event->setSource($service->getSource());
	}

}

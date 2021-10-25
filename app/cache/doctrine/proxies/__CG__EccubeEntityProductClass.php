<?php

namespace DoctrineProxy\__CG__\Eccube\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProductClass extends \Eccube\Entity\ProductClass implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'price01_inc_tax', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'price02_inc_tax', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'add', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'tax_rate', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'code', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'stock', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'stock_unlimited', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'sale_limit', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'price01', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'price02', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'delivery_fee', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'del_flg', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'Product', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'ProductType', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'ClassCategory1', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'ClassCategory2', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'DeliveryDate', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'Creator', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'ProductStock', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'TaxRule');
        }

        return array('__isInitialized__', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'price01_inc_tax', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'price02_inc_tax', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'add', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'tax_rate', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'code', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'stock', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'stock_unlimited', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'sale_limit', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'price01', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'price02', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'delivery_fee', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'del_flg', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'Product', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'ProductType', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'ClassCategory1', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'ClassCategory2', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'DeliveryDate', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'Creator', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'ProductStock', '' . "\0" . 'Eccube\\Entity\\ProductClass' . "\0" . 'TaxRule');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProductClass $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function isEnable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnable', array());

        return parent::isEnable();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice01IncTax($price01_inc_tax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice01IncTax', array($price01_inc_tax));

        return parent::setPrice01IncTax($price01_inc_tax);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice01IncTax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice01IncTax', array());

        return parent::getPrice01IncTax();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice02IncTax($price02_inc_tax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice02IncTax', array($price02_inc_tax));

        return parent::setPrice02IncTax($price02_inc_tax);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice02IncTax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice02IncTax', array());

        return parent::getPrice02IncTax();
    }

    /**
     * {@inheritDoc}
     */
    public function getStockFind()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockFind', array());

        return parent::getStockFind();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdd($add)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdd', array($add));

        return parent::setAdd($add);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdd', array());

        return parent::getAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxRate($tax_rate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxRate', array($tax_rate));

        return parent::setTaxRate($tax_rate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxRate', array());

        return parent::getTaxRate();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', array($code));

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', array());

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setStock($stock)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStock', array($stock));

        return parent::setStock($stock);
    }

    /**
     * {@inheritDoc}
     */
    public function getStock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStock', array());

        return parent::getStock();
    }

    /**
     * {@inheritDoc}
     */
    public function setStockUnlimited($stockUnlimited)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStockUnlimited', array($stockUnlimited));

        return parent::setStockUnlimited($stockUnlimited);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockUnlimited()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockUnlimited', array());

        return parent::getStockUnlimited();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaleLimit($saleLimit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaleLimit', array($saleLimit));

        return parent::setSaleLimit($saleLimit);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaleLimit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaleLimit', array());

        return parent::getSaleLimit();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice01($price01)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice01', array($price01));

        return parent::setPrice01($price01);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice01', array());

        return parent::getPrice01();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice02($price02)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice02', array($price02));

        return parent::setPrice02($price02);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice02', array());

        return parent::getPrice02();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryFee($deliveryFee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryFee', array($deliveryFee));

        return parent::setDeliveryFee($deliveryFee);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryFee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryFee', array());

        return parent::getDeliveryFee();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', array($createDate));

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', array());

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', array($updateDate));

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', array());

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDelFlg($delFlg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDelFlg', array($delFlg));

        return parent::setDelFlg($delFlg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDelFlg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDelFlg', array());

        return parent::getDelFlg();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct(\Eccube\Entity\Product $product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', array($product));

        return parent::setProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', array());

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductType(\Eccube\Entity\Master\ProductType $productType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductType', array($productType));

        return parent::setProductType($productType);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductType', array());

        return parent::getProductType();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassCategory1(\Eccube\Entity\ClassCategory $classCategory1 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassCategory1', array($classCategory1));

        return parent::setClassCategory1($classCategory1);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassCategory1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassCategory1', array());

        return parent::getClassCategory1();
    }

    /**
     * {@inheritDoc}
     */
    public function hasClassCategory1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasClassCategory1', array());

        return parent::hasClassCategory1();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassCategory2(\Eccube\Entity\ClassCategory $classCategory2 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassCategory2', array($classCategory2));

        return parent::setClassCategory2($classCategory2);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassCategory2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassCategory2', array());

        return parent::getClassCategory2();
    }

    /**
     * {@inheritDoc}
     */
    public function hasClassCategory2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasClassCategory2', array());

        return parent::hasClassCategory2();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryDate(\Eccube\Entity\DeliveryDate $deliveryDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryDate', array($deliveryDate));

        return parent::setDeliveryDate($deliveryDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryDate', array());

        return parent::getDeliveryDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Eccube\Entity\Member $creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', array($creator));

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', array());

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductStock(\Eccube\Entity\ProductStock $productStock = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductStock', array($productStock));

        return parent::setProductStock($productStock);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductStock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductStock', array());

        return parent::getProductStock();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxRule(\Eccube\Entity\TaxRule $taxRule = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxRule', array($taxRule));

        return parent::setTaxRule($taxRule);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxRule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxRule', array());

        return parent::getTaxRule();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', array($offset));

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', array($offset, $value));

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', array($offset));

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', array($offset));

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', array($arrProps, $excludeAttribute, $parentClass));

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array($excludeAttribute, $parentClass));

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', array($srcObject, $excludeAttribute));

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

}

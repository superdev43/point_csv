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

namespace Plugin\DeliveryPlus\Entity;

use Doctrine\ORM\Mapping as ORM;

class ProductClass extends \Eccube\Entity\AbstractEntity
{   
    private $product_class_id;
    
    private $weight;
    
    private $size;
    
    public function setProductClassId($productClassId)
    {
        $this->product_class_id = $productClassId;
        
        return $this;
    }
    
    public function getProductClassId()
    {   
        return $this->product_class_id;
    }
    
    public function setWeight($weight)
    {
        $this->weight = $weight;
        
        return $this;
    }
    
    public function getWeight()
    {   
        return $this->weight;
    }

    public function setSize($size)
    {
        $this->size = $size;
        
        return $this;
    }
    
    public function getSize()
    {   
        return $this->size;
    }
}

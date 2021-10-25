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

class Delivery extends \Eccube\Entity\AbstractEntity
{   
    private $delivery_id;
    private $weight_min;
    private $weight_max;
    private $size_min;
    private $size_max;
    private $subtotal_min;
    private $subtotal_max;
    
    public function setDeliveryId($deliveryId)
    {
        $this->delivery_id = $deliveryId;
        
        return $this;
    }
    
    public function getDeliveryId()
    {   
        return $this->delivery_id;
    }
    
    public function setWeightMin($weightMin)
    {
        $this->weight_min = $weightMin;
        
        return $this;
    }
    
    public function getWeightMin()
    {   
        return $this->weight_min;
    }
    
    public function setWeightMax($weightMax)
    {
        $this->weight_max = $weightMax;
        
        return $this;
    }
    
    public function getWeightMax()
    {   
        return $this->weight_max;
    }

    public function setSizeMin($sizeMin)
    {
        $this->size_min = $sizeMin;
        
        return $this;
    }
    
    public function getSizeMin()
    {   
        return $this->size_min;
    }
    
    public function setSizeMax($sizeMax)
    {
        $this->size_max = $sizeMax;
        
        return $this;
    }
    
    public function getSizeMax()
    {   
        return $this->size_max;
    }
    
    public function setSubtotalMin($subtotalMin)
    {
        $this->subtotal_min = $subtotalMin;
        
        return $this;
    }
    
    public function getSubtotalMin()
    {   
        return $this->subtotal_min;
    }
    
    public function setSubtotalMax($subtotalMax)
    {
        $this->subtotal_max = $subtotalMax;
        
        return $this;
    }
    
    public function getSubtotalMax()
    {   
        return $this->subtotal_max;
    }
}

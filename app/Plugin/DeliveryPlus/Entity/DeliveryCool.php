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

class DeliveryCool extends \Eccube\Entity\AbstractEntity
{
    private $id;
    private $delivery_id;
    private $type;

    public function getId()
    {
        return $this->id;
    }

    public function setDeliveryId($deliveryId)
    {
        $this->delivery_id = $deliveryId;

        return $this;
    }

    public function getDeliveryId()
    {
        return $this->delivery_id;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
}

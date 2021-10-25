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

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\Tools\SchemaTool;
use Eccube\Application;
use Plugin\DeliveryPlus\Entity;


/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version201612081500 extends AbstractMigration
{
    protected $tables = array();

    protected $entities = array();

    protected $sequences = array();

    public function __construct()
    {
        $this->tables = array(
            'plg_deliveryplus_dtb_delivery_cool',
        );

        $this->entities = array(
            'Plugin\DeliveryPlus\Entity\DeliveryCool',
        );

        $this->sequences = array(
            'plg_deliveryplus_dtb_delivery_cool_cool_type_id_seq',
        );
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $app = Application::getInstance();
        $em = $app['orm.em'];
        $classes = array();
        foreach ($this->entities as $entity) {
            $classes[] = $em->getMetadataFactory()->getMetadataFor($entity);
        }

        $tool = new SchemaTool($em);
        $tool->createSchema($classes);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        foreach ($this->tables as $table) {
            if ($schema->hasTable($table)) {
                $schema->dropTable($table);
            }
        }
        foreach ($this->sequences as $sequence) {
            if ($schema->hasSequence($sequence)) {
                $schema->dropSequence($sequence);
            }
        }
    }
}

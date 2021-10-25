<?php

namespace Plugin\GmoEpsilon\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * ModuleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GmoEpsilonPluginRepository extends EntityRepository
{
    public function getSubData($pluginCode)
    {
        $query = $this->createQueryBuilder('m')
            ->where('m.code = :plugin_code')
            ->setParameter('plugin_code', $pluginCode)
            ->getQuery();
        $Module = $query->getOneOrNullResult();
        if (!empty($Module)) {
            return $Module->getSubData();
        }
        return false;
    }
}

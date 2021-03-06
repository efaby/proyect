<?php

namespace Payment\DataAccessBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ServiceCostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServiceCostRepository extends EntityRepository
{
	public function findServiceCostByNameToList($serviceCostText, $offset, $limit, $count = true) {
	
		$queryBuilder = $this->getEntityManager()->createQueryBuilder('sc');
		if ($count) {
			$queryBuilder->add('select', $queryBuilder->expr()->count('sc.id'));
		} else {
			$queryBuilder->add('select', 'sc');
			$queryBuilder->orderBy('sc.name');
			$queryBuilder->setFirstResult($offset);
			$queryBuilder->setMaxResults($limit);
		}
		$queryBuilder->add('from', 'PaymentDataAccessBundle:ServiceCost sc');
		 
		if ($serviceCostText != null) {
			$serviceCostText = str_replace(' ', '%', $serviceCostText);
			$serviceCostText = '%' . strtolower($serviceCostText) . '%';
			$queryBuilder->andWhere(
					$queryBuilder->expr()->like($queryBuilder->expr()->lower('sc.name'), '?1')
			);
			$queryBuilder->setParameter(1, $serviceCostText);
	
		}
		$query = $queryBuilder->getQuery();
		$result = $query->getResult();
		return $result;
	}
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{
	public function findAllOrdered()
	{
		//$dql = 'SELECT cat FROM AppBundle\Entity\Category cat ORDER BY cat.name DESC';
		//$query = $this->getEntityManager()->createQuery($dql);

		$qb = $this->createQueryBuilder('cat')
									->addOrderBy('cat.name','DESC');
		$query = $qb->getQuery();
		echo $query->getDQL(); die;
		return $query->execute();
	}
}

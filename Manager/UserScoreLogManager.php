<?php
/*
 * This file is the user's score logs.
 *
 * (c)  coffey  <http://www.symfonychina.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Cars\CoreBundle\Manager;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

/**
 * @author  coffey  <coffey@nligo.com>
 * Class UserScoreLogManager
 * @package Cars\CoreBundle\Manager
 */
class UserScoreLogManager implements UserScoreLogManagerInterface
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var EntityRepository
     */
    protected $repo;

    /**
     * @var className
     */
    protected $class;

    public function __construct(EntityManager $em, $class) {
        $this->em = $em;
        $this->class = $class;
        $this->repo = $em->getRepository($class);
    }

    public function getRepo()
    {
        return $this->repo;
    }

    public function createScoreLog(array $data)
    {
        return $this->repo->createScoreLog($data);
    }

    public function getLogBy(array $criteria)
    {
        return $this->repo->getLogBy($criteria);
    }
}
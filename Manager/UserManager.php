<?php
/*
 * This file is the user's manager.
 *
 * (c)  coffey  <http://www.symfonychina.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Cars\CoreBundle\Manager;

use Cars\CoreBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

/**
 * @author  coffey  <coffey@nligo.com>
 * Class UserManager
 * @package Cars\CoreBundle\Manager
 */
class UserManager implements UserManagerInterface
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

    /**
     * @var container
     */
    protected $container;

    public function __construct(EntityManager $em, $class,$container) {
        $this->em = $em;
        $this->class = $class;
        $this->repo = $em->getRepository($class);
        $this->container = $container;
    }

    public function getRepo()
    {
        return $this->repo;
    }

    public function createUser(array $data)
    {
        if(isset($data['password']) && !empty($data['password']))
        {
            $user = new User();
            $encoder = $this->container->get('security.encoder_factory')
                ->getEncoder($user)
            ;
            $data['password'] = $encoder->encodePassword($data['password'], $user->getSalt());
        }
        return $this->repo->createUser($data);
    }

    public function deleteUser($userId = 0)
    {
        return $this->repo->deleteUser($userId);
    }

    public function findUserBy(array $criteria)
    {
        return $this->repo->findUserBy($criteria);
    }
}
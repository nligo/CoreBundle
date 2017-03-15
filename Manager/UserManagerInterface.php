<?php
/*
 * This file is part of the User oper.
 *
 * (c) coffey <http://www.nligo.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cars\CoreBundle\Manager;

/**
 * Interface UserManagerInterface
 *
 * @author  coffey  <coffey@nligo.com>
 * @package Cars\CoreBundle\Repository
 */
interface UserManagerInterface
{
    /**
     * create a user
     * @param array $data
     * @return mixed
     */
    public function createUser(array $data);

    /**
     * delete a user
     * @param int $userId
     * @return mixed
     */
    public function deleteUser($userId = 0);

    /**
     * Finds one user by the given criteria.
     * @param array $criteria
     * @return mixed
     */
    public function findUserBy(array $criteria);
}
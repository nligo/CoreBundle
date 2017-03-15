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
 * Interface UserScoreLogManagerInterface
 *
 * @author  coffey  <coffey@nligo.com>
 * @package Cars\CoreBundle\Repository
 */
interface UserScoreLogManagerInterface
{
    /**
     * create a score log
     * @param array $data
     * @return mixed
     */
    public function createScoreLog(array $data);

    /**
     * get score logs by criteria
     * @param array $criteria
     * @return mixed
     */
    public function getLogBy(array $criteria);
}
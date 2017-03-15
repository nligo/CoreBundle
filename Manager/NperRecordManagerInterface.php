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
 * Interface NperRecordManagerInterface
 *
 * @author  coffey  <coffey@nligo.com>
 * @package Cars\CoreBundle\Repository
 */
interface NperRecordManagerInterface
{
    /**
     * @param array $condition
     * @return mixed
     */
    public function getNperRecord($condition = array());
}
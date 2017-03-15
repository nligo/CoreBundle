<?php
/*
 * This file is collected bjPK10 got the data
 *
 * （c)  coffey Jon  <coffey@nligo.com>
 *
 */
namespace Cars\CoreBundle\Services;

/**
 * @author  coffey  <coffey@nligo.com>
 *
 * Class GetLottery
 * @package Cars\CoreBundle\Services
 */
class GetLottery extends ContainerAware
{
    /**
     * @var string
     */
    private $sendUrl = '';

    /**
     * @var array
     */
    private $curlSenDdata = array();

    /**
     * @author  coffey
     *
     * 采集数据
     * @return array
     */
    public function getNper()
    {
        $this->sendUrl  =   $this->container->getParameter('caipiao_url');
        $data['name']   =   $this->container->getParameter('caipiao_name');
        $data['format'] =   $this->container->getParameter('caipiao_format');
        $data['uid']    =   $this->container->getParameter('caipiao_uid');
        $data['token']  =   $this->container->getParameter('caipiao_token');
        $data['num']    =   $this->container->getParameter('caipiao_limit');
        $lotList    =   json_decode($this->container->get('cars_core.service_curl')->curl($this->sendUrl, 'get',$data),true);
        $result     =   array();
        if(!empty($lotList))
        {
            foreach ($lotList as $k=>$v)
            {
                if(!empty($k))
                {
                    $result = $this->container->get('cars_core.manager_nperrecord')->setLotInfo($k,$v['number'],$v['dateline']);
                }
            }
        }
        return $result;
    }
}
<?php
/*
 * This file is NperRecord entity operator.
 *
 * (c)  coffey  Jon <coffey@nligo.com>
 *
 */
namespace Cars\CoreBundle\Manager;

use Cars\CoreBundle\Entity\NperRecord;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

/**
 *
 * @author  coffey  <coffey@nligo.com>
 * Class NperRecordManager
 * @package Cars\CoreBundle\Manager
 */
class NperRecordManager implements NperRecordManagerInterface
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

    /**
     * @param array $condition
     * @return mixed
     */
    public function getNperRecord($condition = array())
    {
        return $this->repo->getNperRecord($condition);
    }

    /**
     * @author  coffey
     *
     *
     * @param string $nper
     * @param string $lotNum
     * @param string $openTime
     * @return bool|null|object
     */
    public function setLotInfo($nper = '',$lotNum = '',$openTime = '')
    {
        if(empty($nper || $lotNum || $openTime))
        {
            return false;
        }
        $nperInfo = $this->repo->findOneBy(array('nper'=>$nper));
        if(empty($nperInfo))
        {
            $nperInfo = new NperRecord();
        }
        $nperInfo->setNper($nper);
        $nperInfo->setOpenAt(strtotime($openTime));
        $lotteyNumArr = explode(',',$lotNum);
        $nperInfo->setLotteryNumberA($lotteyNumArr[0]);
        $nperInfo->setLotteryNumberB($lotteyNumArr[1]);
        $nperInfo->setLotteryNumberC($lotteyNumArr[2]);
        $nperInfo->setLotteryNumberD($lotteyNumArr[3]);
        $nperInfo->setLotteryNumberE($lotteyNumArr[4]);
        $nperInfo->setLotteryNumberF($lotteyNumArr[5]);
        $nperInfo->setLotteryNumberG($lotteyNumArr[6]);
        $nperInfo->setLotteryNumberH($lotteyNumArr[7]);
        $nperInfo->setLotteryNumberI($lotteyNumArr[8]);
        $nperInfo->setLotteryNumberj($lotteyNumArr[9]);
        $nperInfo->setLotNumber($lotNum);
        $this->em->persist($nperInfo);
        $this->em->flush($nperInfo);
        $newNperInfo = $this->repo->findOneBy(array('nper'=>$nper+1));
        if(empty($newNperInfo))
        {
            $newNperInfo = new NperRecord();
        }
        $newNperInfo->setNper($nper+1);
        $this->em->persist($newNperInfo);
        $this->em->flush($newNperInfo);
        $this->_matchNum($nperInfo);
        return $nperInfo;
    }

    /**
     * @auhtor  coffey
     *
     * 匹配号码生成龙虎大小单双数据
     * @param array $gamenperInfo
     */
    private function _matchNum($gamenperInfo = array())
    {
        if(!empty($gamenperInfo))
        {
            $countGy = $gamenperInfo->getLotteryNumberA()+$gamenperInfo->getLotteryNumberB();
            $gamenperInfo->setCountGy($countGy);
            $tB = $this->is_odd($countGy)==true ? '单' : '双';
            $gamenperInfo->setTB($tB);
            $tA = $countGy<= 11 ? '小' : '大';
            $gamenperInfo->setTA($tA);
            $lha = $gamenperInfo->getLotteryNumberA()>$gamenperInfo->getLotteryNumberj() ? '龙' : '虎';
            $lhb = $gamenperInfo->getLotteryNumberB()>$gamenperInfo->getLotteryNumberI() ? '龙' : '虎';
            $lhc = $gamenperInfo->getLotteryNumberC()>$gamenperInfo->getLotteryNumberH() ? '龙' : '虎';
            $lhd = $gamenperInfo->getLotteryNumberD()>$gamenperInfo->getLotteryNumberG() ? '龙' : '虎';
            $lhe = $gamenperInfo->getLotteryNumberE()>$gamenperInfo->getLotteryNumberF() ? '龙' : '虎';
            $fileds = $tA.','.$tB.','.$lha.','.$lhb.','.$lhc.','.$lhd.','.$lhe;
            $gamenperInfo->setLha($lha);
            $gamenperInfo->setLhb($lhb);
            $gamenperInfo->setLhc($lhc);
            $gamenperInfo->setLhd($lhd);
            $gamenperInfo->setLhe($lhe);
            $gamenperInfo->setFileds($fileds);
            $this->em->persist($gamenperInfo);
            $this->em->flush($gamenperInfo);
        }
        return $gamenperInfo;
    }

    //判断奇数，是返回TRUE，否返回FALSE
    private function is_odd($num){
        return (is_numeric($num)&($num&1));
    }
}
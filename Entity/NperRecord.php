<?php

namespace Cars\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author  coffey  <coffey@nligo.com>
 * 游戏期号记录表
 * NperRecord
 *
 * @ORM\Table(name="cars_nper_record")
 * @ORM\Entity(repositoryClass="Cars\CoreBundle\Repository\NperRecordRepository")
 */
class NperRecord
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false,options={"comment":"游戏记录id"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nper", type="string", length=120, nullable=false,options={"comment":"期数"})
     */
    private $nper = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_a", type="string", length=20, nullable=false,options={"comment":"开奖号码a"})
     */
    private $lotteryNumberA = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_b", type="string", length=20, nullable=false,options={"comment":"开奖号码b"})
     */
    private $lotteryNumberB = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_c", type="string", length=20, nullable=false,options={"comment":"开奖号码c"})
     */
    private $lotteryNumberC = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_d", type="string", length=20, nullable=false,options={"comment":"开奖号码d"})
     */
    private $lotteryNumberD = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_e", type="string", length=20, nullable=false,options={"comment":"开奖号码e"})
     */
    private $lotteryNumberE = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_f", type="string", length=20, nullable=false,options={"comment":"开奖号码f"})
     */
    private $lotteryNumberF = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_g", type="string", length=20, nullable=false,options={"comment":"开奖号码g"})
     */
    private $lotteryNumberG = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_h", type="string", length=20, nullable=false,options={"comment":"开奖号码h"})
     */
    private $lotteryNumberH = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_i", type="string", length=20, nullable=false,options={"comment":"开奖号码i"})
     */
    private $lotteryNumberI = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lottery_number_j", type="string", length=20, nullable=false,options={"comment":"开奖号码j"})
     */
    private $lotteryNumberj = '';


    /**
     * @var string
     *
     * @ORM\Column(name="count_gy", type="string", length=20, nullable=false,options={"comment":"冠亚军和"})
     */
    private $countGy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="t_a", type="string", length=20, nullable=false,options={"comment":"显示大或者小"})
     */
    private $tA = '';

    /**
     * @var string
     *
     * @ORM\Column(name="t_b", type="string", length=20, nullable=false,options={"comment":"显示双或者单"})
     */
    private $tB = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lh_a", type="string", length=20, nullable=false,options={"comment":"龙虎第一位"})
     */
    private $lha = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lh_b", type="string", length=20, nullable=false,options={"comment":"龙虎第二位"})
     */
    private $lhb = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lh_c", type="string", length=20, nullable=false,options={"comment":"龙虎第三位"})
     */
    private $lhc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lh_d", type="string", length=20, nullable=false,options={"comment":"龙虎第四位"})
     */
    private $lhd = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lh_e", type="string", length=20, nullable=false,options={"comment":"龙虎第五位"})
     */
    private $lhe = '';
    
    /**
     * @var string
     *
     * @ORM\Column(name="fileds", type="string", length=255, nullable=false,options={"comment":"冠亚和长龙 每个字用规则区分，比如（龙-虎 大-小 单-双）"})
     */
    private $fileds = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lot_number", type="string", length=120, nullable=false,options={"comment":"开奖号码"})
     */
    private $lotNumber = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="open_at", type="integer", nullable=false,options={"comment":"开奖时间"})
     */
    private $openAt = '0';


    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false,options={"comment":"状态 0为默认 1开奖中奖已领奖 2开奖中奖未领奖 3未中奖"})
     */
    private $status = '0';



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nper
     *
     * @param string $nper
     *
     * @return NperRecord
     */
    public function setNper($nper)
    {
        $this->nper = $nper;

        return $this;
    }

    /**
     * Get nper
     *
     * @return string
     */
    public function getNper()
    {
        return $this->nper;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return NperRecord
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set fileds
     *
     * @param string $fileds
     *
     * @return NperRecord
     */
    public function setFileds($fileds)
    {
        $this->fileds = $fileds;

        return $this;
    }

    /**
     * Get fileds
     *
     * @return string
     */
    public function getFileds()
    {
        return $this->fileds;
    }

    /**
     * Set openAt
     *
     * @param integer $openAt
     *
     * @return NperRecord
     */
    public function setOpenAt($openAt)
    {
        $this->openAt = $openAt;

        return $this;
    }

    /**
     * Get openAt
     *
     * @return integer
     */
    public function getOpenAt()
    {
        return $this->openAt;
    }

    /**
     * Set lotteryNumberA
     *
     * @param string $lotteryNumberA
     *
     * @return NperRecord
     */
    public function setLotteryNumberA($lotteryNumberA)
    {
        $this->lotteryNumberA = $lotteryNumberA;

        return $this;
    }

    /**
     * Get lotteryNumberA
     *
     * @return string
     */
    public function getLotteryNumberA()
    {
        return $this->lotteryNumberA;
    }

    /**
     * Set lotteryNumberB
     *
     * @param string $lotteryNumberB
     *
     * @return NperRecord
     */
    public function setLotteryNumberB($lotteryNumberB)
    {
        $this->lotteryNumberB = $lotteryNumberB;

        return $this;
    }

    /**
     * Get lotteryNumberB
     *
     * @return string
     */
    public function getLotteryNumberB()
    {
        return $this->lotteryNumberB;
    }

    /**
     * Set lotteryNumberC
     *
     * @param string $lotteryNumberC
     *
     * @return NperRecord
     */
    public function setLotteryNumberC($lotteryNumberC)
    {
        $this->lotteryNumberC = $lotteryNumberC;

        return $this;
    }

    /**
     * Get lotteryNumberC
     *
     * @return string
     */
    public function getLotteryNumberC()
    {
        return $this->lotteryNumberC;
    }

    /**
     * Set lotteryNumberD
     *
     * @param string $lotteryNumberD
     *
     * @return NperRecord
     */
    public function setLotteryNumberD($lotteryNumberD)
    {
        $this->lotteryNumberD = $lotteryNumberD;

        return $this;
    }

    /**
     * Get lotteryNumberD
     *
     * @return string
     */
    public function getLotteryNumberD()
    {
        return $this->lotteryNumberD;
    }

    /**
     * Set lotteryNumberE
     *
     * @param string $lotteryNumberE
     *
     * @return NperRecord
     */
    public function setLotteryNumberE($lotteryNumberE)
    {
        $this->lotteryNumberE = $lotteryNumberE;

        return $this;
    }

    /**
     * Get lotteryNumberE
     *
     * @return string
     */
    public function getLotteryNumberE()
    {
        return $this->lotteryNumberE;
    }

    /**
     * Set lotteryNumberF
     *
     * @param string $lotteryNumberF
     *
     * @return NperRecord
     */
    public function setLotteryNumberF($lotteryNumberF)
    {
        $this->lotteryNumberF = $lotteryNumberF;

        return $this;
    }

    /**
     * Get lotteryNumberF
     *
     * @return string
     */
    public function getLotteryNumberF()
    {
        return $this->lotteryNumberF;
    }

    /**
     * Set lotteryNumberG
     *
     * @param string $lotteryNumberG
     *
     * @return NperRecord
     */
    public function setLotteryNumberG($lotteryNumberG)
    {
        $this->lotteryNumberG = $lotteryNumberG;

        return $this;
    }

    /**
     * Get lotteryNumberG
     *
     * @return string
     */
    public function getLotteryNumberG()
    {
        return $this->lotteryNumberG;
    }

    /**
     * Set lotteryNumberH
     *
     * @param string $lotteryNumberH
     *
     * @return NperRecord
     */
    public function setLotteryNumberH($lotteryNumberH)
    {
        $this->lotteryNumberH = $lotteryNumberH;

        return $this;
    }

    /**
     * Get lotteryNumberH
     *
     * @return string
     */
    public function getLotteryNumberH()
    {
        return $this->lotteryNumberH;
    }

    /**
     * Set lotteryNumberI
     *
     * @param string $lotteryNumberI
     *
     * @return NperRecord
     */
    public function setLotteryNumberI($lotteryNumberI)
    {
        $this->lotteryNumberI = $lotteryNumberI;

        return $this;
    }

    /**
     * Get lotteryNumberI
     *
     * @return string
     */
    public function getLotteryNumberI()
    {
        return $this->lotteryNumberI;
    }

    /**
     * Set lotteryNumberj
     *
     * @param string $lotteryNumberj
     *
     * @return NperRecord
     */
    public function setLotteryNumberj($lotteryNumberj)
    {
        $this->lotteryNumberj = $lotteryNumberj;

        return $this;
    }

    /**
     * Get lotteryNumberj
     *
     * @return string
     */
    public function getLotteryNumberj()
    {
        return $this->lotteryNumberj;
    }

    /**
     * Set countGy
     *
     * @param string $countGy
     *
     * @return NperRecord
     */
    public function setCountGy($countGy)
    {
        $this->countGy = $countGy;

        return $this;
    }

    /**
     * Get countGy
     *
     * @return string
     */
    public function getCountGy()
    {
        return $this->countGy;
    }

    /**
     * Set tA
     *
     * @param string $tA
     *
     * @return NperRecord
     */
    public function setTA($tA)
    {
        $this->tA = $tA;

        return $this;
    }

    /**
     * Get tA
     *
     * @return string
     */
    public function getTA()
    {
        return $this->tA;
    }

    /**
     * Set tB
     *
     * @param string $tB
     *
     * @return NperRecord
     */
    public function setTB($tB)
    {
        $this->tB = $tB;

        return $this;
    }

    /**
     * Get tB
     *
     * @return string
     */
    public function getTB()
    {
        return $this->tB;
    }

    /**
     * Set lha
     *
     * @param string $lha
     *
     * @return NperRecord
     */
    public function setLha($lha)
    {
        $this->lha = $lha;

        return $this;
    }

    /**
     * Get lha
     *
     * @return string
     */
    public function getLha()
    {
        return $this->lha;
    }

    /**
     * Set lhb
     *
     * @param string $lhb
     *
     * @return NperRecord
     */
    public function setLhb($lhb)
    {
        $this->lhb = $lhb;

        return $this;
    }

    /**
     * Get lhb
     *
     * @return string
     */
    public function getLhb()
    {
        return $this->lhb;
    }

    /**
     * Set lhc
     *
     * @param string $lhc
     *
     * @return NperRecord
     */
    public function setLhc($lhc)
    {
        $this->lhc = $lhc;

        return $this;
    }

    /**
     * Get lhc
     *
     * @return string
     */
    public function getLhc()
    {
        return $this->lhc;
    }

    /**
     * Set lhd
     *
     * @param string $lhd
     *
     * @return NperRecord
     */
    public function setLhd($lhd)
    {
        $this->lhd = $lhd;

        return $this;
    }

    /**
     * Get lhd
     *
     * @return string
     */
    public function getLhd()
    {
        return $this->lhd;
    }

    /**
     * Set lhe
     *
     * @param string $lhe
     *
     * @return NperRecord
     */
    public function setLhe($lhe)
    {
        $this->lhe = $lhe;

        return $this;
    }

    /**
     * Get lhe
     *
     * @return string
     */
    public function getLhe()
    {
        return $this->lhe;
    }

    /**
     * Set lotNumber
     *
     * @param string $lotNumber
     *
     * @return NperRecord
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;

        return $this;
    }

    /**
     * Get lotNumber
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }
}

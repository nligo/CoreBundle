<?php

namespace Cars\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author  coffey  <coffey@nligo.com>
 * UserScoreLog
 *
 * 用户分数记录（消费）
 *
 * @ORM\Table(name="user_score_log")
 * @ORM\Entity(repositoryClass="Cars\CoreBundle\Repository\UserScoreLogRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class UserScoreLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false,options={"comment":"分数记录ID"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="oper_score", type="decimal", precision=10, scale=2, nullable=false,options={"comment":"操作分数值"})
     */
    private $operScore = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="now_score", type="decimal", precision=10, scale=2, nullable=false,options={"comment":"操作完成以后的分数"})
     */
    private $nowScore = '0.00';

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="oper_at", type="integer", nullable=false,options={"comment":"提交时间"})
     */
    private $operAt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="arrive_at", type="integer", nullable=false,options={"comment":"到账时间时间"})
     */
    private $arriveAt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="oper_msg", type="string", length=255, nullable=false,options={"comment":"操作备注"})
     */
    private $operMsg = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="cons_status", type="integer", nullable=false,options={"comment":"分额状态 2为未到账 1为到账","default":1})
     */
    private $consStatus = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="score_type", type="integer", nullable=false,options={"comment":"分数类型 2为充值 1为消费","default":1})
     */
    private $scoreType = '1';

    /**
     * @ORM\PrePersist
     */
    public function PrePersist(){
        $this->setOperAt(time());
    }

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
     * Set operScore
     *
     * @param string $operScore
     *
     * @return UserScoreLog
     */
    public function setOperScore($operScore)
    {
        $this->operScore = $operScore;

        return $this;
    }

    /**
     * Get operScore
     *
     * @return string
     */
    public function getOperScore()
    {
        return $this->operScore;
    }

    /**
     * Set nowScore
     *
     * @param string $nowScore
     *
     * @return UserScoreLog
     */
    public function setNowScore($nowScore)
    {
        $this->nowScore = $nowScore;

        return $this;
    }

    /**
     * Get nowScore
     *
     * @return string
     */
    public function getNowScore()
    {
        return $this->nowScore;
    }

    /**
     * Set operAt
     *
     * @param integer $operAt
     *
     * @return UserScoreLog
     */
    public function setOperAt($operAt)
    {
        $this->operAt = $operAt;

        return $this;
    }

    /**
     * Get operAt
     *
     * @return integer
     */
    public function getOperAt()
    {
        return $this->operAt;
    }

    /**
     * Set arriveAt
     *
     * @param integer $arriveAt
     *
     * @return UserScoreLog
     */
    public function setArriveAt($arriveAt)
    {
        $this->arriveAt = $arriveAt;

        return $this;
    }

    /**
     * Get arriveAt
     *
     * @return integer
     */
    public function getArriveAt()
    {
        return $this->arriveAt;
    }

    /**
     * Set operMsg
     *
     * @param string $operMsg
     *
     * @return UserScoreLog
     */
    public function setOperMsg($operMsg)
    {
        $this->operMsg = $operMsg;

        return $this;
    }

    /**
     * Get operMsg
     *
     * @return string
     */
    public function getOperMsg()
    {
        return $this->operMsg;
    }

    /**
     * Set consStatus
     *
     * @param integer $consStatus
     *
     * @return UserScoreLog
     */
    public function setConsStatus($consStatus)
    {
        $this->consStatus = $consStatus;

        return $this;
    }

    /**
     * Get consStatus
     *
     * @return integer
     */
    public function getConsStatus()
    {
        return $this->consStatus;
    }

    /**
     * Set scoreType
     *
     * @param integer $scoreType
     *
     * @return UserScoreLog
     */
    public function setScoreType($scoreType)
    {
        $this->scoreType = $scoreType;

        return $this;
    }

    /**
     * Get scoreType
     *
     * @return integer
     */
    public function getScoreType()
    {
        return $this->scoreType;
    }

    /**
     * Set userId
     *
     * @param \Cars\CoreBundle\Entity\User $userId
     *
     * @return UserScoreLog
     */
    public function setUserId(\Cars\CoreBundle\Entity\User $userId = null)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \Cars\CoreBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

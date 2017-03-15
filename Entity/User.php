<?php
/*
 * This file is the user data model.
 * (c)  coffey  Jon <coffey@nligo.com>
 *
 */
namespace Cars\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @author  coffey  <coffey@nligo.com>
 * User
 *
 * 用户主表
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Cars\CoreBundle\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer",options={"comment":"用户ID"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_total_score", type="decimal", precision=10, scale=2, nullable=true,options={"comment":"用户可用分数","default":"0.00"})
     */
    private $userTotalScore = "0.00";

    /**
     * @var string
     *
     * @ORM\Column(name="safe_total_score", type="decimal", precision=10, scale=2, nullable=true,options={"comment":"用户保险柜分数","default":"0.00"})
     */
    private $safeTotalScore = "0.00";

    /**
     * @ORM\Column(type="string", unique=true,name="username",options={"comment":"用户名"})
     */
    private $username = "";

    /**
     * @ORM\Column(type="string",name="nickname",options={"comment":"用户昵称"})
     */
    private $nickname = "";


    /**
     * @ORM\Column(type="string",name="password",options={"comment":"用户密码"})
     */
    private $password;

    /**
     * @ORM\Column(type="json_array",name="roles",options={"comment":"用户角色"})
     */
    private $roles = array();

    /**
     * @var integer
     * @ORM\Column(type="integer",name="enabled",options={"comment":"用户状态"})
     */
    private $enabled = "0";

    /**
     * @var integer
     * @ORM\Column(type="integer",name="is_activate",options={"comment":"用户激活状态 0为未激活 1为激活"})
     */
    private $isActivate = "0";

    /**
     * @var integer
     * @ORM\Column(type="integer",name="create_time",options={"comment":"创建时间"})
     */
    public $createTime = "";

    /**
     * @var integer
     * @ORM\Column(type="integer",name="user_type",length=100,options={"comment":"用户类型,1为普通，2为管理员","default":1})
     */
    public $userType = "1";

    /**
     * @var integer
     * @ORM\Column(type="integer",name="is_change",length=100,options={"comment":"授权登陆以后是否补全资料，0为否，1为是","default":0})
     */
    public $isChange = "0";
    /**
     * @var string
     * @ORM\Column(type="string",name="wx_openid",options={"comment":"微信OpenId"})
     */
    public $wxOpenId = "";

    /**
     * @var integer
     * @ORM\Column(type="integer",name="is_delete",options={"comment":"用户删除标示 0为正常 1为删除"})
     */
    private $isDelete = "0";

    /**
     * @ORM\PrePersist
     */
    public function PrePersist()
    {
        $this->setCreateTime(time());
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Returns the roles or permissions granted to the user for security.
     */
    public function getRoles()
    {
        $roles = $this->roles;
        // guarantees that a user always has at least one role for security
        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }
        return array_unique($roles);
    }

    /**
     * @param String
     */
    public function setRole($role)
    {
        $this->roles[] = $role;
    }

    /**
     * @param array
     */
    public function setRoles(array $roles)
    {
        $this->roles = (array)$roles;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     */
    public function getSalt()
    {
        // See "Do you need to use a Salt?" at http://symfony.com/doc/current/cookbook/security/entity_provider.html
        // we're using bcrypt in security.yml to encode the password, so
        // the salt value is built-in and you don't have to generate one
        return;
    }

    /**
     * Removes sensitive data from the user.
     */
    public function eraseCredentials()
    {
        // if you had a plainPassword property, you'd nullify it here
        // $this->plainPassword = null;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     *
     * @return User
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set userTotalScore
     *
     * @param string $userTotalScore
     *
     * @return User
     */
    public function setUserTotalScore($userTotalScore)
    {
        $this->userTotalScore = $userTotalScore;

        return $this;
    }

    /**
     * Get userTotalScore
     *
     * @return string
     */
    public function getUserTotalScore()
    {
        return $this->userTotalScore;
    }

    /**
     * Set safeTotalScore
     *
     * @param string $safeTotalScore
     *
     * @return User
     */
    public function setSafeTotalScore($safeTotalScore)
    {
        $this->safeTotalScore = $safeTotalScore;

        return $this;
    }

    /**
     * Get safeTotalScore
     *
     * @return string
     */
    public function getSafeTotalScore()
    {
        return $this->safeTotalScore;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return User
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set isActivate
     *
     * @param integer $isActivate
     *
     * @return User
     */
    public function setIsActivate($isActivate)
    {
        $this->isActivate = $isActivate;

        return $this;
    }

    /**
     * Get isActivate
     *
     * @return integer
     */
    public function getIsActivate()
    {
        return $this->isActivate;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     *
     * @return User
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     *
     * @return User
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set isChange
     *
     * @param integer $isChange
     *
     * @return User
     */
    public function setIsChange($isChange)
    {
        $this->isChange = $isChange;

        return $this;
    }

    /**
     * Get isChange
     *
     * @return integer
     */
    public function getIsChange()
    {
        return $this->isChange;
    }

    /**
     * Set wxOpenId
     *
     * @param string $wxOpenId
     *
     * @return User
     */
    public function setWxOpenId($wxOpenId)
    {
        $this->wxOpenId = $wxOpenId;

        return $this;
    }

    /**
     * Get wxOpenId
     *
     * @return string
     */
    public function getWxOpenId()
    {
        return $this->wxOpenId;
    }

    /**
     * Set isDelete
     *
     * @param integer $isDelete
     *
     * @return User
     */
    public function setIsDelete($isDelete)
    {
        $this->isDelete = $isDelete;

        return $this;
    }

    /**
     * Get isDelete
     *
     * @return integer
     */
    public function getIsDelete()
    {
        return $this->isDelete;
    }
}

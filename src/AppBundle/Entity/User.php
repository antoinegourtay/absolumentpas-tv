<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements UserInterface
{
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="email_user", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $emailUser;

    /**
     * @ORM\Column(name="username_user",type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    protected $usernameUser;

    /**
     * @ORM\Column(name="plain_password_user",type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    protected $plainPasswordUser;

    /**
     * The below length depends on the "algorithm" you use for encoding
     * the password, but this works well with bcrypt.
     *
     * @ORM\Column(type="string", length=64)
     */
    protected $passwordUser;

    /**
     * @return mixed
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * @param mixed $emailUser
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsernameUser()
    {
        return $this->usernameUser;
    }

    /**
     * @param mixed $usernameUser
     */
    public function setUsernameUser($usernameUser)
    {
        $this->usernameUser = $usernameUser;
    }

    /**
     * @return mixed
     */
    public function getPlainPasswordUser()
    {
        return $this->plainPasswordUser;
    }

    /**
     * @param mixed $plainPasswordUser
     */
    public function setPlainPasswordUser($plainPasswordUser)
    {
        $this->plainPasswordUser = $plainPasswordUser;
    }

    /**
     * @return mixed
     */
    public function getPasswordUser()
    {
        return $this->passwordUser;
    }

    /**
     * @param mixed $passwordUser
     */
    public function setPasswordUser($passwordUser)
    {
        $this->passwordUser = $passwordUser;
    }





}
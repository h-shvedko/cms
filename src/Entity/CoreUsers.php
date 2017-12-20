<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoreUsersRepository")
 */
class CoreUsers
{
    public function __construct()
    {
        $this->authors = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="login", type="string", length=255, nullable=false)
     **/
    protected $login;

    /**
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     **/
    protected $password;

    /**
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     **/
    protected $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Modules\Blog\Entity\BlogAuthors", mappedBy="authors")
     */
    protected $authors;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\CoreProfile", mappedBy="profile")
     */
    protected $profile;

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
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * @param mixed $authors
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
    }

    // add your own fields
}

<?php

namespace AppBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Created by PhpStorm.
 * User: Yassin
 * Date: 30/05/2016
 * Time: 15:28
 */


/**
 * Class Student
 *
 * @author "Name" <email>
 * @ORM\Entity()
 * @ORM\Table(name="tts_user")
 * @UniqueEntity(fields={"username"}, errorPath="username")
 */
class User implements UserInterface

{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    //Chemin ou se trouve l'image de l'user
    //Possibilité de stocké que 256cara
    /**
     * @var null|string
     * @ORM\Column(nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $path;

    /**
     * @var null|UploadedFile
     * @Assert\Image()
     */
    private $file;

    /**
     * @var string
     * @ORM\Column(unique=true)
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Email()
     * @Assert\Length(max=255)
     */
    private $username;

    /**
     * @var string
     * @ORM\Column()
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $password;

    /**
     * @var string
     * @ORM\Column()
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $salt;

    /**
     * @var string
     * @ORM\Column()
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $lastname;

    /**
     * @var string
     * @ORM\Column()
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $firstname;

    //Stock en clair, le MDP temporairement

    /**
     * @var string
     * @Assert\Length(max=4096)
     */
    private $rawPassword;

    public function __construct()
    {
        //$this->salt = md5(time());
        $this->setSalt(md5(time()));
    }

    /*********************************/
    /* Getter and Setters            */
    /*********************************/

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param null|string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return null|UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param null|UploadedFile $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getRawPassword()
    {
        return $this->rawPassword;
    }

    /**
     * @param string $rawPassword
     */
    public function setRawPassword($rawPassword)
    {
        $this->rawPassword = $rawPassword;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        $this->rawPassword = null;
    }

}
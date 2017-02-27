<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use UserBundle\Entity\Post;


/**
 * Created by PhpStorm.
 * User: Yassin
 * Date: 30/05/2016
 * Time: 15:28
 */


/**
 * Class Student
 *
 * @author "hai yassin" <haiyassin1701@gmail.com>
 * @ORM\Entity()
 * @ORM\Table(name="user")
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

    /**
     * @var string
     * @ORM\Column(length=20)
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(max=20)
     */
    private $role;

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

    /**
     * @var null|string
     * @ORM\Column(nullable=true)
     */
    private $adress;

    /**
     * @var null|string
     * @ORM\Column(nullable=true)
     */
    private $zipCode;

    /**
     * @var @var null|string
     * @ORM\Column(nullable=true)
     */
    private $city;

    /**
     * @var null|string
     * @ORM\Column(nullable=true)
     * @Assert\Country()
     */
    private $country = 'FR';

    /**
     * @var null|string
     * @ORM\Column(nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=30)
     */
    private $compagny;

    //Chemin ou se trouve l'image de l'user
    //Possibilité de stocké que 256cara
    /**
     * @var null|string
     * @ORM\Column(nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $logo50x50;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime()
     */
    private $created;

    /**
     * @var string
     * @ORM\Column(nullable=true)
     * @Assert\Length(max=255)
     */
    private $lien_twitter;

    /**
     * @var Post[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\Post", mappedBy="user", cascade={"remove"})
     */
    private $posts;

    public function __construct()
    {
        //$this->salt = md5(time());
        $this->posts = new ArrayCollection();
        $this->setSalt(md5(time()));
        $this->setCreated(new \DateTime());
    }
    
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
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return null|string
     */
    public function getCompagny()
    {
        return $this->compagny;
    }

    /**
     * @param null|string $compagny
     */
    public function setCompagny($compagny)
    {
        $this->compagny = $compagny;
    }

    /**
     * @return null|string
     */
    public function getLogo50x50()
    {
        return $this->logo50x50;
    }

    /**
     * @param null|string $logo50x50
     */
    public function setLogo50x50($logo50x50)
    {
        $this->logo50x50 = $logo50x50;
    }


    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getLienTwitter()
    {
        return $this->lien_twitter;
    }

    /**
     * @param string $lien_twitter
     */
    public function setLienTwitter($lien_twitter)
    {
        $this->lien_twitter = $lien_twitter;
    }

    /**
     * @return ArrayCollection|\UserBundle\Entity\Post[]
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param ArrayCollection|\UserBundle\Entity\Post[] $posts
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;
    }



    /**
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return [
            $this->getRole()
        ];
    }

    public function eraseCredentials()
    {
        $this->rawPassword = null;
    }

    /**
     * @param Post $message
     * 
     * @return $this
     */
    public function addposts(Post $message)
    {
        if (!$this->posts->contains($message)){
            $this->posts->add($message);
            $message->setUser($this);

        }

        return $this;
    }

    /**
     * @param Post $message
     *
     * @return $this
     */
    public function removeposts(Post $message)
    {
        if (!$this->posts->contains($message)){
            $this->posts->removeElement($message);
            $message->setUser(null);

        }

        return $this;
    }



}
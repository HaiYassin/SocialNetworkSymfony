<?php
/**
 * Created by PhpStorm.
 * User: Yassin
 * Date: 07/07/2016
 * Time: 12:27
 */

namespace UserBundle\Entity;

use AppBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Class Post
 * @package UserBundle\Entity
 *
 * @author "hai yassin" <haiyassin1701@gmail.com>
 * @ORM\Entity()
 * @ORM\Table(name="article")
 */
class Post
{
    /**
    * @var int
    * @ORM\Id()
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @var null|string
    * @ORM\Column(nullable=true)
    * @Assert\Type("string")
    * @Assert\Length(max=255)
    */
    private $message;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="posts")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     * @Assert\NotNull()
     */
    private $user;

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
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param null|string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return  User
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

}
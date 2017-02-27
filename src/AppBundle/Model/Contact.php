<?php
/**
 * Created by PhpStorm.
 * User: Yassin
 * Date: 12/07/2016
 * Time: 11:53
 */


namespace AppBundle\Model;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Contact
 *
 * @author "Hai Yassin" <haiyassin1701@gmail.com>
 */
class Contact
{
    /**
     * @var string
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(min=2, max=255)
     */
    private $name;

    /**
     * @var string
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(min=10, max=255)
     */
    private $subject;

    /**
     * @var string
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(min=10)
     */
    private $message;

    /**
     * @var null|UploadedFile
     * @Assert\File()
     */
    private $file;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return null|UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadedFile $file
     *
     * @return $this
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        return $this;
    }
}
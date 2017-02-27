<?php
/**
 * Created by PhpStorm.
 * User: Yassin
 * Date: 12/07/2016
 * Time: 11:50
 */

namespace AppBundle\Mailer;

use AppBundle\Entity\Student;
use AppBundle\Model\Contact;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Templating\EngineInterface;

/**
 * Class Mailer
 *
 * @author "Hai Yassin" <haiyassin1701@gmail.com>
 */
class Mailer
{
    /**
     * @var string
     */
    private $kernelRootDir;

    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * @var string
     */
    private $mailerFromEmail;

    /**
     * @var string
     */
    private $mailerToEmail;

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    public function __construct(
        $kernelRootDir,
        EngineInterface $templating,
        $mailerFromEmail,
        $mailerToEmail,
        \Swift_Mailer $mailer
    ) {
        $this->kernelRootDir = $kernelRootDir;
        $this->templating = $templating;
        $this->mailerFromEmail = $mailerFromEmail;
        $this->mailerToEmail = $mailerToEmail;
        $this->mailer = $mailer;
    }

    /**
     * @param Contact $contact
     *
     * @return int
     */
    public function sendContact(Contact $contact)
    {
        $message = \Swift_Message::newInstance();

        $appPath = $this->kernelRootDir;
        $filePath = $appPath . '/../web/apple-touch-icon.png';
        $image = \Swift_Image::fromPath($filePath);
        $imageCid = $message->embed($image);

        $bodyTxt = $this->templating->render('AppBundle:Email:contact.txt.twig', [
            'contact' => $contact,
        ]);

        $bodyHtml = $this->templating->render('AppBundle:Email:contact.html.twig', [
            'contact' => $contact,
            'cid' => $imageCid,
        ]);

        if (null !== $file = $contact->getFile()) {
            $attachment = \Swift_Attachment::fromPath($file->getRealPath());
            if ($file instanceof UploadedFile) {
                $attachment->setFilename($file->getClientOriginalName());
            }
            $message->attach($attachment);
        }

        $message
            ->setFrom($this->mailerFromEmail)
            ->setTo($this->mailerToEmail)
            ->setSubject($contact->getSubject())
            ->setBody($bodyTxt, 'text/plain')
            ->addPart($bodyHtml, 'text/html');

        return $this->mailer->send($message);
    }

    /**
     * @param Student $student
     *
     * @return int
     */
    public function sendStudentLogin(Student $student)
    {
        $message = \Swift_Message::newInstance();

        $bodyTxt = $this->templating->render('AppBundle:Email:student.txt.twig', [
            'student' => $student,
        ]);

        $bodyHtml = $this->templating->render('AppBundle:Email:student.html.twig', [
            'student' => $student,
        ]);

        $message
            ->setFrom($this->mailerFromEmail)
            ->setTo($this->mailerToEmail)
            ->setSubject('Votre compte sur le site de l\'école')
            ->setBody($bodyTxt, 'text/plain')
            ->addPart($bodyHtml, 'text/html');

        return $this->mailer->send($message);
    }

}
<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=255)
     */
    private $body;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublish", type="datetimetz")
     */
    private $datepublish;

    /**
     * 
     *
     * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\Category")
     */

    private $categoryes;


    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"new"},message="Merci de mettre un image")
     * @Assert\File(mimeTypes={ "image/png","image/jpeg", "image/gif"}, mimeTypesMessage="le mime type que vous monter invalid {{ type }} ,voici les mime types autoriser {{ types }}",maxSize="2M")
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $image;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Post
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set datepublish
     *
     * @param \DateTime $datepublish
     *
     * @return Post
     */
    public function setDatepublish($datepublish)
    {
        $this->datepublish = $datepublish;

        return $this;
    }

    /**
     * Get datepublish
     *
     * @return \DateTime
     */
    public function getDatepublish()
    {
        return $this->datepublish;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categoryes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categorye
     *
     * @param \AdminBundle\Entity\Category $categorye
     *
     * @return Post
     */
    public function addCategorye(\AdminBundle\Entity\Category $categorye)
    {
        $this->categoryes[] = $categorye;

        return $this;
    }

    /**
     * Remove categorye
     *
     * @param \AdminBundle\Entity\Category $categorye
     */
    public function removeCategorye(\AdminBundle\Entity\Category $categorye)
    {
        $this->categoryes->removeElement($categorye);
    }

    /**
     * Get categoryes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoryes()
    {
        return $this->categoryes;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Post
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}

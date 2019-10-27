<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Review
 * @package App\Entity
 * @ORM\Entity
 * @ApiResource()
 */
class Review
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint")
     */
    public $rating;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    public $body;

    /**
     * @var string
     *
     * @ORM\Column
     */
    public $author;

    /**
     * @var DateTimeInterface
     *
     * @ORM\Column(type="datetime")
     */
    public $publicationDate;

    /**
     * @var Book
     *
     * @ORM\ManyToOne(targetEntity="Book", inversedBy="reviews")
     */
    public $book;

    public function getId(): ?int
    {
        return $this->id;
    }
}
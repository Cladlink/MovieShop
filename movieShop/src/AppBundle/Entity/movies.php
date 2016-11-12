<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="movies")
 */

class movies
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $titleMovie;

    /**
     * @ORM\Column(type="integer")
     */
    private $durationMovie;

    /**
     * @ORM\Column(type="integer")
     */
    private $dateMovie;

    /**
     * @ORM\Column(type="string")
     */
    private $priceMovie;

    /**
     * @ORM\Column(type="string")
     */
    private $imageMovie;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantityMovie;

    /**
     * @ORM\Column(type="string")
     */
    private $type_id;

    /**
     * @ORM\Column(type="string")
     */
    private $actors_id;

    /**
     * @ORM\Column(type="string")
     */
    private $composer_id;

    /**
     * @ORM\Column(type="string")
     */
    private $director_id;

    /**
     * @ORM\Column(type="string")
     */
    private $format_id;
}
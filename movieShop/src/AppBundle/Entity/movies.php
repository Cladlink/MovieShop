<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;

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
     * @OneToOne(targetEntity="typeMovie")
     * @JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type_id;

    /**
     * @ManyToMany(targetEntity="actors")
     * @JoinColumn(name="actors_id", referencedColumnName="id")
     */
    private $actors_id;

    /**
     * @ManyToMany(targetEntity="composers")
     * @JoinColumn(name="composer_id", referencedColumnName="id")
     */
    private $composer_id;

    /**
     * @ManyToOne(targetEntity="directors")
     * @JoinColumn(name="director_id", referencedColumnName="id")
     */
    private $director_id;
}
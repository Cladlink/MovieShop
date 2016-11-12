<?php
/**
 * Created by PhpStorm.
 * User: cladlink
 * Date: 12/11/16
 * Time: 08:06
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class movie_actor
{
    /**
     * @ORM\Column(type="integer")
     */
    private $movie_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $film_id;
}
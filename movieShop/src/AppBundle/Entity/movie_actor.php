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
     * @OneToOne(targetEntity="typeMovie")
     * @JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $movie_id;

    /**
     * @OneToOne(targetEntity="actors")
     * @JoinColumn(name="actor_movie_id", referencedColumnName="id")
     */
    private $actor_id;
}
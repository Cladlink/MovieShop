<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * @ORM\Entity
 * @ORM\Table(name="carts")
 */
class carts
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantityCart;

    /**
     * @ORM\Column(type="float")
     */
    private $priceCart;


    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCart;

    /**
     * @OneToOne(targetEntity="users")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @ManyToOne(targetEntity="movies")
     * @JoinColumn(name="movie_id", referencedColumnName="id")
     */
    private $movie_id;

    /**
     * @OneToOne(targetEntity="orders")
     * @JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $order_id;
}
<?php
/**
 * Created by PhpStorm.
 * User: cladlink
 * Date: 12/11/16
 * Time: 07:31
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

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
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $produit_id;

    /**
     * @OneToOne(targetEntity="orders")
     * @JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $order_id;
}
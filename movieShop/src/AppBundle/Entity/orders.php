<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;

class orders
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
    private $totalPriceOrder;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_order;

    /**
     * @OneToOne(targetEntity="users")
     * @JoinColumn(name="user_order_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @ManyToOne(targetEntity="stateOrder")
     * @JoinColumn(name="etat_id", referencedColumnName="id")
     */
    private $etat_id;
}
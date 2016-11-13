<?php
/**
 * Created by PhpStorm.
 * User: cladlink
 * Date: 12/11/16
 * Time: 07:19
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class users
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
    private $emailUser;

    /**
     * @ORM\Column(type="string")
     */
    private $passwordUser;

    /**
     * @ORM\Column(type="string")
     */
    private $loginUser;

    /**
     * @ORM\Column(type="string")
     */
    private $nomUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $codePostalUser;

    /**
     * @ORM\Column(type="string")
     */
    private $ville;

    /**
     * @ORM\Column(type="string")
     */
    private $adresse;

    /**
     * @ORM\Column(type="boolean")     */
    private $activeUser;

    /**
     * @ORM\Column(type="string")
     */
    private $uniqueKeyUser;

    /**
     * @ManyToOne(targetEntity="droits")
     * @JoinColumn(name="droit_id", referencedColumnName="id")
     */
    private $droit_id;
}
<?php
/**
 * Created by PhpStorm.
 * User: cladlink
 * Date: 12/11/16
 * Time: 07:05
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class composers

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
    private $nameComposer;
}
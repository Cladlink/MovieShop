<?php
/**
 * Created by PhpStorm.
 * User: mlucile
 * Date: 16/11/16
 * Time: 12:50
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller
{
    /**
     * @Route("/cart", name="cart")
     */
    public function showCart()
    {
        return $this->render('navigation/cart.html.twig');
    }

}
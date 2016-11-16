<?php
    namespace AppBundle\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

    class ShopController extends Controller
    {
         /**
         * @Route("/shop", name="shop")
         */
        public function showBoutique()
        {
            return $this->render('navigation/shop.html.twig');
        }
    }

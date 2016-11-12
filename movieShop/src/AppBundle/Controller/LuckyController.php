<?php
    namespace AppBundle\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

    class LuckyController extends Controller
    {
        /**
        * @Route("/")
        */
        public function numberAction()
        {
            $number = mt_rand(0, 100);

            return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
            );
        }
    }

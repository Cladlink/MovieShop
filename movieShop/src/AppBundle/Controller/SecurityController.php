<?php
/**
 * Created by PhpStorm.
 * User: mlucile
 * Date: 16/11/16
 * Time: 12:51
 */

namespace AppBundle\Controller;


use AppBundle\Form\LoginForm;
use AppBundle\Form\SigninForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $form = $this->createForm(LoginForm ::class, [
            '_username' => $lastUsername,
        ]);

        return $this->render(
            'security/login.html.twig',
            array(
                'form' => $form->createView(),
                'error' => $error,
            )
        );
    }

    /**
     * @Route("/", name="indexOut")
     */
    public function logOutAction()
    {
        return $this->render('index.html.twig');
    }


    /**
     * @Route("/signin", name="signIn")
     */
    public function signInAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $form = $this->createForm(SigninForm::class, [
            '_username' => $lastUsername,
        ]);

        return $this->render(
            'security/signin.html.twig',
            array(
                'form' => $form->createView(),
                'error' => $error,
            )
        );
    }
}
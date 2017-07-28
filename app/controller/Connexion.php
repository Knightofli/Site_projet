<?php

/**
 * Class Connexion
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

class Connexion 
{
    /**
     * PAGE: Index of the folder connexion
     * This method handles what happens when you move to 'connexion/index' (which is the default page btw)
     */
    public function index()
    {
        // load views
        require VIEW . 'templates/Header.php';
        require VIEW . 'connexion/index.php';
        require VIEW . 'templates/Footer.php';
    }
}
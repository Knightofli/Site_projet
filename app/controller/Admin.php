<?php

/**
 * Class Admin
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
 
class Admin
{
    /**
     * PAGE: Index of the folder admin
     * This method handles what happens when you move to 'admin/index' (which is the default page btw)
     */
    public function index()
    {
        // load views
        require VIEW . 'templates/Header.php';
        require VIEW . 'admin/index.php';
        require VIEW . 'templates/Footer.php';
    }

}

<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home 
{
    /**
     * PAGE: Index of the folder home
     * This method handles what happens when you move to 'home/index' (which is the default page btw)
     */
    public function index()
    {
        // load views
        require VIEW . 'templates/Header.php';
        require VIEW . 'home/index.php';
        require VIEW . 'templates/Footer.php';
    }

    /**
     * PAGE: Exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function exampleOne()
    {
        // load views
        require VIEW . 'templates/Header.php';
        require VIEW . 'home/Example_one.php';
        require VIEW . 'templates/Footer.php';
    }

    /**
     * PAGE: Exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function exampleTwo()
    {
        // load views
        require VIEW . 'templates/Header.php';
        require VIEW . 'home/Example_two.php';
        require VIEW . 'templates/Footer.php';
    }
}




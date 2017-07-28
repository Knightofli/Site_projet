<?php

/**
 * Class Deconnexion
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
 
class Deconnexion 
{

    function __construct()
    {
        if(empty($_SESSION['id'])) 
        {
	        header('Location: ./');
        }else
        {
    	    session_destroy();
	        header('Location: ./');
        }
}
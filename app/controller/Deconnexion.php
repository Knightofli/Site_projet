<?php
/*
 * Class Deconnexion
 * 
 */

class Deconnexion 
{

    function __construct()
    {
        if(empty($_SESSION['ID'])) 
        {
	        header('Location: ./');
        }else
        {
    	    session_destroy();
	        header('Location: ./');
        }
}
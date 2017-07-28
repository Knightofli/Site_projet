<?php

class Dispatcher
{
    /** 
    * @array $url 
    * null [controller]
    * null [action]
    * array() [params]
    */
    private $_url = array (
        'controller' => null,
        'action' => null,
        'params' => array()
    );

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controller/method or the fallback
     */
    public function __construct()
    {
        // create array with URL parts in $url
        $this->splitUrl();

        // check for controller: no controller given ? then load start-page
        if (!$this->_url['controller']) {

            require CONTROLLER.'home.php';
            $page = new Home();
            $page->index();

        } elseif (file_exists(CONTROLLER.$this->_url['controller'].'.php')) {
            // here we did check for controller: does such a controller exist ?

            // if so, then load this file and create this controller
            // example: if controller would be "Forum", then this line would translate into: $this->Forum = new Forum();
            require CONTROLLER.$this->_url['controller']. '.php';
            $this->_url['controller'] = new $this->_url['controller']();

            // check for method: does such a method exist in the controller ?
            if (method_exists($this->_url['controller'], $this->_url['action'])) {

                if (!empty($this->_url['params'])) {
                    // Call the method and pass arguments to it
                    call_user_func_array(array($this->_url['controller'], $this->_url['action']), $this->_url['params']);
                } else {
                    // If no parameters are given, just call the method without parameters, like $this->home->method();
                    $this->_url['controller']->{$this->_url['action']}();
                }

            } else {
                if (strlen($this->_url['action']) == 0) {
                    // no action defined: call the default index() method of a selected controller
                    $this->_url['controller']->index();
                } else {
                    header('location: ' . URL . 'problem');
                }
            }
        } else {
            header('location: ' . URL . 'problem');
        }
    }

    /**
     * Get and split the URL
     */
    private function splitUrl()
    {
        if (isset($_GET['url'])) {

            // split URL
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Put URL parts into according properties
            // By the way, the syntax here is just a short form of if/else, called "Ternary Operators"
            // @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->_url['controller'] = isset($url[0]) ? $url[0] : null;
            $this->_url['action'] = isset($url[1]) ? $url[1] : null;

            // Remove controller and action from the split URL
            unset($url[0], $url[1]);

            // Rebase array keys and store the URL params
            $this->_url['params'] = array_values($url);

            // for debugging. uncomment this if you have problems with the URL
            //echo 'Controller: ' . $this->_url['controller'] . '<br>';
            //echo 'Action: ' . $this->_url['action'] . '<br>';
            //echo 'Parameters: ' . print_r($this->_url['params'], true) . '<br>';
        }
    }
}

?>

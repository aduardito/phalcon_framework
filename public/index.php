<?php
try {
    //Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        '../api/controllers/',
        '../api/models/'
    ))->register();

    //Create a DI
    $di = new Phalcon\DI\FactoryDefault();

	 //Setup the database service
    $di->set('db', function(){
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
            "host"		=> "localhost",
            "username"	=> "phalcon_dev",
            "password"	=> "",
            "dbname"		=> "phalcon_test"
        ));
    });
	 
    //Setup the view component
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir("../api/views/");
		  $view->registerEngines(array(
				".phtml" => 'Phalcon\Mvc\View\Engine\Volt'
		  ));
        return $view;
    });

    //Setup a base URI so that all generated URIs include the "eduardo" folder
    $di->set('url', function(){
        $url = new \Phalcon\Mvc\Url();
        $url->setBaseUri('/eduardo/');
        return $url;
    });

    //Handle the request
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}
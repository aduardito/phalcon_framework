<?php
class IndexController extends \Phalcon\Mvc\Controller
{
	public function indexAction()
	{
		$text = 'Vamos por el buen camino';
		$this->view->text = $text;
//		$this->view->render('index', array('text'=>$text));
	}

	public function helloAction()
	{
		// This is an Ajax response so it doesn't generate any kind of view
		$this->view->setRenderLevel(View::LEVEL_NO_RENDER);
	}
	
	public function signUpAction()
	{
		// This is an Ajax response so it doesn't generate any kind of view
		$this->view->setRenderLevel(View::LEVEL_NO_RENDER);
	}
	
	public function redirectAction()
	{
		//An HTTP Redirect
		return $this->response->redirect('index/hello');
	}	
	
}
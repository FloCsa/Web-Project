<?php


class RechnungErstellenController extends Controller
{
	protected $viewFileName = "rechnungErstellen"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{

		$this->view->title = "Rechnung erstellen";
		$this->view->username = $this->user->username;



	}

}
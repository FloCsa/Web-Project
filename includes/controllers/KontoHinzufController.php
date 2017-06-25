<?php

class KontoHinzufController extends Controller
{
	protected $viewFileName = "kontoHinzufuegen"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{

		$this->view->title = "Konto hinzufuegen";
		$this->view->username = $this->user->username;


        $this->view->liste = AccountModel::getAllAccounts();

	}

}
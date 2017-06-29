<?php


class BillFormController extends Controller
{
	protected $viewFileName = "billForm"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{

		$this->view->title = "Rechnung erstellen";
		$this->view->username = $this->user->username;

        if (!empty($_POST)) {
            $this->view->neueRechnung = array("vname" => $_POST['vname'], "nname" => $_POST['nname'], "straße" => $_POST['straße'],
                "nummer" => $_POST['nummer'], "plz" => $_POST['plz'], "ort" => $_POST['ort'], "beschreibung" => $_POST['beschreibung'], "betrag" => $_POST['betrag']);

            BillModel::createBill($this->view->neueRechnung);
            exit();

        }

    }

}
<?php

require_once('includes/initialize.php');

if(!empty($_POST) && isset($_POST['cmd']) && $_POST['cmd'] == 'getBillView')
{
    //eine logik die mir den view holt
    $view = new View('billForm', 'billForm');

    $data = array();
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        //dir mir die daten aus der datenbank holt#
        $data = BillModel::getByPk($id);
    }

    //die die daten an den view übergibt
    $view->setData($data);

    //die mir den view so zurückgibt, dass jquery was damit anfangen kann
    // set the status
    header('HTTP/1.1 200 OK');
    // set the content type
    header('Content-type: application/json');
    // set X-UA-Compatible for IE9
    header('X-UA-Compatible: IE=edge, chrome=1');

    echo json_encode(array('view' => $view->parse()));
}




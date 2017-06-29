<?php
/**
 * Created by PhpStorm.
 * User: Dario_2
 * Date: 27.06.2017
 * Time: 13:06
 */

class BillModel
{
    public static function getByPk($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM rechnung WHERE rnnr=".$db->escapeString($id);

        $result = $db->query($sql);

        return $db->fetchAssoc($result);
    }

    public static function deleteBill($id)
    {
        $message = "Rechnung".$id."wurde gelöscht!";

        $db = new Database();
        $sql = "DELETE FROM rechnung WHERE rnnr=".$db->escapeString($id);

        $db->query($sql);

        return $message;
    }

    public static function createAccount($data)
    {
        $db = new Database();
        $vname= $db->escapeString($data['vname']);
        $nname = $db->escapeString($data['nname']);
        $straße = $db->escapeString($data['straße']);
        $nummer = $db->escapeString($data['nummer']);
        $plz = $db->escapeString($data['plz']);
        $ort = $db->escapeString($data['ort']);
        $beschreibung = $db->escapeString($data['beschreibung']);
        $betrag = $db->escapeString($data['betrag']);


        $sql = "INSERT INTO `rechnung`(`vname`,`nname`,`straße`,`nummer`,`plz`,`ort`,`beschreibung`) VALUES('".$vname."','".$nname."','".$straße."','".$nummer."','".$plz."','".$ort."','".$beschreibung."','".$betrag."')";
        $db->query($sql);
    }


}
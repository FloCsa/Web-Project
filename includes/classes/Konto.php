<?php

/**
 * Created by PhpStorm.
 * User: Jojo
 * Date: 25.06.2017
 * Time: 17:20
 */
class Konto
{

    public static function createAccount($data)
    {
        $db = new Database();
        $kontoname = $db->escapeString($data['kontoname']);
        $straße = $db->escapeString($data['straße']);
        $nummer = $db->escapeString($data['hausnummer']);
        $plz = $db->escapeString($data['plz']);
        $ort = $db->escapeString($data['ort']);
        $stnummer = $db->escapeString($data['stnummer']);
        $email = $db->escapeString($data['email']);


        $sql = "INSERT INTO `konto`(`kontoname`,`straße`,`nummer`,`plz`,`ort`,`stnummer`,`email`) VALUES('".$kontoname."','".$straße."','".$nummer."','".$plz."','".$ort."','".$stnummer."','".$email."')";
        $db->query($sql);
    }


}
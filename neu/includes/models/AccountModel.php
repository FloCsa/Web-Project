<?php

class AccountModel
{
    public static function getAllAccounts()
    {
        $liste = array();

        $db = new Database();
        $sql = "SELECT kontoid, kontoname FROM konto;";
        $result = $db->query($sql);
        while ($konto = $db->fetchObject($result)) {


            $sql = "SELECT * FROM rechnung WHERE kontoid=".$konto->kontoid;
            $result2 = $db->query($sql);

            $rechnungen = array();

            while($rechnung = $db->fetchObject($result2))
            {
                $rechnungen[] = $rechnung;
            }

            $konto->rechnungen = $rechnungen;

          $liste[] = $konto;
        }

        return $liste;
    }


}
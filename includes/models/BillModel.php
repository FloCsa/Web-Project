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
}
<?php
include "../includes/dbconnection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/main.css">

    <script type="text/javascript" src="../js/core.js"></script>
    <title>SmartChimp</title>
</head>
<body>
<div class="container">
    <header>
        <div class="page-header">
            <h1>SmartChimp
                <small style="font-size: 12px;">logged in as..</small>
                <button type="button" class="btn btn-default btn-circle floatR" data-toggle="tooltip"
                        data-placement="auto" title="Konto erstellen"
                        onclick="window.location.href='eingabeRechnung.php'">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
                <span style="font-size: 15px; float: right; margin: 10px;">Neues Konto</span>
            </h1>

        </div>
    </header>
    <div class="well">
        <button type="button" class="glyphicon glyphicon-chevron-right arrow collapsed"></button>
        <span class="kontobox">Kontoname</span>
        <button type="button" class="btn btn-default btn-circle" data-toggle="tooltip"
                data-placement="auto" onclick="window.location.href='rechnungErstellen.php'"
                title="Rechnung erstellen">
            <span class="glyphicon glyphicon-plus"></span>
        </button>
        <div class="kontobetrag1">1455,12 €</div>

    </div>
    <?php
    $liste = array();
    $db = new Database();
    $sql = "SELECT kontoname FROM konto;";
    $result = $db->query($sql);
    while ($kontoname = $db->fetchObject($result)) {
        $temp = $kontoname->kontoname;
        $liste[] = $temp;
    }
    foreach ($liste as $wert):
    ?>

    <div class="well">
        <button type="button" class="glyphicon glyphicon-chevron-right arrow collapsed" data-toggle="collapse"
                data-target="#demo"></button>
        <span class="kontobox"><?php echo $wert; ?></span>
        <button type="button" class="btn btn-default btn-circle" data-toggle="tooltip"
                data-placement="auto" onclick="window.location.href='rechnungErstellen.php'"
                title="Rechnung erstellen">
            <span class="glyphicon glyphicon-plus"></span>
        </button>
        <div class="kontobetrag1">432,12 €</div>
        <div class="kontobetra2">765,23 €</div>

        <?php endforeach; ?>

    </div>
    <div class="collapse" id="demo">
        <table class="table table-hover">

            <tbody>
            <tr>
                <td class="icons"><span class="glyphicon glyphicon-pencil"></span><span
                            class="glyphicon glyphicon-trash"></span></td>
                <td class="content">beschreibung</td>
                <td class="price">betrag</td>
                <td class="price">betrag</td>
            </tr>

            </tbody>
        </table>
    </div>
    <div class="panel panel-default">
        <div class="panel-footer" style="text-align: right">
            <a href="" style="padding-right: 4px; border-right: 1px solid #c9c9c9">link 1</a>
            <a href="" style="padding-right: 4px; border-right: 1px solid #c9c9c9">link 2</a>
            <a href="">link 3</a>
        </div>
    </div>


</div>
<?php $db->__destruct(); ?>
</body>
</html>
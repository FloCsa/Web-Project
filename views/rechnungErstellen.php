<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Rechnung erstellen</title>
</head>
<body>
<div class="container">
    <h1 class="well">Rechnung erstellen</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Beschreibung</label>
                        <input type="text" placeholder="Beschreibung" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Betrag</label>
                            <input type="text" placeholder="Betrag" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Identifikationsnummer</label>
                            <input type="text" placeholder="Identifikationsnummer." class="form-control">
                        </div>
                    </div>
                    <div class="Speichern">
                        <button type="button" class="btn btn-lg btn-info" onclick="window.location.href='index.php'">Speichern</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
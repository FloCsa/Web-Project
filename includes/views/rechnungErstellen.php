<?php
echo $this->header;
?>

<div class="container">
    <h1 class="well">Rechnung erstellen</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Vorname</label>
                            <input type="text" placeholder="Vorname" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Nachname</label>
                            <input type="text" placeholder="Nachname" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Straße</label>
                            <input type="text" placeholder="Straße" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Hausnummer</label>
                            <input type="text" placeholder="Hausnummer" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>PLZ</label>
                            <input type="text" placeholder="PLZ" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Ort</label>
                            <input type="text" placeholder="Ort" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Beschreibung</label>
                        <input type="text" placeholder="Beschreibung" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Betrag</label>
                            <input type="text" placeholder="Betrag" class="form-control">
                        </div>
                    </div>
                    <div class="Buttons">
                        <button type="button" class="btn btn-lg btn-info">Abbrechen</button>
                        <button type="button" class="btn btn-lg btn-info">Speichern</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
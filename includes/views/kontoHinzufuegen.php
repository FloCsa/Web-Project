<?php
echo $this->header;
?>
<div class="container">
    <div class="col-lg-12 well">
        <div class="row">
            <form id="kontoHinzufuegen-form" action="kontoHinzufuegen" method="post" role="form">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="kontoname">Kontoname</label>
                        <input id="kontoname" type="text" name="kontoname" placeholder="Kontoname" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="straße">Straße</label>
                            <input id="straße" type="text" name="strasse" placeholder="Straße" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="hausnummer">Hausnummer</label>
                            <input id="hausnummer" type="text" name="nummer" placeholder="Hausnummer" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="plz">PLZ</label>
                            <input id="plz" type="text" name="plz" placeholder="PLZ" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="ort">Ort</label>
                            <input id="ort" type="text" name="ort" placeholder="Ort" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input id="email" type="text" name="email" placeholder="E-Mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="stnummer">Steuer ID</label>
                        <input id="stnummer" type="text" name="stnummer" placeholder="Steuer ID" class="form-control">
                    </div>
                    <div class="Buttons">
                        <input type="reset" class="btn btn-lg btn-info" value="Abbrechen">
                        <input type="submit" class="btn btn-lg btn-info" value="Speichern">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



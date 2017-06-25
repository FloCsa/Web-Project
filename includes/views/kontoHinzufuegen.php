<?php
echo $this->header;
?>
<div class="container">
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kontoname</label>
                        <input type="text" name="kontoname" placeholder="Kontoname" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Straße</label>
                            <input type="text" name="straße" placeholder="Straße" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Hausnummer</label>
                            <input type="text" name="nummer" placeholder="Hausnummer" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>PLZ</label>
                            <input type="text" name="plz" placeholder="PLZ" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Ort</label>
                            <input type="text" name="ort" placeholder="Ort" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="text" name="email" placeholder="E-Mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Steuer ID</label>
                        <input type="text" name="stnummer" placeholder="Steuer ID" class="form-control">
                    </div>
                    <div class="Buttons">
                        <button type="button" class="btn btn-lg btn-info">Abbrechen
                        </button>
                        <button type="button" class="btn btn-lg btn-info"
                        >Speichern
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



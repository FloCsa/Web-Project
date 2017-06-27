<div class="container">
    <?php if($this->rnnr): ?>
        <h1 class="well">Rechnung Nummer <?php echo $this->rnnr; ?> bearbeiten</h1>
    <?php else: ?>
        <h1 class="well">Rechnung erstellen</h1>
    <?php endif; ?>
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Vorname</label>
                            <input type="text" placeholder="Vorname" class="form-control" value="<?php echo $this->vname; ?>">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Nachname</label>
                            <input type="text" placeholder="Nachname" class="form-control" value="<?php echo $this->nname; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Straße</label>
                            <input type="text" placeholder="Straße" class="form-control" value="<?php echo $this->straße; ?>">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Hausnummer</label>
                            <input type="text" placeholder="Hausnummer" class="form-control" value="<?php echo $this->nummer; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>PLZ</label>
                            <input type="text" placeholder="PLZ" class="form-control" value="<?php echo $this->plz; ?>">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Ort</label>
                            <input type="text" placeholder="Ort" class="form-control" value="<?php echo $this->ort; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Beschreibung</label>
                        <input type="text" placeholder="Beschreibung" class="form-control" value="<?php echo $this->beschreibung; ?>">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Betrag</label>
                            <input type="text" placeholder="Betrag" class="form-control" value="<?php echo $this->betrag; ?>">
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
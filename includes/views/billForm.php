<div class="">
    <div class="col-lg-12 well">
        <div class="row">
            <form id="rechnungErstellen-form" action="billForm" method="post" role="form">
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
                        <input type="reset" class="btn btn-lg btn-info" value="Abbrechen" data-dismiss="modal">
                        <input type="submit" class="btn btn-lg btn-info" value="Speichern">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#rechnungErstellen-form').submit(function(e) {
        e.preventDefault(); //Submit abgefangen

        var urlToSendFormularTo = $(this).attr('action');
        var variablesFromFormular = $(this).serialize(); //nice function which gets all fields from the form for us

        $.ajax({
            url: urlToSendFormularTo,
            method: "post",
            data: variablesFromFormular,
            success: function(dataReceived) {
                //check values in dataReceived to see if everything was fine
                console.log(dataReceived);

                location.reload();

            }
        });
    });
</script>
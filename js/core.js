
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();

    $('.openOverlayToNewAccount').click(function() {

        $('#test2').modal('show');
    })


    //Funktion für das öffnen des Modals für rechnungErstellen.php "modal2" in index.php
    $('.openOverlayToNewBill').click(function () {

        $('#modal2').modal('show');
    })
});


//Funktion für das Anzeigen von kontoHinzufuegen.php im Modal test2 in der index.php leider funzt es noch nicht
$(document).ready(function(){
    $('#test2').on('shown.bs.modal', function () {
        $.ajax({
            type: 'GET',
            url: "kontoHinzufuegen.php",
            success:function(data){
                $('#showcal').html(data);
            }
        });
    });
});



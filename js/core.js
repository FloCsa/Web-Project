
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


    $('.editBill, .newBill').click(function() {
        var billId = $(this).attr('data-id');

        dataToSend = {cmd: "getBillView"};

        //if there is an id given...
        if(typeof billId !== 'undefined') {
            dataToSend.push({id: billId});
        }

        $.ajax({
            url: 'klugeDatei.php',
            method: "post",
            data: dataToSend,
            success: function(dataReceived) {
                //console.log(dataReceived);

                var myModal = $('#test2');

                if(typeof billId !== 'undefined') {
                     myModal.find('.modal-title').html('Rechnung Nummer '+billId+' bearbeiten');
                } else {
                    myModal.find('.modal-title').html('Neue Rechnung erstellen');
                }

                myModal.find('.modal-body').html(dataReceived.view);
                

                $('#test2').modal('show');

            }
        });
       //console.log($(this).attr('data-id'));
    });


});


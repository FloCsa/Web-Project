$(document).ready(function () {


    $('.newAccount').click(function () {

        dataToSend = {cmd: "getKontoHinzufuegen"};

        $.ajax({
            url: 'klugeDateiKonto.php',
            method: "post",
            data: dataToSend,
            success: function (dataReceived) {
                //console.log(dataReceived);

                var myModal = $('#test2');

                myModal.find('.modal-body').html(dataReceived.view);

                $('#test2').modal('show');

            }
        });

    });


    $('.editBill, .newBill').click(function () {
        var billId = $(this).attr('data-id');

        dataToSend = {cmd: "getBillView"};

        //if there is an id given...
        if (typeof billId !== 'undefined') {
            dataToSend.push({id: billId});
        }

        $.ajax({
            url: 'klugeDatei.php',
            method: "post",
            data: dataToSend,
            success: function (dataReceived) {
                //console.log(dataReceived);

                var myModal = $('#test2');

                if (typeof billId !== 'undefined') {
                    myModal.find('.modal-title').html('Rechnung Nummer ' + billId + ' bearbeiten');
                } else {
                    myModal.find('.modal-title').html('Neue Rechnung erstellen');
                }

                myModal.find('.modal-body').html(dataReceived.view);


                $('#test2').modal('show');

            }
        });
        //console.log($(this).attr('data-id'));
    });

    // zum Löschen von Rechnungen
    $('.deleteBill').click(function () {
        var billId = $(this).attr('data-id');

        $.ajax({
            url: "klugeDatei.php",
            method: "post",
            data: billId,
            success: function (receivedData) {
                console.log(receivedData);
            }
        });


    });


});


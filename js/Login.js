$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});

var statusmail=false;
var statuspw=false;

function checkPW() {

var Eingabepw01=document.getElementById("password1");
var Eingabepw02=document.getElementById("confirm-password");
var message= document.getElementById("confirmMessage");

    if (Eingabepw01.value === Eingabepw02.value && Eingabepw01.value.length >= 5 ){
        alert("Password matches");
        statuspw=true;

    }
    else{
        alert("password bitte korrekt eingeben");
        statuspw=false;
    }

};


function checkMail() {
    var mail=document.getElementById("email1");
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (re.test(mail.value)){
        alert("E-Mail stimmt");
        statusmail=true;

    }else {
        alert("Diese E-Mail gibt es nicht");
        statusmail=false;

    }
}

function checkall() {
    if ((statusmail=true) && (statuspw=true)){
        window.open("index.php");
    }

}


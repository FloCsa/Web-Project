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

function checkPW() {

var Eingabepw01=document.getElementById("password1");
var Eingabepw02=document.getElementById("confirm-password");
var message= document.getElementById("confirmMessage");


    if (Eingabepw01.value === Eingabepw02.value){
        alert("Password matches");
        (window.open('index.html'));



    }else{
        alert("password doesn´t match");
    }
    
};


$(document).ready(function(){
    $("#btnDugme").click(function(){
        let email=$("#email").val();
        let lozinka=$("#lozinka").val();
        $.post("ajax_provera.php", {email: email, lozinka: lozinka}, function(response){
            $("#odgovor").html(response);
        })
    })
})
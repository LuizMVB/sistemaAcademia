$(document).ready(function(){
    $("#submit").click(function(){
        if($("#email").val() && $("#password").val()){
            $("#require_fields_inputs").attr('style', 'display: none;');
            $.post("pages/model/crud_client.php", 
            {email : $("#email").val(), password : $("#password").val()}, 
            function(data){
                console.log(data);
            });
        }else{
            $("#require_fields_inputs").attr("style", "");
        }
    });
});
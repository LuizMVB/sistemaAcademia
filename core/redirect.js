function index(){
    window.location.href = "index.php";
}
function register(){
    window.location.href = "index.php?page=register";
}
$(document).ready(function(){
    $('#goto_index').click(function(){
        index();
    });
    $('#goto_register').click(function(){
        register();
    });
});
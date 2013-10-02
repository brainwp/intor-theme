function carregaConteudo() {
        $('#conteudo-voce-sabia').load('http://127.0.0.1/wordpress/wp-content/themes/intor-theme/vocesabia.php');
}

$(function() {
        setInterval('carregaConteudo()', 5000);
})

ou

$(document).ready(function(){
 
loop();
 
});

 
var loop = function(){

$.get('http://127.0.0.1/wordpress/wp-content/themes/intor-theme/vocesabia.php.php',function(resultado){
        $('#conteudo-voce-sabia').html(resultado);
}); 
        
setInterval('loop()', 1000);     
}
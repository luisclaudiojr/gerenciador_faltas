// se a pagina carregar inteira aí tira a div CARREGANDO que está pod cima de tudo

$j(document).ready( function() {

	$j(window).load( function() {
		$j('#loading').delay(200).fadeOut();
	})

});

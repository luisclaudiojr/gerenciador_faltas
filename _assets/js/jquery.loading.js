// se a pagina carregar inteira a� tira a div CARREGANDO que est� pod cima de tudo

$j(document).ready( function() {

	$j(window).load( function() {
		$j('#loading').delay(200).fadeOut();
	})

});

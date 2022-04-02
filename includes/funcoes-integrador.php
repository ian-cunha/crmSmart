<?php
function myUrlEncode($string) {
	$entities = array('%22', '%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
	$replacements = array('"', '!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
	return str_replace($entities, $replacements, urlencode($string));
}
function my_file_get_contents( $site_url ){
	$url = myUrlEncode($site_url);
	$ch = curl_init();	
	$timeout = 10;	
	curl_setopt ($ch, CURLOPT_URL, $url);	
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);	
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);	
	$file_contents = curl_exec($ch);	
	curl_close($ch);	
	return $file_contents;
}


function obterImovelLead($urlBaseSmart, $token, $codImovel, $nomeContato, $emailContato, $telefoneContato, $urlOrigem, $idAcao){

	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/?id='.$codImovel.'&token='.$token.'&nomeContato='.$nomeContato.'&emailContato='.$emailContato.'&telefoneContato='.$telefoneContato.'&urlOrigem='.$urlOrigem.'&idAcao='.$idAcao);

 	//die($urlBaseSmart.'sites/v1/empreendimento/?id='.$codImovel.'&token='.$token.'&nomeContato='.$nomeContato.'&emailContato='.$emailContato.'&telefoneContato='.$telefoneContato.'&urlOrigem='.$urlOrigem.'&idAcao='.$idAcao);
	
	return json_decode($responseJson);

}



// function obterImovelCookieNuv($urlBaseSmart, $token, $codImovel, $nomeContato, $emailContato, $telefoneContato, $urlOrigem, $idEmpresaImovel){	
// 	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/?id='.$codImovel.'&token='.$token.'&nomeContato='.$nomeContato.'&emailContato='.$emailContato.'&telefoneContato='.$telefoneContato.'&urlOrigem='.$urlOrigem.'&idEmpresaImovel='.$idEmpresaImovel);	
// 	die($urlBaseSmart.'sites/v1/empreendimento/?id='.$codImovel.'&token='.$token.'&nomeContato='.$nomeContato.'&emailContato='.$emailContato.'&telefoneContato='.$telefoneContato.'&urlOrigem='.$urlOrigem.'&idEmpresaImovel='.$idEmpresaImovel);
// 	return json_decode($responseJson);
// }



/*Funções de Imóveis*/
function obterImovel($urlBaseSmart, $token, $codImovel){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/imovel/'.$codImovel.'/'.$token));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/'.$codImovel.'/'.$token);
	// echo '#####<br>'.$responseJson.'<br>##########<br>';
	return json_decode($responseJson);
}

function obterImovelAv($urlBaseSmart, $token, $codImovel){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/imovel/'.$codImovel.'/'.$token));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/imovel/'.$codImovel.'/'.$token);
	return json_decode($responseJson);
}



function obterListaEmpreendimentos($urlBaseSmart, $filtro){

	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/listarEmpreendimentosFiltro?filtro='.$filtro);

	//die($urlBaseSmart.'sites/v1/empreendimento/listarEmpreendimentosFiltro?filtro='.$filtro);

	return json_decode($responseJson);


}

/*Funções de Imóveis*/
function obterObra($urlBaseSmart, $token, $codImovel){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/imovel/'.$codImovel.'/'.$token));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/andamentoObra/'.$codImovel.'/'.$token);
	// echo '#####<br>'.$responseJson.'<br>##########<br>';
	return json_decode($responseJson);
}


function obterTotalImoveis($urlBaseSmart, $filtro){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/imovel/totalImoveisFiltro?filtro='.$filtro));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/totalImoveisFiltro?filtro='.$filtro);
	return json_decode($responseJson);
}


function obterListaImoveisAv($urlBaseSmart, $filtro){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/imovel/listarImoveisFiltro?filtro='.$filtro));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/imovel/listarImoveisFiltro?filtro='.$filtro);

	return json_decode($responseJson);
}


function obterListaImoveis($urlBaseSmart, $filtro){

	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/listarEmpreendimentosFiltro?filtro='.$filtro);

	// echo $responseJson;

	return json_decode($responseJson);
}


function obterListaImoveisAvulso($urlBaseSmart, $filtro){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/imovel/listarImoveisFiltro?filtro='.$filtro));

	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/imovel/listarImoveisFiltro?filtro='.$filtro);

	// echo $urlBaseSmart;
	// echo $filtro;

	return json_decode($responseJson);
}



function obterListaImoveisByLista($urlBaseSmart, $token, $codigos){

	// die($codigos);
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/imovel/listarImoveisLista?codigos='.$codigos.'&token='.$token));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/listarEmpreendimentosLista?listaId='.$codigos.'&token='.$token);

	//die($responseJson);

	return json_decode($responseJson);
}

function obterImoveisSugeridos($urlBaseSmart, $codigos, $token){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/imovel/listarImoveisLista?codigos='.$codigos.'&token='.$token));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/empreendimentosSugeridos/'.$codigos.'/'.$token);
	//echo $responseJson ;
	return json_decode($responseJson);
}


/*Funções de Empresa e Configurações*/
function obterEmpresa($urlBaseSmart, $token){					
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/empresa/'.$token));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empresa/'.$token);
	return json_decode($responseJson);
}

function obterConfiguracaoSite($urlBaseSmart, $token){					
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/empresa/configuracaoSite?token='.$token));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empresa/configuracaoSite?token='.$token);
	return json_decode($responseJson);
}


/*Funções do Localização*/
function obterEstado($urlBaseSmart, $codEstado){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/localizacao/estado/'.$codEstado));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/localizacao/estado/'.$codEstado);
	return json_decode($responseJson);
}

function obterCidade($urlBaseSmart, $codCidade){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/localizacao/cidade/'.$codCidade));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/localizacao/cidade/'.$codCidade);
	return json_decode($responseJson);
}

function obterBairro($urlBaseSmart, $codBairro){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/localizacao/bairro/'.$codBairro));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/localizacao/bairro/'.$codBairro);
	return json_decode($responseJson);
}

function obterEstados($urlBaseSmart){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/localizacao/estados'));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/localizacao/estados');
	return json_decode($responseJson);
}

function obterCidades($urlBaseSmart, $codEstado){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/localizacao/cidades/'.$codEstado));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/localizacao/cidades/'.$codEstado);
	return json_decode($responseJson);
}

function obterBairros($urlBaseSmart, $codCidade){
	//$responseJson = file_get_contents(myUrlEncode($urlBaseSmart.'sites/v1/localizacao/bairros/'.$codCidade));
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/localizacao/bairros/'.$codCidade);
	return json_decode($responseJson);
}

function obterEmpreendimentoLead($urlBaseSmart, $token, $idEmpreendimento, $nomeContato, $emailContato, $telefoneContato, $urlOrigem, $idAcao){
	$responseJson = my_file_get_contents($urlBaseSmart.'sites/v1/empreendimento/?id='.$idEmpreendimento.'&token='.$token.'&nomeContato='.$nomeContato.'&emailContato='.$emailContato.'&telefoneContato='.$telefoneContato.'&urlOrigem='.$urlOrigem.'&idAcao='.$idAcao);
	return json_decode($responseJson);
} 

?>
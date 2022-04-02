<?php

	$urlSite = 'https://www.smartimobiliario.com.br/crmsmart/';
	$urlBaseSemBarra = "https://www.smartimobiliario.com.br/crmsmart";
	$urlBaseSmart = "https://app.smart.youdigital.com.br/"; 

	// SEO
	$tituloPage = "CRM - Smart Imobiliário";
	$subTitulo = "Você já ouviu falar de CRM imobiliário? Sabia que essapode ser a plataforma queirá facilitar a rotina do seudia a dia ou da suaempresa, e trazer aindamais sucesso nas vendas?";

	$codigoImovel = ""; //ID EMPREENDIMENTO
	$token = "dI2dlTNC9WP50KZU7T6jI1SMxZFTDQgFhwjoRe5g"; // TOKEM ANUCIANTE
	$idLandpage = "";  //ID ACAO PADRÃO
	$idEmpresaDestino = "5878"; // ID empresa que vai receber o lead
	$whatsAppFone = "5581984219885";
	

	$youtube = ""; 
	$endereco = "";
	$subTituloEndereco = "";
	$maps = "";

	$colorPrimaria = "#D66550";
	$colorSecundaria = "#80BAD2";

	// Nﾃグ ESQUECE DE CONFIGURAR O ARQUIVO .htaccess

	$tokenAcessoCookie = "8uAbBcq8VhfEr23VS6hU4TDIS15iOhI8Lu7YQxx2ydJrPP5qqjDDl9NFrMth";
	include "includes/funcoes-integrador.php";	
	$objJsonEmpresa = obterEmpresa($urlBaseSmart, $token);
	
	if(isset($objJsonEmpresa->empresa)){
		$empresa = $objJsonEmpresa->empresa;
		
		if(isset($empresa->logomarca) && $empresa->logomarca != ""){
			$urlLogomarca = $urlBaseSmart."arquivos/smart/".($empresa->id)."/logomarca/".($empresa->logomarca);
		}else{
			$urlLogomarca = $urlBaseSmart."arquivos/smart/1/logomarca/Logomarca.png";
		}
	}else{
		$empresa = null;
	}
?>
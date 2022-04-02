<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php

   	include "variaveis.php";	
    $idAcao = $_GET['id_acao'];
    $nome = $_GET['nome']; 
    $email = $_GET['email']; 
    $telefone = $_GET['telefone']; 
    $acessoPage = $_GET['acesso'];  
    $idOrigem = $_GET['id_origem'];

    $textoPretensao = "";
    $textoPretensaoSinonimo = "";
    $textoTitulo = "";
    $aluguel = "Aluguel";
    $venda = "Venda";
    $temporada = "Temporada";
    $lancamento = "Lançamento";
    $alugar = "Alugar";
    $comprar = "Comprar";
    $novo = "Novo";
    $maisDetalhes = "Detalhes";
    $referencia = "Refer&etilde;ncia";
    $img1 = "";
    $img2 = "";
    $img3 = "";
    $imagemDestaque = "";  
    $quantidadeImagens = 0; 
    $nomeImagemDestaque = "";
    $temImagem = 0;
    $temCaracImovel = 0;
    $temCaracEmpreendimento = 0;
    $temTabela = 0;
    $temDocumento = 0;  

    if($nomeCookieURL != null) {
      $objJsonImovel = obterImovelLead($urlBaseSmart, $token, $codigoImovel, $nomeCookieURL, $emailCookieURL, $telefoneCookieURL, ($urlSite), $idAcao);
    }else if($nomeCookieLocal != null) {
      $objJsonImovel = obterImovelLead($urlBaseSmart, $token, $codigoImovel, $_COOKIE['nomeContato'], $_COOKIE['emailContato'], $_COOKIE['telefoneContato'], ($urlSite), $idAcao);
    }else{    
      $objJsonImovel = obterImovel($urlBaseSmart, $token, $codigoImovel);
    }

    $objJsonImovel = obterImovel($urlBaseSmart, $token, $codigoImovel);  

    if(isset($objJsonImovel->empreendimento)){
      $empreendimento = $objJsonImovel->empreendimento;
    }else{
      $empreendimento = null;
    }

    $quartoEmp = $empreendimento->quartoPersonalizado;
    $areaEmp = $empreendimento->areaPersonalizada;
    $vagaEmp = $empreendimento->vagaPersonalizada;
    $nomeImovel = $empreendimento->nome;  
    $qtdQuartos = $empreendimento->quartosMinimo; 
    $qtdSuites = $empreendimento->suitePersonalizado;
    $menorPreco = $empreendimento->menorPrecoTipo;
    $tiposImovel = $empreendimento->tiposImovel;

    foreach($tiposImovel as $tipos){ 
      $preco = $tipos->preco;    
    }

    $objJsonObra = obterObra($urlBaseSmart, $token, $codigoImovel);  

    if(isset($objJsonObra->andamentoObra)){
      $obra = $objJsonObra->andamentoObra;
    }else{
      $obra = null;
    }

    $fotoImovelList = $empreendimento->fotosEmpreendimentoList;
    $marcoEstagioObra = $obra->marcoEstagioObraList;
    $caracteristicasImovel = $empreendimento->caracteristicasImovelList;
    $caracteristicasEmpreendimento = $empreendimento->caracteristicasEmpreendimentoList;
    $tabelasPreco = $empreendimento->tabelasPrecoList;
    $documentos = $empreendimento->documentosList;
    $videos = $empreendimento->videosList;  
    $videos = $empreendimento->videos;
    $enderecoCompleto = $empreendimento->endereco.", " .$empreendimento->numero. " - " .($empreendimento->nomeBairro)." - ".($empreendimento->nomeCidade)." - ".($empreendimento->siglaEstado); 
    $urlFormIndicarImovel = $urlBaseSmart."/empreendimento/carregarFormularioIndicarEmpreendimento?idEmpreendimento=".($empreendimento->codigo)."&idE=".($empresa->id)."&origemIndicacao=".$urlSite;

?>

<title><?php echo $tituloPage; ?></title>
<meta name="description" content="<?php echo $subTitulo; ?>" />
<meta name="keywords" content="<?php echo $textoTitulo." ".($empreendimento->nomeBairro).", ".$textoTipoImovel." ".($empreendimento->nomeCidade).", ".$textoPretensaoSinonimo; ?>" />
<meta name="title" content="<?php echo $tituloPage; ?>" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $urlSite; ?>css/estilo.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $urlSite; ?>css/fonts/fonts.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" />
<meta name="viewport" content="width=device-width,initial-scale=1">

<?php include "analytics-header.php"; ?>

<script src="<?php echo $urlSite; ?>js/smart-functions.js"></script>

</head>

<body>

<?php include "analytics-body.php"; ?>

<div class="geral">
	
	<div class="centerSite" style="text-align:center;font-family: Montserrat;">

   <?php  if($acessoPage == "2"){ ?>

		<div class="textMen">
			<h1>Você será redirecionado para nossos consultores, aguarde!</h1>
		</div>

    <?php }else{ ?>

    <div class="textMen">
      <h1>Você está sendo direcionado para nossa página, aguarde!</h1>
    </div>

    <?php } ?>

	</div><!-- end geralCenter -->


</div><!-- end geral -->

  
	<form method="post" action="#" id="box-form-cont-bot"  name="compose" style="display:none;">

  

		<input type="hidden" name="url_origem" value="<?php echo $urlSite; ?>" />   <!-- $urlSite.$token -->
        <input type="hidden" name="id_empresa" value="<?php echo $idEmpresaDestino; ?>" />  <!-- $empresa->id -->

        <?php if(isset($idEmpresaImovel) && $idEmpresaImovel != null){ ?>
            <input type="hidden" name="id_empresa_imovel" value="<?php echo $idEmpresaImovel; ?>" />
        <?php } ?>



            <input type="hidden" name="id_empreendimento" value="<?php echo $empreendimento->idEmpreendimento; ?>" />
            <input type="hidden" name="tipo_origem" value="3">
            <input type="hidden" name="id_outra_origem" value="5">    <!--Internet-->
            <input type="hidden" name="id_detalhe_outra_origem" value="<?php echo $idOrigem ?>"><!--SITE DA leadpage-->
            <input type="hidden" name="tipo_de_interesse" value="0">
            <input type="hidden" name="idAcao" value="<?php echo $idAcao; ?>">


			<input type="hidden" name="mensagem" id="mensagem" value="Quero ter mais informaçãos." />

			<fieldset>
				
				<label for="name">
					<input type="text" name="nome_contato" id="contatoNome" value="<?php echo $nome; ?>" required class="estilo-input-text-form-contato" placeholder="Nome:" />
				</label>                       
       
                <label for="email" class="menorCamp">
					<input type="text" name="email" id="contatoEmail" value="<?php echo $email; ?>" required class="email estilo-input-text-form-contato" placeholder="E-mail:"/>
				</label>
                
                <label for="fone" class="menorCamp-r">
					<input type="text" name="telefone" id="contatoTelefone" value="<?php echo $telefone; ?>"  required class="estilo-input-text-form-contato contatoTelefone" placeholder="Telefone:" />
				</label>	
                
				<label for="" style="clear:both; ">
					<input type="submit" name="submit" value="QUERO SABER MAIS" class="btEnviarTopBot" />					
				</label>
				
			</fieldset>
		</form>	


</body>

<script src="js/carrossel/assets/js/jquery-1.9.1.min.js"></script> 



<script type="text/javascript">




$(document).ready(function() {


    	
            var form = $("#box-form-cont-bot");
            
            var msg = $("#mensagem").val();
            if(msg != null && msg != ""){
                var msgAux = "Formulário - Proposta\n\n";
                msgAux += msg;
                msg = msgAux;
            }
            $("#mensagem").val(msg);

            var url = "<?php echo $urlBaseSmart; ?>atendimento/cadastrarContatosOnline";
            var dados = form.serializeArray();//no lugar do "formulario" fica o id do seu formulario
              
            $.ajax({ url: url, type: "POST", data: dados, complete: function (jqxhr){
               //de acordo com o retorno encaminhar sua mensagem ou redirecionar 
               if(jqxhr.status === 200){


               		form.trigger("reset");
                    var cookieName = "_CookieSmartSites";
                    var cookieValue = [];
                    var nomeContatoVar = null;
                    var emailContatoVar = null;
                    var telefoneContatoVar = null;
                    
                    var i = 0;
                    for(i = 0; i < dados.length; i++){
                        if(dados[i].name == "nome_contato" && dados[i].value != ""){
                            nomeContatoVar = dados[i].value;
                            setCookie("nomeContato", nomeContatoVar, 365);
                        }else if(dados[i].name == "email" && dados[i].value != ""){
                            emailContatoVar = dados[i].value;
                            setCookie("emailContato", emailContatoVar, 365);
                        }else if(dados[i].name == "telefone" && dados[i].value != ""){
                            telefoneContatoVar = dados[i].value;
                            setCookie("telefoneContato", telefoneContatoVar, 365);
                        }
                    }
                        
                    if(
                        (nomeContatoVar !== null && nomeContatoVar !== undefined && nomeContatoVar != "") && 
                        (
                            (emailContatoVar !== null && emailContatoVar !== undefined && emailContatoVar != "") 
                            || 
                            (telefoneContatoVar !== null && telefoneContatoVar !== undefined && telefoneContatoVar != "")
                        )
                    ){
                        cookieValue.push({
                            nomeContato: nomeContatoVar,
                            emailContato: emailContatoVar,
                            telefoneContato: telefoneContatoVar
                        });
                        setCookieSmart(cookieName, cookieValue, "<?php echo $urlSite; ?>", "<?php echo $urlBaseSmart; ?>");
                    }

                    <?php  if($acessoPage == "2"){ ?>

  				        	window.location.href = "https://wa.me/<?php echo $whatsAppFone; ?>?text=Olá, visitei o site e estou interessado no empreendimento: <?php echo $urlSite; ?>.";

                   <?php }else{ ?>

                      window.location.href = "<?php echo $urlSite; ?>";

                   <?php } ?> 


               }else{ 
                    alert("Falha ao enviar o contato!"); //aqui você poderá redirecionar para sua página de aviso de erros ex: location.href = "http://www.seudominio.com/suapaginadeerro.html"; 
               } 

            }});
         


});


</script>


</html>
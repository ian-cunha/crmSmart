<?php
header('Access-Control-Allow-Origin: *');
header("Cache-Control: max-age=31536000");
?>
<!DOCTYPE html>
	<link rel="canonical" href="https://www.smartimobiliario.com.br/crmsmart" />
<html amp itemscope="" itemtype="http://schema.org/Organization" class="no-js zsg-theme-modernized null" lang="pt"
    xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"
    xmlns:product="http://ogp.me/ns/product#">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<meta name="author" content="Marta Inteligência Imobiliária" />
<meta name="description"
    content="Você já ouviu falar de CRM imobiliário? Sabia que essapode ser a plataforma queirá facilitar a rotina do seudia a dia ou da suaempresa, e trazer aindamais sucesso nas vendas?" />
<meta property="og:title" content="CRM - Smart Imobiliário">
<meta property="og:site_name" content="CRM - Smart Imobiliário">
<meta property="og:url" content="https://www.smartimobiliario.com.br/crmsmart/">
<meta property="og:description"
    content="Você já ouviu falar de CRM imobiliário? Sabia que essapode ser a plataforma queirá facilitar a rotina do seudia a dia ou da suaempresa, e trazer aindamais sucesso nas vendas?">
<meta property="og:type" content="Product">
<meta property="og:image" content="https://www.smartimobiliario.com.br/crmsmart/imagens/logo.webphttps://icondesignliving.com.br/imagens/logo.webp">
<link rel="shortcut icon" href="https://www.smartimobiliario.com.br/crmsmart/favicon.webp" />

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "CRM - Smart Imobiliário",
    "description": "Você já ouviu falar de CRM imobiliário? Sabia que essapode ser a plataforma queirá facilitar a rotina do seudia a dia ou da suaempresa, e trazer aindamais sucesso nas vendas?",
    "url": "https://www.smartimobiliario.com.br/crmsmart",
    "logo": "https://www.smartimobiliario.com.br/crmsmart/imagens/logo.webp"
}
</script>
	<head>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
		<?php
include "variaveis.php";

$idAcao = $_GET['id_acao'];

if ($idAcao == "" || $idAcao == null) {
    $idAcao = $idLandpage;
}

$idOrigem = $_GET['id_origem'];

if ($idOrigem == "" || $idOrigem == null) {
    $idOrigem = 820;
}

	//Obtendo CookieURL
	$nomeCookieURL = null;
	if (isset($_GET['nome'])) { //Se o nome 
		if ($_GET['nome'] != '*|FNAME|*' && trim($_GET['nome']) != "") {
			$nomeCookieURL = $_GET['nome'];
		}
	}
	
	$emailCookieURL = null;
	if (isset($_GET['email'])) {
		if ($_GET['email'] != '*|EMAIL|*' && trim($_GET['email']) != "") {
			$emailCookieURL = $_GET['email'];
		}
	}
	
	$telefoneCookieURL = null;
	if (isset($_GET['telefone'])) {
		if ($_GET['telefone'] != '*|TELEFONE|*' && trim($_GET['telefone']) != "") {
			$telefoneCookieURL = $_GET['telefone'];
		}
	}


    //Obtendo CookieLocal
    $nomeCookieLocal = null;   
    if(isset($_COOKIE['nomeContato'])){ $nomeCookieLocal = $_COOKIE['nomeContato']; }
    $emailCookieLocal = null;   
    if(isset($_COOKIE['emailContato'])){ $emailCookieLocal = $_COOKIE['emailContato']; }
    $telefoneCookieLocal = null;    
    if(isset($_COOKIE['telefoneContato'])){ $telefoneCookieLocal = $_COOKIE['telefoneContato']; }


    include "includes/header.php";

    if($idAcao == "" || $idAcao == null ){
		$idAcao = $idLandpage;
	}



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
    $objJsonImovel = obterEmpreendimentoLead($urlBaseSmart, $token, $codigoImovel, $nomeContato, $emailContato, $telefoneContato, $urlOrigem, $idAcao);
  }else if($nomeCookieLocal != null) {
    $objJsonImovel = obterEmpreendimentoLead($urlBaseSmart, $token, $codigoImovel, $_COOKIE['nomeContato'], $_COOKIE['emailContato'], $_COOKIE['telefoneContato'], ($urlSite), $idAcao);
  }else{    
    $objJsonImovel = obterEmpreendimentoLead($urlBaseSmart, $token, $codigoImovel, null, null, null, $urlSite, $idAcao);
    //$objJsonImovel = obterImovelCookieNuv($urlBaseSmart, $token, $codigoImovel, null, null, null, ($urlSite.$token), $idEmpresaImovel);
  }
  //$objJsonImovel = obterImovel($urlBaseSmart, $token, $codigoImovel);

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





  if($fotosEmpreendimentoList->destaque = "1"){



    $fotoDestaque = $nome;

  }

    

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

  

  if(sizeof($fotoImovelList) > 0){ $temImagem = 1; }  

  if(sizeof($caracteristicasImovel) > 0){ $temCaracImovel = 1; }  

  if(sizeof($caracteristicasEmpreendimento) > 0){ $temCaracEmpreendimento = 1; }  

  if(sizeof($tabelasPreco) > 0){ $temTabela = 1; }  

  if(sizeof($documentos) > 0){ $temDocumento = 1; }

  if(sizeof($videos) > 0){ $temVideo = 1; }

  $enderecoCompleto = $empreendimento->endereco.", " .$empreendimento->numero. " - " .($empreendimento->nomeBairro)." - ".($empreendimento->nomeCidade)." - ".($empreendimento->siglaEstado); 


  $urlFormIndicarImovel = $urlBaseSmart."/empreendimento/carregarFormularioIndicarEmpreendimento?idEmpreendimento=".($empreendimento->codigo)."&idE=".($empresa->id)."&origemIndicacao=".$urlSite;





?>
			<title>
				<?php echo $tituloPage; ?>
			</title>
			<meta name="keywords" content="crm, smart imobiliario, ebook, o que e um crm?, crm smart, imobiliaria, como aumentar minhas vendas?, <?php echo $empreendimento->nome . " - " . $empreendimento->nomeBairro . ", " . $empreendimento->nomeCidade; ?>, apartamento, imóvel, comprar, casa, terreno, loteamento, condomínio" />
			<meta name="title" content="<?php echo $tituloPage; ?>" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta itemprop="description" content=" <?php echo $empreendimento->diferenciais; ?>" />
			<meta itemprop="image" content="<?php echo $empreendimento->urlFotoDestaque; ?>"></meta>
			<meta http-equiv="Cache-control" content="public">
	</head>

	<body>
		<?php include "analytics-body.php"; ?>
		<a href="#" class="whatsapp-button formSemCookie"><i class="bi bi-whatsapp"></i></a>
        <div id="mascara"></div>
        <?php include "css/style.php"; ?>
		<?php include "includes/topo.php"; ?>

	</body>
	<script async src="<?php echo $urlSite; ?>js/smart-functions.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i&display=swap" rel="stylesheet">
	<script src="js/jquery.inputmask.bundle.js"></script>
	<script src="js/lazyload.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
</script>

	
	<script type="text/javascript">

$(document).ready(function() {


	var topPag = $('#formBottom').offset().top;

	$('.saberMaisIn').click(function() {

	$('html, body').animate({
	    scrollTop: -topPag, // Separa condições.
	}, 300);

	});


	$(".formSemCookie").click(function(){
		var alturaTela = $(document).height();
		var larguraTela = $(window).width();

		$('#mascara').css({'width':larguraTela,'height':alturaTela});
		$('#mascara').fadeIn(300);	
		$('#mascara').fadeTo("slow");
		$('.centerFormWhats').fadeIn(300);	
	});


	$(".fecharJan, #mascara").click(function(){
		
		$('#mascara').fadeOut();	
		$('.centerFormWhats').fadeOut();	

	});


	$(":input").inputmask();
		$(".contatoTelefone").inputmask({
			"mask": ["(99) 9999-9999", "(99) 99999-9999", ], keepStatic: true
		});


    $("#box-form-cont-bot").submit(function(e){
    
            e.preventDefault();

             $(".mensagemFormBot").fadeIn();

            var form = $(this);
            
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


					window.location.href = "<?php echo $urlSite; ?>cadastro-lead.php";

               }else{ 
                    alert("Falha ao enviar o contato!"); //aqui você poderá redirecionar para sua página de aviso de erros ex: location.href = "http://www.seudominio.com/suapaginadeerro.html"; 
               } 
            }});
            return false;
        });


    $('.formComCookie').click(function(){

    	$('.btEnviarTopBotWhats').trigger('click');
    	

    });


    $("#box-form-cont-whats").submit(function(e){
				
			e.preventDefault();

            var form = $(this);
            
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


				    window.location.href = "<?php echo $urlSite; ?>cadastro-lead.php?whatsApp=1";


               }else{ 
                  	window.location.href = "<?php echo $urlSite; ?>cadastro-lead.php?whatsApp=1";
               } 
            }});
            return false;
        });




        $("#box-form-cont").submit(function(e){
                e.preventDefault();


          		 $(".mensagemFormBot").fadeIn();
         

                var form = $(this);
                
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


					    window.location.href = "<?php echo $urlSite; ?>cadastro-lead.php";


                   }else{ 
                        alert("Falha ao enviar o contato!"); //aqui você poderá redirecionar para sua página de aviso de erros ex: location.href = "http://www.seudominio.com/suapaginadeerro.html"; 
                   } 
                }});
                return false;
            });






		  var owl = $("#owl-demo");

		  owl.owlCarousel({

		    
		    itemsCustom : [
		      [0, 1],
		      [450, 1],
		      [600, 1],
		      [700, 1],
		      [1000, 1],
		      [1200, 1],
		      [1400, 1],
		      [1600, 1]
		    ],
		    navigation : true,
		    autoPlay : false

		  });


		  var owl2 = $("#owl-demo2");

		  owl2.owlCarousel({

		    
		    itemsCustom : [
		      [0, 1],
		      [450, 1],
		      [600, 1],
		      [700, 1],
		      [1000, 1],
		      [1200, 1],
		      [1400, 1],
		      [1600, 1]
		    ],
		    navigation : true,
		    autoPlay : false

		  });




});

  getCookieSmart('_CookieSmartSites', '<?php echo $tokenAcessoCookie; ?>', '<?php echo $urlBaseSemBarra; ?>', '<?php echo $urlBaseSmart; ?>', '<?php echo $nomeCookieLocal; ?>', '<?php echo $emailCookieLocal; ?>', '<?php echo $telefoneCookieLocal; ?>', '<?php echo $nomeCookieURL; ?>', '<?php echo $emailCookieURL; ?>', '<?php echo $telefoneCookieURL; ?>', "contatoNome", "contatoEmail", "contatoTelefone"); 





</script>

	</html>
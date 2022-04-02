<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<?php
	
	$whatsApp = $_GET['whatsApp'];

 	include "variaveis.php"; 

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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<?php include "analytics-header.php"; ?>

</head>

<body>


<?php include "analytics-body.php"; ?>


<div class="geral">

	
	<div class="centerSite" style="text-align:center;font-family: Montserrat;margin-top:150px;">

	<?php if($whatsApp != "1"){ ?>
		<div class="textMen">

			<h1>Obrigado por se cadastrar!</h1>
			<h2>Em breve entraremos em contato.</h2>				
			
		</div>

	</div><!-- end geralCenter -->

	<div class="btVoltCent" style="text-align:center;font-family: Montserrat;"> 
		<div class="btVoltar"><a class="btn btn-dark" href="<?php echo $urlSite; ?>"><i class="bi bi-arrow-left-circle"></i> Voltar</a></div>
	</div>

	<?php }else{ ?>

		<div class="textMen">
			
			<h1>Você será redirecionado para nossos consultores, aguarde!</h1>
			
		</div>

	</div><!-- end geralCenter -->

	<?php } ?>
			

</div><!-- end geral -->


</body>


<script src="js/carrossel/assets/js/jquery-1.9.1.min.js"></script> 

<script type="text/javascript">

	$(document).ready(function() {

		
		<?php if($whatsApp != 1){ ?>

			setTimeout(function(){ 			

				window.location.href = "<?php echo $urlSite; ?>"; 

			}, 4000);

		<?php }else{ ?>

			  window.location.href = "https://wa.me/<?php echo $whatsAppFone; ?>?text=Olá, visitei o site e estou interessado no empreendimento: <?php echo $urlSite; ?>.";

		<?php } ?>

	});
</script>


</html>
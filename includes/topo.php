<!-- Cookies -->
<div class="alert text-center cookiealert" role="alert">
    <b>Você gosta de cookies?</b> &#x1F36A; Usamos cookies para garantir que você tenha a melhor experiência em nosso site. <a class="cor-2" href="https://deixacommarta.com.br/privacidade.php" target="_blank">Saber mais</a>

    <button type="button" class="btn btn-primary bg-1 btn-sm acceptcookies">
        Eu aceito
    </button>
</div>

<!-- JS COOKIES -->
<script>
    for (var i = 1; i <= 150; i++)
        document.querySelector("#fillme").innerHTML += "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
</script>

<!-- COOKIES Style e JS Link -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="imagens/logo.svg" width="100" height="24" class="img-fluid" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#1">Perguntas frequentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#2">Use e abuse do SMART</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#3">Precisa de ajuda?</a>
        </li>
      </ul>
      <form class="d-flex">
      <a class="btn bg-2 text-light nav-link rounded-pill" role="button" target="_blank" href="https://www.smartimobiliario.com.br">Ir para o Smart <i class="bi bi-arrow-right-short"></i></a>
      </form>
    </div>
  </div>
</nav>

<!-- Topo -->
<main class="background">

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <i style="font-size:100px;" class="bi bi-server text-light"></i><br>
        <h1 class="animate__crm display-5 fw-bold lh-1 mb-3 text-light">O que é um CRM?</h1>
        <p class="col-lg-10 fs-3 text-light">COMO AUMENTAR SUAS VENDAS USANDO O SMART IMOBILIÁRIO.</p>
        <p class="col-lg-10 fs-9 text-light texto-centro">Você já ouviu falar de CRM imobiliário? Sabia que essa pode ser a plataforma que irá facilitar a rotina do seu dia a dia ou da sua empresa, e trazer ainda mais sucesso nas vendas?</p>
      </div>

    <!-- Form -->
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="post" action="#" id="box-form-cont" name="formContato" class="p-4 p-md-5 border rounded-3 bg-light">
        <h3 class="text-center fs-4 cor-2">Baixe aqui seu ebook e entenda como um CRM pode lhe ajudar a vender mais!</h3>
        <h4 class="text-center fs-6">Cadastre-se abaixo para receber:</h4>
          
        <input type="hidden" name="url_origem" value="<?php echo $urlSite; ?>" />
				<input type="hidden" name="id_empresa" value="<?php echo $idEmpresaDestino; ?>" />
				<input type="hidden" name="id_empreendimento" value="<?php echo $codigoImovel; ?>" />
				<input type="hidden" name="tipo_origem" value="3" />
				<input type="hidden" name="id_outra_origem" value="5" />
				<!--Internet-->
				<input type="hidden" name="id_detalhe_outra_origem" value="<?php echo $idOrigem; ?>" />
				<!--SITE DA EMPRESA-->
				<input type="hidden" name="tipo_de_interesse" value="0" />
				<input type="hidden" name="idAcao" value="<?php echo $idAcao; ?>" />
				<input type="hidden" name="mensagem" id="mensagem" value="Quero ter mais informações." />

        <div class="form-floating mb-3">
            <input type="text" name="nome_contato" id="contatoNome" required class="form-control" <?php if(isset($_COOKIE['nomeContato'])) { ?>value="<?php echo $_COOKIE['nomeContato']; ?>"<?php } ?> placeholder="Nome">
            <label for="name">Nome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="email" id="contatoEmail" required class="form-control" <?php if(isset($_COOKIE['emailContato'])) { ?>value="<?php echo $_COOKIE['emailContato']; ?>"<?php } ?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="nome@exemplo.com">
            <label for="email">E-mail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" name="telefone" id="contatoTelefone" required class="telefone form-control" <?php if(isset($_COOKIE['telefoneContato'])) { ?>value="<?php echo $_COOKIE['telefoneContato']; ?>"<?php } ?> placeholder="(00)0000-0000">
            <label for="fone">Telefone</label>
          </div>
          <button class="w-100 btn btn-lg btn-dark bg-gradient" type="submit" name="submit">Receber agora <i class="bi bi-download"></i></button>
          <hr class="my-4">
          <small class="text-muted"><i class="bi bi-lock"></i> Garantimos a privacidade de seus dados</small>
        </form>
      </div>
    </div>
  </div>

</div>

<!-- Dúvidas -->
<div class="container d-flex flex-sm-row flex-column">

<div class="container p-3" id="1">

<h2 class="pt-3 pb-3 text-light">Perguntas frequentes</h2>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Pergunta #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, reprehenderit, at aperiam, exercitationem quas omnis totam inventore non itaque cupiditate assumenda adipisci cumque neque laudantium modi tenetur quam quidem quasi.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Pergunta #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, reprehenderit, at aperiam, exercitationem quas omnis totam inventore non itaque cupiditate assumenda adipisci cumque neque laudantium modi tenetur quam quidem quasi.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Pergunta #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, reprehenderit, at aperiam, exercitationem quas omnis totam inventore non itaque cupiditate assumenda adipisci cumque neque laudantium modi tenetur quam quidem quasi.</div>
    </div>
  </div>
</div>

</div>

<div class="container"><img class="img-fluid" src="<?php echo $urlSite; ?>imagens/img1.webp" alt="Imagem"></div>

</div>
<!-- End Dúvidas -->

<!-- Use e abuse do Smart -->
<div id="2" class="container pb-3">
  <h2 class="pt-3 pb-3 text-light">Use e abuse do <b>SMART</b></h2>
  <ul class="list-group list-group-flush">
  <li class="list-group-item background text-light">Crie seu site imobiliário personalizado, com sua marca, e atenda clientes por Whatsapp em tempo real.</li>
  <li class="list-group-item background text-light">Não perca tempo cadastrando os imóveis em cada mídia.</li>
  <li class="list-group-item background text-light">A publicação é automática nos principais portais imobiliários do Brasil.</li>
  <li class="list-group-item background text-light">Notificações em tempo real de contatos interessados em seus imóveis.</li>
  <li class="list-group-item background text-light">Faça negócios em parceria com outros corretores e imobiliárias.</li>
  <li class="list-group-item background text-light">Entenda o comportamento dos clientes, antes mesmo de entrar em contato com eles, através da nossa inteligência imobiliária.</li>
  <li class="list-group-item background text-light">Não perca de vista seus clientes do momento e nem aqueles que devem fechar negócios no futuro.</li>
  <li class="list-group-item background text-light">Organize suas atividades e torne sua vida mais fácil. Receba alertas para cada atividade do dia e ganhe tempo para focar nas vendas.</li>
  <li class="list-group-item background text-light">Contato direto e ágil com os clientes (telefone, whatsapp e email).</li>
  <li class="list-group-item background text-light">Classifique os negócios por potencial de compra.</li>
  <li class="list-group-item background text-light">Tenha previsão de quantas vendas você pode fazer até o final do mês.</li>
  <li class="list-group-item background text-light">Tenha acesso a milhares de unidades à venda, através da Rede de Oportunidades Smart.</li>
  <li class="list-group-item background text-light">Gerenciamento de equipes e da distribuição de leads para times de corretores imobiliários pelo sistema de distruição aleatório (roleta).</li>
  <li class="list-group-item background text-light">Construtoras acompanham em tempo real os corretores que mais vendem e atendem melhor.</li>
  <li class="list-group-item background text-light">Reduza custos. Smart é o CRM com melhor custo-benefício do mercado.</li>
  <li class="list-group-item background text-light">Utilize as ferramentas disponíveis no Smart com rapidez e simplicidade, contando com apoio da equipe de Sucesso do Cliente.</li>
</ul>
</div>
<!-- End Use e abuse do Smart -->

<!-- Ajuda -->
<div id="3" class="container d-flex flex-sm-row flex-column">
  <div class="container"><i style="font-size:150px;" class="bi bi-headset pt-3 text-light"></i><h2 class="pb-3 fs-2 text-light">Bateu aquela dúvida e precisa da ajuda do suporte ou do atendimento? <b>Pronto!</b></h2>
  <p class="fs-5 justify text-light">A equipe Smart está à disposição. É possível mandar sua sugestão ou dúvida pelo Whatsapp ou nas redes sociais. O trabalho da gente é fazer com que você possa trabalhar mais e melhor.</p>
  <a class="btn bg-1 text-light formSemCookie mb-5 rounded-pill" href="#">Fale com a gente <i class="bi bi-chat-dots"></i></a></div>
  <div class="container mt-2"><img class="img-fluid" src="<?php echo $urlSite; ?>imagens/img2.webp" alt="Imagem"></div>
</div>
<!-- End Ajuda -->

</main>
<!-- End Main -->

<!-- Footer -->
<footer class="background-footer">
  <div class="container footer-div">
  <div class="w-100 text-light">
    <div>
      <a class="cor-2 fs-3" href="https://www.instagram.com/smart.imobiliario/" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram p-1"></i></a>
      <a class="cor-2 fs-3" href="https://www.facebook.com/smartimobiliario/" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook p-1"></i></a></div>
    </div>
    <div class="row">
      <div class="w-100 p-3"><img class="logoMarta" src="<?php echo $urlSite; ?>imagens/logo.svg" alt="Marta Logo"></div>
      <p class="text-dark">© 2022 - smartimobiliario.com.br</p>
    </div>
  </div>
</footer>
<!-- End Footer -->

<!-- Form Whatsapp -->
<div class="centerFormWhats">
	<div class="geralFormWhats" style="margin-top:100px;">
		<div class="formTopLeadBottomWhats" style="background-color:white;border-radius:10px;" id="formBottom">
			<div class="fecharJan" style="width:25px;padding:5px;margin:10px;"> <a href="javascript:void(0);"><i class="cor-wpp bi bi-x-circle-fill"></i></a> </div>
			<div class="mensagemFormBotWhats">Carregando...</div>
			<form method="post" action="#" id="box-form-cont-whats" name="formContato" class=" p-md-5 border rounded-3 bg-light p-4">
				<h3 class="text-center fs-2 cor-wpp"><i class="bi bi-whatsapp"></i> FALE CONOSCO</h3>
				<h4 class="text-center fs-6">Preencha os dados para conversar:</h4>
          
        <input type="hidden" name="url_origem" value="<?php echo $urlSite; ?>" />
				<input type="hidden" name="id_empresa" value="<?php echo $idEmpresaDestino; ?>" />
				<input type="hidden" name="id_empreendimento" value="<?php echo $codigoImovel; ?>" />
				<input type="hidden" name="tipo_origem" value="3" />
				<input type="hidden" name="id_outra_origem" value="5" />
				<!--Internet-->
				<input type="hidden" name="id_detalhe_outra_origem" value="<?php echo $idOrigem; ?>" />
				<!--SITE DA EMPRESA-->
				<input type="hidden" name="tipo_de_interesse" value="0" />
				<input type="hidden" name="idAcao" value="<?php echo $idAcao; ?>" />
				<input type="hidden" name="mensagem" id="mensagem" value="Quero ter mais informações." />

        <div class="form-floating mb-3">
            <input type="text" name="nome_contato" id="contatoNome" required class="form-control" <?php if(isset($_COOKIE['nomeContato'])) { ?>value="<?php echo $_COOKIE['nomeContato']; ?>"<?php } ?> placeholder="Nome">
            <label for="name">Nome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="email" id="contatoEmail" required class="form-control" <?php if(isset($_COOKIE['emailContato'])) { ?>value="<?php echo $_COOKIE['emailContato']; ?>"<?php } ?> pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="nome@exemplo.com">
            <label for="email">E-mail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" name="telefone" id="contatoTelefone" required class="telefone form-control" <?php if(isset($_COOKIE['telefoneContato'])) { ?>value="<?php echo $_COOKIE['telefoneContato']; ?>"<?php } ?> placeholder="(00)0000-0000">
            <label for="fone">Telefone</label>
          </div>
          <button class="w-100 btn btn-lg btn-dark bg-wpp" type="submit" name="submit">Falar agora <i class="bi bi-chat-dots"></i></button>
          <hr class="my-4">
          <small class="text-muted"><i class="bi bi-lock"></i> Garantimos a privacidade de seus dados</small>
        </form>
        </div>
<!-- end formTopLeadBottom -->
</div>
<!-- end geralFormBottomIn -->
</div>
<!-- end centerFormWhats -->
</div>
<!--END Whatsapp -->
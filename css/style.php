<style amp-custom>

.animate__crm {
	display: inline-block;
	margin: 0 0.5rem;
	animation: tada;
	animation-duration: 2s;
}

@media screen and (max-width: 600px) {
	.justify {
		text-align: justify;
	}
}

@media screen and (max-width: 600px) {
	.center {
		text-align: center;
	}
}

@media screen and (max-width: 600px) {
	.texto-org {
		text-align: center;
		font-size:1.2em !important;
	}
}

.logo-principal {
	max-width:120px;
}

@media screen and (max-width: 600px) {
	.logo-principal {
	width: 270px;
}
}

@media screen and (max-width: 600px) {
	.texto-centro {
		text-align: justify;
	}
}
@media screen and (max-width: 600px) {
  #linha-horizontal {
  width: 300px;
  margin: auto;
  border: 1px solid black;
  text-align:center;
  margin-top:10px;
  margin-bottom:10px;
}
}

@media screen and (max-width: 600px) {
	ul.texto-ul {
		margin-left: 30px;
	}
}

.mapa {
	margin: auto;
	text-align: center;
}

.diferenciais {
	margin: auto;
	text-align: center;
}

.cor-1 {
	color: #4D18A3;
}

.cor-wpp {
	color: #075E54;
}

.bg-1 {
	background-color: #4D18A3;
}

.bg-1:hover {
	background-color: #ED5B00;
}

.bg-gradient {
	animation: changeBackgroundColor 15s infinite;
}

.bg-gradient:hover {
	animation: changeBackgroundColor 15s infinite;
}

@keyframes changeBackgroundColor {
  0% {
    background-color: #FF5A2D;
  }
  50% {
    background-color: #5B00BB;
  }
  100% {
    background-color: #FFAA03;
  }
}

.bg-wpp {
	background-color: #075E54;
}

.bg-wpp:hover {
	background-color: #25D366;
}

.cor-2 {
	color: #ED5B00;
}

.bg-2 {
	background-color: #ED5B00;
}

.bg-2:hover {
	background-color: #4D18A3;
}

button.btn {
	border: 0px solid transparent;
}

.background {
	background: rgb(255,90,45);
	background: linear-gradient(90deg, rgba(255,90,45,1) 0%, rgba(91,0,187,1) 100%);
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

.background-2 {
	background-color: white;
	margin-top: 50px;
	opacity: 0.9;
}

.background-footer {
	background-color: white;
}

.logoMarta {
	width: 100px;
}

.footer-div {
	padding: 20px;
	margin: auto;
	text-align: center;
}

.botao-cont {
	padding: 15px;
	background: #075571;
	color: #c2a178;
	font-weight: 600;
	font-size: 17px;
	font-family: Montserrat;
	font-style: normal;
	box-sizing: border-box;
	border-radius: 20px;
}

@media screen and (max-width: 600px) {
	.botao-cont {
		padding: 15px;
		background: #075571;
		color: #c2a178;
		font-weight: 600;
		font-size: 15px;
		font-family: Montserrat;
		font-style: normal;
		box-sizing: border-box;
		border-radius: 20px;
	}
}

.botao-cont:hover {
	padding: 15px;
	background: #c2a178;
	color: #075571;
}

.grid-dif {
	box-sizing: border-box;
	background-image: url('imagens/difbann.webp');
	background-size: cover;
	background-repeat: no-repeat;
	padding-top: 50px;
	padding-bottom: 50px;
	padding-top: 130px;
	padding-bottom: 50px;
}

.grid-font {
	margin: auto;
	padding: 5px;
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	justify-items: center;
	align-items: center;
}

@media screen and (max-width: 600px) {
	.grid-font {
		margin: auto;
		padding: 5px;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		justify-items: center;
		align-items: center;
	}
}

.dif-icon {
	padding: 10px;
	color: white;
	font-family: Montserrat;
	font-weight: 600;
	font-style: normal;
	font-size: 0.9em;
	text-align: center;
}

@media screen and (max-width: 768px) {
	.dif-icon {
		padding: 10px;
		color: white;
		font-family: Montserrat;
		font-weight: 600;
		font-style: normal;
		font-size: 0.8em;
		text-align: center;
	}
}

.img-icon {
	margin: 8px;
}

.whatsapp-button {
	position: fixed;
	bottom: 15px;
	right: 15px;
	z-index: 99;
	background-color: #25d366;
	border-radius: 50px;
	color: #ffffff;
	text-decoration: none;
	width: 50px;
	height: 50px;
	font-size: 30px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	-webkit-box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
	-moz-box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
	box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
	animation: effect 5s infinite ease-in;
}

.whatsapp-button:hover {
	background-color: white;
	color: #25d366;
}

#mascara{
    width:100%;
    background:rgba(0,0,0,.8);
    position:fixed;
    display:none;
    z-index:100;
    left:0;
    top:0
}

.centerFormWhats{
    margin:0 auto;
    width:100%;
    max-width:300px;
    position:relative;
    display:none}

.geralFormWhats{
    float:left;
    width:100%;
    margin:2% 0 0 0;
    position:fixed;
    z-index:1000;
    z-index:1000;
    left:0;
    top:0}

.formTopLeadBottomWhats{
    margin:0 auto;
    width:50%;
    max-width:400px;
    background:#f2f2f2}

.fecharJan{
    float:right;
    margin:0 0 2%}

.titFomTop-botWhats{
    float:left;width:100%;
    font-weight:700;
    font-size:28px;
    color:#414141;
    text-align:center;
    margin:1% 0 0 0}

.mensagemFormBotWhats{
    float:left;
    width:95%;
    background-color:#ccc;
    font-size:15px;
    padding:2.5% 2% 2.5% 2%;
    color:#fff;
    border-radius:8px;
    background:#6abb56;
    text-align:center;
    font-weight:500;
    margin:2% 0 0 0;
    display:none}

@media (max-width:725px){
    .formTopLeadBottomWhats{
        margin:4% auto;width:100%;
        max-width:400px;
        background:#f2f2f2
    }
}
    
    .titFomTop-botWhats{
        float:left;width:100%;
        font-weight:700;
        font-size:21px;
        color:#414141;
        text-align:center;
        margin:3% 0 0 0
    }

.fecharJan{
    float:right;
    margin:0 0 2%
}

#mascara{
    width:100%;
    background:rgba(0,0,0,.8);
    position:fixed;
    display:none;
    z-index:100;
    left:0;
    top:0
}
</style>
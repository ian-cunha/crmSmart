var ck = null;
var tokenCliente = null;

function setCookieSmartTokenCliente(token, urlOrigem, urlOrigemSmart){
	jQuery.ajax({					
		type: "POST",					
		url: urlOrigemSmart+"gerarCookie",					
		data: {'cookieName': '_CookieSmartTokenCliente', 'cookieValue': token, 'origem': urlOrigem},					
		dataType: 'json',					
		xhrFields: { withCredentials: true },
		crossDomain: true,					
		success: function(retorno) {
			console.log("setCookieSmartTokenCliente OK");
			tokenCliente = token;
		},					
		error: function(jqXHR, textStatus, errorMessage) {						
			console.log("setCookieSmartTokenCliente error: "+errorMessage);
		}				

	});			

}

function getCookieSmartTokenCliente(tokenAcessoCookie, newToken, urlOrigem, urlOrigemSmart){
	
	jQuery.ajax({
		type: "GET",					
		url: urlOrigemSmart+"recuperarCookie",
		data: {
			'cookieName': '_CookieSmartTokenCliente',
			'tokenAcessoCookie': tokenAcessoCookie,
			'origem': urlOrigem
		},
		dataType: 'json',					
		xhrFields: { withCredentials: true },
		crossDomain: true,
		success: function(retorno) {
			tokenCliente = retorno.cookieValue;
			console.log("tokenCliente recuperado: "+tokenCliente);
			if(tokenCliente == null){
				setCookieSmartTokenCliente(newToken, urlOrigem, urlOrigemSmart);
			}
		}
	});
	
	return false;
}

function getCookieSmart(cookieName, tokenAcessoCookie, urlOrigem, urlOrigemSmart, nomeLocal, emailLocal, telefoneLocal, nomeUrl, emailUrl, telefoneUrl, idInputNomeContato, idInputEmailContato, idInputTelefoneContato){

	//$.ajax({
	jQuery.ajax({

		type: "GET",					

		url: urlOrigemSmart+"recuperarCookie",

		data: {'cookieName': cookieName,'tokenAcessoCookie': tokenAcessoCookie,'origem': urlOrigem},

		dataType: 'json',					

		xhrFields: { withCredentials: true },

		crossDomain: true,

		success: function(retorno) {

			var cookieMap = JSON.parse(retorno.cookieValue);

			if(cookieMap != null){

				ck = cookieMap[0];

				var nomeContatoGeral = ck.nomeContato;

				var emailContatoGeral = ck.emailContato;

				var telefoneContatoGeral = ck.telefoneContato;

				

				if(emailUrl == null || emailUrl =="") {

					if(nomeContatoGeral !== null && nomeContatoGeral !== undefined) {setCookie("nomeContato", nomeContatoGeral, 365);}

					if(emailContatoGeral !== null && emailContatoGeral !== undefined) {setCookie("emailContato", emailContatoGeral, 365);}

					if(telefoneContatoGeral !== null && telefoneContatoGeral !== undefined) {setCookie("telefoneContato", telefoneContatoGeral, 365);}

					//Atualizando formulário

					if(idInputNomeContato != null && idInputNomeContato != ""){$("#"+idInputNomeContato).val(nomeContatoGeral);}

					if(idInputEmailContato != null && idInputEmailContato != ""){$("#"+idInputEmailContato).val(emailContatoGeral);}

					if(idInputTelefoneContato != null && idInputTelefoneContato != ""){$("#"+idInputTelefoneContato).val(telefoneContatoGeral);}

				}else{

					//Setando cookie Local

					var emailContato = emailUrl;

					var nomeContato = nomeUrl;

					var telefoneContato = telefoneUrl;

//console.log("Tem Email URL :: "+emailContato);

					if(nomeContato == null || nomeContato == "") {

//console.log("Ñ tem Nome URL!!");

						if(nomeContatoGeral != null && nomeContatoGeral != ""){

							nomeContato = nomeContatoGeral;

//console.log("Ñ tem Nome URl // TEM Geral :: "+nomeContato);

						}else{

							nomeContato = nomeLocal;

//console.log("Ñ tem Nome URl // Ñ TEM Geral // Talvez tenha Local :: "+nomeContato);

						}

					}else{

//console.log("Tem Nome URL :: "+nomeContato);

					}

					

					if(telefoneContato == null || telefoneContato == "") {

						if(telefoneContatoGeral != null && telefoneContatoGeral != ""){

							telefoneContato = telefoneContatoGeral;

//console.log("Ñ tem Telefone URl // TEM Geral :: "+telefoneContato);

						}else{

							telefoneContato = telefoneLocal;

//console.log("Ñ tem Telefone URl // Ñ TEM Geral // Talvez tenha Local :: "+telefoneContato);

						}

					}



					setCookie("nomeContato", nomeContato, 365);

					setCookie("emailContato", emailContato, 365);

					setCookie("telefoneContato", telefoneContato, 365);

				

					//Setando cookie Geral

					var cookieName = "_CookieSmartSites";

					var cookieValue = [];

					var nomeContatoVar = nomeContato;

					var emailContatoVar = emailContato;

					var telefoneContatoVar = telefoneContato;

					cookieValue.push({

						nomeContato: nomeContatoVar,

						emailContato: emailContatoVar,

						telefoneContato: telefoneContatoVar

					});

					setCookieSmart(cookieName, cookieValue, urlOrigem, urlOrigemSmart);

					//Atualizando formulário

					if(idInputNomeContato != null && idInputNomeContato != ""){$("#"+idInputNomeContato).val(nomeContato);}

					if(idInputEmailContato != null && idInputEmailContato != ""){$("#"+idInputEmailContato).val(emailContato);}

					if(idInputTelefoneContato != null && idInputTelefoneContato != ""){$("#"+idInputTelefoneContato).val(telefoneContato);}

				}

			}else{

//console.log('N tem geral!!');

				if(emailUrl == null || emailUrl == "") {

					if(emailLocal != null && emailLocal != "") {

//console.log('Tem local!!');

						var cookieName = "_CookieSmartSites";

						var cookieValue = [];

						var emailContatoVar = emailLocal;

						var nomeContatoVar = "";

						if(nomeLocal != null && nomeLocal != ""){ nomeContatoVar = nomeLocal; }

						var telefoneContatoVar = "";

						if(telefoneLocal != null && telefoneLocal != ""){ telefoneContatoVar = telefoneLocal; }



						cookieValue.push({

							nomeContato: nomeContatoVar,

							emailContato: emailContatoVar,

							telefoneContato: telefoneContatoVar

						});

						setCookieSmart(cookieName, cookieValue, urlOrigem, urlOrigemSmart);

						//Atualizando formulário

						if(idInputNomeContato != null && idInputNomeContato != ""){$("#"+idInputNomeContato).val(nomeContatoVar);}

						if(idInputEmailContato != null && idInputEmailContato != ""){$("#"+idInputEmailContato).val(emailContatoVar);}

						if(idInputTelefoneContato != null && idInputTelefoneContato != ""){$("#"+idInputTelefoneContato).val(telefoneContatoVar);}

					}

				}else{

					//Setando cookie Local

					var emailContato = emailUrl;

					if(emailContato != null && emailContato !== undefined && emailContato != "") {setCookie("emailContato", emailContato, 365);}

					var nomeContato = null;

					var telefoneContato = null;



					if(nomeUrl != null && nomeUrl != "") {

						nomeContato = nomeUrl;

						if(nomeContato !== null && nomeContato !== undefined && nomeContato != "") {setCookie("nomeContato", nomeContato, 365);}

					}else if(nomeLocal != null && nomeLocal != "") {

						nomeContato = nomeLocal;

					}



					if(telefoneUrl != null && telefoneUrl != "") {

						telefoneContato = telefoneUrl;

						if(telefoneContato !== null && telefoneContato !== undefined && telefoneContato != "") {setCookie("telefoneContato", telefoneContato, 365);}

					}else if(telefoneLocal != null && telefoneLocal != "") {

						telefoneContato = telefoneLocal;

					}



					//Setando cookie Geral

					var cookieName = "_CookieSmartSites";

					var cookieValue = [];

					var nomeContatoVar = nomeContato;

					var emailContatoVar = emailContato;

					var telefoneContatoVar = telefoneContato;

					cookieValue.push({

						nomeContato: nomeContatoVar,

						emailContato: emailContatoVar,

						telefoneContato: telefoneContatoVar

					});

					setCookieSmart(cookieName, cookieValue, urlOrigem, urlOrigemSmart);

					//Atualizando formulário

					if(idInputNomeContato != null && idInputNomeContato != ""){$("#"+idInputNomeContato).val(nomeContato);}

					if(idInputEmailContato != null && idInputEmailContato != ""){$("#"+idInputEmailContato).val(emailContato);}

					if(idInputTelefoneContato != null && idInputTelefoneContato != ""){$("#"+idInputTelefoneContato).val(telefoneContato);}

				}

			}

			return false;

		},

		error: function(jqXHR, textStatus, errorMessage) {
console.log("Teste Erro SMART-FUNCTION");

			console.log("getCookie error: "+errorMessage);			

		}				

	});

	return false;

}



function setCookieSmart(cookieName, cookieMap, urlOrigem, urlOrigemSmart){

	var cookieValue = JSON.stringify(cookieMap);

	$.ajax({					

		type: "POST",					

		url: urlOrigemSmart+"gerarCookie",					

		data: {'cookieName': cookieName,'cookieValue': cookieValue,'origem': urlOrigem},					

		dataType: 'json',					

		xhrFields: { withCredentials: true },

		crossDomain: true,					

		success: function(retorno) {

			

		},					

		error: function(jqXHR, textStatus, errorMessage) {						

			console.log("setCookie error: "+errorMessage);					

		}				

	});			

}



//Obs.: Verificar se está em outra parte do código e retirar.
function setCookie(cookiename, cookievalue, exdays) {

    var d = new Date();

    d.setTime(d.getTime() + (exdays*24*60*60*1000));

    var expires = "expires="+ d.toUTCString();

    document.cookie = cookiename + "=" + cookievalue + ";" + expires + ";path=/";

}



function isEmail(email) {

  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  return re.test(email);

}
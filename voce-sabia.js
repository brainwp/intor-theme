<!--
function random(limit) { 
   today = new Date(); 
   return(today.getSeconds() % limit); 
} 

function comecar() {
	contador = setInterval("vai()", 7500);
}
 
function vai()
{	
	tag = new Array(11);
	tag[0] = "A &aacute;rea dos alv&eacute;olos pulmonares cobre uma superf&iacute;cie equivalente a metade das dimens&otilde;es de uma quadra de t&ecirc;nis, aproximadamente 100m&sup2;.";
	tag[1] = "Espirometria &eacute; um exame que avalia os volumes pulmonares e fluxos a&eacute;reos, e serve para identificar anormalidades pulmonares importantes como asma e enfisema pulmonar.";
	tag[2] = "Aproximadamente 90% dos alv&eacute;olos s&atilde;o formados ap&oacute;s o nascimento, mas este desenvolvimento p&aacute;ra por volta dos 8 anos de idade.";
	tag[3] = "O pulm&atilde;o direito &eacute; respons&aacute;vel por 55% e o pulm&atilde;o esquerdo por 45% do volume pulmonar total. Esta diferen&ccedil;a se explica pelo volume que a presen&ccedil;a do cora&ccedil;&atilde;o do lado esquerdo do t&oacute;rax representa.";
	tag[4] = "A dose de radia&ccedil;&atilde;o de uma radiografia de t&oacute;rax &eacute; semelhante &agrave; radia&ccedil;&atilde;o c&oacute;smica e aleat&oacute;ria que uma pessoa recebe durante 1 m&ecirc;s.";
	tag[5] = "A tomografia computadorizada de t&oacute;rax gera 100 vezes mais radia&ccedil;&atilde;o que uma radiografia de t&oacute;rax.";
	tag[6] = "O fumo est&aacute; associado n&atilde;o s&oacute; ao c&acirc;ncer de pulm&atilde;o, mas tamb&eacute;m aos c&acirc;nceres de l&aacutebio, es&ocirc;fago, pleura, boca, faringe, laringe, bexiga, est&ocirc;mago, intestino grosso, mama, p&ecirc;nis e p&acirc;ncreas.";
	tag[7] = "O pulm&atilde;o n&atilde;o provoca dor no peito ou nas costas, j&aacute; que n&atilde;o tem fibras nervosas respons&aacute;veis pela sensa&ccedil;&atilde;o da dor. S&atilde;o as complica&ccedil;&otilde;es pleurais de uma doen&ccedil;a pulmonar que provocam dor tor&aacute;cica.";
	tag[8] = "H&aacute; cerca de 80.000 casos novos de tuberculose por ano no Brasil, perto de 6.000 &oacute;bitos anuais e 50 milh&otilde;es de brasileiros infectados pela doen&ccedil;a segundo a Organiza&ccedil;&atilde;o Mundial de Sa&uacute;de e o Minist&eacute;rio da Sa&uacute;de.";
	tag[9] = "O c&acirc;ncer de pulm&atilde;o est&aacute; relacionado ao fumo em at&eacute; 90% dos casos e &eacute; o c&acirc;ncer que mais mata no mundo. Entre as mulheres brasileiras &eacute; o tumor que mais tem tido crescimento.";
	tag[10] = "Uma sess&atilde;o de narguile de uma hora corresponde a fumar 100 cigarros. E este tipo de fumo cont&eacute;m as mesmas subst&acirc;ncias nocivas do tabaco (nicotina, alcatr&atilde;o e mon&oacute;xido de carbono).";

	document.getElementById("conteudo-voce-sabia").innerHTML = tag[random(11)];	
}
//-->
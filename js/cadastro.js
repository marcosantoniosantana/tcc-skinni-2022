

let termosTxt = document.querySelector('.descricao > a');
termosTxt.addEventListener('click', ()=>{
	console.log("Termos de uso clicados");
	const termosPage = document.createElement('div');
	termosPage.classList = 'tela-termos';

	const header = document.createElement('div');
	header.classList = "itens";

	const texto = document.createElement('h2');
	texto.innerHTML = "Termos de uso";

	const iconX = document.createElement('i')
	iconX.classList = "fas fa-times";

	const termosCaixa = document.createElement('div')
	termosCaixa.classList = "termos-caixa";

	const termosTexto = document.createElement('p');
	termosTexto.innerHTML = `1. INTRODUÇÃO

1.1   Bem-vindo à plataforma Shopee (o "Site"). Por favor, leia os Termos de Serviço atenciosamente antes de usar este Site ou criar uma conta na Shopee ("Conta") para que você esteja ciente dos seus direitos e deveres legais de acordo com a SHPS Tecnologia e Serviços Ltda (“Shopee”), inscrita no CNPJ sob nº 35.635.824/0001-12. e suas afiliadas e subsidiárias (individualmente e coletivamente, "Shopee", "nós", "nos", ou "nosso"). Os "Serviços" que nós fornecemos ou disponibilizamos incluem (a) o Site, (b) os serviços fornecidos pelo Site e pelo software cliente da Shopee disponibilizados através do Site, e (c) toda informação, páginas vinculadas, recursos, dados, textos, imagens, fotografias, gráficos, música, sons, vídeos (incluindo transmissões ao vivo), mensagens, etiquetas, conteúdo, programação, software, serviços do aplicativo (incluindo, sem limitação, quaisquer serviços do aplicativo móvel) ou outros materiais disponibilizados através do Site ou de serviços relacionados ("Conteúdo"); e (d) serviços de pagamento e de gestão de conta de pagamento a serem realizados pela afiliada da Shopee, a  empresa SHPP BRASIL SERVIÇOS DE PAGAMENTOS LTDA. (“SHPP”) conforme detalhado nos Termos e Condições de Abertura de Conta de Pagamento SHPP.  Quaisquer novos recursos adicionados ou acrescentados aos Serviços também estão sujeitos a estes Termos de Serviço. Estes Termos de Serviço regem o uso dos Serviços fornecidos pela Shopee.
 
1.2    Os Serviços oferecidos e fornecidos pela Shopee incluem um serviço de plataforma online que fornece lugar e oportunidade de venda de mercadorias entre o comprador (“Comprador”) e o vendedor (“Vendedor”) (coletivamente “você”, “Usuários” ou “Partes Envolvidas”), intermediando e conectando as Partes Envolvidas para que possam se engajar comercialmente (“Plataforma”). Como esclarecido no item 1.1 (d) acima, os serviços de pagamento e de gestão de conta de pagamento são prestados pela SHPP, sob sua exclusiva responsabilidade e em conformidade com a legislação aplicável, não se confundindo com os serviços tecnológicos de intermediação executados pela Shopee enquanto provedora de aplicação de internet, nos termos da Lei Federal 12.965/14. Portanto os Serviços tecnológicos fornecidos através da Plataforma aos seus Usuários são limitados à intermediação e conexão entre Compradores e Vendedores, o que significa que o verdadeiro contrato de venda é diretamente entre o Comprador e o Vendedor. A Shopee não faz parte deste contrato ou de qualquer outro entre o Comprador e o Vendedor, não se responsabilizando pelo mesmo. As partes envolvidas nesta transação são inteiramente responsáveis pelo contrato de venda entre si, anúncio de mercadorias, garantia de compra e afins. A Shopee não está envolvida na transação entre os Usuários. A Shopee pode ou não pré-rastrear os Usuários, o Conteúdo ou as informações fornecidas pelos Usuários. A Shopee se reserva no direito de remover qualquer Conteúdo ou informação postada por você no Site de acordo com a Seção 6.4 deste documento. A Shopee não pode garantir que os Usuários irão realmente completar a transação.



1.3    Os Termos de Serviço presentes, juntamente com as Políticas, Termos e Condições de Abertura de Conta de Pagamento SHPP e Anexos que os integram para todos os propósitos legais, constituem o Acordo entre a Shopee e seus Usuários a respeito dos Serviços fornecidos através da plataforma da Shopee. Antes de se tornar um Usuário do Site, você deve ler atenciosamente todos os termos e condições destes Termos de Serviço (assim como os termos vinculados a eles). Assim que você tiver lido todos os documentos, se você ainda quiser proceder e utilizar os Serviços da Shopee, você deverá aceitar estes Termos de Serviço e Políticas associadas, assim a Shopee pode legalmente fornecer os Serviços. Além disso, ao aceitar estes Termos de Serviço você estará dando total consentimento ao processamento de seus dados pessoais como descrito na Política de Privacidade vinculada a este documento, pois isto será necessário para o fornecimento dos Serviços em conformidade com este Acordo.

1.4    A Shopee se reserva no direito de alterar, modificar, suspender ou encerrar toda ou qualquer parte deste Site ou Serviços a qualquer momento ou mediante notificação como requerido pelas leis locais. A Shopee pode liberar certos Serviços ou seus recursos em versão beta, que podem não funcionar corretamente ou da mesma forma que funcionará na versão final, e nós não nos responsabilizaremos nestes casos. A Shopee também pode impor limites a certos recursos ou restringir seu acesso a partes dele ou a ele como um todo, ao Site ou aos Serviços a seu exclusivo critério e sem aviso ou responsabilidade. 

1.5    A Shopee se reserva no direito de suspender seu acesso ao Site, Serviços ou à abertura de uma conta se ela determinar, a seu exclusivo critério, que te fornecer tal acesso ou abertura de Conta pode levar à violação destes Termos de Serviço e/ou leis e regulamentos aplicáveis.
 
Ao usar os serviços da Shopee ou abrir uma conta, você concorda e consente com os termos deste acordo, incluindo os termos e condições de abertura de conta de pagamento shpp e demais políticas, regras e anexos vinculadas a este acordo (termo de serviço).

Se você não concorda com estes termos, por favor, não utilize nossos serviços ou acesse o site. Se você tem menos de 18 anos ou estiver abaixo da idade legal para dar consentimento aos termos abaixo para as leis aplicáveis em seu país (a “idade legal”), você deve obter a permissão de um pai ou guardião legal para abrir uma conta, e este pai ou guardião legal deverá concordar com os termos deste acordo. Se você não souber se já atingiu a idade legal, ou não entender esta seção, por favor, não crie uma conta até que você tenha pedido ajuda de seu pai ou guardião legal. Se você for o pai ou guardião legal de um menor que esteja criando uma conta, você deve aceitar os termos deste acordo em nome dele, e você será responsável por todo o uso da conta ou serviços de empresa usados nesta conta, esteja a conta já aberta atualmente ou seja criada depois.

 
2. PRIVACIDADE

2.1    Sua privacidade é muito importante para nós na Shopee. Para melhor proteger seus direitos, nós fornecemos na Shopee.com  Política de Privacidade para explicar nossas práticas de privacidade detalhadamente. Por favor, revise a Política de Privacidade para entender como a Shopee coleta e usa as informações associadas à sua Conta e/ou seu uso dos Serviços (a “Informação do Usuário”). Ao usar os Serviços ou fornecer informação no Site, você:
 
(i)    consente com a coleta da Shopee, uso, divulgação e/ou processamento de seu Conteúdo, dados pessoais e Informação de Usuário como descrito na Política de Privacidade;
(ii)    concorda e reconhece que os direitos de propriedade de sua Informação de Usuário, exceto os dados que se enquadrem como pessoais, são de propriedade conjunta sua e da Shopee; e
(iii)    não deve, direta ou indiretamente, divulgar sua Informação de Usuário para terceiros, ou de alguma outra forma permitir que terceiros acessem ou utilizem sua Informação de Usuário sem o consentimento prévio por escrito da Shopee.

2.2    Usuários em posse dos dados pessoais de outro Usuário por meio do uso dos Serviços (a "Parte Receptora") concordam que: (i) cumprirão todas as leis de proteção dos dados pessoais aplicáveis no que diz respeito a tais dados; (ii) permitirão que o Usuário cujos dados pessoais tenham sido coletados (a “Parte Divulgadora”) pela Parte Receptora remova seus dados coletados do banco de dados da Parte Receptora; e (iii) permitirão que a Parte Divulgadora revise quais informações foram coletadas sobre ela pela Parte Receptora em cada um dos casos (ii) e (iii) acima, em conformidade com as leis aplicáveis e onde quer que elas sejam exigidas.
 

3. LICENÇA LIMITADA

3.1    A Shopee concede a você uma licença limitada e revogável para acessar e utilizar os Serviços, sujeito aos termos e condições destes Termos de Serviço. Todo o Conteúdo proprietário, marcas registradas, marcas de serviço, nomes de marcas, logotipos e outras propriedades intelectuais ("Propriedade Intelectual") exibidas no Site são de propriedade da Shopee e, onde aplicável, de terceiros identificados no Site. Nenhum direito ou licença é concedido direta ou indiretamente a qualquer parte que acesse o Site para usar ou reproduzir qualquer Propriedade Intelectual, e nenhuma parte que acesse o Site reivindicará qualquer direito, título ou interesse no mesmo. Ao usar ou acessar os Serviços, você concorda em cumprir os direitos autorais, marca comercial, marca de serviço e todas as outras leis aplicáveis ​​que protegem os Serviços, o Site e seu Conteúdo. Você concorda em não copiar, distribuir, republicar, transmitir, exibir publicamente, executar publicamente, modificar, adaptar, adaptar, alugar, vender ou criar trabalhos derivados de qualquer parte dos Serviços, do Site ou de seu Conteúdo. Você também não pode, sem o nosso consentimento prévio por escrito, espelhar ou enquadrar qualquer parte ou a íntegra do conteúdo deste Site em qualquer outro servidor ou como parte de qualquer outro site. Além disso, você concorda que não usará nenhum robô, spider ou qualquer outro dispositivo automático ou processo manual para monitorar ou copiar nosso Conteúdo, sem o nosso consentimento prévio por escrito (esse consentimento é considerado concedido para a tecnologia de mecanismo de pesquisa padrão empregada pelos sites de pesquisa na Internet para direcionar os usuários da Internet a este site).

3.2    Você pode criar um link para o Site a partir do seu site, desde que seu site não implique nenhum endosso ou associação com a Shopee. Você reconhece que a Shopee pode, a seu exclusivo critério e a qualquer momento, encerrar o fornecimento dos Serviços, seja em parte ou como um todo, sem aviso prévio.
 

4. SOFTWARE
 
Qualquer software fornecido por nós a você como parte dos Serviços está sujeito às provisões destes Termos de Serviço. A Shopee reserva todos os direitos ao software expressamente não concedidos por ela abaixo. Quaisquer scripts ou códigos de terceiros, vinculados ou referenciados a partir dos Serviços, são licenciados a você por terceiros que possuem esses scripts ou códigos, e não pela Shopee.

 
5. CONTAS E SEGURANÇA
 
5.1     Algumas funções de nossos Serviços exigem o registro de uma conta através da seleção de uma identificação de usuário única ("ID do usuário") e senha, junto ao fornecimento de determinadas informações pessoais. Se você selecionar um ID de usuário que a Shopee, a seu exclusivo critério, considere ofensivo ou inapropriado, a Shopee tem o direito de suspender ou encerrar sua conta. Você poderá usar sua conta para obter acesso a outros produtos, sites ou serviços aos quais ativamos o acesso ou com os quais nos vinculamos ou colaboramos. A Shopee não analisou e não assume nenhuma responsabilidade por qualquer conteúdo, funcionalidade, segurança, serviços, políticas de privacidade ou outras práticas desses produtos de terceiros, sites ou serviços. Se você fizer isso, os termos de serviço desses produtos, sites ou serviços, incluindo suas respectivas políticas de privacidade, se diferentes destes Termos de Serviço e/ou de nossa Política de Privacidade. Também pode se aplicar ao seu uso desses produtos, sites ou serviços.

5.2    Você concorda em (a) manter sua senha confidencial e usar seu ID de usuário e senha apenas quando estiver fazendo login, (b) garantir que seja feito o logout da sua conta ao final de cada sessão no Site, (c) notificar imediatamente à Shopee qualquer uso não autorizado da sua conta, ID de usuário e/ou senha, e (d) garantir que as informações da sua conta estejam precisas e atualizadas. Você é totalmente responsável por todas as atividades que ocorram sob seu ID de usuário e conta, mesmo que essas atividades ou usos não tenham sido feitos por você. A Shopee não será responsável por qualquer perda ou dano decorrente do uso não autorizado de sua senha ou do não cumprimento desta Seção.

5.3     Você concorda que a Shopee pode, por qualquer motivo, a seu exclusivo critério e com ou sem aviso ou responsabilidade para com você ou terceiros: encerrar imediatamente a sua conta e seu ID de usuário, remover ou descartar do Site qualquer conteúdo associado à sua conta e ID de Usuário, retirar quaisquer subsídios oferecidos a você, cancelar quaisquer transações associadas à sua conta e ID de usuário, reter temporariamente, ou em caso mais críticos permanentemente, quaisquer proventos de vendas ou reembolsos, e/ou tomar quaisquer outras ações que considerar necessárias. Os motivos para tais ações podem incluir, mas não estão limitados a, reais ou suspeitos (a) períodos extensos de inatividade, (b) violação figurada ou literal destes Termos de Serviço, (c) ilegais, fraudulentos, assediadores, difamatórios, comportamento ameaçador ou abusivo (d) ter múltiplas contas de usuário, (e) comprar produtos no Site para fins de revenda comercial, (f) compra anormal ou excessiva de produtos do mesmo Vendedor ou grupo relacionado de Vendedores, (g) abuso de cupons (incluindo, entre outros, venda de cupons a terceiros, comercializar cupons ou outros tipos de créditos com valor significativamente superior ao seu valor nominal e/ou uso anormal ou excessivo de cupons no Site), ou (h) comportamento que seja prejudicial a outros Usuários, terceiros ou aos interesses comerciais da Shopee. O uso de uma conta para fins ilegais, fraudulentos, assediadores, difamatórios, ameaçadores ou abusivos pode ser encaminhado às autoridades policiais sem aviso prévio. Se surgir uma disputa legal ou se for iniciada uma ação de aplicação da lei relacionada à sua Conta ou à sua utilização dos Serviços por qualquer motivo, a Shopee poderá encerrar sua conta imediatamente com ou sem aviso prévio.

5.4    Os Usuários podem encerrar suas contas a qualquer momento simplesmente informando formalmente por escrito a Shopee (incluindo através do e-mail ajuda@suporte.shopee.com.br  ) o desejo de fazê-lo. Independente do encerramento da conta, os Usuários permanecem responsáveis por qualquer transação incompleta (iniciada antes ou depois de tal encerramento), envio do produto, pagamento pelo produto e afins, e os Usuários devem contactar a Shopee depois de ele ou ela terem prontamente e efetivamente executado e concluído todas as transações incompletas de acordo com os Termos de Serviço. A Shopee não se responsabiliza por quaisquer danos incorridos devido às ações tomadas de acordo com esta Seção. Os usuários renunciam a toda e qualquer reivindicação com base em qualquer ação tomada pela Shopee.

5.5    Você só pode usar os Serviços e/ou abrir uma Conta se estiver localizado em um dos países aprovados, conforme atualizado periodicamente. 
 

6. TERMO DE USO

6.1    A licença para o uso deste Site e dos Serviços é válida até ser rescindida. Esta licença será rescindida conforme estabelecido sob estes Termos de Serviço ou se você não cumprir com qualquer um de seus termos ou condições. Nesse caso, a Shopee poderá efetuar tal rescisão com ou sem aviso prévio.

6.2    Você concorda em não: 



(a)    fazer upload, postar, transmitir ou de alguma outra forma disponibilizar qualquer conteúdo que seja ilegal, prejudicial, ameaçador, abusivo, assediador, alarmante, angustiante, tortuoso, difamatório, vulgar, obsceno, injurioso, invasivo sobre a privacidade de alguém, odioso, ou racialmente/etnicamente ou de alguma outra forma censurável;
(b)    violar nenhuma lei, incluindo, sem limitação, quaisquer leis e regulamentos relacionados às restrições de importação e exportação, direitos de terceiros ou nossa Política de Produtos Restritos e Proibidos  ; 
(c)    usar os Serviços para prejudicar menores de idade de qualquer forma que seja; 
(d)    usar os Serviços ou fazer upload de Conteúdo para personificar qualquer pessoa ou entidade, ou de alguma forma deturpar sua afiliação com uma pessoa ou entidade; 
(e)    forjar cabeçalhos ou manipular identificadores a fim de disfarçar a origem de qualquer Conteúdo transmitido através dos Serviços; 
(f)     remover quaisquer avisos de propriedade do Site; 
(g)    causar, permitir ou autorizar a modificação, criação de trabalhos derivados ou tradução dos Serviços sem a permissão expressa da Shopee; 
(h)    usar os Serviços para benefício de terceiros ou de qualquer maneira não permitida pelas licenças aqui concedidas;
(i)    usar os Serviços ou fazer upload de Conteúdo de modo fraudulento, inescrupuloso, falso ou enganoso;
(j)    abrir e/ou operar múltiplas contas em conexão com qualquer conduta que viole de forma figurada ou literal estes Termos de Serviço;
(k) acessar a plataforma da Shopee, abrir uma conta de usuário ou de alguma outra forma acessar sua conta de usuário utilizando qualquer equipamento ou aplicação não autorizado pela Shopee, incluindo, mas não se limitando a emuladores, simuladores, robôs (bots) ou outros hardwares e softwares similares.
(l)    manipular o preço de qualquer item ou interferir nos anúncios de outros Usuários; 
(m)    realizar ações que possam burlar o sistema de feedback e avaliações;
(n)    tentar decompilar, fazer engenharia reversa, desmontar ou hackear os Serviços (ou qualquer parte dele), ou para derrotar ou superar qualquer tecnologia de criptografia ou medidas de segurança implementadas pela Shopee em relação aos Serviços e/ou dados transmitidos, processados ou armazenados pela Shopee; 
(o)    colher ou coletar qualquer informação sobre ou a respeito de outros titulares de Contas, incluindo, sem limitação, qualquer informação ou dado pessoal; 
(p)     fazer upload, enviar por e-mail, postar, transmitir ou de alguma outra forma disponibilizar qualquer Conteúdo que você não tenha o direito de disponibilizar de acordo com qualquer lei ou com relações contratuais ou fiduciárias (como informação privilegiada, informação de propriedade ou confidencial descobertas ou divulgadas como parte de relações de trabalho ou sob acordo de não-divulgação); 
(q)    fazer upload, enviar por e-mail, postar, transmitir ou de alguma outra forma disponibilizar qualquer Conteúdo que viole qualquer patente, marca comercial, segredo comercial, direito autoral ou outros direitos de propriedade de qualquer parte;
(r)    fazer upload, enviar por e-mail, postar, transmitir ou de alguma outra forma disponibilizar qualquer publicidade não solicitada ou não autorizada, materiais promocionais, “e-mails indesejados”, “spam”, “correntes”, “esquema de pirâmides” ou qualquer outra forma de solicitação não autorizada; 
(s)     fazer upload, enviar por e-mail, postar, transmitir ou de alguma outra forma disponibilizar qualquer material que contenha vírus de software, Worms, cavalos-de-troia ou qualquer outro código de computador, arquivos ou programas designados para direta ou indiretamente interferir, manipular,  interromper, destruir ou limitar a funcionalidade ou integridade de qualquer software ou hardware de computador, dados ou equipamentos de telecomunicação; 
(t)    interromper o fluxo normal de diálogo, causando uma “rolagem” de tela mais rápida que a habilidade de digitar dos outros Usuários, ou de alguma outra forma agir de modo que afete negativamente a habilidade de outros Usuários engajarem em trocas de mensagens em tempo real; 
(u)    interferir, manipular ou interromper os Serviços, servidores ou redes conectadas aos Serviços ou qualquer outra forma de uso e aproveitamento dos Serviços pelos Usuários, ou desobedecer quaisquer requisitos, procedimentos, políticas ou regulamentos de redes conectadas ao Site; 
(v)    tomar qualquer atitude ou se envolver em qualquer conduta que possa direta ou indiretamente danificar, desativar, sobrecarregar ou prejudicar os Serviços, os servidores ou as redes conectadas aos Serviços;
(w)    usar os Serviços para, intencionalmente ou não, violar qualquer lei, regra, código, diretiva, diretriz, política ou regulamento local, estadual, nacional ou internacional, incluindo, sem limitação, leis e requisitos (com a força da lei ou não) relacionados a lavagem de dinheiro ou contraterrorismo; 
(x)    usar os Serviços em violação de ou para contornar quaisquer sanções ou embargos administrados ou impostos pela Agência de Controle de Ativos Estrangeiros dos EUA, pelo Conselho de Segurança das Nações Unidas, pela União Europeia ou pelo HM Treasury; 
(y)    usar os Serviços para violar a privacidade, “perseguir” ou perturbar outros Usuários; 
(z)    violar os direitos da Shopee, incluindo qualquer direito de propriedade intelectual ou qualquer passagem do mesmo;
(aa)     usar os Serviços para coletar ou armazenar dados pessoais dos Usuários de acordo com condutas e atividades proibidas como estabelecido acima; e/ou
(bb)    fazer anúncio de itens que violem direitos autorais, marca comercial ou outros direitos de propriedade intelectual de terceiros, ou usar os Serviços de modo que viole os direitos de propriedade intelectual de terceiros.

6.3    Você entende que todo o conteúdo, postado publicamente ou transmitido em modo privado, é de responsabilidade exclusiva da pessoa de quem o Conteúdo se originou. Isso significa que você, e não a Shopee, é totalmente responsável por todo o Conteúdo que você enviar, publicar, enviar por e-mail, transmitir ou de alguma outra forma disponibilizar através do Site. Você entende que, ao usar o Site, pode ser exposto a Conteúdo que você considere ofensivo, indecente ou censurável. Na extensão máxima permitida pela lei aplicável, sob nenhuma circunstância a Shopee será responsável de qualquer forma por qualquer Conteúdo, incluindo, mas não limitado a, quaisquer erros ou omissões em qualquer Conteúdo ou qualquer perda ou dano de qualquer tipo incorrido como resultado do uso ou dependência de qualquer Conteúdo postado, enviado por e-mail  transmitido ou de alguma outra forma disponibilizado no Site.  

6.4    Você reconhece que a Shopee e seus designados terão o direito (mas não a obrigação), a seu exclusivo critério, de pré-selecionar, recusar, excluir, interromper, suspender, remover ou mover qualquer Conteúdo, incluindo, sem limitação, qualquer Conteúdo ou informação publicada por você que esteja disponível no site, sem que tal ato gera qualquer direito de reparação ou responsabilidade para a Shopee. Sem limitar o exposto acima, a Shopee e seus designados terão o direito de remover qualquer Conteúdo (i) que viole estes Termos de Serviço, nossa Política de Produtos Proibidos e Restritos e/ou outras políticas e regras da Plataforma; (ii) se recebermos uma reclamação de outro usuário; (iii) se recebermos um aviso e/ou notícia de violação de propriedade intelectual ou outras instruções legais para remoção; ou (iv) se tal Conteúdo for de alguma forma censurável. Também podemos bloquear a entrega de uma comunicação (incluindo, sem limitação, atualizações de status, postagens, mensagens e/ou chats) dos ou para os Serviços como parte de nosso esforço para proteger os Serviços ou nossos Usuários, ou aplicar as provisões destes Termos e Condições. Você concorda que deve avaliar e assumir todos os riscos associados ao uso de qualquer Conteúdo, incluindo, sem limitação, qualquer confiança na precisão, integridade ou utilidade de tal Conteúdo. A respeito disto, você reconhece que não tem, e na extensão máxima permitida pela lei aplicável, não pode confiar em nenhum Conteúdo criado pela Shopee ou enviado à Shopee, incluindo, sem limitação, informações nos Fóruns da Shopee e em todas as outras partes do site.  
 
6.5     Você reconhece, consente e concorda que a Shopee possa acessar, preservar e divulgar as informações e o Conteúdo da sua conta para qualquer autoridade legal, regulatória ou governamental, o detentor de direitos relevantes ou terceiros se assim for exigido pela lei, de acordo com uma ordem de um tribunal ou por qualquer autoridade governamental ou regulatória com jurisdição sobre a Shopee ou agindo de boa-fé que tal preservação ou divulgação de acesso seja de modo sensato necessária para: (a) cumprir com o processo legal; (b) fazer com que estes Termos de Serviço ou nossa Política de Produtos Proibidos e Restritos sejam cumpridos; (c) responder a alegações de que algum Conteúdo esteja violando os direitos de terceiros, incluindo direitos de propriedade intelectual; (d) responder aos pedidos do serviço de atendimento ao cliente; ou (e) proteger os direitos, propriedade ou segurança pessoal da Shopee, de seus Usuários e/ou do público.




7.VIOLAÇÃO DE NOSSOS TERMOS DE SERVIÇO
 
7.1    Violações desta política podem resultar em uma gama de ações, incluindo, sem limitação, quaisquer das seguintes:  
 
(a) Exclusão de Anúncio;
(b) Limitações impostas nos privilégios da Conta;   
(c) Suspensão da conta e encerramento subsequente;
(d) Acusações criminais;
(e) Ações civis, incluindo, sem limitação, alegação por danos e/ou medidas liminares ou provisórias
 
7.2    Se você acredita que um Usuário de nosso Site esteja violando estes Termos de Serviço, por favor, contacte ajuda@suporte.shopee.com.br  
 

8.REPORTANDO VIOLAÇÕES DOS DIREITOS DE PROPRIEDADE INTELECTUAL
 
8.1    Conforme disposto acima, a Shopee não permite que sejam inseridos e/ou comercializados em sua Plataforma qualquer produto e/ou Conteúdo que violem os direitos autorias, direitos marcário ou direitos de propriedade intelectual em geral (DPI) de propriedade alheia (“Proprietário de DPI”).

8.2 Exceto se expressamente previsto em contrário, os Usuários são indivíduos ou empresas individuais e eles não são associados à Shopee de nenhuma forma e a Shopee não é agente e nem representante dos Usuários e não possui ou sustenta nenhuma das mercadorias anunciadas no Site.  

8.3    Se você é um Proprietário DPI ou um agente devidamente autorizado por um Proprietário IPR (“Agente DPI”) e acredita que seu direito ou de seu agente foi violado, por favor, notifique-nos por meio do preenchimento e envio do respectivo formulário disponível através do link https://shopee-support.formstack.com/forms/ipr_br , fornecendo-nos os documentos requisitados a seguir para sustentar sua reivindicação. Apenas notificações de violação de direito de propriedade intelectual enviadas através do formulário adequado e com todas as informações e documentos necessários serão processadas e analisadas pela Shopee, sendo este o único canal oficial para tratativa de tais casos, sendo que a Shopee se resguarda ao direito de não analisar reclamações e/ou notificações envidas por outros canais, isentando-se de qualquer responsabilidade pelos desdobramentos decorrentes da não observância do procedimento de notificação previsto neste item. Por fim, conceda-nos tempo para processar as informações fornecidas. A Shopee responderá à sua notificação assim que possível.
 
8.4    As reclamações sob esta Seção 8 devem ser fornecidas no formulário prescrito pela Shopee, que pode ser atualizado periodicamente e deve incluir pelo menos o seguinte: (a) uma assinatura física ou eletrônica de um Proprietário DPI ou agente DPI (coletivamente, “Informant”); (b) uma descrição do tipo e natureza do direito de propriedade intelectual supostamente violado e prova de direitos; (c) uma descrição da natureza da alegada violação com detalhes suficientes para permitir que o Shopee avalie a reclamação; (d) URL(s) do(s) anúncio(s) que contém a suposta violação; (e) informações suficientes para permitir à Shopee contactar o Informante, como endereço físico, número de telefone e endereço de email; (f) uma declaração do Informante de que a denúncia é apresentada de boa fé e que o uso da propriedade intelectual, conforme identificado pelo Informante, não está autorizado pelo Proprietário DPI ou pela lei; (g) uma declaração do Informante de que as informações na notificação são precisas, sendo que o Informante irá nos indenizará por quaisquer danos que possamos sofrer como resultado das informações fornecidas pelo informante e que o Informante tem o direito apropriado ou está autorizado a agir em nome do Proprietário DPI em todos os aspectos relativos a reclamação apresentada.  

8.5    A Shopee reconhece o direito do fabricante, distribuidores autorizados, representantes comerciais com direitos de exclusividade sobre distribuição, dentre outros, de entrar em certos acordos de distribuição exclusiva ou acordos de preço mínimo anunciado para seus produtos. No entanto, eventuais violações de tais acordos não constituem violação de direitos de propriedade intelectual. Como a aplicação desses acordos é uma questão entre o fabricante, distribuidores, representantes e os vendedores, a Shopee não se responsabiliza, bem como presta qualquer tipo de auxílio neste tipo de atividade, sendo que não impõe e/ou monitora direitos de distribuição exclusivos ou questões de controle de preços, exceto nos países que têm leis que regem especificamente distribuição exclusiva ou seletiva. Portanto, tais questões devem ser tratadas exclusivamente juntos aos respectivos vendedores sem qualquer ingerência ou responsabilidade da Shopee em tais casos. 
 
8.6    Todo e qualquer Usuário da Plataforma, especialmente os usuários Vendedores, concordam em isentar a Shopee e suas Afiliadas de todas as reivindicações, reclamações, demandas e condenações judiciais, bem como danos e prejuízos decorrentes da remoção de qualquer Conteúdo ou anúncio de produtos em relação a qualquer reclamação de violação de propriedade intelectual.
 .`;

	document.querySelector('.area').classList.toggle('sombra');
	document.querySelector('.area').appendChild(termosPage);
	document.querySelector('.tela-termos').appendChild(header);
	document.querySelector('.tela-termos > .itens').appendChild(texto);
	document.querySelector('.tela-termos > .itens').appendChild(iconX);

	document.querySelector('.tela-termos').appendChild(termosCaixa);
	document.querySelector('.termos-caixa').appendChild(termosTexto);

	let fechar = document.querySelector(".itens > i");
	fechar.addEventListener("click", ()=>{
		console.log("Botão fechar precionado");
		document.querySelector('.area').classList.remove('sombra');
		document.querySelector(".tela-termos").remove();
	});
});


let caixaTermoInput = document.querySelector('#termos');
caixaTermoInput.value = false;
let sVerificado = document.querySelector("#verificado");
sVerificado.style.opacity = '0';

let enviarDados = document.querySelector('#env-dados');

let caixaTermo = document.querySelector("#caixa-termos").addEventListener("click", function(){
	caixaTermoInput.click();
	caixaTermoInput.value = true;

	if (sVerificado.style.opacity == '0') {
		sVerificado.style.opacity = "1";
	}else{
		sVerificado.style.opacity = '0';
	}
		if (caixaTermoInput.checked) {
		//console.log('A caixa foi marcada');
		caixaTermoInput.value = true;
		document.querySelector("#env-dados").style.opacity = "1"
		document.querySelector("#env-dados").setAttribute("disable", "false")
	}else{
		//console.log("A caixa foi desmarcada");
		caixaTermoInput.value = false;
		document.querySelector("#env-dados").style.opacity = "0.5"
		document.querySelector("#env-dados").setAttribute("disable", "true")
	}

	marcaBt();
/*
	enviarDados.onclick = () =>{
		console.log("Botão cadastrar enviado");
	}
*/
	if (caixaTermoInput == false) {
		enviarDados.forEach(function(elm){
			elm.setAttribute('disabled', 'true');
		});
	}
});

function marcaBt(){
	if (caixaTermoInput.checked == true) {
		//console.log('Caixa marcada');
	} else if (caixaTermoInput.checked == false) {
		//console.log('Caixa desmarcada');
	}
}
/*
const cpf = document.querySelector("#cpf");
cpf.addEventListener("input", () =>{
	let cpfFormatado = cpf.value.length;
	
	if (cpfFormatado === 3 || cpfFormatado === 7) {
		cpf.value += ".";
	} else if(cpfFormatado === 11){
		cpf.value += "-";
	}
});
*/

const cpf = document.querySelector("#cpf");
cpf.addEventListener("keypress", ()=>{
	let cpfFormatado = cpf.value.length;

	if (cpfFormatado === 3) {
		cpf.value += ".";
	} else if(cpfFormatado === 7){
		cpf.value += ".";
	} else if (cpfFormatado === 11) {
		cpf.value += "-";
	}
});

const telefone = document.querySelector("#telefone");
telefone.addEventListener("keypress", ()=>{
	let telefoneFormatado = telefone.value.length;

	if (telefoneFormatado === 0) {
		telefone.value += "(";
	} else if(telefoneFormatado === 3){
		telefone.value += ") ";
	} else if (telefoneFormatado === 10) {
		telefone.value += "-";
	}
});
<?php

$notices = array();

$categories = array();

$images = array();


// set categories
// $categories = ['title' => '', 'slug' => '', 'description' => ''];

$categories[] = ['name' => 'Sobre nós','slug' => 'sobre-nos', 'description' => 'Notícias sobre o município satélite da Caála'];
$categories[] = ['name' => 'Sociedade', 'slug' => 'sociedade', 'description' => 'Notícias sobre a sociedade do município satélite da Caála'];
$categories[] = ['name' => 'Cultura', 'slug' => 'cultura', 'description' => 'Notícias sobre a cultura no município satélite da Caála'];


// set images
$images[] = ['image' => 'caala2-500x350-cbf77ce7.jpg', 'alternative_text' => 'Caala drone'];
$images[] = ['image' => 'caala2-500x350-cbf77ce7.jpg', 'alternative_text' => 'Caala drone'];
$images[] = ['image' => 'caala1-500x350-5c5f6b3c.jpg', 'alternative_text' => 'Caala 54 anos'];
$images[] = ['image' => 'caala3-500x350-469071ae.jpg', 'alternative_text' => 'Capela monte caala zoom'];
$images[] = ['image' => 'caala4-500x350-52bb9255.jpg', 'alternative_text' => 'Capela monte caala'];
$images[] = ['image' => 'caala5-500x350-dfdc9f1c.jpg', 'alternative_text' => 'Caala 53 anos'];
// $images[] = ['image' => '', 'alternative_text' => ''];
// $images[] = ['image' => '', 'alternative_text' => ''];


// set notices
// $notices[] = [
//     'title' => '',
//     'slug' => '',
//     'date' => '',
//     'source' => '',
//     'fk_image' => '',
//     'fk_category' => '',
//     'content' => "<p></p>"
// ];

$notices[] = [
    'title' => 'Caála',
    'slug' => 'caala',
    'date' => '2025-01-18',
    'views' => 938,
    'source' => 'https://pt.wikipedia.org/wiki/Ca%C3%A1la',
    'fk_image' => 1,
    'fk_category' => 'sobre-nos',
    'content' => "<p>Caála é uma cidade e município da província do Huambo, em Angola.
    Tem 3 680 km² e cerca de 373 mil habitantes. O município da Caála localiza-se na parte central da província do Huambo tendo como limites a norte o municípios da Ecunha, a leste o município de Huambo, a sul o município de Chipindo, e a oeste os municípios de Longonjo e Caconda.</p>
    <p>O município é constituído pela comuna-sede, correspondente à cidade de Caála, e pelas comunas de Cuíma, Calenga e Catata.[1]</p>
    <p>Forma com a cidade do Huambo e com a cidade de Ecunha uma grande área conurbada, a virtual Região Metropolitana do Huambo?</p>"
];

$notices[] = [
    'title' => 'História',
    'slug' => 'historia',
    'date' => '2025-01-18',
    'views' => 2932,
    'source' => 'https://pt.wikipedia.org/wiki/Ca%C3%A1la',
    'fk_image' => 4,
    'fk_category' => 'sobre-nos',
    'content' => "<p>Antes da formação do reino do Huambo, um dos grandes Estados ovimbundos, Caála era uma área de culto sob domínio do clã Nganda, no século XV, centrada na chamada Pedra Caué. Os ovimbundos da província do Huambo formaram-se pela fusão dos Nganda com dois clãs nômades vindo do Cuanza Sul, mais especificamente da região de Cela. Os clãs de Cela eram liderados por Wambu Kalunga e Sunguandumbu, que entraram em acordo com os Nganda para também se estabeleceram naquele local, a que deram o nome de Nganda-ya-Kawe, que também é grafado como Ganda-a-Caué ou Ganda de Caué. Estava assim formada a localidade de Caála, nas cercanias de 1650, que foi elevada a ombala (cidade-capital) do reino do Humabo. O reino teve como primeiro rei justamente a Wambu Kalunga.</p>
    <p>Com o tempo o nome La-Kawhé ou Caué foi sendo modificado e adaptado até tornar-se o termo Caála, já no século XIX. Neste período, já era um próspero centro de comércio entre os ovimbundos e os portugueses, que se fixaram no litoral.</p>
    <p>Caála permaneceu como ombala do reino do Huambo até o século XIX, quando intensas guerras na zona planáltica a devastou, fazendo com que a capital dos huambinos fosse transferida para Huambo-Cabral Moncada (atual Lépi).</p>
    <p>Após alguns anos destruída e abandonada, o desenvolvimento de Caála retomou-se com a chegada do Caminho de Ferro de Benguela, em 1912. Pertenceu, até 1922, à circunscrição do Huambo. Entre 1922 e 1934 pertenceu à circunscrição do Lépi, quando esta foi transferida para a Caála. Em 1956 foi elevada a concelho. </p>
    <p>Entre 1912 e 1970 designou-se Vila Robert Williams, em homenagem ao magnata britânico Robert Williams que impulsionou a construção do Caminho de Ferro de Benguela. </p>
    <p>Em 15 de julho de 1970 passou à categoria de cidade e município, passando a designar-se Caála.</p>
    <p>Em 2002, no fim da guerra civil angolana, Caála albergou um centro de ajuda humanitária dos Médicos Sem Fronteiras. </p>"
];

$notices[] = [
    'title' => 'Economia Infraestrutura e Esportes',
    'slug' => 'economia-e-infraestrutura',
    'date' => '2025-01-20',
    'views' => 837,
    'source' => 'https://pt.wikipedia.org/wiki/Ca%C3%A1la',
    'fk_image' => 2,
    'fk_category' => 'sobre-nos',
    'content' => "<p>A Caála é um dos destaques nacionais na produção de trigo[4] e massango.[5][6] Os rios que cortam o território municipal são fontes de pesca segura e fazem movimentar uma importante economia popular, principalmente ao sul do município, onde há o lago da Central Hidroelétrica do Gove.</p>
    <p>Caála é um dos grande entrocamentos logísticos da nação, na medida em que conecta as importantes rodovias EC-343 (Caála-Ecunha) EN-120 (Huambo-Caála-Cuíma) e EN-260 (Caála-Calenga), servindo de conexão destas com o Caminho de Ferro de Benguela. A Estação Ferroviária Robert Williams está localizada nesta cidade.</p>
    <p>Ao sul do território municipal há o represamento das águas do rio Cunene para formar a Central Hidroelétrica do Gove, com a usina geradora instalada numa vila (Gove) do município da Caála.</p>
    <p>Sedia ainda a equipe futebolística Clube Recreativo da Caála, que manda seus jogos no Estádio dos Mártires da Caála.</p>"
];

$notices[] = [
    'title' => 'Divisão administrativa do Município da Caála',
    'slug' => 'divisao-administrativa-do-municipio-da-caala',
    'date' => '2025-01-22',
    'views' => 998,
    'source' => 'https://sigiisp.ispcaala.com/_repositorio/Arqui_ALEXANDRINO%20TCHILALA%20SILVA_8199e38d646fe5dc50a6e0aefb670d24.pdf',
    'fk_image' => 1,
    'fk_category' => 'sobre-nos',
    'content' => "<p>Administrativamente, o município da Caála, é composto por quatro (4) comunas, sendo: Sede, Calenga, Cuima e Catata. A nivel das comunas, a divisão administrativa optada, de uma maneira geral, segue o modelo de organização territorial tradicional, estando desta forma divididas em Ombalas.</p>    <p></p>
    <p>Desta forma, também observa-se a divisão administrativa das comunas, em povoações que, em alguns casos, coincidem com o território das ombalas.</p>"
];

$notices[] = [
    'title' => 'Clima e Vegetação do Município da Caála',
    'slug' => 'clima-e-vegetacao-do-municipio-da-caala',
    'date' => '2025-01-24',
    'views' => 1038,
    'source' => 'https://sigiisp.ispcaala.com/_repositorio/Arqui_ALEXANDRINO%20TCHILALA%20SILVA_8199e38d646fe5dc50a6e0aefb670d24.pdf',
    'fk_image' => 3,
    'fk_category' => 'sobre-nos',
    'content' => "<p>A humidade relativa anual varia entre os 60% e 70%, assinalando-se o máximo em Janeiro (75% a 80%) e o mínimo em Agosto (35% a 40%). O solo do município da Caála segundo dados, são na sua generalidade do tipo Ferralítico, de cor vermelha e com pH que varia entre 5,3 e 6,2; apresenta baixo teor de matéria orgânica (M.O), baixa capacidade de troca catiônica, maior no horizonte A (superficial) e com baixos teores de Nitrogênio, Fósforo e Potássio, são normalmente finos, distinguem-se pela cor vermelha muito intensa, pela grande friabilidade e ausência de estrutura. Embora os solos destes agrupamentos sejam regra geral, fundos, e friáveis, no entanto, apresentam laterites ou materiais latéricos a menos de 1m de profundidad</p>
    <p>A ausência de nutrientes resulta na utilização constante de fertilizantes químicos e orgânicos que ao longo do tempo causa a acidez dos solos e provoca uma redução na capacidade de produção agrícola. A vegetação é do tipo Miombo ou mata de panda, uma tipologia onde predominam árvores que pertencem aos géneros Brachystegia, Isorbelinia e Julbernádia. Esta formação florestal é o principal tipo em Angola que ocupa cerca de 45,2% da área florestal total, dispersando-se por vastas áreas do país, incluindo as províncias do Planalto Central (Bié, Benguela, Huambo e Huíla), bem como Kuando Kubango, Moxico, Malanje e Kwanza-Sul</p>"
];

$notices[] = [
    'title' => 'Hábitos e costumes',
    'slug' => 'habitos-e-costumes',
    'date' => '2025-01-28',
    'views' => 991,
    'source' => 'https://sigiisp.ispcaala.com/_repositorio/Arqui_ALEXANDRINO%20TCHILALA%20SILVA_8199e38d646fe5dc50a6e0aefb670d24.pdf',
    'fk_image' => 1,
    'fk_category' => 'cultura',
    'content' => "<p>Esta população não foge à regra das demais localidades do planalto central, possuindo hábitos e costumes próprios, como ter duas refeições ao dia, o pequeno almoço (Ongão) e o jantar (Ondalelo), intercalando por vezes, algumas frutas e tubérculos de plantas. Alguns casamentos são processados, a partir dos consentimentos e alambamentos, possuem danças típicas, de entre elas; Olundongo, Okatita, Onhacha, Olisemba, Oniso, Ochenge, para além de outras, tais como; Otchinganji, Kaviula e Kavange. Algumas práticas tendem a ser banalizadas, por novas modalidades, trazidas e difundidas pelos meios de comunicação. A população deste município é maioritariamente Cristã, professando as seguintes religiões: Católica, IECA, IESA, Adventistas do Sétimo dia, Testemunhas de jeová, Baptista, e uma pequena minoria, professa a religião Islâmica, é ainda notada a presença de algumas seitas religiosas, que se vão emergir de forma isolada.</p>
    <p>A sua população dedica-se a agricultura de subsistência, como na produção de cereais, hortícolas, tubérculos, e entre vários outros produtos. Dedicam-se também no comércio na Criação e pastorícia de animais tais como: Gado Bovino, Caprino Suíno, Ovino e não pondo de parte a criação de aves. Fruto da globalização novas instituições vão surgindo, e assim outras posições vão aparecendo no dia-a-dia das suas populações. As autoridades mais destacadas no âmbito tradicional são os sobas, os séculos, que são as autoridades das comunidades, a estes juntam-se, as representações eclesiásticas embora estas, têm tido maior aceitação da população em função do cristianismo</p>"
];

$notices[] = [
    'title' => 'Nossa Senhora do Monte da Caála',
    'slug' => 'nossa-senhora-do-monte-da-caala',
    'date' => '2025-01-31',
    'views' => 938,
    'source' => 'https://www.hoteisangola.com/nao-perder/huambo/nossa-senhora-monte-caala.html',
    'fk_image' => 4,
    'fk_category' => 'sociedade',
    'content' => "<p>A obra é concretização de uma Promessa feita a Deus por um Leigo Católico, que tinha problemas de saúde. O Santuário de Nossa Senhora do Monte da Caála, situado no Monte Mbandjela, começou-se a construir em 1927, na altura acompanhava a referida área o Pe. Domingos Vieira Baião, Missionário da Congregação dos Padres do  spírito Santo, que na época residia na Missão Católica do Cuando.</p>
    <p>Os primeiros casamentos dos indígenas da região eram efectuados nesta capela, enquanto os brancos e outra parte da sociedade com certa evolução, eram casados na Igreja da Povoação, na sede Municipal.</p>
    <p>A partir dos anos 50, com o Pe. Lima, residente no Município e primeiro Pároco da Paróquia de Nossa Senhora de Fátima da Caála, passou a assistir a Capela do Monte, bem como as localidades de Ngumbe, Ñgala e Mamã.</p>
    <p>Foi então que surgiram as Missões Católicas de Longonjo em 1954 e de Cassoco em 1969.</p>
    <p>Entre os anos 1959/61 a Capela teve de ser restaurada, face a destruição parcial que tinha sofrido, pois nela se tinha abrigado uma cobra gigante. Antes de 1975, a capela era muito frequentada pelos peregrinos, principalmente na celebração das Festas da Vila da Caála.</p>
    <p>Após a Independência, surge o primeiro constrangimento: os soldados cubanos ocupam a pequena montanha, como posto avançado de observação e, consequentemente, torna-se um quartel.</p>
    <p>Ao longo dos tempos a Capela foi conhecendo muitos inquilinos, dos quais, alguns eram militares; nos momentos de relativa paz passou a servir para piqueniques de uma certa elite, que sabia onde punha os pés, por causa das minas terrestres que aí tinham sido colocadas, aquando da ocupação dos militares. Deu-se igualmente então a devastação da floresta para carvão até à retomada do Huambo pelas forças  overnamentais, em 1994.</p>
    <p>Com a chegada da Paz a situação mudou. A partir de 2004 começou a pensar-se no Santuário e dar-se os primeiros passos para a reabilitação da Capela e lugar de Culto do Monte Mbandjela. O primeiro passo foi a desminagem de todo o espaço da montanha.</p>
    <p>Tinha muitas minas, pois era um ponto estratégico durante a guerra. O acto de desagravo na Capela de Nossa do Monte foi feito no dia 13 de Agosto de 2005, em acto solene presidido por Dom José de Queirós Alves, Arcebispo do Huambo, com muita gente e muito fervor.</p>
    <p>A partir de então começaram os actos de culto no Monte da Caála e começou-se a pensar na reconstrução da Capela. Estava muito destruída e precisava de uma revisão profunda em todos os aspectos, a Capela e todo o ambiente circundante.</p>"
];


$notices[] = [
    'title' => 'Caála comemore 53 anos como olhos no futuro',
    'slug' => 'caala-comemore-53-anos-como-olhos-no-futuro',
    'date' => '2025-02-01',
    'views' => 977,
    'source' => 'https://www.angop.ao/noticias/sociedade/caala-comemora-53-anos-como-cidade-com-olhos-postos-no-futuro/',
    'fk_image' => 5,
    'fk_category' => 'sociedade',
    'content' => "<h2><p style='font-size:21px;font-weight:500;text-transform:none;'>Caála - A cidade da Caála, província do Huambo, completou hoje, sábado, 53 anos desde a sua elevação a esta categoria, com olhos postos no futuro, fruto da implementação do Plano Integração de Intervenção nos Municípios (PIIM).</p></h2><p>A localidade ascendeu à categoria de cidade, através da Portaria nº 170011, assinada pelo então governador-geral de Angola, Camilo Augusto Miranda Rebocho Vaz, em 1970.</p><p>Volvidos 53 anos de existência como cidade, as autoridades tudo fazem para transformar, a médio prazo, a região num lugar seguro e desenvolvido, em que as pessoas possam viver em melhores condições e orgulhar-se de terem nascido ou passado pela antiga “Rainha do Minho de Angola”.</p><p><strong>Comemorações </strong></p><p>Para comemorar a efeméride, foram realizadas um conjunto de manifestações políticas, económicas, desportivas e culturais, sendo que o corte do tradicional&nbsp; bolo gigante decorreu no largo 8 de Janeiro, diante da governadora da província do Huambo, Lotti Nolika.</p><p>Antes do corte do bolo, a governadora Lotti Nolika inaugurou oito quilómetros de estradas na periferia da cidade da Caála, cujas obras de resselagem decorreram no âmbito do Plano Integrado de Intervenção nos Municípios, tendo, em seguida, orientando a campanha de plantação de árvores ornamentais, para arborização da cidade.</p><p>Seguidamente, a governante visitou a feira das potencialidades económicas, promovida com objectivo de mostrar as capacidades agrícolas, pecuárias, tecnologias e industriais, para atrair mais investidores.</p><p>Em breves palavras, a governadora Lotti Nolika, que felicitou os citadinos pela comemoração dos 53 anos da ascensão à categoria de cidade, reconheceu os avanços registados pela região em vários dominós da vida socioeconómica.</p><p>Ao intervir no acto, o administrador do município da Caála, Rúbem Isaías Etome, disse que as autoridades locais têm feito tudo para, progressivamente, dar reposta de todas as preocupações que assolam a população da Caála.</p><p><strong>PIIM dá novo rosto à Caála </strong></p><p>O gestor municipal destacou a implementação do Plano Integrado de Intervenções nos Municípios (PIIM) como um dos grandes impulsionadores do desenvolvimento do município da Caála, com uma carteira de 33 projecto, dos quais 24 concluídos e entregues à população.</p><p>Trata-se de empreitadas de escolas, requalificação de unidades sanitárias, reabilitação de estradas e outras, para além da aquisição de camiões, máquinas e equipamentos para operacionalização do saneamento básico.</p><p>Indicou que a colocação do asfalto em 15 quilómetros de estradas das vias secundárias e terciárias, sendo oito para a sede municipal da Caála, para além da asfaltagem, pela primeira vez, das vilas comunais, da Calenga, Catata e Cuima, elevou, significativamente, a boa imagem do município da localidade.</p><p>Segundo o responsável, o PIIM, aliado ao programa de combate à pobreza, consubstanciados na construção de infra-estruturas sociais e rurais, têm tido um impacto inquestionável no dia-a-dia dos cidadãos.</p><p>No domínio da saúde, lembrou que o município conta com 34 unidades sanitárias, asseguradas por 642 profissionais, com destaque para 31 médicos, para além de 11 centros privados, dos quais uma clínica universitária.</p><p>Disse que o município conta, na vertente educacional, com 95 escolas, quatro das quais privadas, com um universo de 97 mil 761 alunos do ensino primário ao II ciclo, incluindo nos institutos politécnicos e no magistério primário, num total de dois 445 professores.</p><p><strong>Caála e os desafios de Rainha do Milho &nbsp;</strong></p><p>Sem apresentar dados, Rubem Isaías Etome disse que as autoridades locais tudo têm feito para redobrar o cultivo dos cereais, com o objectivo de recuperar a mística de “Rainha do Milho de Angola”, para além do trigo e a criação de condições de uma cadeia que vai desde a produção, escoamento, conservação, transformação e venda aos grossistas.</p><p>Por esta razão, convidou os empresários do sector agro-pecuário para investirem na municipalidade, por ser detentor de inúmeras potencialidades desde o rico solo, os recursos hídricos e ao desejo imenso da população local em trabalhar a terra, para dela tirar o auto-sustento.</p><p>&nbsp;<strong>Indústria, hotelaria e Turismo </strong></p><p>Lembrou que o município da Caála possui um Pólo de Desenvolvimento Industrial, onde já se encontram em funcionamento as fábricas de carteiras, colchões, produção de farinha de trigo e preste a produzir fuba de milho e massa alimentar.</p><p>Por isso, disse que a Administração da Caála tem feito tudo junto aos órgãos competentes para a criação de condições de energia e água em toda sua extensão, para além de apelar aos empresários no sentido de concorreram para o mesmo.</p><p>Relativamente ao sector da hotelaria e turismo, admitiu haver uma insuficiência de investidores nessa área, o qual torna-se, cada vez mais, necessário e exigente, tendo em conta o crescimento da municipalidade em vários domínios.</p><p><strong>Próximos desafios</strong></p><p>O gestor informou, na ocasião, que as autoridades do município da Caála pretende apostar, nos próximos tempos, na sinalização horizontal e vertical da urbe, plantação de árvores ornamentais e na intensificação da iluminação pública que, ultimamente, tem registado avanços significativos, sobretudo, nos arredores e na periferia.</p><p>“A ideia é olhar para frente com algum optimismo, pois os indicadores actuais nos dão algum horizonte de dias melhoras, uma vez que, o compromisso passa em continuar a executar programas que visam aumentar a oferta de serviços sociais básicos, dinamizar projectos estruturantes dos sectores públicos e privados, com o objectivo de tornar a Caála num bom lugar de se viver”, salientou.</p><p><strong>História da </strong><strong>Caála</strong><br><br>A cidade da Caála foi fundada por Antero Gavino do Rego, José Henriques Beira Alta, Gualdino da Cunha Barros e José da Fonseca Monteiro, considerados seus primeiros habitantes.<br><br>De acordo com depoimentos históricos, a actual cidade da Caála recebeu os primeiros residentes em 1900, pois, aquando da revolta do Bailundo, em 1902, já se encontravam na localidade os portugueses Gualdinho da Cunha e Antero Gavino do Rego.</p><p><strong>Chegada da linha férrea</strong></p><p>Em meados de 1912, chegou a linha do Caminho-de-Ferro de Benguela (CFB), factor que contribuiu para o desenvolvimento do povoado que, até então, não era mais do que um pequeno acampamento junto de uma antiga aldeia cujo soba se chamava Cahala Mbita, emergindo a partir desta altura como povoação.<br><br>A Caála pertenceu à circunscrição do Huambo até 1922, tendo sido integrada, a partir do mesmo ano, na circunscrição do Lépi, criada pelo então governador provincial Norton de Matos.<br><br>Em 1929, ainda integrada na circunscrição do Lépi, teve o seu primeiro corpo administrativo denominado Junta Local e, no mesmo ano, foi baptizada de povoação de Robert Williams, por determinação do governo português.<br><br>Por portaria sem número de 27 de Outubro de 1934, a circunscrição do Lépi ascendeu à categoria de Conselho da Caála, e, em Outubro de 1956, a sua Junta Local é transformada em comissão municipal. Dez anos depois, o seu corpo administrativo foi elevado à câmara municipal.<br><br>A partir do dia 10 de Março de 1970, a vila foi ligada à linha de condução da energia hidroeléctrica do Alto Catumbela, província de Benguela, o que trouxe enumeras possibilidades de desenvolvimento industrial e comercial para a mesma.<br><br>Por portaria número 17011 de&nbsp;15 de Julho de 1970, a Caála&nbsp;foi elevada à categoria de cidade pelo então governador-geral de Angola, tenente-coronel Camilo Augusto de Miranda Rebocho Vaz. <strong>ALH</strong></p>"
];






@extends('master')
@section('title', 'Grupos e Organizações')
@section('content')

<div class="row">
  <div class="col text-center">
    <header>
      <h1>Grupos e Organizações</h1>
    </header>
  </div>
</div>
<div class="row">
  <div class="col text-center">
    <h2>Principais Famílias</h2>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <a id="strongwill"></a>
    <h3>Família Strongwill</h3>
    <p>Strongwill é uma família de nobres guerreiros extremamente fiéis ao reino. Quando os imperadores
      Waliwatu foram assassinados e a família Dragnister assumiu a liderança do Conselho em uma astuta manobra
      Política, os Strongwill se opuseram diretamente a eles, causando sérios problemas. A família Strongwill é
      forte e influente, os Dragnisters estavam cientes deste fato e foi por esta razão que se limitaram a manter
      vigilância discreta sobre os Strongwill ao invés de um ataque direto.</p>
    <p>O Barão Rivali é o líder da família, tendo sido nomeado Conde pelos imperadores quando assumiram o trono. Seu
      filho mais velho, Percival, recebeu o título de Visconde.</p>
    <p>O filho caçula de Percival, Robert, foi nomeado Cavaleiro pouco antes da Terceira Guerra, em honra aos seus
      feitos heróicos quando todas as pessoas ilustres do Império (incluindo os Imperadores) foram "congeladas"
      magicamente em um atentado. Sir Robert está noivo da filha mais velha dos imperadores, Júlia Waliawatu Cutler,
      paladina do deus Kutlaloa</p>
    <p>Apenas uma mulher da família, em toda a sua história, empunhou armas.</p>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <figure class="figure">
      <!-- o termo "sh-image" dentro da classe é para chamar o estilo do arq css. É o nome da classe criada lá -->
      <img src="{{ asset('assets/images/grupos/rivali-strongwill.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="rivali-strongwill">
      <figcaption class="figure-caption text-center">Conde Rivali Strongwill</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/percival-strongwill.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="percival-strongwill">
      <figcaption class="figure-caption text-center">Visconde Percival Strongwill</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/robert-strongwill.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="robert-strongwill">
      <figcaption class="figure-caption text-center">Cavaleiro Robert Strongwill</figcaption>
    </figure>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <h3>Família Groundhound</h3>
    <p>Groundhound é uma das famílias mais antigas, assim como a família Waliwatu da Imperatriz Kaylane. Ambas podem
      ser rastreadas até os originais fundadores do Império.</p>
    <p>São boas pessoas e leais ao trono, porém não a quem senta nele. Não seriam avessos a colocar algum dos seus
      no trono do Conselho se fosse possível. Entretanto eram minoria, por isso a família Dragnister manipulava e
      dominava o resto do Conselho</p>
  </div>
</div>
<hr>
<div class="row mb-3">
  <div class="col text-center">
    <h2>Organizações Militares</h2>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <a id="shadow"></a>
    <h3>Caçadores das Sombras (Shadow Hunters)</h3>
    <p>Caçadores das Sombras é uma organização militar do Império Nameless. Sua base se localiza no Forte HaLi,
      próximo aos
      Portões de Ferros. Seu General responde diretamente ao Imperador Hackin Bartholomew Cutler.</p>
    <p>Liriel Diiskye di Castella, mais conhecida como Dragonslayer, foi a idealizadora e fundadora deste
      destacamento. O forte esteve sob seu comando até o final da Terceira Grande Guerra quando, na patente de
      General,
      Drangonslayer decidiu se aposentar e retornar para a cidade costeira de Esperanza, onde seu marido Jack
      di Castella é Prefeito, e se dedicar à sua família.</p>
    <p>São considerados a Tropa de Elite do Império, onde apenas os melhores dos melhores são aceitos. O
      processo seletivo, permitido apenas para militares na ativa, é muito concorrido e extremamente difícil,
      composto de provas físicas e mentais. Apesar de ser difícil "entrar" no Forte HaLi, é muito mais difícil
      se manter durante o treinamento, que tem duração de um ano.</p>
    <p>O treinamento física e psicologicamente extenuante. Os novatos são colocados à prova durante todo o
      curso. Em casa de falha em qualquer teste, são automaticamente desclassificados e expulsos do treinamento.
    </p>
    <p>Se o recruta sobreviver ao treinamento de um ano, ele passa a integrar o grupo dos Caçadores do Rei
      (Hunters of
      the King), podendo permanecer nesta posição ou seguir com o treinamento avançado, cujo qual também tem a
      duração de um ano, porém é muito mais difícil e desgastante. Somente após a conclusão bem sucedida do
      segundo ano de treinamento é que o recruta passa efetivamente a compor a guarda de elite e recebe o
      direito de ser denominado Caçador das Sombras, ou Shadow Hunter.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <h4>Primeiros Shadow Hunters</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col-xm-12 col-md-12 col-lg-6 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/tenente-dragonslayer.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="tenente-dragonslayer">
      <figcaption class="figure-caption text-center">Tenente Dragonslayer (Liriel Diiskye di Castella)
      </figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-6 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/tenente-noobslayer.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="tenente-noobslayer">
      <figcaption class="figure-caption text-center">Tenente Noobslayer - 2º em Comando</figcaption>
    </figure>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/falcao-peregrino.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="falcao-peregrino">
      <figcaption class="figure-caption text-center">Falcão Peregrino (Larian Pendragon)</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/viuva-negra.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="viuva-negra">
      <figcaption class="figure-caption text-center">Viúva Negra (integra a Guarda Pessoal do Imperador)
      </figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/aguia-marrom.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="aguia-marrom">
      <figcaption class="figure-caption text-center">Águia Marrom</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/furia-urso.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="furia-urso">
      <figcaption class="figure-caption text-center">Fúria do Urso</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/urso-pardo.jpeg') }}" class="figure-img img-fluid rounded sh-image" alt="urso-pardo">
      <figcaption class="figure-caption text-center">Urso Pardo</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/lobo-cinzento.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="lobo-cinzento">
      <figcaption class="figure-caption text-center">Lobo Cinzento</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/lobo-negro.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="lobo-negro">
      <figcaption class="figure-caption text-center">Lobo Negro</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/lince-negra.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="lince-negra">
      <figcaption class="figure-caption text-center">Lince Negra</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/raposa-vermelha.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="raposa-vermelha">
      <figcaption class="figure-caption text-center">Raposa Vermelha</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/sussurro-sombrio.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="sussurro-sombrio">
      <figcaption class="figure-caption text-center">Sussurro Sombrio</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/sh/vento-cortante.jpg') }}" class="figure-img img-fluid rounded sh-image" alt="vento-cortante">
      <figcaption class="figure-caption text-center">Vento Cortante</figcaption>
    </figure>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <a id="dragoes"></a>
    <h3>Dragões Dourados</h3>
    <p>Os Dragões Dourados são o grupo de contra-espionagem do Império Nameless. Eles respodem somente aos
      Imperadores.</p>
    <p>São temidos e respeitados em todo o Império. Tem poder de dar voz de prisão e tomar decisões
      militares e
      de proteção em situações de emergência.</p>
    <p>O membro mais conhecido dos Dragões Dourados é o Clérigo da Luz Seirian Leogold, irmão da General dos
      Warmages Perséfone Leogold.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <a id="warmages"></a>
    <h3>Warmages (Magos de Guerra)</h3>
  </div>
</div>
<div class="row mb-3">
  <div class="col-mb-2">
    <p>Os Warmages é uma organização militar para soldados com aptidão mágica, liderados pela Rainha da Guerra
      Perséfone Leogold</p>
    <p>Qualquer pessoa pode se candidatar ao processo seletivo, desde que atenda as seguintes exigências:</p>
    <ul>
      <li>Ter cumprido, no mínimo, um ano de treinamento militar</li>
      <li>Preencher o requerimento básico no quartel militar, ou ser indicado diretamente por um Warmage</li>
      <li>Ser maior de 11 anos</li>
      <li>Ser aprovado no teste de aptidão</li>
    </ul>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-xm-12 col-md-12 col-lg-6 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/wm/persefone-leogold.jpg') }}" class="figure-img img-fluid wm-image" alt="persefone-leogold">
      <figcaption class="figure-caption text-center">Rainha da Guerra Perséfone Leogold</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-6 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/grupos/wm/brandon-.jpg') }}" class="figure-img img-fluid wm-image" alt="brandon">
      <figcaption class="figure-caption text-center">Brandon</figcaption>
    </figure>
  </div>
</div>
<div class="row mb-3">
  <div class="col-mb-2">
    <p>O processo seletivo ocorre todo ano, no mês de Janeiro. Tem duração de dois dias e é dividido em duas provas
      escritas: conhecimento básico das leis do Império e conhecimento arcano; e três provas práticas: apresentação
      de truques arcanos, exame físico, combate aleatório. Se o candidato passar em todas as provas, estará apto a
      realizar o teste de aptidão, que consiste em demonstrar uma magia totalmente nova, criada por ele, perante uma
      banca de jurados. Todas as provas são realizadas na presença dos Capitães de Guerra.</p>
    <p>Existem 9 Esquadrões diferentes dentro da Organização dos Warmages, cada um liderado por um Capitão Warmage
      de Esquadrão. Cada esquadrão possui seu próprio símbolo.</p>
    <p>Diferente das organizações militares comuns, os Warmages tem nomes de patente diferenciados, divididos em
      cinco ranks, sendo o 1º rank o mais alto e o 5º rank o mais baixo:</p>
    <ul>
      <li>1º Rank - Rei/Rainha da Guerra</li>
      <li>2º Rank - Capitão Warmage</li>
      <li>3º Rank - Warmage Sênior</li>
      <li>4º Rank - Warmage Intermediário</li>
      <li>5º Rank - Warmage Júnior</li>
    </ul>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <h4>Esquadrões Warmage</h4>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-bisoes_negros.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="os-bisoes-negros">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-cervos_cinzentos.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="os-cervos-cinzentos">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-cravos_azuis.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="os-cravos-azuis">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-enxames_verdes.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="os-enxames-verdes">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-falcoes_prata.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="os-falcoes-de-prata">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-leoes_rubros.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="os-leoes-rubros">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-monstros_marinhos.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="os-monstros-marinhos">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-pavoes_rosa.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="os-pavoes-rosas">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-2 mb-2 text-center">
    <img src="{{ asset('assets/images/grupos/wm/wm-raiar_dourado.jpeg') }}" class="img-fluid rounded wm-brasoes" alt="o-raiar-dourado">
  </div>
</div>
<hr>
<div class="row mb-3">
  <div class="col text-center">
    <h2>Organizações Não-Militares</h2>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <a id="sussurros"></a>
    <h3>Ordem dos Sussurros da Floresta</h3>
    <p>Espécie de inteligência secreta que mantém os Imperadores a par da situação política e militar de
      suas
      fronteiras. A família Diiskye é uma das co-fundadoras.</p>
    <p>Dentro da Ordem, existem alguns boatos de que existem pessoas infiltradas em outros reinos, inclusive
      em
      outros planos, mas ninguém sabe se é verdade ou não. O único objetivo dos “Sussurros” é fornecer
      informações aos
      Imperadores​.</p>
    <p>Especializações: Seus membros são versados em técnicas de espionagem, infiltração, disfarce, sedução,
      furtividade, política, entre outros. Possuem uma linguagem própria de conversação comum mas com
      significados ocultos.​</p>
  </div>
</div>
<div class="roW mb-3">
  <div class="col">
    <a id="flechas"></a>
    <h3>Guilda Flechas Letais</h3>
    <p>Composta por rangers mercenários, foi fundada pela família Diiskye há 3 séculos. Apesar de não se
      envolver em política, é leal à família imperial de Nameless.</p>
    <p>São famosos em todo o Império por possuírem os mais competentes Rangers. Seu lema é “Missão dada,
      missão cumprida” pois quando se comprometem a fazer um trabalho, vão até o fim. O custo de seus serviços
      é alto, mas vale cada centavo.</p>
    <p>Existem várias unidades espalhadas pelo império; cada uma tem um líder, que se reporta à Proprietária
      e Líder Geral dos Flechas. As Guildas geralmente são próximas à Florestas.​</p>
    <p>Serviços oferecidos: Guia, Escolta de pessoas ou caravanas, Caçadores, Patrulha de Fronteira,
      Adestradores de Animais (cães de caça e montarias), Aulas de Arquearia.​</p>
    <p><strong>Mote: Você pode correr, mas a minha flecha vai te encontrar!</strong></p>
  </div>
</div>
<div class="row justify-content-md-center mb-3">
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/flechas-cherrywood.jpg') }}" class="img-fluid rounded ppt-image" alt="flechas-cherrywood">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/flechas-elindarin.jpg') }}" class="img-fluid rounded ppt-image" alt="flechas-elindarin">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/flechas-grand_mirill.jpg') }}" class="img-fluid rounded ppt-image" alt="flechas-grand_mirill">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/flechas-maresias.jpg') }}" class="img-fluid rounded ppt-image" alt="flechas-maresias">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/flechas-ravencliff.jpg') }}" class="img-fluid rounded ppt-image" alt="flechas-ravencliff">
  </div>
</div>

<div class="row mb-3">
  <div class="col">
    <a id="storms"></a>
    <h3>Guilda Stormblades</h3>
    <p>Composta por guerreiros mercenários, foi fundada pela família Grand Klave. Somente os guerreiros mais
      habilidosos são admitidos. É leal à família imperial de Nameless.</p>
    <p>Tem fama no Império de possuírem os melhores guerreiros mercenários, mas também os mais esquentadinhos…
    </p>
    <p>Os Stormblades quase desapareceram, pois, durante a Era das Trevas, os Dragnisters fizeram questão de
      fechar a guilda. Ressurgiu das cinzas como uma Fênix quando Sharpblade (Idriel Diiskye), antiga membro da
      guilda, comprou e assumiu a organização.</p>
    <p>Lema: Se procura guerreiros fortes, destemidos, confiáveis e devastadores, já encontrou!</p>
    <p>Serviços oferecidos: Escolta de pessoas ou caravanas, Guarda-Costas, Espadas de Aluguel.​</p>
    <p><strong>Mote: Quem entra na Tempestade, é pra se cortar!</strong>​</p>
  </div>
</div>
<div class="row justify-content-md-center mb-3">
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/storms-bonanza.jpg') }}" class="img-fluid rounded ppt-image" alt="storms-bonanza">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/storms-carvalho.jpg') }}" class="img-fluid rounded ppt-image" alt="storms-carvalho">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/storms-cherrywood.jpg') }}" class="img-fluid rounded ppt-image" alt="storms-cherrywood">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/storms-joia.jpg') }}" class="img-fluid rounded ppt-image" alt="storms-joia">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/grupos/storms-maresias.jpg') }}" class="img-fluid rounded ppt-image" alt="storms-maresias">
  </div>
</div>

@stop

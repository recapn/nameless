@extends('master')
@section('title', 'Protetorados')
@section('content')

<div class="row mb-3 mt-3">
  <div class="col text-center">
    <header>
      <a id="protetorados"></a>
      <h1>Divisão das Regiões em Protetorados</h1>
    </header>
  </div>
</div>
<div class="row mb-2">
  <div class="col alert alert-info text-center" role="alert">
    <p>Passe o mouse sobre o nome dos protetorados e clique na localização desejada! :-)</p>
  </div>
</div>
<div class="row mb-1">
  <div class="col text-center">
    <h2>Mapa Interativo</h2>
  </div>
</div>

<!-- Mapeamento de imagem -->
<div class="row mb-3">
  <div class="col text-center" id="image_map">
    <img src="{{ asset('assets/images/mapas/mapa-protetorados.svg') }}" width="1040px" height="720spx" alt="mapa-protetorados" usemap="#mapa-protetorados">
    <map name="mapa-protetorados">
      <!-- Coordenadas do mapeamento da imagem -->
      <area alt="costa-sudoeste" title="costa-sudoeste" href="{{ route('protetorados') }}#costa-sudoeste" coords="453,574,237,530" shape="rect">
      <area alt="verdejante" title="verdejante" href="{{ route('protetorados') }}#verdejante" coords="337,332,541,372" shape="rect">
      <area alt="prot-strongwill" title="prot-strongwill" href="{{ route('protetorados') }}#prot-strongwill" coords="719,474,961,518" shape="rect">
      <area alt="punho-de-ferrro" title="punho-de-ferrro" href="{{ route('protetorados') }}#punho-ferro" coords="665,277,860,324" shape="rect">
      <area alt="prot-lantror" title="prot-lantror" href="{{ route('protetorados') }}#lantror" coords="892,132,1033,169" shape="rect">
      <area alt="guerrero" title="guerrero" href="{{ route('protetorados') }}#guerrero" coords="715,137,842,168" shape="rect">
      <area alt="costa-noroeste" title="costa-noroeste" href="{{ route('protetorados') }}#costa-noroeste" coords="212,67,404,109" shape="rect">
      <area alt="prot-wyrm" title="prot-wyrm" href="{{ route('protetorados') }}#prot-wyrm" coords="429,5,658,44" shape="rect">
      <!-- Fim das coordenadas do mapeamento da imagem -->
    </map>
  </div>
</div>
<hr>

<div class="row mb-3">
  <div class="col">
    <a id="costa-noroeste"></a>
    <h2 class="text-center">Protetorado Costa Noroeste</h2>
  </div>
</div>
<div class="row mb-3 my-border">
  <div class="col">
    <h3>Protetor</h3>
    <img src="{{ asset('assets/images/mapas/npcs/jack-di-castella.jpg') }}" class="figure-img img-fluid rounded float-start prot-image" alt="jack">
    <p><strong>Jack di Castella (Prefeito de Esperanza)</strong></p>
    <p>Jack di Castella foi integrante da tripulação Jellyfish, grupo de piratas sob o comando da Capitã Sally
      Jellyfish que, posteriormente, veio a se tornar Imperatriz de Nameless.</p>
    <p>Nascido em Cantabria, ao norte da Espanha, passou por diversas situações difíceis que o fizeram perder
      sua família e tornar-se um pirata, juntando-se à tripulação do Capitão Edward Low. Quando Sally Jellyfish
      matou o capitão e assumiu seu navio, Jack foi um dos membros da tripulação que decidiu se juntar a ela. Após a
      conquista de Nameless, foi um dos cinco que decidiram se estabelecer ali.</p>
    <p>Jack é uma das poucas pessoas que possuem a confiança da Imperatriz. Em agradecimento pela lealdade, a
      Imperatriz o nomeou Prefeito da cidade costeira de Esperanza. Anos depois, quando o Império foi dividido
      em regiões, Sally o nomeou Protetor da Costa Noroeste, deixando a região sob seus cuidados.</p>
  </div>
  <div class="col">
    <h3>Localidades</h3>
    <ul>
      <li>Cidade de Bonanza</li>
      <li>Cidade de Esperanza <strong>(*)</strong></li>
      <li>Ironforge</li>
      <li>Keep dos Caveiras</li>
      <li>Keep dos Mercenários</li>
      <li>Vila Aldorar</li>
      <li>Vila Brie</li>
      <li>Vila Fortuna</li>
      <li>Vila Goodfellow</li>
    </ul>
    <p><strong>(*) Localidade base do Protetor</strong></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="bonanza"></a>
    <h4>Cidade de Bonanza</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="esperanza"></a>
    <h4>Cidade de Esperanza</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="ironforge"></a>
    <h4>Ironforge</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="keep-caveiras"></a>
    <h4>Keep dos Caveiras</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="keep-mercenarios"></a>
    <h4>Keep dos Mercenários</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="aldorar"></a>
    <h4>Vila Aldorar</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="brie"></a>
    <h4>Vila Brie</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="fortuna"></a>
    <h4>Vila Fortuna</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2">
    <a id="goodfellow"></a>
    <h4>Vila Goodfellow</h4>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <img src="{{ asset('assets/images/mapas/cidades/goodfellow1.jpg') }}" class="figure-img img-fluid rounded text-center city-image" alt="goodfellow1">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <img src="{{ asset('assets/images/mapas/cidades/goodfellow2.jpg') }}" class="figure-img img-fluid rounded text-center city-image" alt="goodfellow2">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <img src="{{ asset('assets/images/mapas/cidades/goodfellow3.jpeg') }}" class="figure-img img-fluid rounded text-center city-image" alt="goodfellow3">
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col">
    <p>Vila de porte médio, bem movimentada, situada em uma planície entre as grandes cidades Bonanza e Cidade
      dos Recifes, com a Floresta Élfica ao leste. Graçaas à sua localização estratégica, serve de ponto de parada
      para caravanas trazendo mercadorias vindas destas regiões.</p>
    <p>Devido às grandes planícies, possuem muitos rebanhos de ovelhas e gado, fazendo com que sejam grandes
      produtores de carne e lã. É famosa pelos festivais anuais, onde ocorre a final do Campeonato de Culinária,
      cujo prêmio é de 1000 peças de ouro.</p>
    <p>Sua população é composta quase totalmente pela raça Halfling. O prefeito, Dasderic Leaf, é um grande
      cozinheiro reconhecido por todo o continente.</p>
  </div>
</div>
<hr>

<div class="row mb-3">
  <div class="col">
    <a id="prot-wyrm"></a>
    <h2 class="text-center">Protetorado Wyrm</h2>
  </div>
</div>
<div class="row mb-3 my-border">
  <div class="col">
    <h3>Protetor</h3>
    <img src="{{ asset('assets/images/mapas/npcs/lucy-goldbeard.jpg') }}" class="figure-img img-fluid rounded float-start protc-image" alt="lucy">
    <p><strong>Lucy Goldbeard (Rainha do Clã Goldbeard)</strong></p>
    <p>Lucy Goldbeard é uma humana que foi adotada ainda bebê pelo casal anão líder do Clã dos Goldbeards Malna
      e Gondraf Goldbeard. Apesar de ser da raça Humana, Lucy sempre se sentiu como anã. Indicada por seu pai,
      Gondraff, a assumir seu lugar no Conselho dos Anões, houve revolta por parte de alguns clãs que não
      queriam aceitar uma humana liderando-os.</p>
    <p>Após a morte do pai, Lucy assumiu o título de Rainha do Clã Goldbeard e Líder do Conselho dos Anões,
      juntamente com seu marido Leônidas, ex-chefe da guarda pessoal da Imperatriz Sally. Tem um filho, príncipe
      Hayden Goldbeard e está a espera de seu segundo.</p>
  </div>
  <div class="col">
    <h3>Localidades</h3>
    <ul>
      <li>Cadeia de Montanhas da Wyrm</li>
      <li>Cidade de Vallerin</li>
      <li>Clã Anão Goldbeard <strong>(*)</strong></li>
      <li>Clã Anão Stonemasonry</li>
      <li>Forte HaLi</li>
      <li>Portões de Ferro</li>
      <li>Vila Brumir</li>
      <li>Vila do Lago Plácido</li>
    </ul>
    <p><strong>(*) Localidade base do Protetor</strong></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="wyrm"></a>
    <h4>Cadeia de Montanhas da Wyrm</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="vallerin"></a>
    <h4>Cidade de Vallerin</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="goldbeards"></a>
    <h4>Clã Anão Goldbeard</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="stonemasonry"></a>
    <h4>Clã Anão Stonemasonry</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="forte-hali"></a>
    <h4>Forte HaLi</h4>
    <img src="{{ asset('assets/images/mapas/cidades/forte-hali.jpg') }}" class="figure-img img-fluid rounded float-start city-image" alt="forte-hali">
    <p>Originalmente uma antiga construção de Gigantes que foi abandonada e ocupada primeiro por um mago, que a
      transformou em um laboratório, realizando experimentos com criaturas de diversas raças, misturando partes
      de seus corpos cm o intuito de criar a raça perfeita. Após sua morte, uma Bruxa Dragnister, conhecida como "A
      Bruxa", se apossou do local e de suas pesquisas, continuando com o seu trabalho. Essa Bruxa conseguiu
      criar a raça dos Crias Dracônicas, seres parte dragão, parte draconato, parte humanóide. São seres muito fortes,
      extremamente resistentes, cruéis e soltam baforada.</p>
    <p>Redescoberto pelo atual Imperador Hackin, Liriel Longbow (como era conhecida antes de receber a alcunha
      de Dragonslayer) e alguns soldados, estava repleto de zumbis e esqueletos. Com alguma dificuldade conseguiram
      derrotar as criaturas e Hackin decicidiu transformar este local em um Forte, usando o local para reunir
      aliados para lutar contra o Conselho. Após a tomada do Império, Hackin decidiu manter o Forte e promoveu
      Liriel Longbow, de quem se tornou grande amigo, a tenente, deixando-a como responsável por restaurar o
      Forte e torná-lo utilizável ao Império.</p>
    <p>Anos depois, com muito trabalho e dedicação, a então Tenente Liriel Longbow, juntamente com o Tenente
      Mohigan Stratius não só transformaram o Forte numa fortaleza militar, como também decidiram treinar seus soldados
      para se tornarem os melhores e mais eficientes soldados do império. Nasceu assim os Caçadores do Rei (King's
      Hunters), soldados altamente treinados para atuar em situações adversas com foco em infiltração, rastreio
      e sobrevivência. Algum tempo depois, aprimoraram o treinamento para que estes soldados fossem capaz de atuar
      em qualquer tipo de terreno e clima, conhecessem todos os tipos de armas, geografia, política e tivessem
      acesso a informações militares do império. Os soldados que conseguiram suportar esse treinamento foram chamados de
      <a href="{{ route('grupos') }}#shadow">Caçadores das Sombras (Shadow Hunters)</a>. Apesar de servirem ao Império, os
      Caçadores do Rei e das Sombras respondem diretamente ao Imperador e são extremamente leais a ele.</p>
    <p>Ser um Shadow Hunter é sinônimo de ser "o melhor dos melhores", o que atrai militares de todo o Império
      ao processo de alistamento semestral. Entretanto, as provas eliminatórias são extremamente difíceis e
      extenuantes, por isso apenas uma pequena porcentagem consegue entrar, e uma porcentagem ainda menor
      consegue receber a patente de Shadow Hunter. Quando Liriel passou a ser chamada de Dragonslayer, após matar o
      dragão negro do pântano que foi nomeado em sua homenagem, os recrutas apelidaram o Tenente Mohigan Stratius de
      Tenente Noobslayer, por ser extremamente rígido e exigente com os novatos. Ao invés de ficar indignado com
      a piada, Mohigan decidiu adotar o apelido como sua alcunha.</p>
    <p>A General Dragonslayer permaneceu na liderança do Forte até o final da Terceira Guerra, quando decidiu se
      aposentar.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="portoes"></a>
    <h4>Portões de Ferro</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="brumir"></a>
    <h4>Vila Brumir</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="lago-placido"></a>
    <h4>Vila do Lago Plácido</h4>
  </div>
</div>
<hr>

<div class="row mb-3">
  <div class="col">
    <a id="guerrero"></a>
    <h2 class="text-center">Protetorado Guerrero</h2>
  </div>
</div>
<div class="row mb-3 my-border">
  <div class="col">
    <h3>Protetor</h3>
    <img src="{{ asset('assets/images/mapas/npcs/guille-guerrero.jpg') }}" class="figure-img img-fluid rounded float-start prot-image" alt="guille">
    <p><strong>Guille Guerrero</strong></p>
    <p>Guille Guerrero foi integrante da tripulação Jellyfish, grupo de piratas sob o comando da Capitã Sally
      que, posteriormente, veio a se tornar Imperatriz de Nameless.</p>
    <p>Antes de se juntar à Capitã, Guille era tripulante do famoso e cruel pirata grego conhecido por
      Barba-Ruiva ou Barbarossa. Após os Jellyfish terem resgatado e devolvido a filha do Capitão, este "agradeceu" o favor
      obrigando Sally a levar a bordo 6 de seus homens de confiança para garantir que ela entregasse um item que
      o Concílio dos Piratas estava a procura. Os que sobrevireram decidiram juntar-se aos Jellyfish.</p>
    <p>Após a conquista de Nameless, Guille decidiu ficar no Império, estava enamorado de uma anã paladina, com
      quem conseguiu se casar algum tempo depois, contra a vontade da família dela. Sabendo o quanto estava difícil a
      vida do casal depois que a jovem foi expulsa de seu clã, Sally o nomeou Protetor do da região do Guerrero.</p>
  </div>
  <div class="col">
    <h3>Localidades</h3>
    <ul>
      <li>Cidade Rinur</li>
      <li>Ruínas de Bron-Thargon <strong>(*)</strong></li>
      <li>Torre e Universidade Modry Drak</li>
      <li>Vila Runian</li>
      <li>Vilarejo Lady Molina</li>
    </ul>
    <p><strong>(*) Localidade base do Protetor</strong></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="rinur"></a>
    <h4>Cidade Rinur</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="bron-thargon"></a>
    <h4>Ruínas de Bron-Thargon</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="modry"></a>
    <h4>Torre e Universidade Modry Drak</h4>
    <div class="row justify-content-md-center">
      <div class="col-xm-12 col-md-12 col-lg-6 mb-2 text-center">
        <figure class="figure">
          <img src="{{ asset('assets/images/mapas/cidades/modry-drak.jpg') }}" class="figure-img img-fluid rounded city-image" alt="modry-drak">
          <figcaption class="figure-caption text-center">Torres de Modry-Drak, após reforma</figcaption>
        </figure>
      </div>
      <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
        <figure class="figure">
          <img src="{{ asset('assets/images/mapas/npcs/molina.jpg') }}" class="figure-img img-fluid rounded peq-image" alt="molina">
          <figcaption class="figure-caption text-center">Fantasma da Feiticeira Molina</figcaption>
        </figure>
      </div>
      <p>Modry Drak foi redescoberta pela Imperatriz Sally nos primeiros meses de sua chegada a Nameless,
        enquanto procurava a região onde ficava o Clã dos Anões, para pedir seu apoio em honra ao Pacto da Flor-de-Lis,
        na luta contra o Conselho. Na época, havia apenas uma Torre, a torre oeste, e um dragão azul a guardava.
      </p>
      <p>Sally enviou um grupo composto por Jack, Guille e Júlio (piratas de sua tripulação) com quatro anões,
        sendo um deles uma jovem paladina que acabou se enamorando de Guille, e a então líder da <a href="{{ route('grupos') }}#flechas">Guilda dos Flechas Letais</a> Liriel Longbow (que viria a receber mais tarde a alcunha de Dragonslayer e assumir o Forte HaLi).</p>
      <p>O local estava repleto de fantasmas, zumbis, crias dracônicas. O grupo conseguiu derrotar essas criaturas a
        muito custo, e resgatar moradores de vilarejos da região que estavam aprisionados lá. Descobriram também
        uma vasta biblioteca arcana com livros e pergaminhos antiquíssimos, muitos em tal mau estado de conservação
        que se transformavam em pó assim que tocados. A conquista de tal lugar não veio sem um alto preço: um dos
        anões morreu, outro perdeu a barba que foi completamente queimada, e a morte de Júlio, um pirata medroso que
        acabou morrendo em seu único ato de coragem, ao pular na cabeça do dragão azul e ataca-lo com a espada,
        para libertar a Liriel. Sally e Jack ficaram arrasados com a perda do amigo, e tempos depois Sally deu o nome
        de sua primeira filha Julia, em homenagem ao amigo. Jack fez o mesmo, dando o nome de Julio ao seu segundo
        filho.</p>
      <p>Tempos depois os imperadores descobriram que a Torre era originalmente duas e não apenas uma. Encontraram
        as ruínas da segunda dezenas de metros a leste da primeira. O local pertencia a um grande mago, morto há
        muito tempo, e posteriormente foi ocupado pela "Bruxa Dragnister" que iniciou a Terceira Guerra, na
        intenção de eliminar de uma vez por todas a família Waliwatu e tomar o Império para si. A segunda torre tinha um
        portal que levava a uma antiga construção de Gigantes abandonada, ue posteriomente tornou-se o Forte
        Hali.</p>
      <p>Após a reforma da segunda torre de Modry Drak, os Imperadores decidiram utilizar a Torre Oeste como
        Biblioteca Arcana, visto que a maioria dos livros encontrados na tomada da Torre eram de magia e muito
        antigos. Qualquer tentativa de levá-los a Capital ou a qualquer escola de magia resultaria na destruição
        dos mesmos. Aos poucos estes livros tem sido cuidadosamente preservados e restaurados ou copiados pelo Mago
        Imperial Gnomiran, que se estabeleceu na torre.</p>
      <p>No topo da Torre, abrigado de intempéries, está instalado um dos canhões que faziam parte do navio
        Rainha, que pertencia à Imperatriz Sally na época em que era pirata. Poucos conhecem a história dos canhões do
        navio, mas todos eles servem de "âncora" para espíritos que não conseguiram seguir adiante por terem
        assuntos inacabados no plano material. Alguns desses espíritos decidiram permanecer com a Imperatriz,
        quando esta cedeu o navio ao seu antigo contra-mestre 4, atual Capitão pirata do Rainha. Este canhão que está
        na torre é "âncora" de uma antiga feiticeira chamada Molina, cujas aparições revelam uma mulher pálida,
        olhos verdes intensos, cabelos curtos negros como a noite, com o pescoço quase degolado e segurando um livro.
        Como Molina estava sempre com um livro, e devido a garganta cortada não consegue falar, Sally achou que ela
        gostaria de ficar ali, rodeada de livros, e acertou em cheio. O fantasma da Molina não pode se afastar
        muito do canhão, então seus movimentos são restritos às duas Torres e seus arredores.</p>
      <p>A Torre Leste foi fechada para uso militares apenas, coordenada pela General (mulher do padeiro) que
        também é Chefe da Guarda pessoal da Imperatriz. O local, de acesso restrito, possui um portal que foi
        restaurado logo após a reconstrução da torre, e que leva ao Forte HaLi.</p>
    </div>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="runian"></a>
    <h4>Vila Runian</h4>
    <p>Localizada ao norte, para dentro das Montanhas Lantror.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="molina"></a>
    <h4>Vilarejo Lady Molina</h4>
    <img src="{{ asset('assets/images/mapas/cidades/lady-molina.jpg') }}" class="figure-img img-fluid rounded float-start city-image" alt="vilarejo-lady-molina">
    <p>Após a reforma da segunda torre de Modry Drak, alguns militares foram designados para este posto, o que
      os mantinha muito longe de suas famílias. Alguns, como a própria General (mulher do padeiro) optou por
      construir, com a autorização dos Imperadores, casas para suas famílias morarem a cerca de 20 minutos da
      Torre, num terreno mais baixo. O marido da general é padeiro e decidiu abrir a primeira padaria do local.
    </p>
    <p>A região é montanhosa, tem as estações do ano bem definida. No inverno é comum nevar, tornando o terreno
      perigoso e escorrgadio. Nas outras três estações do ano o local é bem acolhedor e tem uma vista lindíssima
      da região. Durante o outono e inverno é comum a Torre Modry Drak ficar envolta em brumas.</p>
    <p>Com o passar dos anos, esse pequeno assentamento cresceu, graças não apenas aos militares mas também aos
      estudiosos que vinham para consultar a Biblioteca Arcana.</p>
    <p>Quando a Imperatriz decidiu construir uma Universidade próxima à Torre, incluindo dormitórios para os
      estudantes, atraiu mais pessoas para a região. Após a inauguração da Universidade, o assentamento foi
      promovido a Vilarejo e recebeu o nome de Vilarejo Lady Molina, em homenagem a fantasma da Torre Oeste. O
      Vilarejo continua crescendo e tem sido uma ótima oportunidade de negócios para muitos.</p>
  </div>
</div>
<hr>

<div class="row mb-3">
  <div class="col">
    <a id="lantror"></a>
    <h2 class="text-center">Protetorado Lantror</h2>
  </div>
</div>
<div class="row mb-3 my-border">
  <div class="col">
    <h3>Protetor</h3>
    <img src="{{ asset('assets/images/mapas/npcs/uggar.jpg') }}" class="figure-img img-fluid rounded float-start prot-image" alt="chefe-uggar">
    <p><strong>Chefe Uggar</strong></p>
    <p>Durante a batalha para derrubar o Conselho e assumir o trono por direito, Sally teve que enfrentar um
      grupo de Orcs contratado para matá-la. Sem se abalar, se aproximou deles pedindo para falar com o chefe, que
      para sua surpresa era uma fêmea, de nome Maria. Sally disse que não tinha dinheiro para pagá-los em troca de
      não matá-la, mas se os Orcs se unissem a ela para derrubar o Conselho, ou pelo menos não lutassem, assim que
      assumir o trono fará negociações com eles e lhes dará excelentes condições para a tribo prosperar.</p>
    <p>A chefe Maria acabou aceitando o acordo, a Imperatriz cumpriu sua palavra parando de comprar metal dos
      Ironforge (que não a apoiaram durante o combate) e passando a negociar com os Orcs. Quando dividiu as
      regiões em Protetorados, ofereceu a região da tribo dos Orcs para Maria. Após a morte dela, anos mais
      tarde, apoiou seu filho Uggar para assumir o protetorado e a liderança dos Orcs.</p>
  </div>
  <div class="col">
    <h3>Localidades</h3>
    <ul>
      <li>Cadeia de Montanhas Lantror</li>
      <li>Cidade Garrash <strong>(*)</strong></li>
      <li>Condado das Brumas Sombrias</li>
      <li>Platô</li>
    </ul>
    <p><strong>(*) Localidade base do Protetor</strong></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="montanhas-lantror"></a>
    <h4>Cadeia de Montanhas Lantror</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="garrash"></a>
    <h4>Cidade Garrash</h4>
    <p>Maior cidade dos Orcs. Era uma tribo relativamente pequena que, após o acordo com a Sally, cresceu e se
      tornou próspera.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="brumas"></a>
    <h4>Condado das Brumas Sombrias</h4>
    <p>Região que vive permanentemente envolta em brumas. O prefeito é um Conde vampiro chamado Lestar Victorian
      que, apesar de ser vampiro, se mantém longe de confusão.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="plato"></a>
    <h4>Platô</h4>
    <p>Região de difícil acesso nas Montanhas Lantror, onde a fauna e a flora são enormes devido a ação de
      druidas no passado.</p>
    <p>É lar da Tribo da Snack (cobra gigantesca), cuja vila foi construída dentro da pele morta do "pai da
      Snack" e de uma vila de pescadores. Um pouco mais distante vivem o povo Abelha (abelhas humanóides) e o povo
      Aracnídeo (povo pacífico, são aranhas humanóides). Também tem louva-deus gigantes, equivalente ao tamanho
      de duas ou três pessoas uma em cima da outra, e um gorila gigantesco.</p>
  </div>
</div>
<hr>
<div class="row mb-3">
  <div class="col">
    <a id="punho-ferro"></a>
    <h2 class="text-center">Protetorado Punho de Ferro</h2>
  </div>
</div>
<div class="row mb-3 my-border">
  <div class="col">
    <h3>Protetor</h3>
    <img src="{{ asset('assets/images/mapas/npcs/alisandra.jpg') }}" class="figure-img img-fluid rounded float-start prot-image" alt="alisandra">
    <p><strong>General Alisandra Lionheart</strong></p>
    <p>General Alisandra Lionheart foi a primeira mulher a fazer parte do Comando de Guerra do Império. Sua
      lealdade e habilidade em comandar os exércitos são extraordinárias. É um líder nata sem papas na língua,
      direta e justa</p>
    <p>O Protetorado Punho de Ferro foi originalmente governado pelo General Gralius Fortress. Após sua morte,
      os Imperadores decidiram que a General Alisandra seria a Protetora mais adequada para a região, pois sua
      personalidade e capacidade estratégica é muito similar a de Gralius. Dessa forma, acreditam manter e
      honrar o legado do grande General de punho de ferro. Alisandra aceitou a nova função e, mesmo podendo alterar o
      nome do protetorado, se assim quisesse, optou por manter o nome em homenagem ao grande General Gralius,
      seu irmão.</p>
    <p>General Alisandra é casada, tem 5 filhos e mora na cidade de Calamdra.</p>
  </div>
  <div class="col">
    <h3>Localidades</h3>
    <ul>
      <li>Bosque dos Nobres</li>
      <li>Cidade Aldoran</li>
      <li>Cidade de Calamdra <strong>(*)</strong></li>
      <li>Floresta dos Corvos</li>
      <li>Vila Carvalho Dourado</li>
      <li>Vila Grand Mirill</li>
      <li>Vila Malbeque</li>
      <li>Vila Ravencliff</li>
      <li>Vila Riachuelo</li>
    </ul>
    <p><strong>(*) Localidade base do Protetor</strong></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="bosque-nobres"></a>
    <h4>Bosque dos Nobres</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="aldoran"></a>
    <h4>Cidade Aldoran</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="calamdra"></a>
    <h4>Cidade de Calamdra</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="floresta-corvos"></a>
    <h4>Floresta dos Corvos</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="carvalho"></a>
    <h4>Vila Carvalho Dourado</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="grand-mirill"></a>
    <h4>Vila Grand Mirill</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="malbeque"></a>
    <h4>Vila Malbeque</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="ravencliff"></a>
    <h4>Vila Ravencliff</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="riachuelo"></a>
    <h4>Vila Riachuelo</h4>
  </div>
</div>
</ul>
<hr>
<div class="row mb-3">
  <div class="col">
    <a id="prot-strongwill"></a>
    <h2 class="text-center">Protetorado Strongwill</h2>
  </div>
</div>
<div class="row mb-3 my-border">
  <div class="col">
    <h3>Protetor</h3>
    <img src="{{ asset('assets/images/grupos/rivali-strongwill.jpg') }}" class="figure-img img-fluid rounded float-start protc-image" alt="rivali">
    <p><strong>Conde Rivali Strongwill</strong></p>
    <p>Rivali Strongwill é o líder da <a href="{{ route('grupos') }}#strongwill">Família Strongwill</a>, uma das mais
      antigas de Nameless. Foi ele quem contratou a então líder dos Flechas Letais, Liriel Longbow, para receber a
      legítima herdeira do trono Kaylane Waliwatu, na época conhecida como a pirata Sally Jellyfish, quando os navios
      aportaram em Maresias, e levá-los em segurança até a <a href="{{ route('protetorados') }}#fort-strongwill">Fortaleza Strongwill</a>.
      O Barão Rivali também forneceu recursos e homens para ajudar Sally a derrubar o Conselho e tomar o
      Império. Rivali e seu filho mais velho, Percival, participaram da guerra da Queda do Conselho e da Terceira Guerra,
      sempre ao lado dos Imperadores.</p>
    <p>Anos depois, quando as regiões foram divididas em Protetorados, os Imperadores concederam essa região ao
      Barão Rivali, em agradecimento a longa amizade entre as famílias, sua lealdade e ajuda inestimável para
      recuperar o trono. Também concederam a ele o título de Conde.</p>
  </div>
  <div class="col">
    <h3>Localidades</h3>
    <ul>
      <li>Cidade Jóia da Amizade</li>
      <li>Cidade Grondar</li>
      <li>Cidade Porto da Coroa</li>
      <li>Cidade Ventarin</li>
      <li>Ducado de La Rochele</li>
      <li>Entreposto Último Descanso</li>
      <li>Floresta Carnablood</li>
      <li>Floresta e Cidade de Cherrywood</li>
      <li>Fortaleza dos Strongwill <strong>(*)</strong></li>
      <li>Templo do Deus da Natureza</li>
      <li>Vila Marlin</li>
    </ul>
    <p><strong>(*) Localidade base do Protetor</strong></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="joia"></a>
    <h4>Cidade Jóia da Amizade</h4>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/joia2.jpeg') }}" class="figure-img img-fluid rounded peq-image" alt="joia">
      <figcaption class="figure-caption text-center">Jóia da Amizade</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/joia1.jpg') }}" class="figure-img img-fluid rounded city-image" alt="joia-universidade">
      <figcaption class="figure-caption text-center">Vista da Escola e Universidade</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/joia3-templo_luz_ext.jpg') }}" class="figure-img img-fluid rounded city-image" alt="joia-templo-luz-ext">
      <figcaption class="figure-caption text-center">Vista do Templo da Luz</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-3 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/joia4-templo_luz_int.png') }}" class="figure-img img-fluid rounded city-image" alt="joia-templo-luz-int">
      <figcaption class="figure-caption text-center">Templo da Luz - vista interna</figcaption>
    </figure>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col">
    <p>É a maior e mais antiga cidade do Império Nameless, que se iniciou com ela. Foi a capital do Império,
      onde se localizavam a Sede do Conselho e o Castelo Ohana (moradia da Família Imperial de Nameless).</p>
    <p>Assim que os imperadores Sally e Hackin assumiram o trono, a primeira coisa que a Imperatriz fez foi
      transferir a capital para a costa sul, na cidade litorânea de Coroa de Maresias, devido ao seu grande amor
      pelo Mar. A morada da família Imperial passou a ser o antigo castelo de veraneio, rebatizado para Castelo
      Ohana. O antigo castelo em Jóia da Amizade foi convertido em escola e faculdade.</p>
    <p>Em Jóia da Amizade está localizado o principal Templo do Deus da Luz. Além de ser o Deus mais cultuado de
      Nameless, este templo é considerado o mais antigo e bem conservado templo existente do continente.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="grondar"></a>
    <h4>Cidade Grondar</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="porto-coroa"></a>
    <h4>Cidade Porto da Coroa</h4>
    <p>Antiga Ka Lei Kai (Coroa do Mar), é a cidade mais antiga de Nameless.
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="ventarin"></a>
    <h4>Cidade Ventarin</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="rochele"></a>
    <h4>Ducado de La Rochele</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="ultimo-descanso"></a>
    <h4>Entreposto Último Descanso</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="carnablood"></a>
    <h4>Floresta Carnablood</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="cherrywood"></a>
    <h4>Floresta e Cidade de Cherrywood</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="fort-strongwill"></a>
    <h4>Fortaleza dos Strongwill</h4>
    <img src={{ asset('assets/images/mapas/cidades/fortaleza-strongwill.jpg') }}" class="figure-img img-fluid rounded float-start city-image" alt="fortaleza-strongwill">
    <p>A Fortaleza dos Strongwill é a residência da família Strongwill. Este condado é praticamente uma
      fortaleza,
      daí o seu nome, bem protegido por altas muralhas e soldados leais.</p>
    <p>Governado pelas mãos experientes do Conde Rivali e seu primogênito, Visconde Percival, é um dos mais
      antigos
      assentamentos do Império, tendo sido construído na época em que Jóia da Amizade foi declarada capital.</p>
    <p>A principal característica do condado é que a maioria de seus soldados são seguidores do Deus da Luz,
      assim
      como a família Strongwill.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="templo-natureza"></a>
    <h4>Templo do Deus da Natureza</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="marlin"></a>
    <h4>Vila Marlin</h4>
  </div>
</div>
<hr>

<div class="row mb-3">
  <div class="col">
    <a id="costa-sudoeste"></a>
    <h2 class="text-center">Protetorado Costa Sudoeste</h2>
  </div>
</div>
<div class="row mb-3 my-border">
  <div class="col">
    <h3>Protetor</h3>
    <img src="{{ asset('assets/images/mapas/npcs/sally.jpg') }}" class="figure-img img-fluid rounded float-start protc-image" alt="sally">
    <p><strong>Imperatriz Kaylane Waliwatu Cutler (Sally Jellyfish)</strong></p>
    <p>Sally Jellyfish foi uma Capitã pirata famosa por explodir os lugares por onde passava em águas inglesas e
      espanholas. Sequestrada ainda criança por um capitão pirata pago para assassinar sua família, cresceu como
      escrava no navio, sem conhecer sua origem, até conseguir matá-lo e roubar o navio. Durante suas aventuras,
      encontrou com um druida que entregou um colar a ela e a Maillikka, a quem conheceu por acidente, revelando
      que eram irmãs e herdeiras legítimas do trono de Nameless, para onde deviam seguir com urgência e libertar o
      povo do Conselho que governava.</p>
    <p>Com 19 anos, grávida de gêmeos, em terra desconhecida e com menos de 100 homens ao seu lado, conseguiu
      derrotar o Conselho, libertar a Floresta Élfica. Governa com foco no bem estar do povo comum e na
      meritocracia. É conhecida como "Imperatriz do Povo" e "A Conciliadora". É casada com o Imperador Hackin
      Bartholomew Cutler, seu antigo contra-mestre, com quem tem 4 filhos.</p>
  </div>
  <div class="col">
    <h3>Localidades</h3>
    <ul>
      <li>Cidade de Maresias (Capital)<strong>(*)</strong></li>
      <li>Cidade de Porto Belo</li>
      <li>Cidade dos Recifes</li>
      <li>Cidade Taurian</li>
      <li>Enseada da Madrepérola</li>
    </ul>
    <p><strong>(*) Localidade base do Protetor</strong></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="maresias"></a>
    <h4>Cidade de Maresias (Capital)</h4>
  </div>
</div>
<div class="row justify-content-md-center mb-3">
  <div class="col">
    <p>Maresias é uma cidade costeira e atual Capital do Império Nameless. Ela está dividida em três partes
      distintas:</p>
    <h5>Coroa de Maresias</h5>
    <p>Coroa de Maresias é o nome dado à região mais alta, que se localiza no topo da colina da cidade. É uma
      área
      nobre, onde se localiza o "novo" Castelo Ohana, rebatizado pela Imperatriz quando decidiu morar nele com a
      família. Este castelo era antigamente o castelo de veraneio da família imperial. Devido ao seu grande amor
      pelo
      mar, Sally não conseguiu se ver morando numa cidade longe da costa, então decidiu contra todo o bom senso
      e a
      opinião de todos os governantes do Império, mudar a Capital de Jóia da Amizade para Maresias.</p>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/maresias-castelof.jpg') }}" class="figure-img img-fluid rounded city-image" alt="castelo-ohana-frente">
      <figcaption class="figure-caption text-center">Castelo Ohana (frente)</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/maresias-castelol.jpg') }}" class="figure-img img-fluid rounded city-image" alt="castelo-ohana-lateral">
      <figcaption class="figure-caption text-center">Castelo Ohana (vista da rua)</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/maresias-casteloj.jpg') }}" class="figure-img img-fluid rounded city-image" alt="castelo-ohana-jardins">
      <figcaption class="figure-caption text-center">Um dos jardins do Imperador</figcaption>
    </figure>
  </div>
</div>
<div class="row justify-content-md-center mb-3">
  <div class="col">
    <h5>Maresias</h5>
    <p>Maresias é a parte baixa da cidade, aos pés da colina. É uma região bem movimentada, onde a maior parte
      do comércio está situada. Tem crescido muito nos últimos anos, porém de forma organizada, tornando-a uma das
      cidades mais bonitas e agradáveis do Império.</p>
    <p>A Rua do Mirante é uma das principais rua da cidade, pois leva diretamente a Coroa de Maresias. Recebeu
      esse nome pela belíssima vista que concede da parte alta, parte baixa e zona portuária. Na Praça Central são
      realizadas os diversos festivais da cidade, que atraem visitantes de toda a parte. O principal dos eventos
      é o Festival Anual dos Heróis, homenagem a todos os defensores do Império. É nessa mesma praça onde podemos
      ver a Pedra dos Heróis, literalmente uma enorme placa de pedra onde são marcados os nomes de todos os que
      pereceram na defesa de Nameless. "Não estaríamos aqui vivendo nossas vidas sem a coragem e o sacrifício deles.
      Devemos marcar seus nomes em pedra para que nossa geração e as próximas não se esqueçam disso", palavras da
      Imperatriz quando a pedra foi colocada pela primeira vez, após assumir o trono.</p>
    <p>Por toda a cidade é possível ver estátuas de deuses, pessoas importantes para os imperadores e Nameless,
      como a do Santo Tad, antigo clérigo e imediato da Capitã Sally Jellyfish que foi transformado no Santo das
      Causas Impossíveis; Tut a tubaroa atroz amiga da imperatriz que morreu em Maresias defendendo a cidade, três
      canhões nomeados como João, Maria e Antonieta.</p>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-xm-12 col-md-12 col-lg-6 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/maresias-praça.jpg') }}" class="figure-img img-fluid rounded city-image" alt="rua-do-mirante">
      <figcaption class="figure-caption text-center">Praça Central</figcaption>
    </figure>
  </div>
  <div class="col-xm-12 col-md-12 col-lg-6 mb-2 text-center">
    <figure class="figure">
      <img src="{{ asset('assets/images/mapas/cidades/maresias-rua_mirante.jpg') }}" class="figure-img img-fluid rounded city-image" alt="rua-do-mirante">
      <figcaption class="figure-caption text-center">Vista da Rua do Mirante</figcaption>
    </figure>
  </div>
</div>
<div class="row justify-content-md-center mb-3">
  <div class="col">
    <h5>Porto de Maresias</h5>
    <p>É a região portuária e o principal porto do Império. A maioria dos navios que aportam são militares,
      comerciantes e pescadores locais. Essa era uma zona perigosa, porém foi completamente reestruturada
      através de
      um projeto pessoal da Imperatriz Sally. Ainda existem áreas pouco seguras em alguns becos do porto, porém
      nada
      que comprometa os cidadãos de bem que passam por ali diariamente. Nestes locais mais afastados existem
      estalagens e tavernas frequentadas por criminosos e dois prostíbulos.</p>
    <p>Após a reforma, o porto passou a contar com estaleiros (para a manutenção dos barcos e navios), armazéns
      de
      aluguel para armazenagem temporária de carga, abras (para proteger embarcações das intempéries e até mesmo
      guarda-las quando estão fora de uso), tavernas e estalagens simples porém limpas e seguras, loja de
      artesanato
      feito com madeira à deriva, barracas de comida e bebidas.</p>
    <p>Alguns anos atrás um grupo formado pelas principais Casas de Comércio fizeram uma solicitação para
      impedir o
      uso do porto pelos pescadores locais, que "atravacavam as docas com seus barquinhos", alegando que os
      navios
      comerciantes dão muito mais lucro para o Império. A Imperatriz literalmente riu na cara
      deles, dizendo que os pescadores tinham tanto direito a ganhar a vida como as Casas de Comércio. A
      Imperatriz
      foi pessoalmente até o porto analisar o local das reclamações e verificou que estava perigoso para as
      pequenas
      embarcações. Conversou com os pescadores locais, para ouvir o lado deles da história e por fim deu ordens
      para
      delimitar uma parte do cais onde são permitidas apenas pequenas embarcações. Melhorou a infraestrutura dos
      ancoradouros para garantir segurança de carga, descarga, embarque e desembarque, dividindo o espaço de
      forma
      otimizada, sem perdas para os pescadores locais nem para os grandes comerciantes.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="porto-belo"></a>
    <h4>Cidade de Porto Belo</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="recifes"></a>
    <h4>Cidade dos Recifes</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="taurian"></a>
    <h4>Cidade Taurian</h4>
    <p>Cidade dos Minotauros.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="madreperola"></a>
    <h4>Enseada de Madrepérola</h4>
  </div>
</div>
<hr>
<div class="row mb-3">
  <div class="col">
    <a id="verdejante"></a>
    <h2 class="text-center">Protetorado Verdejante</h2>
  </div>
</div>
<div class="row mb-3 my-border">
  <div class="col">
    <h3>Protetor</h3>
    <img src="{{ asset('assets/images/mapas/npcs/reis-elfos.jpeg') }}" class="figure-img img-fluid rounded float-start protc-image" alt="reis-elfos">
    <p><strong>Reis Elfos</strong></p>
    <p>a definir</p>
  </div>
  <div class="col">
    <h3>Localidades</h3>
    <ul>
      <li>Cidade de Elindarin</li>
      <li>Cidade Equinópolis</li>
      <li>Entreposto de Suhuain</li>
      <li>Floresta de Eldunári</li>
      <li>Floresta Élfica<strong>(*)</strong></li>
      <li>Ruínas da Rainha</li>
      <li>Vila Middleway</li>
      <li>Vila Paraíso Branco</li>
      <li>Vila Rafarindo</li>
    </ul>
    <p><strong>(*) Localidade base do Protetor</strong></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="elindarin"></a>
    <h4>Cidade de Elindarin</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="equinópolis"></a>
    <h4>Cidade Equinópolis</h4>
    <p>Cidade dos Centauros, conhecida por seus vinhos de alta qualidade.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="suhuain"></a>
    <h4>Entreposto de Suhuain</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="eldunari"></a>
    <h4>Floresta de Eldunári</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="elfica"></a>
    <h4>Floresta Élfica</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="ruinas-rainha"></a>
    <h4>Ruínas da Rainha</h4>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="middleway"></a>
    <h4>Vila Middleway</h4>
    <img src="{{ asset('assets/images/mapas/cidades/vilarejo-middleway.svg') }}" class="figure-img img-fluid rounded float-end ppt-image" alt="vilarejo-middleway">
    <p>Antigamente conhecida como Vilarejo Middleway, ou simplesmente Entreposto Middleway, está localizada
      exatamente no meio da única estrada que liga a Vila Paraíso Branco e a Cidade Jóia da Amizade (antiga
      capital), a 2 dias de viagem de cada).</p>
    <p>Possuía menos de 30 habitantes; existia apenas uma estrebaria (Estábulo do Sr. Godoy), uma loja de
      mantimentos (Empório Sra. Flores), poço e bica d’água, a Ferraria Villeneauve, um curtidor de couro e a
      Estalagem Last Stop. Após a morte da família imperial, O Conselho prendeu os proprietários da estalagem,
      Denira e Phillip Nosluoc Diiskye e confiscou o estabelecimento. Meses depois o Conselho vendeu o local a
      um
      mercador ilícito que a transformou no ponto de encontro de vários criminosos.</p>
    <p>Após a destituição do Conselho e reconquista do Império pelos Imperadores Kaylane Waliwatu Cutler (Sally
      Jellyfish) e Hackin Bartholomew Cutler, o local ficou abandonado. Os proprietários originais foram
      assassinados na prisão, e os Imperadores devolveram a posse do estabelecimento para a filha mais velha,
      Liriel Longbow, que viria a ser uma das criadoras do destacamento militar chamado Shadow Hunters.
      Naquele momento, Liriel não poderia cuidar do local pois estava prestes a se tornar Tenente no Forte
      HaLi, ficando a estalagem em completo abandono até que sua irmã mais nova, Idriel Diiskye retornou para
      este plano.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <h5>Estalagem Nosso Eldunári</h5>
    <img src="i{{ asset('assets/images/mapas/cidades/middleway-estalagem/estalagem1.svg') }}" class="figure-img img-fluid rounded float-start ppt-image" alt="estalagem1">
    <p>Idriel só decidiu ficar com a antiga estalagem dos pais e reformá-la quando conheceu Hayam Cutler, bardo
      muito conhecido e irmão mais novo do Imperador, com quem viria a se casar pouco tempo depois. Hayam e
      Idriel reformaram juntos a Estalagem, com a ajuda de Margarida, primeira funcionária contratada. Muitos
      meses depois eles reabriram a Estalagem sob o nome de Nosso Eldunári (Eldunári significa "Coração" em
      élfico), em homenagem ao início da vida nova do casal e à Floresta de Eldunári, localizada na outra margem
      do rio que corre atrás da estalagem.</p>
    <p>Por ser dirigida pela líder da Guilda Stormblades e pelo irmão do Imperador, além de comercializar
      bebidas
      exóticas de outros planos, o local atrai pessoas de todos os lugares. Em poucos anos tornou-se uma das
      melhores estalagens do Império, trazendo desenvolvimento para o pequeno vilarejo, que logo se emancipou em
      vila. Extra-oficialmente, Middleway deveria ser um ducado pois Hayam e Idriel possuem os títulos de Duque
      e
      Duquesa; entretanto nenhum dos dois se importam com essas "firulas". Após a Terceira Guerra, o Duque Hayam
      foi
      escolhido como prefeito da Vila da Middleway.</p>
  </div>
</div>
<div class="row justify-content-md-center mb-3">
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/mapas/cidades/middleway-estalagem/estalagem2.svg') }}" class="img-fluid rounded ppt-image" alt="estalagem2">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/mapas/cidades/middleway-estalagem/estalagem3.svg') }}" class="img-fluid rounded ppt-image" alt="estalagem3">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/mapas/cidades/middleway-estalagem/estalagem4.svg') }}" class="img-fluid rounded ppt-image" alt="estalagem4">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/mapas/cidades/middleway-estalagem/estalagem5.svg') }}" class="img-fluid rounded ppt-image" alt="estalagem5">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/mapas/cidades/middleway-estalagem/estalagem6.svg') }}" class="img-fluid rounded ppt-image" alt="estalagem6">
  </div>
  <div class="col-xm-12 col-md-12 col-lg-4 mb-3">
    <img src="{{ asset('assets/images/mapas/cidades/middleway-estalagem/estalagem7.svg') }}" class="img-fluid rounded ppt-image" alt="estalagem7">
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="paraiso-branco"></a>
    <h4>Vila Paraíso Branco</h4>
    <p>Vila Paraíso Branco é uma vila rural, muito conhecida pela sua produção de algodão (daí o seu nome), seda
      e
      tecidos. Tem extrema importância para economia do Império.</p>
  </div>
</div>
<div class="row mb-3">
  <div class="col mb-2">
    <a id="rafarindo"></a>
    <h4>Vila Rafarindo</h4>
    <p>Rafarindo é uma vila rural, tendo o comércio de abóboras como sua principal fonte de renda.</p>
    <p>
      O Festival da Abóbora é uma festa anual tradicional de Rafarindo, tem duração de três dias e atrai
      visitantes de várias regiões, não apenas pela comida e música, mas também pelo famoso Concurso de Culinária. Durante
      os três dias de festa a vila é enfeitada pelos moradores, o cheiro de abóbora e quitutes impregnam o ar, a
      música alegre consegue arrancar sorrisos até mesmo do cidadão mais mal humorado.
    </p>
    <p>A praça central oferece diversos tipos de atrações, além das barraquinhas de comidas e bebidas típicas,
      todas à base de abóbora. A cerveja e o licor de abóbora são iguarias tradicionais da vila, cujo segredo é
      passado de geração em geração entre os membros da família. Também é comum nesse festival: suco de abóbora, sopa,
      bolinhos fritos, sementes torradas, tortas doces e salgadas, doces de abóbora de diversos tipos, com batata doce,
      abóbora ralada com especiarias, quadradinhos de abóbora com açúcar (os favoritos das crianças!).</p>
    <p>
      São realizadas competições típicas do campo, como: concurso da maior abóbora e escultura na abóbora;
      entretanto o ponto alto do evento é o Concurso de Culinária, pois Rafarindo faz parte das Oito Vilas que
      compõem o Circuito de Culinária, uma iniciativa dos Imperadores juntamente com o prefeito da
      <a href="{{ route('protetorados')}}#goodfellow">Vila Goodfellow</a>
      para movimentar os negócios das pequenas vilas rurais do Império. Cada eliminatória do concurso é
      realizada em uma dessas vilas, e o desafio dos participantes é preparar um prato com o alimento típico do festival em
      questão. A final do Concurso é sempre realizada na Vila Goodfellow, e o vencedor recebe um grande prêmio
      de 1000 moedas de ouro
    </p>
  </div>
</div>

@stop

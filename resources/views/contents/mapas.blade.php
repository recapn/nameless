@extends('master')
@section('title', 'Mapas, Cidades e Localizações')
@section('content')

<div class="row mb-3">
  <div class="col text-center">
    <header>
      <a id="home"></a>
      <h1>Mapas, Cidades e Distâncias</h1>
    </header>
  </div>
</div>
<div class="row mb-2">
  <div class="col alert alert-info text-center" role="alert">
    <p>Passe o mouse sobre o mapa e clique na localização desejada!<br>Quer consultar o mapa dividido em regiões? Acesse o <a href="{{ route('protetorados') }}">Mapa dos Protetorados</a></p>
  </div>
</div>
<div class="row mb-3">
  <div class="col text-center">
    <h2>Mapa Interativo</h2>
  </div>
</div>

<!-- Mapeamento de imagem -->
<div class="row mb-3">
  <div class="col text-center" id="image_map">
    <img src="{{ asset('assets/images/mapas/mapa-nameless.jpg') }}" width="1042px" height="782px" alt="mapa-nameless" usemap="#mapa-nameless">
    <map name="mapa-nameless">
      <area shape="rect" coords="95, 282, 165, 333" href="{{ route('protetorados') }}#goodfellow" alt="goodfellow">
      <area shape="rect" coords="568, 56, 609, 101" href="{{ route('protetorados') }}#forte-hali" alt="forte-hali">
      <area shape="rect" coords="676, 408, 749, 476" href="{{ route('protetorados') }}#joia" alt="joia-da-amizade">
      <area shape="rect" coords="722, 138, 779, 209" href="{{ route('protetorados') }}#modry-drak" alt="modry-drak">
      <area shape="rect" coords="483, 490, 571, 578" href="{{ route('protetorados') }}#maresias" alt="maresias">
      <area shape="rect" coords="413, 442, 475, 506" href="{{ route('protetorados') }}#taurian" alt="taurian">
      <area shape="rect" coords="269, 492, 347, 569" href="{{ route('protetorados') }}#porto-belo" alt="porto-belo">
      <area shape="rect" coords="142, 426, 223, 500" href="{{ route('protetorados') }}#madreperola" alt="enseada-madreperola">
      <area shape="rect" coords="193, 386, 262, 413" href="{{ route('protetorados') }}#sihuain" alt="entreposto-sihuain">
      <area shape="rect" coords="85, 352, 166, 402" href="{{ route('protetorados') }}#recifes" alt="recifes">
      <area shape="rect" coords="174, 337, 240, 374" href="{{ route('protetorados') }}#equinopolis" alt="equinopolis">
      <area shape="rect" coords="114, 223, 196, 270" href="{{ route('protetorados') }}#bonanza" alt="bonanza">
      <area shape="rect" coords="283, 359, 431, 420" href="{{ route('protetorados') }}#elfica" alt="floresta-elfica">
      <area shape="rect" coords="254, 267, 315, 296" href="{{ route('protetorados') }}#elindarin" alt="elindarin">
      <area shape="rect" coords="212, 230, 250, 260" href="{{ route('protetorados') }}#fortuna" alt="fortuna">
      <area shape="rect" coords="236, 126, 312, 201" href="{{ route('protetorados') }}#keep-caveiras" alt="keep-caveiras">
      <area shape="rect" coords="340, 121, 400, 167" href="{{ route('protetorados') }}#ironforge" alt="ironforge">
      <area shape="rect" coords="325, 215, 387, 255" href="{{ route('protetorados') }}#aldorar" alt="aldorar">
      <area shape="rect" coords="418, 123, 477, 180" href="{{ route('protetorados') }}#esperanza" alt="esperanza">
      <area shape="rect" coords="413, 304, 472, 335" href="{{ route('protetorados') }}#rafarindo" alt="rafarindo">
      <area shape="rect" coords="451, 347, 507, 375" href="{{ route('protetorados') }}#ruinas-rainha" alt="ruinas-rainha">
      <area shape="rect" coords="518, 395, 599, 437" href="{{ route('protetorados') }}#eldunari" alt="eldunari">
      <area shape="rect" coords="587, 448, 665, 487" href="{{ route('protetorados') }}#cherrywood" alt="cherrywood">
      <area shape="rect" coords="765, 449, 814, 503" href="{{ route('protetorados') }}#fort-strongwill" alt="fort-strongwill">
      <area shape="rect" coords="623, 536, 685, 565" href="{{ route('protetorados') }}#templo-natureza" alt="templo-natureza">
      <area shape="rect" coords="672, 490, 723, 516" href="{{ route('protetorados') }}#ultimo-descanso" alt="ultimo-descanso">
      <area shape="rect" coords="719, 526, 797, 568" href="{{ route('protetorados') }}#carnablood" alt="carnablood">
      <area shape="rect" coords="841, 532, 896, 571" href="{{ route('protetorados') }}#rochele" alt="rochele">
      <area shape="rect" coords="833, 453, 872, 483" href="{{ route('protetorados') }}#ventarin" alt="ventarin">
      <area shape="rect" coords="765, 412, 817, 434" href="{{ route('protetorados') }}#grondar" alt="grondar">
      <area shape="rect" coords="883, 411, 937, 455" href="{{ route('protetorados') }}#porto-coroa" alt="porto-da-coroa">
      <area shape="rect" coords="890, 375, 950, 403" href="{{ route('protetorados') }}#marlin" alt="marlin">
      <area shape="rect" coords="766, 365, 839, 401" href="{{ route('protetorados') }}#bosque-nobres" alt="bosque-dos-nobres">
      <area shape="rect" coords="730, 332, 760, 376" href="{{ route('protetorados') }}#carvalho" alt="carvalho-dourado">
      <area shape="rect" coords="569, 345, 636, 379" href="{{ route('protetorados') }}#middleway" alt="middleway">
      <area shape="rect" coords="494, 270, 574, 318" href="{{ route('protetorados') }}#paraiso-branco" alt="paraiso-branco">
      <area shape="rect" coords="528, 166, 587, 212" href="{{ route('protetorados') }}#brie" alt="brie">
      <area shape="rect" coords="488, 94, 526, 163" href="{{ route('protetorados') }}#keep-mercenarios" alt="keep-mercenarios">
      <area shape="rect" coords="628, 279, 695, 315" href="{{ route('protetorados') }}#floresta-corvos" alt="floresta-dos-corvos">
      <area shape="rect" coords="581, 240, 676, 268" href="{{ route('protetorados') }}#ravencliff" alt="ravencliff">
      <area shape="rect" coords="946, 307, 1021, 340" href="{{ route('protetorados') }}#calamdra" alt="calamdra">
      <area shape="rect" coords="869, 288, 924, 335" href="{{ route('protetorados') }}#grand-mirill" alt="grand-mirill">
      <area shape="rect" coords="720, 274, 771, 318" href="{{ route('protetorados') }}#malbeque" alt="malbeque">
      <area shape="rect" coords="805, 261, 855, 312" href="{{ route('protetorados') }}#aldoran" alt="aldoran">
      <area shape="rect" coords="632, 185, 673, 221" href="{{ route('protetorados') }}#stonemasonry" alt="stonemasonry">
      <area shape="rect" coords="682, 164, 713, 199" href="{{ route('protetorados') }}#vallerin" alt="recifes">
      <area shape="rect" coords="616, 139, 660, 170" href="{{ route('protetorados') }}#goldbeards" alt="goldbeards">
      <area shape="rect" coords="701, 228, 758, 261" href="{{ route('protetorados') }}#riachuelo" alt="riachuelo">
      <area shape="rect" coords="496, 43, 551, 76" href="{{ route('protetorados') }}#brumir" alt="brumir">
      <area shape="rect" coords="926, 234, 987, 274" href="{{ route('protetorados') }}#brumas" alt="brumas">
      <area shape="rect" coords="599, 113, 647, 127" href="{{ route('protetorados') }}#portoes" alt="portoes-de-ferro">
      <area shape="rect" coords="916, 194, 955, 221" href="{{ route('protetorados') }}#plato" alt="tribo-snack">
      <area shape="rect" coords="847, 178, 891, 220" href="{{ route('protetorados') }}#garrash" alt="garrash">
      <area shape="rect" coords="789, 175, 822, 206" href="{{ route('protetorados') }}#rinur" alt="rinur">
      <area shape="rect" coords="806, 112, 852, 163" href="{{ route('protetorados') }}#iririnur" alt="iririnur">
      <area shape="rect" coords="752, 104, 797, 129" href="{{ route('protetorados') }}#pantano" alt="pantano">
      <area shape="rect" coords="900, 40, 969, 92" href="{{ route('protetorados') }}#biblioteca" alt="biblioteca-branca">
      <area shape="rect" coords="778, 70, 830, 98" href="{{ route('protetorados') }}#nir" alt="nir">
      <area shape="rect" coords="772, 14, 852, 51" href="{{ route('protetorados') }}#brantur" alt="brantur">
      <area shape="rect" coords="695, 67, 742, 96" href="{{ route('protetorados') }}#floresta-negra" alt="floresta-negra">
      <area shape="rect" coords="634, 60, 676, 95" href="{{ route('protetorados') }}#loth-irian" alt="loth-irian">
      <area shape="rect" coords="783, 228, 879, 249" href="{{ route('protetorados') }}#montanhas-lantror" alt="montanhas-lantror">
    </map>
  </div>
</div>
<hr>

<div class="row">
  <div class="col text-center">
    <a id="distancias"></a>
    <h2>Rotas Comerciais e Distâncias</h2>
  </div>
</div>
<div class="row">
  <div class="col">
    <p>Consideramos as distâncias em viagens a cavalo e com dia bom.</p>
  </div>
</div>
<div class="row">
  <div class="col">
    <table class="table table-bordered border-primary table-light table-striped">
      <thead class="table-primary text-center table-bordered border-primary">
        <tr>
          <th>Ponto de Origem</th>
          <th>Ponto de Destino</th>
          <th>Distância (em dias)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Coroa de Maresias (Capital)</td>
          <td>Jóia da Amizade</td>
          <td>4 dias</td>
        </tr>
        <tr>
          <td>Paraíso Branco</td>
          <td>Middleway</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Middleway</td>
          <td>Jóia da Amizade</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Jóia da Amizade</td>
          <td>Fortaleza dos Strongwill</td>
          <td>1 dia e meio</td>
        </tr>
        <tr>
          <td>Jóia da Amizade</td>
          <td>Cidade de Cherrywood</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Cidade de Cherrywood</td>
          <td>Coroa de Maresias (Capital)</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Jóia da Amizade</td>
          <td>Cidade Grondar</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Jóia da Amizade</td>
          <td>Porto da Coroa</td>
          <td>2 dias e meio</td>
        </tr>
        <tr>
          <td>Jóia da Amizade </td>
          <td>Vila Carvalho Dourado</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Fortaleza dos Strongwill</td>
          <td>Floresta Carnablood</td>
          <td>4 horas</td>
        </tr>
        <tr>
          <td>Fortaleza dos Strongwill </td>
          <td>Cidade de Ventarim</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Cidade Grondar</td>
          <td>Vila Carvalho Dourado</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Cidade de Ventarin </td>
          <td>Porto da Coroa</td>
          <td>10 horas</td>
        </tr>
        <tr>
          <td>Coroa de Maresias (Capital)</td>
          <td>Porto Belo</td>
          <td>4 dias</td>
        </tr>
        <tr>
          <td>Coroa de Maresias (Capital)</td>
          <td>Floresta Élfica</td>
          <td>3 dias</td>
        </tr>
        <tr>
          <td>Cidade de Porto da Coroa</td>
          <td>Cidade de Calamdra</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Cidade de Calamdra</td>
          <td>Cidade Altoran</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Cidade Altoran</td>
          <td>Vila Riachuelo</td>
          <td>1 dia e meio</td>
        </tr>
        <tr>
          <td>Cidade Altoran</td>
          <td>Vila Malbeque</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Vila Malbeque</td>
          <td>Vila Ravencliff</td>
          <td>3 dias</td>
        </tr>
        <tr>
          <td>Vila Ravencliff</td>
          <td>Vila Riachuelo</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Vila Ravencliff</td>
          <td>Vila de Brie</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Vila Ravencliff</td>
          <td>Paraíso Branco</td>
          <td>3 dias</td>
        </tr>
        <tr>
          <td>Vila de Brie</td>
          <td>Vila Esperanza</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Paraíso Branco</td>
          <td>Vila Aldorar</td>
          <td>3 dias</td>
        </tr>
        <tr>
          <td>Paraíso Branco</td>
          <td>Floresta Élfica</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Vila Aldorar</td>
          <td>Floresta Èlfica</td>
          <td>1 dia e meio</td>
        </tr>
        <tr>
          <td>Cidade de Elindarin</td>
          <td>Floresta Élfica</td>
          <td>2 horas</td>
        </tr>
        <tr>
          <td>Bonanza</td>
          <td>Floresta Élfica</td>
          <td>1 dia e meio</td>
        </tr>
        <tr>
          <td>Bonanza</td>
          <td>Cidade dos Recifes</td>
          <td>4 dias</td>
        </tr>
        <tr>
          <td>Porto Belo</td>
          <td>Enseada da Madrepérola</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Enseada da Madrepérola</td>
          <td>Cidade dos Recifes</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Enseada da Madrepérola</td>
          <td>Entreposto Sihuain</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Bonanza</td>
          <td>Keep dos Caveiras</td>
          <td>4 dias</td>
        </tr>
        <tr>
          <td>Vila Aldorar</td>
          <td>Ironforge</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Vila Esperanza</td>
          <td>Keep dos Mercenários</td>
          <td>10 horas</td>
        </tr>
        <tr>
          <td>Keep dos Mercenários</td>
          <td>Forte HaLi</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Keep do Mercenários</td>
          <td>Vila Brumir</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Vila Riachuelo</td>
          <td>Goldbeards</td>
          <td>4 dias</td>
        </tr>
        <tr>
          <td>Vila Riachuelo</td>
          <td>Stonemansory</td>
          <td>2 dia e meio</td>
        </tr>
        <tr>
          <td>Vila Riachuelo</td>
          <td>Torre de Modry Drak</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Golbeards </td>
          <td>Stonemansory</td>
          <td>14 horas</td>
        </tr>
        <tr>
          <td>Goldbeards</td>
          <td>Torre de Modry Drak</td>
          <td>3 dias</td>
        </tr>
        <tr>
          <td>Goldbeards</td>
          <td>Garrash</td>
          <td>5 ou 6 dias</td>
        </tr>
        <tr>
          <td>Grondar</td>
          <td>Bosque dos Nobres</td>
          <td>4 horas</td>
        </tr>
        <tr>
          <td>Floresta Carnablood</td>
          <td>Templo do Deus da Natureza</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Cidade de Cherrywood</td>
          <td>Templo do Deus da Natureza</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Coroa de Maresias (Capital)</td>
          <td>Templo do Deus da Natureza</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Coroa de Maresias (Capital)</td>
          <td>Floresta de Eldunári</td>
          <td>1 dia e meio</td>
        </tr>
        <tr>
          <td>Middleway</td>
          <td>Ruínas da Rainha</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Paraíso Branco</td>
          <td>Ruínas da Rainha</td>
          <td>6 horas</td>
        </tr>
        <tr>
          <td>Vila Aldorar</td>
          <td>Ruínas da Rainha</td>
          <td>4 dias</td>
        </tr>
        <tr>
          <td>Forte HaLi</td>
          <td>Vila Brumir</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Forte HaLi</td>
          <td>Portões de Ferro</td>
          <td>4 horas</td>
        </tr>
        <tr>
          <td>Coroa de Maresias (Capital)</td>
          <td>Taurian</td>
          <td>1 dia</td>
        </tr>
        <tr>
          <td>Forte HaLi</td>
          <td>Cidade de Iririmur</td>
          <td>8 dias</td>
        </tr>
        <tr>
          <td>Cidade de Iririmur</td>
          <td>Cidade de Brantur</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Forte HaLi</td>
          <td>Brantur</td>
          <td>4 dias e meio</td>
        </tr>
        <tr>
          <td>Goldbeards</td>
          <td>Rimur</td>
          <td>3 dias</td>
        </tr>
        <tr>
          <td>Cidade de Vallerin</td>
          <td>Brie</td>
          <td>2 dias</td>
        </tr>
        <tr>
          <td>Cidade de Vallerin</td>
          <td>Iririmur</td>
          <td>10 dias</td>
        </tr>
        <tr>
          <td>Cidade de Vallerin</td>
          <td>Pântano da Dragonslayer</td>
          <td>2 dias</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@stop

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--
    <link rel="stylesheet" href="node_modules/bootstrap/scss/bootstrap.scss"> 
    <link rel="stylesheet" href="node_modules/bootstrap/scss/style.scss"> 
    -->
    
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css"> -->
    

    <title>Cursos para Programação</title>

    <style>
      /* Make the image fully responsive */
      .carousel-inner img {
          max-height: 400px;
          width: 100%;
          height: 100%;
      }
    </style>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
      <div class="container">
        <a href="#" class="navbar-brand h1 mb-0">P&C Programação</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"><span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Depoimentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contatos</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop">Social</a>
              <!-- subitem do menu dropdown: -->
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Facebook</a>
                <a href="#" class="dropdown-item">Twitter</a>
                <a href="#" class="dropdown-item">Instagram</a>
              </div>
            </li>
            <!-- subitem do menu dropdown: -->
          </ul>

          <form action="" class="form-inline">
            <input type="search" class="form-control ml-4 mr-2" placeholder="Buscar...">
            <button class="btn btn-dark" type="submit">Ok</button>
          </form>
        </div> <!-- .collapse.navbar-collapse -->
      </div> <!-- .container -->
    </nav>

    <div id="carouselSite" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
        <li data-target="#carouselSite" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-fluid d-block" src="img/slide-1.jpg" alt="Floresta 01">
          <div class="carousel-caption d-none d-md-block">
            <h1>Lorem Ipsum Dolor</h1>
            <p class="lead">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid d-block" src="img/slide-2.jpg" alt="FLoresta 02" >
          <div class="carousel-caption d-none d-md-block">
            <h1>Porque nós o usamos?</h1>
            <p class="lead">É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid d-block" src="img/slide-3.jpg" alt="Floresta 03">
          <div class="carousel-caption d-none d-md-block">
            <h1>De onde ele vem?</h1>
            <p class="lead">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico.</p>
          </div>
        </div>
      </div>

      <a href="#carouselSite" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span>
      </a>

      <a href="#carouselSite" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

    <!-- Aula 05 -->
    <div class="container">
      <div class="row">
        <div class="col-12 text-center my-5">
          <h1 class="display-3"><i class="fas fa-cogs text-primary"></i>What is Lorem Ipsum?</h1>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
        </div>
      </div>

      
      <div class="row mb-5">
        <div class="col-md-4 col-sm-6 mb-3"> 
          <nav id="navbarVert" class="navbar navbar-light bg-light">
            <nav class="nav nav-pills flex-column">
              <a href="#item1" class="nav-link">Qualquer texto1</a>
              <nav class="nav nav-pills flex-column">
                <a href="#item1-1" class="nav-link ml-3">Qualquer texto1-1</a>
              <a href="#item1-2" class="nav-link ml-3">Qualquer texto1-2</a>
              </nav>
              <a href="#item2" class="nav-link mt-2">Qualquer texto2</a>
              <a href="#item3" class="nav-link mt-2">Qualquer texto3</a>
              <nav class="nav nav-pills flex-column">
                <a href="#item3-1" class="nav-link ml-3">Qualquer texto3-1</a>
                <a href="#item3-2" class="nav-link ml-3">Qualquer texto3-2</a>
              </nav>
            </nav>
          </nav>
        </div>
        <div class="col-md-8 col-sm-6">
          <div data-spy="scroll" data-target="#navbarVert" data-offset="0" class="scrollspySite">
            <h4 id="item1">Lorem</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

            <h5 id="item1-1">Ipsum</h5>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

            <h5 id="item1-2">Why? Why? Why?</h5>
            <p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>

            <h4 id="item2">Lorem</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

            <h4 id="item3">Lorem</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

            <h5 id="item3-1">Ipsum</h5>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

            <h5 id="item3-2">Why? Why? Why?</h5>
            <p>Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
          </div>
        </div>
      </div> <!-- .row.mb-5 -->
      
      <!-- Aula 06 -->
      <div class="row justify-content-sm-center">
        <div class="col-md-4 col-sm-6 mb-5">
          <div class="card">
            <img src="img/card1.jpg" alt="html" class="card-img-top">
            <div class="card-body">
              <h4 class="card-target">Título Card 1</h4>
              <h6 class="card-subtarget mb-2 text-muted">Subtitle 1</h6>
              <p class="card-text">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Lista Qualquer</li>
              <li class="list-group-item">Qualquer coisa</li>
              <li class="list-group-item">Tanto faz</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Aqui</a>
              <a href="#" class="card-link">Saiba mais</a>
            </div>
            <div class="card-footer text-muted">
              Rodapé do Card1
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5">
          <div class="card">
            <img src="img/card2.jpg" alt="python" class="card-img-top">
            <div class="card-body">
               <h4 class="card-target">Título Card 2</h4>
              <h6 class="card-subtarget mb-2 text-muted">Subtitle 2</h6>
              <p class="card-text">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Lista Qualquer</li>
              <li class="list-group-item">Qualquer coisa</li>
              <li class="list-group-item">Tanto faz</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal2">Aqui</a>
              <a href="#" class="card-link">Saiba mais</a>
            </div>
            <div class="card-footer text-muted">
              Rodapé do Card2
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5">
          <div class="card">
            <img src="img/card3.jpg" alt="java" class="card-img-top">
            <div class="card-body">
               <h4 class="card-target">Título Card 3</h4>
              <h6 class="card-subtarget mb-2 text-muted">Subtitle 3</h6>
              <p class="card-text">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
              </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Lista Qualquer</li>
              <li class="list-group-item">Qualquer coisa</li>
              <li class="list-group-item">Tanto faz</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Aqui</a>
              <a href="#" class="card-link">Saiba mais</a>
            </div>
            <div class="card-footer text-muted">
              Rodapé do Card3
            </div>
          </div>
        </div>
      </div> 
    </div> <!-- .container -->

    <!-- Aula 08 -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="display-4"><i class="fab fa-youtube text-danger"></i>Título</h1>
            <p class="lead">Um texto qualquer ilustrativo.</p>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills justify-content-center mb-3" id="pills-nav" role="tablist">
              <li class="nav-item">
                <a href="#nav-item-01" class="nav-link active" id="nav-pills-01" data-toggle="pill">Link 01</a>
              </li>
              <li class="nav-item">
                <a href="#nav-item-02" class="nav-link" id="nav-pills-02" data-toggle="pill">Link 02</a>
              </li>
              <li class="nav-item">
                <a href="#nav-item-03" class="nav-link" id="nav-pills-03" data-toggle="pill">Link 03</a>
              </li>
            </ul>
            <div class="tab-content" id="nav-pills-content">
              <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.youtube.com/embed/epDCjksKMok" class="embed-responsive-item"></iframe>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show" id="nav-item-02" role="tabpanel">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.youtube.com/embed/Mp0vhMDI7fA" class="embed-responsive-item"></iframe>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show" id="nav-item-03" role="tabpanel">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.youtube.com/embed/sTX0UEplF54" class="embed-responsive-item"></iframe>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).</p>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div> <!-- row -->
          </div> <!-- .container -->
        </div> <!-- .jumbotron.jumbotron-fluid -->

    <!-- Aula 09 -->
    <div class="container"> 
        <div class="row"> 
            <div class="col-12">  
                <h1 class="display-4 text-center my-5"><i class="fas fa-paper-plane text-primary"></i>Título do Formulário</h1>
            </div>
        </div>
    
    <div class="row justify-content-center mb-5"> <!-- Row Ini -->
        <div class="col-sm-12 col-md-10 col-lg-8">  <!-- Col Ini -->
            <form action="  "> <!-- Form Ini -->
              <div class="form-row"> <!-- Form-row 1 -->
                  <div class="col-sm-6 form-group">     
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Primeiro nome">
                  </div>
                  <div class="col-sm-6 form-group">     
                    <label for="inputSobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
                  </div>
              </div> <!-- /Form-row 1 -->
              <div class="form-row"> <!-- Form-row 2 -->
                  <div class="form-group col-sm-12">  
                    <label for="inputEnd">Endereço</label>
                    <input type="text" class="form-control" id="inputEnd" placeholder="Endereço completo">
                  </div>
              </div> <!-- /Form-row 2 -->
              <div class="form-row"> <!-- Form-row 3 -->
                  <div class="col-sm-6 form-group">
                    <label for="inputCid">Cidade</label>
                    <input type="text" class="form-control" id="inputCid" placeholder="Sua cidade">
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="inputEst">Estado</label>
                      <select class="form-control" name="" id="inputEst">
                        <option value="" selected>Escolha...</option>
                        <option value="">...</option>
                        <option value="">...</option>
                        <option value="">...</option>
                      </select>
                  </div>
                  <div class="col-sm-2 form-group">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" id="inputCEP">
                  </div>
              </div> <!-- /Form-row 3 -->
              <div class="form-row">  <!-- Form-row 4 -->
                <div class="form-group col-sm-12">  
                    <div class="form-check">  
                        <label for="form-check-label">
                          <input type="checkbox" class="form-check-input" id="form-check-label">Desejo receber novidades por e-mail
                        </label>
                    </div>
                </div>
              </div> <!-- /Form-row 4 -->
              <div class="form-row"> <!-- Form-row 5 --> 
                <div class="col-sm-12"> 
                  <button class="btn btn-primary">Enviar</button>
                  <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Help" data-content="Isso é um exemplo de popover de ajuda.">Ajuda</a>
                </div>
              </div> <!-- /Form-row 5 --> 
            </form> <!-- Form Ini -->
        </div> <!-- Col Ini -->
    </div> <!-- Row Ini -->   
        
        <!-- Aula 10 -->
            <div class="row"> 
                <div class="col-12 mb-3"><hr></div>
                   <div class="col-sm-4">
                      <h3>P&C Programação</h3>
                      <p>Site criado para o projeto final da matéria E-Commerce</p>
                      <p>ministrada pela Profª. Simone</p>
                    </div>
                    <div class="col-sm-4">
                      <h3>Menu</h3>
                      <div class="list-group text-center">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Perfil</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Serviços</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Depoimentos</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Contatos</a>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <h3>Social</h3>
                      <div class="btn-group-vertical btn-block btn-group-lg" role="group"> 
                        <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook-square"></i>facebook</a>
                        <a href="#" class="btn btn-outline-info"><i class="fab fa-twitter"></i>Twitter</a>
                        <a href="#" class="btn btn-outline-warning"><i class="fab fa-instagram"></i>Instagram</a>
                      </div>
                    </div>
                    <div class="col-12 mt-5">  
                      <blockquote class="blockquote text-center">
                        <p class="mb-0">Aqui vai uma frase de impacto de algum autor famoso.</p>
                        <footer class="blockquote-footer">Autor famoso <cite title="Título">sem nenhum livro famoso</cite></footer>
                      </blockquote>
                    </div>
               </div>
    </div>

    

    <!-- Aula 07 -->
    <!-- Modal -->
    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Título do Modal</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes.</p>
            <p>Se você pretende usar uma passagem de Lorem Ipsum, precisa ter certeza de que não há algo embaraçoso escrito escondido no meio do texto. Todos os geradores de Lorem Ipsum na internet tendem a repetir pedaços predefinidos conforme necessário, fazendo deste o primeiro gerador de Lorem Ipsum autêntico da internet.</p>
            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
            <p>Porque nós o usamos?</p>
            É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).
            <p>De onde ele vem?</p>
            Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.
            O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
          </div>
        </div> <!-- modal-content -->
      </div> <!-- modal-dialog -->
    </div> <!-- .modal -->

    <div class="modal fade" id="siteModal2" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Título do Modal</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6">
                  <h5>Título da Coluna 1</h5>
                  <p>Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes.</p>
                </div>
                <div class="col-6">
                  <h5>Título da Coluna 2</h5>
                  <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC</p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
          </div>
        </div> <!-- modal-content -->
      </div> <!-- modal-dialog -->
    </div> <!-- .modal -->


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

<!--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->

  <!-- Aula 09 -->
  <script>  
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });

  </script>
  </body>
</html>
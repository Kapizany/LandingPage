<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Landing Page - Marketing Digital</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Custom styles for this template -->
<link href="css/landing-page.css" rel="stylesheet">

</head>

<body>

  <!-- Masthead -->
  <header class="masthead text-light text-center" style="background-image: url('img/bg-masthead.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Experimente nossas campanhas e faça parte da revolução digital!</h1>
        </div><!--
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      -->
      </div>
    </div>
  </header>

 
  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Resultados Mensuráveis</h2>
          <p class="lead mb-0">Medimos em detalhes os resultados de cada campanha e saber o que funciona ou não, através de métricas que fornecem importantes informações sobre a saúde do seu negócio. Seu monitoramento melhora o desempenho do marketing, gera mais vendas e aumenta a satisfação dos seus clientes.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Campanhas Segmentáveis</h2>
          <p class="lead mb-0">Separamos os Leads conforme o interesse deles e, a partir disso, promovemos ações com foco muito maior nos relacionando apenas com o público que tem curiosidade pelo que temos a oferecer.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Ótimo custo-benefício</h2>
          <p class="lead mb-0"> Através da aplicação de recursos com ideias inteligentes e boas ferramentas, o investimento na internet tem muito mais retorno se comparado às mídias tradicionais.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="rodape text-black-50" style="background-image: url('img/success-1.jpg');">
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto" >
      <div class="col-md-12">
    
        <div class="card-body font-weight-bold">
          <form action="processa_envio.php" method="post">

            <div class="form-group" >
              <label for="para">Email</label>
              <input type="text" name="para" class="form-control" id="para" placeholder="joao@dominio.com.br">
            </div>

            <div class="form-group">
              <label for="assunto">Nome</label>
              <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assundo do e-mail">
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-lg">Quero fazer parte dessa revolução!</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

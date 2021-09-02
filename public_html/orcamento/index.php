<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Orçamento - ZeroUm</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    
        <!--CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/slicknav.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

<body>
    <div id="header"> <?php include ("../header.php") ?> </div> 
    <!-- header-end -->

     <!-- bradcam_area  -->
     <div class="bradcam_area bradcam_bg_pages">
        <div class="container ">
            <div class="row">
               <div class = "title col-md-10">
                   Cotação
                </div>
                <div class = "content col-md-10">
                    Retornaremos o contato com brevidade
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ orcamento section start ================= -->
    <section class="orcamento-section">
            <div class="container">
                    <div class="col-12">
                        <h2 class="orcamento-title">Cotação</h2>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-orcamento orcamento_form" action="orcamento_process.php" method="post" id="orcamentoForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4>Nome</h4>
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu nome'" placeholder="Digite seu nome">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>E-mail</h4>
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu Email'" placeholder="Digite seu Email">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <h4>Tipo de serviço</h4>
                                    <div class="form-group">
                                        <select class="form-control" name="tipo" id="name">
                                          <option> Cabeamento </option>
                                          <option> Circuito Fechado e TV </option>
                                          <option> Controle de acesso </option>
                                          <option> Data Center </option>
                                          <option> Engenharia </option>
                                          <option> Servidor </option>
                                          <option> Servidor de TIC </option>
                                          <option> VOIP </option>
                                          <option> Wireless </option>
                                        </select>
                                      </div>
                                </div>

                                <div class="col-12">
                                    <h4>Descrição do serviço</h4>
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua mensagem'" placeholder="Digite sua mensagem"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-orcamentoForm boxed-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
            </div>
        </section>
    <!-- ================ orcamento section end ================= -->
    
    <div id="footer"> <?php include ("../footer.php") ?> </div>
    </body>
    </html>

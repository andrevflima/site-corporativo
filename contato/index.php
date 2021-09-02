<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contato - ZeroUm</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="../image/x-icon" href="../img/favicon.png">
    
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
                   Contato
                </div>
                <div class = "content col-md-10">
                    Duvidas ou sugestões? Entre em contato conosco
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Entre em contato conosco</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <h4>Nome</h4>
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu nome'" placeholder="Digite seu nome">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <h4>E-mail</h4>
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu Email'" placeholder="Digite seu Email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h4>Título</h4>
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite o assunto da sua mensagem'" placeholder="Digite o assunto da sua mensagem">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h4>Mensagem</h4>
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua mensagem'" placeholder="Digite sua mensagem"></textarea>
                                    </div>
                                </div>
                               

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="contact-infos col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Derby - Recife-PE</h3>
                                <p>Rua Manoel Caetano, 103</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>(81) 2138-6767</h3>
                                <p>Seg a Sex | 08h00 às 18h00</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>comercial@zerohum.com.br</h3>
                                <p>Mande-nos um email!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- ================ contact section end ================= -->
    <div id="footer"> <?php include ("../footer.php") ?> </div>
    </body>
    </html>

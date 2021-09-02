<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Trabalhe conosco - ZeroUm</title>
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
                   Trabalhe conosco
                </div>
                <div class = "content col-md-10">
                    Faça parte da nossa equipe.
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
                        <h2 class="contact-title">Trabalhe conosco</h2>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-trabalhe trabelhe_form" enctype='multipart/form-data' action="trabalhe_process.php" method="post" id="trabalheForm" novalidate="novalidate">
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
                                        <h4>Mensagem</h4>
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua mensagem'" placeholder="Digite sua mensagem"></textarea>
                                    </div>
                                </div>

                                <div class="col-8">
                                <div class="input-group">
                                        <h4>Anexe seu currículo</h4>
                                        <div class="input-group ">
                                            <div class="col-8">
                                                <input type="file" name="arquivo" class="form-control-file border" id="exampleFormControlFile1">
                                               
                                            </div>
                                            <div class="col-4">
                                                <button type="submit" class="button boxed-btn">Enviar</button>
                                            </div>
                                             
                                        </div>
                                </div>
                               
                              
                                <div class="col-2 d-flex">
                                    
                                </div>
                                
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
    <div id="footer"> <?php include ("../footer.php") ?> </div>
    </body>
    </html>

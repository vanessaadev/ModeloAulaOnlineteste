<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'index';
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            
                <div class="main-content container-fluid" id="#index"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">
                                <!-- Título -->
                                <h2 class="Titulo">Apresentação</h2>
                                <hr>
                                <!-- Titulo Figura -->

                                <div class="text-center">
                                    <a href="imagens/Figura00.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura00.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"></p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura00.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong></strong> </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                                <p>Nesta aula, vamos tratar da qualidade do atendimento ao público, um dos principais diferenciais para a sobrevivência de qualquer instituição e um dos fatores de grande importância para definir o nível do atendimento e a satisfação do usuário. Nesse sentido, abordaremos aspectos essenciais para essa qualidade, o atendimento de reclamações ou de situações extraordinárias e também o papel do servidor para se alcançar a qualidade do atendimento.</p>
                                <!-- Título -->
                                <h2 class="Titulo">Objetivo</h2>
                                <hr>
                                <p > <i class="fas fa-dot-circle CorVerdeClaroEstado"></i>  Apresentar aspectos fundamentais para a qualidade do atendimento, buscando promover reflexão e favorecer, consequentemente, ações para a melhoria do atendimento e a satisfação do usuário-cidadão.
                                </p>

                            
                            
                            
                            
                                <!-- SCRIPT LIGHTBOX -->
                                <script>
                                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                        event.preventDefault();
                                        $(this).ekkoLightbox();
                                    }); 

                                    $(function () {
                                    $('[data-toggle="tooltip"]').tooltip()
                                })   ;   

                                $(function () {
                                    $('.example-popover').popover({
                                        container: 'body'
                                        })
                                })                
                                </script>

                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->
                    
                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="Topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>

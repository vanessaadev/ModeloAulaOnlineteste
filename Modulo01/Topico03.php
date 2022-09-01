<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid Texto">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <!-- Título -->

                            <h2 class="Titulo">Competências Essênciais do Servidor Público</h2>
                            <hr>
                            <p> <strong>Objetivo:</strong> Conceituar competência, descrevendo suas três dimensões (conhecimentos, habilidades e atitudes) em relação ao servidor público e à prática do atendimento.</p>
                            <p>Essa questão está diretamente ligada às competências essenciais do servidor público.</p>
                            <p>Você já se perguntou quais são elas? E o que são competências?</p>
                            <br>
                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success" >
                                <p class="Texto">
                                <em>"Competência é um conjunto de conhecimentos, habilidades e atitudes, que afetam a maior parte do trabalho de uma pessoa, e que se relacionam com seu desempenho no trabalho."
                                <p class="text-end"> DOMINGOS, 2013</p></em>
                                </p>
                            </div>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInRight"><strong>Figura 09: </strong>Diagrama de Competências</p>
                            </div>

                            <!-- Imagem 02 - MODAL -->
                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid"  src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                            
                                        </div>
                                        <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte: </strong> 
                                        EGPCE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 02 - End -->
                            <br>
                            <!--tabela-->

                            <div class="col-md-12">
                                
                                
                                <table class="table table-bordered border-success">
                                <thead>
                                
                                </thead>
                                <tbody>
                                <tr>
                                <td class="table-success text-center"   >Elemento</td>
                                <td class="table-success text-center">Conceito</td>
                                </tr>
                                <tr>
                                <td>Conhecimento(C)</td>
                                <td>É o saber, o que aprendemos nas escolas, nas universidades, na vida, em nossa bagagem, nos livros, no trabalho. Sabemos de muitas coisas, mas não utilizamos tudo o que sabemos.</td>
                                </tr>
                                <tr>
                                <td>Habilidade(H)</td>
                                <td>É o saber fazer, é tudo o que de fato utilizamos dos conhecimentos que detemos em nossos "arquivos" no dia a dia.</td>
                                </tr>
                                <tr>
                                <td>Atitude(A)</td>
                                <td>É o querer fazer, é o que nos leva a decidir se iremos ou não exercitar nossa habilidade de um determinado conhecimento.</td>
                                </tr>
                                                                
                                </tbody>
                                </table>                            
                            </div>
                            <br>
                            <p>Como as competências demandadas por uma organização mudam no tempo e no espaço, é necessário ter atenção ao ambiente de trabalho para a atualização dos conhecimentos, e para a renovação de habilidades e de atitudes.</p>
                            <p>Se pensarmos, por exemplo, nas expectativas de um usuário-cidadão em relação ao serviço público na década de 1970, certamente não são as mesmas de hoje, pois estamos na sociedade da informação e da globalização. Logo, essas competências ampliaram-se e, atualmente, é comum ouvirmos a expressão "matriz de competências", que diz respeito a determinadas características para o exercício de uma função.</p>
                            
                            <br>
                            <p><strong>Parabéns, <?php echo $NomeUsuario ?>! Você finalizou o tópico 03 do módulo 01 do curso Atendimento ao Público. Até o próximo tópico!</strong></p>
                            
                
                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->
                    
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.1.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>

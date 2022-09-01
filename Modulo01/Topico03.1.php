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

                            <h2 class="SubTitulo"> Competência: Conhecimento</h2>
                            <hr>
                            <p> Conhecimento, como instância da competência profissional, consiste no processamento cognitivo de informações, as quais determinam o que deve ser feito e quais tarefas devem ser realizadas.</p>

                            <p>Para Durand (2000), conhecimento corresponde a uma série de informações assimiladas e estruturadas pelo indivíduo, que lhe permitem "entender o mundo". Refere-se ao saber que a pessoa acumulou ao longo da vida.</p>
                            
                            <br>
                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success" >
                                <p class="Texto">
                                <em>"O conhecimento é o resultado de uma construção histórica e social. Isso significa que o conhecimento é construído no decorrer do tempo e na interação com outras pessoas."
                                <p class="text-end"> ENAP, 2006</p></em>
                                </p>
                            </div>
                            <br>
                            <p>Esse processo, geralmente, ocorre nas experiências vivenciadas no trabalho, nos treinamentos e, como já mencionado, na educação formal.</p>

                            <!-- Fique Atento -->

                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <p class="FiqueAtentoTexto">Não confunda informação com conhecimento. Informação é a matéria-prima do conhecimento. De acordo com Davenport e Prusak (1998), o conhecimento deriva da informação, que, por sua vez, deriva de conjuntos de dados. Esses autores afirmam que informações são dados que, percebidos pelo indivíduo, têm relevância, propósito e causam impacto em seu julgamento ou comportamento; já conhecimentos são conjuntos de informações reconhecidas e integradas pelo indivíduo em um esquema preexistente.</p>
                            </div><br><br>
                            <!-- Figura do lado do texto-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                       <p> Num passado recente, dizia-se que: “Quem tem informação tem o poder”, mas hoje não é mais assim. Tem o poder quem pega a informação, disponível para todos, e a transforma em conhecimento útil para a instituição, o que exige reflexão e síntese.</p>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                            <img class="img-fluid wow fadeInRight" width="500" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                            <p class="TituloFigura img-fluid wow fadeInLeft" ><strong>Figura 10: </strong>Dúvida</p>
                                        </a>
                                    </div>

                                    <!-- Imagem 02 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid"  src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                <p class="TituloFigura img-fluid wow fadeInLeft" ><strong>Fonte: </strong><em>Pixabay</em></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 02 - End -->
                                </div>
                            </div>
                            <!--Fim figura/texto div-->

                            <p> Isso porque, na sociedade atual, não há falta de informação, mas excesso. Além disso, há muita informação de baixa qualidade. É preciso, portanto, ser seletivo e jogar fora o que não é útil, a fim de reter somente a informação qualificada, necessária para a produção do conhecimento de valor para você servidor ou colaborador, para seu órgão ou entidade e para o usuário-cidadão.</p>

                            <p>Para se fazer essa seleção, devem ser estabelecidos critérios confiáveis, a fim de não se correr o risco do descarte de informações que poderão vir a fazer falta. Nesse sentido, a sugestão é desenvolver o gerenciamento da informação.</p>
                            <br>

                            <!-- Curiosidade -->

                            <div class="CuriosidadeCaixa">
                                <p class="CuriosidadeTitulo"> Curiosidade</p>
                                <p class="CuriosidadeTexto">E como se faz o gerenciamento da informação?</p>
                            </div>
                            <br>
                            <p>Para isso, é essencial que você servidor ou colaborador:</p>
                            <br>
                            <div>
                                <ul  class="none">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conheça bem a instituição em que é servidor e melhor ainda o órgão ou departamento em que trabalha;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Levante as informações necessárias para desenvolver suas atividades (atos normativos, instruções, rotinas, regimento interno etc.), tire dúvidas com os colegas, converse com quem já realiza as atividades;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>
                                    Tenha à mão essas informações ou saiba onde localizá-las. Não é preciso sabê-las de cor, mas sim saber onde encontrá-las rapidamente, quando você precisar delas;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Acompanhe a qualidade e atualidade das informações de que você precisa para desenvolver seu trabalho.</li>
                                </ul>
                            </div>
                            <p>Nesse contexto, além de conhecer os processos internos, é aconselhável acompanhar notícias veiculadas pela imprensa sobre temas que, de forma direta ou indireta, digam respeito ao dia a dia profissional.</p>
                            <br>
                            <!-- Exemplo -->

                            <div class="ExemploCaixa">
                                <p class="ExemploTitulo"> Exemplo</p>
                                <p class="ExemploTexto">Um usuário-cidadão diz que ouviu no rádio ou na televisão uma notícia sobre um assunto diretamente relacionado com a área em que trabalha ou com a atividade que você desenvolve, e você confessa que não sabe do que se trata. Provavelmente, tudo o que for dito a partir daquele momento poderá vir a ter a credibilidade comprometida.</p>
                            </div>
                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success" >
                                <p class="Texto">
                                <em>"Ter conhecimento de nossa atividade nos deixa seguros e mais tranquilos para receber o usuário, até mesmo aquele mais exaltado."
                                <p class="text-end"> ENAP, 2006</p></em>
                                </p>
                            </div>
                            <br>
                            <p>Esse usuário, quando percebe que o servidor ou colaborador conhece bem o seu trabalho e demonstra propriedade sobre o assunto de que fala, despede-se com a certeza de que suas necessidades estão sendo devidamente atendidas. Por outro lado, se o servidor que realiza o atendimento demonstra não conhecer o seu trabalho, transmite
                            ao usuário a impressão de que a demanda pode não ser solucionada.</p>
                            <p>Portanto, para demonstrar competência, é necessário conhecer muito bem seu trabalho.</p>

                            <!-- Curiosidade -->

                            <div class="DuvidaCaixa">
                                <p class="DuvidaTitulo"> Dúvida</p>
                                <p class="DuvidaTexto">Mas será que isso é suficiente para a realização de tarefas que envolvem o atendimento?</p>
                            </div>
                            <br>
                            <p>Não. É preciso ter também habilidade para aplicar o conhecimento construído, ou seja, saber como fazer o que se sabe que deve ser feito. Desse modo, o ideal é a junção de conhecimento e habilidade, mas essa combinação é sempre possível?</p><br>

                            <p><strong>Parabéns, <?php echo $NomeUsuario ?>! Você finalizou o tópico 03.1 do modulo 01 do curso Atendimento ao Público. Continuaremos aprendendo no tópico 03.2. Até logo!</strong></p>

          
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
                    <a href="Topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.2.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>

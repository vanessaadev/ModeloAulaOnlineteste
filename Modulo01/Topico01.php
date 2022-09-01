<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h2 class="Titulo">O Atendimento no Serviço Público</h2>
                        <hr>
                        <p><strong>Objetivo:</strong>  Conceituar atendimento e apresentar características gerais desse processo.</p>
                        <p>Para discutirmos o conceito de atendimento, é fundamental tratarmos de duas noções diretamente ligadas ao atendimento no serviço público: a de Sociedade e a de Estado.</p>
                                             
                        
                        <!-- Figura/texto -->

                        <div class="row">
                            <div class="col-md-6">
                                <div  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                    <!-- CITAÇÃO -->
                                    <div class="bd-callout bd-callout-success">
                                        <p class="Texto">
                                        <em>"Ter conhecimento de nossa atividade nos deixa seguros e mais tranquilos para receber o usuário, até mesmo aquele mais exaltado."
                                        <p class="text-end">-ENAP, 2006</p></em>
                                        </p>
                                    </div>
                                    <br>
                                </div>
                                


                                
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        <p class="FonteFigura img-fluid wow fadeInRight">Figura 01: Sociedade-Estado </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div>
                        <!--Fim Figura/texto -->

                        <div  class="img-fluid wow fadeInLeft" data-wow-delay="0.9s">
                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success" >
                                <p class="Texto">
                                    <em>"O Estado compreende o Governo e o serviço Público."
                                        <p class="text-end">-ENAP, 2006</p></em>
                                    </p>
                                </div>
                            </div>

                        <p>Nesse contexto, o Estado é um empreendimento com fins sociais, e o serviço público é disponibilizado para os cidadãos.</p>
                        <p>A pessoa que se dirige a um Órgão ou a uma entidade pública busca atendimento como um usuário-cidadão. Nesse caso, a pessoa de contato é o próprio Órgão ou a entidade, em que o usuário busca:</p>
                        <!-- LISTA EM MOVIMENTO-->
                        <div>
                            <ul  class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Competências;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Inteligência;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> 
                                Educação;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Confiabilidade;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Resposta a uma demanda.</li>
                            
                            </ul>
                        </div>
                        <P>O Órgão, por sua vez, é representado por seus servidores e colaboradores. Logo, em qualquer atendimento realizado não é a imagem do servidor ou colaborador que está sendo veiculada, mas a da instituição.</P>

                        <!-- Dúvida  -->

                        <div class="DuvidaCaixa">
                            <p class="DuvidaTitulo"> Dúvida</p>
                            <p class="DuvidaTexto">O que é então o atendimento ao público? <br>
                            O atendimento ao público é o conjunto de ações que visam satisfazer as expectativas dos clientes, aumentando sua satisfação com os serviços e com o próprio atendimento.</p>
                        </div><br>
                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p class="Texto"><em>"Atendimento é sinônimo de empatia e atenção."
                            <p class="text-end">-GODRI, 1994, p.59</p></em>
                            </p>
                        </div>
                        <br>
                        
                        <!-- Duvida  -->

                        <div class="DuvidaCaixa">
                            <p class="DuvidaTitulo"> Dúvida</p>
                            <p class="DuvidaTexto">De que formas pode ocorrer o atendimento?</p>
                        </div><br>

                        <p>Pode acontecer por:</p>
                        <br>

                        <!-- Sub Título -->

                        <p class="SubTitulo">Contato Telefônico</p>
                        <hr>
                        <p>No Contato Telefônico, é importante:</p>
                        <br>
                        <!-- Figura/texto -->

                        <div class="row">
                            <div class="col-md-6">
                                <div  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                    
                                    <ul  class="none">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Identificar-se (dizer seu nome e o da instituição);</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Cumprimentar (bom dia, boa tarde);</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> 
                                        Utilizar tom ameno e acolhedor;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificar o objetivo do contato;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Dar encaminhamento à solicitação do usuário (caso isso não seja possível no momento do contato, anotar o nome do usuário-cidadão, telefone para contato posterior e endereço de e-mail);</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Despedir-se.</li>
                                    
                                    </ul>
                                    


                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        <p class="FonteFigura img-fluid wow fadeInRight" data-wow-delay="0.5s" > Figura 02: Telefone </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> Encrypted</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div><br>
                        <!--Fim Figura/texto -->
                        <br>
                        
                        <!-- Sub Título -->
                        <p class="SubTitulo"> Contato por E-mail</p>
                        <hr>
                        
                        <!-- Figura/texto -->

                        <div class="row">
                            <div class="col-md-6">
                                <div  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                    
                                    <ul  class="none">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Procurar centralizar a comunicação (criar um e-mail único para contato);</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Definir prazo para respostas (essa ação promove agilidade das respostas);</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> 
                                        Estabelecer, na medida do possível, padronização de respostas (respostas pré-definidas geram uma imagem da instituição);</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Elaborar respostas curtas, objetivas e precisas;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Utilizar vocativo, expressões de cumprimento e de polidez;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Evitar a escrita de palavra(s) com toda a sua extensão em letras maiúsculas, ou seja, com a utilização do “CAPS LOCK” (na linguagem virtual, esse uso expressa grito com quem se interage);</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>   Despedir-se do usuário-cidadão.</li>
                                    
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                        <p class="FonteFigura img-fluid wow fadeInRight" data-wow-delay="0.5s" > Figura 03: Telefone </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> Encrypted</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div>
                        <!--Fim Figura/texto -->
                        <br>

                        <!-- Sub Título -->
                        <p class="SubTitulo"> Contato Pessoal Direto</p>
                        <hr>
                        <p>No contato pessoal direto, é importante:</p>
                        <p>Acolher (Interromper o que estiver fazendo e dirigir-se com um cumprimento à pessoa que busca o atendimento);</p>
                                                
                        <!-- Figura/texto -->
                        <div class="row">
                            <div class="col-md-6">
                                <div  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                    
                                    <ul  class="none">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Demonstrar polidez;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Identificar a pessoa em atendimento;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Oferecer os serviços imediatamente;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Demonstrar atenção por meio do tom de voz, da linguagem verbal (fala) e da linguagem não verbal (posturas, gestos, expressões faciais);</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Fazer as perguntas necessárias para averiguar as necessidades do cliente;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Repetir a solicitação do usuário-cidadão, com suas palavras, buscando certificar-se de que está entendendo a necessidade dele;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Fornecer informações úteis;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Indicar o que é da sua competência fazer;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Indicar prazos reais;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="3.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Dar detalhes da forma como o processo decorrerá;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="3.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Transmitir uma imagem de segurança e confiabilidade.</li>
                                    
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                        <p class="FonteFigura img-fluid wow fadeInRight" data-wow-delay="0.5s" > Figura 04: Pessoal </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> Encrypted</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div>
                        <!--Fim Figura/texto -->
                        <br>
                        
                        <p>Para Faria (2003), nessa forma de atendimento, devem ser evitadas, sob qualquer hipótese, as seguintes atitudes:</p>
                        <div>
                            <ul  class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>   Demonstrar desatenção, desviando o olhar para outras coisas ou pessoas;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>   Permitir interrupções frequentes de outros servidores ou colaboradores;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>
                                Atender telefonemas, no momento do atendimento;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Comunicar-se por grunhidos, sons guturais ou interjeições;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Manifestar inquietude ou irritação;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>
                                Repetir a solicitação do usuário-cidadão, com suas palavras, buscando certificar-se de que está entendendo a
                                necessidade dele;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> 
                                Debochar do cliente;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>
                                Cruzar os braços;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>
                                Tecer comentários negativos sobre a instituição, um setor ou qualquer servidor ou colaborador.</li>
                            
                            </ul>
                        </div>
                        <br>
                        <!-- Duvida  -->

                        <div class="DuvidaCaixa">
                            <p class="DuvidaTitulo"> Dúvida</p>
                            <p class="DuvidaTexto">Para que serve o atendimento?</p>
                        </div><br>
                        <p>O atendimento objetiva:</p>

                        <!--tabela-->

                        <div class="col-md-12">
                            
                            
                            <table class="table table-bordered border-success">
                            <thead>
                            
                            </thead>
                            <tbody>
                            <tr>
                            <td>Recepcionar</td>
                            <td>Receber as pessoas, passar uma imagem e prestar o serviço</td>
                            </tr>
                            <tr>
                            <td>Informar</td>
                            <td>Esclarecer dúvidas</td>
                            </tr>
                            <tr>
                            <td>Orientar</td>
                            <td>Indicar opções e ajudar a tomar decisões</td>
                            </tr>
                            <tr>
                            <td>Filtrar</td>
                            <td>Diagnosticar as necessidades do público</td>
                            </tr>
                            <tr>
                            <td>Amenizar</td>
                            <td>Acalmar os ânimos e fazer esperar</td>
                            </tr>
                            <tr>
                            <td>Agilizar</td>
                            <td>Evitar perda de tempo</td>
                            </tr>
                            </tbody>
                            </table>                            
                        </div>
                        <br>
                        <p>O atendimento é uma função específica, pela qual transitam a comunicação, a informação, a ação institucional e a construção da imagem.</p>
                        <p>Para Lucas e Silveira Júnior (2012), o atendimento ao público é muito mais amplo que os atos de fornecer documentos ou de encaminhar pessoas, é entender o usuário, é agir com presteza e segurança nas informações num ambiente agradável e organizado, visando suprir os anseios dos usuários dos serviços.</p>
                        <p>Nesse contexto, é a partir dessa função que uma instituição passa a ser avaliada, ou seja, se houver um atendimento com informações precisas e a resolução de uma demanda, a imagem projetada e a avaliação serão, naturalmente, positivas, mas se houver um atendimento em que tais aspectos não sejam observados, a repercussão será negativa. Desse modo, é necessário o domínio dessa função para que se possa atender às expectativas do público com que se trabalha.</p>
                        <br>
                        <!-- Reflita -->

                        <div class="ReflitaCaixa">
                            <p class="ReflitaTitulo"> Reflita</p>
                            <p class="ReflitaTexto"> 
                                - Pense numa situação em que você se considerou bem atendido e numa que foi mal atendido. <br>

                                - Em ambas as situações, qual o comportamento e a motivação da(s) pessoa(s) que o atenderam? <br>

                                - Quais diferenças você pôde observar entre as duas situações de atendimento? Procure relacionar as diferenças e compará-las. <br>

                                - Após a comparação entre os dois tipos de atendimento, você é capaz de responder qual deles mais se aproxima da sua forma de atender?
                            </p>
                        </div>
                        <br>
                        <p>No Tópico 02, continuaremos a reflexão sobre o processo de atendimento, introduzindo a visão sistêmica do atendimento. Você já ouviu falar ou leu sobre isso?</p>
                        <p>Você já se perguntou se o processo de atendimento está inter-relacionado a outros? O que você pensa sobre isso?</p>
                        <p>Vamos, então, ao próximo tópico para compreendermos esse processo!</p>
                        <br>

                        <p><strong>Parabéns, <?php echo $NomeUsuario ?>! Você finalizou o primeiro tópico do módulo 01 do curso Atendimento ao Público. Siga aprendendo conosco no próximo tópico. Até logo!</strong></p>


                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>



                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>
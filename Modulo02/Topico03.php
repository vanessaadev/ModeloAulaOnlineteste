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

                            <h2 class="Titulo">O Papel do Servidor no Atendimento de Qualidade</h2>
                            <hr>
                            <p> <strong>Objetivo:</strong> Apresentar a concepção adotada de servidor público, bem como o papel do servidor para a constituição do atendimento de qualidade.
                            <p>Antes de tratarmos do papel do servidor, consideramos necessário deixar clara a concepção de servidor público aqui adotada. Servidor público é o termo utilizado, lato sensu, para designar:</p>
                            <br>
                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success" >
                                <p class="Texto">
                                <em>"As pessoas físicas que prestam serviços ao Estado e às entidades da Administração Indireta, com vínculo empregatício e mediante remuneração paga pelos cofres públicos."
                                <p class="text-end"> DI PIETRO, 2003</p></em>
                                </p>
                            </div>
                            <p>Segundo o dicionário Houaiss:</p>
                            <br>
                            <!-- Accordion Fase 01 - Begin  -->

                            <div class="accordion accordion-flush" id="AccordionFase01">

                                <!-- Sub Título -->

                                <p class="SubTitulo">Clique nos títulos abaixo para mais informações</p>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Servidor</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Tem origem etimológica na palavra latina servitor, que quer dizer servo ou servidor dos deuses. Servidor é "...aquele que serve; servente; ...aquele que é diligente, prestativo, prestimoso; ...aquele que cumpre com rigor e precisão o que tem a fazer".</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Público</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> Relativo ou destinado ao povo, à coletividade: opinião pública; bem-estar público.
                                            </p>
                                        </div>
                                    </div>
                                </div> 

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Serviço Público </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                           <p>É o serviço destinado a atender os cidadãos em seus interesses e direitos sociais estabelecidos (Direito à Educação, à Saúde, à Segurança, ao Emprego, à Emissão de Documentos etc.)</p>
                                           <p>Com base nessas definições, os servidores públicos devem cumprir seu papel com excelência, buscando otimizar ao máximo seu trabalho, atendendo bem o cidadão, que é o seu cliente, pois não se deve esquecer que o servidor presta serviços a uma Empresa (Pública), e toda empresa sobrevive de seus clientes. Nesse caso, a clientela é o povo, que vem solicitar dos servidores públicos a resolução dos problemas apresentados. Essa clientela espera receptividade para que tais problemas sejam solucionados da melhor forma possível.</p>                             
                                        </div>
                                    </div>
                                </div>                                     
                            </div><br>
                            <!-- FIM Accordion Fase 01 - Begin  -->
                            <p>Nesse contexto, você deve saber que ainda há, hoje em dia, muitas pessoas, as quais não acreditam que o serviço público possa ajudá-las a resolver seus problemas. Mas você e os demais servidores podem contribuir para que essa crença seja modificada. O cidadão quer que o atendimento proporcionado pelo Estado funcione e, para isso, espera encontrar servidores dedicados e preparados para fazerem o melhor, com o intuito de atenderem às suas necessidades</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Figura 06: Servidores em Atendimento</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->

                            <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> Flickr</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <p>Ramos (1981), nos seus estudos sobre organizações declarou:</p>
                            <br>
                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success" >
                                <p class="Texto">
                                <em>"Serviço público de qualidade é direito geral, garantido por um Estado que tem por finalidade manter a máquina pública a serviço do cidadão. Portanto, a satisfação do cidadão, usuário do serviço público, é, antes de mais nada, atividade-fim de um Estado que deve ter como base de sua constituição a noção de utilidade pública."
                                <p class="text-end"> RAMOS, 1991</p></em>
                                </p>
                            </div>
                            <br>
                            <p>Nesse sentido, o Estado instituiu o Código de Ética e Conduta da Administração Pública Estadual por meio do Decreto nº 31.198, de 30 de abril de 2013, que em seu artigo 2º determina:</p>
                            <br>
                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success" >
                                <p class="Texto">
                                "Art.2º A conduta ética dos agentes públicos submetidos a este Decreto reger-se-á, especialmente, pelos seguintes princípios: I – boa-fé - agir em conformidade com o direito, com lealdade, ciente de conduta correta; II – honestidade – agir com franqueza, realizando suas atividades sem uso de mentiras ou fraudes; III – fidelidade ao interesse público – realizar ações com o intuito de promover o bem público, em respeito ao cidadão; IV – impessoalidade – atuar com senso de justiça, sem perseguição ou proteção de pessoas, grupos ou setores; V – moralidade – evidenciar perante o público retidão e compostura, em respeito aos costumes sociais; VI – dignidade e decoro no exercício de suas funções – manifestar decência em suas ações, preservando a honra e o direito de todos; VII – lealdade às instituições – defender interesse da instituição a qual se vincula; VIII – cortesia – manifestar bons tratos a outros; IX – transparência – dar a conhecer a atuação de forma acessível ao cidadão; X – eficiência – exercer atividades da melhor maneira possível, zelando pelo patrimônio público; XI – presteza e tempestividade – realizar atividades com agilidade; XII – compromisso – comprometer-se com a missão e com os resultados organizacionais."
                                </p>
                            </div>
                            <br>
                            <p>O servidor, independentemente de seu nível hierárquico, tem um papel relevante para a melhoria do atendimento prestado ao cidadão. Como já visto neste curso, é importante ter a visão sistêmica do órgão, para entender os processos e envolver todos servidores.</p>
                            <p>Sabemos, por exemplo, que a agilidade do serviço público é uma qualidade muito valorizada pelo usuário-cidadão. Se um órgão público deseja fixar uma imagem de agilidade na prestação de serviços, é necessário comprometer não apenas os servidores do atendimento, mas todos os servidores do órgão. É a agilidade de todos que trabalham num determinado serviço que criará uma imagem de agilidade de todo o órgão.</p>
                            <p>O trabalho de qualquer servidor, ao atender um cidadão, é muito facilitado se o cidadão já tiver uma imagem favorável sobre o servidor ou sobre a entidade prestadora de serviço. Se, ao contrário, a imagem formada em sua mente for de descrença, haverá mais dificuldade para convencê-lo de que receberá um atendimento de qualidade. Mas esse esforço deve ser empreendido, pois o servidor estará desempenhando o papel de contribuir para que o cidadão comece a construir uma imagem favorável do atendimento público.</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Figura 07: Imagens que Ficam para o Cliente</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            
                            <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> milldesk</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <p>Temos assim o efeito “bola-de-neve”: o usuário-cidadão apresenta uma demanda e é bem atendido. Na próxima vez em que procurar um serviço público, esse cidadão irá mais confiante. O servidor, por sua vez, irá recebê-lo com boa vontade, retribuindo sua simpatia. Esse cidadão sairá com a percepção reforçada de que o serviço público oferece bom atendimento e comenta isso com amigos, parentes, colegas etc. Cria-se, assim, um círculo virtuoso.</p>
                            <p>Construir uma imagem forte e positiva não é algo que se implante na mente do público da noite para o dia. Primeiro, é preciso determinar quais são os atributos que o usuário valoriza e que deverão ser por ele percebidos.</p>
                            <p>Desse modo, a satisfação do usuário-cidadão está diretamente relacionada com a qualidade e a agilidade no atendimento e a solução de sua demanda. E é evidente que para o servidor público eficiente a sua motivação e a sua satisfação estão relacionadas com a qualidade e agilidade com que o seu serviço é prestado. Giannini (2003) resume bem essa situação com a equação a seguir:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Figura 08: Equação</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            
                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte:</strong> EGPCE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <p>Além de construir uma boa imagem, é preciso estar atento às mudanças na percepção das pessoas. Uma imagem construída com muito cuidado, com o passar do tempo pode ficar envelhecida. E a imagem de uma instituição envelhecida remete a outras percepções negativas, como desatualização, por exemplo.</p>
                            <p>A imagem de uma instituição precisa ser constantemente monitorada e cuidada para que ela corresponda aos esforços do Estado de oferecer atendimento de qualidade ao cidadão, por meio de seu quadro de servidores.</p>
                            <p>Nesse sentido, o papel do servidor público não é apenas o de ser estável. Para Dourado (2012), é muito mais do que isso, pois a sua atuação volta-se, necessariamente, para os anseios dos cidadãos ou da sociedade.</p>
                            <p>A responsabilidade do servidor público é grande, tornando-se um privilégio porque ele se constitui como um agente de transformação do Estado. O servidor deve estar sempre a serviço do público. Nessa perspectiva, Dourado (2012) aponta alguns princípios fundamentais à sua atuação:</p>
                            <br>
                            <!-- LISTA EM MOVIMENTO-->
                            <div>
                                <ul  class="none">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Agente de transformação a serviço da cidadania, o que se torna uma diferença marcante em relação aos demais trabalhadores;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Compromisso intransigente com a ética e com os princípios constitucionais;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Atualização permanente e desenvolvimento de novas competências;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Capacidade de lidar com a diferença e a diversidade;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Habilidade para atuar em diferentes contextos e sob diversos comandos;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Lidar com o que é de todos.</li>
                                
                                </ul>
                            </div>
                            <br>
                            <p>É importante, então, assumir o papel de um cidadão-servidor que está a serviço de um usuário-cidadão, que procura no serviço público algo a que tem direito, ainda que seja apenas uma informação. E o servidor, do atendimento, tem um papel relevante, pois representa a instituição no contato com o cidadão.</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Figura 09:  Servidor e a Busca pela Qualidade do Atendimento</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            
                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> <em>Pixabay</em></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <p>Desse modo, é de suma importância exaltar aquele que exerce o papel de prestador de serviço à sociedade. Nesse contexto, prestar serviço à população com qualidade e dedicação deve ser sempre a meta dos servidores e estar entre seus objetivos.</p>




                            <br><br>
                            <p><strong>Parabéns, <?php echo $NomeUsuario ?>! Você finalizou o tópico 03 do módulo 02 do curso Atendimento ao Público. Lembre-se de responder a Avaliação. Boa sorte e até o próximo curso!</strong></p>
                            
                
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
                    <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=535" class="btn btn-outline-success" role="button" aria-pressed="true">Realizar Avaliação 02 <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>

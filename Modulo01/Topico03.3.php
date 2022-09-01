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
                    
                            <h2 class="SubTitulo"> Competência: Atitude</h2>
                            <hr>
                            
                            
                            <p>Atitude, como instância da competência profissional, compreende:</p>

                            <div>
                                <ul  class="none">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O comportamento;</li>

                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A postura;</li>

                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O modo de atuação no ambiente de trabalho.</li>
                                   
                                </ul>
                            </div>
                            <br>
                            <p>Atitudes são fundamentadas em valores, princípios e crenças que, desenvolvidos ao longo da vida, são reforçados ou modificados na vivência no mundo do trabalho.
                            </p>
                            <p>Nesse sentido, atitude envolve aspectos sociais e afetivos relacionados ao trabalho. Gagné e outros (1988) destacam que atitudes são estados dos complexos do ser humano que afetam o seu comportamento em relação a pessoas, coisas e eventos, determinando a escolha de um curso de ação pessoal. Para esses autores, as pessoas têm preferências por alguns tipos de atividades e mostram interesse por certos eventos mais que por outros. O efeito da atitude é justamente ampliar a reação positiva ou negativa de uma pessoa, isto é, sua predisposição em relação à adoção de uma ação específica.</p>
                            <br>
                            <!-- Saiba Mais -->

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">Atendimento envolve o ser humano. Logo, as pessoas não são como máquinas, que respondem sempre conforme foram programadas. Um desempenho considerado satisfatório por uma pessoa pode ser considerado insatisfatório por outra. O nível de exigência das pessoas é variável em função de sua história de vida, ou mesmo em função do momento. Além disso, questões culturais, religiosas e políticas podem interferir no nível de exigência das pessoas em uma situação de atendimento. Por exemplo, uma postura solícita, que alguns reconhecem como de máxima atenção, pode parecer para outros, que aguardam numa fila, como sendo perda de tempo. Desse modo, a rapidez no atendimento é fundamental para a maioria das pessoas. Para outros, a segurança das informações é o fator primordial. Não há nada, então, de objetivo com relação à atitude ao prestar atendimento?</p>
                            </div>
                            <p>Há, sim, algumas atitudes recomendáveis no atendimento a qualquer pessoa. São elas:</p>
                            <br>

                             <!-- Accordion Fase 01 - Begin  -->

                            <div class="accordion accordion-flush" id="AccordionFase01">

                                <!-- Sub Título -->

                                <p class="SubTitulo">Clique nos títulos abaixo para mais informações</p>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Prontidão</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Facilite o acesso das pessoas às informações e favoreça o contato. É verdade que nem sempre o atendimento imediato e rápido será possível, mas se pode demonstrar atenção à situação. O simples fato de cumprimentar cada um que chega já deixa a pessoa mais tranquila, pois ela sabe que sua presença foi notada e ninguém será atendido antes. Isso evita também que haja aglomeração ao seu redor. A prontidão é uma atitude que se expressa com palavras e com postura. Por exemplo, evite ficar de costas para as pessoas que você vai atender.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Cortesia</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                            Educação, respeito, polidez, consideração e cordialidade são atitudes fundamentais para quem trabalha no atendimento, independentemente da classe social a que pertençam as pessoas a serem atendidas. Não economize palavrinhas como: "Por favor..."; "Pois não..."; "Um momento..."; "Às suas ordens..."; "Obrigado..."; "Com licença..."; "Me desculpe...".
                                            </p>
                                        </div>
                                    </div>
                                </div> 

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Credibilidade</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> A transparência do servidor público será sempre cobrada em ações de prestação de serviço. Confiança e honestidade são transmitidas quando se demonstra segurança nas informações e orientações dadas ao usuário-cidadão. Para ter essa segurança, você tem que ter conhecimento de suas atividades e atribuições.</p>
                                            <p>Diga, por exemplo, com clareza o que pode e o que não pode ser feito. Fale sempre a verdade. Mesmo que seja para dizer que você desconhece a resposta para um questionamento qualquer, ou para dizer algo que não seja o esperado pelo cidadão e que o contrarie.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Responsabilidade</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> É responsabilidade do servidor ou colaborador ter informações corretas para quem se dirige a ele. Se não estiver ao seu alcance o encaminhamento solicitado, o usuário deve ser informado de outras soluções possíveis.</p>
                                            <p>Explique, por exemplo, o motivo de não poder atendê-lo e mostre, quando for o caso, alternativas ao problema. Somente encaminhe a pessoa para outro atendente quando não puder resolver a situação. Nesse caso, procure informar ao colega o histórico do atendimento, para que o usuário não tenha que repetir sua demanda.</p>
                                            <p>Há casos, por exemplo, em que um servidor acolhe um requerimento sem conferir adequadamente a pertinência do pedido. Outro servidor terá que se dedicar à análise desse pedido até o seu indeferimento. Uma leitura atenta do requerimento quando ele foi acolhido teria evitado esse trabalho de análise e não criaria no usuário-cidadão expectativas que não serão atendidas.</p>
                                            <p>Portanto, pedidos sem sustentação apenas para se livrar do cidadão não devem ser recebidos, pois apenas se retardou o momento de “enfrentá-lo” com uma negativa.</p>
                                            <p>Se com o exemplo mencionado, você pensou que atitude está relacionada com motivação, acertou. Para ter uma atitude proativa e dinâmica no atendimento, é necessário estar motivado.</p>
                                            <p>Motivação é algo que vem de dentro para fora, mas também é estimulada pelas condições e pelo ambiente em que se trabalha. Portanto, todos os que compõem um setor ou departamento são, de forma direta ou indireta, responsáveis pela motivação de toda a equipe de trabalho.</p>
                                            <p>Tanto na administração privada quanto na administração pública o bom desempenho depende do trabalho em equipe. Um relacionamento que favoreça a troca de informações e a colaboração entre a equipe, além de tornar o ambiente mais humano, aperfeiçoa o trabalho que se realiza.</p>
                                        
                                        </div>
                                    </div>
                                </div>                                         
                            </div><br>
                            <!-- FIM Accordion Fase 01 - Begin  -->
                            <p>Em outras palavras há um bom clima organizacional, quando são estabelecidos acordos coletivos de companheirismo, solidariedade e apoio mútuo. Certamente, ao se trabalhar em um ambiente agradável, há maior motivação para desempenhar as atividades pelas quais se tem responsabilidade e isso se reflete positivamente na atitude diante do usuário.</p><br>
                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success" >
                                <p class="Texto">
                                <em>"Conhecimento, habilidade e atitude, instâncias constitutivas da competência, são interdependentes e complementares. E devem se manifestar de uma forma integrada e harmônica em um processo dinâmico: o conhecimento aprimora a habilidade e permite a produção de resultados. Esses resultados reforçam a atitude positiva, que se manifesta em disposição para continuar a fazer, sempre mais e melhor...num círculo virtuoso."
                                <p class="text-end">ENAP, 2006</p></em>
                                </p>
                            </div><br>
                            <!-- Duvida  -->

                            <div class="DuvidaCaixa">
                                <p class="DuvidaTitulo"> Dúvida</p>
                                <p class="DuvidaTexto">Pode-se dizer, então, que um servidor público, que sabe o que fazer, como fazer e tem motivação para fazer é competente?</p>
                            </div>
                            <br>
                            <!-- Atividade -->

                            <div class="AtividadeCaixa">
                                <p class="AtividadeTitulo"> Pratique</p>
                                <div class="AtividadeTexto">
                                    <p>Leia os dois diálogos a seguir, os quais exemplificam atendimentos.</p>
                                    <p><strong>Conversa 01</strong></p>
                                    <p><strong>Usuário-Cidadão:</strong> Eu preciso de uma certidão negativa.</p>
                                    <p><strong>Servidor:</strong> O senhor tem que preencher um requerimento.</p>
                                    <p><strong>Conversa 02</strong></p>
                                    <p><strong>Usuário-Cidadão:</strong> Eu preciso de uma certidão negativa.</p>
                                    <p><strong>Servidor:</strong> Sim, Senhor! Nós forneceremos a certidão. Basta o senhor preencher um requerimento e apresentar a carteira de identidade e CPF.</p>
                                </div>
                            </div>
                            <br>
                            <p>O que você observou nas duas situações?</p>
                            <p>Em ambas, observam-se servidores utilizando competências técnicas e comportamentais?</p>
                            <p>Qual dos atendimentos gostaria de receber e classificaria como de qualidade se você fosse o usuário-cidadão?</p>
                            <p><strong>A reflexão sobre qualidade aqui iniciada será aprofundada no módulo 02. Vamos lá!</strong></p><br>

                            <p><strong>Parabéns, <?php echo $NomeUsuario ?>! Você finalizou o tópico 03.3 do módulo 01 do curso Atendimento ao Público. Não esqueça de realizar a Avaliação deste módulo. Boa sorte e até o próximo módulo!</strong></p>


          
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
                    <a href="Topico03.2.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=532" class="btn btn-outline-success" role="button" aria-pressed="true">Realizar Avaliação 01 <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>

<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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
                                            
                            <h2 class="Titulo">Atendimento de Reclamações ou de Situações Extraordinárias</h2>
                            <hr>
                            <p> <strong>Objetivo:</strong> Caracterizar possíveis tipos de usuários a serem atendidos e apresentar ações e atitudes que podem ser adotadas diante de situações de reclamação ou extraordinárias.</p>
                            
                            <p>O usuário do serviço público tem conhecimento e busca cada vez mais seus direitos, tornando-se também mais exigente. Com isso, surge uma necessidade particular de respeitar as diferenças entre os possíveis usuários e usar a percepção para entender o que cada um deseja, buscando atendê-los dentro das normas da instituição e suprindo necessidades específicas.</p>
                            <p>Ao estudarmos a visão sistêmica, pudemos deduzir que tudo está inter-relacionado numa organização, ou seja, os acontecimentos e os diversos processos de uma organização estão interligados.</p>
                            <br>
                            <!-- Reflita -->

                            <div class="ReflitaCaixa">
                                <p class="ReflitaTitulo"> Reflita</p>
                                <p class="ReflitaTexto">Se um usuário-cidadão sai de sua casa para ir a um órgão público e bate o carro, certamente ao procurar o atendimento estará nervoso e pouco tolerante. Você concorda?</p>
                            </div>
                            <br>
                            <p>O fenômeno que aconteceu com esse cidadão é chamado de variável exógena (gerada fora do organismo ou do sistema). Isso porque o evento ocorreu fora da área de interferência, que nesse caso é uma instituição pública. Conforme especialistas, no âmbito da visão sistêmica, as “variáveis exógenas” devem ser consideradas, mas deve haver especial preocupação com as variáveis endógenas (geradas dentro do organismo ou do sistema), ou seja, dizem respeito aos eventos que ocorrem internamente no órgão público. Se, por exemplo, o servidor tivesse batido o carro e estivesse angustiado, irritado, teríamos aí uma "variável endógena".</p>
                            <br>
                            <!-- Duvida  -->

                            <div class="DuvidaCaixa">
                                <p class="DuvidaTitulo"> Dúvida</p>
                                <p class="DuvidaTexto"> Como lidar com isso?</p>
                            </div>
                            <br>

                            <p>É normal que em determinados dias não estejamos bem. Todos temos problemas, e é inevitável que eles façam parte do nosso dia a dia. É muito difícil chegar ao trabalho e simplesmente esquecer os problemas particulares.</p>
                            <!-- Duvida  -->

                            <div class="DuvidaCaixa">
                                <p class="DuvidaTitulo"> Dúvida</p>
                                <p class="DuvidaTexto"> Será que alguém consegue?</p>
                            </div><br>
                            <!-- Importante -->

                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">É importante lembrarmos que o cidadão que nos procura no trabalho não sabe de nosso estado de espírito. Desse modo, não podemos descarregar possíveis irritações nessa pessoa. Se não nos sentimos em condições de prestar atendimento ao público por estar descontrolado emocionalmente, isso deve ser informado ao nosso superior hierárquico. Se for o caso, deve-se solicitar ficar em um serviço interno, ou até mesmo utilizar uma folga nesse dia.</p>
                            </div>
                            <br>
                            
                            <p>Voltando ao fato de o cidadão ter batido o carro, nada pode ser feito com relação ao acidente (variável exógena). Porém, quando ele estiver diante do servidor para ser atendido, demonstrando ansiedade, irritação e preocupação, estará na área de interferência (variável endógena). O servidor poderá piorar o dia desse cidadão (e ainda comprometer seu dia) se for intransigente; mas pode amenizar o desespero dele com uma atitude (o querer fazer) de tolerância.</p>

                            <p>A efetividade da atuação do servidor, nessa situação específica, dependerá de sua sensibilidade para acolher o usuário, que provavelmente estará desestabilizado emocionalmente.</p>
                            <p>Com base nesse tipo de situação, é relevante conhecermos os tipos de clientes ou de usuários que podem, no dia a dia, demandar serviços a uma organização e gerar reclamações ou situações extraordinárias. Afinal, conhecer o usuário e as suas necessidades são fatores fundamentais para a qualidade do atendimento.</p>

                            <p>Pilares (1991) classifica alguns tipos de clientes e orienta como lidar com eles.</p>

                            <p>A classificação e as características apontadas por Pilares (1991) nos permitem delinear perfis de clientes que podemos receber em nossas instituições. Isso, certamente, nos permite estar mais bem preparados para situações de reclamações e extraordinárias.</p>
                            <br>

                            <!--tabela--> 
                            <div class="col-md-12"><br />
                                <table class="table table-bordered">
                                    <thead>
                                        <tr >
                                        <th scope="col" class="table-success text-center" style="font-weight: bold;"> Clientes</th>
                                        <th scope="col" class="table-success text-center" style="font-weight: bold;"> Características</th>
                                        <th scope="col" class="table-success text-center" style="font-weight: bold;"> Atitudes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><center><strong>Impaciente</strong></td>
                                                <td>Perguntador cíclico, insistente, compulsivo, chegando a insultar quando contrariado, fazendo piadinhas de mau gosto.</td>
                                                <td>Tratá-lo com brevidade, mas com muita cortesia. Esse tipo de cliente exige sinceridade, segurança nas respostas e autocontrole.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Silencioso</strong></center></td>
                                                <td>Demonstra não ter conhecimento, aparenta um ar de cansaço, mostrando-se sempre pensativo e quase não conversa.</td>
                                                <td>Induzir o cliente ao diálogo, bastando apenas formular perguntas claras, num clima de consideração e atenção.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Barganhador</strong></center></td>
                                                <td>Procura insistentemente por vantagens</td>
                                                <td>Agir com tato, analisando minuciosamente sua fala para que se possa argumentar com convicção. É importante saber até aonde deve ir.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Indeciso</strong></center></td>
                                                <td>Apresenta ar de apreensão permanente, sempre quer conversar mais, perguntar sobre coisas que já perguntou. Às vezes tem raciocínio lento.</td>
                                                <td>Agir com moderação, calma e paciência, respondendo sempre e sinceramente às perguntas feitas várias vezes.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Agitado</strong></center></td>
                                                <td>Pessoa inquieta, geralmente interrompe sua fala e não tem paciência de ouvir a explicação.</td>
                                                <td>Agir com calma, falando moderadamente, sem se irritar. Deve-se evitar ao máximo abordar questões que tenham mais de um sentido e ter respostas objetivas.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>De bom senso</strong></center></td>
                                                <td>É uma pessoa amável, agradável e inteligente.</td>
                                                <td>Agir com atenção, demonstrando prestabilidade, mantendo sempre o clima de simpatia e cordialidade.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Bem humorado</strong></center></td>
                                                <td>Pessoa agradável, de conversa envolvente, mas que desvia do assunto constantemente, dificultando o diálogo.</td>
                                                <td>Ter habilidade e buscar constantemente retomar o rumo da conversa. Não perder as rédeas da situação.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Inteligente</strong></center></td>
                                                <td>Sabe tudo sobre tudo, não gosta de argumentos fracos.</td>
                                                <td>Usar de bom senso e lógica, nunca omitindo informações. Esteja bem informado, agindo com segurança em tudo que faz.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Confuso</strong></center></td>
                                                <td>É aquele cliente indeciso, muda de opinião constantemente.</td>
                                                <td>Fazer apresentações firmes e convincentes, reiniciando com paciência sempre que o cliente solicitar.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Presunçoso</strong></center></td>
                                                <td>Sempre fala "eu sei" depois de qualquer afirmativa. Pouco argumenta e quase nunca ouve os seus interlocutores.</td>
                                                <td>Ter muita habilidade, dar valor ao cliente, sem bajulá-lo.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Detalhista</strong></center></td>
                                                <td>Pessoa que quer saber detalhes, não entende como funciona, demonstra dificuldade em associar ideias.</td>
                                                <td>Falar pausadamente, várias vezes, com clareza, não se prendendo a detalhes desnecessários.</td>
                                            </tr>
                                            <tr>
                                                <td><center><strong>Agressivo</strong></center></td>
                                                <td>Gosta de discutir por qualquer coisa, seja muito ou pouco importante. Critica abertamente. Tudo é um motivo para brigar.</td>
                                                <td>Não interrompa a fala do cliente, deixe-o liberar a sua raiva. Nunca lhe diga que está nervoso, isso o deixará mais furioso. Use frases que ajudam a acalmar, exemplos: Imagino como o senhor ou a senhora está se sentindo; O senhor tem razão; Farei tudo para resolver o problema.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            <p>A classificação, e as características apontadas por Pilares (1991) nos permitem delinear perfis de clientes que podemos receber em nossas instituições. Isso, certamente, nos permite estar mais bem preparados para situações de reclamações e extraordinárias.</p>
                            <!-- Duvida  -->

                            <div class="DuvidaCaixa">
                                <p class="DuvidaTitulo"> Dúvida</p>
                                <p class="DuvidaTexto">Como agir em situações de reclamações?</p>
                            </div>
                            <br>
                            <p>Quando um cliente aparece com uma reclamação, não aja como se isso fosse um grande problema. Essa é uma oportunidade para reflexão, aprendizagem e, consequentemente, a melhoria do serviço prestado pela instituição.</p>
                            <p>Especialistas sugerem que nas situações de reclamação sejam adotados procedimentos como:</p>
                            <br>
                            <div>
                                <table class="table">
                                <tbody>
                                <tr class="text-center"><th class=" table-success" class="BCorEad text-white ">Ouvir atentamente</th>
                                <td>
                                <p>Repetir o que ouviu e conseguir o reconhecimento de que percebeu: repita a reclamação por palavras suas, para ter a certeza de que a percebeu.</p>
                                </td>
                                </tr>
                                <tr>
                                <td></td>
                                </tr>
                                <tr class="text-center"><th class=" table-success" class="BCorEad text-white textmiddle">Apresentar desculpas</th>
                                <td>
                                <p>Mostre ao cliente que lamenta o sucedido, mesmo que o erro não seja seu. Diga-lhe que assumirá total responsabilidade na resolução da reclamação.</p>
                                </td>
                                </tr>
                                <tr>
                                <td></td>
                                </tr>
                                <tr class="text-center"><th class=" table-success" class="BCorEad text-white textmiddle" >Aceitar</th>
                                <td>
                                <p>Comunique claramente ao cliente que compreende o problema. Enfatize também que está satisfeito por ter trazido o problema, pois terá oportunidade de corrigir a situação.</p>
                                </td>
                                </tr>
                                <tr>
                                <td></td>
                                </tr>
                                <tr class="text-center"><th class=" table-success" class="BCorEad text-white textmiddle">Explicar</th>
                                <td>
                                <p>Explique ao cliente o que vai pôr em prática para resolver o problema.</p>
                                </td>
                                </tr>
                                <tr>
                                <td></td>
                                </tr>
                                <tr class="text-center"><th class=" table-success" class="BCorEad text-white textmiddle">Agradecer</th>
                                <td>
                                <p>Agradeça ao cliente o fato de tê-lo colocado o problema.</p>
                                </td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                            <br>
                            <!-- Duvida  -->

                            <div class="DuvidaCaixa">
                                <p class="DuvidaTitulo"> Dúvida</p>
                                <p class="DuvidaTexto">Como agir diante de situações delicadas?</p>
                            </div>
                            <br>
                            <p>Gonçalves (s/d), da Ouvidoria Geral da União, aponta algumas possíveis situações extraordinárias e sugestões para desenvolver o atendimento de qualidade:</p>
                            <br>
                            <br>
                            <div class="alert alert-info" role="alert">
                                <p> Pessoas que gritam, ofendem e/ou ameaçam</p><hr>
                                <p>Procedimento: estabeleça limites e opções. Nesses casos, podem-se adotar as seguintes posturas por parte de quem atende:</p>
                                <!-- LISTA EM MOVIMENTO-->
                                <div>
                                    <ul  class="none">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right Corwhit"></i> Atendimento Telefônico: "Para continuar, eu preciso que o(a) senhor(a) diminua seu tom de voz. Se continuar gritando, vou ter que desligar."</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right Corwhit"></i> Atendimento Presencial: "Caso continue me desrespeitando, serei obrigado a interromper o atendimento."</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right Corwhit"></i>  Atendimento Presencial e/ou Telefônico: "O(a) senhor(a) não acha melhor continuarmos outra hora? Que tal amanhã às 10h?” “Posso ouvi-lo atentamente desde que o(a) senhor(a) fale baixo e evite ofensas". "Infelizmente, não me resta outra opção senão desligar o telefone." Retire-se, então, do ambiente ou interrompa a ligação. Se necessário, peça ajuda.</li>
                                    
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="alert alert-danger" role="alert">
                            <p> Pessoas que relatam histórias aparentemente inverossímeis</p><hr>
                            <p>Não julgue ou avalie o usuário. Escute atentamente. Faça perguntas para esclarecer as dúvidas e buscar o nexo entre os acontecimentos. Anote criteriosamente o relato e descreva, no formulário, os pontos controversos. Se necessário, peça ajuda e leve o caso para ser discutido com sua equipe de trabalho.</p>
                            </div>
                            <br>
                            <div class="alert alert-dark" role="alert">
                            <p>Pessoas que solicitam orientação relatando fato pouco provável</p><hr>
                            <p>Procure interpretar a demanda e respondê-la a partir da perspectiva da promoção e realização dos direitos humanos. Veja um exemplo real. No final do ano de 2012, a mídia noticiou uma profecia relacionada ao “fim do mundo”. Uma cidadã procurou uma unidade da ouvidoria pública e perguntou: "O que devo fazer quando o mundo estiver acabando?". O servidor, após discutir o caso com sua equipe de trabalho, formulou a seguinte resposta: "Pelo que entendi, a Senhora busca informações sobre serviços e equipamentos públicos que prestam auxílio emergencial em caso de catástrofes naturais. Aqui está uma lista com tais serviços e equipamentos, caso necessário".
                            </p>
                            </div>
                            <br>
                            <div class="alert alert-primary" role="alert">
                            <p> Pessoas com transtornos mentais</p><hr>
                            <p>Caso o usuário seja pessoa com transtorno mental, pergunte sobre a residência e a existência de vínculos familiares e comunitários. Em caso de emergência, acione a rede de serviços e equipamentos de atenção à saúde mental, tais como os CAPS (Centros de Atenção Psicossocial) ou os serviços socioassistenciais.
                            </p>
                            </div>
                            <br>
                            <p>Agostini e Meyer (2011) fazem uma proposta para se tentar reduzir as insatisfações dos clientes ou usuários.</p>
                            <br>
                            <!-- LISTA EM MOVIMENTO-->
                            <div>
                                <ol  class="1">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> Não tenha medo das reclamações: use-as para melhorar o seu serviço.
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> Cumpra os prazos prometidos: ao prometer um prazo, a instituição cria expectativas em relação ao usuário, que passa a esperar o que foi prometido.
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"> Monitore as redes sociais: os primeiros sinais são dados na rede. Monitore-as para identificar o que os usuários estão falando de sua instituição e de seus produtos e serviços.
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"> Surpreenda os seus usuários: na reclamação que fizerem, surge uma boa oportunidade para surpreender positivamente os usuários, fazendo uma oferta vantajosa que os deixe satisfeitos e surpresos.
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"> Vá fundo no problema: procure identificar as causas. Deve-se revisar todo o processo de prestação de serviços, para identificar qual é o setor que mais especificamente está causando o problema.
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"> Dê poder à linha de frente: uma certa autonomia para certos assuntos é necessária para que as organizações prestem bom atendimento, pois a necessidade de pedir autorização para alguns procedimentos básicos e elementares prejudica o desenvolvimento de um atendimento ágil e dinâmico.
                                    </li>
                                
                                </ol>
                            </div>
                            <p>As instituições que buscam prestar serviços de qualidade devem elaborar instrumentos de avaliação e pesquisa e estar atentas aos resultados para melhorar seu atendimento. Isso deve ser feito com um acompanhamento sistemático e a análise das reclamações.</p>
                            <br>
                            <!-- Fique Atento -->

                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>- Qual o impacto nos resultados da instituição, decorrentes do tratamento inadequado das reclamações?</p>
                                    <p> - Quais os principais desafios enfrentados pelo órgão para tratar as reclamações de forma adequada?</p>
                                    <p>- Quais os procedimentos utilizados pela instituição no tratamento eficaz das reclamações?</p>
                                    <p>- Quais as falhas que eventualmente ocorrem no tratamento das reclamações da instituição?</p>
                                    <p>- Quais as melhores alternativas para tratar corretamente as reclamações do usuário-cidadão?</p>
                                    <p>As questões aqui relacionadas são um ponto de partida para a reflexão e a posterior análise do que vem ocorrendo em sua instituição.</p>
                                </div>
                            </div>
                            <br>
                            <p>No próximo tópico, vamos tratar do papel do servidor no atendimento de qualidade. Vamos lá!</p>

                            <p><strong>Parabéns, <?php echo $NomeUsuario ?>!  Você finalizou o tópico 02 do módulo 02 do curso Atendimento ao Público. Continue aprofundando seus conhecimentos no próximo tópico. Até lá!</strong></p>





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
                    <a href="Topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>

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

                        <h2 class="Titulo">Aspectos Essenciais para a Qualidade do Atendimento</h2>
                        <hr>
                        <p><strong>Objetivo:</strong> Estabelecer a diferença entre atendimento e tratamento e apresentar critérios e necessidades do usuário-cidadão, bem como princípios que devem ser seguidos para que o atendimento seja de qualidade.</p>
                        <p>Ao pensarmos na qualidade do atendimento, um dos aspectos importantes para que este chegue à excelência é termos clara a diferença entre atendimento e tratamento.</p><br>
                                             
                        
                        <!-- Figura/texto -->

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                <p class="FonteFigura img-fluid wow fadeInRight"><strong>Figura 01:</strong> Atendimento e Tratamento</p>
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
                                    <p class="FonteFigura"><strong>Fonte: </strong><a href="tmktdepre.blogspot.com.br">tmktdepre.blogspot.com.br</a></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 03 - End -->
                            

                        <p>Atendimento está diretamente relacionado aos negócios de uma organização, suas finalidades e serviços, considerando-se suas normas e regras. O atendimento estabelece, portanto, a relação entre o servidor, a instituição e o cidadão. Na imagem I, observamos que não será possível atender à necessidade da senhora, pois só haverá consulta disponível no prazo de três meses.</p>

                        <p>Tratamento é a maneira como o servidor se dirige ao cidadão e com ele interage, orientando-o, conquistando sua simpatia. Relaciona-se à presteza (demonstração do desejo de servir, valorizando prontamente a solicitação do usuário), à cortesia (manifestação de respeito ao usuário) e à flexibilidade (capacidade de lidar com situações não previstas). Na imagem I, podemos notar que o tratamento inicial dado à senhora é de cortesia, mas ao final há descaso, quando é dito que peça ao “marido” para telefonar “desmarcando”.</p>
                        <br>
                        <p>Nessa situação, não houve atendimento à solicitação da senhora (uma consulta), nem o tratamento foi satisfatório.</p>
                        <br>
                        <!-- Atividade -->

                        <div class="AtividadeCaixa">
                            <p class="AtividadeTitulo"> Pratique</p>
                            <p class="AtividadeTexto">Imagine, por exemplo, que um cidadão vai até uma instituição pública em busca de um documento, uma consulta ou um simples carimbo. Ao entrar no órgão público, é recebido com cortesia e atenção, mas não encontra o serviço que deseja. Nessa situação, o cidadão foi bem tratado e foi bem atendido? Se você respondeu sim, é necessário refletir um pouco mais. O cidadão foi bem tratado, mas não foi atendido, pois sua necessidade ficou sem solução.</p>
                        </div>
                        <br>
                        <p>Atendimento e tratamento devem então ser pensados de forma integrada. São ações que se complementam para compor o atendimento de excelência.</p>
                        <p>A qualidade do atendimento ao cliente é de suma importância para o crescimento de uma organização, pois é por meio de um bom atendimento que uma instituição atribui valor a sua imagem e se torna atrativa para aquele que demanda algum serviço.</p>
                        <p>De acordo com Milet (1997, p. 17), há critérios utilizados pelo usuário para avaliar a prestação do serviço de atendimento com qualidade, os quais estão destacados a seguir:</p>
                        <br>
                        <!--tabela-->

                        <div>
                            <table class="table table-bordered border-success">
                                <thead>
                                    <tr>
                                        <th scope="col" class="table-success text-center" style="font-weight: bold;">Critério</th>
                                        <th scope="col" class="table-success text-center" style="font-weight: bold;">Conceito</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><center><strong>Aspectos Tangíveis</strong></center></td>
                                        <td>Aparência da instalação física, equipamentos, pessoal etc.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Confiabilidade</strong></center></td>
                                        <td>Habilidade para cumprir o prometido.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Presteza</strong></center></td>
                                        <td>Desejo e disposição de ajudar, ou seja, rapidez no atendimento.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Competência</strong></center></td>
                                        <td>Colaboradores com os perfis e os conhecimentos necessários.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Cortesia</strong></center></td>
                                        <td>Educação, respeito, consideração, atenção e cordialidade.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Credibilidade</strong></center></td>
                                        <td>Transmissão de confiança e credibilidade junto ao usuário.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Segurança</strong></center></td>
                                        <td>Minimização ou eliminação de risco, perigo ou ações duvidosas contra as pessoas e informações.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Acessibilidade</strong></center></td>
                                        <td>Facilidade de contato com as pessoas na organização.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Comunicação</strong></center></td>
                                        <td>Manter o usuário informado por meio de linguagem compreensível, clara e precisa.</td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Entendimento do Cliente</strong></center></td>
                                        <td>Esforço feito para conhecer o usuário e seus reais problemas e necessidades.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><br>

                        <p>Ao ler os critérios apontados por Milet (1997), você deve estar lembrando das competências essenciais do servidor público, indicadas na Aula 1. Desse modo, há uma associação direta entre o que a instituição visa oferecer, e o que o usuário o usuário espera receber. A instituição volta-se, assim, para as necessidades do usuário-cidadão.</p>

                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura img-fluid wow fadeInLeft" ><strong>Figura 02:</strong> Conhecer a Necessidade do Usuário</p>
                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid"  src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    <p class="TituloFigura img-fluid " ><strong>Fonte:</strong> EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                        <br>

                        <p>
                        O usuário-cidadão chega a um órgão público com dois tipos básicos de necessidades: pessoais e práticas. A capacidade de identificar e satisfazer esses dois tipos de necessidades influenciará muito na percepção que o cidadão terá a respeito do seu atendimento.</p>
                        <br>
                        <!-- Accordion Fase 01 - Begin  -->

                        <div class="accordion accordion-flush" id="AccordionFase01">

                            <!-- Sub Título -->

                            <p class="SubTitulo">Clique nos títulos abaixo para mais informações</p>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Necessidades Pessoais</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Todo usuário-cidadão tem necessidade de ser atendido, tratado com respeito e de sentir-se importante. Quando você valoriza o usuário-cidadão como pessoa, satisfaz suas necessidades pessoais, fazendo com que ele se sinta bem em relação a você e à organização.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong> Necessidades Práticas</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> O usuário-cidadão também procura sua organização por motivos práticos. Os produtos e os serviços que você oferece podem satisfazer suas necessidades básicas ou de trabalho, ou podem melhorar seus estilos de vida ou perspectivas de negócios. O usuário-cidadão também vai até você em busca de conhecimento e experiência.</p>
                                        <p>Estabelecer contatos eficazes, descobrir os detalhes sobre a situação e tomar as medidas adequadas satisfazem as necessidades práticas dos clientes. Se, ao mesmo tempo, a pessoa for tratada com cortesia e ouvida com empatia, suas necessidades pessoais também serão satisfeitas. Para dar um atendimento de qualidade, deve-se satisfazer ou “exceder” as necessidades pessoais e práticas.</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <br>
                        <p>A capacidade de identificar rapidamente as necessidades pessoais e práticas é fundamental para dar um atendimento de qualidade ao usuário de um serviço.</p>
                        <!-- Atividade -->

                        <div class="AtividadeCaixa">
                            <p class="AtividadeTitulo"> Pratique</p>
                            <div class="AtividadeTexto"><p>Você já pensou sobre necessidades pessoais e práticas que os cidadãos costumam apresentar quando telefonam, enviam e-mail ou visitam sua instituição?</p>
                            <p>Tente relacionar pelo menos 4 necessidades pessoais e 4 necessidades práticas.</p>
                            <p>O exercício aqui proposto é também uma prática para o seu dia a dia, uma vez para conseguir satisfazer as necessidades do usuário-cidadão, é preciso descobrir quais são elas. Em alguns casos, é preciso ajudar o usuário a definir ou esclarecer tais necessidades.</p> 
                            </div>
                        </div>
                        <br>
                        <!-- Saiba Mais -->

                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto">Quando as necessidades forem claras ou rotineiras, deve-se demonstrar compreensão e interesse. Somente após ter esclarecido quais são as necessidades do usuário é que se pode satisfazê-las ou superá-las. Em muitos casos, a situação será de rotina, portanto, a rapidez, e a cortesia no atendimento impressionarão o cidadão. Entretanto, algumas situações são extraordinárias, e será necessário envolver o usuário para desenvolver um plano de ação. De qualquer modo, devem ser encontradas maneiras para superar suas necessidades, ou seja, ir além do que o cidadão possa estar esperando.</p>
                        </div>
                        <br>
                        <p>Para discutirmos o conceito de atendimento, é fundamental tratarmos de duas noções diretamente ligadas ao atendimento no serviço público: a de Sociedade e a de Estado.</p>
                        <br>
                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" width="500"  src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura img-fluid wow fadeInLeft" ><strong>Figura 03:</strong> Atendimento de Qualidade </p>
                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                    <img class="img-fluid"  src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    <p class="TituloFigura img-fluid" ><strong>Fonte: </strong> Neoassist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                        <br>
                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p class="Texto">
                            <em>"Qualidade é tudo aquilo que alguém faz ao longo de um processo para garantir que o cliente obtenha, exatamente, aquilo que deseja."<p class="text-end">LOBOS, 1991, p.18</p></em>
                            </p>
                        </div>
                        <br>
                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p class="Texto">
                            <em>"Qualidade é a totalidade dos atributos e características de um produto ou serviço que afetam sua capacidade de satisfazer necessidade declaradas ou implícitas."<p class="text-end">KOTLER, 2000, p.79</p></em>
                            </p>
                        </div>
                        <br>
                        <p>Como referido, existem várias definições de qualidade, mas o que há em comum é o fato de todas se direcionarem à valorização do usuário, por meio da sua satisfação com o serviço prestado por uma organização, ou seja, ao utilizar o que as instituições oferecem, o usuário deseja que os serviços sejam constituídos por todas as características que tem em mente.</p>
                        <p>Nesse contexto, uma preocupação com a melhoria da qualidade dos serviços públicos, visando melhores resultados ao cidadão foi a inclusão do princípio da eficiência na Constituição Federal – CF, por meio da Emenda Constitucional n° 19, de 04 de junho de 1998 – EC nº 19/98, em seu art. 3º. Nesse artigo, é dada nova redação ao artigo 37 da CF.</p>
                        <p>Art. 3º O caput, os incisos I, II, V, VII, X, XI, XIII, XIV, XV, XVI, XVII e XIX, e o § 3º do art. 37 da Constituição Federal passam a vigorar com a seguinte redação, acrescendo-se ao artigo os §§ 7º a 9º:</p>
                        <br>
                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p class="Texto">
                            <em>"Art. 37. A administração pública direta e indireta de qualquer dos Poderes da União, dos Estados, do Distrito Federal e dos Municípios obedecerá aos princípios de legalidade, impessoalidade, moralidade, publicidade e eficiência(...)"<p class="text-end">KOTLER, 2000, p.79</p></em>
                            </p>
                        </div>
                        <br>
                        <p>De acordo com Chiavenato (1994), toda organização deve ser analisada sob o escopo da eficácia e da eficiência, ao mesmo tempo:</p>
                        <br>
                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p class="Texto">
                            <em>"eficácia é uma medida normativa do alcance dos resultados, enquanto eficiência é uma medida normativa da utilização dos recursos nesse processo. (...) A eficiência é uma relação entre custos e benefícios. Assim, a eficiência está voltada para a melhor maneira pela qual as coisas devem ser feitas ou executadas (métodos), a fim de que os recursos sejam aplicados da forma mais racional possível (...)"<p class="text-end">CHIAVENATO, 1994, p.70</p></em>
                            </p>
                        </div>
                        <br>
                        <p>A eficiência não objetiva os fins, mas os meios, ela se insere nas operações voltadas para os aspectos internos da organização. A eficácia, por sua vez, visa alcançar os fins, atingir os objetivos, insere-se no êxito do alcance dos objetivos, com foco nos aspectos externos da organização.</p>
                        <p>Atualmente, verificamos na literatura especializada o acréscimo de um terceiro conceito, mais complexo que a eficiência e a eficácia. Trata-se da efetividade, que é válida para a administração pública.</p>
                        <p>A efetividade, na área pública, afere em que medida os resultados de uma ação trazem benefício à população. Ou seja, é mais abrangente que a eficácia, pois esta indica se o objetivo foi atingido, já a efetividade mostra se o objetivo trouxe melhorias para o público-alvo.</p>
                        <br>
                        <!-- Fique Atento -->

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <p class="FiqueAtentoTexto">Eficiência e eficácia podem ser objetivadas. Já a efetividade é carregada de subjetividade, porque depende da situação do atendimento. A efetividade de um atendimento depende menos de regras e de metas e mais da sensibilidade de quem atende. O objetivo final é a satisfação do cidadão, que é um ser único e estará vivenciando uma situação também única em seu atendimento.</p>
                        </div>
                        <br>
                        <p>Para garantir a efetividade de todas as nossas ações no trabalho, devemos aplicar a seguinte fórmula:</p>
                        <br>

                        <center><div class="alert alert-success" role="alert">
                        Efetividade = Eficiência + Eficácia + Sensibilidade, bom senso e boa vontade
                        </div></center>

                        <br>
                        <p>Devido à reconhecida capacitação do quadro de pessoal do funcionalismo público, é reconhecido que o serviço público tem feito grandes progressos no que diz respeito à eficiência e eficácia, mas ainda não apresenta grandes avanços em relação à efetividade das ações.</p>
                        <br>
                        <!-- Fique Atento -->

                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <p class="FiqueAtentoTexto">Uma boa forma de acompanhar a qualidade, alcance e impacto do desempenho de uma instituição e de seus servidores é a criação de canais para o usuário registrar sua percepção em relação ao atendimento recebido. A criação de ouvidorias é um exemplo desses canais.</p>
                        </div>
                        <br>
                        <p>As pesquisas de satisfação do usuário constituem também uma ferramenta de gestão que ajuda muito a verificação da efetividade do serviço oferecido.</p>
                        <p>Como já estudado no módulo 01, a visão sistêmica é fundamental para entendermos os processos de uma instituição e para o atendimento. Nesse sentido, é interessante refletir sobre uma “relação sistêmica” entre eficiência, eficácia e efetividade no atendimento ao cidadão.</p>
                        <br>
                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura img-fluid wow fadeInLeft" ><strong>Figura 04:</strong> Conhecer a Necessidade do Usuário</p>
                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid"  src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    <p class="TituloFigura img-fluid " ><strong>Fonte:</strong> EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                        <br>
                        <!-- Curiosidade -->

                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <p class="CuriosidadeTexto">Mas será que existe alguma fórmula para o atendimento de excelência?</p>
                        </div>
                        <br>
                        <p>Alguns especialistas afirmam que para proporcionar um atendimento além das expectativas, um verdadeiro atendimento não é complicado, nem acontece num passe de mágica. Esse tipo de atendimento pode ser conseguido com a aplicação de uma fórmula, que sintetiza aspectos já apresentados aqui.</p>
                        <br>

                        <center><div class="alert alert-danger" role="alert">
                        Preparo + Interação + Acompanhamento = Atendimento além das expectativas
                        </div></center>

                        <br>
                        <div class="alert alert-info" role="alert">
                            <p>Preparo</p><hr>
                            <p>
                            O cidadão espera que você conheça o(s) produto(s) ou o(s) serviço(s) da sua instituição e que saiba tomar as providências necessárias.
                            </p>
                            <p>
                            Ele quer tratar com pessoa(s) que conheça(m) as políticas e procedimentos, que saiba(m) como operar equipamentos e sistemas e também onde e como obter maiores informações ou ajuda com relação a um problema. 
                            </p> 
                            <p>
                            Como pessoa de contato com o usuário, você quer ser visto como um profissional, preparado e capaz de enfrentar diversas situações para satisfazer ou exceder as necessidades dos cidadãos. Logo, o preparo é fundamental.
                            </p>
                        </div>
                        <br>
                        <div class="alert alert-warning" role="alert">
                            <p>Interação</p><hr>
                            <p>
                            É importante identificar o que o cidadão precisa e se certificar de que suas necessidades serão satisfeitas. O usuário deseja receber o produto ou o serviço de modo satisfatório, mas também quer ser tratado com respeito. Atitudes interativas, certamente, ajudam-no a satisfazer essas necessidades.</p>
                        </div>
                        <br>
                        <div class="alert alert-dark" role="alert">
                            <p>Acompanhamento</p><hr>
                            <p>Como todo serviço direto termina quando o cidadão vai embora, desliga o telefone ou despede-se em uma mensagem, ele espera que a promessa assumida se cumpra e que haja um acompanhamento para verificar se houve satisfação. </p>
                            <p>É necessário também dar um <em>feedback</em> à instituição. Como principal contato com o público, quem atende representa "os olhos e ouvidos" de sua organização. É importante fornecer informações sobre as pessoas que buscam a instituição e os seus serviços para outras pessoas e setores dentro da própria instituição.
                            </p>
                        </div>
                        <br>
                        <p>Essa fórmula unida a mais alguns princípios podem delinear a Política de Atendimento ao Cidadão, ilustrada na figura a seguir:</p>
                        <br>
                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura img-fluid wow fadeInLeft" ><strong>Figura 05:</strong> Política de Atendimento ao Cidadão</p>
                            </a>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid"  src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    <p class="TituloFigura img-fluid " ><strong>Fonte: </strong> Adaptado de Neves(2011)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End -->
                        <br>
                        <!-- Accordion Fase 01 - Begin  -->

                        <div class="accordion accordion-flush" id="AccordionFase01">

                            <!-- Sub Título -->

                            <p class="SubTitulo">Clique nos títulos abaixo para mais informações</p>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetree" aria-expanded="false" aria-controls="flush-collapsetree">
                                        <strong>Valorização do Servidor</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapsetree" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A valorização do servidor significa seu reconhecimento como o principal ativo da organização. Dessa forma, evolui-se de um sistema tradicionalmente operacional para uma gestão estratégica de pessoas. Com isso, objetiva proporcionar o desenvolvimento e o aprimoramento de competências individuais, incentivando novos talentos, promovendo a interação, o comprometimento e a valorização do servidor, com vistas a favorecer a qualidade de vida no trabalho e, consequentemente, o bom atendimento ao cidadão.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                        <strong>Participação Cidadã na Prestação de Serviços</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>De acordo com Neves (2011), é necessário ter a cultura de ouvir o cidadão nos órgãos públicos, de ampliar os canais de relacionamento com o usuário, de dar tratamento às sugestões e às reclamações, de aplicar pesquisas, tanto quantitativa como qualitativa, de modo a possibilitar: a tomada de decisões a partir do <em>feedback</em> dos cidadãos; e a construção de planos de melhoria fundamentados nas necessidades e expectativas do(s) usuário(s) dos serviço(s) público(s).
                                        </p>
                                    </div>
                                </div>
                            </div> 

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                        <strong> Avaliação dos Serviços </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> Essa ação permite: verificar em que medida os serviços prestados estão melhorando; e avaliar os resultados dos serviços internos e a satisfação dos cidadãos. Devem ser avaliados os prazos de entrega, a acessibilidade e a disponibilidade da informação, o trato e a competência de quem atende, bem como todas as dimensões consideradas relevantes para o cidadão. Isso permitirá monitorar os resultados obtidos e realizar os ajustes constantes para o aprimoramento da gestão organizacional.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                                        <strong> Informações e Transparência</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> Todo bom atendimento ao cidadão requer que a informação seja precisa, relevante, acessível e de fácil compreensão. A informação deve estar disponível por meio de todos os canais de relacionamento possíveis em função da natureza do serviço prestado. A adoção de um sistema eficiente de sugestões e reclamações facilita a produção de dados, informações e conhecimentos úteis, visando à melhoria da gestão e do atendimento ao cidadão.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                                        <strong> Resultados Estratégicos e Indicadores de Desempenho</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A organização deve incorporar a cultura da medição para melhorar o atendimento. Os resultados estratégicos da organização devem estar alinhados com os resultados relevantes para o cidadão. Nesse sentido, os resultados estratégicos devem ser traduzidos em objetivos e indicadores que possibilitem aferir o desempenho institucional. Os resultados dessa aferição devem ser divulgados aos servidores, com o intuito de propiciar o gerenciamento das ações implementadas e de criar na organização uma cultura de medição.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                                        <strong>Compromissos e Padrões de Serviços</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Esse critério objetiva:</p>
                                        <ul  class="none">
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Estabelecer padrões mais elevados de excelência na prestação dos serviços públicos;</li>

                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Disponibilizar informações sobre prazos reais dos serviços;</li>

                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Reduzir o tempo para a prestação dos serviços;</li>

                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Elaborar Carta de Serviços, possibilitando à organização firmar um contrato com o cidadão e estimular o controle social.</li>

                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>                                                   
                        </div><br>
                        <!-- FIM Accordion Fase 01 - Begin  -->
                        <p>É possível que a Política de Atendimento, dependendo da organização, do setor ou da esfera em que seja planejada, estabeleça outros compromissos com o cidadão, além dos aqui citados.</p>
                        <p>No tópico seguinte, trataremos de aspectos relevantes para o atendimento de reclamações ou de situações extraordinárias.</p>
                        


                        <p><strong>Parabéns, <?php echo $NomeUsuario ?>!  Você finalizou o tópico 01 do módulo 02 do curso Atendimento ao Público. Continue aprofundando seus conhecimentos nos próximos tópicos. Até lá!</strong></p>

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
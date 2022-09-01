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
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">



                        <p class="SubTitulo"> Características da Redação Oficial</p>
                        <hr>

                        <p>Em nosso dia a dia, cada situação comunicativa específica possui sua linguagem característica, apropriada, que é determinada em função dos interlocutores envolvidos e do grau de formalidade exigido.</p>
                        <p>Exemplo, temos uma linguagem possível para bate-papos informais na internet, popularmente chamada de internetês, outra para bilhetinhos familiares ou cartas que expressam nossos sentimentos, e assim por diante.</p>
                        <p>Em situações comunicativas informais, espontâneas, costumamos fazer uso de uma fala/escrita descontraída, natural: usamos a linguagem popular ou coloquial que não necessariamente segue as regras gramaticais da norma-padrão da linguagem, mas sua própria norma, caracterizada pelos conhecidos vícios de linguagem, por aspectos considerados como desvios da gramática tradicional (gramática normativa), pelo uso de expressões idiomáticas, expressões grupais (gírias) ou expressões/construções de baixo prestígio social.</p>

                        <!-- SaibaMais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> SAIBA MAIS</p>
                            <div class="SaibaMaisTexto">
                                <p style="font-weight: bold;">No caso da redação oficial, qual modalidade de linguagem escrita deve ser utilizada?</p>
                                <p>Na redação oficial, a linguagem a ser utilizada é a formal. Essa modalidade de linguagem faz parte de um padrão linguístico bastante valorizado na esfera profissional, além de ser a modalidade de linguagem recomendada pelo Manual de Redação da Presidência da República para atos e comunicações oficiais.</p>
                                <p style="font-weight: bold;">Mas, afinal, o que caracteriza a linguagem formal e por que ela é necessária?</p>
                                <p>O primeiro aspecto da linguagem formal está relacionado à <strong>norma padrão da língua</strong>. A variedade formal da linguagem é regida pela adequação às regras da gramática normativa, pois, desse modo, garante-se rigor quanto à forma. Em contrapartida, evitam-se textos obscuros, ambíguos, incompreensíveis por questões estruturais. Dentre as inadequações mais habituais nos textos, costumam ser frequentes aquelas relacionadas a questões de concordância e regência (nominal e verbal), de colocação de termos na oração (colocação pronominal), de acentuação, de pontuação e de uso equivocado de palavras com proximidades gráficas, mas com grandes distâncias semânticas (O significado das palavras, por oposição à sua forma) (a exemplo do caso de iminente/ eminente, ratificar/retificar, entre outras).</p>
                            </div>
                        </div>

                        <!-- FiqueAtento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> FIQUE ATENTO</p>
                            <div class="FiqueAtentoTexto">
                                <p>Em casos de dúvidas gramaticais, é importante consultar uma gramática normativa atualizada. Dentre outras obras, indicamos as seguintes: </p>
                                <ul class="none">
                                    <li><i class="fa fa-book CorVerdeClaroEstado"></i> <strong>Nova Gramática do Português Contemporâneo</strong>, de Celso Cunha e Luis F. Lindley Cintra – Editora Lexikon; </li><br>
                                    <li><i class="fa fa-book CorVerdeClaroEstado"></i> <strong>Aprender e Praticar Gramática</strong>, de Mauro Ferreira – Editora FDT. O autor expõe os conceitos gramaticais e os exemplifica amplamente. Cada capítulo é seguido de um esquema-síntese do conteúdo estudado e de uma bateria de exercícios; e </li><br>
                                    <li><i class="fa fa-book CorVerdeClaroEstado"></i> <strong>Moderna Gramática Portuguesa</strong>, de Evanildo Bechara. O autor apresenta uma sequência de estudo, didática e bem exemplificada, em que a análise prescritiva é abordada de maneira crítica.</li>
                                </ul>
                            </div>
                        </div>

                        <p>O segundo aspecto, relacionado ao emprego da linguagem formal, diz respeito à interdição quanto ao <strong>emprego de gírias e de expressões regionais, idiomáticas ou populares nos textos oficiais</strong>. Além de serem próprias de situações informais de comunicação, essas expressões podem dificultar ou mesmo inviabilizar a compreensão de uma mensagem. São marcas características da comunicação em ambientes familiares e formadoras de um discurso estritamente grupal ou pessoal, não oficial.</p>

                        <p class="wow fadeInRight">A redação oficial exige que o usuário contemple o critério da uniformidade de sentido. Imagine como seria de difícil utilização para um órgão público um Regulamento que possibilitasse, para cada leitor, uma interpretação distinta das normas nele contidas. Além disso, se esse Regulamento apresentasse em seu texto gírias ou expressões regionais, poderia impossibilitar a compreensão para pessoas que as desconhecessem, enquanto estaria dando privilégio de compreensão aos integrantes do grupo usuário de tais expressões. Isso não estaria de acordo com o critério da uniformidade, que prevê condições de igualdade de leitura e compreensão do texto, sem distinções grupais.</p>

                        <p>Vale lembrar outra questão vocabular que pode prejudicar a compreensão do texto, já que compromete a clareza das informações e restringe a compreensão a determinados grupos: o uso de arcaísmos. Assim como as gírias e as expressões regionais, palavras em desuso são obstáculos para o entendimento das ideias veiculadas. Como são palavras ou expressões obsoletas, seu significado pode ser tão enigmático quanto o de uma gíria desconhecida.</p>

                        <p class="wow fadeInLeft">A <strong>impessoalidade</strong> é o terceiro aspecto que caracteriza a linguagem formal. A preferência pela impessoalização de textos formais (técnicos, empresariais, oficiais) decorre, primeiramente, da necessidade de a ênfase dos documentos recair sobre as informações que eles contêm e não sobre quem os elabora; depois, de não se desejar marcar o autor dos textos como “dono” das ideias que estão sendo comunicadas por ele, o que poderia dar a elas pouco crédito, já que seriam avaliadas de uma posição pessoal e individualizada, e não institucional e coletiva, como deve ser.</p>

                        <p>Isso quer dizer que <strong>os documentos e as comunicações oficiais sempre são feitos em nome do Serviço Público</strong>, apesar de serem assinados, por exemplo, pela chefia de determinada Seção; além disso, o assunto tratado é, invariavelmente, de interesse público.</p>

                        <p>Proceder à impessoalização não é tarefa complexa. Há formas simples e usuais que servem para minimizar as marcas de pessoa do texto sem, contudo, apagar as marcas de autoria. Dentre as formas de se atingir a impessoalidade, estão:</p>

                        <ol type="a">
                            <li>A preferência às estruturas passivas, com apagamento de agente:</li><br>

                            <!-- Exemplo -->
                            <div class="ExemploCaixa">
                                <p class="ExemploTitulo"> Exemplo</p>
                                <div class="ExemploTexto">
                                    <ol type="a">
                                        <li>O Edital de Abertura n. 47/2007 foi publicado na última semana.</li>
                                        <li>Os gabaritos de provas foram divulgados.</li>
                                    </ol>
                                </div>
                            </div>


                            <li>O uso da primeira pessoa do plural com referenciação genérica:</li><br>

                            <!-- Exemplo -->
                            <div class="ExemploCaixa">
                                <p class="ExemploTitulo"> Exemplo</p>
                                <div class="ExemploTexto">
                                    <ol type="a">
                                        <li>Publicamos o Edital de Abertura n. 47/2007 na última semana.</li>
                                        <li>Divulgamos os gabaritos de provas.</li>
                                    </ol>
                                </div>
                            </div>


                            <li>O uso de construções com verbo + se:</li><br>

                            <!-- Exemplo -->
                            <div class="ExemploCaixa">
                                <p class="ExemploTitulo"> Exemplo</p>
                                <div class="ExemploTexto">
                                    <ol type="a">
                                        <li>Publicou-se o Edital de Abertura n. 47/2007 na última semana.</li>
                                        <li>Divulgaram-se os gabaritos de provas</li>
                                    </ol>
                                </div>
                            </div>
                        </ol>

                        <p>O quarto e último aspecto da linguagem formal está relacionado ao conjunto: <strong>clareza, concisão e objetividade</strong>. Imagine um Ofício da Presidência ou um Decreto escrito de forma obscura e ambígua, dificultando, assim, sua compreensão. É algo inaceitável, não é mesmo? A transparência do sentido e a <strong>inteligibilidade</strong> (Qualidade do que pode ser compreendido) dos documentos e correspondências oficiais são requisitos do próprio <strong>Estado de Direito</strong> (Estado regulado por uma constituição que prevê uma pluralidade de orgãos dotados de competência distintas explicitamente determinada), por isso é inadmissível que um texto legal ou oficial não seja entendido de forma clara pelos cidadãos. A publicidade do texto implica, portanto, necessariamente, a clareza e a concisão.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>O uso da linguagem formal no âmbito do serviço público é uma exigência que advém da finalidade dos textos oficiais: sempre estão relacionados, em última instância, ao governo dos cidadãos. Dito de outro modo, esses textos estabelecem regras para a conduta dos cidadãos ou regulam o funcionamento de órgãos públicos que atendem à sociedade, direta ou indiretamente. Logo, o caráter público dos textos oficiais e sua finalidade determinam o emprego do nível culto da linguagem.</p>
                            </div>
                        </div>


                        <p>É importante ressaltar, entretanto, que o uso dos elementos que conferem formalidade à escrita oficial não deve ser confundido com a utilização de uma suposta forma específica de linguagem denominada vulgarmente de burocratês. Deve-se evitar este tipo de linguagem, caracterizada pelo uso de expressões feitas, clichês do jargão burocrático e de formas arcaicas ou complexas de construção de frases.</p>


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

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->
                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>
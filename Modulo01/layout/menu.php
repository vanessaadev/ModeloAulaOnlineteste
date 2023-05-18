<!-- PLUGIN DO FADE IN -->

<style>
        .MenuTopico {
            color: #274F23 !important;
            font-weight: bold !important;
        }

        #menuNumero {
            color: #274F23;
            font-weight: bold !important;
            font-size: 1.2rem;
            padding-right: 0.3rem;
            margin-left: 0;
            margin-right: 0.4rem;
            font-family: "Raleway";
            right: 0.8rem;
            margin-top: -0.23rem;
        }

        .MenuTopico:hover {
            background: #ccc;
        }

        .ativo {
            background-color: #e1ebe3;
        }
    </style>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps">
                <div class="m-4 mx-auto text-center">
                    <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                </a> -->
                    <img class="img-fluid img-responsive"  src="imagens/Figura00.png" alt="Logo EGPCE">
                </div>
                <div class="sidebar-menu">

                    <ul class="menu ms-3">

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="index.php" class="MenuTopico sidebar-link <?php if($page=='index'){echo'ativo';}?>"><span id="menuNumero"> </span>Apresentação</a>
                            </div>
                        </li>

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico01.php" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo 'ativo';}?>">
                                    <div id="menuNumero">01 </div> Aspectos Essênciais para a Qualidade do Atendimento
                                </a>
                            </div>
                        </li>

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico02.php" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo 'ativo';}?>"><span id="menuNumero">02 </span>Visão Sistêmica do Atendimento </a>
                            </div>
                        </li>                        
                        <li class="sidebar-item has-sub">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="#" class="MenuTopico sidebar-link <?php if($page=='Topico03'){echo 'ativo';}?>"><span id="menuNumero">03 </span> Competências Essênciais do Servidor Público</a>

                                <ul class="submenu">
                                    <li class="sidebar-item">
                                        <a href="Topico03.php#Inicio" class="sidebar-sub <?php if($page=='Topico03'){echo 'ativo';}?>"><span id="menuNumero">
                                           03 <span> Competências Essênciais do Servidor Público</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico03.1.php#SubTopico3.1" class="sidebar-sub <?php if($page=='Topico03.1'){echo 'ativo';}?>"><span id="menuNumero">03.1
                                            <span> Competência: Conhecimento</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico03.2.php#SubTopico3.2" class="sidebar-sub <?php if($page=='Topico03.2'){echo 'ativo';}?>"><span id="menuNumero">03.2
                                            <span> Competência: Habilidade</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="Topico03.3.php#SubTopico3.3" class="sidebar-sub <?php if($page=='Topico03.3'){echo 'ativo';}?>"><span id="menuNumero">03.3
                                            <span> Competência: Atitude</span>
                                        </a>
                                    </li>
                                </ul>

                                
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>
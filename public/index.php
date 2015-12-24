<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Fazer nav-tab avançar e voltar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
<script>
    function avancar() {
        
        //Pega as classes das li do nav-tab
        var classeTab1 = $('#tab1').attr('class');
        var classeTab2 = $('#tab2').attr('class');
        
        //se a classe da li com o id tab1 for igual a active
        if(classeTab1 == "active")
        {  
            //Movimentação das tabs
            //retira a classe ativa de tab1
            document.getElementById("tab1").className = "";
            //coloca a classe de tab2 como ativa
            document.getElementById("tab2").className = "active";

            //Movimentação do conteudo
            document.getElementById("tab01").className = "tab-pane";
            document.getElementById("tab02").className = "tab-pane active";

        }

       
        if(classeTab2 == "active")
        {
           document.getElementById("tab2").className = "";
            document.getElementById("tab3").className = "active";

            document.getElementById("tab02").className = "tab-pane";
            document.getElementById("tab03").className = "tab-pane active";

        }

    }

  function voltar() {
        

        var classeTab2 = $('#tab2').attr('class');
        var classeTab3 = $('#tab3').attr('class');
        
             
        if(classeTab2 == "active")
        {
           document.getElementById("tab2").className = "";
            document.getElementById("tab1").className = "active";

            document.getElementById("tab02").className = "tab-pane";
            document.getElementById("tab01").className = "tab-pane active";

        }

        if(classeTab3 == "active")
        {  

            document.getElementById("tab3").className = "";
            document.getElementById("tab2").className = "active";

            document.getElementById("tab03").className = "tab-pane";
            document.getElementById("tab02").className = "tab-pane active";

        }

    }   
</script>


  <div class="container">
        
        <div class="span12">
    
                <div id="formulario" >
                    <ul id="tabsMenu" class="nav nav-tabs" >
                        <li id="tab1" class="active"><a href="#tab01" data-toggle="tab">Parte 1</a></li>
                        <li id="tab2"><a href="#tab02" data-toggle="tab">Parte 2</a></li>
                        <li id="tab3"><a href="#tab03" data-toggle="tab">Parte 3</a></li>
                    </ul>

                    <div class="tab-content">

                        <!-- Início do conteudo da tab01 -->
                        <div role="tabpanel" class="tab-pane active" id="tab01">
                          <p>Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1 - Conteúdo da parte 1</p>

                          <div style="float:right">
                            <button type="button" class="btn btn-default navbar-btn" id='avancar' 
                            onclick="avancar()">Avançar</button>

                        </div>
                        
                        </div>

                        <!-- Início do conteudo da tab02 -->
                        <div role="tabpanel" class="tab-pane" id="tab02">
                          <p>Conteúdo da parte  2 - Conteúdo da parte  2  - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2Conteúdo da parte  2 - Conteúdo da parte  2  - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2 - Conteúdo da parte  2</p>
                          
                          <div style="float:right">
                            <button type="button" class="btn btn-default navbar-btn" 
                            id='avancar' onclick="avancar()">Avançar</button>

                        </div>

                        <div style="float:left">
                            <button type="button" class="btn btn-default navbar-btn" n
                            id='voltar' onclick="voltar()">Voltar</button>
                        </div>
                        </div>

                        <!-- Início do conteudo da tab03 -->
                        <div role="tabpanel" class="tab-pane" id="tab03">
                           <p>Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3 - Conteúdo da parte 3</p>


                        <div style="float:left">
                            <button type="button" class="btn btn-default navbar-btn" n
                            id='voltar' onclick="voltar()">Voltar</button>
                        </div>
                           
                        </div>

                    </div> <!-- FIM div tab-content -->


                </div>  <!-- FIM div navegacao -->


            </div> <!-- FIM div span-->
        </div> <!-- FIM div container -->
  
 
            
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
 


  </body>
</html>
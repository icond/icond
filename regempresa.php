<?php 
	include 'include/header.php';
	session_start();
	//Informações que vêm do Index
	if(isset($_POST['submit'])){
		$nome =	$_POST['nomeempresa'];
		$primeiro =	$_POST['primeironomeempresa'];
		$ultimo =	$_POST['ultimonomeempresa'];
		$categoria =	$_POST['categoriaempresa'];
		$telemovel =	$_POST['telemovelempresa'];
		$email=	$_POST['emailempresa'];
		$password=	$_POST['passwordempresa'];


	}
?>
</head>
    <body>
    
      <nav class="navbar navbar-default navbar-fixed-top navbar-white">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a href="/index.php">
                      <img src="img/icond.ico" class="navbar-left logo-img img-away-left"><p class="navbar-text navbar-text-aux hidden-xs"><b>Gestão Condominios Online</b></p>
                  </a>
              </div>
              <!--codigo para fazer login etc -->
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right navbar-effect">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
          </div>
      </nav>
      <div class="login-page"><h4 style="text-align:center;">Finalize o seu registo de administrador</h4>
        <div class="form">
          <form class="login-form" action="" method="POST">
            <div class="iconTitle form-reg-title">Empresas</div>
                <label>Nome de empresa</label><br>
                <input type="text" name="nomeempresa"placeholder="eg. Construções inc" /><br>
                <label>Primeiro Nome</label><br>
                <input type="text" name="primeironomeempresa" placeholder="eg. Rui" /><br>
                <label>Ultimo Nome</label><br>
                <input type="text" name="ultimonomeempresa" placeholder="eg. Pereira" /><br>
                <label>Categoria</label><br>                        
                <select name="cars" name="categoriaempresa" placeholder="asdasd">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select><br>
                <label>Telemovél</label><br>
                <input type="text" name="telemovelempresa" placeholder="eg. 912345678" /><br>
                <label>E-Mail</label><br>
                <input type="text" name="emailempresa" placeholder="eg. rui.pereira@gmail.com" /><br>
                <label>Palavra Passe</label><br>
                <input type="password" name="passwordempresa" placeholder="Palavra Passe" ><br>

                <button class="btlogin">Registar</button>
            </div>
        </form>
      </div>
    </body>
</html> 
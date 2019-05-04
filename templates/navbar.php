<div class="user">Olá, bem vindo <span class="userName"><?php echo $_SESSION["usuario"] ?></span>!</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="<?php echo "http://".$_SERVER["HTTP_HOST"]."/caixaAtendimento/" ?>">CTO Controller</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      	<ul class="nav navbar-nav">
      		<li class="<?php isActive($path, 'home') ?>"><a href="?#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      		<li class="dropdown <?php isActive($path, 'cadastrarCto'); isActive($path, 'listarCto'); ?>">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-hdd"></span> CTOs
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="?r=cadastrarCto">Cadastrar</a></li>
		          <li><a href="?r=listarCto">Listar</a></li>
		        </ul>
		    </li>

        <li class="dropdown <?php isActive($path, 'cadastrarCliente'); isActive($path, 'listarCliente'); ?>">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> CLientes
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?r=cadastrarCliente">Cadastrar Cliente</a></li>
              <li><a href="?r=listarCliente">Listar Cliente</a></li>
            </ul>
        </li>

        <li class="dropdown <?php isActive($path, 'cadastrarSpliter'); isActive($path, 'listarSpliter'); ?>">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-hdd"></span> Spliters
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?r=cadastrarSpliter">Cadastrar Spliter</a></li>
              <li><a href="?r=listarSpliter">Listar Spliter</a></li>
            </ul>
        </li>
    	</ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo "http://".$_SERVER["HTTP_HOST"]."/caixaAtendimento/logout.php" ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
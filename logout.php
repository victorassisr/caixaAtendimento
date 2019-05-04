<?php
	session_start();

	if(isset($_SESSION["logado"])){
		session_destroy();
		$url = "http://".$_SERVER["HTTP_HOST"]."/caixaAtendimento/";
		header("location:".$url);
		exit;
	} else { ?>

<!DOCTYPE html>
<html>
<head>
	<title>Log out</title>
</head>
<body>
<h1>Você precisa estar logado primeiramente!</h1>
<p>Redirecionando para a pagina de login em 5 segundos.</p>
<script type="text/javascript">
	setTimeout(function(){
		location.href='<?php echo "http://".$_SERVER["HTTP_HOST"]."/caixaAtendimento/" ?>';
	}, 5000);
</script>
</body>
</html>

<?php } ?>
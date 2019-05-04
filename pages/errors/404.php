<div class="error404">
	<h3>Oops!</h3>
	<p>Não conseguimos encontrar o que você procurava. =/</p>
	<p>Você será redirecionado para a página inicial em 5 segundos.</p>
</div>
<script type="text/javascript">
	setTimeout(function(){
		location.href='<?php echo "http://".$_SERVER["HTTP_HOST"]."/caixaAtendimento/" ?>';
	}, 5000);
</script>
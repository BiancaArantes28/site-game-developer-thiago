<footer>
<div class="container">
	

	<div class="col-md-5 company-details">
		<div class="icon-top red-text">
		    <i class="fa fa-user"></i>
		</div>
		Thiago Gorgulho
	</div>
	
	
	<div class="col-md-2 company-details">
		<div class="icon-top green-text">
		<i class="fa fa-envelope-o"></i>
		</div>
		 <a href="mailto:burningbluefox@gmail.com" style="color:#A9A9A9;">burningbluefox@gmail.com</a>
	</div>
	
	

	<div class="col-lg-3 col-sm-3 copyright">
		<ul class="social">
			<li><a target="_blank" href="https://www.facebook.com/thiago.leao.1466"><i class="fa fa-facebook-official"></i></a></li>
			<li><a target="_blank" href="https://www.linkedin.com/in/thiagogorgulho/"><i class="fa fa-linkedin"></i></a></li>
			<li><a target="_blank" href="https://github.com/BurningBlueFox"><i class="fa fa-github"></i></a></li>
		</ul>
		 ©2017 Thiago Gorgulho
	</div>
</div> 
</footer> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92251038-1', 'auto');
  ga('send', 'pageview');
  $(".open-project").click(function(){
  	$("#fechar-lista").hide('slow');
  	var codigo = $(this).data("codigo");

  	$("#abrir-projeto"+codigo).show('slow');
  });

  $(".back-button").click(function(){
  	$("#fechar-lista").show('slow');
  	var codigo = $(this).data("codigo");
  	$("#abrir-projeto"+codigo).hide('slow');
  });

  $(".avancar-projeto1").click(function(){
  	var i = parseInt($("#img-projeto1").val());
  	var anterior = 0;
  	var total = $(".fotos-projeto1 img").length;
  	//$("#imgproject0"+i).hide("slow");
  	i = i + 1;
  	
  	
  	if(i <= total){
  		$("#img-projeto1").val(i);
  		anterior = i - 1;
  		
  		$("#imgproject0"+anterior).hide("slow");
  		$("#imgproject0"+i).show("slow");
  	}
  	

  });

  $(".voltar-projeto1").click(function(){
    var i = parseInt($("#img-projeto1").val());
    var proximo = 0;
    
      i = i - 1;
    
    if(i > 0){
      $("#img-projeto1").val(i);
      proximo = i + 1;
      $("#imgproject0"+proximo).hide("slow");
      $("#imgproject0"+i).show("slow");
    }
  });

  $(".avancar-projeto3").click(function(){
    var i = parseInt($("#img-projeto3").val());
    var anterior = 0;
    var total = $(".fotos-projeto3 img").length;
    //$("#imgproject0"+i).hide("slow");
    i = i + 1;
    
    
    if(i <= total){
      $("#img-projeto3").val(i);
      anterior = i - 1;
      
      $("#imgproject30"+anterior).hide("slow");
      $("#imgproject30"+i).show("slow");
    }
  });

  $(".voltar-projeto3").click(function(){
    var i = parseInt($("#img-projeto3").val());
    var proximo = 0;
    
      i = i - 1;
    
    if(i > 0){
      $("#img-projeto3").val(i);
      proximo = i + 1;
      $("#imgproject30"+proximo).hide("slow");
      $("#imgproject30"+i).show("slow");
    }
  });
</script>
<!-- SCRIPTS -->

<script src="arquivos/wow.js"></script>
<script src="arquivos/jquery_003.js"></script>
<script src="arquivos/jquery_002.js"></script>
<script src="arquivos/owl.js"></script>
<script src="arquivos/smoothscroll.js"></script>
<script src="arquivos/jquery.js"></script>
<script src="arquivos/bootstrap.js"></script>
<script src="arquivos/zerif.js"></script>
<?php
	setcookie('intro','1');
 ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bars.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/sidebar.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="wrapper">
	<div id="page-content-wrapper">
		<header>
			<div class="row">
				<div class="container">
					<div class="logo col-md-2 col-xs-2"><a href="universidade.php"><img src="img/logo.png" alt=""></a></div>
					<ul class="list-inline pull-right col-md-8">
						<li class="circLaranja taskTop" >1 <br>Task</li>
						<li class=""><a href="index.php"> Dashboard </a></li>
						<li class=""><a href="investimentos.php"> Investimentos </a></li>
						<li class=""><a href="universidade.php"> Universidade </a></li>
						<li class=""><a href="#"> Shop </a></li>
						<li class=""><img src="img/coin.png">R$ 3.700</li>
						<li style="none">Lvl  20 <span class="exp">11170 EXP</span>
						<div class="progress" style="height:5px;">
							  <div class="progress-bar" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:70%; background:#00A65A;">
							  </div>
						  </div>
						</li>
						<li class=""><a href="user.php"><div class="imgProf"></div></a></li>
					</ul>


					<button id="" type="button" class="menu-toggle navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="true">
			          <span class="sr-only">Toggle navigation</span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
		      		</button>
				</div>
			</div>
		</header>
		
		<section>
			<div class="row">
				<div class="container">
					<div id="missoes" class="cxBranca wid100">
						<h2 class="title">Missões</h2>
						<img src="http://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Money-Graph-icon.png" alt="">

						<div class="pull-right col-md-9 col-xs-8">
							<div><h3>Introdução na Arte de investir</h3></div>
							<div class="progresso">
								<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="70"
								  aria-valuemin="0" aria-valuemax="100" style="width:70%">
								    70%
								  </div>
							  </div>
							</div>
							<div class="btn btnMis btnCont">Continuar Missão</div>
							<div class="btn btnMis" style=>Encerrar Missão</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>

		<section>
			<div class="row">
				<div class="container">
					<div id="invest" class="cxBranca wid100">
						<h2 class="title">Investimentos</h2>
						<div class="item html">
						    <svg width="250" height="250" xmlns="http://www.w3.org/2000/svg">
						     <g>
						      <title>Layer 1</title>
						      <circle id="circle" class="circle_animation2" r="92.85699" cy="120" cx="120" stroke-width="50" stroke="#e83d79" fill="none"/>
						      <circle id="circle" class="circle_animation" r="92.85699" cy="120" cx="120" stroke-width="50" stroke="#6fdb6f" fill="none"/>
						     </g>
						    </svg>
						</div>
						<div class="pull-right col-md-9 col-xs-12" style="display:block">
							<table class="table">
					      <thead>
					        <tr>
					          <th>Tipo</th>
					          <th>%</th>
					          <th>Valor Aplicado</th>
					          <th>Valor Atual</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td scope="row">Tesouro Direto</td>
					          <td>70%</td>
					          <td>R$ 2.500</td>
					          <td>R$ 2.700</td>
					        </tr>
					        <tr>
					          <td scope="row">Fundos de Investimento</td>
					          <td>30%</td>
					          <td>R$ 2.500</td>
					          <td>R$ 2.700</td>
					        </tr>
					        <tr>
					          <td scope="row">Ações</td>
					          <td>--</td>
					          <td>--</td>
					          <td>--</td>
					        </tr>
					        <tr>
					          <td scope="row">BM&F</td>
					          <td>--</td>
					          <td>--</td>
					          <td>--</td>
					        </tr>
					        <tr>
					          <td scope="row">Renda Fixa</td>
					          <td>--</td>
					          <td>--</td>
					          <td>--</td>
					        </tr>
					        <tr>
					          <th scope="row">Total</th>
					          <td></td>
					          <td></td>
					          <td><strong>R$3.400</strong></td>
					        </tr>
					      </tbody>
					    </table>
				    </div>
	  			</div>
				</div>
			</div>
		</section>


		<section>
			<div class="row">
				<div class="container">
					<div id="areaConhec" class="cxBranca pull-left col-md-4 col-xs-10" style="">
						<h2 class="title">Área de conhecimento</h2>
						<div class="barConhec">
							<label><strong>Finanças</strong></label>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:70%; background:#00C0EF;">
							    70%
							  </div>
						  </div>
					  </div>
					  <div class="barConhec">
							<label><strong>Contabilidade</strong></label>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:70%; background:#DD4B39;">
							    70%
							  </div>
						  </div>
					  </div>
					  <div class="barConhec">
							<label><strong>Economia</strong></label>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:70%; background:#00A65A;">
							    70%
							  </div>
						  </div>
					  </div>
					  <div class="barConhec">
							<label><strong>Adminstração</strong></label>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:70%; background:#F39C12;">
							    70%
							  </div>
						  </div>
					  </div>
					</div>
					<div id="conquer" class="cxBranca pull-right col-md-8 ">
						<h2 class="title">Conquistas</h2>
						<ul >
							<li style="display:inline-block;">
								<div style="display table">
									<img src="img/medalha-verde.png" alt="">
									<span class="circLaranja circMed">20</span>
								</div>
							</li>
							<li style="display:inline-block;">
								<div style="display table">
									<img src="img/medalha-azul.png" alt="">
									<span class="circLaranja circMed">20</span>
								</div>
							</li>
							<li style="display:inline-block;">
								<div style="display table">
									<img src="img/medalha-vermelha.png" alt="">
									<span class="circLaranja circMed">20</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>


	


	<!--LIGHT BOX-->
	<div id="white_content" class="intro">
		<!--BOOTSTRAP CAROUSEL-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox" style="background:#009DC8;">
		    <div class="item active">
		      <img style=""src="img/intro1.png" alt="Bem vindo">
		    </div>
		    <div class="item">
		      <img src="img/intro2.png" alt="Bem vindo">
		    </div>
		    <div class="item">
		      <img src="img/intro3.png" alt="Bem vindo">
		    </div>
		    <div class="item">
		      <img src="img/intro4.png" alt="Bem vindo">
		    </div>
		    <div class="item">
		      <img src="img/intro5.png" alt="Bem vindo">
		    </div>
		    <div class="item">
		      <img src="img/intro6.png" alt="Bem vindo">
		    </div>
		    <div class="item">
		      <img src="img/intro7.png" alt="Bem vindo">
		    </div>
		    <div class="item">
		      <a href = "javascript:void(0)" onclick = "document.getElementById('white_content').style.display='none';document.getElementById('black_overlay').style.display='none'"><img src="img/intro8.png" alt="Começar"></a>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><</span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<a href = "javascript:void(0)" onclick = "document.getElementById('white_content').style.display='none';document.getElementById('black_overlay').style.display='none'"><button class="btn btn-default  pull-right">Fechar</button></a>.
		</div>

		<a href = "javascript:void(0)" onclick = "document.getElementById('white_content').style.display='none';document.getElementById('black_overlay').style.display='none'"><div id="black_overlay"></div></a>
		
		<div id="black_overlay_nav" class="menu-toggle" ></div>

 <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="user.php">
                	<img src="" alt="">
                  User
                </a>
            </li>
            <li style="none">Lvl  20 <span class="exp" style="color:#232323;">11170 &nbsp;EXP</span>
				<div class="progress" style="height:5px;margin-left: 20px;">
					  <div class="progress-bar" role="progressbar" aria-valuenow="70"
					  aria-valuemin="0" aria-valuemax="100" style="width:70%; background:#00A65A;">
					  </div>
				  </div>
			</li>
			<hr>
          <li>
              <a href="index.php">Dashboard <span class="laranja">1 task</span></a>
          </li>
          <li>
              <a href="investimentos.php">Investimentos<span class="gold">R$ 1.500</span></a>
          </li>
          <li>
              <a href="universidade.php">Universidade</a>
          </li>
          <li>
              <a href="#">Shop</a>
          </li>
          <li>
              <a href="#">Logout</a>
          </li>
        </ul>
    </div>
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
	if(isset($_COOKIE['intro'])){
	 if($_COOKIE >= 1){
	 	?>
	 	<script type="text/javascript">
	 		console.log('intro ja vista')
	 	</script>
	 <?php
	 }else{
	 	?>
	 	<script type="text/javascript">
	 		$(document).ready(function(){
	 			console.log('intro nao vista');
		 		$('#black_overlay').css("display","block");
		 		$('#white_content').css("display","block");
		 	});
	 	</script>
	 	<?php
	 }
	};
?>


 <script>

     $(".menu-toggle").click(function(e) {
     	$('#black_overlay_nav').toggleClass("over-toggle");	
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</html>
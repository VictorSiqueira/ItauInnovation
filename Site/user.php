<?php ?>
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


					<button type="button" class="menu-toggle navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="true">
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
					<div id="" class="cxBranca wid100" style="background:#FFA282;color:#fff;">
						<div class="col-md-3 col-xs-12 no-padding text-center">
							<div style="border-radius:50%; display:block; width:150px; height:150px; background:#fff; margin:0 auto;">
							</div>
							<h4 >Nome do User</h4>
							<p>Investidor desde <span class="investDate">01/09/2015</span></p>
						</div>
						<div class="col-md-2 col-xs-4 no-padding text-center">
							<p>
								<span class="userRank">1º</span>
								<br>
								no Ranking
							</p>
						</div>
						<div class="col-md-2 col-xs-4  no-padding text-center" style="margin-top:2%;">
							<p>
								<span class="userXP">11.170</span>
								<br>
								Pontos de <br>
								Experiência
							</p>
						</div>
						<div class="col-md-2 col-xs-4 no-padding text-center" style="margin-top:2%">
							<p>
								<span class="userMission">34</span>
								<br>
								Missões <br>
								Concluidas
							</p>
						</div>
						<div id="graphXP" class="col-md-3 pull-right no-padding" style="display:table;">
							<div class="item html "  >
								<p style="font-size:65px;color:#000;display:block;margin-top:23% 	; z-index:999999;">58%
									<br><p style="font-size:24px;color:#000;z-index:999999;margin-top:52%">Level 20</p></p>
						    <svg width="250" height="250" xmlns="http://www.w3.org/2000/svg" style="border-radius:50%;background:#fff; border:3px solid #FF4000;z-index:9999;">
						     <g>
						      <title>Layer 1</title>
						      <circle id="circle" class="circle_animation" r="92.85699" cy="120" cx="120" stroke-width="35" stroke="#0036D9" fill="none"/>
						     </g>
						    </svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>

	

		<section>
			<div class="row">
				<div class="container">
					<div id="areaConhec" class="cxBranca pull-left col-md-4 col-xs-10" >
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

		<section>
			<div class="row">
				<div class="container">
					<div id="TreeSkill" class="cxBranca pull-left col-md-12 col-xs-12" >
						<h2>Árvore de Skills</h2>
						<div class="tree col-md-4 col-xs-4">
							<div><div class="quadTree bgAzul font-branca"> i </div> Investidor Conservador</div>
							<img src="img/treeBlue.png" width="100%">
						</div>
						<div class="tree col-md-4  col-xs-4">
							<div><div class="quadTree bgVerde font-branca"> i </div> Investidor Moderado</div>
							<img src="img/treeGreen.png" width="100%">
						</div>
						<div class="tree col-md-4  col-xs-4">
							<div><div class="quadTree bgVerm font-branca"> i </div> Investidor Agressivo</div>
							<img src="img/treeRed.png" width="100%">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>


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
 <script>

     $(".menu-toggle").click(function(e) {
     	$('#black_overlay_nav').toggleClass("over-toggle");	
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</html>
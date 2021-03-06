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


					<button  type="button" class="menu-toggle navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="true">
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
					<h2 class="title">Investimentos</h2>
					<div id="invest" class="cxBranca wid100">
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
					<div id="" class="cxBranca wid100">
						<h2 class="title">Tesouro Direto</h2>
						<div class="pull-right col-md-12 col-xs-12" style="display:block">
							<table class="table">
					      <thead>
					        <tr>
					          <th>Titulo</th>
					          <th class="infoActTbl">Venc.</th>
					          <th>Rentabil.</th>
					          <th>Vl. Minimo</th>
					          <th class="infoActTbl">Vl. Inteiro</th>
					          <th></th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td scope="row">Tesouro Selic 2021 (LFT)</td>
					          <td class="infoActTbl">01/03/ 2021</td>
					          <td>SELIC</td>
					          <td>R$ 71,03</td>
					          <td class="infoActTbl">R$ 7.103,15</td>
					          <td><img class="btnComprarTbl" src="img/btn.png"></td>
					        </tr>
					        <tr>
					          <td scope="row">Tesouro Prefixado 2018 (LTN)</td>
					          <td class="infoActTbl">01/01/2018</td>
					          <td>15,02%</td>
					          <td>R$ 7,25</td>
					          <td class="infoActTbl">R$ 724,64</td>
					          <td><img class="btnComprarTbl" src="img/btn.png"></td>
					        </tr>
					        <tr>
					          <td scope="row">Tesouro Prefixado 2021 (LTN)</td>
					          <td class="infoActTbl">01/01/2021</td>
					          <td>15,05%</td>
					          <td>R$ 25,34</td>
					          <td class="infoActTbl">R$ 2.533,68</td>
					          <td><img class="btnComprarTbl" src="img/btn.png"></td>
					        </tr>
					        <tr>
							  <td scope="row">Tesouro IPCA+ com Juros Semestrais 2020 (NTNB)</td>
					          <td class="infoActTbl">15/08/2020</td>
					          <td>7,61% + Inflação</td>
					          <td>R$ 23,22</td>
					          <td class="infoActTbl">R$ 2.321,85</td>
					          <td><img class="btnComprarTbl" src="img/btn.png"></td>
					        </tr>
					        <tr>
					          <td scope="row">Tesouro IPCA+ com Juros Semestrais 2035 (NTNB)</td>
					          <td class="infoActTbl">15/05/2035</td>
					          <td>7,60% + Inflação</td>
					          <td>R$ 21,93</td>
					          <td class="infoActTbl">R$ 2.193,33</td>
					          <td><img class="btnComprarTbl" src="img/btn.png"></td>
					        </tr>
					        <tr>
					          <td scope="row">Tesouro IPCA+ com Juros Semestrais 2050 (NTNB)</td>
					          <td class="infoActTbl">15/08/2050</td>
					          <td>7,60% + Inflação</td>
					          <td>R$ 7,78</td>
					          <td class="infoActTbl">R$ 777,81</td>
					          <td><img class="btnComprarTbl" src="img/btn.png"></td>
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
					<div id="ActInvest" class="cxBranca wid100">
						<h2 class="title">Ações</h2>
						<div id="divMapa" class="pull-left col-md-6 col-xs-12" style="padding:0!important;">
							<img src="img/mapa.png" width="100%;">
						</div>
						<div class="pull-right col-md-5 col-xs-12" style="display:block; border: 1px solid #eaeaea; border-top:3px solid #3fc6f1; padding-bottom: 5px;">
							<h4>Suas Ações</h4>
							<table class="table" >
						      <thead>
						        <tr>
						          <th>Código</th>
						          <th>Nome</th>
						          <th>Status</th>
						          <th class="infoActTbl">Histórico</th>
						        </tr>
						      </thead>
						      <tbody>
						      	<tr>
						          <td scope="row">00001</td>
						          <td>IBN</td>
						          <td><div class="statusMinhaAp bgVerde">Em Alta</div></td>
						          <td class="infoActTbl"><img src="img/hist1.png" width="47px"></td>
						        </tr>
						        <tr>
						          <td scope="row">00002</td>
						          <td>HERXeys</td>
						          <td><div class="statusMinhaAp bgLaranj">Oscilando</div></td>
						          <td class="infoActTbl"><img src="img/hist2.png" width="47px"></td>
						        </tr>
						        <tr>
						          <td scope="row">00003</td>
						          <td>Épow</td>
						          <td><div class="statusMinhaAp bgVerm">Em Baixa</div></td>
						          <td class="infoActTbl"><img src="img/hist3.png" width="47px"></td>
						        </tr>
						        <tr>
						          <td scope="row">00004</td>
						          <td>McRonald</td>
						          <td><div class="statusMinhaAp bgAzul">Constante</div></td>
						          <td class="infoActTbl"><img src="img/hist4.png" width="47px"></td>
						        </tr>
						        <tr>
						          <td scope="row">00005</td>
						          <td>Googol</td>
						          <td><div class="statusMinhaAp bgLaranj">Oscilando</div></td>
						          <td class="infoActTbl"><img src="img/hist5.png" width="47px"></td>
						        </tr>
						        <tr>
						          <td scope="row">00006</td>
						          <td>Azus</td>
						          <td><div class="statusMinhaAp bgVerm">Em Baixa</div></td>
						          <td class="infoActTbl"><img src="img/hist6.png" width="47px"></td>
						        </tr>
						      </tbody>
						    </table>
						    <button class="btn pull-left bgAzul font-branca">Nova Ordem</button>
						    <button class="btn pull-right font-branca">Vender Ação </button>
				    	</div>
						<div class="col-md-12 col-xs-12" style="display:block; margin-top:5%;">
							<table class="table">
						      <thead>
						        <tr>
						          <th>Papel</th>
						          <th>Preço Compra</th>
						          <th class="infoActTbl">Preço Venda</th>
						          <th class="infoActTbl">Fech. Anterior</th>
						          <th>Oscilação (%)</th>
						          <th></th>
						        </tr>
						      </thead>
						      <tbody>
						        <tr>
						          <td scope="row">IBOV</td>
						          <td>--</td>
						          <td class="infoActTbl">--</td>
						          <td class="infoActTbl">46.497,72</td>
						          <td> - 1,83%</td>
						          <td><img class="btnComprarTbl" src="img/btn.png"></td>
						        </tr>
						        <tr>
						          <td scope="row">PETR4</td>
						          <td>R$ 8,51</td>
						          <td class="infoActTbl">R$ 8,59</td>
						          <td class="infoActTbl"> 8,76</td>
						          <td>- 2,85%</td>
						          <td><img class="btnComprarTbl" src="img/btn.png"></td>
						        </tr>
						        <tr>
						          <td scope="row">VALE5</td>
						          <td>R$ 14,64</td>
						          <td class="infoActTbl">R$ 14,73</td>
						          <td class="infoActTbl">R$ 15,20</td>
						          <td>- 3,22%</td>
						          <td><img class="btnComprarTbl" src="img/btn.png"></td>
						        </tr>
						        <tr>
								  <td scope="row">ITUB4</td>
						          <td>R$ 26,36</td>
						          <td class="infoActTbl">R$ 26,90</td>
						          <td class="infoActTbl">R$ 27,54</td>
						          <td>- 3,85%</td>
						          <td><img class="btnComprarTbl" src="img/btn.png"></td>
						        </tr>
						        <tr>
						          <td scope="row">BBDC4</td>
						          <td>R$ 22,22</td>
						          <td class="infoActTbl">R$ 22,75</td>
						          <td class="infoActTbl">R$ 23,35</td>
						          <td>- 4,33%</td>
						          <td><img class="btnComprarTbl" src="img/btn.png"></td>
						        </tr>
						      </tbody>
						    </table>
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
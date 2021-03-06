<!DOCTYPE html>
<?php session_start();?>
<!-------------
	Header
--------------->


<html>
<head>
<title>The Diatomic Molecular Spectroscopy Database</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/header_footer.css">
<link rel="stylesheet" type="text/css" href="css/main_home.css">
<!------google analysis----->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168368540-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168368540-1');
</script>

  
<!------Latex support--------->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<!---
<script type="text/javascript"
  src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
 

</script>
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
</script>
--->

</head>
<body>
<!--
<div class="headdiv">	
	<iframe sandbox="allow-popups allow-scripts allow-forms allow-same-origin"  src="head_collision.html" marginwidth="0" marginheight="0" frameborder="no" border="0" style="height:130px;width:100%;" scrolling="no"></iframe>
	<div class="headdiv_title">
		<p style="font-size: 30px; color: black; float:right; margin-right:10%; font-family: Helvetica,Arial,sans-serif;">The Diatomic Molecular Spectroscopic Database</p>
		
	</div>
</div>
-->
<div style="width:100%; height:130px; position:absolute; top:1px; right:1px; z-index:9;background-color:#eee;">
	<iframe sandbox="allow-popups allow-scripts allow-forms allow-same-origin"  src="head_collision.html" marginwidth="0" marginheight="0" frameborder="no" border="0" style="height:130px;width:100%;" scrolling="no"></iframe>
</div>
<div style="width:100%; height:20px; position:absolute; top:5px; left:1px; z-index:99;" >
	<div style="float:left; margin-left:5%;">
		<img src="imgs/logo_mpi.svg" height="100" width="100">
	</div>
</div>
<div style="width:100%; height:20px; position:absolute; top:5px; left:1px; z-index:99;" >
	<p style="font-size: 30px; color: black; float:right; margin-right:10%; font-family: Helvetica,Arial,sans-serif; ">The Diatomic Molecular Spectroscopy Database</p>
</div>
<ul>
	<li><a class="active" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;HOME <nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;|</nobr> </a></li>
	<div class="dropdown">
		<a href="#" class="dropbtn">ABOUT <nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;|</nobr> </a>
		<div class="dropdown-content">
			<div class="triangle"></div>
			<a href="project.php">Projects</a>
			<a href="publications.php">Publications</a>
			<a href="citing.php">Citing</a>
		</div>
	</div>
	<li><a class="active" href="api_introduction.php" >API<nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;&nbsp;|</nobr> </a></li>
	<li><a class="active" href="contribution_main.php" >CONTRIBUTE<nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;&nbsp;|</nobr> </a></li>
	<li><a class="active" href="team.php">TEAM <nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;|</nobr> </a></li>
	<li><a class="active" href="contact.php">CONTACT <nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;|</nobr> </a></li>
	<li><a class="active" href="login.php">LOGIN <nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;|</nobr> </a></li>
	<li><a class="active" href="login_exit.php">LOGOUT</a> <nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;|</nobr></li>
	
	<li><a class="active" href="https://www.fhi.mpg.de/207024/mp-department"> MP department</a> <nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;|</nobr></li>
	<li><a class="active" href="https://www.fhi.mpg.de/209391/AMO_theory">AMO theory</a></li>
    <li><a class="active" href="contribution_userpage.php">
      <?php 
      if($_SESSION["code"]>0)
      {
      ?>
      		<nobr style="color:#007367; font-weight: 1000">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</nobr>
      <?php
      		echo "Welcome ".$_SESSION["username"];
      }
      ?>
      </a>
   </li>
	<!---
	<div class="search-container-ul">
		<form action="search.php">
			<input type="text" placeholder="Search in website..." name="search">
				<button type="submit">GO</button>
		</form>
	</div>
	--->
</ul>

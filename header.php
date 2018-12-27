<nav class="navbar navbar-default neotericnavbar navbar-fixed-top" id="header">
	<div class="container">
		<div class="navbar-header">
					<a href="index.php"><img src="img/logo.jpg" id="logo"></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
						<span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>		
		</div>
		<div class="hidden">
		
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
      			<li class="<?php if(isset($pageno)) if($pageno==1)echo 'active' ?>" id="aboutustab">
      				<div class="tabimg"><a href="about.php"><img class="navimg" src="img/AboutB.png"/></div>
      				<div class="tabtext">about us</a></div>
  				</li>
				<li class="<?php if(isset($pageno)) if($pageno==2)echo 'active' ?>" id="gptwtab">
					<div class="tabimg"><a href="gptw.php"><img class="navimg" src="img/GPTWB.png"/></div>
					<div class="tabtext">Great place to work</a></div>
				</li>
				<li class="<?php if(isset($pageno)) if($pageno==3)echo 'active' ?>" id="partnertab">
					<div class="tabimg"><a href="partner.php"><img class="navimg" src="img/partnerB.png"/></div>
					<div class="tabtext">partner</a></div>
				</li>
				<li class="<?php if(isset($pageno)) if($pageno==4)echo 'active' ?>" id="practicetab">
					<div class="tabimg"><a href="practice.php"><img class="navimg" src="img/practiceB.png"/></div>
					<div class="tabtext">practice</a></div>
				</li>
				<li class="<?php if(isset($pageno)) if($pageno==5)echo 'active' ?>" id="careerstab">
					<div class="tabimg"><a href="careers.php"><img class="navimg" src="img/careerB.png"/></div>
					<div class="tabtext">careers</a></div>
				</li>
				<li class="<?php if(isset($pageno)) if($pageno==6)echo 'active' ?>" id="contactustab">
					<div class="tabimg"><a href="contactus.php"><img class="navimg" src="img/contactB.png"/></div>
					<div class="tabtext">contact us</a></div>
				</li>
			</ul>
			<div class="facebook">
				<a href="https://www.facebook.com/neoteric.infomatique.7/?fref=ts" target="_blank"><img src="img/facebookB.png" id="fblogo"></a>
                <a href="https://www.pinterest.com/neoteric_fun/" target="_blank"><img src="img/pinterest.png" id="pinlogo"></a>
                <a href="https://www.youtube.com/channel/UC5gPpnHRuCzl2rKfUEKVwoA" target="_blank"><img src="img/youtube.png"></a>
			</div>
		</div>
		
	</div>
	</nav>
	
	<script type="text/javascript" src="js/preloadimg.js"></script>
<?php
require_once '../init.php';
ahead(); 
?>
	<header class="container--wrap bg--concrete">
		<h1 class="m--1 g--4 g-s--12 docsHeader">Backstage</h1>
		<nav class="g--3 nav--horizontal">
	    <ul>
	      <li><a class="material-icons" href="http://www.google.com">home</a></li>
	      <li><a class="material-icons" href="http://www.google.com">today</a></li>
	      <li><a class="material-icons" href="http://www.google.com">add</a></li>
	      <li><a class="material-icons" href="http://www.google.com">perm_identity</a></li>
	      <li><a class="material-icons" href="http://www.google.com">more_vert</a></li>
	    </ul>
	  </nav>
	</header>
	<div class="g--10 m--1">
		<?php
		$texts[] = "Sell your event tickets in one place, conveniently.";
		$texts[] = "Secure payments through Mpesa/Airtel/Equitel/MVisa and more";
		$texts[] = "Detailed analysis of customers and sales.";
		$texts[] = "A new dawn in event ticketing!";
		$index = rand( 0, count( $texts )-1 );
		$text = $texts[$index]; ?>
		<h3 class="fade-in-from-top color--pink"><?php echo( $text ); ?>	</h3>
	</div>
	<div class="g--10 m--1 container container--wrap--s">
		<div class="g--4 g-s--12 fade-in-from-top card anim-delay--5">
			<center><i class="material-icons" style="font-size: 100px;">phone</i></center>
			<h5>Mobile Payments</h5>
			<p>Design philosophy and aesthetics inspired by <a href="http://www.google.co.uk/design/spec/material-design/introduction.html">Google's Material Design</a>.</p>
		</div>
		<div class="g--4 g-s--12 fade-in-from-top anim-delay--10 card nudge--left nudge--right no-nudge--s">
			<center><i class="material-icons" style="font-size: 100px;">dashboard</i></center>
			<h5>Sales Analytics</h5>
			<p>One file. 5.7kb minified and Gzipped.</p>
		</div>
		<div class="g--4 g-s--12 fade-in-from-top anim-delay--15 card">
			<center><i class="material-icons" style="font-size: 100px;">print</i></center>
			<h5>Email/Print to PDF</h5>
			<p>100% CSS only. Absolutely zero Javascript.</p>
		</div>
	</div>
	<div class="g--10 m--1 fade-in-from-left anim-delay--20">
		<center><a href="sell" class="btn--raised btn--blue">start selling</a></center>
	</div>
<?php afoot();
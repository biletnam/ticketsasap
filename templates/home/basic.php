<title><?php theTitle(); ?> - <?php showOption( 'name' ); ?></title>
  <header class="m--2 container--wrap bg--concrete">
    <h1 class="m--1 g--4 g-s--12 docsHeader">OIOIO</h1>
  </header>
  <main class="g--10 g-m--12 m--2 m-m--0 no-margin-vertical" role="main">
  <div class="g--10 m--1">
    <?php
    $texts[] = "Sell your event tickets in one place, conveniently.";
    $texts[] = "Secure payments through Mpesa/Airtel/Equitel/MVisa and more";
    $texts[] = "Detailed analysis of customers and sales.";
    $texts[] = "A new dawn in event ticketing!";
    $index = rand( 0, count( $texts )-1 );
    $text = $texts[$index]; ?>
    <h3 class="fade-in-from-top color--pink"><?php echo( $text ); ?>  </h3>
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
</main>

<a href="tel:+254204404993"><button class="btn--fab"><i class="material-icons">call</i></button></a>
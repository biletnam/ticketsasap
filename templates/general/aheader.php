<!DOCTYPE html>
<html lang="en">
<head>
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php echo ( styles ); ?>monokai_sublime.css">
  <link rel="stylesheet" href="<?php echo ( styles ); ?>tixy.css">
  <link rel="stylesheet" href="<?php echo ( styles ); ?>material-icons.css">

  <link rel="icon" href="img/favicon.png" type="image/png">

  <script type="text/javascript" src="<?php echo ( scripts ); ?>highlight.pack.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  <title>Tixy - Free, Open Source Ticketing System With Mobile Payments</title>
  <meta name="description" content="Tixy - Free, Open Source Ticketing System With Mobile Payments">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <input type="checkbox" id="nav--super-vertical-responsive">
  <label for="nav--super-vertical-responsive" class="material-icons">menu</label>
  <aside class="nav--super-vertical g--2 g-med--3 g-small--6 g-tiny--12 no-margin-vertical bg--concrete">
    <div class="g--12 logo-area no-margin-vertical">
      OIOIO
    </div>
    <nav class="g--12">
      <a href="summary"><i class="material-icons label">dashboard</i> Summary</a>
      <div class="nav-collapsible">
        <input type="checkbox" id="nav-collapsible-1">
        <label for="nav-collapsible-1"><span><i class="material-icons label">today</i> Events</span></label>
        <div class="nav-collapsible-links">
          <a href="events?calendar=today">Calendar</a>
          <a href="tickets">Tickets</a>
        </div>
      </div>
      <div class="nav-collapsible">
        <input type="checkbox" id="nav-collapsible-2">
        <label for="nav-collapsible-2"><span><i class="material-icons label">group</i> Users</span></label>
        <div class="nav-collapsible-links">
          <a href="users?type=organizer">Organizers</a>
          <a href="users?type=attendee">Attendees</a>
        </div>
      </div>
      <div class="nav-collapsible">
        <input type="checkbox" id="nav-collapsible-3">
        <label for="nav-collapsible-3"><span><i class="material-icons label">room</i> Locations</span></label>
        <div class="nav-collapsible-links">
          <a href="location?type=city">Cities</a>
          <a href="location?type=venue">Venues</a>
        </div>
      </div>
      <div class="nav-collapsible">
        <input type="checkbox" id="nav-collapsible-4">
        <label for="nav-collapsible-4"><span><i class="material-icons label">shopping_cart</i> Payments</span></label>
        <div class="nav-collapsible-links">
          <a href="payments?sales=mpesa">M-Pesa</a>
          <a href="payments?sales=equitel">Equitel</a>
          <a href="payments?sales=mvisa">MVisa</a>
          <a href="payments?sales=cash">Cash</a>
        </div>
      </div>
      <div class="nav-collapsible">
        <input type="checkbox" id="nav-collapsible-5">
        <label for="nav-collapsible-5"><span><i class="material-icons label">description</i> Blog</span></label>
        <div class="nav-collapsible-links">
          <a href="blog?type=post">Posts</a>
          <a href="blog?type=page">Pages</a>
          <a href="blog?type=comment">Comments</a>
          <a href="blog?type=review">Reviews</a>
        </div>
      </div>
      <a href="options"><i class="material-icons label">settings</i> Settings</a>
    </nav>
  </aside>
  <main class="g--10 g-m--12 m--2 m-m--0 no-margin-vertical" role="main">
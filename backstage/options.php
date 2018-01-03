<?php
require_once '../init.php';
ahead(); 
?>
	<header class="container--wrap bg--concrete">
		<h1 class="m--1 g--4 g-s--12 docsHeader">Tixy Options</h1>
	</header>
  <main class="g--10 g-m--12 m-m--0 no-margin-vertical" role="main">
	<form class="card g--11 m--1">
		<h6>App Name <input type="text" required placeholder="App Name"></h6>
		<h6>App Short Name <input type="text" required placeholder="App Short Name"></h6>
		<h6>App Theme Color <input type="text" required placeholder="App Theme Color"></h6>
		<h6>App Orientation <input type="text" required value="portrait"></h6>
		<h6>App Language <input type="text" required value="en"></h6>
		<h6 class="g--12">
			<p>App Description</p>
			<textarea id="desc"></textarea>
		</h6>
		<div class="g--12">
			<p>App Display</p>
			<select style="width: 25%;">
				<option>Browser</option>
				<option>Standalone</option>
				<option>Minimal</option>
			</select>
		</div>
		<div class="g--12">
			<p>User Registration</p>
			<span>Allow  <input type="checkbox"></span>
		</div>
		<div class="g--12">
			<h6>Enable Modules</h6>
			<p>MPesa <input type="radio"></p>
			<p>MPesa <input type="radio"></p>
			<p>MPesa <input type="radio"></p>
		</div>

		<button type="submit" class="btn--raised btn--green">Update</button>
	</form>
</main>
<?php afoot();
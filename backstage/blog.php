<?php
require_once '../init.php';
ahead(); 
?>
	<header class="container--wrap bg--concrete">
		<h1 class="m--1 g--8 g-s--12 docsHeader">Backstage Blog <?php echo ucwords( $_GET['type'] ); ?>s</h1>
	</header>
	<div class="g--10 m--1">
		<?php
		$texts['post'] = "Buzz buzz about upcoming events.";
		$texts['page'] = "App pages";
		$texts['comment'] = "Comments on our posts";
		$texts['review'] = "Reviews of our events"; ?>
		<h3 class="fade-in-from-top color--pink"><?php echo( $texts[$_GET['type']] ); ?>	</h3>
	</div>
	<table class="g--12 card">
	<thead class="table-header">
	<tr>
	<th>ID</th>
	<th>Event</th>
	<th>Organizer</th>
	<th>Location</th>
	<th>Date</th>
	<th>Sales</th>
	</tr>
	</thead>
	<tbody>
		<?php if( hasRecords() ): while( hasRecords() ): theRecord(); ?>
			<tr>
				<td><?php theId(); ?></td>
				<td><?php theTitle(); ?></td>
				<td><?php theAuthor(); ?></td>
				<td><?php theTitle(); ?></td>
				<td><?php theDate(); ?></td>
				<td><?php theTags(); ?></td>
			</tr>
		<?php endwhile; endif; ?>
	</tbody>
	</table>
<?php afoot();
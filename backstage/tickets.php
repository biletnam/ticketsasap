<?php
require_once '../init.php';
ahead(); 
?>
	<header class="container--wrap bg--concrete">
		<h1 class="m--1 g--4 g-s--12 docsHeader">Tickets</h1>
	</header>
	<table class="m--1 g--10 card">
	<thead class="table-header">
	<tr>
	<th>ID</th>
	<th>Event</th>
	<th>Organizer</th>
	<th>Location</th>
	<th>Date</th>
	<th>Sales</th>
	<th>Actions</th>
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
				<td>
					<div class="g--4">
					  <input type="checkbox" id="modal-1">
					  <label class="modal-trigger" for="modal-1">Details</label>
					  <div class="modal-content g--4">
					    <p>Lorem ipsum dolor.
					    Poster will go here</p>
						<a href=""><button class="btn--float"><i class="material-icons" style="text-align: center;">open_in_new</i></button></a>
					  </div>
					</div>
						<a href=""><button class="btn--fab"><i class="material-icons" style="text-align: center;">create</i></button></a>
				</td>
			</tr>
		<?php endwhile; endif; ?>
	</tbody>
	</table>
<?php afoot();
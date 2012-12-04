

<table class="table table-striped table-condensed table-bordered">
	<thead>
		<tr>
			<th>Bil</th>
			<th>Ukmper</th>
			<th>Nama</th>
			<th>Dari</th>
			<th>Hingga</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($senarai_mohon as $mohon): ?>
			<tr>
			<td> <a href="<?php echo base_url().$level ?>/detail/<?php echo $mohon->bil ?> " title="" class="btn"> <?php echo $mohon->bil ?></a></td>
			<td><?php echo $mohon->ukmper ?></td>
			<td><?php echo $mohon->nama ?></td>
			<td><?php echo $mohon->dari ?></td>
			<td><?php echo $mohon->hingga ?></td>
			<td><?php echo $mohon->status ?></td>
		</tr>
		<?php endforeach ?>
		
	</tbody>
</table>
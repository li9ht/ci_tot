<table class="table table-striped table-condensed table-bordered">
	<tbody>
		<tr>
			<td>Ukmper</td>
			<td><?php echo $mohon->ukmper ?> </td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $mohon->nama; ?> </td>
		</tr>
		<tr>
			<td>Dari</td>
			<td><?php echo $mohon->dari ?>  </td>
		</tr>
		<tr>
			<td>Hingga</td>
			<td> <?php echo $mohon->hingga ?>  </td>	
		</tr>
	</tbody>
</table>
<?php if ($level=="pengesah"||$level=="pelulus"): ?>
<form class="form-horizontal" method="POST" action="<?php echo base_url().$level; ?>/update_status/<?php echo $mohon->bil ?> ">
 <fieldset>
      <div class="form-actions">
      <input type="submit" name="submit" value="Lulus" class="btn btn-primary">	
      <button class="btn">Cancel</button>
    </div>
  </fieldset>
</form>

<?php endif ?>
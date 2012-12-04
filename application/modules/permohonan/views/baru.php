<form class="form-horizontal" method="POST" action="<?php echo base_url().$return_url ?>">
  <fieldset>
    <legend>Permohonan Baru</legend>

    <div class="control-group">
      <label class="control-label" for="ukmper">Ukmper</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="ukmper" name="ukmper">
      </div>
    </div>

	<div class="control-group">
	  <label class="control-label" for="nama">Nama</label>
	  <div class="controls">
	    <input type="text" class="input-xlarge" id="nama" name="nama">
	  </div>
	</div>

	<div class="control-group">
	  <label class="control-label" for="dari">Dari</label>
	  <div class="controls">
	    <input type="text" class="input-xlarge" id="dari" name="dari">
	    <p class="help-block">Tarikh Mula</p>
	  </div>
	</div>

	<div class="control-group">
	  <label class="control-label" for="hingga">Hingga</label>
	  <div class="controls">
	    <input type="text" class="input-xlarge" id="hingga" name="hingga">
	    <p class="help-block">Tarikh Tamat</p>
	  </div>
	</div>

    <div class="form-actions">
      <input type="submit" name="submit" value="Simpan" class="btn btn-primary">	
      <button class="btn">Cancel</button>
    </div>
  </fieldset>
</form>
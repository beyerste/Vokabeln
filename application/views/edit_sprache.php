
        <h1><?php echo $heading;?></h1>

        <?php echo validation_errors(); ?>

        <?php echo form_open('news/create'); ?>

        <label for="id">id</label>
    	<input type="input" class="hidden" name="id" value="<?php echo $sprache['id'] ?>"/><br />

        <label for="Sprache">Sprache</label>
    	<input type="input" name="Sprache" value="<?php echo $sprache['Sprache'] ?>"/><br />

    	</form>
        <ul>

                <li><?php echo $sprache['id'] . ' ' . $sprache['Sprache'] ?></li>


        </ul>



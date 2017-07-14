
        <h1><?php echo $heading;?></h1>
        
        <table class="table">

        <tr><td>Sprache</td><td></td></tr>

        <?php foreach ($sprachen as $sprache):?>
        	<tr><td><?php echo $sprache['Sprache']; ?></td><td><?php echo '<a href="' .site_url('sprache/edit/'.$sprache['id']) . '">' . $sprache['Sprache'] . '</a>'?></td></tr>
        <?php endforeach;?>

        </table>

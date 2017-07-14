
        <h1><?php echo $heading;?></h1>
        <table class="table">
        <tr><th>Titel</th><th>Muttersprache</th><th>zu erlenende Sprache</th></tr>
        <?php foreach ($buecher as $buch):?>
        	<tr><td><?php echo $buch['Buchname']; ?></td><td><?php echo $buch['von']; ?></td><td><?php echo $buch['nach']; ?></td></tr>
        <?php endforeach;?>

        </table>
        </ul>



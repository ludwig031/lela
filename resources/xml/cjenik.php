<?php
require_once "codes/class.database.php";
require_once "codes/connection.php";
?>
<h2>
    Cjenik
</h2>

<?php
	$sql=$db->fetch_all("SELECT * FROM kategorije ORDER BY id ASC");
	foreach($sql as $kategorije){
?>
		<div>
		<h3>
        <?php echo $kategorije['naziv']?>
    	</h3>
		<div id="grupa-<?php echo $kategorije['id']?>">
		<?php
        $sql=$db->fetch_all("SELECT * FROM cjenik WHERE kategorija_id='".$kategorije['id']."' AND is_active='1' ORDER BY id ASC");
        foreach($sql as $usluge){
        ?>
        <p><strong><?php echo $usluge['usluga']?></strong> (<?php echo $usluge['cijena']?> kn)</p>
        <?php
        }
    	?>
        </div>

<?php
	}
?>

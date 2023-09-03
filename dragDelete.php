<?php
	  require_once('config/database.php');

	if(isset($_POST['ID'])){
		foreach ($_POST['ID'] as $id):
			mysqli_query($conn,"delete from gamescore where ID='$id'");
		endforeach;

    ?>
    <script>
      window.alert('Deleted Successfuly');
      window.location.href='dragResult.php';
    </script>
    <?php
	}
	else{
		?>
		<script>
			window.alert('Please check Result to Delete');
            window.location.href='dragResult.php'
		</script>
		<?php
	}

?>

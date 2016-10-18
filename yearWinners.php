<?php
   include './view/header.php';
 $yearChoice = $_POST['yearChoice'];
  
?>
    <h1 id='header'>WINNERS BY YEAR</h1>
        
    <form class='form' id='yearWin' action="#" method="POST">
	    <select name="yearChoice" class='input' id="yearChoice">
	        <option selected disabled>Choose Year</option>
            <?php foreach (getyears() as $year) : $value = $year['ID'];?>
                <option value="<?php echo $year['ID'] ?>" 
                     <?php if ($yearChoice == $value) echo 'selected="selected" ';?> >
						<?php echo $year['Year']; ?>
				</option>
            <?php endforeach; ?>
		</select>
		<br/>
		<input id='submitButton' type="submit" value='submit'>
	</form>

    	<?php
    	    if(empty($yearChoice) == false)
    		{
    		    echo "<h2 class='winTitle'> Winners </h2>	<ul>";
    		    
    		    $winners = getYearWinners($yearChoice);

                    foreach ($winners as $winner)
                    {
                        echo '<li>' . $winner['LastName'] . ', ' . $winner['FirstName'] .  '</li>';
                    }
    		    
    		}
    	?>  
	</ul>
	
<?php
    include './view/footer.php';
?>
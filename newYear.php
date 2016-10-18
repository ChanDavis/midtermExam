<?php
   include './view/header.php';
   $yearToAdd = null;
   $cityToAdd= null;
   
?>
    <h1 id='header'>ADD A NEW YEAR</h1>
    
    <form class='form' id='newYear' action="#added" method="POST">
        
	    Enter year to add: <input type="text" id="yearToAdd" name="yearToAdd"/>
	    
	    <br/>
	    <br/>
	    
	    Enter city it took place: <input type="text" id="cityToAdd" name="cityToAdd"/>
        
        <br/>
		<input id='submitButton' type="submit" value='submit'>
	</form>
	
	<div id="added">
    	<?php
    	    $yearToAdd = $_POST['yearToAdd'];
    	    $cityToAdd= $_POST['cityToAdd'];
    	    if(empty(trim($yearToAdd)) == false && empty(trim($cityToAdd) == false))
    		{
    		    addyear($yearToAdd, $cityToAdd);
    		    echo "<p class='added'> Year, '".  $yearToAdd . "' added to country, '" . $cityToAdd. "'</p>";
    		}
    	?>
	</div>
	
<?php
    include './view/footer.php';
?>
<?php
   include './view/header.php';
    $countryToAdd = " ";
   
?>
    <h1 id='header'>ADD A NEW COUNTRY</h1>
        
    <form class='form' id='newCountry' action="#added" method="POST">
	    Enter Country Name: <input type="text" name="countryToAdd"><br>
		<input id='submitButton' type="submit" value='submit'>
	</form>
	<div id="added">
    	<?php
    	    $countryToAdd = $_POST['countryToAdd'];
    	    if(empty(trim($countryToAdd)) == false)
    		{
    		    addCountry($countryToAdd);
    		    echo "<p class='added'>Country, '".  $countryToAdd . "' added.</p>";
    		    $countryToAdd = null;
    		}
    		
    		
    	?>
	</div>
	
<?php
    include './view/footer.php';
?>
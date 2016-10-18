<?php
   include './view/header.php';

   $countryChoice = $_POST['countryChoice'];
?>
     <h1 id='header'>WINNERS BY COUNTRY</h1>

    <form class='form' id='countryWin' action="#" method="POST">
	    <select name="countryChoice" id="countryChoice">
	        <option selected disabled>Choose Country</option>
            <?php foreach (getcountries() as $country) : $value = $country['ID'];?>
                <option value="<?php echo $country['ID'];?>"
                    <?php if ($countryChoice == $value) echo 'selected="selected" ';?> >
						<?php echo $country['Country']; ?>
				</option>
            <?php endforeach; ?>
		</select>
	<input id='submitButton' type="submit" value='submit'>
	</form>
    	<?php
    	    if(empty($countryChoice) == false)
    		{
    		     echo "<h2 class='winTitle'> Winners </h2>	<ul>";
    		     
    		     $winners= getCountryWinners($countryChoice);
    		     if(!empty($winners))
    		    {
    			    foreach ($winners as $winner)
    			    {
    			        echo '<li>' . $winner['LastName'] . ', ' . $winner['FirstName'] .  '</li>';
    			    }
    		    }
    		}
    	?>
	</ul>
<?php
    include './view/footer.php';
?>
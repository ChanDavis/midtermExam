<?php
$dsn = 'mysql:host=localhost;dbname=Olympics';
$username = 'siteuser';
$password = 'mypass';

try 
{
	$db = new PDO($dsn, $username, $password);
} 
catch (PDOException $e) 
{
	$error_message = $e->getMessage();
	//include('./errors/database_error.php');
	exit();
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function getCountryName($country)
{
    global $db;
    $query = "SELECT * FROM Countries Where ID = '$country'";
    $ans = $db->query($query);
    return $ans['County'];
}



function getCountryWinnersF($id)
{
	global $db;
    $query = "SELECT * FROM Winners WHERE ID = '$id' ORDER BY LastName";
    $ans = $db->query($query);
    $ans= $ans->fetch();
    return $ans['LastName'] . ', ' . $ans['FirstName'];   
}

function getcountries()
{
    global $db;
    $query = "SELECT * FROM Countries ORDER BY Country";
    $ans = $db->query($query);
    return $ans;   
}

function getYearWinners($yearID)
{
	global $db;
    $query = "SELECT * FROM Winners WHERE YearID = $yearID";
    $ans = $db->query($query);
 
    if($ans->rowCount() === 0)
    {
       echo '<p> NO DATA</p>';
    } 
     return $ans; 
}

function getCountryWinners($country)
{
	global $db;
    $query = "SELECT * FROM Winners WHERE Country = '$country' ORDER BY LastName";
    $ans = $db->query($query);

    if($ans->rowCount() === 0)
    {
       echo '<p> NO DATA</p>';
    } 
     return $ans;
}

function getYears()
{
    global $db;
    $query = "SELECT * FROM Olympiads ORDER BY Year";
    $ans = $db->query($query);
    return $ans;   
}

function addYear($year, $city)
{
    global $db;
    $query = "INSERT INTO Olympiads (City, Year) VALUES ('$city', '$year')";
    $db->exec($query);
	
	
   // $x = $db->query($query);
    //$x = $x->fetch();
   // $category_id = x['categoryID'];
    return 2;
}

function addCountry($country)
{
    global $db;
    $query = "INSERT INTO Countries (Country) VALUES ('$country')";
    $db->exec($query);
	
	
   // $x = $db->query($query);
    //$x = $x->fetch();
   // $category_id = x['categoryID'];
    return 2;
}
?>
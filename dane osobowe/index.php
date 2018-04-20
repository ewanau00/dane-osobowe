<!DOCTYPE html> 
<html> 
 <head> 
   <meta charset="utf-8"> 
   <title>Dane Osobowe</title> 
   <link rel="Stylesheet" type="text/css" href="style.css" />
   <meta name="description" content="Baza danych">
   <meta name="keywords" content="baza danych">
   <meta name="author" content="Ewa">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>

 <body>
<div id="header">
    <h1>Dane Osobowe</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="index.php?id=nazwiska">Od A do Z</a></li>
      <li><a href="index.php?id=miasta">Miejscowość na literę A</a></li>
      <li><a href="index.php?id=grudzien">11 grudnia 2008</a></li>
      <li><a href="index.php?id=wiek">Mniej niż 18, ale więcej niż 10</a></li>
      <li><a href="index.php?id=wyszukaj">Wyszukaj</a></li>
    </ul>
        
  </div>
  
  <div id="content">
    <p>

    <?php
     require('config.inc.php');
     
     $conn = new mysqli($servername, $username, $password, $dbname);
     
     if ($conn->connect_error) 
     {
       die("Connection failed: " . $conn->connect_error);
     } 
     
     $id = isset($_GET['id'])?$_GET['id']:"";
     
     switch($id)
     {
       case "nazwiska": require('nazwiska.inc.html'); break;
       case "miasta": require('miasta.inc.html'); break;
       case "grudzien": require('grudzien.inc.html'); break;
       case "wiek": require('wiek.inc.html'); break;
       case "wyszukaj": require('wyszukaj.inc.html'); break;
        default: require('nazwiska.inc.html');
     }
     mysqli_close($conn);

     ?>
    </p>

</body>
</html>	
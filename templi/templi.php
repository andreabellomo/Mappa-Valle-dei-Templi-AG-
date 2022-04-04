
<html>
    <head> <title> Mappa Templi </title> </head>
    <link HREF="style.css" REL="stylesheet" TYPE="text/css">
    <body>
    
 
    <h1><center>Mappa Valle dei Templi </b></center></h1>  
     <table border = "1" width = "100%">
    <tr>
      
      <td > <img src =  "mappa.JPG" usemap = "#mappa"</td>
  
   <map name="mappa">
    <area shape="circle" coords="566,59,21"  href="templi.php?id_monumento=1"  alt="" title="">
    <area shape="circle" coords="194,266,20" href="templi.php?id_monumento=2"  alt="" title="">
    <area shape="circle" coords="227,214,20" href="templi.php?id_monumento=3"  alt="" title="">
    <area shape="circle" coords="293,185,20" href="templi.php?id_monumento=4"  alt="" title="">
    <area shape="circle" coords="277,271,20" href="templi.php?id_monumento=5"  alt="" title="">
    <area shape="circle" coords="299,315,20" href="templi.php?id_monumento=6"  alt="" title="">
    <area shape="circle" coords="374,280,20" href="templi.php?id_monumento=7"  alt="" title="">
    <area shape="circle" coords="433,207,20" href="templi.php?id_monumento=8"  alt="" title="">
    <area shape="circle" coords="478,287,20" href="templi.php?id_monumento=9"  alt="" title="">
    <area shape="circle" coords="33,425,20"  href="templi.php?id_monumento=10" alt="" title="">
    <area shape="circle" coords="386,373,20" href="templi.php?id_monumento=11" alt="" title="">
    <area shape="circle" coords="152,213,20" href="templi.php?id_monumento=12" alt="" title="">
    <area shape="circle" coords="491,228,20" href="templi.php?id_monumento=13" alt="" title="">
    <area shape="circle" coords="113,169,20" href="templi.php?id_monumento=14" alt="" title="">
  </map>
       <td width = "100%" id = "destra" >
  
  <?php   
    $servername = "localhost";
    $username = "root";
    $password =  "";
    $db = "ag_templi";
    $conn = mysqli_connect($servername,$username,$password,$db) or die ("IMPOSSIBILE CONNETTERSI AL DATABASE $DB ".mysqli_error($conn));
      if (isset($_GET["id_monumento"]))
     {
    $id_monumento = $_GET["id_monumento"];
     $sql = "select monumenti.* from monumenti where id_monumento = $id_monumento;";
    $ris = mysqli_query($conn,$sql) or die ("errore esecuzione query".mysqli_error($conn));
    $riga = mysqli_fetch_array($ris);
    
   
     $titolo =   $riga["titolo"];
    
     $html = $riga["html_pages"];
    $descrizione =  $riga["descrizione"]; 
    
     echo "<h2>";
    echo " $titolo" ;
      echo "</h2>";
    echo "<br>" ;
    
  
    echo "<h5 style='color:black'><left>$descrizione</h5></left>" ;
    
    echo "<br>" ;
    
    echo "<a href = '$html'> Vedi foto... </A>" ;
    
  }
      ?>
      
      </td>
      </tr>
      </body>
      </html>

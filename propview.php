    
    <?php
    
    //var_dump($_COOKIE['name']);
        
    	$header=implode("",file('header.htm'));		
    	$topnav_manu=implode("",file('menubar.htm'));
    	//$content=implode("",file('.htm'));	
    	$footer=implode("",file('footer.htm'));				
    	$source=$header.$topnav_manu;
    	
    	echo $source;
    	
    	
    	
    ?>			
    <?php 
    session_start();
    
    
       if (file_exists("connect.php")) {
    include("connect.php");
    }
    else {
    echo "Unable to Connect To the Database,Website not available ";
     return;
    } 
    
    
   if(($_GET['page'])=='')
   {
    echo "jay";
   }
   else
   {
    $page=1;
   }
    
    $page = (int) $_GET['page'];
    
    if ($page < 1) $page = 1;
    
    mysql_connect('localhost','root','');
    mysql_select_db('qwerty');
    
    //Print "<link rel=stylesheet href=css/bootstrap.css type=text/css media=screen>";
    //Print "<link rel=stylesheet href=css/style.css type=text/css media=screen>";
    //Print "<link rel=stylesheet href=css/grid.css type=text/css media=screen>";
    $resultsPerPage = 10;
    $startResults = ($page - 1) * $resultsPerPage;
    $numberOfRows = mysql_num_rows(mysql_query('SELECT * FROM homes'));
    $totalPages = ceil($numberOfRows / $resultsPerPage);
    
    $query = mysql_query("SELECT * FROM homes LIMIT $startResults, $resultsPerPage");
    
    
    if (isset($_GET['p'])) {
    $p=$_GET['p'];        
    echo $p;
    mysql_select_db("qwerty", $setup_link);
    $query=mysql_query
     ("SELECT * FROM homes ORDER BY $p")
     or die(mysql_error());
    
    
    }
    
    	
    else{
    
    
    mysql_select_db("qwerty", $setup_link);
    
    
     $one=mysql_query ("SELECT * FROM homes")or die(mysql_error());} 
     
     Print "<link rel=stylesheet href=css/bootstrap.css type=text/css media=screen>";
    // <?php
    //Print "<a class=btn btn-info href=Logout.php>Logout</a>";
    if (isset($_SESSION['name'])) {
    $uname=$_SESSION['name'];
    echo "Welcome,";
    Print "<a class=btn btn-info href=securedpage.php>";
    echo $uname;
    Print "</a>";
            
    }
    
    
    
     Print "<table class=tablejay>";
      
     Print "<tr > <br/>"; 
     Print "<th> <br/><form action=propview.php method=get ><input type=submit value=Name name=p class=btn btn-info></th>
      <th><br/><form action=propview.php method=get ><input type=submit value=Address name=p class=btn btn-info></th>
     <th><br/><form action=propview.php method=get ><input type=Submit value=Beds name=p class=btn btn-info></th>
     <th><br/><form action=propview.php method=get ><input type=submit value=feet name=p class=btn btn-info></th>
     <th><br/><form action=propview.php method=get ><input type=submit value=Prize name=p class=btn btn-info></th>
     <th><br/><form action=propview.php method=get ><input type=submit value=Que name=p class=btn btn-info></th>
     <th><br/><form action=propview.php method=get ><input type=submit value=City name=p class=btn btn-info></th>
     <th><br/><form action=propview.php method=get ><input type=submit value=State name=p class=btn btn-info></th>
     <th><br/><form action=propview.php method=get ><input type=submit value=email name=p class=btn btn-info></th>
     </tr>
     </form>";
     
     
     while($info = mysql_fetch_array( $query )) 
     { 
    
     Print "<tr class=success>";
     Print "<td >".$info['Name'] . "</td> "; 
     Print "<td>".$info['Address'] . " </td>"; 
     Print "<td>".$info['beds'] . "</td> "; 
     Print "<td>".$info['feet'] . " </td>";
     Print "<td >".$info['Prize'] . "</td> ";
     Print "<td >".$info['Que'] . "</td> ";
     Print "<td >".$info['City'] . "</td> ";
     Print "<td >".$info['State'] . "</td> ";
     Print "<td >".$info['email'] . "</td></tr> ";
      
    
     } 
     Print "</table>"; 
     
     Print "<div><br/>"; 
     
     
    
     echo '<a href="?page=1">First</a>&nbsp';
    
    if($page > 1)
    	echo '<a href="?page='.($page - 1).'">Back</a>&nbsp';
    
    for($i = 1; $i <= $totalPages; $i++)
    {
    	if($i == $page)
    		echo '<strong>'.$i.'</strong>&nbsp';
    	else
    		echo '<a href="?page='.$i.'">'.$i.'</a>&nbsp';
    }
    
    if ($page < $totalPages)
    	echo '<a href="?page='.($page + 1).'">Next</a>&nbsp;';
    
    echo '<a href="?page='.$totalPages.'">Last</a>';
    
    
     ?>
    
    
    
    <?php
    $source=$footer;
    echo $source;
    ?>
    

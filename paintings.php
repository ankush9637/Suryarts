<html len="en">
    <head>
     
   
    </head>
    <body>
        <header> <h1>
           under construction 
            </h1> 
            
   <?php
   include("dbconfig.php");
   $sql = "SELECT * FROM images";
      $result = mysqli_query($db,$sql);
      while($row = mysqli_fetch_array($result))
      {
         ?>
            <img src="<?php echo"./Images/".$row["path"];?>" height="300" width="440px"/>
            <?php
      }
     $res1 = mysqli_query($db,$sql);
      $count = mysqli_num_rows($res1);
    $a =$count/9;
    $a= ceil($a);
    
   ?>
            <form method="post">
                <?php 
                for($b=1;$b<=$a;$b++)
                {
                    ?>
                <input type="submit" value="<?php echo $b;?>" name="page">
              <?php  
              
                }
             
         ?>
    </body>
</html>
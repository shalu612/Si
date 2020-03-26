<html>
      <head>
	      <title>  SI Calculator  </title>  
		  <style>
		        .cal
				{
				  width:400;
				  height:400;
				  position:relative;
				  top:200;
				  left:300;
				  background-color:lightblue;
				}
				h1
				{
					text-align:center;
				  font-size:30px;
				  position:relative;
				  top:30;
				  left:10;
				}
				.dec
				{
				   font-size:20px;
				   position:relative;
				  top:50;
				  left:50;
				}
				.dec input 
				{
				  border-style:insert;
				  position:relative;
				  top:0;
				  left:50;
				}
		  </style>
	  </head>
      <body>
	       <div class="cal">
	       <h1>SI Calculator</h1>
		   <p>
		     <form method="post"  action="" class="dec">
		   Principle: <input type="text" name="p"  > <br><br>
		   Rate: <input type="text" name="r"> <br><br>
		   Time: <input type="text" name="t"> <br><br>
		   <input type="submit"  name="submit" value="CALCULATE"><br><br>
		     
		   <?php
		   
		  /* $server = "localhost";
		   $username = "root";
		   $passward = "";
		   $db = "calculator";
		   
		   $con = mysqli_connect('localhost','root','','calculator');
		   
		   if(!$con)
		   {
			   echo'DB is not connected';
		   }
		   
		     if(!mysqli_select_db($con,'calculator'))
		   {
			    echo'DB is not connected';
			   
		   }
		   
		    */   if(isset($_POST['submit']))
		      {
		         $p =$_POST['p'] ;
		         $r =$_POST['r'] ;
		         $t =$_POST['t'] ;
		   
		         $SI = ($p * $r * $t)/100;
		           echo "SI :" .$SI."<br>";
		   }
		  /* 
		   $sql = "INSERT INTO si (principle,rate,time,SI) VALUES ('$p','$r','$t','$SI')";
		   
		     if(!mysqli_query($con,$sql))
		     {
			    echo 'Not inserted';
		     }
		       else
		     {
			   echo 'All values Inserted';
		     }
		   */		   	
		   ?>
		   
		   </form>
		   </p>
	  </body>
</html>

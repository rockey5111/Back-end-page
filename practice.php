<?php include 'database.php' ; ?>
<?php
 //create select query
  $query= "SELECT * FROM practices";
  $practices = mysqli_query($con, $query);

?>
<!DOCTYPE html>
 <html>
       <head>
           <title>SHOUT IT</title>
           <link rel="stylesheet" href="css5/practice.css">
       </head>
   <body>
      <div id="container">
        <header>
           <h1>shout it! shoutbox</h1>
        </header>
        <div id="shouts">
          <ul>
            <?php while($row = mysqli_fetch_assoc($practices)) : ?>
              <li class="shout"><spam><?php echo $row['time']?> - </spam><b><?php echo $row['user']?></b>: <?php echo $row['message']?></li>
            <?php endwhile; ?>
          </ul>
        </div>
        <div id="input">
             <?php if(isset($_GET['error'])) : ?>
               <div class="error"><?php echo $_GET['error'] ; ?></div>
             <?php endif; ?>
           <form method="post" action="process.php">
             <input type="text" name="user" placeholder="Enter your name" />
             <input type="text" name="message" placeholder="Enter your message" />
             <br>
             <input class="shout-btn" type="submit" name="submit" value="shout it out" />
           </form>
        </div>
      </div>
   </body>
 </html>

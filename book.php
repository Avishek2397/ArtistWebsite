<?php




$cnn= mysqli_connect("localhost","root","","artist_website");

if(!$cnn){
    die('cnnnection failed :'.mysqli_connect_error());
}


$k=$_POST['lcn'];
$tn= $_POST['tname'];
$tem= $_POST['temail'];
$ta= $_POST['tadd'];
$tp= $_POST['tprsn'];
$tc= $_POST['tcntct'];




if(empty($_POST['tname']) || empty($_POST['lcn']) || empty($_POST['temail']) || empty($_POST['tadd']) || empty($_POST['tprsn']) || empty($_POST['tcntct']))
{
    echo '

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" cntent="IE=edge">
        <meta name="viewport" cntent="width=device-width, initial-scale=1.0">
        <title>Artist Webpage</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="style7.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="inner">
                <a href="/" class="logo"></a>
                <div class="Menu">
                 <a href="index.html" target="_blank">Home</a>
                    <a href="About.html" target="_blank">About</a> 
                    
                    <a href="Merch.html" target="_blank">Merchandise</a> 
                    <a href="Shows.html" target="_blank">Shows</a>
                    <a href="Contact.html" target="_blank">cntact</a> 
                </div>
    
    
    
    
            </nav>
    
            </div>
    
            <section id="home">
                <div class="inner">
                    <div class="content">
                        <div class="about-section">
                            
                        <form action="book.php" method="post" >
                            
                    
                            <div class="info1">
                                <br>
                                <br>
                                <br>
                                <br>
                                <h1>Book Tickets -></h1>
                                <div class="ticks" >
                           Name: <input type="text"  name="tname" placeholder="Full Name">
                            <br>
                           Address: <input type="textarea"  name="tadd" placeholder="Address">
                            <br>
                            Email<input type="email"  name="temail" placeholder="Email">
                            <br>
                            contact:<input type="text"  name="tcntct" maxlength="10" placeholder="cntact Number">
                            <br>
                           People:<input type="number" name="tprsn" id="" min="1" placeholder="Number of Person/s">
                          
                          Location: <input type="text" name="lcn" id="">
    
                       
    
                    </div>
                    <div class="errmsg">Please Enter all details correctly before clicking book tickets</div>
                            <button type="submit" name="bk" >Book Tickets</button>
                        </div>
            
                        </form>
                   
                    <br>
               
                 </div>
                </div> 
            </section> 
                   
        </body>
        </html> ';
        
   
    

}
else
{

    $qr = "INSERT INTO `ticket_booking` ( `name_tick`, `addr_tick`, `email_tick`, `contact_tick`, `person`, `location`) VALUES ('$tn', '$ta', '$tem', '$tc', '$tp', '$k');";

    if($cnn->query($qr) == true)
{
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Artist Webpage</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="style7.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="inner">
                <a href="/" class="logo"></a>
                <div class="Menu">
                    <a href="index.html" target="_blank">Home</a>
                    <a href="About.html" target="_blank">About</a> 
                  
                    <a href="Merch.html" target="_blank">Merch&&ise</a> 
                    <a href="Shows.html" target="_blank">Shows</a>
                    <a href="Contact.html" target="_blank">Contact</a> 
                </div>
    
    
    
    
            </nav>
    
            </div>
    
            <section id="home">
                <div class="inner">
                    <div class="content">
                        <h1>Congrats ! your Order was placed</h1>

                        <hr>

                </div> 
                
                   
        </body>
        </html>   ';
        $cnn->close();
}

    
   }





?>
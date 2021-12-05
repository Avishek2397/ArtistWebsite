<?php

$con= mysqli_connect("localhost","root","","artist_website");

if(!$con){
    die('connection failed :'.mysqli_connect_error());
}


$ame= $_POST['name'];
$mail= $_POST['email'];
$m= $_POST['messg'];




if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['messg']))
{

    echo '

    <!DOCTYPE html>
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
                    <a href="index.html " target="_blank">Home</a>
                    <a href="About.html" target="_blank">About</a> 
                    <a href="Music.html" target="_blank">Music</a> 
                    <a href="Merch.php" target="_blank">Merchandise</a> 
                    <a href="Shows.html" target="_blank">Shows</a>
                    <a href="Contact.html" target="_blank">Contact</a> 
                </div>
            </nav>
            </div>
            <section id="home">
                <div class="inner">
            <div class="about-section"><h1>Get In Touch</h1>
                <div    class="contact-form">
                    <form action="connect.php" method="post">
                        <input type="text" class="contactName" placeholder="name" name="name">
                        <input type="email"class="emailbox" placeholder="email" name="email">
                        <br>
                        <input type="textarea" class="msg" placeholder="Message" name="messg">
                        <br>
                        <div class="errmsg">Please Enter all the fields before sending message</div>
                        <br>
                        <button type="submit" id="#submit"> Send Message </button>
                       
                        
                    </form>
    
                   
    
                        
    
                </div>
                                
                               
                        
                    </div>
    
                    </div>
    
            </section>
    
        </body>
        </html>  ';
}

else
{

    $sql = "INSERT INTO `message` (`Name`, `Email`, `Text`) VALUES ('$ame', '$mail', '$m');";

if($con->query($sql) == true)
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
                        <h1>Message Sent</h1>

                        <hr>

                </div> 
                
                   
        </body>
        </html>   ';
        $con->close();
}
}



?>

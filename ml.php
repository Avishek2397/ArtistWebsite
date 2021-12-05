<?php

$cn= mysqli_connect("localhost","root","","artist_website");

if(!$cn){
    die('connection failed :'.mysqli_connect_error());
}

$nme= $_POST['nmel'];
$eml= $_POST['emel'];

$fn=true;

if(empty($_POST['nmel']) || empty($_POST['emel']))
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
                    <a href="#">Home</a>
                    <a href="About.html" target="_blank">About</a>  
                    <a href="Merch.html" target="_blank">Merchandise</a>
                    <a href="Shows.html" target="_blank">Shows</a> 
                    <a href="Contact.html" target="_blank">Contact</a> 
                </div>
            </nav>
            </div>
    
    
    
    </div>
    
    <section id="home">
        <div class="inner">
            <div class="content">
    
                <h1>Error, Enter all details before clicking Subscribe</h1>
                <div class="sm">
                    <i class="fab fa-facebook"><a href="">Facebook</a></i>
                    <i class="fab fa-youtube"><a href="">Youtube</a></i>
                    <i class="fab fa-instagram"><a href="">instagram</a></i>
                    <i class="fab fa-spotify"><a href="">Spotify</a></i>
             </div>
             <section class="mail-list">
                        <h3>Subscribe to Artists mailing list for latest updates on your email</h3>
                        <br>
                <form action="" method="post">
                    <div class="listform">
                        
                    <label>Name : </label><input type="text" name="nmel" id="">
                    <label>Email : </label><input type="email" name="emel" id="">
                   <br> 
                   <br>
                   <button type="submit" name="em">Subscribe</button>
                   <div class="errmsg">Please Enter All the fields correctly before clicking subscribe</div>
                </div>
                </form>
    
             </section>
        
    
    
    
    
        </div>
        </div>
    </section>
    </body>
    </html>';
   
}
else
{

  

    $s = "INSERT INTO `email_list` (`Name_mailist`, `email_mailist`) VALUES( '$nme', '$eml');";

    if($cn->query($s) == true)
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
                        <h1>Congrats ! you are added to Artists Mailing List</h1>

                        <hr>

                </div> 
                
                   
        </body>
        </html>   ';
        $cn->close();
    }

}




?>
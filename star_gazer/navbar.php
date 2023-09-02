<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2 class="logo">STARgazer</h2>
        <nav class="navigation">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT</a>

            <a href="login.php">LOGIN</a>
            <a href="register.php">REGISTER</a>

            
        </nav>





    </header>
    
</body>
</html>


<style>

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&family=Qwitcher+Grypen:wght@700&display=swap');


*{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}



header{
    position: fixed;
    /* top: 10px; */
    width: 100%;
    padding: 5px  100px;
    /* margin-top: 30px ; */

    align-items:center;
    display: flex;
    justify-content:space-between;
    background: black;
    border: 3px solid white;
    border-color:gainsboro;
    border-radius: 50px;
    /* box-shadow:0 0 20px ; */
    backdrop-filter: blur(5px);
    /* gap: 100px; */
    z-index: 99;
   





}

.logo{

    font-weight:200%;
    font-size: 40px;
    margin-left: 40px;
    margin-right: 40px;
    font-family:qwitcher Grypen;
    font-style: italic;
    color: rgb(255 255 255);
    color: cyan;
}

.navigation a{
  position: relative;
  font-size: larger;
  color: cyan;
  text-decoration: none;
  margin-left: 40px;
  font-family: cyrillic;
 
  cursor: pointer;
  


}
.navigation a::after{
    content: ' ';
    position: absolute;
    left: 0;
    /* top:-6px; */
    bottom: -6px;
    width: 100%;
    height: 4px;
    background:ivory;
    /* border-radius: 5px; */
    /* transform: scaley(0); */
    transform: scaleX(0);
    transition: transform .5s;
    transform-origin: left;

}
.navigation a:hover{
    color: white;
    /* background-color: cyan; */
    
}


.navigation a:hover::after{
    /* transform: scaley(1); */
    transform: scalex(1);


    transform-origin: right;
}



.btn{
    width: 150px;
    height: 40px;
    margin-left:40px ;
    
}



    
</style>
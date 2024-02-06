<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    padding:0%;
    margin:0%;
}
h1{
    text-align: center;
    padding: 40px;
    color:blueviolet;
    background-color: purple;
    text-shadow: 2px 1px black;
    /* animation-name: akshay; */
    /* animation-duration:5s; */

}
/* @keyframes akshay {
    from {
margin-left: 300px;
width: 400px;
    }
    to{
  
    }
} */

body{
    background-color: rgb(211, 214, 216);
}

.main{
    margin-left:450px;
    margin-top:100px;
    background-color: white;
    height: 200px;
    width: 350px;
    border-radius: 5px;
    box-shadow: 2px 2px 10px 2px rgb(15, 15, 15);
}
.text{
    width: 250px;
    padding:10px;
    margin-left:45px;
    margin-top:10px;
    border-radius: 5px;
    background-color:white;
}
.selection{
 margin-left:120px; 
    margin-top:10px;
    /* width:5px; */

}
.btn{
    margin-left:100px; 
    margin-top:10px; 
    border-radius: 5px;
    width: 160px;
height: 30px;
 color:rgb(250, 249, 250);
background-color: blueviolet;
border-color: blueviolet; 

}
h4{
    margin-left:10px;
}

    </style>
</head>
<body>
    <header>
<h1>TEMPRETURE CONVERT</h1>
<div class="main">
   
        <form method ="POST">
            <input type="text" name="text1" class="text" placeholder="ENTER NUMBER" required>
            <div class="selection">
                <label>C</label>
                <input type="radio" name="btn1"class="radio1" value="CELCEOUS" required >
                <label>F</label>
                <input type="radio" name="btn1" class="radio1" value="FARNEHITE" required>
                </div>
                <div class="submit">
                <button type="submit" name="btn2" value="submit" class="btn">CONVERT</button>
                </div>
                <h4>
                <?php
              if(isset($_POST['btn2'])){
                $text=$_POST['text1'];
                $radio=$_POST['btn1'];
                $radio=$_POST['btn1'];
            
                switch($radio){
                    case "FARNEHITE": $F = $text * 9/5 + 32;
                  
                    echo "</br>   CONVERT CELCEIUS TO FAHRENHEIT : $F";
                    break;
                    case  "CELCEOUS":  $C = (($text-32)*5)/9;
                    echo "</br>   CONVERT FARNEHITE TO CELCEOUS : $C";
                    break;
                  default: echo "This Number  Is Not Exist....";
                  }
              }
?>
</h4>
        </form>
        
</div>

    </header>
</body>
</html>
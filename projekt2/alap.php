<?php
if(isset($_GET["redirect"]) && isset($_GET["delay"]))
{
    header("Refresh: ".$_GET["delay"]."; url=https://".$_GET["redirect"]);
}
?>

<!DOCTYPE html>
<html>
    <style>

        body{
            background-color: black;
            font-family: Arial;
            font-size: 20px;
            margin: 0;
        }

        #everyting{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #info-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 20%;
            width: 100%;
            background-color: goldenrod;
            color: black;
            font-family: Arial;
            font-size: 20px;
        }

        #response-contaienr{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 20%;
            width: 100%;
            background-color: <?php if(isset($_GET["color"])){echo $_GET["color"];} else {echo "black";}  ?>;
            color:  goldenrod;
            font-family: Arial;
            font-size: 20px;
        }

        #login-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            background-color: black;
            color: black;
            font-family: Arial;
            font-size: 20px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #000000;
            border-radius: 4px;
        }

        input[type=submit] {
            width: 100%;
            background-color: goldenrod;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: 2px solid black;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #ffffff;
            color: #000000;
        }

        form{
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

    </style>
<head>
    <title>Login</title>
</head>
<body >
    <div id= "everyting">
        <div id="info-container" >
                <p>Nagy Ákos  NK:I155A6</p>
        </div>
        <div id= "response-contaienr">
            <?php
                if(isset($_GET["response"]))
                {
                    echo $_GET["response"];
                }
            ?>
        </div>
        <div id="login-container" >
            <form action="login.php" method="post">
                <input type="text" name="user" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
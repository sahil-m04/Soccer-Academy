<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    body{
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.7;
        background: url('rbg.jpg');
        background-position: absolute;
        background-size: cover;
    }
    .container {
        display: inline;
        align-items: center;
        background: white;
        border: 2px solid black;
        margin: 111px 450px;
        padding left: 75px;
        width: 33%;
    }

    .form-group input,
    .form-group textarea {
        text-align: center;
        display: block;
        width: 400px;
        border: 2px solid black;
        margin: 15px auto;
        font-size: 15px;
        border-radius: 4px;
    }

    .container h1 {
        text-align: center;
        font-size: 3rem;
    }
    .btn{
        display: block;
        width:74%
        transition-duration: 0.3s;
        padding: 6px 20px;
        border: 2px solid white;
        background-color: blue;
        color: white;
        margin: 20px auto;
        font-size: 1.5rem;
        cursor:pointer;
    }
    .btn:hover{
    background-color: green; 
    }
    header{       
        font-family: 'Anton',sans-serif;
                font-size: 1.25em;
                text-align: center;
                color: white;
                background: url('bg5.jpg');
                border-top: 10px solid #aaa;
                padding-bottom: 10px;
                width: 100%;
                border-bottom: 5px solid #005;
            }
    header h1{
                font-size: 3em;
            }
            header h4{
                font-size: .75em
                ;
                margin-top: 3px;
            }
            .grey{
                color: black;
            }
    footer{
        text-align: center;
                border-top: 1px solid #aaa;
                bottom: 0px;
                position: fixed;
                width: 100%;
                height: 20px;
                background-color: #efefef;
                font-size: .75em;
                margin-top: 10px;
    }
    footer p{
                margin-top: 3px;
    }
</style>
<body>
<header>
        <div>
        <h1><span
                    class="grey">SOCCER</span>club</h1>
                    <h2>Football Club/Academy</h2>
                    <h4>Dehradun,Uttarakhand</h4>
            </header>
<div class="container">
        <h1>Registration Form</h1>
        <form action="registeration.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="number" name="age" placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="gender" placeholder="Enter your Gender">
            </div>
            <div class="form-group">
                <input type="text" name="position" placeholder="Enter your position">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your Email Id">
            </div>
            <div class="form-group">
                <input type="number" name="mobile" placeholder="Enter your Phone Number">
            </div>
            <a href="cpresp.php"><button type="submit" class="btn">SUBMIT</button></a>
        </form>
    </div>
    <footer>
        <div>
            <p>Copyright &copy; www.soccerclub.com. All rights reserved!<p>
        </div>
    </footer>    
</body>
</html>
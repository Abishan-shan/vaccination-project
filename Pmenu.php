<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOH table</title>

    <style>
        
        form
        {
            border: 1px solid black;
            width:700px;
            height:400px;
            
        }

       

        h4
        {
            display:inline;    
            
        }

        #list
        {
            background-color: #277BC0;
            height:40px;
        }

        #moh
        {
            margin-left:100px;
        }

        #logout
        {
            margin-left:40px;
        }
        
        #person{
            display:none;
        }

        #announcement
        {
            display:none;
        }

    </style>
</head>
<body>
    

<div id="smartvacc">
    <form method="post" action=" ">
    <div id="list">
        <h4>
        <a href="#" onclick="display()">Person name</a>
        </h4>
        <h4 id="moh"><a href="Pmenu.php">smart vaccination</h4>
        <h4 id="moh"><a href="#" onclick="display1()">announcement</h4>
        <h4 id="logout"> <a href="logout.php">Logout</a></h4>
    </div>
    <br><br>

    Passport No: <input type="text" name="passno" value=" ">
    <br><br>

    FULL Name: <input type="text" name="fullname" value=" ">
    <br><br>
    Age: <input type="number" name="age" value=" "  >
    <br><br>
    Email: <input type="email" name="email" value=" "  >
    <br><br>
    Document:<input type="file" name="doc" value=" " >
    <br><br>
    <input type="submit" name="upload" value="upload">
    <input type="reset" name="reset" value="clear">  
    </form>
</div>



<div id="person">


<form action="">
<div id="list">
        <h4>
        <a href="#" onclick="display()">Person name</a>
        </h4>
        <h4 id="moh"><a href="Pmenu.php">smart vaccination</h4>
        <h4 id="moh"><a href="#" onclick="display1()">announcement</h4>
        <h4 id="logout"> <a href="logout.php">Logout</a></h4>
    </div>
    <br><br>
    

    
    <h1>person details</h1>

    </form>
</div>


<div id="announcement">
    <form>
    <div id="list">
            <h4>
            <a href="#" onclick="display()">Person name</a>
            </h4>
            <h4 id="moh"><a href="Pmenu.php">smart vaccination</h4>
            <h4 id="moh"><a href="#" onclick="display1()">announcement</h4>
            <h4 id="logout"> <a href="logout.php">Logout</a></h4>
        </div>
        <br><br>

    

    <h1>announcement</h1>

        </form>
</div>

<script>

            var d1=document.getElementById("smartvacc");
            var d2=document.getElementById("person");
            var d3=document.getElementById("announcement");
        function display()
        {
            d1.style.display="none";
            d3.style.display="none";
            d2.style.display="block";

        }


        function display1()
        {
            d1.style.display="none";
            d3.style.display="block";
            d2.style.display="none";

        }

</script>


</body>
</html>
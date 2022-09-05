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
            width:300px;
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


    </style>
</head>
<body>
    

<form method="post" action=" ">

    <div id="list">
      
        <h4>Admin</h4>
        <h4 id="moh"><a href="MOH.php">MOH</h4>
        <h4 id="logout">Logout</h4>
    </div>
    <br><br>
MOH id: <input type="text" name="id" value=" ">
  <br><br>
  Name of the MOH: 
  <select name="option" id="">
    <option> </option>
    <OPTION>Jaffna</OPTION>
    <option>Nallur</option>
  </select>
  <br><br>
  First Name: <input type="text" name="fname" value=" ">
  <br><br>
  Last Name: <input type="text" name="lname" value=" "  >
  <br><br>
  Address: <input type="text" name="address" value=" "  >
  <br><br>
  Mobile No:<input type="text" name="mobile" value=" "  minlength="10" maxlength="10" >
<br><br>
  Password:<input type="password" name="password" value=" "  >
  <br><br>
  <input type="submit" name="submit" value="Add">
  <input type="reset" name="reset" value="clear">  
</form>
</body>
</html>
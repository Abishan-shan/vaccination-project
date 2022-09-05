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
            width:400px;
            height:600px;
            
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
        <h4>people registration for online vaccination pool</h4>
    </div>
    <br><br>
  First Name: <input type="text" name="fname" value=" ">
  <br><br>
  Last Name: <input type="text" name="lname" value=" "  >
  <br><br>
  Address: <input type="text" name="address" value=" "  >
  <br><br>
  Mobile No:<input type="text" name="mobile" value=" "  minlength="10" maxlength="10" >
<br><br>
Gender:
<select name="gender">
    <option> </option>
    <OPTION>male</OPTION>
    <option>female</option>
  </select>
  <br><br>
NIC:<input type="text" name="nic">
<br><br> 
Date-of-birth: <input type="text" name="date" value=" " >
<br><br>

District:
<select name="district">
    <option> </option>
    <OPTION>jaffna</OPTION>
    <option>nuwreliya</option>
    <option>kandy</option>
  </select>
<br><br>

MOH:
<select name="MOH">
    <option> </option>
    <OPTION>nallur</OPTION>
    <option>jaffna</option>
    <option>kandy</option>
  </select>
<br><br>
User Name: <input type="text" name="uname" value=" ">
  <br><br>

Password:<input type="password" name="password" value=" " >
  <br><br>
Re password: <input type="text" name="repaswor" value=" ">
  <br><br>
  <input type="submit" name="update" value="update">
  <input type="reset" name="reset" value="clear">  
</form>
</body>
</html>
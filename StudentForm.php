<html>
   <head>
    <title>Isset</title>
    <style>
      body{
      padding-left: 35%;
      }
      form{
         
         background-color: aquamarine; 
         text-align: center;
         width: 40%;
         box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.5);
         
      }
      </style>
   </head>

<body>

<form  action="isset2.php" method="GET">
<h1><u>Student Form</u></h1>
<label>Id</label><br>
<input type="number" Name="StId" ><br><br>
<label>Name</label><br>
<input type="text" Name="StName" ><br><br>
<label>Parentage</label><br>
<input type="text" Name="StParentage"><br><br>
<label>Address</label><br>
<input type="text" Name="Stadd" ><br><br>
<label>Email</label><br>
<input type="text" Name="Stemail" ><br><br>
<label>Contact</label><br>
<input type="tel" Name="Sttel" ><br><br><br>
<label>Qualification</label><br><br>
<select Name="stQual">
<option>MCA</option>
<option>M.Sc</option>
<option>M.A</option>
<option>B.Sc</option>
<option>BCA</option>
</select><br><br>

<label>Gender:</label><br>
<input type="radio" name="stgender" value="Male">Male</input>
<input type="radio" name="stgender" value="Female">Female</input>
<input type="radio" name="stgender" value="Other">Other</input><br><br>

<label>Hobby</label>
<input type="checkbox" name="Hobby[]" value="Cricket">Cricket</input>
<input type="checkbox" name="Hobby[]" value="Reading">Reading</input>
<input type="checkbox" name="Hobby[]" value="Writing">Writing</input><br><br>

<label>UserName</label><br>
<input type="text" Name="user"><br><br>
<label>Password</label><br>
<input type="Password" Name="pass"><br><br><hr><br>

<input type="Submit" name="Register" value="Register">
<input type="submit" name="Cancel" value="Cancel">

<br>
<br>
<br>

</form>
</body>
</html>
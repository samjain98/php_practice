<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>student info</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <h1>Student information</h1>
        <form>
            Full name: <br>
            <input type ="text" name ="name"/><br><br>
            
            Phone number: (XXX)XXX-XXXX<br>
            <input type ="tel" name ="phone_number"/><br><br>
            
            Email Address:<br>
            <input type ="email" name ="email_address"/> <br><br> 
            
            Major:<br>
            <input type ="radio" name ="major" value="engineering">Engineering<br> 
            <input type ="radio" name ="major" value = "medicine"> Medicine <br>
            <input type ="radio" name ="major" value="business/economics"> Business/Economics<br><br>
            
            
            Courses taken:<br>
            <input type ="checkbox" name ="courses[]" value = "c1"> Course 1<br> 
            <input type ="checkbox" name ="courses[]" value = "c2"> Course 2 <br>
            <input type ="checkbox" name ="courses[]" value = "c3"> Course 3 <br><br>
            
            Gender:<br>
            <select name ="gender[]" size ="3" multiple>
                <option value ="m" selected>Male</option> 
                <option value ="f" > Female </option>
                <option value ="other" >Other</option>
            </select><br><br>
            
            <div id="buttons">
                <input type="submit" value="Enter"><br>
            </div>
        </form>
        

    </body>
</html>

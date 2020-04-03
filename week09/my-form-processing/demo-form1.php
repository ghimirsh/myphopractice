<!DOCTYPE html>
<!--
Shankar Ghimire
StudentId:991585190
Course: ...............
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="content">
            <div id="form-holder">
                <h1>Personal Record Entry </h1>
                <form action="demo-form1-process.php" method="POST" name="demo-form1">
                    <label>Name : <input type="text" name="name" value=""></label><span id="nameErr">*</span><br>
                    <label>Age : <input type="text" name="age" value=""></label><span id="ageErr">*</span><br> 
                    Gender:<span id="genderErr">*<br>
                        </span><label> <input type="radio" value="Female" name="gender">Female</label><br>
                    <label> <input type="radio" value="Male" name="gender">Male</label><br>
                    Favorite Color:<br>
                    <label>&nbsp;</label> <input type="checkbox" name="colors[]" value="Red">Red <br>
                    <label>&nbsp;</label> <input type="checkbox" name="colors[]" value="Blue">Blue <br>
                    <label>&nbsp;</label> <input type="checkbox" name="colors[]" value="Green">Green <br>
                    <label>&nbsp;</label> <input type="checkbox" name="colors[]" value="Yellow">Yellow <br>
                    <!--select box/drop down box's-->
                    Select your favorite Car: 
                    <select name="car">
                        <option value="-1">-Select Car-</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Hona">Honda</option>
                        <option value="BMW">BMW</option>
                        <option value="Nissan">Nissan</option>
                        
                    </select>
                    <br><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>

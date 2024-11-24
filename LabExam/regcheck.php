

<html lang="en">
<head>
    <title>HTML Form</title>
</head>
<body>
        <h1>HTML FROM EXAMPLE</h1>

        <form action="test.html">
            <fieldset >
                <legend>Signup</legend>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="" value="" placeholder="type your name" /></td>
                    </tr>
                    <tr>
                        <td>ID:</td>
                        <td><input type="number"  name="" value="" /></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td>password:</td>
                        <td><input type="password" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td>DOB:</td>
                        <td><input type="date" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="abc"  value=""> Male  
                            <input type="radio" name="abc"  value=""> female  
                            <input type="radio" name="abc"  value=""> Other
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Dept:</td>
                        <td>
                            <select name="">
                                <option value="">CSE</option>
                                <option value="">CS</option>
                                <option value="">SE</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td><textarea></textarea> </td>
                    </tr>
                    <tr>
                        <td>Image:</td>
                        <td><input type="file" name="" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="" value="Submit"  />
                            <input type="reset" name="" value="Reset"  />
                        </td>
                    </tr>
                </table>
        </fieldset>     
        </form>

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = trim($_POST['username']);
            
                if ($username == "") {
                    echo "Name cannot be empty.";
                }

                $firstChar = $username[0];
                if (!(($firstChar >= 'A' && $firstChar <= 'Z') || ($firstChar >= 'a' && $firstChar <= 'z'))) 
                {
                    echo "Name must start with a letter.";
                    return;
                }
                $isValid = true;
                for ($i = 0; $i < strlen($username); $i++) {
                    $char = $username[$i];
                    if (!(($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || $char == ' ' || $char == '.' || $char == '-'))
                    {
                        $isValid = false;
                    }
                }		

                $words = explode(" ", $username);
                $cnt = 0;
                foreach ($words as $w) {
                    if ($w != "") {
                        $cnt++;
                    }
                }
                if (!$isValid)
                {
                    echo "Name can only contain a-z, A-Z, period, dash.";
                }
                
                else if($isValid){
                    if ($cnt < 2) 
                    {
                        echo "Name must contain at least two words.";
                        return;
                    }
                    else echo "Username is: ". $username. "<br>";
                }

            }

            //Email
            if(isset($_POST['submit'])){
                $email = trim($_POST['email']);

                if($email == null){
                    echo "Empty email address";
                }
                else{
                    echo "Email is: ". $email;
                }    
            }

            //DOB
            if(isset($_POST['submit']))
            {
                $day = trim($_POST['dd']);
                $month = trim($_POST['mm']);
                $year = trim($_POST['yy']);

                if (empty($day) || empty($month) || empty($year)) {
                    print("Date cannot be empty");
                }
                
                else {
                    // $date_parts = explode('/', $date);
                    // if (count($date_parts) == 3) {
                    $dd = intval($day);
                    $mm = intval($month);
                    $yy = intval($year);
                    // if (!checkdate($month, $day, $year)) {
                    //     print("Invalid");
                    if ($dd < 1 || $dd > 31) {
                        print("Day must be between 1 and 31");
                    } else if ($mm < 1 || $mm > 12) {
                        print("Month must be between 1 and 12");
                    } else if ($yy < 1953 || $yy > 1998) {
                        print("Year must be between 1953 and 1998");
                    } else {
                        print("Your Date of Birth is: ". $dd. "/ ". $mm. "/ ". $yy);
                    }
                }
            }

            //Gender
            if(isset($_POST['submit']))
            {
                if(!(isset($_POST['gender'])) && empty($_POST['gender']))
                {
                    echo "At least one of them must be selected";
                }
                else echo "selected";
            }
            else
            {
                echo "Error";
                // header('location: name.html');
            }

            //Dept
            if(isset($_POST['submit'])){
                if(isset($_POST['dept']))
                    {
                        $blood = $_POST['blood_group'];
                        if ($blood != null)
                            {
                                echo "Successful. You chose: ".$blood;
                            }
                        else
                            {
                                echo "Choose an option first";
                            }
                    }
                else
                    {
                        echo "Nothing was chosen";
                    }
                }
            else{
                echo "invalid request!";
            }


        ?>


</body>
</html>



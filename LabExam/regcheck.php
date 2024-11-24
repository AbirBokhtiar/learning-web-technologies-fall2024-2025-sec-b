

<html lang="en">
<head>
    <title>HTML Form</title>
</head>
<body>
        <h1>HTML FROM EXAMPLE</h1>

        <h1>HTML FROM EXAMPLE</h1>

        <form method="post" action="regcheck.php">
            <fieldset >
                <legend>Signup</legend>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="" value="" placeholder="type your name" required/></td>
                    </tr>
                    <tr>
                        <td>ID:</td>
                        <td><input type="number"  name="" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="" value="" required/></td>
                    </tr>
                    <tr>
                        <td>password:</td>
                        <td><input type="password" name="" value="" required/></td>
                    </tr>
                    <tr>
                        <td>DOB:</td>
                        <td><input type="date" name="" value="" required/></td>
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

            
            //Gender
            if(isset($_POST['submit']))
            {
                header('location: Home.html')
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



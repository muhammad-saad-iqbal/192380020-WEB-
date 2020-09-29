<?php
$pageTitle = "PHP and MySQL";
require_once "header.php";
require_once "connection.php";
$dbc = db_connect();

                //form submittion code
                if(isset($_POST['s'])){

                    $error =[];
                
                    if(empty($_POST['field1'])){
                        $_errors[] = "Name cannot be empty";
                    }
                    else{
                    $name =trim($_POST['field1']);
                    }

                    if(empty($_POST['field2'])){
                        $_errors[] = "email cannot be empty";
                    }
                    else{
                    $email =trim($_POST['field2']);
                    }

                    
                    if(empty($_POST['field3'])){
                        $_errors[] = "username cannot be empty";
                    }
                    else{
                        $username =trim($_POST['field3']);
                    }

                    if(empty($_POST['field4'])){
                        $_errors[] = "phone numbercannot be empty";
                    }
                    else{
                        $phonenumber =$_POST['field4'];
                    }


                    if(empty($_POST['field6'])){
                        $_errors[] = "present address cannot be empty";
                    }
                    else{
                        $presentaddress =trim($_POST['field6']);
                    }


                    if(empty($_POST['field7'])){
                        $_errors[] = "paramnet address cannot be empty";
                    }
                    else{
                        $parmanentaddress =trim($_POST['field7']);
                    }

                    if(empty($_POST['field8'])){
                        $_errors[] = "CNIC cannot be empty";
                    }
                    else{
                        $CNIC =$_POST['field8'];
                    }

                    if(empty($_POST['field9'])){
                        $_errors[] = "DOB cannot be empty";
                    }
                    else{
                        $DOB =trim($_POST['field9']);
                    }

                    if(empty($errors)){
                    $dbc =db_connect();
                    $sql = "INSERT INTO users VALUES('$name','$email','$username','$phonenumber','$presentaddress','$parmanentaddress','$CNIC','$DOB')";                    $result = mysqli_query($dbc,$sql);
                    if($result){
                                echo "<div class = 'alert alert-success'> Data Entered successfully </div>";
                            }
                else{
                    echo "<div class = 'alert alert-danger'> Data cannot Entered successfully due to error </div>";
                    }

                        db_close($dbc);
                    }

                else
                    foreach($errors as $error){
                echo "<div class 'alert alert-danger'>$error</div>";
                    }
            
                }
                else{
                    echo "<div class = 'alert alert-danger'>form is not submitted </div>";
                }
?>

<body>
                <div class = "container">
                <div class = "row">
                <div class = "col-sm-12">
                <h1 class = "text-center">Registration Form</h1>
                </div>
                </div>
                <div class ="row justify-content-center">
                <div class = col-sm-6>
                <form action = "process.php" method="post">
                <div class = "form-group">
                <label for = "name">Full Name:</label>
                <input type ="text" name ="field1" id = "name" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">Email Address:</label>
                <input type ="email" name ="field2" id = "email" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">Username:</label>
                <input type ="text" name ="field3" id = "username" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">Phone Number:</label>
                <input type ="text" name ="field4" id = "phonenumber" class = "form-control">
                </div>

                 <div class = "form-group">
                <label for = "name">Present Address:</label>
                <input type ="text" name ="field5" id = "presentaddress" class = "form-control">
                </div>

                <div class = "form-group">
                <div class = "form-group">
                <label for = "name">Parmanent Address:</label>
                <input type ="text" name ="field6" id = "parmanentaddress" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">CNIC:</label>
                <input type ="cnic" name ="field7" id = "CINS" class = "form-control">
                </div>

                <div class = "form-group">
                <label for = "name">Date of birth:</label>
                <input type ="date" name ="filed8" id = "dob" class = "form-control">
                </div>

            <input type = "submit" value = "Register" class = "btn btn-success" name="s">
                </form>
                </div>
                </div>
                </div>
                <?php require_once "footer.php"; ?>
                
</body>
</html>
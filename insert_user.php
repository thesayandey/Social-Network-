<?php
    include("includes/connection.php");

    if(isset($_POST['sign_up'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $pass = $_POST['u_pass'];
        $email = $_POST['u_email'];
        $country = $_POST['u_country'];
        $gender = $_POST['u_gender'];
        $birthday = $_POST['u_birthday'];
        $status = "verified";
        $posts = "no";
        $newgid = sprintf('%05d', rand(0,99999));
        $username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
        $check_username_query = "select user_name from users where user_email='$email'";
        $run_username = mysqli_query($con,$check_username_query);

        if(strlen($pass) < 9){
            echo "
                <script>
                    alert('Password must contain 9 characters');
                </script>
            ";
            exit();
        }

        $check_email = "SELECT * FROM `users` WHERE user_email='$email'";
        $run_email = mysqli_query($con,$check_email);
        $check = mysqli_num_rows($run_email);

        if($check>1){
            echo "
                <script>
                    alert('Please try different email :(');
                </script>
            ";
            // header("Location: signup.php");
            exit();
        }

        $rand = rand(1,3);
        if($rand == 1){
            $profile_pic = "users/head.jpg";
        }
        if($rand == 2){
            $profile_pic = "users/head.jpg";
        }
        if($rand == 3){
            $profile_pic = "users/head.jpg";
        }

        // $insert = "insert into users (f_name,l_name,user_name,describe_user,Relationship,user_pass,user_email,user_country,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,recovery_account) values('$first_name','$last_name','$username','My default status!','...','$pass','$email','$country','$gender','$birthday','$profile_pic','users/cover.jpg',NOW,'$status','$posts','brsnc')";

        $insert = "INSERT INTO `users`(`f-name`, `l_name`, `user_name`, `describe_user`, `Relationship`, `user_pass`, `user_email`, `user_country`, `user_gender`, `user_birthday`, `user_image`, `user_cover`, `user_reg_date`, `status`, `posts`, `recovery_account`) VALUES ('$first_name','$last_name','$username','My default status!','...','$pass','$email','$country','$gender','$birthday','$profile_pic','users/cover.jpg','NOW','$status','$posts','brsnc')";

        $query = mysqli_query($con,$insert);

        if($query){
            echo "
                <script>
                    alert('Signed up... $first_name');              
                </script>
                window.location = 'signin.php'; 
            ";
            // header("Location: signin.php");
        }
        else{
            echo "
                <script>
                    alert('Registration failed...pls try again');
                    window.location = 'signup.php';              
                </script>
            ";
            
        }
    }
?>
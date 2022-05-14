<?php
    $hostname = "localhost";
    $password = "";
    $dbName = "social_network";
    $username = "root";

    $con = mysqli_connect($hostname,$username,$password,$dbName);
?>



<!-- CREATE TABLE `social_network`.`users` ( `user_id` INT NOT NULL AUTO_INCREMENT , `F-name` TEXT NOT NULL , `l_name` TEXT NOT NULL , `user_name` TEXT NOT NULL , `describe_user` VARCHAR NOT NULL , `Relationship` TEXT NOT NULL , `user_pass` VARCHAR NOT NULL , `user_email` VARCHAR NOT NULL , `user_country` TEXT NOT NULL , `user_gender` TEXT NOT NULL , `user_birthday` TEXT NOT NULL , `user_image` VARCHAR NOT NULL , `user_cover` VARCHAR NOT NULL , `user_reg_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `status` TEXT NOT NULL , `posts` TEXT NOT NULL , `recovery_account` VARCHAR NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB; -->
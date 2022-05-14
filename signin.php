<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>BRSNC Alumni Network</title>
  </head>
  <body>
    

    <div class="row" id="heading">
        <div class="col-sm-12">
            <div class="well">
                <center><h1>BRSNC Alumni Network</h1></center>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                <h3 id="hd" style="text-align: center;"><strong>Log in to BRSNC Alumni Network</strong></h3>
                </div>

                <div class="l-part details">
                    <form action="" method="post">
                        <input type="email" name="email" id="email" placeholder="Email-id" class="form-control input-md"><br>

                        <div class="overlap-text">
                            <input type="password" name="pass" placeholder="Password" id="" class="form-control"><br>
                            
                        </div>

                            Forgot password?<a href=""> click here</a>

                            <center><strong><input type="submit" value="Log in" id="signup" class="btn btn-lg btn-primary" name="login"></strong></center>
                        
                            <?php include("login.php") ?>

                    </form>
                </div>
            </div>
        </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<style>
    #heading{
        background-color: skyblue;
        padding: 2rem;
    }

    .details{
        padding-left: 18%;
        padding-right: 18%;

        
    }

    .main-content{
        margin-top: 6%;
    }
</style>
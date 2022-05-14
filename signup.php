<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                    <h3 id="hd" style="text-align: center;"><strong>Join BRSNC Alumni Network</strong></h3>
                </div>

                <div class="l-part details">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="first_name" placeholder="First Name">
                        </div>

                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                        </div>

                        <div class="input-group mb-3">
                            <input class="form-control" type="password" name="u_pass" placeholder="Password">
                        </div>

                        <div class="input-group mb-3">
                            <input class="form-control" type="email" name="u_email" placeholder="Email-id">
                        </div>

                        <div class="input-group mb-3">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="u_country" >
                                <option value="India">India</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Bhutan">Bhutan</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="u_gender" >
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input class="form-control" type="date" name="u_birthday" placeholder="Date of borth">
                        </div>

                        Already have an account? 
                        <a href="signin.php"> Log in</a>

                        <center><strong><input type="submit" value="Sign up" id="signup" class="btn btn-lg btn-primary" name="sign_up"></strong></center>

                        <?php include("insert_user.php"); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>


<style>
    #heading{
        background-color: skyblue;
        padding: 2rem;
    }

    #hd{
        margin-top: 2%;
    }

    .details{
        padding-left: 18%;
        padding-right: 18%;
    }
</style>
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

  <div class="container-fluid">
    <div class="row">
      <div class="col intro">
        <div id="text">
          <h1>BRSNC Alumni Network</h1>
          <h5>Get connected with your batch mates.</h5>
        </div>
      </div>

      <div class="col form">
        <div id="form">
          <form action="" method="post">
            <div id="buttons" class="d-grid gap-2">
              <button id="login" class="btn  btn-primary" type="button" name="login" onclick="loginbtn()">Log in</button>

              <button id="signup" class="btn btn-outline-success" type="button" name="signup" onclick="signupbtn()">Create account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  <!-- handeling buttons -->
<script>
  function loginbtn(){
    window.location = "signin.php";
  }

  function signupbtn(){
    window.location = "signup.php";
  }

</script>

</body>

</html>


<style>
  .intro {
    /* border: 2px solid red; */
    height: 30rem;
    margin-top: 10rem;
  }

  .form {
    /* border: 2px solid red; */
    height: 30rem;
    margin-top: 10rem;
  }

  #text {
    padding-top: 10rem;
    padding-left: 6rem;
  }

  #form {
    padding-top: 10rem;
    padding-left: 3rem;
    padding-right: 6rem;
  }


  /* targetting mobile screen */
  @media (max-width: 700px) {

    .row {
      display: block;
    }
  }
</style>

<!-- -------php------- -->


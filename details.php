<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="lg1">
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="details.php">details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="submitt.php">About</a>
          </li>
        </ul>
      </nav>
   
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6">
                <p class="text1">BOOK DETAILS</p>
                <table class="table">
                    <tr>
                        <td>BOOK NAME</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>BOOK NO</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>AUTHOR NAME</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PUBLISHING YEAR</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-primary">SEARCH</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6">
               <p class="text1"> USER DETAILS</p>
               <table class="table">
                   <tr>
                       <td>NAME</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                   <tr>
                       <td>ID </td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                   <tr>
                       <td>ADDRESS</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                   <tr>
                       <td>PH NO</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                   <tr>
                       <td></td>
                       <td><button class="btn btn-danger">SUBMIT</button></td>
                   </tr>
               </table>
            </div>
        </div>
    </div>
</body>
</html>
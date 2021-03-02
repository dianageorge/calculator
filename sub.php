<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 

</head>
<body>
    <div class="containeer">

        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                    <div class="container-fluid">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      arithmetic operations
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php">home</a></li>
                      <li><a class="dropdown-item" href="add.php">addition</a></li>
                      <li><a class="dropdown-item" href="sub.php">subtraction</a></li>
                      
                      <li><a class="dropdown-item" href="mul.php">multiplication</a></li>
                      <li><a class="dropdown-item" href="div.php">division</a></li>
                      
                    </ul>
                  </li>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 ">
                <table class="table">
                    <tr>
                        <td>enter first number</td>
                        <td><input id="num3" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>enter second number</td>
                        <td><input id="num4"  type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="subbtnSub()" class="btn btn-danger">sub</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <p id ="output"> </p></td>
                    </tr>
                </table>
            </div>
        </div>

      





    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
   <script src="script.js"></script>
</body>
</html>
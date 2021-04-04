<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin</title>

        <link rel="stylesheet" type="text/css" href="<?php echo asset('bootstrap.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('icons/css/all.css');?>">
    </head>
    <body>
        <div class="container-fluid">
            <div class="container-fluid fixed-top bg-dark" id="home">
                <div class="row p-0">
                    <div class="col menu px-0 py-0 mx-0 my-0">
                        <nav class="navbar nav-dark navbar-expand-lg">
                        <a class="navbar-brand fw-bolder" href="#top" style="font-family:montserrat;color:white;font-size:30px;"><span class="text-danger">O</span>MOTOYOSI.</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon" style="background-color:grey"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav align-item-end">
                            <li class="nav-item active">
                                <a class="nav-link text-white ml-2" href="#home"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white ml-2" href="#skills"><i class="fa fa-cog"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white ml-2" href="#about"><i class="fa fa-user"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white ml-2" href="#contact"><i class="fa fa-envelope"></i></a>
                            </li>
                            </ul>
                        </div>
                        </nav>
                    </div>
                </div>
            </div><br><br><br>
            <div class="d-flex bg-light row" id="wrapper">
                <div class="col-md-3 mt-5">
                    <div class="list-group list-group-flush border-right border-top border-left border-bottom mt-4 bg-white"><hr>
                    <a href="<?php echo url('/admin') ?>" class="list-group-item list-group-item-action bg-white"><h3>Contact Message</h3></a>
                    <a href="<?php echo url('/add') ?>" class="list-group-item list-group-item-action bg-white"><h3>Services Message</h3></a>
                    </div>
                </div>
         
          <div id="page-content-wrapper" class="col-md-9">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-center mt-5 mb-3">Contact Messages</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-dark table-hover">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Message</th>
                                </tr>
                                @foreach ($output as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->message}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
              
            </div>
        
      </div>
        </div>
        <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.js"></script>
    </body>
</html>
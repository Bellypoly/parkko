<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parkko</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/first.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: pink"> 

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #FFCCCC" >
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="background-color: #FFCCCC">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: #FFCCCC">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container"  style="background-color: pink">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Parkko</h1>
                <!-- <p class="lead">Complete with pre-defined file paths that you won't have to change!</p> -->
                <!-- <ul class="list-unstyled">
                    <li>Bootstrap v3.3.1</li>
                    <li>jQuery v1.11.1</li>
                </ul> -->
            </div>
        </div>
        <!-- /.row -->
        <input id ="txtlicense"type="text" class="form-control" placeholder="เลขทะเบียน">
        <select class="form-control">
              <option>กรุงเทพมหานคร</option>
              <option>ลำปาง</option>
        </select>
        <input id ="btnsearch"class="btn btn-default" type="submit" value="ค้นหา">
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <p>หมายเลข</p>
                <p>จำนวนเวลาเข้าจอด</p>
                <p>จำนวนชั่วโมงออก</p>
                <p>รวมเวลา</p>
            </div>
            <div class="col-md-6 col-xs-6">
                <p id="result1">???</p>
                <p id="result2">???</p>
                <p id="result3">???</p>
                <p id="result4">???</p>
            </div>        
        </div>
        <div class="row">
             <div class = "col-md-2 col-xs-2">
                <p style='text-align: right'>รวมเงิน </p>
            </div>
            <div class="col-md-4 col-xs-4">
                <input id="txtmoney" type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-offset-8 col-xs-offset-8">
                
            </div>

        </div>
       

        
        <hr>
        <input id="btncalculate"class="btn btn-default" type="submit" value="คำนวนเงินทอน">
        <div class="row">
            <div class="col-md-4 col-xs-4">
                <p>ธนบัตร 1,000.00</p>
                <p>ธนบัตร 500.00</p>
                <p>ธนบัตร 100.00</p>
                <p>เหรียญ 10.00</p>
                
            </div>
            <div class="col-md-4 col-xs-4">
                <p id="money1">xxx</p>
                <p id="money2">xxx</p>
                <p id="money3">xxx</p>
                <p id="money1">xxx</p>
                
            </div>
            <div class="col-md-4 col-xs-4">
                <p>ฉบับ</p>
                <p>ฉบับ</p>
                <p>ฉบับ</p>
                <p>เหรียญ</p>
                
            </div>
        </div>

        
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

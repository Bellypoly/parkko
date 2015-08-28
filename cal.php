<?php

$record1 = array(
    "id" => "1",
    "license" => "ณข1549",
    "time_in" => "2015/08/26 19:00:00",
    "time_out" => "2015/08/27 10:05:00",
    "province" => "ลำปาง",
    "pay" => "1500",
    "shop" => ""
);

$record2 = array(
    "id" => "2",
    "license" => "สฬ5420",
    "time_in" => "2015/08/27 10:00:00",
    "time_out" => "2015/08/27 21:05:00",
    "province" => "กรุงเทพมหานคร",
    "pay" => "500",
    "shop" => ""
);

$record3 = array(
    "id" => "3",
    "license" => "ฌส2709",
    "time_in" => "2015/08/27 12:00:00",
    "time_out" => "2015/08/27 17:00:00",
    "pay" => "500",
    "province" => "กรุงเทพมหานคร",
    "shop" => "5000"
);

$car[1] = 'ณข1549';
$car[2] = 'สฬ5420';
$car[3] = 'ฌส2709';

$d[1][2]= $record1;
$d[2][1]= $record2;
$d[3][1]= $record3;

//print_r($_POST);

$key = array_search($_POST['textlicense'], $car);
$province = $_POST['province'];
$car_log = $d[$key][$province];
//print_r($car_log);

function get_rate($time_in, $time_out){
    $data = round((strtotime($time_out) - strtotime($time_in))/3600, 1);
    $sum_hour = ceil($data);
    $date = $time_in;
    $date = strtotime($date);
    $h = date('H', $date);
    $price = 0; 
    $total_price=0;
    for($i=1; $i<$sum_hour; $i++){
        if($i==1){
            $price = 0;
        }elseif($i>1 && $i<=4){
            $price = 10;
        }elseif($h>2 && $h<=6){
            $price = 250;
        }else{
            $price = 20;
        }
        $total_price = $total_price+$price;
        if($h == 24){
            $h=1;
        }else{
            $h=$h+1;
        }
    }
    return $total_price;

}

function cal($resive, $total){
    $diff = $resive - $total;
    $data['500']=floor(($diff%1000)/500);
    $data['100']=floor((($diff%1000)%500)/100);
    $data['50']=floor(((($diff%1000)%500)%100)/50);
    $data['20']=floor((((($diff%1000)%500)%100)%50)/20);
    $data['10']=floor(((((($diff%1000)%500)%100)%50)%20)/10);
    //echo '<pre>';
    //print_r($data);
    return $data;
}

function get_hour($time_in, $time_out){
    $data = round((strtotime($time_out) - strtotime($time_in))/3600, 1);
    $sum_hour = ceil($data);
    return $sum_hour;
}

$time_in = $car_log['time_in'];
$time_out = $car_log['time_out'];

$hour = get_hour($time_in, $time_out);

//echo 'rate :'.get_rate($time_in, $time_out);//(วันเวลาเข้า, ชั่วโมงทั้งหมด)
//echo '<br/>';
//print_r(cal(1500, get_rate($time_in, $time_out)));

$rate = get_rate($time_in, $time_out);//(วันเวลาเข้า, ชั่วโมงทั้งหมด)
//echo '<br/>';
$change = cal(1500, get_rate($time_in, $time_out));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title aligne="left">Parkko</title>

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
                <h1 align="left">Parkko</h1>
                <!-- <p class="lead">Complete with pre-defined file paths that you won't have to change!</p> -->
                <!-- <ul class="list-unstyled">
                    <li>Bootstrap v3.3.1</li>
                    <li>jQuery v1.11.1</li>
                </ul> -->
            </div>
        </div>
        <!-- /.row -->
        <form action="index.php" method="post">
            <input id ="txtlicense" name="textlicense" type="text" class="form-control" placeholder="เลขทะเบียน"/><br>
            <select name="province" class="form-control" >
                  <option value='0'>เลือกจังหวัด</option>
                  <option value='1'>กรุงเทพมหานคร</option>
                  <option value='2'>ลำปาง</option>
            </select>
            <br>
            <div  align="center" >
            
            <input id ="btnsearch" style="width:150px;height:30px;" type="submit" value="ค้นหา" >

        </form>

        </div>
        <br>

        <hr>

        <div class="row" style="display:block;">
            <div class="col-md-5 col-xs-5" style="text-align:right;">
                <p>หมายเลข</p>
                <p>จังหวัด</p>
                <p>วันเวลาที่เข้าจอด</p>
                <p>วันเวลาที่ออกจอด</p>
                <p>รวมชั่วโมง</p>
                <p>ค่าจอด</p>
            </div>
            <div class="col-md-7 col-xs-7">
                <p id="result1"><?php echo $car_log['license']; ?></p>
                <p id="result2"><?php echo $car_log['province']; ?></p>
                <p id="result3"><?php echo $car_log['time_in']; ?></p>
                <p id="result4"><?php echo $car_log['time_out']; ?></p>
                <p id="result5"><?php echo $hour;?> ชั่วโมง</p>
                <p id="result6"><?php echo $rate; ?></p>
            </div>        
        </div>


        <div class="row" >
             <div class = "col-md-2 col-xs-2">
                <p style='text-align: right'>รับเงิน </p>
            </div>
            <div class="col-md-4 col-xs-4">
                <input id="txtmoney" type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-offset-8 col-xs-offset-8">
                
            </div>

        </div>
       

        
        <hr>
        <input id="btncalculate"class="btn btn-default" type="submit" value="คำนวนเงินทอน">
        <br>
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

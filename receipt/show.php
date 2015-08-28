<?php
    include('../var.php');
    
    $id =  '';
    if(isset($_REQUEST['id']) && $_REQUEST['id']){
        $id     =   $_REQUEST['id'];
    }
    
    $license = "";
    $province = "";
    $pay = '';
    $pay_park=  '';
    $hour    =  '';
    $pay_back=  '';
    foreach($data as $index => $list){
        if($id  ==  $list['id']){
            $license     =   $list['license'];
            $province    =   $list['province'];
            $pay         =   number_format($list['pay'],2,'.',',');
                $pay_park=  number_format($list['price'],2,'.',',');
                $hour    =  $list['hour'];
                $pay_back=  number_format($list['change'],2,'.',',');
            /*if($id  ==   '1'){
                $pay_park=  190;
                $hour    =  12;
                $pay_back=  310;
            }elseif($id  ==   '2'){
                $pay_park=  1190;
                $hour    =  16;
                $pay_back=  310;
            }elseif($id  ==   '3'){
                $pay_park=  20;
                $hour    =  5;
                $pay_back=  480;
            }*/
        }
    }
    
?>
<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Receipt</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../css/customized-bootstrap.css">
<link rel="stylesheet" href="../css/boon.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="width: 100%;margin: auto">
	
<div class=" " style="text-align: -webkit-center;width: 100%">
  <div class="panel-body centered col-lg-1 col-offset-6 centered" >
   <form role="form" class=" centered form-inline" style="font-size: 25px; width : 338px ; height : 676px; background-color: #FFFFB2;">
  <div style="text-align: left;padding: 10px 0px 0px 20px">
    
  <h2 style= "    margin-bottom: 40px;">ใบเสร็จรับเงิน</h2>
   
  <div style= "    margin-bottom: 40px;">
    <label for="pwd">หมายเลขทะเบียน:</label>
    <?php echo $license; ?>
  </div>
  <div style= "    margin-bottom: 40px;">
    <label for="email">หมวดจังหวัด:</label>
    <?php echo $province; ?>
  </div>
  
  <div style= "    margin-bottom: 40px;">
    
    <label for="email">จำนวนชั่วโมงที่จอด:</label>
    <?php echo $hour; ?>
 <label>ชม.</label>
  </div>

  <div style= "    margin-bottom: 40px;">
    
    <label for="email">ค่าจอด:</label>
    <?php echo $pay_park; ?>
     <label>บาท</label>
  </div>
  <div style= "    margin-bottom: 40px;">
    <label for="email">รับเงิน:</label>
    <?php echo $pay; ?>
    <label>บาท</label>
  </div>
   <div style= "    margin-bottom: 40px;">
    <label for="email">ทอนเงิน:</label>
    <?php echo $pay_back; ?>
    <label>บาท</label>
  </div>
    </div>
</form>
       <button><span class="glyphicon glyphicon-print"></span>พิมพ์</button>

  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
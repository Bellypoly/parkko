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

    <!-- Page Content -->
    <div class="container" align="center" style="background-color: pink; width: 350px;">
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
         <form name="form1"action="show.php" method="get" accept-charset="utf-8">
           <input type="hidden" name="license" value="">
           <input type="hidden" name="province" value="">
         </form>
         
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <input type = "button" name ="licence1" value="Licence1" style="width:180px;" onclick="javascript:form_value('สฬ 5420','กรุงเทพ');">
            </div>
            <div class="col-md-6 col-xs-6">
                <input type = "button" name ="licence2" value="Licence2" style="width:180px;" onclick="javascript:form_value('ณข 1549','ลำปาง');">
            </div>
            <div class="col-md-6 col-xs-6">
                <input type = "button" name ="licence3" value="Licence3" style="width:180px;" onclick="javascript:form_value('ฌส 2509','กรุงเทพ');">
            </div>
        </div> 
    </div>
    <!-- /.container -->
    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript"> 
function form_value(datax,province) {
    form1.license.value =datax;
    form1.province.value =province;
    form1.submit();
};
</script>
</body>

</html>

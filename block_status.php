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
    <link href="css/pkstyle.css" rel="stylesheet">

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
        <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("[id^='blk_']").click(function(){
                alert($(this).attr('value'));
                $.ajax({
                    url: "block_update.php",
                    type: "GET",
                    data: {id: e.target.id}, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
                    success: function(data){
                        data = JSON.parse(data);
                        //update some fields with the updated data
                        //you can access the data like 'data["driver"]'
                    }
                });
            });
        });
    </script>
</head>

<body> 

    

    <!-- Page Content -->
    <div class="container">
        <!-- /.row -->
        <div class="row" >
              <div id="blk_1" value="1" class="block1 col-xs-12 col-sm-6 col-md-6">1</div>
              <div id="blk_2" value="2" class="block1 col-xs-6 col-md-6">2</div>
        </div>
        <div class="row" >
              <div id="blk_3" value="3" class="block1 col-xs-12 col-sm-6 col-md-6">3</div>
              <div id="blk_4" value="4" class="block1 col-xs-6 col-md-6">4</div>
        </div>

        
    </div>
    <!-- /.container -->



</body>

</html>

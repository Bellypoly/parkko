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
    // function changeColor () {
    $(document).ready(function(){
        var block_type = '';
        $("[id^='blk_']").click(function(){
            var span = document.createElement("span");
            var lady_text = document.createTextNode("Lady Park");
            span.appendChild(lady_text);
            //IF PINK
            if($(this).css("background-color") == 'rgb(255, 192, 203)'){
                $(this).css("background-color",'rgb(141, 199, 63)');
                block_type = 2;
            }
            //IF GREEN
            else{
                $(this).css("background-color",'rgb(255, 192, 203)');
                // $(this).append(span);
                block_type = 1;
            }
            // console.log(block_type+'----'+$(this).attr('value'));
            $.ajax({
                type: "GET",
                data: { id:$(this).attr('value'),
                        block_type:block_type},
                url: "block_update.php",
                success: function(data){
                   //data will contain the vote count echoed by the controller i.e.  
                     console.log(data);
                  //then append the result where ever you want like
                }
            });
        });
    });
    </script>
</head>

<body> 
<?php 
$servername = "128.199.248.168";
$username = "root";
$password = "spr1nt3r";
$dbname = "parkko";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT block_type FROM block ORDER BY id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
        // echo $row["block_type"];
        if($row["block_type"] == 1){
            echo "<div id='blk_".($i+1)."' value=".($i+1)." class='block1 col-xs-12 col-sm-6 col-md-6'>".($i+1)."</div>";
        }
        else{
            echo "<div id='blk_".($i+1)."' value=".($i+1)." class='block_lady col-xs-12 col-sm-6 col-md-6'>".($i+1)."</div>";
        }
        $i++;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>

</html>

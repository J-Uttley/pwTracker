<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- SEO -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112500875-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112500875-1');
</script>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="main.css">
    <title>Check Order Status</title>
</head>

<body>
    <div class="bg">

    <div class="header">
            <div class="logo">
                    <img src="assets/pwLogo.png">
                </div>
       </div>
        <div class="Form">
        <!-- <form method="post" action="http://bpdportal.com/poundworld/OrderStatusFiltered.php" > -->
            <form method="post" action="OrderStatusFiltered.php" >
    

            <table class="inputTable">
               <tr>
                   <td>Order Number</td></tr>
                   <tr>
                   <td><input type="text" name="orderNo" value=""  size="35" /></td>
                </tr></tr>
  
            </table>


            <input type="Submit" value="Check" width:"20px"/>
</form>       
        </div>

<div class="footer">
  <p>Powered by BPD Group    </p>

</div>
   
</body>
</html>
<?php 
session_start();
if(!isset($_SESSION['admin'])){

      header("Location: ../login_new.php");
}

include "../connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <!-- BOOTSTRAP STYLES -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES -->
    <link href="../assets/css/fontawesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES -->
    <link href="../assets/js/js-dashboard/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES -->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
    <title>Kalkulator</title> 
</head>
<body>
     
    <!-- Binary Admin -->

    <div id="wrapper">
        <!-- NAV -->
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ADMIN</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right;font-size: 16px;"> 
                <a href="../logout.php" class="fa fa-times-circle fa-2x"></a> 
            </div>
        </nav>   

        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                      <img src="../assets/images/user.jpeg" class="user-image img-responsive">
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-2x"></i><b>Dashboard</b></a>
                    </li>	
                    <li>
                        <a href="member.php"><i class="fa fa-users fa-2x"></i><b>Member</b></a>
                    </li>
                    <li>
                        <a href="calculator.php"><i class="fa fa-calculator fa-2x"></i><b>Kalkulator</b></a>
                    </li>
                    <li class="text-center">
                        <br>
                        <form> 
			                <input type="date">
			            </form>
                        <br>
                    </li>
                </ul>
            </div>
        </nav>   

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <marquee bgcolor="white" behavior="alternate" direction="right"><b>OMAH TECH - TOKO ONLINE</b></marquee>
            <div id="page-inner">
                <!-- Section 1 -->
                <div class="row">
                    <div class="col-md-12">
                        <h2>Kalkulator</h2>   
                    </div>
                </div>  
                <!-- End Of Section 1 -->
                
                <!-- Section 2  -->
                <div>
                    <form>
                        <input type="number" name="a" placeholder="Bilangan a">
                        <select name="operator">
                            <option selected disabled>Pilih Operator</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                        <input type="number" name="b" placeholder="Bilangan b">
                        <div style="margin-top: 1rem">
                            <button type="submit">Hitung</button>
                        </div>
                    </form>
                    <?php
                    if ($_GET):
                        $a = (double) @$_GET['a'];
                        $b = (double) @$_GET['b'];
                        $operator = @$_GET['operator'];
                        switch ($operator) {
                        case '+':
                            $hasil = $a + $b;
                            break;
                        case '-':
                            $hasil = $a - $b;
                            break;
                        case '*':
                            $hasil = $a * $b;
                            break;
                        case '/':
                            $hasil = $a / $b;
                            break;
                        }
                    ?>
                    <div style="margin-top: 1rem">
                        Hasil: <strong><?php echo $hasil ?></strong>
                    </div>
                    <?php endif; ?>
                <!-- End of Section 2 -->

                </div>             
            </div>
        </div>
    </div>

    <!-- End of Binary Admin -->

    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/js-dashboard/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/js-dashboard/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/js-dashboard/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/js-dashboard/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/js-dashboard/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/js-dashboard/custom.js"></script>  

</body>
</html>
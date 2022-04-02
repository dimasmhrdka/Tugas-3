<?php
$konek = mysqli_connect("localhost", "root", "", "dimas");
$list = [];
$query = mysqli_query($konek, "SELECT * FROM tbl_093");
while ($baris = mysqli_fetch_assoc($query)) {
    $list[] = $baris;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>PT. Kevlar</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
        .body{
                background-color: hsl(160, 100%, 90%);
                padding-top: 5%;
                align-items: center;
                justify-content: center;
                font-size: 50px;
                font-weight: bold;
            }
            .h3{
                text-align: center;
                font-size: 50px;
                font-weight: bold;
            }
    </style>

</head>
<body class="body">
<!-- MAIN CONTENT-->
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="h3" class="title-5 m-b-35">PT. Kevlar</h3>
        <div class="table-data__tool-right" style="padding-left: 91%;">
            <button class="au-btn au-btn-icon au-btn--green au-btn--small tambah">
                <a href="add.php"><i class="zmdi zmdi-plus"></i>ADD</a>
            </button>
        </div>

        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Age</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list as $sub) :
                    ?>

                        <tr class="tr-shadow">
                            <td><?php
                                echo $sub["nama"];
                                ?>
                            </td>
                            <td>
                                <span class="block-email">
                                    <?php
                                    echo $sub["email"];
                                    ?>
                                </span>
                            </td>
                            <td class="desc"><?php
                                                echo $sub["posisi"];
                                                ?></td>
                            <td><?php
                                echo $sub["umur"];
                                ?>
                            </td>
                            <td><?php
                                echo $sub["gaji"];
                                ?></td>
                            <td>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Change">
                                        <a href="change.php?id=<?php echo $sub["id"]; ?>"><i class="zmdi zmdi-edit"></i></a>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <a href="delete.php?id=<?php echo $sub["id"]; ?>"><i class="zmdi zmdi-delete"></i></a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
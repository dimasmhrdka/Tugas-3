<?php
$konek = mysqli_connect("localhost", "root", "", "dimas");
$id = $_GET["id"];
$query = mysqli_query($konek,"DELETE FROM tbl_093 where id = $id");
$hasil = mysqli_affected_rows($konek);

if ($hasil > 0) {
    echo "<script>
                alert('Congratulations, the data has been deleted successfully');
        </script>";
} else {
    echo "<script>
                alert('Sorry, the data has not been deleted successfully');
        </script>";
}
?>
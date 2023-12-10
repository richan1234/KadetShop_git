<?php
function getCategoryName($pdt_ctg, $connection)
{
    $result = mysqli_query($connection, "SELECT pdt_ctgname FROM barang WHERE id='$pdt_ctg'");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['pdt_ctgname'];  // Perbaikan disini, mengganti 'pdt_ctgname' menjadi 'pdt_ctgname'
    } else {
        return " ";
    }
}
?>
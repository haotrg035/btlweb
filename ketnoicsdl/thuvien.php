<?php
    function travemang($sql,$conn){
		$rs = $conn->query($sql);
		$rows = [];
		while ($row = mysqli_fetch_array($rs)) {
			$rows[] = $row;
		}
		return $rows;
    }
?>
<?php 
    
?>

<?php
    function hienthicauhoi($mang){
        shuffle($mang);
        $j = 1;
        foreach ($mang as $key => $value) { ?>
            <table border="1" style="border-collapsse: collapse;">
                <tr>
                    <td width = "300" colspan="2">
                        <?php echo "Câu $j: " .$value["noidungcauhoi"] ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ol type="A" style="Width: 400px; postion:relative">
                            <?php 
                                for ($i=0; $i < 4; $i++) { ?>
                                    <li style="float:left;width:40%;"><?php echo $i ?></li>
                                <?php }?>
                        </ol>
                    </td>
                </tr>
            </table>
        <?php
    $j++;   }
    }
?>

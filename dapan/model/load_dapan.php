<?php			
		include "../../ketnoicsdl/ketnoi.php";
		if(isset($_POST['timkiem'])){
			$timkiem=$_POST['timkiem'];
			$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
			$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
			$offset = ($page-1)*$rows;
			$result = array();
			$rs = $conn->query("SELECT COUNT(1) FROM `dapan` WHERE `dapan`.madapan='$timkiem' 
				OR `dapan`.macauhoi LIKE '%$timkiem%'
				OR `dapan`.`noidung` LIKE '%$timkiem%' ");	
			$row = mysqli_fetch_row($rs);
			$result["total"] = $row[0]; 
			$s="SELECT * FROM `dapan` WHERE `dapan`.madapan='$timkiem' 
				OR `dapan`.macauhoi LIKE '%$timkiem%' OR `dapan`.`noidung` LIKE '%$timkiem%'
				LIMIT $offset,$rows";	 
			$rs = $conn->query($s);
				$items = array();
			while($row = mysqli_fetch_object($rs)){
					array_push($items, $row);
			}
			$result["rows"] = $items;
			echo json_encode($result);
		}
		else{
			$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
			$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
			$offset = ($page-1)*$rows;
			$result = array();
			$rs = $conn->query("SELECT COUNT(1) FROM `dapan`");	
				$row = mysqli_fetch_row($rs);
				$result["total"] = $row[0]; 
			$s="SELECT * FROM `dapan` ORDER BY `dapan`.macauhoi ASC limit $offset,$rows";	 
				$rs = $conn->query($s);
				$items = array();
			while($row = mysqli_fetch_object($rs)){
					array_push($items, $row);
			}
			$result["rows"] = $items;
			echo json_encode($result);
		}
?>
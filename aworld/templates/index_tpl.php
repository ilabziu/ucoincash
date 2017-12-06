<h3>Trang chủ</h3>
          <div class="default_pic"><img src="media/images/default_pic.jpg" width="604" height="280" /></div>
          <p><strong> </strong> </p>
          
 <?php
 
 
 
 
		$sqlnhanvien = "select id,maso,ngaytao from table_product where stt >10 order by id asc";
		$d->query($sqlnhanvien);		
		$nhanvien = $d->result_array();
		
		for($i=0;$i<count($nhanvien);$i++){
			
			$songay=0;
			$songay=round((time()-$nhanvien[$i]['ngaytao'])/86400);
			
			if($songay>151 && sof1s($nhanvien[$i]['maso'])==0)
				$sqlhienthi = "UPDATE table_product SET hienthi = 0 WHERE  id='".$nhanvien[$i]['id']."'";
				$d->query($sqlhienthi);			
			}
		
		
		
		$sqlnhanvien = "select id,maso,ngaytao from table_product1 where stt >10 order by id asc";
		$d->query($sqlnhanvien);		
		$nhanvien = $d->result_array();
		
		for($i=0;$i<count($nhanvien);$i++){
			
			$songay=0;
			$songay=round((time()-$nhanvien[$i]['ngaytao'])/86400);
			
			if($songay>101 && sof1s1($nhanvien[$i]['maso'])==0)
				$sqlhienthi = "UPDATE table_product1 SET hienthi = 0 WHERE  id='".$nhanvien[$i]['id']."'";
				$d->query($sqlhienthi);			
			}
		
		
 
 ?>

<script type="text/javascript">
$(document).ready(function() {
	
	$('#tien1,#tien2,#tien3,#tien4').priceFormat(); // GỌI HÀM ĐỊNH DẠNG KIỂU TIỀN TỆ TỪ priceFormat.js ngoài index.php

});

</script>



<h3>Quản lý nhân viên: <span style="font-style:italic; color:#f00">(*)</span> là thông tin bắt buột phải nhập</h3>

<?php

function get_main_list()
	{
		$sql="select * from table_product_list order by stt";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_list" name="id_list"  class="main_font" style="width:200px;">
			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==(int)@$_REQUEST["id_list"])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
	
	function get_main_cat1()
	{
		$sql="select * from table_product_cat1 order by stt";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_cat1" name="id_cat1"  class="main_font" style="width:200px;">
			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==(int)@$_REQUEST["id_cat1"])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
	
		
?>





<!--AutoCompelete--> 

	<script type="text/javascript" src="./media/scripts/jquery-ui-1.10.3.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="./media/css/jquery-ui-1.10.3.custom.css"/>
	<script>
		$(function() {		
			$( "#accordion" ).accordion();
			var availableTags = [
				
				<?php
					$d->reset();
					$sql_aUsers="select maso,hoten from #_product  where  hienthi=1 order by id desc";
					$d->query($sql_aUsers);
					$aUsers2=$d->result_array();
					foreach($aUsers2 as $k=>$v)
					{					
						echo '"'.$v['maso'].'-'.$v['hoten'].'",';
					}
				?>
				
			];
			$( "#quanly,#gioithieu" ).autocomplete({
				source: availableTags
			});
		});
	</script>   
 <!--AutoCompelete--> 




<form name="frm" method="post" action="index.php?com=product&act=save&curPage=<?=$_REQUEST['curPage']?>" enctype="multipart/form-data" class="nhaplieu">
   <!-- <b>Cấp bậc<span style="font-style:italic; color:#f00">(*)</span></b><?=get_main_list();?><br /><br /> -->
   
    <?php if ($_REQUEST['act']=='edit'){
				
		$d->reset();
		$chuoigt="select maso,hoten from #_product where maso='".$item['gioithieu']."'";
		$d->query($chuoigt);
		$kqgt=$d->fetch_array();
		
		if($kqgt['maso']=="") {$chuoi="";}
		else{
			$chuoi=$kqgt['maso']."-".$kqgt['hoten'];
		}
		
		$d->reset();
		$chuoiql="select maso,hoten from #_product where maso='".$item['quanly']."'";
		$d->query($chuoiql);
		$kqql=$d->fetch_array();
	    
		if($kqql['maso']=="") {$chuoi1="";}
		else{
			$chuoi1=$kqql['maso']."-".$kqql['hoten'];
		}
		
		
		
	?>
    
    <b>Người giới thiệu<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="gioithieu" id="gioithieu"  onKeyPress="doEnter(event,'gioithieu');" value="<?=$chuoi?>" readonly="readonly" class="input" style="width:400px;"/><br /><br />
   
    <b>Người quản lý<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="quanly" id="quanly"  onKeyPress="doEnter(event,'quanly');" value="<?=$chuoi1?>" class="input" readonly="readonly" style="width:400px;"/><br /><br />
   
   
	<?php } else {?>
	<b>Người giới thiệu<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="gioithieu" id="gioithieu" onKeyPress="doEnter(event,'gioithieu');"  class="input" readonly="readonly" style="width:400px;"/><br /><br />
    
    <b>Người quản lý<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="quanly" id="quanly" onKeyPress="doEnter(event,'quanly');"  class="input" readonly="readonly" style="width:400px;"/><br /><br />
   
	 <?php }?>
    <br /> 
    
   
   
   
   <b>Gói tham gia<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="maso" value="<?=$item['goi']?> $" class="input" style="width:400px;" readonly="readonly"/><br /><br />       
   
	<b>Họ tên<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="hoten" value="<?=$item['hoten']?>" class="input" style="width:400px;"/><br /><br />
   <b>Mã số<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="maso" value="<?=$item['maso']?>" class="input" style="width:400px;" readonly="readonly"/><br /><br />       
   <b>Điện thoại<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="dienthoai" value="<?=$item['dienthoai']?>" class="input" style="width:400px;"/><br /> <br />
   <b>Email<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="email" value="<?=$item['email']?>" class="input" style="width:400px;"  /><br /><br />
   <b>Địa chỉ<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="diachi" value="<?=$item['diachi']?>" class="input" style="width:400px;"/><br /><br />
  
  
   <b>User<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="user" readonly="readonly" value="<?=$item['user']?>" class="input" style="width:400px;"/><br /><br />
   <b>Mật khẩu</b> <input type="text" name="matkhau" id="matkhau" class="input" style="width:400px;"   /><br /> <br />
   <b>Ví Dogecoin<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="dogecoin" value="<?=$item['vi']?>" class="input" style="width:400px;"  /><br /><br />
   <b>QR Dogecoin:</b><img src="<?=_upload_product.$item['qr']?>"  alt="NO PHOTO" width="170" height="170"/><br />
   <b>Thay đổi QR:</b> <input type="file" name="file" /><br />
   <!--
   <b>Tài khoản Vietcombak<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="taikhoan" value="<?=$item['taikhoan']?>" class="input" style="width:400px;" /><br /><br />
   <b>Chủ TK<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="chutaikhoan" value="<?=$item['chutaikhoan']?>" class="input" style="width:400px;"/><br /><br />
   <b>CMND<span style="font-style:italic; color:#f00">(*)</span></b> <input type="text" name="cmnd" value="<?=$item['cmnd']?>" class="input" style="width:400px;"/><br /><br />
    <b>Chi nhánh NH</b> <input type="text" name="chinhanh" value="<?=$item['chinhanh']?>" class="input" style="width:400px;"/><br /><br />        
	-->
    <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
    <input type="hidden" name="id_lists" id="id_lists" value="<?php if($_REQUEST['id_lists']!='') echo'&id_list='. $_REQUEST['id_lists'];?>" />
    <input type="hidden" name="id_cat1s" id="id_cat1s" value="<?php if($_REQUEST['id_cat1s']!='') echo'&id_cat1='. $_REQUEST['id_cat1s'];?>" />
    <input type="hidden" name="trangthais" id="trangthais" value="<?php if($_REQUEST['trangthais']!='') echo'&trangthai='. $_REQUEST['trangthais'];?>" />
    <input type="hidden" name="batdaus" id="batdaus" value="<?php if($_REQUEST['batdaus']!='') echo'&batdau='. $_REQUEST['batdaus'];?>" />
    <input type="hidden" name="ketthucs" id="ketthucs" value="<?php if($_REQUEST['ketthucs']!='') echo'&ketthuc='. $_REQUEST['ketthucs'];?>" />
    <input type="hidden" name="curPage" id="curPage" value="<?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>" />
    </br> </br>
   	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=product&act=man<?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>'" class="btn" />
</form>




 <style type="text/css">
 
 .dangky5 {
	 float:left;
	 width:560px;
	 font-size:13px;
 }
 .dangky6 {
	 float:left;
	 width:255px;
	 margin:5px 0 5px 10px;
 }
 .nhaplieu b{
	 width:100px;
	
 }

 </style>
 



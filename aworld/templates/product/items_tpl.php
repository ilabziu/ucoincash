<?php
	session_start();
	$session=session_id();
	$_SESSION['url']="";

/*
	$sqlcho = "select id,maso from table_cho where id>0 order by id asc ";
	$d->query($sqlcho);		
	$danhsachcho = $d->result_array();
	
	for($i=0;$i<count($danhsachcho);$i++){
		
		$pinn = pinhientai($danhsachcho[$i]['maso'])+1;
		
		$sqlupr = "UPDATE table_product SET sopin = ".$pinn." WHERE  maso='".$danhsachcho[$i]['maso']."'";
		$d->query($sqlupr);
		
		$sqlxoa = "delete from table_cho where  id=".$danhsachcho[$i]['id'];
		$d->query($sqlxoa);
	}
	*/



?>


<script>
$(document).ready(function() {
$("#chonhet").click(function(){
	var status=this.checked;
	$("input[name='chon']").each(function(){this.checked=status;})
});

$("#xoahet").click(function(){
	var listid="";
	$("input[name='chon']").each(function(){
		if (this.checked) listid = listid+","+this.value;
    	})
	listid=listid.substr(1);	 //alert(listid);
	if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
	hoi= confirm("Bạn có chắc chắn muốn xóa?");
	if (hoi==true) document.location = "index.php?com=product&act=delete&listid=" + listid;
});
});
</script>



<link rel="stylesheet" type="text/css" href="./media/css/blitzer/jquery-ui-1.8.18.custom.css"/>
<script type="text/javascript" src="./media/scripts/jquery-ui-1.8.18.custom.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){						
	var dates = $( "#batdau, #ketthuc" ).datepicker({
			defaultDate: "+1w",
			dateFormat: 'dd/mm/yy',
			changeMonth: true,			
			maxDate: 0,
			numberOfMonths: 1,
			onSelect: function( selectedDate ) {
				var option = this.id == "batdau" ? "minDate" : "maxDate",
					instance = $( this ).data( "datepicker" ),
					date = $.datepicker.parseDate(
						instance.settings.dateFormat ||
						$.datepicker._defaults.dateFormat,
						selectedDate, instance.settings );
				dates.not( this ).datepicker( "option", option, date );
			}
		});
		
    })
</script>





<script type="text/javascript">
function doEnter(evt){
	// IE					// Netscape/Firefox/Opera
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
		onSearch(evt);
	}
}


function onSearch(evt) {
	
		var batdau = document.getElementById("batdau").value;
		var ketthuc = document.getElementById("ketthuc").value;
		//var id_list = document.getElementById("id_list").value;
		var trangthai = document.getElementById("trangthai").value;		
		var keyword = document.getElementById("keyword").value;
				
		//var encoded = Base64.encode(keyword);
	    location.href = "index.php?com=product&act=man&batdau="+batdau+"&ketthuc="+ketthuc+"&trangthai="+trangthai+"&keyword="+keyword;
		loadPage(document.location);
		
		
}


</script>

<?php
function get_main_list()
	{
		$sql="select ten_vi,id from table_product_list order by stt asc";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_list" name="id_list" class="main_font">
			<option value="">Cấp bậc </option>			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==$_REQUEST['id_list'])
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
		$sql="select ten_vi,id from table_product_cat1 order by stt asc";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_cat1" name="id_cat1" class="main_font">
			<option value="">Gói đầu tư </option>			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==$_REQUEST['id_cat1'])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
	
	function trangthai()
	{
				
		$str='
			<select id="trangthai" name="trangthai" class="main_font">
			<option value="0"';
			if($_REQUEST['trangthai']==0) $str .='selected';
		$str.='>Trạng thái</option>
			<option value="1"';
			if($_REQUEST['trangthai']==1) $str .='selected';
		$str.='>Chưa kích hoạt</option>	
		<option value="2"';
			if($_REQUEST['trangthai']==2) $str .='selected';
		$str.='>Đã kích hoạt</option>					
			</select>
			';	
		return $str;
	}
    
	

?>
<?php if($_SESSION['login']['username']=="king" ){?>
<h3> <a href="index.php?com=product&act=add">Thêm nhân viên</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tổng: <?=$tongso?></h3>
<?php } else { ?>

<h3> Tổng số người: <?=$tongso?></h3>
<?php } ?>
<!--
<div style="float:left; margin-bottom:5px">
        <div style="float:left">
            <form name="frm" method="post" action="index.php?com=export8&act=save&curPage=<?=$_REQUEST['curPage']?>" enctype="multipart/form-data" class="nhaplieu">
                   <input type="submit" value="Export Excel" class="btn" style="height:25px; border-radius:5px; background:#060; color:#fff; line-height:20px; cursor:pointer" />
                   <input type="hidden"  name="id_listz" id="id_listz" value="<?=$_GET['id_list']?>" class="input" />
                   <input type="hidden"  name="trangthaiz" id="trangthaiz" value="<?=$_GET['trangthai']?>" class="input" />
                   <input type="hidden"  name="batdauz" id="batdauz" value="<?=$_GET['batdau']?>" class="input" />
                   <input type="hidden" name="ketthucz" id="ketthucz" value="<?=$_GET['ketthuc']?>" class="input" />
                   <input type="hidden" name="keywordz" id="keywordz" value="<?=$_GET['keyword']?>" class="input" />
                  
            </form>        
        </div>
       
        
        
</div>
-->
<div style="clear:both"></div>

Tìm kiếm: 
&nbsp;<input name="keyword" id="keyword" type="text" placeholder="User"  style="width:120px" />
&nbsp;<?=trangthai();?>&nbsp;&nbsp;&nbsp;
<!--&nbsp;<?=get_main_list();?>&nbsp;&nbsp;&nbsp;-->
&nbsp;&nbsp;&nbsp;Từ ngày <input type="text" name="batdau" id="batdau" value="" class="input" />
&nbsp;Đến ngày <input type="text" name="ketthuc" id="ketthuc" value="" class="input" />
&nbsp;<input type="button" value=" Tìm "  onclick="onSearch(event)"/><br /><br />


<table class="blue_table">
	<tr>
        <th style="width:5%;">STT</th>  
          
        <th style="width:15%;">Nhân viên </th> 
        <th style="width:8%;">Mã số </th> 
        <th style="width:8%;">User </th> 
        <th style="width:7%;">Gói tham gia </th>
        <!--<th style="width:5%;">Số F1</th>
        <th style="width:5%;">Số cấp dưới</th>-->
        <th style="width:7%;">Ngày kích hoạt</th>      
        <th style="width:5%;">Kích hoạt</th>
		<th style="width:4%;">Sửa</th>
		<!--<th style="width:5%;">Xóa</th>-->
       
	</tr>
	<?php
	
		
		
	
	 for($i=0, $count=count($items); $i<$count; $i++){
		if($_SESSION['login']['username']!="king" ){}
		
	?>
	<tr>
         <td style="width:5%;"><?=$i+1?></td>
       
        <td style="width:20%; font-weight:bold;"><?=$items[$i]['hoten']?></td>
        <td style="width:7%; font-weight:bold;"><?=$items[$i]['maso']?></td>
        <td style="width:7%; font-weight:bold;"><?=$items[$i]['user']?></td>
        <td style="width:7%; font-weight:bold; color:#00f"><?=number_format($items[$i]['goi'],0, '.', ',')?> $</td>
       <!-- <td style="width:5%; font-weight:bold;"><?=sof1($items[$i]['maso'])?></td>
        <td style="width:5%; font-weight:bold; color:#00f"><?=count(capduoi($items[$i]['maso']))-1?></td>-->
       <td style="width:8%;">
       
		   <?php if($items[$i]['ngaykichhoat']>0)
           echo date('d/m/Y H:i:s',$items[$i]['ngaykichhoat']);
           ?>
       
       </td>
      
      <td style="width:5%;">
		
		 <?php if(@$items[$i]['hienthi']==1){?>
          <img src="media/images/active_1.png" border="0" />
		
         <? } else{ ?>
		   <img src="media/images/active_0.png" border="0" />
         <?php }?> 
		
		 
        </td>
      
		<td style="width:4%;">
          <?php if($_SESSION['login']['username']=="aworld"){?>
        	<a href="index.php?com=product&act=edit<?php if($_REQUEST['id_list']!='') echo'&id_lists='. $_REQUEST['id_list'];?><?php if($_REQUEST['id_cat1']!='') echo'&id_cat1s='. $_REQUEST['id_cat1'];?><?php if($_REQUEST['trangthai']!='') echo'&trangthais='. $_REQUEST['trangthai'];?><?php if($_REQUEST['daily']!='') echo'&dailys='. $_REQUEST['daily'];?><?php if($_REQUEST['quanlyvung']!='') echo'&quanlyvungs='. $_REQUEST['quanlyvung'];?><?php if($_REQUEST['batdau']!='') echo'&batdaus='. $_REQUEST['batdau'];?><?php if($_REQUEST['ketthuc']!='') echo'&ketthucs='. $_REQUEST['ketthuc'];?>&id_list=<?=$items[$i]['id_list']?>&id_cat1=<?=$items[$i]['id_cat1']?>&trangthai=<?=$_REQUEST['trangthai']?>&daily=<?=$items[$i]['daily']?>&quanlyvung=<?=$items[$i]['quanlyvung']?>&batdau=<?=$_REQUEST['batdau']?>&ketthuc=<?=$_REQUEST['ketthuc']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>"><img src="media/images/edit.png" /></a>
          <?php }?>
        </td>
		<!--
        <td style="width:5%;">
        <?php if(@$items[$i]['hienthi']==0 && $_SESSION['login']['username']=="aworld"){?>
       		 <a href="index.php?com=product&act=delete&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" /></a>
        <?php }?>
        </td>
	  -->
    </tr>
	<?php	 }?>
    
    
    </table></br>
  
   <!--<a href="index.php?com=product&act=add"><img src="media/images/add.jpg" border="0"  /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="#" id="xoahet"><img src="media/images/delete.jpg" border="0"  /></a>-->


<div class="paging"><?=$paging['paging']?></div>
<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "capnhat":
		get_gioithieup();
		$template = "setting/item_add";
		break;
	case "save":
		save_gioithieu();
		break;
		
	default:
		$template = "index";
}

function get_gioithieup(){
	global $d, $item;

	$sql = "select * from #_setting limit 0,1";
	$d->query($sql);
	//if($d->num_rows()==0) transfer("Dữ liệu chưa khởi tạo.", "index.php");
	$item = $d->fetch_array();
}

function save_gioithieu(){
	global $d;
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=setting&act=capnhat");
		
	$data['title'] = $_POST['title'];
	$data['keywords'] = $_POST['keywords'];
	$data['description'] = $_POST['description'];
	$data['hotline'] = $_POST['hotline'];
	
	$data['chuchay_vi'] = $_POST['chuchay_vi'];
	$data['chuchay_en'] = $_POST['chuchay_en'];
	
	
	$data['ten_vi'] = $_POST['ten_vi'];
	$data['ten_en'] = $_POST['ten_en'];
	$data['ten_ci'] = $_POST['ten_ci'];
	$data['dienthoai'] = $_POST['dienthoai'];
	$data['diachi_vi'] = $_POST['diachi_vi'];
	$data['diachi_en'] = $_POST['diachi_en'];
	$data['diachi_ci'] = $_POST['diachi_ci'];
	$data['toado'] = $_POST['toado'];
	$data['email'] = $_POST['email'];
    $data['website'] = $_POST['website'];
	
	$data['yahoo'] = $_POST['yahoo'];
    $data['skype'] = $_POST['skype'];
	
	$data['facebook'] = $_POST['facebook'];
	$data['youtube'] = $_POST['youtube'];
    $data['google'] = $_POST['google'];
	$data['twitter'] = $_POST['twitter'];
	$data['trian'] = $_POST['trian'];
	$data['gia'] = $_POST['gia'];
	$data['taikhoan'] = $_POST['taikhoan'];
	$data['chutaikhoan'] = $_POST['chutaikhoan'];
	$data['chinhanh'] = $_POST['chinhanh'];
	$data['cancap'] = $_POST['cancap'];
	$data['matkhau'] = $_POST['matkhau'];
	
	if($_POST['cho']!="")
	$data['cho'] = $_POST['cho'];
	
	if($_POST['nhan']!="")
	$data['nhan'] = $_POST['nhan'];
		
	if($_POST['thoigiancho']!="")
	$data['thoigiancho'] = $_POST['thoigiancho'];
	
	
	if($_POST['thoigiannhan']!="")
	$data['thoigiannhan'] = $_POST['thoigiannhan'];
	
	if($_POST['thoigiandatlenh']!="")
	$data['thoigiandatlenh'] = $_POST['thoigiandatlenh'];
	
	if($_POST['vi']!="")
	$data['vi'] = $_POST['vi'];
	
	
	
	$d->reset();
	$d->setTable('setting');
	if($d->update($data))
		header("Location:index.php?com=setting&act=capnhat");
	else
		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=setting&act=capnhat");
}

?>
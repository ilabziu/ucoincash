<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
        elements : "",
		theme : "advanced",
		convert_urls : false,
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,imagemanager,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
height:"50px",
    width:"100%",
	remove_script_host : false,

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>




<h3>Thiết lập hệ thống</h3>

<form name="frm" method="post" action="index.php?com=setting&act=save" enctype="multipart/form-data" class="nhaplieu">
	<b>Title:</b> <input type="text" name="title" value="<?=@$item['title']?>" class="input" /><br /><br>
	<b>Keywords</b> 
	<textarea name="keywords" id="keywords" cols="45" rows="5"><?=@$item['keywords']?></textarea>
  <br><br />

	<b>Description</b> 
	<textarea name="description" id="description" cols="45" rows="5"><?=@$item['description']?></textarea>
  <br><br />
  
 <b>Tên công ty:</b> <input type="text" name="ten_vi" value="<?=@$item['ten_vi']?>" class="input" style="width:500px" /><br /><br>
 <!-- <b>Mật khẩu chung:</b> <input type="text" name="matkhau" value="<?=@$item['matkhau']?>" class="input" style="width:500px" /><br /><br>
 
  <b>Thời gian đặt lệnh:</b> <input type="text" name="thoigiandatlenh" value="<?=@$item['thoigiandatlenh']?>" class="input" style="width:500px" /><br /><br>
  <b>Thời gian cho:</b> <input type="text" name="thoigiancho" value="<?=@$item['thoigiancho']?>" class="input" style="width:500px"/><br /><br>
  <b>Thời gian nhận:</b> <input type="text" name="thoigiannhan" value="<?=@$item['thoigiannhan']?>" class="input" style="width:500px"/><br /><br>
-->
 
  
    <!--
    <b>Email:</b> <input type="text" name="email" value="<?=@$item['email']?>" class="input"  style="width:500px"/><br /><br>
    <b>Website:</b> <input type="text" name="website" value="<?=@$item['website']?>" class="input" style="width:500px"/><br /><br>
   -->
   <b>Thông báo:</b> <input type="text" name="website" value="<?=@$item['website']?>" class="input" style="width:500px"/><br /><br>
   <?php if($_SESSION['login']['username']=='king'){?>
   <b>Ví:</b> <input type="text" name="vi" value="<?=@$item['vi']?>" class="input" style="width:500px"/><br /><br>
   <?php }?>
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=setting&act=capnhat'" class="btn" />
</form>
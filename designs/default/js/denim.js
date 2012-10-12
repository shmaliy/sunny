function loadManagerToolBar(section_id){
	if(section_id == undefined || section_id == null)section_id = 0;
	$.ajax({
		   type: "POST",
		   url: "ajax.php",
		   data: "type=loadManagerToolBar&sectionId="+section_id,
		   success: function(msg){
		    //alert( "Data Saved: " + msg );
			$("#tree").html(msg);
		   }
		 });	
}

function loadTree(section_id){
	if(section_id == undefined || section_id == null)section_id = 0;
	$.ajax({
		   type: "POST",
		   url: "ajax.php",
		   data: "type=loadTree&sectionId="+section_id,
		   success: function(msg){
		    //alert( "Data Saved: " + msg );
			$("#tree").html(msg);
		   }
		 });	
}

function addChildSection(section_id){
	prefix = "add_";
	section_id = section_id.replace(prefix, "");
	
	$.ajax({
		   type: "POST",
		   url: "ajax.php",
		   data: "type=insertSection&sectionId="+section_id,
		   success: function(msg){
		     //alert( "Data Saved: " + msg );
			//$("#content_right").html(msg);
			getSection(msg);
			loadTree(0);
		   }
		 });
}

function editSection(section_id){
	prefix = "edit_";
	//alert(section_id);
	getSection(section_id.replace(prefix, ""));
}

function getSection(section_id){
	$.ajax({
		   type: "POST",
		   url: "ajax.php",
		   data: "type=getSection&sectionId="+section_id,
		   success: function(msg){
		     //alert( "Data Saved: " + msg );
			$("#content_right").html(msg);
		   }
		 });	
}

function updateSection(){
	var sId = document.getElementById("section_id").value;	
	data = {
			type:					"updateSection",
			sectionId:				document.getElementById("section_id").value,
			
			menu_title: 			document.getElementById("menu_title").value,
			menu_tip:				document.getElementById("menu_tip").value,
			menu_url:				document.getElementById("menu_url").value,
			
			content_page_title:		document.getElementById("content_page_title").value,
			content_is_published:	document.getElementById("content_is_published").checked,
			content_is_folder:		document.getElementById("content_is_folder").checked,
			content_description:	document.getElementById("content_description").value,
			
			module_id:				document.getElementById("module").options[document.getElementById("module").selectedIndex].id,
			template_id:			document.getElementById("template").options[document.getElementById("template").selectedIndex].id
	}
	
	//alert(document.getElementById("module").options[document.getElementById("module").selectedIndex].id);
	$.ajax({
		   type: "POST",
		   url: "ajax.php",
		   data: data,//"type=updateSection&sectionId="+section_id,
		   success: function(msg){
		     //alert( "Data Saved: " + msg );
			$("#content_right").html(msg);
			getSection(sId);
			loadTree(0);
		   }
		 });	
}



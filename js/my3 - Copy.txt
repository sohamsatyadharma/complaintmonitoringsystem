var pstr="";
var hash="";
var dhash="";

$(document).ready(function(){
     var flag=0;
	 var str=$(location).attr('search');
	 pstr=str;
	 var url=$(location).attr('hash');
	 dhash=url.substr(url.indexOf("#"),url.length);
	 if(dhash.indexOf("+")==-1){
		 hash=dhash.substr(dhash.indexOf("#")+1,dhash.length);
	 }
	 else{
	 hash=dhash.substr(dhash.indexOf("#")+1,dhash.indexOf("+")-1);
	 } 
	 if("#"+hash==dhash || dhash==""){
		 $("#h1title").text("Upload Details Of Event");
		 $("#admin-submit").text("Submit");
	 }
	 else{
		 //alert(hash);
		 $("#h1title").text("Edit Details Of Event");
		 $("#admin-submit").text("Save");
		 $("#idname").val(hash);	
		 $.getJSON('formloader.php',{id:hash},function (json) {
		 		$('#headupdate').val(json.heading);
				//$('.single-post-image-detail img').attr("src","uploads/"+json.id+"."+json.type);
				$('#dateupdate').val(json.date);
				$('#contentupdate').html(json.discription);
					
		 });	 
	 }
	 
	 
	 $('.cross i').click(function(event){
		 if($("#h1title").text()=="Upload Details Of Event"){
		 event.preventDefault()
		 if(dhash==""){
		 window.location="index.php"+pstr;
		 }
		 else{
			 if(hash[0]-'0'>0){
				window.location="detail.php"+pstr+"#"+hash;
			 }
			 else{
				 window.location="club.php"+pstr+"#"+hash;
			 }
		 }
		 }
		 else if("#"+hash!=dhash){
		 event.preventDefault()
		 window.location="detail.php"+pstr+"#"+hash;
		 } 
	 });
	 
	 
	/* $('.dropdown-menu li a').click(function(event) {
			event.preventDefault();			
			$('#bt').val($(this).html());
	});*/
	 
	 //getting user name
	    var temp=pstr.replace('?usrnm=','');
        $('#bt').val(temp); 
		$('#bt').change(function(event){
			var temp1=pstr.replace('?usrnm=','');
			event.preventDefault();
			$('#bt').val(temp1); 
		});
		
		  
	 
	 
	 
	 //on form submit
	 $('#admin-submit').click(function(event){
		 flag=0;
		 event.preventDefault();
		 $(document).scrollTop(0);
		 $('#below-title').text("");
		 
		 if($('#headupdate').val()==""){
			 $('#below-title').append("Error : Fill in the heading.");
			 $('#headupdate').addClass("modal-error2");
		 }
		 else{
			 flag++;
			 $('#headupdate').removeClass("modal-error2");
		 }
		 var date=$('#dateupdate').val();
		 if($('#dateupdate').val()==""){
			 $('#below-title').append("<br>Error : Fill in the date.");
			 $('#dateupdate').addClass("modal-error2");
			 
		 }
		 else{
			 if($('#dateupdate').val().length==8 && $('#dateupdate').val().indexOf("/")!= -1){
				 $('#dateupdate').removeClass("modal-error2");
			 }
			 else{
							 $('#below-title').append("<br>Error : Invalid format for date");
							 flag--;
							 $('#dateupdate').addClass("modal-error2");
			 }
			 flag++;
		 }

		 
		 if($('#upload-file-info').text()==""){
			 $('#below-title').append("<br>Error : Upload the image.");
		 }		 
		 else{
			 var temp=$('#upload-file-info').text();
			 
			 temp=temp.substr(temp.indexOf(".")+1,temp.length);
			 
			 if(temp=="jpeg" || temp=="JPEG" || temp=="JPG" || temp=="jpg" || temp=="GIF" || temp=="gif" || temp=="png" || temp=="PNG" || temp==                                                                     "jpe" ||temp=="JPE" ){
				 var k=temp ;
			 }
			 else{
				 flag--;
				 $('#below-title').append("<br>Error : Invalid image format ");
			 }
				 
			 flag++;
		}		 
		
		if($('#contentupdate').val()==""){
			$('#below-title').append("<br>Error : Give information about the events.");
		    $('#contentupdate').addClass("modal-error2");
			 
		 }
		 else{
			 flag++;
			 $('#contentupdate').removeClass("modal-error2");
		 }   
		 
     	if($('#bt').val()=="Select the Club"){
			 		 $('#below-title').append("<br>Error : Fill in the Club-name.");
					 $('#bt').addClass("modal-error2");
		 }
		 else{
			 flag++; 
			 $('#bt').removeClass("modal-error2");
		 }
		 if(flag==5){	  
		     /*var s=pstr.replace('?usrnm=','');*/
            /*$.post("form.php",{addr:document.referrer,usr:s});*/
			$('#admin-form1').submit();
		 }
	 
	 });
	
});



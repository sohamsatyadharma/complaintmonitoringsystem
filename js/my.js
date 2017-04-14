var pstr="";
var hash="";
var dhash="";	 
var adminli=0;
var userli=0;
var str;  
  
  $(document).ready(function(){
	    //to load username
	  str=$(location).attr('search');
	  pstr=str;
	 str=str.replace('?usrnm=','');
	 $('#userli').text(str); 
	 $('#adminli').text(str);	

	 if($('#adminli').text()==str){
		 adminli=1;
	 }
	 if($('#userli').text()==str){
		 userli=1;
	 }
	
	//to load latest news
					
				var src0="img/news/no1.jpg";
				var src1="img/news/no2.jpg";
				var src2="img/news/no3.jpg";
				var arr=[src0,src1,src2];
				var count=0;
				var textarr=["Baby among three dead after driver mows down pedestrians in Kolkata, wounding dozens", "Drug lord 'El Chapo' lands in Kolkata after extradition from Bangladesh, to face judge Friday", "Biker's gang thrashes youth, cops sit on FIR"];
				function rotator(){
					var index;
					index=count%3;
					count++;
					/*
					if(count%4==0){
						index=1;
						count++;count++;
					}
					else{
						index=count%4;
						count++;	
					}
					*/
					$('.leftwala h2').text(textarr[index]);
					$('#i1').fadeIn(1000);
					$('#i1').attr("src",arr[index]);
					$('.leftwala h2').fadeIn(1000);
					$('#i1').delay(4200);
					$('.leftwala h2').delay(4200);
					$('#i1').fadeOut(1000);
					$('.leftwala h2').fadeOut(1000);
				}				
				rotator();
				setInterval(function(){rotator()},6200);
	

	  
	  	 //to load the detailpage
	     	var url=$(location).attr('hash');
	        dhash=url.substr(url.indexOf("#"),url.length);
			hash=dhash.substr(dhash.indexOf("#")+1,dhash.length);
		 
	 	 $.getJSON('detailloader.php',{id:hash},function (json) {
		 		$('#detailhead').text(json.heading);
				$("#below-detail-head").text("   ~ "+json.club);
				$('.single-post-image-detail img').attr("src","uploads/"+json.id+"."+json.type+"?<?=rand(111,99999)?>");
				$('#detail .single-post-info').html('<i class="glyphicon glyphicon-time"></i> '+json.date);
				$('#detail p').html(json.discription);
					
		 });
	  
	  
	  //to highlight home botton
	  if($(location).attr('pathname').indexOf("index")!=-1){
		  $('#homeli').addClass("active");
	  }
	  
	  //the myprofile function
	  $("#myprofileli").click(function(event){
		  event.preventDefault();
		 $('.distance').addClass('hide');
		$('.section-white').css("margin-top","100px");
		 $('.clubicons').text("Subscribe");
		 $('.clubicons').attr("href","#");
		 $('.section-title h1').text("Subscribe Your Interest"); 
		  $('#myprofileli').addClass("active");
		   $('#homeli').removeClass("active");
		   
		 window.location="profile.php"+pstr;
	  });
	  //loading profile
	  	 	 $.getJSON('profile-loader.php',{user_id:str},function (json) {
		 		$('#detailsprofile h2').text(json.name);
				$("#detailsprofile h4").text(json.address);
				$('#detailsprofile p:first').text(json.adhar);
				$('#detailsprofile p:last').text(json.contact);
				
				
               $('#prof1 img').attr("src","img/profile/"+str+"."+"jpg");
			   	
		 });


var htmlprofile= " <div role='header' class='complain'><div class='left'><h3></h3></div><div class='right'>Complaint No :<span class='id'>  </span><br />Date :<span class='date'></span></div></div><div role='content' class='content'><span style='font-weight:bold'>Location :   </span><span class='location'></span><br /><br /><h5 style='font-weight:bold; font-size:1.2em; '>Description : </h5><p class='describe'></p><br /><br /><h5 style='font-weight:bold; font-size:1.2em; '>Status : </h5><p class='status'></p><a href='reports/ITBYA_209.pdf' target='_blank'><button class=pdf' >Download Fir</button></a><a href='vedio.php' target='_blank'><button class='pdf' >Vedio Chat With Officer</button></a></div>";

	  	 	 $.getJSON('profile-loader2.php',{user_id:str},function (json) {
            	 var len=json.length-1; 
				 //alert(json[1].heading);
	             for(i=1;i<=len;i++){
					 $('.accordi:last').append(htmlprofile);
					 $(".left h3:last").text(json[i].heading);
				$('.id :last').text(json[i].complain_hash);
				$('.date :last').text(json[i].timestamp);
				$('.describe:last').text(json[i].description);
				$('.location:last').text(json[i].location);
				$('.status:last').text(json[i].recent_status);
				 }
			   	
		 });


	  
	  
	  
	  
	  //the update function
	  $("#updateli").click(function(event){
		  event.preventDefault();
		 window.location="form.php"+pstr+dhash; 
	  });
	  
	  //the edit function
	  	  $("#editli").click(function(event){
		  event.preventDefault();
		 window.location="form.php"+pstr+dhash+"+edit"; 
	  });
	  
	  	  
      //hiding of edit option
	 		$.post("editbutton.php",{id:hash,club:str
											},function(data){
												if(data=="yes"){
													$("#editli").removeClass("hide");
												}	
												});
	 
	 



	 //response to club icons clicks	 
	 	 $('.clubicons').click(function(event){
			 event.preventDefault();
			 	window.location=$(this).attr('href')+pstr+'#'+$(this).attr('value');
	 });
       
	   //clicking on home
	   $('#homeli a').click(function(event){
			 event.preventDefault();
			 if(adminli==1 && userli!=1){
			 	window.location=$(this).attr('href')+'?usrnm='+$('#adminli').text();
			 }
			 else if(userli==1 && adminli!=1){
				window.location=$(this).attr('href')+'?usrnm='+$('#userli').text();
		  	}
			else{
				 window.location=$(this).attr('href');
			}
	 });
	
//jQuery to collapse the navbar on scroll
$(window).scroll(function(event) {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

// to select from dropown menu
		$('.popup-form .dropdown-menu li a').click(function(event) {
			event.preventDefault();
			$(this).parent().parent().prev('button').html($(this).html());
		});
		
//to load forms(modal)
var tempvalue="";
$('.input-modal').on("focus",function(event){
	tempvalue=$(this).val();
	$(this).val("");
	$(this).focusout(function(){
		if($(this).val()==""){
			$(this).val(tempvalue);
		}
	});
});

$('.input-modal-pass').on("focus",function(event){
	tempvalue=$(this).val();
	$(this).attr("type","password");
	$(this).val("");
	$(this).focusout(function(){
		if($(this).val()==""){
			$(this).attr("type","text");
			$(this).val(tempvalue);
		}
	});
});	

		
	
// to use ajax for signup username  
   $('#username1').keyup(
   function(){ 
	   event.preventDefault();
	   var temp_id = $('#username1').val();
           $.post("user_id.php",{text:temp_id},function(data){
			   if(data=="got"){
				   $('.modal-content .modal-msg').text("");
				   $('.modal-content .modal-msg').append("<br>Username exists.");
			       $('#username1').addClass("modal-error");
				   
			   }
			   else{
				   $('.modal-content .modal-msg').text("");
				   $('#username1').removeClass("modal-error");
			   }
		   });
   });
   
 
//to validate the form and use ajax for registration   
    $('#signup').click(function(event){
		event.preventDefault();
		var flag;
		flag=0;
		$('.modal-content .modal-msg').text("");
		if($('#fullname1').val() !="" && $('#fullname1').val() !="Full Name"&& $('#fullname1').val().length<=30){
			flag++;
			$('#fullname1').removeClass("modal-error");
		}
		else if($('#fullname1').val() =="" || $('#fullname1').val() =="Full Name" || $('#fullname1').val().length>30){
			$('.modal-content .modal-msg').append("ERROR : Name should be valid and less than 30 characters.");
			$('#fullname1').addClass("modal-error");
		}
		 
		if($('#adhar').val() !="" && $('#adhar').val() !="Adhar"  && $('#adhar').val().length<=30){
			flag++;
			$('#adhar').removeClass("modal-error");
		}
		else if($('#adhar').val() =="" || $('#adhar').val() =="Adhar" || $('#adhar').val().length>30){
			$('.modal-content .modal-msg').append("<br>ERROR : adhar should be valid.");
			$('#adhar').addClass("modal-error");
		}
		
				 
		if($('#contact').val() !="" && $('#contact').val() !="Contact"  && $('#contact').val().length<=30){
			flag++;
			$('#contact').removeClass("modal-error");
		}
		else if($('#contact').val() =="" || $('#contact').val() =="Contact" || $('#conatact').val().length>30){
			$('.modal-content .modal-msg').append("<br>ERROR : contact should be valid.");
			$('#contact').addClass("modal-error");
		}

		if($('#username1').val() !=""  && $('#username1').val() !="Username" && $('#username1').val().length<=20 ){
			flag++;
			$('#username1').removeClass("modal-error");
		 	//$('#username1').attr("placeholder")=$('#username1').val();
		}
		else if($('#username1').val() =="" || $('#username1').val() =="Username" || $('username1').val().length>20){
			$('.modal-content .modal-msg').append("<br>ERROR : Username should be valid and less than 20 characters.");
			$('#username1').addClass("modal-error");
		}
		if($('#password1').val() !="" && $('#password1').val().length<=10){
			flag++;
			$('#password1').removeClass("modal-error");
		}
		else if($('#password1').val() =="" || $('#password1').val().length>10)
		{
			$('.modal-content .modal-msg').append("<br>ERROR : Password should be less than 10 characters.");
			$('#password1').addClass("modal-error");
		}
		if( $('#passwordre1').val() == $('#password1').val()   && $('#passwordre1').val()!="" ){
			flag++;
			$('#passwordre1').removeClass("modal-error");
		}
		else if($('#passwordre1').val() != $('#password1').val()  || $('#passwordre1').val()=="" )
		{
			$('.modal-content .modal-msg').append("<br>ERROR : Passwords didn't match.");
			$('#passwordre1').addClass("modal-error");
			$('#password1').addClass("modal-error");
		}
		if($("#squaredOne").is(':checked')){
			flag++;
		}
		else{
			$('.modal-content .modal-msg').append("<br>ERROR : Please accept terms and conditions.");
		}
		
		if(flag>=7){
		//call ajax;
		$.post("register.php",{fullname1:$("#fullname1").val(),adhar:$("#adhar").val(),username1:$("#username1").val(),
											password1:$("#password1").val(),contact:$("#contact").val()
											},function(){
												alert("done");
											});
		
		$('#username1').val("Username");
		$('#fullname1').val("Full Name");
		$('.input-modal-pass').attr("type","text");
		$('#passwordre1').val("Password(rewrite)");
		$('#password1').val("Password");
		$('#adhar').val("Adhar");
		$('#contact').val("Contact");	
		$("#modal1").modal('hide');
		//$('body').removeClass('model-open');
		//$('.model-backdrop').remove();
		} 
});
	  
//to validate the form and use ajax for login
   //var gdata;
   $('#login').click(function(event){
		event.preventDefault();
		var flag;
		flag=0;
		$('.modal-content .modal-msg2').text("");
		if($('#username3').val() !=""  && $('#username3').val() !="Username" && $('#username3').val().length<=20 ){
			flag++;
			$('#username3').removeClass("modal-error");
		 	//$('#username1').attr("placeholder")=$('#username1').val();
		}
		if($('#password3').val() !="" && $('#password3').val().length<=10){
			flag++;
			$('#password3').removeClass("modal-error");
		}
		if(flag>=2){
				$.post("login.php",{username3:$("#username3").val(),
											password3:$("#password3").val()
											}, function(data){
											   if(data!="fail"){
													$("#modal3").modal('hide');
													//gdata=data;
													var tempurl=$(location).attr('pathname');
													window.location= tempurl+'?usrnm='+data+dhash;
													
												}
												else if(data=="fail"){
													$('.modal-content .modal-msg3').text("");
													$('.modal-content .modal-msg3').append("ERROR : Invalid username or password");
													            $('#password3').addClass("modal-error");
			                                                    $('#username3').addClass("modal-error");
												}
											});
			   
		}
		else{
			$('.modal-content .modal-msg3').text("");
			$('.modal-content .modal-msg3').append("ERROR : Invalid username or password")
            $('#password3').addClass("modal-error");
			$('#username3').addClass("modal-error");
		}
        $('#username3').val("Username");
		$('.input-modal-pass').attr("type","text");
		$('#password3').val("Password");
        //alert(gdata);
		
  });
 
  
  
  
//signing  out
  
  $('#signoutli a').click(function(event){
	 $.post("logout.php",function(data){
		  if(data=="done"){
			  window.location="index.php";
		  }
		  else{
			  alert("problem with logging out");
		  }
	 });
  });
  
  
  
//admin login
$admin_club="ert";
   $('#admin-login').click(function(event){
		event.preventDefault();
		var flag;
		flag=0;
		$('.modal-content .modal-msg2').text("");
		if($('#username2').val() !=""  && $('#username2').val() !="Username" && $('#username2').val().length<=20 ){
			flag++;
			$('#username2').removeClass("modal-error");
		 	//$('#username1').attr("placeholder")=$('#username1').val();
		}
		if($('#password2').val() !="" && $('#password2').val().length<=20){
			flag++;
			$('#password2').removeClass("modal-error");
		}
		if($('#dLabel').html()!='' && $('#dLabel').html()!='Club'){
			flag++;
		}
		if(flag>=3){
				$.post("login-admin.php",{username2:$("#username2").val(),
											password2:$("#password2").val(),club:$('#dLabel').html()
											}, function(data){
												if(data!="fail"){
													$("#modal2").modal('hide');
													var tempurl=$(location).attr('pathname');
													window.location=tempurl+'?usrnm='+data+dhash ;
													
												}
												else if(data=="fail"){
													$('.modal-content .modal-msg2').text("");
													$('.modal-content .modal-msg2').append("ERROR : Invalid username or password");
													            $('#password2').addClass("modal-error");
			                                                    $('#username2').addClass("modal-error");
												}
											});
			   
		}
		else{
			$('.modal-content .modal-msg2').text("");
			$('.modal-content .modal-msg2').append("ERROR : Invalid username or password")
            $('#password2').addClass("modal-error");
			$('#username2').addClass("modal-error");
		}
        $('#username2').val("Username");
		$('.input-modal-pass').attr("type","text");
		$('#password2').val("Password");

  });  
 


  //clicking crosson modal
  $(".modal i").click(function(){
	  $(this).parent().parent().parent().parent().modal("hide");
  });
	 
	 
  });


//to validate the mail-form and use ajax   
$('#mailus').click(function(event){
		event.preventDefault();
		var flag;
		flag=0;
		$('.modal-content .modal-msg-mail').text("");
		if($('#fullname4').val() !="" && $('#fullname4').val() !="Full Name"&& $('#fullname4').val().length<=30){
			flag++;
			$('#fullname4').removeClass("modal-error");
		}
		else if($('#fullname4').val() =="" || $('#fullname4').val() =="Full Name" || $('#fullname4').val().length>30){
			$('.modal-content .modal-msg-mail').append("ERROR : Name should be less than 30 characters.");
			$('#fullname4').addClass("modal-error");
		}
		 
		if($('#email4').val() !="" && $('#email4').val() !="Email Address"  && $('#email4').val().length<=40 && $('#email4').val().indexOf("@")!=-1){
			flag++;
			$('#email4').removeClass("modal-error");
		}
		else if($('#email4').val() =="" || $('#email4').val() =="Email Address" || $('#email4').val().length>40 || $('#email4').val().indexOf("@")==-1){
			$('.modal-content .modal-msg-mail').append("<br>ERROR : Email should be valid and less than 40 characters.");
			$('#email4').addClass("modal-error");
		}
		
		if($('#textarea4').val() !="" && $('#textarea4').val() !="Compose Mail"){
			flag++;
			$('#textarea4').removeClass("modal-error");
		}
		else if($('#textarea4').val() =="" || $('#textarea4').val() =="Compose Mail"){
			$('.modal-content .modal-msg-mail').append("<br>ERROR : Compose the mail.");
			$('#textarea4').addClass("modal-error");
		}
		
		if(flag>=3){
		//call ajax;
		//alert($("#textarea1").val());
		$.post("mail.php",{fullname1:$("#fullname4").val(),email1:$("#email4").val(),
											content1:$("#textarea4").val()
											});
		
		$('#fullname4').val("");
		$('#email4').val("");
		$('#textarea4').val("");	
		$("#modal4").modal('hide');
		//$('body').removeClass('model-open');
		//$('.model-backdrop').remove();
		} 
});




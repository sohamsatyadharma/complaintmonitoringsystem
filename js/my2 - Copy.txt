$(document).ready(function(){
	
    	 	//for loading heading
	var urlhash=$(location).attr('hash');
	var temphash=urlhash.substr(urlhash.indexOf("#")+1,urlhash.length);
	hash=temphash;
	$('.bloghead h1').text(hash);
	   
	   //to load page 2;
	$.getJSON('clubloader.php',{cl:hash},function (json) {
				var len=json.length;
				var s="";
				if(len>1){
					len--;
				$('#post1 h2').text(json[1].heading);
				$('#post1 .single-post-info').html('<i class="glyphicon glyphicon-time"></i> '+json[1].date);
				$('#post1 p').html(json[1].discription.substr(0,140));
				$('#post1 a').text("Read more");
				$('#post1 img').attr("src","uploads/"+json[1].id+"."+json[1].type);
				s="detail.php"+pstr+"#"+json[1].id;
				$('#post1 a').attr("href",s);
				}
				else{
					$('#post1').addClass("hide");
				}
				
				
				if(len>1){
					len--;
								$('#post2 h2').text(json[2].heading);
				$('#post2 .single-post-info').html('<i class="glyphicon glyphicon-time"></i> '+json[2].date);
				$('#post2 p').html(json[2].discription.substr(0,140));
				$('#post2 a').text("Read more");
				$('#post2 img').attr("src","uploads/"+json[2].id+"."+json[2].type);
				s="detail.php"+pstr+"#"+json[2].id;
				$('#post2 a').attr("href",s);
				}
				else{
					$('#post2').addClass("hide");
				}
				
				
				if(len>1){
					len--;				
								$('#post3 h2').text(json[3].heading);
				$('#post3 .single-post-info').html('<i class="glyphicon glyphicon-time"></i> '+json[3].date);
				$('#post3 p').html(json[3].discription.substr(0,140));
				$('#post3 a').text("Read more");
				$('#post3 img').attr("src","uploads/"+json[3].id+"."+json[3].type);
				s="detail.php"+pstr+"#"+json[3].id;
				$('#post3 a').attr("href",s);				
				}
				else{
					$('#post3').addClass("hide");
				}			
				
				
				
				if(len>1){
					len--;	
								$('#post4 h2').text(json[4].heading);
				$('#post4 .single-post-info').html('<i class="glyphicon glyphicon-time"></i> '+json[4].date);
				$('#post4 p').html(json[4].discription.substr(0,140));
				$('#post4 a').text("Read more");
				$('#post4 img').attr("src","uploads/"+json[4].id+"."+json[4].type);
				s="detail.php"+pstr+"#"+json[4].id;
				$('#post4 a').attr("href",s);				
				}
				else{
					$('#post4').addClass("hide");
				}					
				
				
				
				
				if(len>1){
					len--;
								$('#post5 h2').text(json[5].heading);
				$('#post5 .single-post-info').html('<i class="glyphicon glyphicon-time"></i> '+json[5].date);
				$('#post5 p').html(json[5].discription.substr(0,140));
				$('#post5 a').text("Read more");
				s="detail.php"+pstr+"#"+json[5].id;
				$('#post5 img').attr("src","uploads/"+json[5].id+"."+json[5].type);
				$('#post5 a').attr("href",s);				
				}
				else{
					$('#post5').addClass("hide");
				}
				
				
				
				
						
				if(len>1){			
				len--;
								$('#post6 h2').text(json[6].heading);
				$('#post6 .single-post-info').html('<i class="glyphicon glyphicon-time"></i> '+json[6].date);
				$('#post6 p').html(json[6].discription.substr(0,140));
				$('#post6 a').text("Read more");
				$('#post6 img').attr("src","uploads/"+json[6].id+"."+json[6].type);
				s="detail.php"+pstr+"#"+json[6].id;
				$('#post6 a').attr("href",s);				
				}
				else{
					$('#post6').addClass("hide");
				}	
												
	 });	
	 
	 
	 
	 
	    var tracker=6;

//to load page after clicking on more
$('#more').click(function(event){
	event.preventDefault();
	
		
		var post_html= "<div class=' col-sm-4'><div class='blog-post blog-single-post'><div class='single-post-title'><h2 class='fillh2'></h2></div><div ><img src=''  class='single-post-image'  alt='Post Title'></div><div class='single-post-info filltime'></div>	<div class='single-post-content '><p class='fillin'></p><a class='filla btn'></a></div></div></div>";      
		 			$.getJSON('clubscroller.php',{cl:hash,track:tracker},function (json) {
						var sk="";
				    var len=json.length-1;
					if(len==3){
								 $('.section .container .row').append(post_html);
								 $('.fillin:last').html(json[1].discription.substr(0,140));
								 $('.fillh2:last').html(json[1].heading);
								 $('.filltime:last').html('<i class="glyphicon glyphicon-time"></i> '+json[1].date);
								 $('.single-post-image:last').attr("src","uploads/"+json[1].id+"."+json[1].type);
									$('.filla :last').text("Read more");
									$('.filla :last').addClass("first");
									sk="detail.php"+pstr+"#"+json[1].id;
									$('.first :last').attr("href",sk);								 
								 
		                         $('.section .container .row').append(post_html);
								 $('.fillin:last').html(json[2].discription.substr(0,140));
								 $('.fillh2:last').html(json[2].heading);
								 $('.single-post-image :last').attr("src","uploads/"+json[2].id+"."+json[2].type);
								 $('.filltime:last').html('<i class="glyphicon glyphicon-time"></i> '+json[2].date);																	                                    $('.filla :last').text("Read more");
								    $('.filla :last').addClass("second");
									sk="detail.php"+pstr+"#"+json[2].id;
									$('.second:last').attr("href",sk);	 
								 
		                         $('.section .container .row').append(post_html);
								 $('.fillin:last').html(json[3].discription.substr(0,140));
								 $('.fillh2:last').html(json[3].heading);
								 $('.single-post-image :last').attr("src","uploads/"+json[3].id+"."+json[3].type);
								 $('.filltime:last').html('<i class="glyphicon glyphicon-time"></i> '+json[3].date);								 									$('.filla :last').text("Read more");
								    $('.filla :last').addClass("third");
									sk="detail.php"+pstr+"#"+json[3].id;
									$('.third :last').attr("href",sk);	
								 
								 tracker+=3;
					          }
							  
							  
					else if(len==2){
								 $('.section .container .row').append(post_html);
								 $('.fillin:last').html(json[1].discription.substr(0,140));
								 $('.fillh2:last').html(json[1].heading);
								 $('.filltime:last').html('<i class="glyphicon glyphicon-time"></i> '+json[1].date);
								 $('.single-post-image :last').attr("src","uploads/"+json[1].id+"."+json[1].type);	
								 $('.filla :last').text("Read more");							 												
								    $('.filla :last').addClass("first");
									sk="detail.php"+pstr+"#"+json[1].id;
									$('.first :last').attr("href",sk);	
								 
		                         $('.section .container .row').append(post_html);
								 $('.fillin:last').html(json[2].discription.substr(0,140));
								 $('.fillh2:last').html(json[2].heading);
								 $('.single-post-image :last').attr("src","uploads/"+json[2].id+"."+json[2].type);
								 $('.filltime:last').html('<i class="glyphicon glyphicon-time"></i> '+json[2].date);								 									$('.filla :last').text("Read more");
								    $('.filla :last').addClass("second");
									sk="detail.php"+pstr+"#"+json[2].id;
									$('.second :last').attr("href",sk);	
									
								 tracker+=3;
								 $('#more').addClass('hide');
							  }
							  
							  
					else if(len==1){
								 $('.section .container .row').append(post_html);
								 $('.fillin:last').html(json[1].discription.substr(0,140));
								 $('.single-post-image :last').attr("src","uploads/"+json[1].id+"."+json[1].type);
								 $('.fillh2:last').html(json[1].heading);
								 $('.filltime:last').html('<i class="glyphicon glyphicon-time"></i> '+json[1].date);								 									$('.filla :last').text("Read more");
								    $('.filla :last').addClass("first");
									sk="detail.php"+pstr+"#"+json[1].id;
									$('.first :last').attr("href",sk);	
								 tracker+=3;
								 $('#more').addClass('hide');
							  }
					else{
						$('#more').addClass('hide');
					    }
								  		  
					});	
					
					
});


});


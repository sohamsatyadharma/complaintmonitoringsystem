// JavaScript Document
var sender="ramlal";
var count=0;
var curr_com_id;

$(document).ready(function(){
var	sstr=$(location).attr('search');
var psstr=str.replace('?usrnm=','');	
	//alert(psstr);

$(".chat").click(function(){
	cur_cum_id=$(this).parent().parent().parent().find('.id').html();
	//alert(cur_cum_id);
})

	
$('#btn-chat').click(function(event){
	if($('#btn-input').val()!=""){
		//alert($('#btn-input').val());
						$.post("chat-helper.php",{user_id:psstr,content:$('#btn-input').val(),complain_hash:cur_cum_id
											}, function(data){
												alert("called");
											$('#btn-input').val("");				
						})
	}
})


function chatloader(){
	$.getJSON("chat-loader.php",{complain_hash:cur_cum_id},function(json){
	 
	  
	  
	  var chathtml1= "<li class='left clearfix'><span class='chat-img pull-left'><img src='http://placehold.it/50/55C1E7/fff&text=A' alt='User Avatar' class='img-circle' /></span><div class='chat-body clearfix'><div class='header'><strong class='primary-font'>Authority</strong> <small class='pull-right text-muted timesmall'><span class='glyphicon glyphicon-time'></span></small></div><p class='chatmatter'></p></div></li>"
	  
	 var chathtml2= "<li class='right clearfix'><span class='chat-img pull-right'><img src='http://placehold.it/50/55C1E7/fff&text=ME' alt='User Avatar' class='img-circle' /></span><div class='chat-body clearfix'><div class='header'><strong class='primary-font'>ME</strong> <small class='pull-right text-muted timesmall'><span class='glyphicon glyphicon-time'></span> </small></div><p class='chatmatter'></p></div></li>"  
	 
	 var len=json.length-1; 
	 if(len>count || count==0){
	 for(i=1;i<=len;i++){
		 count=len;
		 if(json[i].user_id!="Authority"){
			 					 $('#firstchat').append(chathtml2);
								 $('.chatmatter:last').html(json[i].content);
								 $('.timesmall:last').html(json[i].timestamp);

		 }
		 else{
			 					 $('#firstchat').append(chathtml1);
								 $('.chatmatter:last').html(json[i].content);
								 $('.timesmall:last').html(json[i].timestamp);
		 }
	 }
	 }
	})
}

				setInterval(function(){chatloader()},4000);
})
$(document).ready(function(){
	
	//ading heading
	var urlhash=$(location).attr('hash');
	var temphash=urlhash.substr(urlhash.indexOf("#")+1,urlhash.length);
	hash=temphash;
	//alert(hash);
	$('#header h1').text(hash);
	   var jstar;
	   //to load page 2;
	$.getJSON('police-loader.php',{station:hash},function (json) {
		$("#map img").attr("src","img/maps/"+hash+".png"+"?<?=rand(111,99999)?>");
		$("#map a").attr("href","img/maps/"+hash+".png"+"?<?=rand(111,99999)?>");
		$("#registered").html(json.cr);
		$("#pending").html(json.cp);
				$("#crid").text(json.cr);
		$("#cpid").text(json.cp);
		$("#inid").text(json.incharge);
		$("#aid").text(json.address);
		$("#phid").text(json.phno);
		jstar=json.star;
		//alert(jstar);
		getstar();
												
	 });	
	 function getstar(){
		if(jstar==1){
			$('#rate').html('<img src="images/star2.png"/><img src="images/star1.png"/><img src="images/star1.png"/><img src="images/star1.png"/><img src="images/star1.png"/>');
		}
		else if(jstar==2){
			$('#rate').html('<img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star1.png"/><img src="images/star1.png"/><img src="images/star1.png"/>');
		}
		else if(jstar==3){
			$('#rate').html('<img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star1.png"/><img src="images/star1.png"/>');
		}
		else if(jstar==4){
			$('#rate').html('<img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star1.png"/>');
		}
		else {
			$('#rate').html('<img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star2.png"/><img src="images/star2.png"/>');
		}
	 }

});


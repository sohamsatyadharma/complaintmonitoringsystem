// JavaScript Document
//$('#figure1 h3').html("are ye naya h bhai");
//alert($('#figure1 a').attr('value'));
//alert(Math.floor(Math.random()*1000)%6);
var k="";
			function checker(){
				if($("#locality").val()!=""){

					if(k==""){
					$.getJSON('station-sort.php',{city:$("#locality").val()},function (json) {
						//alert(json.length);
											k=$("#locality").val();
						var i;
						var j=json.length;
		                   for( i=1;i<=json.length-1;i++){
							   var caller="#figure"+i;
							   var hash=Math.floor(Math.random()*1000)%6;
							   
							   if(i>6){
								  $(caller).removeClass('hide');
							   }
							   //alert($(caller+" "+'h3').html());
							   //alert(hash);
							   $(caller+" "+'h3').html(json[i].name);
							   $(caller+" "+'span').html(json[i].name);
							   $(caller+" "+'a').attr('value',json[i].name);
							   $(caller+" "+'img').attr('href',"img/station/"+hash+".jpg");
						   }
                           for( i=j;i<=6;i++){
							   var caller="#figure"+i;
							   $(caller).addClass('hide');
						   }
					})
				}
				}
			};
			var x=setInterval(function(){checker()},200);
			
		
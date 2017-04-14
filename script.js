$(document).ready(function(){
$("#input_2").click(function(){
var name = $("#form_70194708671461")("#q12_reportDate[month]").val();
//var email = $("#email").val();
//var password = $("#password").val();
//var contact = $("#contact").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name;
//if(name==''||email==''||password==''||contact=='')
//{
//alert("Please Fill All Fields");
//}
//else
//{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "Police_Incident_Report_Form.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});
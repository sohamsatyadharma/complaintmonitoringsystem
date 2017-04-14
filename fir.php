

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />

    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="http://protostrap.com/Assets/gv/css/gv.bootstrap-form.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    
</head>


<body>

<?php

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddFont('freesans', '', 'times.php', true);
$pdf->SetFont('freesans', '', 12);

$pdf->SetTitle('My title');
$pdf->SetAuthor('My author');
$pdf->SetDisplayMode('fullpage', 'single');

$pdf->SetLeftMargin(20);
$pdf->SetRightMargin(20);
$pdf->AddPage();

// define variables and set to empty values


$cur_date = date('m/d/Y');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num=substr(str_shuffle('ABCDEFGHIJKLMNOPPQRSTUVWXYZ'),0,5);
  $num1=substr(str_shuffle('0123456789'),0,3);
  $num=$num.'_'.$num1;
  $pdf->Write(5, "Complaint_ID: $num"); //write
    $pdf->Ln(10);
  foreach ($_POST as $key =>$data)
{
    if($key=='field13'||$key=='field4'||$key=='submit')
        continue;
    $pdf->Write(5, "$key: $data"); //write
    $pdf->Ln(10); // new line
}
$path_to_file = 'reports/'.(string)$num.'.pdf';
$pdf->Output($path_to_file,'F');
	$user_id = "abhi";
	
  $name = test_input($_POST["Name"]);
  $mobile = $_POST["Mobile"];
  $rdate = $_POST["Reporting_Date"];
  $idate = $_POST["Incident_Date"];
  $email = test_input($_POST["Email"]);
  $servername = 'localhost';
  $topic=$_POST['Topic'];
  $location=$_POST['Location'];
  $user='abhishek';
  $password='abd';
$dbname = "cms";

$conn = new mysqli($servername, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$data = $conn->real_escape_string(file_get_contents($path_to_file));
$sql = "INSERT INTO `cms`.`complain` (`id`,`user_id`,`complaint_hash`,`heading`,`timestamp`,`location`)
VALUES (NULL,'$user_id','$num','$topic','strtotime('$idate', '%m/%d/%Y')','$location')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: confirmation.php?num='. urlencode(serialize($num)));
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
    
    <div class="container-fluid">
        <div class="row">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formentry" class="form-horizontal" role="form" data-parsley-validate novalidate>
                <div class="container-fluid shadow">
                    <div class="row">
                        <div id="valErr" class="row viewerror clearfix hidden">
                            <div class="alert alert-danger">Oops! Seems there are some errors..</div>
                        </div>
                        <div id="valOk" class="row viewerror clearfix hidden">
                            <div class="alert alert-success">Yay! ..</div>
                        </div>
                        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_4" class="form-header" data-component="header">
              Police Incident Report
            </h2>
            <div id="subHeader_4" class="form-subHeader">
              To report and incident, please provide the following information&#x27;s
            </div>
          </div>
        </div>

                        
                                    <div class="row">
                                        <div class="col-md-12"><div class="row"><div class="col-md-6"><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field35">Reporting Date<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <span class="k-widget k-datepicker k-header form-control"><span class="k-picker-wrap k-state-default"><input id="field35" type="text" class="form-control k-input" data-role="date" role="textbox" aria-haspopup="true" aria-expanded="false" aria-owns="field35_dateview" aria-disabled="false" aria-readonly="false" aria-label="Current focused date is null" data-error-container="#errfield35" style="width: 100%;" required="required" name="Reporting_Date" data-parsley-errors-container="#errId1"><span unselectable="on" class="k-select" role="button" aria-controls="field35_dateview"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span><span id="errId1" class="error"></span></div>
                
		</div></div><div class="col-md-6"><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field37">Reporting Time<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <span class="k-widget k-timepicker k-header form-control"><span class="k-picker-wrap k-state-default"><input id="field37" type="text" class="form-control k-input" data-role="time" role="textbox" aria-haspopup="true" aria-expanded="false" aria-owns="field37_timeview" aria-disabled="false" aria-readonly="false" data-error-container="#errfield37" style="width: 100%;" required="required" name="Reporting_Time" data-parsley-errors-container="#errId2"><span unselectable="on" class="k-select" role="button" aria-controls="field37_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span><span id="errId2" class="error"></span></div>
                
		</div></div></div><div class="row"><div class="col-md-6"><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field36">Incident Date<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <span class="k-widget k-datepicker k-header form-control"><span class="k-picker-wrap k-state-default"><input id="field36" type="text" class="form-control k-input" data-role="date" role="textbox" aria-haspopup="true" aria-expanded="false" aria-owns="field36_dateview" aria-disabled="false" aria-readonly="false" aria-label="Current focused date is null" data-error-container="#errfield36" style="width: 100%;" required="required" name="Incident_Date" data-parsley-errors-container="#errId3"><span unselectable="on" class="k-select" role="button" aria-controls="field36_dateview"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span><span id="errId3" class="error"></span></div>
                
		</div></div><div class="col-md-6"><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field38">Incident Time<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <span class="k-widget k-timepicker k-header form-control"><span class="k-picker-wrap k-state-default"><input id="field38" type="text" class="form-control k-input" data-role="time" role="textbox" aria-haspopup="true" aria-expanded="false" aria-owns="field38_timeview" aria-disabled="false" aria-readonly="false" data-error-container="#errfield38" style="width: 100%;" required="required" name="Incident_Time" data-parsley-errors-container="#errId4"><span unselectable="on" class="k-select" role="button" aria-controls="field38_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span><span id="errId4" class="error"></span></div>
                
		</div></div></div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field34">Incident report issued by<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field34" type="text" class="form-control k-textbox" data-role="text" required="true" name="Name" data-parsley-errors-container="#errId5"><span id="errId5" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field33">Topic<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <select id="field33" class="form-control" data-role="select" required="required" name="Topic" data-parsley-errors-container="#errId6">
		  <option value="">  </option>
            <option value="Accident"> Accident </option>
            <option value="Child Labour"> Child Labour </option>
            <option value="Dowry Act"> Dowry Act </option>
            <option value="Eve Teasing"> Eve Teasing </option>
            <option value="Extortion"> Extortion </option>
            <option value="Gambling Act"> Gambling Act </option>
            <option value="Kidnapping"> Kidnapping </option>
            <option value="Loot"> Loot </option>
            <option value="Murder"> Murder </option>
            <option value="Ransom"> Ransom </option>
            <option value="Rape"> Rape </option>
            <option value="Riot"> Riot </option>
            <option value="Robbery"> Robbery </option>
            <option value="Swindle"> Swindle </option>
            <option value="Theft"> Theft </option>
            <option value="Witch Act"> Witch Act </option>
            <option value="Woman Tortured"> Woman Tortured </option>
            <option value="Others"> Others </option>
		</select><span id="errId6" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field32">Incident Location (Please provide specific details)</label>
			    <div class="controls col-sm-9">
                    
                <textarea id="field32" rows="3" class="form-control k-textbox" data-role="textarea" name="Location" data-parsley-errors-container="#errId7"></textarea><span id="errId7" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field31">Nature of incident</label>
			    <div class="controls col-sm-9">
                    
                <textarea id="field31" rows="3" class="form-control k-textbox" data-role="textarea" name="Nature_of_Incident" data-parsley-errors-container="#errId8"></textarea><span id="errId8" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field30">Incident details</label>
			    <div class="controls col-sm-9">
                    
                <textarea id="field30" rows="3" class="form-control k-textbox" data-role="textarea" name="Details_of_Incident" data-parsley-errors-container="#errId9"></textarea><span id="errId9" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field29">What motivated the incident?</label>
			    <div class="controls col-sm-9">
                    
                <textarea id="field29" rows="3" class="form-control k-textbox" data-role="textarea" name="Motive_of_Incident" data-parsley-errors-container="#errId10"></textarea><span id="errId10" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field28">Was a report of the incident issued to the police? </label>
			    <div class="controls col-sm-9">
                    
                <textarea id="field28" rows="3" class="form-control k-textbox" data-role="textarea" name="Previous_Issue" data-parsley-errors-container="#errId11"></textarea><span id="errId11" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field26">Full Name</label>
			    <div class="controls col-sm-9">
                    
                <input id="field26" type="text" class="form-control k-textbox" data-role="text" name="Full_Name" data-parsley-errors-container="#errId12"><span id="errId12" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field25">Phone Number</label>
			    <div class="controls col-sm-9">
                    
                <input id="field25" type="Number" class="form-control k-textbox" data-role="text" name="Phone_no." data-parsley-errors-container="#errId13"><span id="errId13" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field23">Mobile Number<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field23" type="Number" class="form-control k-textbox" data-role="text" name="Mobile" required="required" data-parsley-errors-container="#errId14"><span id="errId14" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field24">Email<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field24" type="email" class="form-control k-textbox" data-role="text" required="required" name="Email" placeholder="example@abc.com" data-parsley-errors-container="#errId15"><span id="errId15" class="error"></span></div>
                
		</div><div id="panel17" class="panel panel-default" data-role="panel">
        <div class="panel-heading">Address</div>
        <div class="panel-body">
            
        <div class="form-group" style="display: block;">
			    <label class="control-label-left" for="field18">Street address 1<span class="req"> *</span></label>
			    <div class="controls">
                    
                <input id="field18" type="text" class="form-control k-textbox" data-role="text" required="required" name="Street_Address_1" data-parsley-errors-container="#errId16"><span id="errId16" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label-left" for="field19">Street address 2<span class="req"> *</span></label>
			    <div class="controls">
                    
                <input id="field19" type="text" class="form-control k-textbox" data-role="text" required="required" name="Street_Address_2" data-parsley-errors-container="#errId17"><span id="errId17" class="error"></span></div>
                
		</div><div class="row"><div class="col-md-6"><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field20">City<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field20" type="text" class="form-control k-textbox" data-role="text" name="City" required="required" data-parsley-errors-container="#errId18"><span id="errId18" class="error"></span></div>
                
		</div></div><div class="col-md-6"><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field21">State</label>
			    <div class="controls col-sm-9">
                    
                <select id="field21" class="form-control" data-role="select" name="State" selected="selected" data-parsley-errors-container="#errId19">		
		  
		  
		  
		  
		<option selected="" value=""> Please Select </option>
                    <option value="Andhra Pradesh"> Andhra Pradesh </option>
                    <option value="Arunachal Pradesh"> Arunachal Pradesh </option>
                    <option value="Assam"> Assam </option>
                    <option value="Bihar"> Bihar </option>
                    <option value="Chattisgarh"> Chattisgarh </option>
                    <option value="Goa"> Goa </option>
                    <option value="Gujarat"> Gujarat </option>
                    <option value="Haryana"> Haryana </option>
                    <option value="Himachal Pradesh"> Himachal Pradesh </option>
                    <option value="Jammu & Kashmir"> Jammu & Kashmir </option>
                    <option value="Jharkhand"> Jharkhand </option>
                    <option value="Karnataka"> Karnataka </option>
                    <option value="Kerela"> Kerela </option>
                    <option value="Madhya Pradesh"> Madhya Pradesh </option>
                    <option value="Maharashtra"> Maharashtra </option>
                    <option value="Manipur"> Manipur </option>
                    <option value="Meghalaya"> Meghalaya </option>
                    <option value="Mizoram"> Mizoram </option>
                    <option value="Nagaland"> Nagaland </option>
                    <option value="Orrissa"> Orrissa </option>
                    <option value="Punjab"> Punjab </option>
                    <option value="Rajasthan"> Rajasthan </option>
                    <option value="Sikkim"> Sikkim </option>
                    <option value="Tamil Nadu"> Tamil Nadu </option>
                    <option value="Telangana"> Telangana </option>
                    <option value="Tripura"> Tripura </option>
                    <option value="Uttar Pradesh"> Uttar Pradesh </option>
                    <option value="Uttrakhand"> Uttrakhand </option>
                    <option value="West Bengal"> West Bengal </option>

		</select><span id="errId19" class="error"></span></div>
                
		</div></div></div><div class="form-group" style="display: block;">
			    <label class="control-label control-label-left col-sm-3" for="field22">Zip Code<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field22" type="Number" class="form-control k-textbox" data-role="text" required="required" name="Zip_Code" data-parsley-errors-container="#errId20"><span id="errId20" class="error"></span></div>
                
		</div></div>
    <div class="panel-toolbar"><span class="glyphicon glyphicon-cog"></span></div></div><div class="form-group" style="display: block;">
			    <label class="control-label control-label-left col-sm-3">Do you want the police to get in touch with you?<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <label class="radio" for="yes"><input type="radio" value="yes" id="yes" name="field13" required="required" data-parsley-errors-container="#errId21">Yes</label><label class="radio" for="no"><input type="radio" value="no" id="no" name="field13" required="required" data-parsley-errors-container="#errId21">No</label><span id="errId21" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field11">Further Comments</label>
			    <div class="controls col-sm-9">
                    
                <textarea id="field11" rows="3" class="form-control k-textbox" data-role="textarea" name="Comments" data-parsley-errors-container="#errId22"></textarea><span id="errId22" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3"><span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <label class="checkbox" for="checkbox7"><input type="checkbox" value="I certify that the above information is true and correct." id="checkbox7" name="field4" required="required" data-parsley-errors-container="#errId23">I certify that the above information is true and correct.</label><span id="errId23" class="error"></span></div>
                
		</div><div class="form-group">
			    
			    
                
		<button id="submit" type="submit" class="btn btn-default" name="submit">Report Now</button></div></div>
                                    </div>
                                


                    </div>
                </div>
            </form>
        </div>
    </div>
    



    <script src="http://cdn.kendostatic.com/2014.1.318/js/jquery.min.js"></script>
    <script src="http://protostrap.com/Assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.js" type="text/javascript"></script>

    <script src="http://protostrap.com/Assets/inputmask/js/jquery.inputmask.js" type="text/javascript"></script>
    <script src="http://cdn.kendostatic.com/2014.1.318/js/kendo.all.min.js"></script>
    <script src="http://protostrap.com/Assets/parsely/parsley.extend.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/parsely/2.0/parsley.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/download.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/protostrap.js" type="text/javascript"></script>
</body>
</html>

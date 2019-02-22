<!DOCTYPE html>
<html>
<head>
	<title>CISS</title>
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="img/cmic_logo.png">

	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->

	<link rel="stylesheet" type="text/css" href="css/extras.1.1.0.min.css">

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!-- custom jQuery -->
	<script type="text/javascript" src="rfidjquery.js"></script>

	<style>
		footer {
			position: fixed;
			height: 100px;
			bottom: 0;
			width: 100%;
		}
		.no-padding {
			padding:0;
		}
		.time-frame {
			background-color: #000000;
			color: #ffffff;
			width: 300px;
			font-family: Arial;
		}

		tr {
			width: 100%;
			display: inline-table;
			height:60px;
			table-layout: fixed;
		}

		table{
			height:100px; 
			display: -moz-groupbox;
		}
		tbody{
			overflow-y: scroll;
			height: 130px;
			display:block;
			width: 100%;
			position: absolute;
		}
	</style>
</head>
<body>
	<div class="container-fluid col-md-12" style="background-color:#0000ff">
		<div class="" >
			<div class="col-md-2">
				<div class="col-md-12">
					<img src="img/cmic_logo.png" style="height: 150px;margin-top: 10px;margin-left: 47px;">
				</div>
			</div>
			<div class="col-md-9 ">
				<div align="center">
					<h1 style="color: white; font-size: -webkit-xxx-large;">Cebu Mary Immaculate College, INC</h1>
					<h5 style="color: white;">A.Borbajo, St. Talamban.. Cebu City</h5>
					<h3 style="color: white;">
						<strong>
							<?php 
									// $timestamp = time(); 
									// echo "\n"; 
									// echo(date("F d, Y h:i:s A", $timestamp)) 
									// $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
									// echo $date->format('F d, Y H:i:s');
							?>
							<div>
								<p><b id="date-part"></b><b id="time-part"></b></p>   
							</div>
						</strong>
					</h3>
				</div>
			</div>
		</div>
		<!-- left container -->
		<div class="col-md-12 well" style="margin-left:-4%; width:105% !important;">
			<div class="col-md-6" >
				<div class="card">
					<div class="col-md-12" center>
						<img id ="students" align="center" class="img-responsive center-block" src="http://lorempixel.com/555/300/sports">
						<p>
							<div class="" style="text-align:center" >
								<h2><p id="fullname">Christopher Jay Capisnon</p></h2>
								<h4><b id="idnumber"></b> - <i id="course"></i></h4>
								<input id="input_rfid" type="text" name="testrfid" style="position: fixed; left: 300em;">
							</div>          
						</p>
					</div><!-- card image -->                              
				</div> 
			</div>
			<div class="col-md-6">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="card">
							<div class="col-md-12">
								<img id="imageTopOne" class="img-responsive img-thumbnail" src="http://lorempixel.com/555/300/sports">			
							</div><!-- card image -->
							<div class="col-md-12" style="text-align:center">
								<span class="card-title" style="background-color:blue;"><h6><B id="nameTopOne">CHRISTOPHER JAY M. CAPISNON</B></h6></span>                    
							</div><!-- card content -->
							<div class="col-md-12" style="text-align:center; margin-top:-5%;">
								<span class="card-title"><h6><B id="idTopOne">ID HERE</B></h6></span>                    
							</div>
						</div> 
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="col-md-12">
								<img id="imageTopTwo" class="img-responsive img-thumbnail" src="http://lorempixel.com/555/300/sports">
							</div>
							<div class="col-md-12" style="text-align:center">
								<span class="card-title"><h6><B>CHRISTOPHER JAY M. CAPISNON</B></h6></span>                    
							</div><!-- card content -->
							<div class="col-md-12" style="text-align:center; margin-top:-5%;">
								<span class="card-title"><h6><B>100001 - BSIT - 4</B></h6></span>                    
							</div>
						</div> 
					</div>
				</div>
				<div class="col-md-12">
					<table class=" table-container" id="logs">
						<thead>
							<tr>
								<th>Date</th>
								<th>Time</th>
							</tr>
						</thead>
						<tbody >
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-12" style="text-align:center; color:white;">
			<div class="">
				<h5>Website: cmic-ph.com  &nbsp; &nbsp; Tel No.: 354-8090 | 254 - 8090 | 09123456781</h5>
			</div>
		</div>
	</div>
</body>
<script src="assets/js/moment.js"></script>
<script>
	
	// Parses raw scan into name and ID number
	var rfidParser = function (rawData) {
		console.log(rawData, rawData.length);   

		if (rawData.length != 11) return null;
		else return rawData;
		 
	};

	// Called on the scan (card recognized)
	var rfidScan = function (cardData) {
        $("#input_rfid").val(cardData.substr(0,10));
        $('#rfid_number').text(cardData);

    };

	$(document).ready(function(){
     $('#input_rfid').focus();
     $("input[name='testrfid']").change(function(){

    var postURL ='Includes/users.php';
    var postURL2 ='Includes/logs.php';
    var rfid_number = $('#input_rfid').val();// value in rfid field 

    var id = $('#idnumber').text();
    var dates = $('#date-part').text();
    var times = $('#time-part').text();
    

    $.ajax({
    type:'POST', 
    url: postURL,
    data:{rfid_number: rfid_number, method:'validateRFID'},

        success:function(data){
            //alert(data);
            var result = $.parseJSON(data);
            $.each(result, function(key, value) {

                $('#idnumber').text(value['id']);
                $('#course').text(value['course_level']);
                $('#fullname').text(value['firstname'] + ' ' + value['middlename'] + ' ' + value['lastname']);
                $('#students').attr('src','\img/images/' + value['image']).height('300px');
                //alert('ahak');		
                var newID =  value['id'];
                var newRfid =  value['rfid_number'];  
                // alert(value['name']);
                $.ajax({
                    type:'POST', 
                    url: postURL2,
                    data:{rfid:newRfid, id:newID, dates:dates, times:times, method:'saveLogs'},

                        success:function(data){
 				
                        },
                        error : function(err) {
                            console.log(err);
                        }	
                }); 

                // search
                $.ajax({
                    type:'POST', 
                    url: postURL2,
                    data:{rfid:rfid_number, id:newID, method:'views'},

                        success:function(data){
                           // alert(data);
                            var result = $.parseJSON(data);
                            $.each(result, function(key, value) {

                                    //console.log(data);
                            $('#nameTopOne').text(value['firstname']);
                            $('#idTopOne').text(value['oras']);
                            $('#imageTopOne').attr('src','\img/images/' + value['image']);

                                    
                            });	

                            },
                            error : function(err) {
                                console.log(err);
                            }	

                });
                // logstudent
                $.ajax({
                    type:'POST', 
                    url: postURL2,
                    data:{rfid:rfid_number, id:newID, method:'logStudent'},

                        success:function(data){
                            var result = $.parseJSON(data);
                            $.each(result, function(key, value) {

                                $('#logs tbody').append("<tr><td>" + value['dates'] + "</td><td>" + value['oras'] + "</td></tr>");
                                  
                            });	

                            },
                            error : function(err) {
                                console.log(err);
                        }	

                    });
            });						
        },
        error : function(err) {
            console.log(err);
        }	

    });
 
});
});
//parse rfidscan function
$.rfidscan({
parser: rfidParser,
success: rfidScan,
});
        var interval = setInterval(function() {
        var momentNow = moment();
        $('#date-part').html(momentNow.format('MMMM DD YYYY') + ' ' 
                             .substring(0,3).toUpperCase());
        $('#time-part').html(momentNow.format('hh:mm:ss'));
        }, 100);
        // $('#stop-interval').on('click', function() {
        //     clearInterval(interval);
        // });
		// $('#input_rfid').focus();
		//display data
</script>
</html>
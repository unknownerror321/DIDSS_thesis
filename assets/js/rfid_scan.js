	// Parses raw scan into name and ID number
	var rfidParser = function (rawData) {
		console.log(rawData, rawData.length);   
		if (rawData.length != 11) return null;
		else return rawData;
		 
	};

	// Called on the scan (card recognized)
	var rfidScan = function (cardData) {
        $("#rfid_input").val(cardData.substr(0,10));
        // $('#rfid_number').text(cardData);
    };

    //parse rfidscan function
    $.rfidscan({
        parser: rfidParser,
        success: rfidScan,
    });

	$(document).ready(function(){
    // $('#input_rfid').focus();
    // $("input[name='testrfid']").change(function(){

    // var postURL ='Includes/users.php';
    // var postURL2 ='Includes/logs.php';
    // var rfid_number = $('#input_rfid').val();// value in rfid field 

    // var id = $('#idnumber').text();
    // var dates = $('#date-part').text();
    // var times = $('#time-part').text();
    

    // $.ajax({
    //     type:'POST', 
    //     url: postURL,
    //     data:{rfid_number: rfid_number, method:'validateRFID'},
    //     success:function(data){
    //         //alert(data);
    //         var result = $.parseJSON(data);
    //         $.each(result, function(key, value) {

    //             $('#idnumber').text(value['id']);
    //             $('#course').text(value['course_level']);
    //             $('#fullname').text(value['firstname'] + ' ' + value['middlename'] + ' ' + value['lastname']);
    //             $('#students').attr('src','\img/images/' + value['image']).height('300px');
    //             //alert('ahak');		
    //             var newID =  value['id'];
    //             var newRfid =  value['rfid_number'];  
    //             // alert(value['name']);
    //             $.ajax({
    //                 type:'POST', 
    //                 url: postURL2,
    //                 data:{rfid:newRfid, id:newID, dates:dates, times:times, method:'saveLogs'},

    //                     success:function(data){
 				
    //                     },
    //                     error : function(err) {
    //                         console.log(err);
    //                     }	
    //             }); 

    //             // search
    //             $.ajax({
    //                 type:'POST', 
    //                 url: postURL2,
    //                 data:{rfid:rfid_number, id:newID, method:'views'},

    //                     success:function(data){
    //                        // alert(data);
    //                         var result = $.parseJSON(data);
    //                         $.each(result, function(key, value) {

    //                                 //console.log(data);
    //                         $('#nameTopOne').text(value['firstname']);
    //                         $('#idTopOne').text(value['oras']);
    //                         $('#imageTopOne').attr('src','\img/images/' + value['image']);

                                    
    //                         });	

    //                         },
    //                         error : function(err) {
    //                             console.log(err);
    //                         }	

    //             });
    //             // logstudent
    //             $.ajax({
    //                 type:'POST', 
    //                 url: postURL2,
    //                 data:{rfid:rfid_number, id:newID, method:'logStudent'},

    //                     success:function(data){
    //                         var result = $.parseJSON(data);
    //                         $.each(result, function(key, value) {

    //                             $('#logs tbody').append("<tr><td>" + value['dates'] + "</td><td>" + value['oras'] + "</td></tr>");
                                  
    //                         });	

    //                         },
    //                         error : function(err) {
    //                             console.log(err);
    //                     }	

    //                 });
    //         });						
    //     },
    //     error : function(err) {
    //         console.log(err);
    //     }	

    // });
    
});



});


		

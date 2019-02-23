// var rfid_number = $('#_inputrfid').val()
// console.log('asdasd')

$('#_inputrfid').focus();
// $("#_inputrfid").change(function(){
//     var rfid_number = $('#_inputrfid').val()
//     console.log(rfid_number);
//     // $.ajax({
//     //     url: `${baseurl}logs/get_logs/${this.value}`,
//     //     success: (res) => {
//     //         // console.log(res)
//     //     }
//     // });
// });
        

$("#_inputrfid").on('change', () => {
    // console.log(this.value);
   
    var rfid_number = $('#_inputrfid').val();
    console.log(rfid_number+'asdasd');

    // $.ajax({
    //     url: `${baseurl}logs/get_logs/${rfid_number}`,
    //     dataType: 'json',
    //     success: (res) => {
    //         console.log(res);
    //         $('#_inputrfid').val('');
    //     }
    // });

   

    
})

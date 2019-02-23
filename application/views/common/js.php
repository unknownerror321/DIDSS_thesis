<!-- Scripts Starts -->
<script src="<?=base_url();?>assets/js/jquery-1.12.2.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/js/propeller.min.js"></script>
<script src="<?=base_url();?>assets/js/formvalidate.js"></script>
<!-- Scripts Ends -->
<script src="<?=base_url();?>assets/js/moment.js"></script>

<script src="<?=base_url();?>assets/js/datatables.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap4.js"></script>
<script src="<?=base_url();?>assets/js/custom.js"></script>
<script src="<?=base_url();?>assets/js/dateFormat.js"></script>

<!-- <script src="<?=base_url();?>assets/js/rfid_scan.js"></script> -->
<!-- Scripts Ends --> 
<script>
    var base_url = $('#base_url').val();
    
    const addlog = userid => {
        $.ajax({
            url: `${base_url}logs/addlogs/${userid}`,
            success: (res) => {
                return true;
            }
        })
    }
    $("#_inputrfid").on('change', function() {
        var rfid_number = $('#_inputrfid').val();
        $.ajax({
            url: base_url+'logs/get_logs/'+rfid_number,
            dataType: 'json',
            success: (res) => {
                if(res){
                    addlog(res['user_id']);
                    $.ajax({ 
                        url: base_url+'logs/get_last_logs',
                        dataType: 'json',
                        success: function(data){
                            var rLogs = $('.rLogs').length;
                            var tblLogs = $('#table-logs tr').length;
                            if(rLogs == 2){ $('#stock-logs').html(''); }
                            if(tblLogs >= 3){ $('#table-logs').html(''); }
                            $('#tblDef').hide();
                            $('#defRLogs').hide();
                                
                            $.each( data, function( key, value ) {
                                $('#table-logs').append(''+
                                    '<tr>'+
                                        '<td>'+value['firstname']+' '+value['lastname']+'</td>'+
                                        '<td>'+dateFormat(new Date(value['log_datetime']), "dd mmm yyyy")+''+
                                        '<td>'+dateFormat(new Date(value['log_datetime']), "hh:MM TT")+''+
                                    '</tr>'
                                );
                                if(key==0){
                                    $('#rfidNum').html(value['rfid']);
                                    $('#fullname').html(value['firstname']+' '+value['lastname']);
                                    $('#mImg').attr('src', base_url+'assets/images/profile/'+value['profile_image']);
                                } else{
                                    $('#stock-logs').append(''+
                                        '<div class="col-md-6 rLogs">'+
                                            '<div class="pmd-card pmd-card-default pmd-z-depth cust-sec-wrapper">'+
                                                '<div class="pmd-card-media cust-img-sec">'+
                                                    '<img src="'+base_url+'assets/images/profile/'+value['profile_image']+'">'+
                                                '</div>'+
                                                '<div class="pmd-card-title text-center">'+
                                                    '<h2 class="pmd-card-title-text"><i class="material-icons md-dark pmd-md inline-icon">account_circle</i> '+value['firstname']+' '+value['lastname']+'</h2>'+
                                                    '<span class="pmd-card-subtitle-text">'+value['rfid']+'</span>'+
                                                '</div>'+	
                                            '</div>'+
                                        '</div>'
                                    );
                                }
                            });
                        }
                    });

                } else{
                    swal('Not Registered', "This RFID is not registered", 'warning');
                }
                $('#_inputrfid').val('');
            }
        });
        $('#_inputrfid').val('')
    });


</script>

<script src="<?=base_url();?>assets/js/sweetalert.min.js"></script>
$(document).ready(function() {
    var sPath=window.location.pathname;
    var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
    $(".pmd-sidebar-nav").each(function(){
        $(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
        $(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
        $(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
        $(this).find("a[href='"+sPage+"']").addClass("active");
    });
    
    $(".auto-update-year").html(new Date().getFullYear());
    $('#datatables').DataTable();
    
    $('#rfid_modal').modal(
        {
            backdrop:'static',
            keyboard: false
        }
    )
    

});
$('#rfid_modal').on('shown.bs.modal', () => { $('#rfid_input').focus() } )
$('#rfid_input').on('change', e => {
    $('#rfid_modal').modal('toggle')
    $('#rfid_input_hldr').val(e.target.value);
})

var interval = setInterval(function() {
    var momentNow = moment();
    $('#date-part').html(momentNow.format('MMMM DD YYYY') + ' ' .substring(0,3).toUpperCase());
    $('#time-part').html(momentNow.format('hh:mm:ss A'));
}, 100);

function readURL(input) {
    var fileInput = document.getElementById('input-img');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        swal("Upload Failed", "Please select a valid image with .jpeg/.jpg/.png/.gif extensions.","warning");
        fileInput.value = '';
        return false;
    } else{
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img-profile').attr('src', e.target.result);
                $('#img-profile').hide();
                $('#img-profile').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }   
}

function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        swal("Upload Failed", "Please select a valid image with .jpeg/.jpg/.png/.gif extensions.","warning");
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('img-profile').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
  
$("#input-img").change(function() {
    readURL(this);
});
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
});

var interval = setInterval(function() {
    var momentNow = moment();
    $('#date-part').html(momentNow.format('MMMM DD YYYY') + ' ' .substring(0,3).toUpperCase());
    $('#time-part').html(momentNow.format('hh:mm:ss A'));
}, 100);
$(function() {
    $('.select2').select2({
        width: '100%'
    });
    $(document).ajaxStart(function(){
        $('#loadTableData').html('Loading Please Wait . . .');
    });
    $(document).ajaxComplete(function(){
        $('#loadTableData').html('Load');
    });
});

/* ---------- AJAX SETUP ---------- */
$.ajaxSetup({ 
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        var msg = ''; 
        var file = ''; 
        var line = ''; 
        if(XMLHttpRequest.responseText != null){ 
            msg = XMLHttpRequest.responseJSON.message; 
            file = XMLHttpRequest.responseJSON.file ; 
            line = XMLHttpRequest.responseJSON.line ; 
            console.log(XMLHttpRequest.responseText); 
            console.log(XMLHttpRequest); 
        } 
        if (XMLHttpRequest.readyState == 4) { 
            // HTTP error (can be checked by XMLHttpRequest.status and XMLHttpRequest.statusText) 
            iziToast.warning({ 
                title: 'ERROR '+ XMLHttpRequest.status, 
                message: XMLHttpRequest.statusText + '<br>' + msg + '<br>' + file + '<br>Line: ' + line, 
                position: 'topCenter', 
                close: false, 
            }); 
        } 
        else if (XMLHttpRequest.readyState == 0) { 
            // Network error (i.e. connection refused, access denied due to CORS, etc.) 
            iziToast.warning({ title: 'ERROR '+ XMLHttpRequest.status, 
            message: 'Network Error', 
            position: 'topCenter', 
            close: false, 
        }); } 
        else { 
            iziToast.warning({ 
                title: 'ERROR', 
                message: 'Unknown Error', 
                position: 'topCenter', 
                close: false, 
            }); 
            // something weird is happening 
        } 
    },
    headers: { 
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
    }
});
/* ---------- FUNCTIONS ---------- */

$('#app').on('click','#loadTableData',function(e){
    /* iziToast.warning({ 
        title: 'ERROR', 
        message: 'Unknown Error', 
        position: 'topCenter', 
        close: false, 
    }); */
    var formdata = $('#filter_result_form').serialize();
    $.ajax({ 
        url: 'report_load', 
        type:'POST', 
        data: formdata, 
        success: function (data) {
            /* if(!data){
                iziToast.success({
                    title: 'OK',
                    message: 'Successfully inserted record!',
                });
            } */
            $('#resultsTableDiv').html(data);
        }
    });
});

$('#filter_result_form').on('submit', function(e) {
    e.preventDefault();
});
$('#resetbtn').on('click', function(e){
    $('#filter_result_form').trigger("reset");
    $('.select2').select2({
        width: '100%'
    });
});
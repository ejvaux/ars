$("#updateRecordBtn").on("click", function(e) {
    
    e.preventDefault();

    var formdata = $('#updateRecForm').serialize();
    $.ajax({
        url: 'updaterecord',
        type:'post',
        data: formdata,
        success: function (data) {
            alert(success);
        }
    });
});
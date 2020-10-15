$("#resultRecSubmitBtn").on("click", function(e) {
    
    if($('#emp_id').val().length == 0){
        alert('Please complete the form')
    }  
    else if($('#result_id').val().length == 0){
        alert('Please enter result on form')
    }  
    else{
        e.preventDefault();

        var formdata = $('#resultRecordForm').serialize();
        $.ajax({
            url: 'rrecord',
            type:'post',
            data: formdata,
            success: function (data) {
                $("#resultRecordForm")[0].reset()
                alert('success');
            },
            error:function(error){
                alert('Your ID is not yet registered');
            }
        });
    }
    
});
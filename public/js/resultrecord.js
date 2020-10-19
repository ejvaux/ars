$("#resultRecSubmitBtn").on("click", function(e) {
    
    if($('#emp_id').val().length == 0){
        alert('Please complete the form')
    }  
    
    else{
        e.preventDefault();

        var formdata = $('#resultRecordForm').serialize();

        $.ajax({
            url: "rrecord",
            method:"POST",
            data: formdata,
            success: function (data) {
                $("#resultRecordForm")[0].reset()
                alert(data)

            },
            
        });
    }
    
});

$("form").keypress(function(e){
    if(e.which==13){
        return false;
    }
});

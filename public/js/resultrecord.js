$("#resultRecSubmitBtn").on("click", function(e) {
    
    if($('#emp_id').val().length == 0){
        alert('Please complete the form')
    }  
    // else if($('#result_id').val().length == 0){
    //     alert('Please enter result on form')
    // }  
    else{
        e.preventDefault();

        var formdata = $('#resultRecordForm').serialize();

        $.ajax({
            url: "rrecord",
            method:"POST",
            data: formdata,
            success: function (data) {
                alert(data);

            },
            error:function(error){
                alert("Cant find the Employee ID");
            }
        });
    }
    
});




// $("#resultRecordForm")[0].reset()
                // if(data=='success'){
                //     alert('success');
                // }
                // else{
                //     alert('Failed to find ID');
                // }
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
            // error:function(error){
            //     alert("Cant find the Employee ID");
            // }
        });
    }
    
});


// else if($('#result_id').val().length == 0){
    //     alert('Please enter result on form')
    // }  

// $("#resultRecordForm")[0].reset()
                // if(data=='success'){
                //     alert('success');
                // }
                // else{
                //     alert('Failed to find ID');
                // }
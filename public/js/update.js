$("#updateRecSubmitBtn").on("click", function(e) {
    
    // if($('#test_id').val().length == 0){
    //     alert('Please complete the form')
    // }  
    if($('#empl_id').val().length == 0){
        alert('Please enter your ID')
    }  
    else if($('#results_id').val().length == 0){
        alert('Please enter your result')
    }  
    else{
        e.preventDefault();

        var formdata = $('#updateRecForm').serialize();
        $.ajax({
            url: 'urecord',
            type:'POST',
            data: formdata,
            success: function (data) {
                $("#updateRecForm")[0].reset()
                alert(data)
            },
            
        });

    }
    
});


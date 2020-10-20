$("#testRecSubmitBtn").on("click", function(e) {

    e.preventDefault();
    if($('#test_code').val().length == 0){
        alert('Please complete the form')
    }  
    else if($('#provider').val().length == 0){
        alert('Please provider the form')
    }  
    else{
        var formdata = $('#testRecordForm').serialize();
        $.ajax({
            url: 'testrecord',
            type:'post',
            data: formdata,
            success: function (data) {
                // $("#testRecordForm")[0].reset()
                location.reload();
                alert(data)
            }
            
        });
    }
       
     
});






// function showRecord() {
//     document.getElementById("resultRecord").style.display = "block";
//     document.getElementById("testRecord").style.display = "none";
// }




// function showRecord() {
//     if (document.getElementById('resultRecord')) {

//         if (document.getElementById('resultRecord').style.display == 'none') {
//             document.getElementById('resultRecord').style.display = 'block';
//             document.getElementById('testRecord').style.display = 'none';
//         }
//         else{
//             document.getElementById('resultRecord').style.display = 'none';
//             document.getElementById('testRecord').style.display = 'block';
//         }
//             var x = document.getElementById("resultRecord");
            // if (x.style.display === "none") {
            //     x.style.display = "block";
            // }
            // else {
            //     x.style.display = "none";
            // }
//     }
// }




// TABLE RELOAD PAGINATE 
// $('#adminTable').on('click', '.page-link', function(e){
//     e.preventDefault();
//     LoadAdminTbl('',$(this).attr('href'));
// });

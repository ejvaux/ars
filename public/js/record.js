

function showRecord() {
    document.getElementById("resultRecord").style.display = "block";
    document.getElementById("testRecord").style.display = "none";
}

// function LoadRequestTbl(url = 'requests'){
//     $.ajax({
//       url: url,
//       type:'get',
//       data: {
        
//       },
//       success: function (data) {
//           $('#requestTable').html(data); 
//       }
//   });

// }

$( "#testRecSubmitBtn" ).on( "click", function(e) {
    
    e.preventDefault();

    var formdata = $('#testRecordForm').serialize();
    $.ajax({
        url: 'testrecord',
        type:'post',
        data: formdata,
        success: function (data) {
            alert(success);
        }
    });
});



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

// $( "#testRecordBtn" ).on( "click", function(e) {
    
//     e.preventDefault();

//     var formdata = $('#testSaveForm').serialize();
//     $.ajax({
//         url: 'testrecord',
//         type:'post',
//         data: formdata,
//         success: function (data) {
        
//         }
//     });
// });



// TABLE RELOAD PAGINATE 
$('#adminTable').on('click', '.page-link', function(e){
    e.preventDefault();
    LoadAdminTbl('',$(this).attr('href'));
});

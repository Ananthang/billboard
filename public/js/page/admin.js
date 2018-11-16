//***************admin panel Make Appiontment Starts Here ****************************************
//***************admin panel Make Appiontment Starts Here ****************************************

function studentall1() {
    alert('hi');
};
$(document).ready(function() {
    $('#example').DataTable();
});

function studentall1() {
    alert('hi');
};


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

});
/*
$("#inputRegno3").focusout(function(){

    var val = $(this).val();

    $.ajax({
        type:"GET",
        url:"admin/appointment/search/"+val,
        success: function (data1) {

        alert("flase"+data1);
        },
        error: function (data1) {
            console.log(JSON.stringify(data1));
            alert("An Error occurred " +JSON.stringify(data1));
         }
     });
});
*/


$("#submitAppointment").click(function() {
    var regno = $("#inputRegno3").val();
    var username = $("#doctorAppointment").val();
    var dateAndTime = moment().format('YYYY-MM-DD HH:mm:ss.SSS');
    alert(regno);
    alert(username);
    alert(dateAndTime);

    data = {
        regno: regno,
        username: username,
        dateAndTime: dateAndTime
    };
    alert(data);
    $.ajax({
        type: "POST",
        url: "admin/appointment/reg",
        data: JSON.stringify(data),
        dataType: 'json',
        contentType: "application/json",

        success: function(data1) {
            alert(data1);
        },
        error: function(data1) {
            console.log(JSON.stringify(data1));
            alert("An Error occurred " + JSON.stringify(data1));
        }
    });

});










//***************admin panel Make Appiontment Ends Here ****************************************






//**************** admin panel Student Registation Form **************************************
var pastHistory = [];
var problem = [];
var familes = [];

var iffamilesbrother1 = 0;
var iffamilessister1 = 0;

$("#bOccupation").click(function() {
    iffamilesbrother1++;
});
$("input#sOccupation").click(function() {
    iffamilessister1++;
});

$('input.check_past1').change(function() {
    if ($(this).is(":checked")) {
        pastHistory.push($(this).val());
    } else {
        remove($(this).val(), pastHistory);
        alert($(this).val())
    }

});

$('input.check_problem1').change(function() {
    if ($(this).is(":checked")) {
        problem.push($(this).val());
    } else {
        remove($(this).val(), problem);
    }

});
$('input#anyothertextarea').click(function() {
    problem.push($(this).val());
});




function remove(element, array) {
    const index = array.indexOf(element);

    if (index !== -1) {
        array.splice(index, 1);
    }
}

$("#studentReg").submit(function() {

    var faculty1 = $("#faculty1").val();
    var Regno1 = $("#Regno1").val();
    var fullname = $("#fullname").val();
    var resaddress1 = $("#resaddress1").val();
    var peraddress = $("#peraddress").val();
    var dob = $("#dob").val();
    var gender = $('input:radio[name=gender]:checked').val();
    var Lastschoolattend = $("#Lastschoolattend").val();
    var ParentsGuardianname = $("#ParentsGuardianname").val();
    var ParentsGuardianAddress = $("#ParentsGuardianAddress").val();
    var GPhonenumber = $("#GPhonenumber").val();
    var operation = $("#operation").val();
    var fOccupation = $("#fOccupation").val();
    var fRelation = $("#fRelation").val();
    var fAge = $("#fAge").val();
    var fIllness = $("#fIllness").val();
    var fIfdead = $("#fIfdead").val();
    var mOccupation = $("#mOccupation").val();
    var mRelation = $("#mRelation").val();
    var mAge = $("#mAge").val();
    var mIllness = $("#mIllness").val();
    var mIfdead = $("#mIfdead").val();
    var bOccupation = $("#bOccupation").val();
    var bRelation = $("#bRelation").val();
    var bAge = $("#bAge").val();
    var bIllness = $("#bIllness").val();
    var bIfdead = $("#bIfdead").val();
    var sOccupation = $("#sOccupation").val();
    var sRelation = $("#sRelation").val();
    var sAge = $("#sAge").val();
    var sIllness = $("#sIllness").val();
    var sIfdead = $("#sIfdead").val();
    // alert("1 " +
    //     faculty1);
    // alert("2 " +
    //     Regno1);
    // alert("3 " +
    //     fullname);
    // alert("4 " +
    //     resaddress1);
    // alert("5 " +
    //     peraddress);
    // alert("6 " +
    //     dob);
    // alert("7 " +
    //     gender);
    // alert("8 " +
    //     Lastschoolattend);
    // alert("9  " +
    //     ParentsGuardianname);
    // alert("0 " +
    //     ParentsGuardianAddress);
    // alert("1  " +
    //     GPhonenumber);
    // alert("2 " +
    //     operation);
    // alert("3 " +
    //     fOccupation);
    // alert("4 " +
    //     fRelation);
    // alert("5 " +
    //     fAge);
    // alert("6 " +
    //     fIllness);
    // alert("7 " +
    //     fIfdead);
    // alert("8 " +
    //     mOccupation);
    // alert("9 " +
    //     mRelation);
    // alert("0 " +
    //     mAge);
    // alert("1 " +
    //     mIllness);
    // alert("2 " +
    //     mIfdead);
    // alert("3 " +
    //     bOccupation);
    // alert("4 " +
    //     bRelation);
    // alert("5 " +
    //     bAge);
    // alert("6 " +
    //     bIllness);
    // alert("7 " +
    //     bIfdead);
    // alert("8 " +
    //     sOccupation);
    // alert("9 " +
    //     sRelation);
    // alert("0 " +
    //     sAge);
    // alert("1 " +
    //     sIllness);
    // alert("2 " +
    //     sIfdead);

    var data = {
        faculty: faculty1,
        regno: Regno1,
        fullname: fullname,
        resaddress: resaddress1,
        peraddress: peraddress,
        dob: dob,
        gender: gender,
        lastSchoolAttend: Lastschoolattend,
        parentsGuardianname: ParentsGuardianname,
        parentsGuardianAddress: ParentsGuardianAddress,
        gPhonenumber: GPhonenumber,
        operation: operation,
        problem: problem,
        pastHistory: pastHistory,
        fOccupation: fOccupation,
        fRelation: fRelation,
        fAge: fAge,
        fIllness: fIllness,
        fIfdead: fIfdead,
        mOccupation: mOccupation,
        mRelation: mRelation,
        mAge: mAge,
        mIllness: mIllness,
        mIfdead: mIfdead,
        bOccupation: bOccupation,
        bRelation: bRelation,
        bAge: bAge,
        bIllness: bIllness,
        bIfdead: bIfdead,
        sOccupation: sOccupation,
        sRelation: sRelation,
        sAge: sAge,
        sIllness: sIllness,
        sIfdead: sIfdead,
    };
    alert("hi");
    alert(JSON.stringify(data));


    $.ajax({
        dataType: 'json',
        type: "POST",
        url: "/recep/student",
        data: JSON.stringify(data),

        success: function(data) {
            alert(JSON.stringify(data));
        },
        error: function(data) {
            console.log(JSON.stringify(data));
            alert("An Error occurred " + JSON.stringify(data));
        }
    });
    alert(data);
});

//***********************Student Admin Panel Ends Here**********************************************************
//***********************Staff Admin Panel Starts Here**********************************************************

$('#staffReg').submit(function() {
    alert("hi");
    var fullname = $('#staffFullname').val();
    var staffage = $('#staffage').val();
    var phonenumber = $('#phonenumber').val();
    var genderstaff = $('input:radio[name=gender]:checked').val();
    var maritalState = $('input:radio[name=marriedstate]:checked').val();
    var primaddress = $('#primaddress').val();
    var resaddress2 = $('#resaddress2').val();
    var designation = $('#designation').val();
    var department = $('#department').val();
    var faculty = $('#faculty').val();
    var Regno = $('#Regno').val();
    var height = $('#height').val();
    var weight = $('#weight').val();
    var bloodgroup = $('#bloodgroup').val();
    var user_id = $('#user_id').val();


    var data = {
        regno: Regno,
        fullname: fullname,
        age: staffage,
        phonenumber: phonenumber,
        gender: genderstaff,
        maritalState: maritalState,
        privateAddress: primaddress,
        resiAddress: resaddress2,
        designation: designation,
        faculty: faculty,
        height: height,
        weight: weight,
        bloodgroup: bloodgroup,
        department: department,
        user_id: user_id,
    };
    alert(data);

    $.ajax({
        dataType: 'json',
        type: "POST",
        url: "/recep/staff",
        data: JSON.stringify(data),



        success: function(data) {
            alert("success" + JSON.stringify(data));
        },
        error: function(data) {
            console.log(JSON.stringify(data));
            alert("An Error occurred " + JSON.stringify(data));
        }
    });


});

/*******************Staff Admin Panel Ends Here*****************************/
/*******************Health Center  Staff  Starts Here*****************************/

$('.healthCenterStaffRegForm').submit(function() {
    var Username = $('.healthCenterStaffRegFormName').val();
    var phonenumber = $('.healthCenterStaffRegFormPhoneNumber').val();
    var password = $('.healthCenterStaffRegFormPassword').val();
    var roles = $('.healthCenterStaffRegFormRole').val();
    var data = {
        username: Username,
        phoneNumber: phonenumber,
        password: password,
        roles: roles

    };
    var listCustomers = [];
    listCustomers.push(data);
    alert(JSON.stringify(data));
    $.ajax({

        type: "POST",
        contentType: "application/json",
        url: "admin/healthCenter/reg",
        data: JSON.stringify(data),
        dataType: 'json',
        cache: false,
        timeout: 600000,
        success: function(data) {
            alert(JSON.stringify(data));
        },
        error: function(data) {
            console.log(JSON.stringify(data));
            alert("An Error occurred " + JSON.stringify(data));
            window.location.href("admin");
        }

    });
    alert("hi");
});



/*************************Doctor Registertation Here Start Here************************************************* */
/* $('#doctorRegister').submit(function() {
    var Username = $('#doctorname').val();
    var Doctor_regNo = $('#Doctor_regNo').val();
    var doctorphone = $('#doctorphone').val();
    var doctoremail = $('#doctoremail').val();
    var doctorpassword = $('#doctorpassword').val();
    var password_confirm = $('#password_confirm').val();

    var data = {
        username: Username,
        Doctor_regNo: Doctor_regNo,
        doctorphone: doctorphone,
        email: doctoremail,
        password: doctorpassword,
        password_confirmation: password_confirm,

    };
    alert(JSON.stringify(data));
    $.ajax({

        type: "POST",

        url: "/docregi",
        data: JSON.stringify(data),
        dataType: 'json',

        success: function(data) {
            alert(JSON.stringify(data));
        },
        error: function(data) {
            console.log(JSON.stringify(data));
            alert("An Error occurred " + JSON.stringify(data));
            window.location.href("admin");
        }

    });
    alert("hi");
}); */




/*************************Doctor Registertation Here Ends Here************************************************* */








/*******************Health Center  Staff  Ends Here*****************************/


/******************* Health Center Student Search Start Here ***************************** */

$('#searchStudent').click(function() {
    var search = $('#searchregInTexStudent').val();
    alert(search);
    $.ajax({

        type: "POST",

        url: "/search/student",
        data: JSON.stringify(data),
        dataType: 'json',

        success: function(data) {
            alert(JSON.stringify(data));
        },
        error: function(data) {
            console.log(JSON.stringify(data));
            alert("An Error occurred " + JSON.stringify(data));
            window.location.href("admin");
        }

    });
});


/******************* Health Center Student Search Ends Here ***************************** */
/******************* Health Center Staff Search Start Here ***************************** */
$('#searchStaff').click(function() {
    var search = $('#searchregInStaff').val();

    $.ajax({

        type: "POST",

        url: "/search/staff",
        data: JSON.stringify(data),
        dataType: 'json',

        success: function(data) {
            alert(JSON.stringify(data));
        },
        error: function(data) {
            console.log(JSON.stringify(data));
            alert("An Error occurred " + JSON.stringify(data));
            window.location.href("admin");
        }

    });
});


/******************* Health Center Staff Search Ends Here ***************************** */
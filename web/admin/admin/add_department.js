// Start Auto Run jQuery
$(document).ready(function(){

    getFaculty();
    
    $("#tb_dept_faculty").on('change', function(){
        getMajorByFaculty();
    });
});
// End Auto Run jQuery



function getFaculty() {

    var data = {
        db : 'tb_faculty',
        name : ''
    }
    $.ajax({
        url: '../../sql_check_major.php',
        method: 'post',
        data: data,
        dataType: 'json',
        success: function(result){
            console.log("Result Faculty : ");
            console.log(result);

            if(result.length > 0 ){
                for (var i = 0; i < result.length; i++) {
                    var option = "<option value='" + result[i].tb_faculty_name + "'>" + result[i].tb_faculty_name + "</option>";
                    $("#tb_dept_faculty").append(option);
                }
            }
        }
    });
}

function getMajorByFaculty() {

    var faculty = $("#tb_dept_faculty").val();
    var data = {
        db : "tb_major",
        name : faculty
    }
    $.ajax({
        url: '../../sql_check_major.php',
        method: 'post',
        data: data,
        dataType: 'json',
        success: function(result){
            console.log("Result Major : ");
            console.log(result);
            $("#tb_dept_major").find('option').remove();
            $("#tb_dept_major").html('<option value="no">เลือกสาขา</option>'); 
            if(result.length > 0 ){
                for (var i = 0; i <= result.length; i++) {
                    var option = "<option value='" + result[i].tb_major_name + "'>" + result[i].tb_major_name + "</option>";
                    $("#tb_dept_major").append(option);
                }
            }
        }
    });
}


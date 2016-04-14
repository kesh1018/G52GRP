// click checkbox
$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } 
        else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
});

$('#btnYes').click(function() {
    // handle deletion here
    var id = $('#delete1').data('id');
    $('[data-id='+id+']').remove();
    $('#delete1').modal('hide');

    $("[data-toggle=tooltip]").tooltip();
});

// add data to table 
function AddData() {
    var x = document.getElementById("age").value;
    var y = document.getElementById("name").value;
    var letters = '/^[a-zA-Z]+$/';
    if ((parseInt(x) != (x)) && (y == parseInt(y))) {
        alert("Wrong Value Entered");
    } 
    else {
        var rows = "";
        var name = document.getElementById("name").value;
        var guardId = document.getElementById("guardId").value;
        var ICPass_no = document.getElementById("ICPass_no").value;
        var gender = document.getElementById("gender").value;
        var race = document.getElementById("race").value;
        var religion = document.getElementById("religion").value;
        var address = document.getElementById("address").value;
        var contact_no = document.getElementById("contact_no").value;
        var date1 = document.getElementById("date1").value;
        var check_in = document.getElementById("check_in").value;
        var date2 = document.getElementById("date2").value;
        var check_out = document.getElementById("check_out").value;
        var remarks = document.getElementById("remarks").value;

        rows += "<td>" + name + "</td><td>" + guardId + "</td><td>" + ICPass_no + "</td><td>" + gender + "</td><td>" + race + "</td></td>" + religion + "</td><td>" + address + "</td><td>" + contact_no + "</td><td>" + date1 + "</td><td>" + check_in + "</td><td>" + date2 + "</td><td>" + check_out + "</td><td>" + remarks + "</td><td>";
        var tbody = document.querySelector("#mytable tbody");
        var tr = document.createElement("tr");

        tr.innerHTML = rows;
        tbody.appendChild(tr)
    }
}

// reset form 
function ResetForm() {
    document.getElementById("person").reset();
}
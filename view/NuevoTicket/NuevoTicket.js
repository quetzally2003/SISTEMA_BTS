function init(){
    $("#ticket_form").on("submit",function(e){
        guardaryeditar(e);	
    }); 
}



$(document).ready(function() {
    $('#tick_descrip').summernote({
    
    });






    $.post("../../controller/categoria.php?op=combo",function(data, status){
        $('#cat_id').html(data);
    });
});
function guardaryeditar(e){
        e.preventDefault();
}       var formData = new FormData($("#ticket_form")[0]);
        $.ajax({
            url: "../../controller/ticket.php?op=insert",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data){
            console.log(datos);
            }   
    }); 
init();
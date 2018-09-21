$(document).ready(function () {
    $("#button").on("click", function(){
        alert("Jquery está funcionando");
    });


    $("#formFile").on("submit", function(e) {
        e.preventDefault();

        var form = $("#formFile")[0]
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            dataType:"json",
            url: "http://172.19.0.2/file.php",
            data:data,
            contentType:false,
            processData:false,
            success:function(value) {
                console.table(value);
            }
        })
    })
})
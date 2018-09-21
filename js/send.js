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
            dataType:"html",
            url: "http://172.19.0.2/file.php",
            data:data,
            contentType:false,
            processData:false,
            success:function(results) {
                $("#ret").html("");
                var progressbar = $('#progressbar'),
                    max = progressbar.attr('max'),
                    time = (1000/max)*5,  
                    value = progressbar.val();
                var loading = function() {
                    value += 1;
                    addValue = progressbar.val(value);
                    
                    $('.progress-value').html(value + '%');
                    $('.counting').html(value + '%');
                
                    if (value >= max) {
                        clearInterval(animate);
                        $("#ret").html(results);
                        progressbar.val("0");
                    }
                };
                var animate = setInterval(function() {
                    loading();
                }, time);
            }
        })
    })
})
<script>
$(document).ready(function(){

   

    $('#btnLogin').click(function(){
        $.ajax({
        url : '<?php echo site_url("$this->controller/CekLogin") ?>',
        data : new FormData($('#frmLogin')[0]),
        contentType: false,
        processData: false,
        type : 'post',
        dataType : 'json',
        beforeSend: function(){
            swal.fire({
                                    title: 'Mohon Tunggu . . ',
                                    allowEscapeKey: false,
                                    allowOutsideClick: false,
                                });
                              swal.showLoading();
        },
        success : function(obj){
           
            
            if(obj.error==false) {
                    swal.fire("Informasi!", obj.message, "success").then((value) => {
                    location.href=(obj.url);
                        });
                }
                else {
                    swal.fire('Error', obj.message, 'error', {
                        className: "red-bg",
                    });
                }
            },
            error : function (){
                swal.fire('Error', 'Connection Erorr', 'error', {
                        className: "red-bg",
                    });
            } 
        });
    });
});
</script>
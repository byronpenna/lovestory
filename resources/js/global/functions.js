var RAIZ    = "http://localhost/lovestory/index.php/";
var BASEURL = "http://localhost/lovestory/";
function actualizarCatalogo(urlAjax,frm,callback) {
    $.ajax({
        url: urlAjax,
        type: 'POST',
        error: function(xhr,status,error){
            console.log("entro a los errores");
            console.log(xhr);
            console.log(status);
            console.log(error);
        },
        data: {
            form: JSON.stringify(frm)
        },
        success:function(data){
            callback(data);
        }
    });
}
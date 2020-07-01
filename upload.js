
leRegistros()


$('#imagem').click(function() {
 swal({
    title: 'Selecione o arquivo',
    showCancelButton: true,
    confirmButtonText: 'Enviar',
    html: '<br><div><input style="color: black; font-size: 15px;" id="fileupload" type="file" name="userfile"></div>'
}).then(function(){
        var formData = new FormData();
        formData.append('userfile', $('#fileupload').val().replace(/.*(\/|\\)/, ''));
        $.ajax({
            method: 'post',
            url: 'assets/php/atualiza_foto.php',
            data: formData,
	        dataType: 'json',
	        processData: false,
	        contentType: false,
	        headers: {"Content-Type":"form-data"},
	        async: true,

            success: function (resp) {
                swal('Uploaded', 'Sua foto foi enviada com sucesso', 'success');
            },
            error: function() {
                swal({ type: 'error', title: 'Oops...', text: 'Aconteceu algo errado, tente novamente!' })
            }
        });
    });
	});

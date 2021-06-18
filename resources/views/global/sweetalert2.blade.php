<script>
    // function successSwal(title, showConfirmButton=false, timer=2000 ){
    //     Swal.fire({
    //         position: 'top-end',
    //         icon: 'success',
    //         title: title ?? 'Operação realizada com Sucesso',
    //         showConfirmButton: showConfirmButton,
    //         timer: timer,
    //         allowOutsideClick: false
    //     })
    // }

    function loadingSwal(title, message)
    {
        Swal.fire({
            title: title ?? "Aguarde...",
            html: message ?? "Sistema está processando as informações...",
            timer: false,
            allowOutsideClick: false,
            //closeOnClickOutside: false,
            onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {}, 100)
            },
        });
    }
    function clickCreate(title=null, message=null)
    {
        Swal.fire({
            title: title ?? "Aguarde...",
            html: message ?? "Sistema está processando as informações...",
            timer: false,
            allowOutsideClick: false,
            //closeOnClickOutside: false,
            onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {}, 100)
            },
        });
    }
    function successSwal(title, text, contentHtml, timer, showConfirmButton)
    {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title  : title ?? "Parabéns!",
            text   : text ?? "Operação concluída com sucesso!",
            html   : contentHtml ?? null,
            type   : "success",
            timer  : timer ?? 2000,
            showConfirmButton: showConfirmButton ?? false,
            allowOutsideClick: false,
            //closeOnClickOutside: false
        });
    }
    function errorSwal(title, text, contentHtml, timer, showConfirmButton)
    {
        Swal.fire({
            title  : title ?? "Ops!",
            text   : text ?? "Falha ao completar a operação!",
            html   : contentHtml ?? null,
            type   : "error",
            timer  : timer ?? false,
            showConfirmButton: showConfirmButton ?? true,
            allowOutsideClick: false,
            //closeOnClickOutside: false
        });
    }
    function infoSwal(title, text, contentHtml, timer, showConfirmButton)
    {
        Swal.fire({
            title  : title ?? "Informativo!",
            text   : text ?? "Informação vita para o processo!",
            html   : contentHtml ?? null,
            type   : "info",
            timer  : timer ?? 2000,
            showConfirmButton: showConfirmButton ?? false,
            allowOutsideClick: false,
            //closeOnClickOutside: false
        });
    }
    function warningSwal(title, text, contentHtml, timer, showConfirmButton)
    {
        Swal.fire({
            title  : title ?? "Atenção!",
            text   : text ?? "Cuidado está operação requer atenção!",
            html   : contentHtml ?? null,
            type   : "warning",
            timer  : timer ?? 2000,
            showConfirmButton: showConfirmButton ?? false,
            allowOutsideClick: false,
            //closeOnClickOutside: false
        });
    }
    function questionSwal(url, title, text, type, confirmButtonText, cancelButtonText) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'mr-2 btn btn-danger'
            },
            buttonsStyling: false,
        });
        swalWithBootstrapButtons.fire({
            title: title ?? 'Desbloqueio de Chips!',
            text: text ?? "Tem certeza que deseja desbloquear esses chips?!",
            type: type ?? 'warning',
            showCancelButton: true,
            confirmButtonText: confirmButtonText ?? 'Sim, quero desbloquear!',
            cancelButtonText: cancelButtonText ?? 'Não, cancelar',
            reverseButtons: true,
            allowOutsideClick: false,
        }).then((result) => {
            if (result.value) {
                $.ajax(url, {
                    method : "GET",
                    success: function(response) {
                        if(response.code != '301')
                        {
                            swalWithBootstrapButtons.fire("Parabéns", response.message, 'success');
                            setTimeout( function() {
                                location.reload();
                            } , 1000 );
                        }
                        else
                        {
                            Swal.fire( "Sistema" , "Não Autorizado" , "error" );
                        }
                    },
                    error:function(error) {
                        if(error.responseJSON.message)
                        {
                            Swal.fire("Sistema", error.responseJSON.message, "error");
                        }
                        else
                        {
                            Swal.fire("Sistema", "Erro crítico!");
                        }
                    }
                });
            } else
            {
                if(
                    result.dismiss === Swal.DismissReason.cancel
                )
                {
                    swalWithBootstrapButtons.fire(
                        'Cancelado' ,
                        'você cancelou a operação! :)' ,
                        'error'
                    );
                    setTimeout( function() {
                        location.reload();
                    } , 1000 );
                }
            }
        });
    }
</script>

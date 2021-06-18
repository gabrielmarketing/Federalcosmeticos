<script>
    function formRequest(element, title_loading, message_loading)
    {
        event.preventDefault();
        form_data         = new FormData(element);
        form_element      = $(element);
        title_loading     = title_loading ?? "Aguarde o Sistema";
        message_loading   = message_loading ?? "Só mais alguns minutos ....";
        form_action       = form_element.attr("action");
        form_method       = form_element.attr("method");
        loadingSwal(title_loading, message_loading);
        $(".tab-forms").removeClass("is-invalid");
        $.ajax({
            url         : form_action,
            method      : form_method,
            data        : form_data,
            processData : false,
            contentType : false,
            success     : function (response)
            {
                if(response.status==="success")
                {
                    successSwal("Parabéns!", response.message, null, 3000, false);
                    setTimeout(function () {if(response.redirect){location = response.redirect;}}, 2000);
                    setTimeout(function () {if(response.url){location = response.url;}}, 2000);
                }
                else
                {
                    resetFields();
                    errorSwal("Ops!", response.message, null, false, true);
                }
            },
            error       : function (response)
            {
                errorSwal("", null, "erroexcepition", false, true);
            }
        });
    }
    function resetFields() {
        $(".reset-fields").removeClass("is-invalid");
        $(".span-danger").hide();
        $(".span-info").show();
    }
</script>

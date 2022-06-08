$(document).ready(function (){

    $('#submit').click(function (){
        var name = $('#name').val();
        var tel = $('#phone').val();
        var address = $('#address').val();
        var address2 = $('#address2').val();

        $.ajax({
            url: '/action.php',
            data: {
                name: name,
                phone: tel,
                address: address,
                address_map: address2
            },
            method: "POST"
        }).done(function(msg){
            let mes = JSON.parse(msg);
            let fancyresp = "<p>Сообщение успешно отправлено!</p>";
            let status = true;
            Object.keys(mes).forEach( element => {
                console.log(mes[element]);
                if (mes[element].status != 2){
                    if (status){
                        fancyresp = "<p>Произошла ошибка!</p><p> " + mes[element].msg + "</p>";
                    }else{
                        fancyresp = fancyresp + "<p>" + mes[element].msg + "</p>";
                    }
                    status = false;
                }
            });
            if (status){
                $('input').each(function(){
                    $(this).val('');
                })
            }
            $.fancybox.open(fancyresp);
        })

        return false;
    });

});
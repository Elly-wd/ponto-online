$(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $('#enviar-ponto').on('click',function() {
  
            $.ajax({
                url: '/marcar-ponto',
                type: 'POST',
                dataType:'json',
    
                done: function() {
                    alert('Ponto Marcado')
                },
                error: function() {
                    alert('Ponto Marcado!')
                }
            });
        })
});
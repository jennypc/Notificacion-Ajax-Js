//$('#button').click(regresar);
var button = document.getElementById("button");

button.addEventListener('click',function(){
    regresar();
    noti();
}); 

function regresar(){
    $.ajax({
        url:'index.php',
        type: 'post',
        dataType: 'json',
        data:{
            nombre:$('#nombre').val(),
            mensaje:$('#mensaje').val()
            
        }
    }).done(
      function(data){
          $('#salida').append(data);
          $('#nombre').val('');
          $('#mensaje').val('');
          
      }
    );
}

function noti(){
   
    if (Notification) {
        if (Notification.permission !== "granted") {
            Notification.requestPermission();
        }
            var title = $("#nombre").val()
            var extra = {
                icon: "",
                body: $('#mensaje').val()
                }
        var noti = new Notification( title, extra)
        setTimeout( function() { noti.close() }, 10000)
        }
}
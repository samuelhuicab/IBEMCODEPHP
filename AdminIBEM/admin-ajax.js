$(document).ready(function() {
  $('#crear-admin').on('submit', function(e) {

    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data) {
        var resultado = data;
        if (resultado.respuesta == 'exito') {
          Swal.fire(
                    'Genial!',
                    'El registro se ha hecho correctamente!',
                    'success'
                  )
                  setTimeout(function(){
                    window.location.href = 'crear-admin.php';
                  }, 1000);
        }else {
          Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo ha salido mal, contacte a su administador del sistema',
                    })
        }
      }



    })
  });

  $('#login-admin').on('submit', function(e) {

    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data) {
        var resultado = data;
        if (resultado.respuesta == 'exitoso') {
          Swal.fire(
                    'Genial!',
                    'Se ha iniciado sesión correctamente!',
                    'success'
                  )
                  setTimeout(function(){
                    window.location.href = 'index.php';
                  }, 1000);
        }else {
          Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuario o contraseña son incorrectos',
                    })
        }
      }



    })
  });


  $('#guardar-registro').on('submit', function(e) {

    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data) {
        var resultado = data;
        if (resultado.respuesta == 'correcto') {
          Swal.fire(
                    'Genial!',
                    'Se ha actualizado con exito!',
                    'success'
                  )
                  setTimeout(function(){
                    window.location.href = 'listausuarios.php';
                  }, 1000);
        }else {
          Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo ha salido mal, contacte a su administador del sistema',
                    })
        }
      }



    })
  });


  $('#listausuarios').on('submit', function(e) {

    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data) {
        var resultado = data;
        if (resultado.respuesta == 'correcto') {
          Swal.fire(
                    'Genial!',
                    'Se ha actualizado con exito!',
                    'success'
                  )
                  setTimeout(function(){
                    window.location.href = 'listausuarios.php';
                  }, 1000);
        }else {
          Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo ha salido mal, contacte a su administador del sistema',
                    })
        }
      }



    })
  });

});

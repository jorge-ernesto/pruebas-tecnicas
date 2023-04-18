$('#calling_bingo_numbers').on('click', function(e) {
   
   $.ajax({
      method: 'post',
      url: '../Controllers/BingoController.php?action=generate', // Lo que se envia a través de la url se obtiene por el método get
      contentType: false,
      processData: false,
      success: function(data) {
         alert("Se genero numero aleatorio");
         location.reload();
      }
   });

});

$('#delete_bingo_numbers').on('click', function(e) {
   
   $.ajax({
      method: 'post',
      url: '../Controllers/BingoController.php?action=delete', // Lo que se envia a través de la url se obtiene por el método get
      contentType: false,
      processData: false,
      success: function(data) {
         alert("Se eliminaron numeros");
         location.reload();
      }
   });

});

$('#generate_bingo_cards').on('click', function(e) {
   
   $.ajax({
      method: 'post',
      url: '../Controllers/BingoController.php?action=generate_bingo_cards', // Lo que se envia a través de la url se obtiene por el método get
      contentType: false,
      processData: false,
      success: function(data) {
         alert("Bingo Card generado");
         location.reload();
      }
   });

});

$('#delete_bingo_cards').on('click', function(e) {
   
   $.ajax({
      method: 'post',
      url: '../Controllers/BingoController.php?action=delete_bingo_cards', // Lo que se envia a través de la url se obtiene por el método get
      contentType: false,
      processData: false,
      success: function(data) {
         alert("Bingo Card eliminado");
         location.reload();
      }
   });

});
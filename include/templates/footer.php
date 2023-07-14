<footer>
    <div class="footer">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Preguntas frecuentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Prensa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Conferencias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Terminos y condiciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Privacidad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Estudiantes</a>
        </li>
      </ul>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script>


    function mostrarResumen() {
      var cantidad = document.getElementById("cantidad").value;
      var categoria = document.getElementById("categoria").value;
      var textArea = document.getElementById("exampleFormControlTextarea1");
      var precio = 0;
      var precioSinDescuento = 200;
      if (cantidad !== "") {
        switch (parseInt(categoria)) {
          case 1:
            var precio = parseInt(cantidad) * precioSinDescuento * (1 - 0.8);
            break;
          case 2:
            var precio = parseFloat(cantidad) * precioSinDescuento * (1 - 0.5);
            break;
          case 3:
            var precio = parseFloat(cantidad) * precioSinDescuento * (1 - 0.15);
            break;
          default:
            break;
        }
        textArea.value = "Total a Pagar: " + precio.toFixed(2) + "$";

      }

    }

    function borrar() {
      document.getElementById("nombre").value = "";
      document.getElementById("apellido").value = "";
      document.getElementById("cantidad").value = "";
      document.getElementById("categoria").value = "1";
      document.getElementById("exampleFormControlTextarea1").value = "";
    }

  </script>
</body>

</html>
<section>
    <main>
      <div class="banner">
        <div class="banner-card">
          <h1>Conf Bs As</h1>
          <p>Bs As llega por primera vez a Argentina. Un evento para compartir con
            nuestra comunidad el conocimiento y experiencia de los expertos que
            están creando el futuro de Internet Ven a conocer a miembros del
            evento, a otros estudiantes de Codo a Codo los oradores de primer
            nivel que tenemos para ti. Te esperamos!</p>
          <div class="banner-btn">
            <a href="#orador" class="btn btn-style">Quiero ser orador</a>
            <a href="#ticket" class="btn btn-success">Comprar tickets</a>
          </div>
        </div>
      </div>
    </main>
  </section>
  <section id="conferencia">
    <main>
      <div class="container-cards padd-container">
        <h4>Conoce a los</h4>
        <h1>Oradores</h1>
        <div class="row cards-container">
          <div class="col-sm-6 cards">
            <div class="card">
              <img src="./assets/steve.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="#" class="btn btn-warning">Javascript</a>
                <a href="#" class="btn btn-primary">React</a>
                <h5 class="card-title">Steve Jobs</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 cards">
            <div class="card">
              <img src="./assets/bill.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="#" class="btn btn-warning">Javascript</a>
                <a href="#" class="btn btn-primary">React</a>
                <h5 class="card-title">Bill Gates</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 cards">
            <div class="card">
              <img src="./assets/ada.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="#" class="btn btn-warning">Javascript</a>
                <a href="#" class="btn btn-danger">Startups</a>
                <h5 class="card-title">Ada Lovelace</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="Info">
        <div class="info-cards-img">
        </div>
        <div class="info-cards bg-dark">
          <div class="card-body">
            <h5 class="card-title">Bs As - Octubre</h5>
            <p class="card-text">Buenos Aires es la provincia y localidad mas grande del estado de Argentina. En los
              Estados Unidos Honolulu es la mas sureña entre las principales ciudades norteamricanas, aunque el nombre
              de Honolulu se refiere al area urbana</p>
            <a href="#" class="btn btn-primary">Conoce mas</a>
          </div>

        </div>
  </section>
  <section id="orador">
    </div>
    <div class="form-consulta">
      <h4>Conviertete en un</h4>
      <h3>ORADOR</h3>
      <p>Anotate como orador para una charla ignite</p>
      <p>Cuentanos de que quieres hablar?</p>
      <form action="./acceso_a_datos/insertarDatos.php" method="post">
        <div class="info-personal">
          <div class="input-padd">
            <label for="exampleInputNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputNombre" name="nombre">
          </div>
          <div class="input-padd">
            <label for="exampleInputApellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="exampleInputApellido" name="apellido">
          </div>
          <div class="input-padd">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail" name="email">
          </div>
        </div class="input-padd">
        <label for="exampletextarea" class="form-label">Tema a tratar</label>
        <textarea rows="4" cols="50" id="exampletextarea" placeholder="Sobre que quieres hablar?"
          name="tema"></textarea>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-block btn-primary">Enviar</button>
        </div>
      </form>
    </div>
    </main>
  </section>
  <section id="ticket">
    <div class="row cards-container">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Estudiante</h5>
          <h6 class="card-subtitle mb-2 text-muted">Tienen un descuento</h6>
          <h5 class="card-title">80%</h5>
          <p class="card-text">* presentar documentacion</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Trainee</h5>
          <h6 class="card-subtitle mb-2 text-muted">Tienen un descuento</h6>
          <h5 class="card-title">50%</h5>
          <p class="card-text">* presentar documentacion</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Junior</h5>
          <h6 class="card-subtitle mb-2 text-muted">Tienen un descuento</h6>
          <h5 class="card-title">15%</h5>
          <p class="card-text">* presentar documentacion</p>
        </div>
      </div>
    </div>
    <div class="venta">
      <h5>VENTA</h5>
      <h4>VALOR DEL TICKET 200$</h4>
    </div>
    <div>

      <div class="row compra-ticket">
        <div class="col">
          <input type="text" class="form-control" id="nombre" placeholder="Nombre" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" id="apellido" placeholder="Apellido" aria-label="Last name">
        </div>
      </div>
      <div class="row compra-ticket">
        <div class="col">
          <label for="cantidad" class="form-label">Cantidad</label>
          <input type="text" class="form-control" id="cantidad" placeholder="cantidad" aria-label="Cantidad">
        </div>
        <div class="col">
          <label for="categoria" class="form-label">Categoria</label>
          <select class="form-select" id="categoria" aria-label="Categoria">
            <option value="1" selected>Estudiante</option>
            <option value="2">Trainee</option>
            <option value="3">Junior</option>
          </select>
        </div>
        <div class="mb-3">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
            placeholder="Total a Pagar: $"></textarea>
        </div>
        <div class="botones">
          <button type="button" class="btn btn-primary btn-lg" onclick="borrar()">Borrar</button>
          <button type="button" class="btn btn-secondary btn-lg" onclick="mostrarResumen()">Resumen</button>
        </div>
      </div>
    </div>
  </section>
  

<?php include 'navbar.php';?>
<?php include 'header.php';?>

<div class="container mt-5">

    <div class="row align-items-center mb-5">
        <div class="col-md-4">
            <iframe style="border-radius:12px"
                src="https://open.spotify.com/embed/track/0kMB2UQtjSJl60RogKOunE"
                width="100%" height="352" frameBorder="0"
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy">
            </iframe>

        </div>

        <div class="col-md-6 offset-md-1 texto-cancion">
            <h5>Esta canción me recuerda a ti</h5>
            <p>
                No te detengas por cansancio, detente solo para reconocer lo lejos que has llegado.
                Deseo que siempre seas consciente del impacto de tus acciones, que tengas la certeza de que ningún esfuerzo ha pasado desapercibido.
                Eres el resultado de cada vez que lo intentaste incluso cuando no querías, cuando costaba y nadie veia.

                Aún te esperan cosas grandes, pero mientras llegan, honra y disfruta todo lo que hoy estás construyendo.
            </p>
        </div>
    </div>

  <div class="carrusel">

    <div class="card-img" onclick="toggleTexto(this)">
        <img src="./img/img1.jpg" alt="">
        <div class="frase">Eres alguien dispuesto a darlo todo siempre,“Todos tenemos sueños. Pero para convertirlos en realidad, se necesita una enorme determinación, dedicación y disciplina.”</div>
    </div>

    <div class="card-img" onclick="toggleTexto(this)">
        <img src="./img/img2.jpg" alt="">
        <div class="frase">Corres tan rápido que dejas tus miedos atras, sigue asi porque lo que viene será mejor</div>
    </div>

    <div class="card-img" onclick="toggleTexto(this)">
        <img src="./img/img3.jpg" alt="">
        <div class="frase">“La diferencia entre lo imposible y lo posible está en la determinación de una persona.” Alguna vez soñaste con estar aqui, hoy es tu realidad</div>
    </div>

    <div class="card-img" onclick="toggleTexto(this)">
        <img src="./img/img4.jpg" alt="">
        <div class="frase">Honor a quien honor merece, esta página es un reconocimiento al hombre que eres y al que sigues cnstruyendo</div>
    </div>

</div>


   
<?php include 'footer.php';?>

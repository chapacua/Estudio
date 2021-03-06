<style type="text/css">
.menudes {
position: relative;
overflow: hidden;
width: 70%;
margin: 10px auto 10px;
border-radius: 8px;
background: #025BA3;
text-align:center;
}
.menudes a {
display: inline-block;
width: 25%; /* 100% dividido por el n�mero de elementos del men� */
box-sizing: border-box;
padding: 10px 5px;
color: #fff;
text-decoration: none;
}
.marca {
position: absolute;
bottom: 4px;
left: -12.5%; /* Al menos 1/2 del ancho de cada enlace */
width: 12.5%; /* 1/2 del ancho de cada enlace */
height: 4px;
background: #fff;
transition: 0.5s ease-in-out;
}
.menudes a:nth-child(1):hover ~ .marca {
left: 6.25%; /* 1/4 Ancho del enlace */
}
.menudes a:nth-child(2):hover ~ .marca {
left: 31.25%; /* 1/4 Ancho del enlace + 1 vez ancho enlace */
}
.menudes a:nth-child(3):hover ~ .marca {
left: 56.25%; /* 1/4 Ancho del enlace + 2 veces ancho enlace */
}
.menudes a:nth-child(4):hover ~ .marca {
left: 81.5%; /* 1/4 Ancho del enlace + 3 veces ancho enlace */
}
</style>

<div class="menudes">
<a href="">Inicio</a>
<a href="">Portfolio</a>
<a href="">Acerca de</a>
<a href="">Contacto</a>
<div class="marca"></div>
</div>

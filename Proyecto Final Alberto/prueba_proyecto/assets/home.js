import React, { useState } from 'react';
import '../assets/hojas-de-estilo/home.css';
import Instagram from '../assets/imagenes/instagram-logo (1).png';
import Github from '../assets/imagenes/github-logo.png';
import Logofit from '../assets/imagenes/logo-Photoroom.png-Photoroom.png';
import Fondo from '../assets/imagenes/fondoPadel.jpg'
import MySwiper from './components/MySwiper';



function Home() {

  return (

    <div>
      <div className='fondoInicio'>
        <div className='imagenInicio'>
          <img src={Fondo} alt='imagenFondo'></img>
        </div>
        <div className="tituloInicio">
          <h3>Descubre en un instante dónde y cuando jugar a pádel con tu grupo de amigos</h3>
        </div>
      </div>

      <div className="container">
        <div className="imagenHome">
          <h2>Plazafit te lo pone en bandeja</h2>
        </div>

        <div className="cajas">
          <div className="caja1">
            <h3>Encuentra</h3>
            <hr />
            <p>Con Plazafit tienes la posibilidad de buscar lugar para tus partidos privados con amigos, para el día y hora que necesites.</p>
          </div>

          <div className="caja2">
            <h3>Reserva</h3>
            <hr />
            <p>Con este sistema de reservas te ahorramos la búsqueda del número de teléfono. Es sencillo, registra, elige y haz click en reserva.</p>
          </div>

          <div className="caja3">
            <h3>Nuestra comunidad nos inspira</h3>
            <hr />
            <p>Forma parte de nuestra comunidad de usuarios, esos locos de este deporte que cada día crece más. Estás a un solo click de jugar siempre que lo necesites y quieras.</p>
          </div>
        </div>
      </div>
      <div>
        <MySwiper />
      </div>


      <div className="container2">
        <h3>¿Qué es Plazafit?</h3>
        <p>Plazafit es la comunidad de jugadores y usuarios del deporte de moda en el mundo, ¡el PÁDEL! Está hecha por y para ti, porque queremos que formes parte de ella.</p>
        <p>Cada vez que pienses en tu deporte, sabrás que solo tienes que preocuparte de jugar, de lo demás se encarga Plazafit. Lo que sucede durante tu partido es tan importante como lo que pasa antes y después, por eso nosotros nos enfocamos en ayudarte a disfrutar.</p>
        <p>Plazafit es el lugar donde todo el mundo aporta sobre esta comunidad, ayudando a que este deporte siga creciendo cada vez más.</p>
      </div>

      <footer class="footer">
        <div class="footer-container">
          <div class="footer-section">
            <h3>Contacto</h3>
            <p>Email: info@plazafit.com</p>
            <p>Teléfono: +34 123 456 789</p>
          </div>
          <div class="footer-section">
            <h3>Redes Sociales</h3>
            <a href="#"><img src={Github} alt="Facebook"></img></a>
            <a href="#"><img src={Instagram} alt="Instagram"></img></a>
          </div>
          <div class="footer-section">
            <h3>Sobre Plazafit</h3>
            <p>Plazafit es la comunidad de jugadores y usuarios del deporte de moda en el mundo, ¡el PÁDEL!</p>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2024 Plazafit. Todos los derechos reservados.</p>
        </div>
      </footer>

    </div>
  );
}

export default Home;

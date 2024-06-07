import React from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import '../hojas-de-estilo/swiper.css';
import 'swiper/css';

import Pala from '../imagenes/palaPadel.jpg';
import Pista from '../imagenes/pistaPadel.jpg';
import Practica from '../imagenes/padelPractica.jpg';
import PadelHombre from '../imagenes/hombrePadel.jpg';

const MySwiper = () => {
  const handleReservationClick = (e) => {
    e.preventDefault();

    if (window.isAuthenticated === 'false') {
      toast.error('Necesitas estar logueado para hacer una reserva.');
    } else {
      window.location.href = '/cita';
    }
  };

  return (
    <div>
      <Swiper
      
        loop={true}
        spaceBetween={0}
        slidesPerView={1}
        initialSlide={0}
        navigation
        pagination={{ clickable: true }}
      >
        <SwiperSlide>
          <a href="/cita" onClick={handleReservationClick}>
            <div className='slideContent'>
              <img src={Pala} alt='palaPadel' />
              <div className="overlay">Reservar</div>
            </div>
          </a>
        </SwiperSlide>
        <SwiperSlide>
          <a href="/cita" onClick={handleReservationClick}>
            <div className='slideContent'>
              <img src={Pista} alt='pista de padel' />
              <div className="overlay">Reservar</div>
            </div>
          </a>
        </SwiperSlide>
        <SwiperSlide>
          <a href="/cita" onClick={handleReservationClick}>
            <div className='slideContent'>
              <img src={Practica} alt='pista de padel' />
              <div className="overlay">Reservar</div>
            </div>
          </a>
        </SwiperSlide>
        <SwiperSlide>
          <a href="/cita" onClick={handleReservationClick}>
            <div className='slideContent'>
              <img src={PadelHombre} alt='pista de padel' />
              <div className="overlay">Reservar</div>
            </div>
          </a>
        </SwiperSlide>        
      </Swiper>
      <ToastContainer />
    </div>
  );
};

export default MySwiper;

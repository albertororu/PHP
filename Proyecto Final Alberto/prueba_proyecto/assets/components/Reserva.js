// assets/js/components/Modal.js
import React from 'react';
import '../hojas-de-estilo/reserva.css';

const Reserva = ({ show, onClose, children }) => {
    if (!show) {
        return null;
    }

    return (
        <div className="modal">
            <div className="modal-content">
                <span className="close" onClick={onClose}>&times;</span>
                {children}
            </div>
        </div>
    );
};

export default Reserva;

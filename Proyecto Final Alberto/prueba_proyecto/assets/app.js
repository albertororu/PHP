import './styles/app.css';
import React from 'react';
import ReactDOM from 'react-dom/client';
import Home from './home.js';
import Login from './components/Login.js';


// Obtén las variables del Twig en el contexto de JavaScript, si están presentes
const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
const lastUsername = document.querySelector('meta[name="last-username"]')?.getAttribute('content');
const error = document.querySelector('meta[name="error"]')?.getAttribute('content');

// Montaje del componente Home
if (document.getElementById('root')) {
  const root = ReactDOM.createRoot(document.getElementById('root'));
  root.render(
    <React.StrictMode>
      <Home />
    </React.StrictMode>
  );
}

// Montaje del componente LoginForm
if (document.getElementById('root2')) {
  const root2 = ReactDOM.createRoot(document.getElementById('root2'));
  root2.render(
    <React.StrictMode>
      <Login csrfToken={csrfToken} lastUsername={lastUsername} error={error} />
    </React.StrictMode>
  );
}


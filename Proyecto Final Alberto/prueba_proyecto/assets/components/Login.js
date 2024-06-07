import React, { useState } from 'react';
import '../hojas-de-estilo/login.css';


function LoginForm({ lastUsername, error, csrfToken }) {
  const [username, setUsername] = useState(lastUsername || '');
  const [password, setPassword] = useState('');

  return (
    <div className='contenedor'>
    <div className="contenedor1">
    {error && <div className="error">{error}</div>}

      <h1 className="tituloContenedor">Iniciar Sesión</h1>
      <form method="post" action="/login">
        <label htmlFor="username">Username</label>
        <input
          type="text"
          value={username}
          onChange={(e) => setUsername(e.target.value)}
          name="_username"
          id="username"
          className="form-control"
          autoComplete="email"
          required
          autoFocus
        />
        <label htmlFor="password">Password</label>
        <input
          type="password"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
          name="_password"
          id="password"
          className="form-control"
          autoComplete="current-password"
          required
        />

        <input type="hidden" name="_csrf_token" value={csrfToken} />

        <button className="botonEnviar" type="submit">
          Enviar
        </button>
      </form>

      <div className="botonRegistro">
        <a className="registro" href="/register">Registrarse</a>
      </div>
    </div>
    </div>
  );
}

export default LoginForm;

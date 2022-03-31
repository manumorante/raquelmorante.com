import React from 'react'
import ReactDOM from 'react-dom'
import './index.css'

ReactDOM.render(
  <React.StrictMode>
    <main className='container mx-auto p-11 text-center'>
      <header>
        <h1 className='text-2xl font-bold'>Raquel Morante</h1>
      </header>

      <footer className='text-neutral-400'>© {new Date().getFullYear()}</footer>
    </main>
  </React.StrictMode>,
  document.getElementById('root')
)

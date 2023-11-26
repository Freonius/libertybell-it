import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import reportWebVitals from './reportWebVitals';

import TopPart from './components/TopPart';
import BottomPart from './components/BottomPart';

import HomePage from './pages/HomePage';
import NotFound from './pages/NotFound';
import UnaCasaDivisa from './pages/libri/UnaCasaDivisa';

import './styles/main.css';
import './js/main';
import './js/slicknav';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <Router>
    <React.StrictMode>
      <TopPart />
      <div className="site-content container">
        <main id="main" className="site-main">
          <article className="homepage-article page type-page status-publish hentry">
            <div className="entry-content">
              <div id="content">Inizio del contenuto</div>
              <Routes>
                <Route
                  path="/libri/una-casa-divisa"
                  element={<UnaCasaDivisa />}
                />
                <Route path="/" element={<HomePage />} />
                <Route path="*" element={<NotFound />} status={404} />
              </Routes>
            </div>
          </article>
        </main>
      </div>
      <BottomPart />
    </React.StrictMode>
  </Router>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();

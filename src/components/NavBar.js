import React from 'react';
import { Link } from 'react-router-dom';

class NavBar extends React.Component {
  componentDidMount() {}

  render() {
    return (
      <>
        <nav id="site-navigation" className="site-navigation navbar">
          <div
            id="primary-menu"
            className="menu nav-menu collapse navbar-collapse"
          >
            <ul id="menu">
              <li className="page_item nav-item">
                <a href="/">Home</a>
              </li>
              <li className="page_item nav-item">
                <a href="/about/">About</a>
              </li>
              <li className="page_item page_item_has_children nav-item dropdown">
                <a
                  href="/libri/"
                  className="nav-link dropdown-toggle"
                  onClick={() => false}
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Libri
                </a>
                <ul className="children">
                  <li className="page_item">
                    <a href="/libri/amequohi/">Amequohi</a>
                  </li>
                  <li className="page_item">
                    <Link to="/libri/una-casa-divisa/">
                      Una casa divisa &#8211; Cinque racconti sulla Guerra
                      Civile americana
                    </Link>
                  </li>
                  <li className="page_item">
                    <a href="/libri/americani-nella-grande-guerra/">
                      Americani nella Grande Guerra
                    </a>
                  </li>
                  <li className="page_item">
                    <a href="/libri/incantevole-estate-in-montana/">
                      Un’incantevole estate in Montana
                    </a>
                  </li>
                  <li className="page_item">
                    <a href="/libri/del-49-cercatori-doro-altri-pionieri-california/">
                      Noi del ‘49 &#8211; Cercatori d’oro e altri pionieri in
                      California
                    </a>
                  </li>
                  <li className="page_item">
                    <a href="/libri/un-cowboy-del-texas-quindici-anni-di-avventure-cavallo/">
                      Un cowboy del Texas &#8211; Quindici anni di avventure a
                      cavallo
                    </a>
                  </li>
                  <li className="page_item">
                    <a href="/libri/la-guerra-civile-americana-nelle-memorie-un-soldato-comune/">
                      La Guerra Civile americana nelle memorie di un soldato
                      comune
                    </a>
                  </li>
                </ul>
              </li>
              <li className="page_item nav-item">
                <a href="/servizi-editoriali/">Servizi editoriali</a>
              </li>
              <li className="page_item nav-item">
                <a href="/contatti/">Contatti</a>
              </li>
              <li className="page_item nav-item">
                <a href="/blog/">Blog</a>
              </li>
              <li className="page_item nav-item">
                <a href="/cookie-policy/">Cookie Policy</a>
              </li>
            </ul>
          </div>
        </nav>
      </>
    );
  }
}

export default NavBar;

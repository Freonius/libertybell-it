import React from 'react';
import { Link } from 'gatsby';

export class NavBar extends React.Component {
  componentDidMount() {}

  render() {
    return (
      <nav id="site-navigation" className="site-navigation navbar">
        <div
          id="primary-menu"
          className="menu nav-menu collapse navbar-collapse"
        >
          <ul id="menu">
            <li className="page_item nav-item">
              <Link to="/">Home</Link>
            </li>
            <li className="page_item nav-item">
              <Link to="/about/">About</Link>
            </li>
            <li className="page_item page_item_has_children nav-item dropdown">
              <Link
                to="/libri/"
                className="nav-link dropdown-toggle"
                onClick={() => false}
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Libri
              </Link>
              <ul className="children">
                <li className="page_item">
                  <Link to="/libri/una-nuova-vita-in-america/">
                    Una nuova vita in America &#8211; Due Millennial e una Green
                    Card
                  </Link>
                </li>
                <li className="page_item">
                  <Link to="/libri/amequohi/">Amequohi</Link>
                </li>
                <li className="page_item">
                  <Link to="/libri/una-casa-divisa/">
                    Una casa divisa &#8211; Cinque racconti sulla Guerra Civile
                    americana
                  </Link>
                </li>
                <li className="page_item">
                  <Link to="/libri/americani-nella-grande-guerra/">
                    Americani nella Grande Guerra
                  </Link>
                </li>
                <li className="page_item">
                  <Link to="/libri/incantevole-estate-in-montana/">
                    Un’incantevole estate in Montana
                  </Link>
                </li>
                <li className="page_item">
                  <Link to="/libri/del-49-cercatori-doro-altri-pionieri-california/">
                    Noi del ‘49 &#8211; Cercatori d’oro e altri pionieri in
                    California
                  </Link>
                </li>
                <li className="page_item">
                  <Link to="/libri/un-cowboy-del-texas-quindici-anni-di-avventure-cavallo/">
                    Un cowboy del Texas &#8211; Quindici anni di avventure a
                    cavallo
                  </Link>
                </li>
                <li className="page_item">
                  <Link to="/libri/la-guerra-civile-americana-nelle-memorie-un-soldato-comune/">
                    La Guerra Civile americana nelle memorie di un soldato
                    comune
                  </Link>
                </li>
              </ul>
            </li>
            {/* <li className="page_item nav-item">
              <Link to="/servizi-editoriali/">Servizi editoriali</a>
            </li> */}
            <li className="page_item nav-item">
              <Link to="/contatti/">Contatti</Link>
            </li>
          </ul>
        </div>
      </nav>
    );
  }
}

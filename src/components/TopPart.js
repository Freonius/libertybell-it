import logoPng from '../img/logo.png';
import logoWebp from '../img/logo.webp';
import NavBar from './NavBar';
import QuotePart from './Quote';
import BackgroundPart from './BackgroundPart';

function TopPart({ changeEveryXMinutes = 3 }) {
  return (
    <>
      <BackgroundPart changeEveryXMinutes={changeEveryXMinutes} />
      <div id="fb-root"></div>
      <a className="skip-link screen-reader-text" href="#content">
        Vai al contenuto
      </a>

      <header id="masthead" className="site-header">
        <div id="header-image">
          <div id="social-icons">
            <a
              target="_blank"
              href="https://www.instagram.com/libertybelled/"
              title="Instagram"
              rel="noreferrer"
            >
              <span className="fa-stack fa-lg">
                {' '}
                <i className="fa fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
            </a>
            <a
              target="_blank"
              href="mailto:info@libertybell.it"
              title="Mail"
              rel="noreferrer"
            >
              <span className="fa-stack fa-lg">
                {' '}
                <i className="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
              </span>
            </a>
            <a
              target="_blank"
              href="https://wa.me/393332158672"
              title="WhatsApp"
              rel="noreferrer"
            >
              <span className="fa-stack fa-lg">
                {' '}
                <i className="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </div>{' '}
          <a href="/" rel="home" className="liberty-link">
            <picture>
              <source srcSet={logoWebp} type="image/webp" />
              <source srcSet={logoPng} type="image/png" />
              <img
                src={logoPng}
                alt="Liberty Bell Edizioni - Logo"
                className="liberty-logo"
              />
            </picture>
          </a>
          <div className="site-branding">
            <p className="site-title">
              <a href="/" rel="home">
                Liberty Bell Edizioni
              </a>
            </p>
            <QuotePart changeEveryXMinutes={changeEveryXMinutes} />
          </div>
        </div>
      </header>
      <NavBar />
    </>
  );
}

export default TopPart;

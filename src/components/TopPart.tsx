import React from 'react';
import { Link } from 'gatsby';
// @ts-ignore
import logoPng from '../img/logo.png';
// @ts-ignore
import logoWebp from '../img/logo.webp';
import { NavBar } from './NavBar';
import { QuotePart } from './Quote';
import { BackgroundPart } from './BackgroundPart';

export function TopPart({
  changeEveryXMinutes = 3,
}: {
  changeEveryXMinutes?: number;
}) {
  return (
    <>
      <BackgroundPart changeEveryXMinutes={changeEveryXMinutes} />
      <div id="fb-root" />
      <a className="skip-link screen-reader-text" href="#content">
        Vai al contenuto
      </a>

      <header id="masthead" className="site-header">
        <div id="header-image">
          <div id="social-icons">
            {/* eslint-disable-next-line jsx-a11y/control-has-associated-label */}
            <a
              target="_blank"
              href="https://www.instagram.com/libertybelled/"
              title="Instagram"
              rel="noreferrer"
            >
              <span className="fa-stack fa-lg">
                <i className="fa fa-instagram fa-stack-1x fa-inverse" />
              </span>
            </a>
            {/* eslint-disable-next-line jsx-a11y/control-has-associated-label */}
            <a
              target="_blank"
              href="mailto:info@libertybell.it"
              title="Mail"
              rel="noreferrer"
            >
              <span className="fa-stack fa-lg">
                <i className="fa fa-envelope-o fa-stack-1x fa-inverse" />
              </span>
            </a>
            {/* eslint-disable-next-line jsx-a11y/control-has-associated-label */}
            <a
              target="_blank"
              href="https://wa.me/393332158672"
              title="WhatsApp"
              rel="noreferrer"
            >
              <span className="fa-stack fa-lg">
                <i className="fa fa-whatsapp fa-stack-1x fa-inverse" />
              </span>
            </a>
          </div>
          <Link to="/" rel="home" className="liberty-link">
            <picture>
              <source srcSet={logoWebp} type="image/webp" />
              <source srcSet={logoPng} type="image/png" />
              <img
                src={logoPng}
                alt="Liberty Bell Edizioni - Logo"
                className="liberty-logo"
              />
            </picture>
          </Link>
          <div className="site-branding">
            <p className="site-title">
              <Link to="/" rel="home">
                Liberty Bell Edizioni
              </Link>
            </p>
            <QuotePart changeEveryXMinutes={changeEveryXMinutes} />
          </div>
        </div>
      </header>
      <NavBar />
    </>
  );
}

TopPart.defaultProps = {
  changeEveryXMinutes: 3,
};

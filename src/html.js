import React from 'react';
import PropTypes from 'prop-types';
import LogoSquare from './img/logo-square.png';

export default function HTML(props) {
  return (
    <html lang="it-IT" prefix="og: http://ogp.me/ns#" {...props.htmlAttributes}>
      <head>
        <meta charSet="utf-8" />
        <meta httpEquiv="x-ua-compatible" content="ie=edge" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta charSet="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="icon" href={LogoSquare} sizes="32x32" />
        <link rel="icon" href={LogoSquare} sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href={LogoSquare} />
        <meta name="msapplication-TileImage" content={LogoSquare} />
        <meta property="og:locale" content="it_IT" />
        <meta property="og:type" content="website" />
        {/* <meta property="og:url" content="{REALADDR}/{CANON}" /> */}
        <meta property="og:site_name" content="Liberty Bell Edizioni" />
        {/* <meta name="description" content="{DESCRIPTION}" />
        <meta name="robots" content="{ROBOTS}" />
        <meta name="keywords" content="{KEYWORDS}" />
        <link rel="canonical" href="{REALADDR}/{CANON}" />
        
        
        <meta property="og:image" content="{REALADDR}/img/{COVER}" /> */}
        <link rel="apple-touch-icon-precomposed" href="/img/logo-square.png" />
        <meta name="msapplication-TileImage" content="/img/logo-square.png" />
        <link rel="shortlink" href="https://www.libertybell.it/" />
        <script
          src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js"
          async="async"
        ></script>
        {props.headComponents}
      </head>
      <body {...props.bodyAttributes}>
        {props.preBodyComponents}
        <div
          key={`body`}
          id="___gatsby"
          dangerouslySetInnerHTML={{ __html: props.body }}
        />
        {props.postBodyComponents}
      </body>
    </html>
  );
}

HTML.propTypes = {
  htmlAttributes: PropTypes.object,
  headComponents: PropTypes.array,
  bodyAttributes: PropTypes.object,
  preBodyComponents: PropTypes.array,
  body: PropTypes.string,
  postBodyComponents: PropTypes.array,
};

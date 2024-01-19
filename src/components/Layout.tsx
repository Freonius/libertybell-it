import React from 'react';
// import { library } from '@fortawesome/fontawesome-svg-core';
// import { fas } from '@fortawesome/free-solid-svg-icons';
// import '@fortawesome/fontawesome-svg-core/styles.css';
import 'jquery';
import 'bootstrap';
import '../styles/main.scss';
import '../js/main';
import '../js/slicknav';
import { TopPart } from './TopPart';
import { BottomPart } from './BottomPart';

// library.add(fas);
export function Layout({ children }: { children: React.ReactNode }) {
  return (
    <>
      <TopPart />
      <div className="site-content container">
        <main id="main" className="site-main">
          <article className="homepage-article page type-page status-publish hentry">
            <div className="entry-content">
              <div id="content">Inizio del contenuto</div>
              {children}
            </div>
          </article>
        </main>
      </div>
      <BottomPart />
    </>
  );
}

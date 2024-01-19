import React from 'react';
import { Link } from 'gatsby';

export function BookForCatalogue({
  title,
  author,
  cover,
  link,
  subtitle = null,
}: {
  title: string;
  author: string;
  cover: string;
  link: string;
  subtitle?: string | null;
}) {
  const fullTitle = title + (subtitle ? `: ${subtitle}` : '');
  return (
    <Link to={`/libri/${link}`}>
      <div className="book-for-catalogue">
        <div className="">
          <img
            className=""
            src={`/img/tmb350-${cover}.jpg`}
            alt={`${fullTitle} - ${author}`}
            title={`${fullTitle} - ${author}`}
          />
        </div>
        {/* <div class="lb-hright">
            <p class="lb-nounder">
              <strong>{title}</strong>
              {subtitle ? (
                <>
                  <br />
                  {subtitle}
                </>
              ) : (
                ''
              )}
            </p>
            <p class="lb-smaller">
              <span>
                di{' '}
                <strong>
                  <em>{author}</em>
                </strong>
              </span>
              <br />
            </p> */}
        {/* ISBN (co&shy;per&shy;ti&shy;na fles&shy;si&shy;bi&shy;le): 9788894159998<br />
        ISBN (e-book): 9788894159981</p> */}
        {/* </div> */}
      </div>
    </Link>
  );
}

BookForCatalogue.defaultProps = {
  subtitle: null,
};

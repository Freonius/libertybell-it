import React from 'react';
import { BookBanner } from './BookBanner';
import { StoreLink } from '../types';

export function BookPage({
  titleElement,
  description,
  title,
  cover,
  paperbackLinks,
  ebookLinks,
  publicationDate,
  isbns,
  subtitle = null,
}: {
  titleElement: React.ReactNode;
  description: React.ReactNode;
  title: string;
  cover: string;
  paperbackLinks: StoreLink[];
  ebookLinks: StoreLink[];
  publicationDate: string;
  isbns: { paperback: string; ebook: string };
  subtitle?: string | null;
}) {
  return (
    <>
      {titleElement}
      {description}
      <BookBanner
        title={title}
        cover={cover}
        paperbackLinks={paperbackLinks}
        ebookLinks={ebookLinks}
        subtitle={subtitle}
      />
      <p>
        <strong>Data di pubblicazione:</strong>
        {` ${publicationDate}`}
        <br />
        <strong>ISBN:</strong>
        {` ${isbns.paperback} (copertina flessibile) &#8211; ${isbns.ebook} (e-book)`}
      </p>
    </>
  );
}

BookPage.defaultProps = {
  subtitle: null,
};

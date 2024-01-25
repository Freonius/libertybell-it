import React from 'react';
import { BookBanner } from './BookBanner';
import { StoreLink } from '../types';
import Data from '../data/books.json';

export function BookPage({
  children,
  jsonKey,
}: {
  children: React.ReactNode;
  jsonKey: string;
}) {
  if (!Data[jsonKey]) {
    return null;
  }
  const {
    title,
    cover,
    paperbackLinks,
    ebookLinks,
    publicationDate,
    isbns,
    subtitle,
  }: {
    title: string;
    subtitle: string | null;
    cover: string;
    paperbackLinks: StoreLink[];
    ebookLinks: StoreLink[];
    publicationDate: string;
    isbns: { paperback: string; ebook: string };
  } = Data[jsonKey];

  return (
    <>
      {children}
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
        {` ${isbns.paperback} (copertina flessibile) – ${isbns.ebook} (e-book)`}
      </p>
    </>
  );
}

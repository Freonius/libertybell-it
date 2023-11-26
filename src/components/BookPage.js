import BookBanner from './BookBanner';
/**
 * @typedef {import('react').JSX.Element} Element
 */

/**
 * @typedef {{paperback: String, ebook: String}} Isbn
 */

/**
 *
 * @typedef {Array<{store: String, link: String}>} Links
 */

/**
 *
 * @param {{titleElement: Element, description: Element | Element[], title: String, cover: String, paperbackLinks: Links, ebookLinks: Links, publicationDate: String, isbns: Isbn, subtitle: String?}} props
 * @returns
 */
function BookPage({
  titleElement,
  description,
  title,
  cover,
  paperbackLinks,
  ebookLinks,
  publicationDate,
  isbns,
  subtitle = null,
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
        <strong>Data di pubblicazione:</strong> {publicationDate}
        <br />
        <strong>ISBN:</strong> {isbns.paperback} (copertina flessibile) &#8211;{' '}
        {isbns.ebook} (e-book)
      </p>
    </>
  );
}

export default BookPage;

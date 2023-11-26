/**
 * @typedef {import('react').JSX.Element} Element
 */

/**
 * @param {{ title: String, cover: String, paperbackLinks: Array<{store: String, link: String}>, ebookLinks: Array<{store: String, link: String}>, subtitle: String?}} props
 * @returns {Element}
 */
function BookBanner({
  title,
  cover,
  paperbackLinks,
  ebookLinks,
  subtitle = null,
}) {
  const fullTitle = title + (subtitle ? ': ' + subtitle : '');
  return (
    <>
      <div className="cntainer cnt2 cf bg-image-book">
        <img
          className="bg"
          src={`/img/tmb350-${cover}.jpg`}
          alt={fullTitle}
          title={fullTitle}
        />
        <div className="animation-element slide-left testimonial">
          <div className="bk-cv">
            <img
              className="cov"
              src={`/img/tmb350-${cover}.jpg`}
              alt={fullTitle}
              title={fullTitle}
            />
          </div>
          <div className="half-pricer">
            <div className="feathered">
              <h5 className="ribbon">
                <span className="ribbon-content">
                  Di&shy;spo&shy;ni&shy;bi&shy;le nei prin&shy;ci&shy;pa&shy;li
                  store
                </span>
                <br />
              </h5>
              <ul>
                <li>Copertina flessibile:</li>
                {paperbackLinks.map(({ store, link }, idx) => (
                  <li key={`ebook-link-${idx}`}>
                    <a href={link} target="_blank" rel="noreferrer">
                      {store}
                    </a>
                  </li>
                ))}
                <li>...e in tutte le migliori librerie!</li>
                <li>&nbsp;</li>
                <li>Versione e-book:</li>
                {ebookLinks.map(({ store, link }, idx) => (
                  <li key={`ebook-link-${idx}`}>
                    <a href={link} target="_blank" rel="noreferrer">
                      {store}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default BookBanner;

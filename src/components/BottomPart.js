function BottomPart() {
  return (
    <>
      <div id="footer-wrapper">
        <div
          id="footer-sidebar"
          className="widget-area clear container"
          role="complementary"
        ></div>

        <footer id="colophon" className="site-footer">
          <div className="site-info">
            <p>
              Liberty Bell di Amelia Chierici - P. IVA IT11360270968 -{' '}
              <a
                target="_blank"
                href="mailto:info@libertybell.it"
                rel="noreferrer"
              >
                info@libertybell.it
              </a>{' '}
              -{' '}
              <a
                target="_blank"
                href="https://wa.me/393332158672"
                rel="noreferrer"
              >
                <span className="fa-stack fa-lg">
                  {' '}
                  <i className="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                </span>{' '}
                +39 333 21 58 672
              </a>
            </p>
          </div>
        </footer>
      </div>
    </>
  );
}

export default BottomPart;

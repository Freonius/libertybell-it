import React from 'react';

/**
 * Set the page title.
 * @param {string} title
 * @returns {void}
 */
function useTitle(title) {
  React.useEffect(() => {
    const prevTitle = document.title;
    document.title = title;

    return () => {
      document.title = prevTitle;
    };
  }, [title]);
}

export { useTitle };

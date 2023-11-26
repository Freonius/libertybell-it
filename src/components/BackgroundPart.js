import React, { useState, useEffect } from 'react';

const backgrounds = [
  'bck1',
  'bck2',
  'bck4',
  'bck5',
  'bck6',
  'bck7',
  'bck10',
  'bck11',
  'bck12',
];

function BackgroundPart({ changeEveryXMinutes = 3 }) {
  const getNewBackground = () => {
    const background =
      backgrounds[Math.floor(Math.random() * backgrounds.length)];
    const backgroundPart = `background: url("/bck/${background}.jpg") no-repeat; background-size: cover; background-position: 0 50%;`;
    return `#header-image { ${backgroundPart} } @media screen and (min-width: 59.6875em) { body::before { ${backgroundPart} }}`;
  };

  const [background, setBackground] = useState(getNewBackground());
  useEffect(() => {
    const intervalId = setInterval(() => {
      setBackground(getNewBackground());
    }, changeEveryXMinutes * 1000 * 60);

    // Clean up the interval when the component unmounts
    return () => {
      clearInterval(intervalId);
    };
  }, [changeEveryXMinutes]);
  return <style dangerouslySetInnerHTML={{ __html: background }} />;
}

export default BackgroundPart;

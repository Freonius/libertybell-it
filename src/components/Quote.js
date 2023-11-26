import React, { useState, useEffect } from 'react';

/**
 * @type {{quote: string, quoteBy:  string}[]}
 */
const quotes = [
  {
    quoteBy: 'Mark Twain',
    quote: 'History doesn’t repeat itself, but it does rhyme.',
  },
  {
    quoteBy: 'John Adams',
    quote:
      'Facciamo dunque tesoro, con tenerezza e affetto, degli strumenti della conoscenza. Osiamo leggere, pensare, parlare e scrivere.',
  },
  {
    quoteBy: 'Condoleezza Rice',
    quote:
      'L’essenza dell’America &mdash; ciò che ci unisce davvero &mdash; non è l’appartenenza etnica, o la nazionalità o la religione... è un’idea, e che idea: che puoi venire da un ambiente umile e fare grandi cose. Che importa non da dove vieni, ma dove stai andando.',
  },
  {
    quoteBy: 'Ronald Reagan',
    quote:
      'Gli Stati Uniti hanno una Costituzione, dissi, che è diversa dalle altre... Le sue tre parole più importanti sono «We the people», il suo principio più importante, la libertà.',
  },
  {
    quoteBy: 'Rosa Parks',
    quote:
      'Ricordi delle nostre vite, del nostro lavoro e delle nostre azioni si tramanderanno negli altri.',
  },
  {
    quoteBy: 'Marchese de Lafayette',
    quote:
      'L’umanità ha vinto la propria battaglia. La libertà ha ora una nazione.',
  },
];

function QuotePart({ changeEveryXMinutes = 3 }) {
  const [quote, setQuote] = useState('');
  const [quoteBy, setQuoteBy] = useState('');
  const pickRandomQuote = () => {
    const random = Math.floor(Math.random() * quotes.length);
    setQuote(quotes[random].quote);
    setQuoteBy(quotes[random].quoteBy);
  };

  useEffect(() => {
    pickRandomQuote();
    const intervalId = setInterval(() => {
      pickRandomQuote();
    }, changeEveryXMinutes * 60 * 1000);

    // Clean up the interval when the component unmounts
    return () => {
      clearInterval(intervalId);
    };
  }, [changeEveryXMinutes]);
  return (
    <blockquote>
      {quote}
      <cite>{quoteBy}</cite>
    </blockquote>
  );
}

export default QuotePart;

import React from 'react';
import { BookPage, Dropcap, Layout } from '../../components';
import { UnaCasaDivisaTitle } from '../../components/titles';

export default function UnaCasaDivisa() {
  return (
    <Layout>
      <BookPage
        titleElement={<UnaCasaDivisaTitle />}
        description={(
          <>
            <p>
              <Dropcap>U</Dropcap>
              na raccolta di cinque racconti di cinque grandi autori che offre
              uno spunto di riflessione sull’evento storico più tragico e
              determinante della storia americana: la Guerra Civile. Come
              dichiara Abraham Lincoln nel suo famoso discorso del 16 giugno
              1858, gli Stati Uniti sono “una casa divisa”, e sarà necessaria
              una guerra lunga e terribile perché essa possa tornare unita.
            </p>
            <p>
              La guerra tocca tutti, non solo chi è impegnato in battaglia.
              Henry James narra di Miss Elizabeth Crowe e del suo promesso
              sposo, John Ford, che si appresta a partire per il fronte. Il
              racconto di Mark Twain, in gran parte autobiografico, mette a
              fuoco, con l’ironia che contraddistingue il grande autore
              americano, il “tetro mestiere” della guerra. Louisa May Alcott - e
              anche in questo caso il racconto trae spunto dall’esperienza
              privata dell’autrice - narra di un’infermiera che, chiamata ad
              accudire un nemico moribondo, si avvicina al proprio aiutante di
              colore e alla sua tragica storia. Willa Cather ambienta il proprio
              scritto nella Parigi di inizio Novecento, nello studio di uno
              scultore americano che tempo prima, durante un soggiorno a casa,
              aveva appreso la storia di un suo zio morto in guerra. E infine
              Charles W. Chesnutt, uno dei primi grandi scrittori afroamericani,
              invita a riflettere, attraverso la vicenda di un barbiere, sul
              fatto che a decenni di distanza dalla Guerra Civile - anche in
              questo caso siamo a inizio Novecento - la popolazione di colore
              non ha ancora finito di combattere la propria battaglia.
            </p>
          </>
        )}
        title="Una casa divisa"
        subtitle="Cinque racconti sulla Guerra Civile americana"
        cover="Una_casa_divisa"
        publicationDate="2020"
        paperbackLinks={[{ store: 'Amazon.it', link: 'http://blabla' }]}
        ebookLinks={[{ store: 'Amazon Kindle', link: 'http://blabla' }]}
        isbns={{
          paperback: '978-880-0-0000-0000',
          ebook: '978-880-0-0000-0000',
        }}
      />
    </Layout>
  );
}

import React from 'react';
import { BookPage, Dropcap, Layout } from '../../components';
import { TedTitle } from '../../components/titles';

export default function Page() {
  return (
    <Layout>
      <BookPage jsonKey="ted">
        <TedTitle />
        <p>
          <Dropcap>X</Dropcap>
        </p>
      </BookPage>
    </Layout>
  );
}

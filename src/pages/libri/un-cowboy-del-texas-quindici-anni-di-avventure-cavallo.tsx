import React from 'react';
import { BookPage, Dropcap, Layout } from '../../components';
import { SiringoTitle } from '../../components/titles';

export default function Page() {
  return (
    <Layout>
      <BookPage jsonKey="siringo">
        <SiringoTitle />
        <p>
          <Dropcap>X</Dropcap>
        </p>
      </BookPage>
    </Layout>
  );
}

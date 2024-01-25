import React from 'react';
import { BookPage, Dropcap, Layout } from '../../components';
import { BowerTitle } from '../../components/titles';

export default function Page() {
  return (
    <Layout>
      <BookPage jsonKey="bower">
        <BowerTitle />
        <p>
          <Dropcap>X</Dropcap>
        </p>
      </BookPage>
    </Layout>
  );
}

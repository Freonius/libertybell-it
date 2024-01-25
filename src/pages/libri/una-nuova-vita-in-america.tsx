import React from 'react';
import { BookPage, Dropcap, Layout } from '../../components';
import { GreenCardTitle } from '../../components/titles';

export default function Page() {
  return (
    <Layout>
      <BookPage jsonKey="unaNuovaVita">
        <GreenCardTitle />
        <p>
          <Dropcap>X</Dropcap>
        </p>
      </BookPage>
    </Layout>
  );
}

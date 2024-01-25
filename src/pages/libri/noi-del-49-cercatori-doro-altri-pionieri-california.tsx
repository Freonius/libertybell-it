import React from 'react';
import { BookPage, Dropcap, Layout } from '../../components';
import { LuzenaTitle } from '../../components/titles';

export default function Page() {
  return (
    <Layout>
      <BookPage jsonKey="luzena">
        <LuzenaTitle />
        <p>
          <Dropcap>X</Dropcap>
        </p>
      </BookPage>
    </Layout>
  );
}

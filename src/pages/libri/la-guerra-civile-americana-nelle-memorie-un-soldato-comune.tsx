import React from 'react';
import { BookPage, Dropcap, Layout } from '../../components';
import { StillwellTitle } from '../../components/titles';

export default function Page() {
  return (
    <Layout>
      <BookPage jsonKey="stillwell">
        <StillwellTitle />
        <p>
          <Dropcap>X</Dropcap>
        </p>
      </BookPage>
    </Layout>
  );
}

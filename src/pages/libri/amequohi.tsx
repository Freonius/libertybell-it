import React from 'react';
import { BookPage, Dropcap, Layout } from '../../components';
import { AmequohiTitle } from '../../components/titles';

export default function Page() {
  return (
    <Layout>
      <BookPage jsonKey="amequohi">
        <AmequohiTitle />
        <p>
          <Dropcap>X</Dropcap>
        </p>
      </BookPage>
    </Layout>
  );
}

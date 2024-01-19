import React from 'react';

export function Dropcap({ children }: { children: React.ReactNode }) {
  return <span className="lb-dropcap">{children}</span>;
}

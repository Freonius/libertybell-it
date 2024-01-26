import * as React from 'react';

export function Seo({
  title,
  keywords,
  description,
  children,
}: {
  title: string;
  keywords: string[];
  description: string;
  children?: React.ReactNode | undefined;
}) {
  return (
    <>
      <title>{`Liberty Bell Edizioni | ${title}`}</title>
      <meta name="keywords" content={keywords.join(', ')} />
      <meta name="description" content={description} />
      {children}
    </>
  );
}

Seo.defaultProps = {
  children: undefined,
};

import * as React from 'react';

export function Seo({
  title,
  keywords,
  description,
  children,
  cover,
}: {
  title: string;
  keywords: string[];
  description: string;
  children?: React.ReactNode | undefined;
  cover?: string | undefined;
}) {
  return (
    <>
      <title>{`${title} | Liberty Bell Edizioni`}</title>
      <meta name="keywords" content={keywords.join(', ')} />
      <meta name="description" content={description} />
      <meta property="og:title" content={title} />
      <meta property="og:description" content={description} />
      {cover !== undefined ? (
        <meta property="og:image" content={cover} />
      ) : null}
      {children}
    </>
  );
}

Seo.defaultProps = {
  children: undefined,
  cover: undefined,
};

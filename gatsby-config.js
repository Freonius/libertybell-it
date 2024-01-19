// eslint-disable-next-line import/no-extraneous-dependencies
// require('dotenv').config({
//   path: '.env',
// });

/**
 * @type {import('gatsby').GatsbyConfig}
 */
module.exports = {
  siteMetadata: {
    title: 'Liberty Bell Edizioni',
    siteUrl: 'https://libertybell.it',
    description: 'Casa editrice di storia americana',
  },
  plugins: ['gatsby-plugin-sass', 'gatsby-plugin-react-helmet'],
};

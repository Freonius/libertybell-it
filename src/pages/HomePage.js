import { useTitle } from '../utils';
import BookForCatalogue from '../components/BookForCatalogue';

function HomePage() {
  useTitle('Liberty Bell Edizioni');
  /**
   * @type {{title: string, author: string, cover: string, link: string, cover: string, subtitle: string | null,}[]}
   */
  const books = [
    {
      title: 'Una casa divisa',
      author:
        'Henry James, Mark Twain, Louisa May Alcott, Willa Cather e Charles W. Chesnutt',
      cover: 'una_casa_divisa',
      link: 'una-casa-divisa',
      subtitle: 'Cinque racconti sulla Guerra Civile americana',
    },
    {
      title: 'La Guerra Civile americana nelle memorie di un soldato comune',
      author: 'Leander Stillwell',
      cover: 'Stillwell',
      link: 'la-guerra-civile-americana-nelle-memorie-un-soldato-comune',
      subtitle: null,
    },
    {
      title: 'Americani nella Grande Guerra',
      author: 'Ted Roosevelt Jr.',
      cover: 'GrandeGuerra',
      link: 'americani-nella-grande-guerra',
      subtitle: null,
    },
    {
      title: 'Noi del ‘49',
      author: 'Luzena S. Wilson',
      cover: 'Luzena',
      link: 'noi-del-49',
      subtitle: 'Cercatori d’oro e altri pionieri in California',
    },
    {
      title: 'Un cowboy del Texas',
      subtitle: 'Quindici anni di avventure a cavallo',
      author: 'Charles A. Siringo',
      cover: 'Siringo',
      link: 'un-cowboy-del-texas',
    },
    // {
    //   author: 'Bertha M. Bower',
    //   cover: 'Bower',
    //   link: 'incantevole-estate-in-montana',
    //   title: 'Un’incantevole estate in Montana',
    //   subtitle: null,
    // },
  ];
  return (
    <div className="home">
      <h1>Catalogo</h1>
      <div className="catalogue">
        {books.map((book) => (
          <BookForCatalogue key={book.link} {...book} />
        ))}
      </div>
    </div>
  );
}

export default HomePage;

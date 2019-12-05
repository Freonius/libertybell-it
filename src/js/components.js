import { Component, ReactDOM } from "react";

// ######################
// ### COMMON WIDGETS ###
// ######################
const PictureWidget = (props) => {
    if (typeof(props.picture) === "string") {
        return <img className="cov lazy" data-src={props.picture} alt={props.title} title={props.title} />;
    }
    else {
        let mainPicture = "";
        let sourceList = [];
        for (let i = 0; i < props.picture.length; i++) {
            if (props.picture[i].type === "main") {
                mainPicture = props.picture[i].url;
            }
            else {
                sourceList.push(props.picture[i]);
            }
        }
        return (
            <picture>
                {sourceList.map((source) => { <source srcset={source.url} type={source.type} /> })}
                <img className="cov lazy" data-src={mainPicture} alt={props.title} title={props.title} />
            </picture>
        );
    }
};

// ##########################
// ### BOOK COVER WIDGETS ###
// ##########################
const Ribbon = (props) => {
    let msg = props.ribbon;
    // TODO: Hyphenate function
    return (
        <h5 className="ribbon">
            <span className="ribbon-content">{msg}</span><br />
        </h5>
    );
};

const handleClick = (e, link) => {
    e.preventDefault();
    trackOutboundLink(link);
};

const BookItem = (props) => {
    return (
        <li>
            <a 
                href={props.url} 
                onClick={(e) => handleClick(e, props.url)} 
                target="_blank">{props.store}</a>
        </li>
    );
};

const BookList = (props) => {
    return(
        <ul>
            <li>Copertina flessibile:</li>
            {props.linkList.paperback.map(
                (el) => {
                    <BookItem url={el.url} store={el.store} /> 
                }
            )}
            <li>&nbsp;</li>
            <li>Versione e-book:</li>
            {props.linkList.ebook.map(
                (el) => {
                    <BookItem url={el.url} store={el.store} /> 
                }
            )}
        </ul>
    );
};

const BookWidget = (props) => {
    return (
        <div className="cntainer cnt2 cf">
            <div className="animation-element slide-left testimonial">
                <div className="bk-cv">
                    <PictureWidget picture={props.picture} title={props.title} />
                </div>
                <div className="half-pricer">
                    <Ribbon ribbon={props.ribbon} />
                    <BookList linkList={props.linkList} />
                </div>
            </div>
        </div>
    );
};

// TODO: props
ReactDOM.render(
    <BookWidget
        title=""
        picture=""
        ribbon=""
        linkList=""
    />,
    document.getElementById("book-widget")
);
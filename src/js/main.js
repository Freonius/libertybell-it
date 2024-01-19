import $ from 'jquery';
// ('use strict');

// Lazy loader for images
const lazyLoad = (selector) => {
  let els = null;
  if (selector.startsWith('.')) {
    selector = selector.replace('.', '');
    els = document.getElementsByClassName(selector);
  } else {
    els = document.getElementsByTagName(selector);
  }
  if (!els) {
    return;
  }
  for (let i = 0; i < els.length; i++) {
    if (els[i].hasAttribute('data-src')) {
      const src = els[i].getAttribute('data-src');
      if (els[i].classList.contains('set')) {
        els[i].setAttribute('srcset', src);
      } else {
        els[i].setAttribute('src', src);
      }
    }
  }
};

// Slide in animation
const checkIfInView = () => {
  let prev_pos = 0;
  const animation_elements = $('.animation-element');
  const window_height = window.height();
  const window_top_position = window.scrollTop();
  const window_bottom_position = window_top_position + window_height;

  let scrolling_down = false;
  if (window_top_position > prev_pos) {
    // eslint-disable-next-line no-unused-vars
    scrolling_down = true;
  }

  prev_pos = window_top_position;
  // eslint-disable-next-line no-unused-vars
  let i = 0;
  $.each(animation_elements, () => {
    i++;
    const $element = $(this);
    const element_height = $element.outerHeight();
    let element_top_position = null;
    try {
      element_top_position = $element.offset().top;
    } catch (error) {
      return;
    }

    const element_bottom_position = element_top_position + element_height * 0.7;
    const inV =
      window_bottom_position > element_top_position + element_height * 0.3 &&
      window_top_position < element_bottom_position;
    element_top_position += element_height * 0.3;

    if (inV) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
};

// const getTotalHeight = () => {
//   let body = document.body;
//   let html = document.documentElement;

//   // Declared as global
//   window.height = Math.max(
//     body.scrollHeight,
//     body.offsetHeight,
//     html.clientHeight,
//     html.scrollHeight,
//     html.offsetHeight
//   );
// };

const mobileBreakpoint = 768;

const stickySidebar = (id, mainContentId, aniDuration = 100) => {
  let useAnimation = aniDuration > 0; // If the duration is 0, don't use animation
  let topPadding = 15;
  let maxMargin = 0;

  if (!$(id).length) {
    return; // Sidebar does not exist
  }

  let offset = $(id).offset();
  const calcMaxMargin = () => {
    if (window.innerWidth <= mobileBreakpoint) {
      maxMargin = 0;
      return;
    }
    let elementHeight = $(id).innerHeight();
    let mainHeight = $(mainContentId).innerHeight();
    maxMargin = mainHeight - elementHeight - topPadding;
  };
  calcMaxMargin(); // ensure it's called at least once
  $(window).on('scroll resize', calcMaxMargin);

  const checkMax = () => {
    return $(window).scrollTop() - offset.top + topPadding <= maxMargin;
  };

  $(window).scroll(function () {
    if ($(window).scrollTop() > offset.top) {
      let margin = 0;
      if (checkMax()) {
        margin = $(window).scrollTop() - offset.top + topPadding;
      } else {
        margin = maxMargin;
      }
      if (useAnimation) {
        $(id).stop().animate(
          {
            marginTop: margin,
          },
          aniDuration,
        );
      } else {
        $(id).css('margin-top', margin.toString() + 'px');
      }
    } else {
      if (useAnimation) {
        $(id).stop().animate(
          {
            marginTop: 0,
          },
          aniDuration,
        );
      } else {
        $(id).css('margin-top', '0px');
      }
    }
  });
};

document.onreadystatechange = function () {
  if (document.readyState !== 'complete') {
    $('#menu').slicknav();
    // menuMaker();
  }
};
window.addEventListener('load', function () {
  window.cookieconsent.initialise({
    palette: {
      popup: {
        background: '#eaf7f7',
        text: '#5c7291',
      },
      button: {
        background: '#56cbdb',
        text: '#ffffff',
      },
    },
    position: 'bottom',
    content: {
      message: 'Questo sito utilizza cookies. ',
      dismiss: 'Ok, ricevuto',
      link: 'Info.',
      href: '/cookie-policy/',
    },
  });
});

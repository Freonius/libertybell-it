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

window.onscroll = function () {
  document.querySelectorAll('.animation-element').forEach((currentTarget) => {
    if (currentTarget === null) return;
    const top = currentTarget.parentElement.offsetTop;
    const windowHeight = window.innerHeight; // e.currentTarget.clientHeight;
    const windowPosition = window.scrollY;
    const realPosition = windowPosition + windowHeight + 80;
    if (realPosition > top) {
      currentTarget.classList.add('in-view');
    } else {
      currentTarget.classList.remove('in-view');
    }
  });
};

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

import {domReady} from '@roots/sage/client';

import { initDarkMode, toggleDarkMode } from './toggleDarkMode.js';
import initTooltip from './tooltip.js';
import initNav from './navigation.js';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }
  
  // Change dom according to theme cookies or system preferences
  initDarkMode();

  // Initialize all tooltips
  initTooltip();

  // Initialize navigation
  initNav();  
  
  document.querySelectorAll('.darkModeToggler').forEach(element => {
    element.addEventListener('click', function() {
      toggleDarkMode(this);
    });
  });

  addEventListener('keydown', (event) => {
    if (event.key === "/") {
      event.preventDefault();
      document.querySelector('.search-field').focus();
    }
    if (event.key === "Escape") {
      event.preventDefault();
      document.querySelector('.search-field').blur();
    }
  });
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

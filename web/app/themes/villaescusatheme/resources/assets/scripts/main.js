// import external dependencies
import 'jquery';
import 'smoothstate/src/jquery.smoothState.js';
// import 'progress-js/src/progress.js';
// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import category2 from './routes/category2';
import category12 from './routes/category12';
import category3 from './routes/category3';
import category13 from './routes/category13';
import home from './routes/home';
import templateInicio from './routes/templateInicio';
import aboutUs from './routes/about';
import single from './routes/single';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  category2,
  category12,
  category3,
  category13,
  single,
  templateInicio,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

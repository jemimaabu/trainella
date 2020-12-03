/* global wp, jQuery */
/**
 * File features.js.
 *
 * Custom JavaScript code for enhancing features
 *
 * Contains script for pages.
 */

( function() {
  const pageTitle = document.getElementsByClassName( 'page-title' )[0];
  
  const handleTitleFade = () => {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
      pageTitle.classList.add("fade-out")
    } else {
      pageTitle.classList.remove("fade-out")
    }
  }

  window.addEventListener("scroll", function() {
    handleTitleFade()
  });

}() );

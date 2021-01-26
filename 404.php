<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dxlm
 */

get_header('404'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		</main><!-- #main -->
<!--                <div style="background-color: black;" class="logo-display">
                    <div class="h-limit">
                            <svg class="f-logo-1" viewBox="0 0 100 100" width="10%">
                                <title>Constructionline logo shape</title>
                                <g>
                                    <rect x="4.27" y="14.84" width="118.44" height="4.37"></rect>
                                    <rect width="127.78" height="11.14"></rect>
                                    <path d="M103.38,123.54a21.39,21.39,0,0,0,3.9-1.31V45.9h-3.9v77.64Z"></path>
                                    <path d="M87.61,124.76c1.26,0.08,2.54.12,3.86,0.08q1.38,0,2.64-.09V45.9h-6.5v78.86Z"></path>
                                    <path d="M19.47,112.57c7.8,0.32,14.55,1,20.49,1.8V45.9H19.47v66.67Z"></path>
                                    <path d="M69.23,120.93c3.22,0.91,6.2,1.75,9.1,2.42V45.9h-9.1v75Z"></path>
                                    <path d="M46.95,115.5c5.42,1,10.12,2.1,14.31,3.21V45.9H46.95v69.6Z"></path>
                                    <path d="M20.2,41.24h87s-2-2.87-2-8.3,4.91-8.31,4.91-8.31H16.75s5.4,2.87,5.4,8.31-2,8.3-2,8.3"></path>
                                </g>
                            </svg>
                            <svg class="f-logo-2" viewBox="0 0 416 91.5" width="70%">
                                <title>Constructionline logo</title>
                                    <g>
                                        <path d="M31.89,42.69a26.38,26.38,0,0,1-9.66,2,23,23,0,0,1-15.62-6.2C2.21,34.26,0,28.78,0,22.1,0,9.15,8.4,0,20.33,0A17.58,17.58,0,0,1,32.19,4.15l1.43-3.07h5.07V15.84H33c-0.65-2.77-1.19-4.22-2.38-5.54A12.17,12.17,0,0,0,21.82,6.8C14,6.8,8,13.13,8,21.68,8,30.59,14.25,37,22.71,37c5.48,0,9.36-2.65,10.31-7h5.66V38.6a34.12,34.12,0,0,1-6.8,4.09"></path>
                                        <path d="M55.44,44.08A13.79,13.79,0,1,1,69.21,30.29,13.69,13.69,0,0,1,55.44,44.08m-0.06-20.9c-3.7,0-6.38,3-6.38,7,0,4.28,2.56,7.17,6.38,7.17s6.38-2.89,6.38-7.1-2.68-7.11-6.38-7.11"></path>
                                        <path d="M92.4,43.6V29c0-4.22-1.55-6.14-4.89-6.14s-5.43,2.41-5.43,6.44v8.13h3v6.2H71.6v-6.2h3.16V23.18H71.6V17H82.09v4.64c2.15-3.67,4.53-5.18,8.4-5.18a9.33,9.33,0,0,1,7.87,3.91,11.79,11.79,0,0,1,1.37,5.9V37.39h2.74v6.2H92.4Z"></path>
                                        <path d="M116.67,44.08a9.87,9.87,0,0,1-7-2.59l-1.37,2.11H105V34h4.59A9.21,9.21,0,0,0,111,37.27a5.64,5.64,0,0,0,4.23,1.93,2.51,2.51,0,0,0,2.8-2.53,2.58,2.58,0,0,0-1.37-2.41,21.8,21.8,0,0,0-3.58-1.15c-5.78-1.62-8-3.79-8-8.19,0-5.24,3.46-8.43,9.12-8.43A8.94,8.94,0,0,1,121,18.85L121.74,17h2.92v8.61h-4.11c-0.84-2.89-2.5-4.46-4.83-4.46a2.76,2.76,0,0,0-3,2.59,2.67,2.67,0,0,0,2,2.47,28.69,28.69,0,0,0,4.23,1.21c4.35,1.14,7,4.21,7,8.19,0,5-3.82,8.43-9.24,8.43"></path>
                                        <path d="M138,44.08c-4.65,0-7.15-2-7.15-6V23.18h-3.16V17h3.16v-6l7.33-3.19V17h4.47v6.14h-4.47v10.6c0,2.89.54,3.73,2.26,3.73a4.83,4.83,0,0,0,2.21-.6V43A9.6,9.6,0,0,1,138,44.08"></path>
                                        <path d="M161.44,22.76c-3.46,0-5.54,2.29-5.54,6.2V37.4H159v6.2H145.4V37.4h3.1V23.18h-3.1V17h9.89V22.1c2.15-4.28,4.53-5.9,8.41-6v7a7,7,0,0,0-2.26-.42"></path>
                                        <path d="M186.54,43.6V38.84c-2.09,3.85-4.35,5.36-8.29,5.36a9.33,9.33,0,0,1-8-4,12,12,0,0,1-1.43-6V23.18h-2.92V17h10.31V31.67c0,4.22,1.61,6.2,5,6.2s5.37-2.41,5.37-6.5V23.18h-2.92V17h10.31V37.39h2.92v6.2H186.54Z"></path>
                                        <path d="M213.6,44.08c-8.88,0-14.9-5.6-14.9-13.73A13.49,13.49,0,0,1,212.59,16.5a10.08,10.08,0,0,1,7.51,2.77l2-2.23h3.1V28.18H220.1c-0.89-3.67-3.1-5.48-6.68-5.48A7.06,7.06,0,0,0,206.09,30a7.57,7.57,0,0,0,7.57,7.89c3.46,0,5.6-1.75,6.44-5.18h5.07v6.93c-2.62,2.89-6.68,4.39-11.56,4.39"></path>
                                        <path d="M237.81,44.08c-4.65,0-7.15-2-7.15-6V23.18h-3.16V17h3.16v-6L238,7.89V17h4.47v6.14H238v10.6c0,2.89.54,3.73,2.27,3.73a4.84,4.84,0,0,0,2.21-.6V43a9.6,9.6,0,0,1-4.65,1.08"></path>
                                        <path d="M245.44,43.6V37.4h3.16V23.18h-3.16V17H256V37.4h3v6.2H245.44Zm6.92-33.48a4.86,4.86,0,0,1-4.83-4.82,4.74,4.74,0,1,1,4.83,4.82"></path>
                                        <path d="M274.65,44.08a13.79,13.79,0,1,1,13.77-13.79,13.69,13.69,0,0,1-13.77,13.79m-0.06-20.9c-3.7,0-6.38,3-6.38,7,0,4.28,2.56,7.17,6.38,7.17S281,34.5,281,30.29s-2.68-7.11-6.38-7.11"></path>
                                        <path d="M311.61,43.6V29c0-4.22-1.55-6.14-4.89-6.14s-5.43,2.41-5.43,6.44v8.13h3v6.2H290.81v-6.2H294V23.18h-3.16V17H301.3v4.64c2.15-3.67,4.53-5.18,8.41-5.18a9.34,9.34,0,0,1,7.87,3.91,11.8,11.8,0,0,1,1.37,5.9V37.39h2.74v6.2H311.61Z"></path>
                                        <polygon points="324.73 43.6 324.73 37.4 327.65 37.4 327.65 7.29 324.73 7.29 324.73 1.08 335.04 1.08 335.04 37.4 338.08 37.4 338.08 43.6 324.73 43.6"></polygon>
                                        <path d="M340.76,43.6V37.4h3.16V23.18h-3.16V17h10.55V37.4h3v6.2H340.76Zm6.92-33.48a4.86,4.86,0,0,1-4.83-4.82,4.74,4.74,0,1,1,4.83,4.82"></path>
                                        <path d="M377.85,43.6V29c0-4.22-1.55-6.14-4.89-6.14s-5.43,2.41-5.43,6.44v8.13h3v6.2H357v-6.2h3.16V23.18H357V17h10.49v4.64c2.15-3.67,4.53-5.18,8.41-5.18a9.34,9.34,0,0,1,7.87,3.91,11.8,11.8,0,0,1,1.37,5.9V37.39h2.74v6.2H377.85Z"></path>
                                        <path d="M412.48,40.95a12.73,12.73,0,0,1-8.88,3.13c-8.29,0-14-5.54-14-13.61s5.66-14,13.53-14S416,21.74,416,30.35v1.08H396.86c0,4.46,2.5,7.23,6.62,7.23,2.86,0,4.41-1.21,5.19-4.22H416c-1,3.25-1.85,4.94-3.52,6.5m-9.54-19.39c-3.22,0-5.25,2-5.9,5.6h11.68c-0.66-3.61-2.62-5.6-5.78-5.6"></path>
                                        <path d="M2.35,66.41H6.13a8.13,8.13,0,0,1,4.06.84,5.91,5.91,0,0,1-.45,10.28,9.53,9.53,0,0,1-3.84.67H4.84v6.66H2.35V66.41Zm3.72,9.74a5.41,5.41,0,0,0,2.52-.5,3.41,3.41,0,0,0,1.76-3.33A3.59,3.59,0,0,0,8.71,69a5,5,0,0,0-2.6-.59H4.84v7.7H6.08Z"></path>
                                        <path d="M23.18,83.43a5.66,5.66,0,0,1-3.95,1.71A4,4,0,0,1,15,81a3.76,3.76,0,0,1,2.24-3.58,8.29,8.29,0,0,1,3.33-.67L23,76.66V76a2.46,2.46,0,0,0-2.74-2.69,6.88,6.88,0,0,0-3.61,1L15.79,72.6a9.31,9.31,0,0,1,4.79-1.32c3,0,4.9,1.43,4.9,4.62v4.82a20,20,0,0,0,.25,4.14H23.6ZM20.86,78.5a5.35,5.35,0,0,0-2.32.48,2.08,2.08,0,0,0-1,1.88,2.15,2.15,0,0,0,2.32,2.27A4.54,4.54,0,0,0,23,81.61V78.42Z"></path>
                                        <path d="M28.9,71.62H31l0.28,1.62c1.4-1.48,2.52-2,3.72-2a3.1,3.1,0,0,1,1.57.39l-0.87,2.18a2.66,2.66,0,0,0-1.26-.34c-1,0-1.82.5-3.05,1.71v9.63H28.9V71.62Z"></path>
                                        <path d="M39.34,81.89V73.6H37.07v-2h2.27v-3l2.46-.78v3.81h4l-0.67,2H41.8v7.81c0,1.18.48,1.68,1.34,1.68a4.09,4.09,0,0,0,2.13-.7l0.81,1.71a6.3,6.3,0,0,1-3.5,1A3,3,0,0,1,39.34,81.89Z"></path>
                                        <path d="M53.34,78.22c0-3.92,2.49-6.94,6.3-6.94s6.27,3,6.27,6.94-2.49,6.92-6.3,6.92S53.34,82.12,53.34,78.22Zm10,0c0-2.86-1.4-4.9-3.72-4.9s-3.75,2-3.75,4.9,1.4,4.87,3.72,4.87S63.36,81.05,63.36,78.22Z"></path>
                                        <path d="M69.69,73.6H67.87v-2h1.82V69.46c0-3.22,1.93-4.42,4.06-4.42a5.5,5.5,0,0,1,2.27.48l-0.5,2A4.18,4.18,0,0,0,74,67.19c-1.26,0-1.85.78-1.85,2.18v2.24h3.39l-0.64,2H72.16V84.86H69.69V73.6Z"></path>
                                        <path d="M97.13,83.8a11.31,11.31,0,0,1-5.38,1.34c-5.68,0-9-3.89-9-9.3s3.75-9.6,9.35-9.6a10.27,10.27,0,0,1,4.65,1v2.32a9.38,9.38,0,0,0-4.59-1.18c-4.26,0-6.78,3.25-6.78,7.36C85.4,80,87.95,83,92,83a9,9,0,0,0,4.42-1.2Z"></path>
                                        <path d="M107.35,83.43a5.66,5.66,0,0,1-3.95,1.71A4,4,0,0,1,99.15,81a3.76,3.76,0,0,1,2.24-3.58,8.29,8.29,0,0,1,3.33-.67l2.46-.08V76a2.46,2.46,0,0,0-2.74-2.69,6.88,6.88,0,0,0-3.61,1L100,72.6a9.31,9.31,0,0,1,4.79-1.32c3,0,4.9,1.43,4.9,4.62v4.82a20,20,0,0,0,.25,4.14h-2.13ZM105,78.5a5.35,5.35,0,0,0-2.32.48,2.08,2.08,0,0,0-1,1.88A2.15,2.15,0,0,0,104,83.12a4.54,4.54,0,0,0,3.19-1.51V78.42Z"></path>
                                        <path d="M113.06,72.09a13.86,13.86,0,0,1,4.56-.81c4.4,0,6.89,2.58,6.89,6.89s-2.8,7-6.75,7a6.25,6.25,0,0,1-2.24-.42V91.5h-2.46V72.09ZM117.65,83c2.83,0,4.31-1.93,4.31-4.9,0-3.28-1.85-4.79-4.42-4.79a6.91,6.91,0,0,0-2,.31v8.9A4.56,4.56,0,0,0,117.65,83Z"></path>
                                        <path d="M127.2,67.3a1.6,1.6,0,0,1,3.19,0,1.58,1.58,0,0,1-1.62,1.6A1.54,1.54,0,0,1,127.2,67.3Zm0.36,4.31H130V84.86h-2.46V71.62Z"></path>
                                        <path d="M134.82,81.89V73.6h-2.27v-2h2.27v-3l2.46-.78v3.81h4l-0.67,2h-3.3v7.81c0,1.18.48,1.68,1.34,1.68a4.09,4.09,0,0,0,2.13-.7l0.81,1.71a6.3,6.3,0,0,1-3.5,1A3,3,0,0,1,134.82,81.89Z"></path>
                                        <path d="M151.28,83.43a5.66,5.66,0,0,1-3.95,1.71A4,4,0,0,1,143.08,81a3.76,3.76,0,0,1,2.24-3.58,8.29,8.29,0,0,1,3.33-.67l2.46-.08V76a2.46,2.46,0,0,0-2.74-2.69,6.88,6.88,0,0,0-3.61,1l-0.87-1.71a9.31,9.31,0,0,1,4.79-1.32c3,0,4.9,1.43,4.9,4.62v4.82a20,20,0,0,0,.25,4.14H151.7ZM149,78.5a5.35,5.35,0,0,0-2.32.48,2.08,2.08,0,0,0-1,1.88,2.15,2.15,0,0,0,2.32,2.27,4.54,4.54,0,0,0,3.19-1.51V78.42Z"></path>
                                        <path d="M163.24,72.09a13.86,13.86,0,0,1,4.56-.81c4.4,0,6.89,2.58,6.89,6.89s-2.8,7-6.75,7a6.25,6.25,0,0,1-2.24-.42V91.5h-2.46V72.09ZM167.83,83c2.83,0,4.31-1.93,4.31-4.9,0-3.28-1.85-4.79-4.42-4.79a6.91,6.91,0,0,0-2,.31v8.9A4.56,4.56,0,0,0,167.83,83Z"></path>
                                        <path d="M177.63,65h2.46V81.56c0,1,.31,1.32,1,1.32a3,3,0,0,0,.81-0.17l0.5,1.93a5.76,5.76,0,0,1-2,.39,2.46,2.46,0,0,1-2.74-2.77V65Z"></path>
                                        <path d="M184,78.36c0-3.95,2.69-7.08,6.72-7.08a6.92,6.92,0,0,1,3.39.84v2.16a5.59,5.59,0,0,0-3.19-1c-2.72,0-4.37,2.1-4.37,4.9,0,3.11,1.65,4.87,4.2,4.87a6.22,6.22,0,0,0,3.16-.92l0.73,1.74a7.69,7.69,0,0,1-4.2,1.23C186.22,85.14,184,82.12,184,78.36Z"></path>
                                    </g>
                            </svg>
                    </div>
                    <div><img class="h-limit" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/CE-Marking-logo.png"></div>
                    <div><img class="h-limit" src="http://www.dxlm.co.uk/wp-content/uploads/2017/07/LA-METAL-with-tagline-BW.png"></div>
                    <div><img class="h-limit" src="http://www.dxlm.co.uk/wp-content/uploads/2017/07/LA-METAL-with-tagline-BW.png"></div>
                </div>-->
        </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

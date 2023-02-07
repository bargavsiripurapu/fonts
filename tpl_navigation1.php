<style type="text/css">
  /**======================================================================
=========================================================================
Template Name: Able pro Bootstrap Admin Template
Author: Phoenixcoded
Support: support@phoenixcoded.net
File: style.css
=========================================================================
=================================================================================== */
/* cyrillic-ext */
@import url(plugins/animate.min.css);

@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format("woff2");
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format("woff2");
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format("woff2");
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format("woff2");
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format("woff2");
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(../fonts/opensans/mem8YaGs126MiZpBA-UFW50bbck.woff2) format("woff2");
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local("Open Sans Regular"), local("OpenSans-Regular"), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFVZ0b.woff2) format("woff2");
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format("woff2");
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format("woff2");
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format("woff2");
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format("woff2");
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format("woff2");
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(../fonts/opensans/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format("woff2");
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
    font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local("Open Sans SemiBold"), local("OpenSans-SemiBold"), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format("woff2");
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
 * Container style
 */
.ps {
    overflow: hidden !important;
    overflow-anchor: none;
    -ms-overflow-style: none;
    touch-action: auto;
    -ms-touch-action: auto;
}

/*
 * Scrollbar rail styles
 */
.ps__rail-x {
    display: none;
    opacity: 0;
    transition: background-color .2s linear, opacity .2s linear;
    -webkit-transition: background-color .2s linear, opacity .2s linear;
    height: 15px;
  /* there must be 'bottom' or 'top' for ps__rail-x */
    bottom: 0px;
  /* please don't change 'position' */
  position: absolute; }

.ps__rail-y {
  display: none;
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  width: 15px;
  /* there must be 'right' or 'left' for ps__rail-y */
  right: 0;
  /* please don't change 'position' */
    position: absolute;
}

.ps--active-x > .ps__rail-x,
.ps--active-y > .ps__rail-y {
    display: block;
    background-color: transparent;
}

.ps:hover > .ps__rail-x,
.ps:hover > .ps__rail-y,
.ps--focus > .ps__rail-x,
.ps--focus > .ps__rail-y,
.ps--scrolling-x > .ps__rail-x,
.ps--scrolling-y > .ps__rail-y {
    opacity: 0.6;
}

.ps .ps__rail-x:hover,
.ps .ps__rail-y:hover,
.ps .ps__rail-x:focus,
.ps .ps__rail-y:focus,
.ps .ps__rail-x.ps--clicking,
.ps .ps__rail-y.ps--clicking {
    background-color: #eee;
    opacity: 0.9;
}

/*
 * Scrollbar thumb styles
 */
.ps__thumb-x {
    background-color: #aaa;
    border-radius: 6px;
    transition: background-color .2s linear, height .2s ease-in-out;
    -webkit-transition: background-color .2s linear, height .2s ease-in-out;
    height: 6px;
  /* there must be 'bottom' for ps__thumb-x */
    bottom: 2px;
  /* please don't change 'position' */
  position: absolute; }

.ps__thumb-y {
  background-color: #aaa;
  border-radius: 6px;
  transition: background-color .2s linear, width .2s ease-in-out;
  -webkit-transition: background-color .2s linear, width .2s ease-in-out;
  width: 6px;
  /* there must be 'right' for ps__thumb-y */
  right: 2px;
  /* please don't change 'position' */
    position: absolute;
}

.ps__rail-x:hover > .ps__thumb-x,
.ps__rail-x:focus > .ps__thumb-x,
.ps__rail-x.ps--clicking .ps__thumb-x {
    background-color: #999;
    height: 11px;
}

.ps__rail-y:hover > .ps__thumb-y,
.ps__rail-y:focus > .ps__thumb-y,
.ps__rail-y.ps--clicking .ps__thumb-y {
    background-color: #999;
    width: 11px;
}

/* MS supports */
@supports (-ms-overflow-style: none) {
    .ps {
        overflow: auto !important;
    }
}

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .ps {
        overflow: auto !important;
    }
}

/*
    description Of variables for build for theme layouts
        1) menu-caption-color
            List of color for sidebar menu caption

        2) brand-background
            List of color for logo background

        3) header-dark-background
            List of color for Dark Header

        4) header-light-background
            List of color for light Header

        5) menu-dark-background
            List of color for Dark sidebar menu

        6) menu-light-background
            List of color for light sidebar menu

        7) menu-active-color
            List of color for Active item highliter

        8) menu-icon-color
            List of color for sidebar menu items icon colors
*/
/*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
    --blue: #1abc9c;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #e74c3c;
    --orange: #fd7e14;
    --yellow: #f1c40f;
    --green: #2ecc71;
    --teal: #20c997;
    --cyan: #00acc1;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #1abc9c;
    --secondary: #6c757d;
    --success: #2ecc71;
    --info: #00acc1;
    --warning: #f1c40f;
    --danger: #e74c3c;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: "Open Sans", sans-serif;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}

body {
    margin: 0;
    font-family: "Open Sans", sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #373a3c;
    text-align: left;
    background-color: #e9e9e9;
}

[tabindex="-1"]:focus {
    outline: 0 !important;
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    -webkit-text-decoration-skip-ink: none;
    text-decoration-skip-ink: none;
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0;
}

dt {
    font-weight: 700;
}

dd {
    margin-bottom: .5rem;
    margin-left: 0;
}

blockquote {
    margin: 0 0 1rem;
}

b,
strong {
    font-weight: bolder;
}

small {
    font-size: 80%;
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}

sub {
    bottom: -.25em;
}

sup {
    top: -.5em;
}

a {
    color: #1abc9c;
    text-decoration: none;
    background-color: transparent;
}

a:hover {
    color: #1abc9c;
    text-decoration: underline;
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
    outline: 0;
}

pre,
code,
kbd,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-size: 1em;
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
}

figure {
    margin: 0 0 1rem;
}

img {
    vertical-align: middle;
    border-style: none;
}

svg {
    overflow: hidden;
    vertical-align: middle;
}

table {
    border-collapse: collapse;
}

caption {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #868e96;
    text-align: left;
    caption-side: bottom;
}

th {
    text-align: inherit;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
}

button {
    border-radius: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button,
input {
    overflow: visible;
}

button,
select {
    text-transform: none;
}

select {
    word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
    cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
    box-sizing: border-box;
    padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
    -webkit-appearance: listbox;
}

textarea {
    overflow: auto;
    resize: vertical;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}

progress {
    vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

[type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

output {
    display: inline-block;
}

summary {
    display: list-item;
    cursor: pointer;
}

template {
    display: none;
}

[hidden] {
    display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1, .h1 {
    font-size: 2.5rem;
}

h2, .h2 {
    font-size: 2rem;
}

h3, .h3 {
    font-size: 1.75rem;
}

h4, .h4 {
    font-size: 1.5rem;
}

h5, .h5 {
    font-size: 1rem;
}

h6, .h6 {
    font-size: 1rem;
}

.lead {
    font-size: 1.25rem;
    font-weight: 300;
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
    font-size: 80%;
    font-weight: 400;
}

mark,
.mark {
    padding: 0.2em;
    background-color: #fcf8e3;
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}

.list-inline-item {
    display: inline-block;
}

.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}

.initialism {
    font-size: 90%;
    text-transform: uppercase;
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d;
}

.blockquote-footer::before {
    content: "\2014\00A0";
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #e9e9e9;
    border: 1px solid #dee2e6;
    border-radius: 2px;
    max-width: 100%;
    height: auto;
}

.figure {
    display: inline-block;
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1;
}

.figure-caption {
    font-size: 90%;
    color: #6c757d;
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-break: break-word;
}

a > code {
    color: inherit;
}

kbd {
    padding: 0.2rem 0.4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #212529;
    border-radius: 2px;
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700;
}

pre {
    display: block;
    font-size: 87.5%;
    color: #212529;
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal;
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.no-gutters {
    margin-right: 0;
    margin-left: 0;
}

.no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
}

.col-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
}

.col-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
}

.col-3 {
    flex: 0 0 25%;
    max-width: 25%;
}

.col-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}

.col-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
}

.col-6 {
    flex: 0 0 50%;
    max-width: 50%;
}

.col-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
}

.col-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}

.col-9 {
    flex: 0 0 75%;
    max-width: 75%;
}

.col-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
}

.col-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
}

.col-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

.order-first {
    order: -1;
}

.order-last {
    order: 13;
}

.order-0 {
    order: 0;
}

.order-1 {
    order: 1;
}

.order-2 {
    order: 2;
}

.order-3 {
    order: 3;
}

.order-4 {
    order: 4;
}

.order-5 {
    order: 5;
}

.order-6 {
    order: 6;
}

.order-7 {
    order: 7;
}

.order-8 {
    order: 8;
}

.order-9 {
    order: 9;
}

.order-10 {
    order: 10;
}

.order-11 {
    order: 11;
}

.order-12 {
    order: 12;
}

.offset-1 {
    margin-left: 8.33333%;
}

.offset-2 {
    margin-left: 16.66667%;
}

.offset-3 {
    margin-left: 25%;
}

.offset-4 {
    margin-left: 33.33333%;
}

.offset-5 {
    margin-left: 41.66667%;
}

.offset-6 {
    margin-left: 50%;
}

.offset-7 {
    margin-left: 58.33333%;
}

.offset-8 {
    margin-left: 66.66667%;
}

.offset-9 {
    margin-left: 75%;
}

.offset-10 {
    margin-left: 83.33333%;
}

.offset-11 {
    margin-left: 91.66667%;
}

@media (min-width: 576px) {
    .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-sm-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-sm-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-sm-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-sm-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-sm-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-sm-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-sm-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-sm-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-sm-first {
        order: -1;
    }

    .order-sm-last {
        order: 13;
    }

    .order-sm-0 {
        order: 0;
    }

    .order-sm-1 {
        order: 1;
    }

    .order-sm-2 {
        order: 2;
    }

    .order-sm-3 {
        order: 3;
    }

    .order-sm-4 {
        order: 4;
    }

    .order-sm-5 {
        order: 5;
    }

    .order-sm-6 {
        order: 6;
    }

    .order-sm-7 {
        order: 7;
    }

    .order-sm-8 {
        order: 8;
    }

    .order-sm-9 {
        order: 9;
    }

    .order-sm-10 {
        order: 10;
    }

    .order-sm-11 {
        order: 11;
    }

    .order-sm-12 {
        order: 12;
    }

    .offset-sm-0 {
        margin-left: 0;
    }

    .offset-sm-1 {
        margin-left: 8.33333%;
    }

    .offset-sm-2 {
        margin-left: 16.66667%;
    }

    .offset-sm-3 {
        margin-left: 25%;
    }

    .offset-sm-4 {
        margin-left: 33.33333%;
    }

    .offset-sm-5 {
        margin-left: 41.66667%;
    }

    .offset-sm-6 {
        margin-left: 50%;
    }

    .offset-sm-7 {
        margin-left: 58.33333%;
    }

    .offset-sm-8 {
        margin-left: 66.66667%;
    }

    .offset-sm-9 {
        margin-left: 75%;
    }

    .offset-sm-10 {
        margin-left: 83.33333%;
    }

    .offset-sm-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 768px) {
    .col-md {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-md-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-md-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-md-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-md-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-md-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-md-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-md-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-md-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-md-first {
        order: -1;
    }

    .order-md-last {
        order: 13;
    }

    .order-md-0 {
        order: 0;
    }

    .order-md-1 {
        order: 1;
    }

    .order-md-2 {
        order: 2;
    }

    .order-md-3 {
        order: 3;
    }

    .order-md-4 {
        order: 4;
    }

    .order-md-5 {
        order: 5;
    }

    .order-md-6 {
        order: 6;
    }

    .order-md-7 {
        order: 7;
    }

    .order-md-8 {
        order: 8;
    }

    .order-md-9 {
        order: 9;
    }

    .order-md-10 {
        order: 10;
    }

    .order-md-11 {
        order: 11;
    }

    .order-md-12 {
        order: 12;
    }

    .offset-md-0 {
        margin-left: 0;
    }

    .offset-md-1 {
        margin-left: 8.33333%;
    }

    .offset-md-2 {
        margin-left: 16.66667%;
    }

    .offset-md-3 {
        margin-left: 25%;
    }

    .offset-md-4 {
        margin-left: 33.33333%;
    }

    .offset-md-5 {
        margin-left: 41.66667%;
    }

    .offset-md-6 {
        margin-left: 50%;
    }

    .offset-md-7 {
        margin-left: 58.33333%;
    }

    .offset-md-8 {
        margin-left: 66.66667%;
    }

    .offset-md-9 {
        margin-left: 75%;
    }

    .offset-md-10 {
        margin-left: 83.33333%;
    }

    .offset-md-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 992px) {
    .col-lg {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-lg-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-lg-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-lg-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-lg-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-lg-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-lg-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-lg-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-lg-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-lg-first {
        order: -1;
    }

    .order-lg-last {
        order: 13;
    }

    .order-lg-0 {
        order: 0;
    }

    .order-lg-1 {
        order: 1;
    }

    .order-lg-2 {
        order: 2;
    }

    .order-lg-3 {
        order: 3;
    }

    .order-lg-4 {
        order: 4;
    }

    .order-lg-5 {
        order: 5;
    }

    .order-lg-6 {
        order: 6;
    }

    .order-lg-7 {
        order: 7;
    }

    .order-lg-8 {
        order: 8;
    }

    .order-lg-9 {
        order: 9;
    }

    .order-lg-10 {
        order: 10;
    }

    .order-lg-11 {
        order: 11;
    }

    .order-lg-12 {
        order: 12;
    }

    .offset-lg-0 {
        margin-left: 0;
    }

    .offset-lg-1 {
        margin-left: 8.33333%;
    }

    .offset-lg-2 {
        margin-left: 16.66667%;
    }

    .offset-lg-3 {
        margin-left: 25%;
    }

    .offset-lg-4 {
        margin-left: 33.33333%;
    }

    .offset-lg-5 {
        margin-left: 41.66667%;
    }

    .offset-lg-6 {
        margin-left: 50%;
    }

    .offset-lg-7 {
        margin-left: 58.33333%;
    }

    .offset-lg-8 {
        margin-left: 66.66667%;
    }

    .offset-lg-9 {
        margin-left: 75%;
    }

    .offset-lg-10 {
        margin-left: 83.33333%;
    }

    .offset-lg-11 {
        margin-left: 91.66667%;
    }
}

@media (min-width: 1200px) {
    .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-xl-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .col-xl-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-xl-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .col-xl-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-xl-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .col-xl-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-xl-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .col-xl-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-xl-first {
        order: -1;
    }

    .order-xl-last {
        order: 13;
    }

    .order-xl-0 {
        order: 0;
    }

    .order-xl-1 {
        order: 1;
    }

    .order-xl-2 {
        order: 2;
    }

    .order-xl-3 {
        order: 3;
    }

    .order-xl-4 {
        order: 4;
    }

    .order-xl-5 {
        order: 5;
    }

    .order-xl-6 {
        order: 6;
    }

    .order-xl-7 {
        order: 7;
    }

    .order-xl-8 {
        order: 8;
    }

    .order-xl-9 {
        order: 9;
    }

    .order-xl-10 {
        order: 10;
    }

    .order-xl-11 {
        order: 11;
    }

    .order-xl-12 {
        order: 12;
    }

    .offset-xl-0 {
        margin-left: 0;
    }

    .offset-xl-1 {
        margin-left: 8.33333%;
    }

    .offset-xl-2 {
        margin-left: 16.66667%;
    }

    .offset-xl-3 {
        margin-left: 25%;
    }

    .offset-xl-4 {
        margin-left: 33.33333%;
    }

    .offset-xl-5 {
        margin-left: 41.66667%;
    }

    .offset-xl-6 {
        margin-left: 50%;
    }

    .offset-xl-7 {
        margin-left: 58.33333%;
    }

    .offset-xl-8 {
        margin-left: 66.66667%;
    }

    .offset-xl-9 {
        margin-left: 75%;
    }

    .offset-xl-10 {
        margin-left: 83.33333%;
    }

    .offset-xl-11 {
        margin-left: 91.66667%;
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #373a3c;
}

.table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #e3eaef;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e3eaef;
}

.table tbody + tbody {
    border-top: 2px solid #e3eaef;
}

.table-sm th,
.table-sm td {
    padding: 0.3rem;
}

.table-bordered {
    border: 1px solid #e3eaef;
}

.table-bordered th,
  .table-bordered td {
    border: 1px solid #e3eaef;
}

.table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
    border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
    color: #373a3c;
    background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
    background-color: #bfece3;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
    border-color: #88dccc;
}

.table-hover .table-primary:hover {
    background-color: #abe6da;
}

.table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #abe6da;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
    background-color: #d6d8db;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
    border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
    background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
    background-color: #c4f1d7;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
    border-color: #92e4b5;
}

.table-hover .table-success:hover {
    background-color: #afecc9;
}

.table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #afecc9;
}

.table-info,
.table-info > th,
.table-info > td {
    background-color: #b8e8ee;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
    border-color: #7ad4df;
}

.table-hover .table-info:hover {
    background-color: #a3e1e9;
}

.table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #a3e1e9;
}

.table-warning,
.table-warning > th,
.table-warning > td {
    background-color: #fbeebc;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
    border-color: #f8e082;
}

.table-hover .table-warning:hover {
    background-color: #fae8a4;
}

.table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #fae8a4;
}

.table-danger,
.table-danger > th,
.table-danger > td {
    background-color: #f8cdc8;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
    border-color: #f3a29a;
}

.table-hover .table-danger:hover {
    background-color: #f5b8b1;
}

.table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #f5b8b1;
}

.table-light,
.table-light > th,
.table-light > td {
    background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
    border-color: #fbfcfc;
}

.table-hover .table-light:hover {
    background-color: #ececf6;
}

.table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
    background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
    border-color: #95999c;
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55;
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #e3eaef;
}

.table-dark {
    color: #fff;
    background-color: #343a40;
}

.table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #454d55;
}

.table-dark.table-bordered {
    border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-sm > .table-bordered {
        border: 0;
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-md > .table-bordered {
        border: 0;
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-lg > .table-bordered {
        border: 0;
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive-xl > .table-bordered {
        border: 0;
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
    border: 0;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 4px);
    padding: 0.625rem 1.1875rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 2px solid rgba(0, 0, 0, 0.15);
    border-radius: 0;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #1abc9c;
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.form-control::-webkit-input-placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control::-moz-placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control:-ms-input-placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control::-ms-input-placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control::placeholder {
    color: #adb5bd;
    opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1;
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.form-control-file,
.form-control-range {
    display: block;
    width: 100%;
}

.col-form-label {
    padding-top: calc(0.625rem + 2px);
    padding-bottom: calc(0.625rem + 2px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}

.col-form-label-lg {
    padding-top: calc(0.7rem + 2px);
    padding-bottom: calc(0.7rem + 2px);
    font-size: 1.25rem;
    line-height: 1.5;
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 2px);
    padding-bottom: calc(0.25rem + 2px);
    font-size: 0.875rem;
    line-height: 1.5;
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
    margin-bottom: 0;
    line-height: 1.5;
    color: #373a3c;
    background-color: transparent;
    border: solid transparent;
    border-width: 2px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm {
    height: calc(1.5em + 0.5rem + 4px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0;
}

.form-control-lg {
    height: calc(1.5em + 1.4rem + 4px);
    padding: 0.7rem 2rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0;
}

select.form-control[size], select.form-control[multiple] {
    height: auto;
}

textarea.form-control {
    height: auto;
}

.form-group {
    margin-bottom: 1rem;
}

.form-text {
    display: block;
    margin-top: 0.25rem;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

.form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px;
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}

.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}

.form-check-input:disabled ~ .form-check-label {
    color: #868e96;
}

.form-check-label {
    margin-bottom: 0;
}

.form-check-inline {
    display: inline-flex;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0;
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #2ecc71;
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: .1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(46, 204, 113, 0.9);
    border-radius: 2px;
}

.was-validated .form-control:valid, .form-control.is-valid {
    border-color: #2ecc71;
    padding-right: calc(1.5em + 1.25rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%232ecc71' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.3125rem);
    background-size: calc(0.75em + 0.625rem) calc(0.75em + 0.625rem);
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
    border-color: #2ecc71;
    box-shadow: 0 0 0 0rem rgba(46, 204, 113, 0.25);
}

.was-validated .form-control:valid ~ .valid-feedback,
  .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
  .form-control.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
    padding-right: calc(1.5em + 1.25rem);
    background-position: top calc(0.375em + 0.3125rem) right calc(0.375em + 0.3125rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
    border-color: #2ecc71;
    padding-right: calc((1em + 1.25rem) * 3 / 4 + 2.1875rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1.1875rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%232ecc71' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 2.1875rem/calc(0.75em + 0.625rem) calc(0.75em + 0.625rem);
}

.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
    border-color: #2ecc71;
    box-shadow: 0 0 0 0rem rgba(46, 204, 113, 0.25);
}

.was-validated .custom-select:valid ~ .valid-feedback,
  .was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
  .custom-select.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
    color: #2ecc71;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
    color: #2ecc71;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    border-color: #2ecc71;
}

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
    border-color: #54d98c;
    background-color: #54d98c;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0rem rgba(46, 204, 113, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #2ecc71;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
    border-color: #2ecc71;
}

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
    border-color: #2ecc71;
    box-shadow: 0 0 0 0rem rgba(46, 204, 113, 0.25);
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #e74c3c;
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: .1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(231, 76, 60, 0.9);
    border-radius: 2px;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
    border-color: #e74c3c;
    padding-right: calc(1.5em + 1.25rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23e74c3c' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23e74c3c' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.3125rem);
    background-size: calc(0.75em + 0.625rem) calc(0.75em + 0.625rem);
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
    border-color: #e74c3c;
    box-shadow: 0 0 0 0rem rgba(231, 76, 60, 0.25);
}

.was-validated .form-control:invalid ~ .invalid-feedback,
  .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
  .form-control.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
    padding-right: calc(1.5em + 1.25rem);
    background-position: top calc(0.375em + 0.3125rem) right calc(0.375em + 0.3125rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
    border-color: #e74c3c;
    padding-right: calc((1em + 1.25rem) * 3 / 4 + 2.1875rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1.1875rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23e74c3c' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23e74c3c' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 2.1875rem/calc(0.75em + 0.625rem) calc(0.75em + 0.625rem);
}

.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
    border-color: #e74c3c;
    box-shadow: 0 0 0 0rem rgba(231, 76, 60, 0.25);
}

.was-validated .custom-select:invalid ~ .invalid-feedback,
  .was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
  .custom-select.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
    color: #e74c3c;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
    color: #e74c3c;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    border-color: #e74c3c;
}

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
    border-color: #ed7669;
    background-color: #ed7669;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0rem rgba(231, 76, 60, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #e74c3c;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
    border-color: #e74c3c;
}

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
    border-color: #e74c3c;
    box-shadow: 0 0 0 0rem rgba(231, 76, 60, 0.25);
}

.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.form-inline .form-check {
    width: 100%;
}

@media (min-width: 576px) {
    .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
    }

    .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0;
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }

    .form-inline .form-control-plaintext {
        display: inline-block;
    }

    .form-inline .input-group,
    .form-inline .custom-select {
        width: auto;
    }

    .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
    }

    .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
    }

    .form-inline .custom-control {
        align-items: center;
        justify-content: center;
    }

    .form-inline .custom-control-label {
        margin-bottom: 0;
    }
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #373a3c;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.625rem 1.1875rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 2px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}

.btn:hover {
    color: #373a3c;
    text-decoration: none;
}

.btn:focus, .btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.btn.disabled, .btn:disabled {
    opacity: 0.65;
}

a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none;
}

.btn-primary {
    color: #fff;
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.btn-primary:hover {
    color: #fff;
    background-color: #159a80;
    border-color: #148f77;
}

.btn-primary:focus, .btn-primary.focus {
    box-shadow: 0 0 0 0rem rgba(60, 198, 171, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #148f77;
    border-color: #12846e;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(60, 198, 171, 0.5);
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62;
}

.btn-secondary:focus, .btn-secondary.focus {
    box-shadow: 0 0 0 0rem rgba(130, 138, 145, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(130, 138, 145, 0.5);
}

.btn-success {
    color: #fff;
    background-color: #2ecc71;
    border-color: #2ecc71;
}

.btn-success:hover {
    color: #fff;
    background-color: #27ad60;
    border-color: #25a25a;
}

.btn-success:focus, .btn-success.focus {
    box-shadow: 0 0 0 0rem rgba(77, 212, 134, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #2ecc71;
    border-color: #2ecc71;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #25a25a;
    border-color: #229854;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(77, 212, 134, 0.5);
}

.btn-info {
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
}

.btn-info:hover {
    color: #fff;
    background-color: #008a9b;
    border-color: #007f8e;
}

.btn-info:focus, .btn-info.focus {
    box-shadow: 0 0 0 0rem rgba(38, 184, 202, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #007f8e;
    border-color: #007381;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(38, 184, 202, 0.5);
}

.btn-warning {
    color: #fff;
    background-color: #f1c40f;
    border-color: #f1c40f;
}

.btn-warning:hover {
    color: #fff;
    background-color: #cea70c;
    border-color: #c29d0b;
}

.btn-warning:focus, .btn-warning.focus {
    box-shadow: 0 0 0 0rem rgba(243, 205, 51, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
    color: #fff;
    background-color: #f1c40f;
    border-color: #f1c40f;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #c29d0b;
    border-color: #b6940b;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(243, 205, 51, 0.5);
}

.btn-danger {
    color: #fff;
    background-color: #e74c3c;
    border-color: #e74c3c;
}

.btn-danger:hover {
    color: #fff;
    background-color: #e12e1c;
    border-color: #d62c1a;
}

.btn-danger:focus, .btn-danger.focus {
    box-shadow: 0 0 0 0rem rgba(235, 103, 89, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #e74c3c;
    border-color: #e74c3c;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #d62c1a;
    border-color: #ca2a19;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(235, 103, 89, 0.5);
}

.btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
    box-shadow: 0 0 0 0rem rgba(216, 217, 219, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(216, 217, 219, 0.5);
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
}

.btn-dark:focus, .btn-dark.focus {
    box-shadow: 0 0 0 0rem rgba(82, 88, 93, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(82, 88, 93, 0.5);
}

.btn-outline-primary {
    color: #1abc9c;
    border-color: #1abc9c;
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #1abc9c;
    background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.5);
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:focus, .btn-outline-secondary.focus {
    box-shadow: 0 0 0 0rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
    color: #2ecc71;
    border-color: #2ecc71;
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #2ecc71;
    border-color: #2ecc71;
}

.btn-outline-success:focus, .btn-outline-success.focus {
    box-shadow: 0 0 0 0rem rgba(46, 204, 113, 0.5);
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #2ecc71;
    background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #2ecc71;
    border-color: #2ecc71;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(46, 204, 113, 0.5);
}

.btn-outline-info {
    color: #00acc1;
    border-color: #00acc1;
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
}

.btn-outline-info:focus, .btn-outline-info.focus {
    box-shadow: 0 0 0 0rem rgba(0, 172, 193, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #00acc1;
    background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(0, 172, 193, 0.5);
}

.btn-outline-warning {
    color: #f1c40f;
    border-color: #f1c40f;
}

.btn-outline-warning:hover {
    color: #fff;
    background-color: #f1c40f;
    border-color: #f1c40f;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
    box-shadow: 0 0 0 0rem rgba(241, 196, 15, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #f1c40f;
    background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #fff;
    background-color: #f1c40f;
    border-color: #f1c40f;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(241, 196, 15, 0.5);
}

.btn-outline-danger {
    color: #e74c3c;
    border-color: #e74c3c;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #e74c3c;
    border-color: #e74c3c;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
    box-shadow: 0 0 0 0rem rgba(231, 76, 60, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #e74c3c;
    background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #e74c3c;
    border-color: #e74c3c;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(231, 76, 60, 0.5);
}

.btn-outline-light {
    color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
    box-shadow: 0 0 0 0rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
    color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
    box-shadow: 0 0 0 0rem rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0rem rgba(52, 58, 64, 0.5);
}

.btn-link {
    font-weight: 400;
    color: #1abc9c;
    text-decoration: none;
}

.btn-link:hover {
    color: #1abc9c;
    text-decoration: underline;
}

.btn-link:focus, .btn-link.focus {
    text-decoration: underline;
    box-shadow: none;
}

.btn-link:disabled, .btn-link.disabled {
    color: #6c757d;
    pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
    padding: 0.7rem 2rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 2px;
}

.btn-sm, .btn-group-sm > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 2px;
}

.btn-block {
    display: block;
    width: 100%;
}

.btn-block + .btn-block {
    margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
    width: 100%;
}

.fade {
    transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}

.fade:not(.show) {
    opacity: 0;
}

.collapse:not(.show) {
    display: none;
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
    position: relative;
}

.dropdown-toggle {
    white-space: nowrap;
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
    display:
}

.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #373a3c;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 2px;
}

.dropdown-menu-left {
    right: auto;
    left: 0;
}

.dropdown-menu-right {
    right: 0;
    left: auto;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-sm-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-md-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-lg-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-xl-right {
        right: 0;
        left: auto;
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-toggle::after {
    vertical-align: 0;
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
}

.dropleft .dropdown-toggle::after {
    display: none;
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
    right: auto;
    bottom: auto;
}

.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa;
}

.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #1abc9c;
}

.dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    color: #6c757d;
    white-space: nowrap;
}

.dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #212529;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
}

.btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    flex: 1 1 auto;
}

.btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
    z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
    z-index: 1;
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.btn-toolbar .input-group {
    width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
    margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
    padding-right: 0.89063rem;
    padding-left: 0.89063rem;
}

.dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropright .dropdown-toggle-split::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

.btn-group-vertical > .btn,
  .btn-group-vertical > .btn-group {
    width: 100%;
}

.btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
    margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
}

.input-group > .form-control,
  .input-group > .form-control-plaintext,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0;
}

.input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
    margin-left: -2px;
}

.input-group > .form-control:focus,
  .input-group > .custom-select:focus,
  .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
    z-index: 3;
}

.input-group > .custom-file .custom-file-input:focus {
    z-index: 4;
}

.input-group > .form-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group > .custom-file {
    display: flex;
    align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
    display: flex;
}

.input-group-prepend .btn,
  .input-group-append .btn {
    position: relative;
    z-index: 2;
}

.input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
    z-index: 3;
}

.input-group-prepend .btn + .btn,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-append .btn + .btn,
  .input-group-append .btn + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn {
    margin-left: -2px;
}

.input-group-prepend {
    margin-right: -2px;
}

.input-group-append {
    margin-left: -2px;
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.625rem 1.1875rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 2px solid rgba(0, 0, 0, 0.15);
    border-radius: 0;
}

.input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
    height: calc(1.5em + 1.4rem + 4px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
    padding: 0.7rem 2rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
    height: calc(1.5em + 0.5rem + 4px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
    padding-right: 2.1875rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem;
}

.custom-control-inline {
    display: inline-flex;
    margin-right: 1rem;
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: #1abc9c;
    background-color: #1abc9c;
}

.custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #1abc9c;
}

.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
    color: #fff;
    background-color: #98f1df;
    border-color: #98f1df;
}

.custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d;
}

.custom-control-input:disabled ~ .custom-control-label::before {
    background-color: #e9ecef;
}

.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top;
}

.custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 2px;
}

.custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50% / 50% 50%;
}

.custom-checkbox .custom-control-label::before {
    border-radius: 2px;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
    border-color: #1abc9c;
    background-color: #1abc9c;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(26, 188, 156, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
    background-color: rgba(26, 188, 156, 0.5);
}

.custom-radio .custom-control-label::before {
    border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(26, 188, 156, 0.5);
}

.custom-switch {
    padding-left: 2.25rem;
}

.custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem;
}

.custom-switch .custom-control-label::after {
    top: calc(0.25rem + 4px);
    left: calc(-2.25rem + 4px);
    width: calc(1rem - 8px);
    height: calc(1rem - 8px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .custom-switch .custom-control-label::after {
        transition: none;
    }
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    background-color: #fff;
    transform: translateX(0.75rem);
}

.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(26, 188, 156, 0.5);
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 4px);
    padding: 0.625rem 2.1875rem 0.625rem 1.1875rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 1.1875rem center/8px 10px;
    background-color: #fff;
    border: 2px solid rgba(0, 0, 0, 0.15);
    border-radius: 2px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.custom-select:focus {
    border-color: #1abc9c;
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 1.1875rem;
    background-image: none;
}

.custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef;
}

.custom-select::-ms-expand {
    display: none;
}

.custom-select-sm {
    height: calc(1.5em + 0.5rem + 4px);
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    font-size: 0.875rem;
}

.custom-select-lg {
    height: calc(1.5em + 1.4rem + 4px);
    padding-top: 0.7rem;
    padding-bottom: 0.7rem;
    padding-left: 2rem;
    font-size: 1.25rem;
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 4px);
    margin-bottom: 0;
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + 1.25rem + 4px);
    margin: 0;
    opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
    border-color: #1abc9c;
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.custom-file-input:disabled ~ .custom-file-label {
    background-color: #e9ecef;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse";
}

.custom-file-input ~ .custom-file-label[data-browse]::after {
    content: attr(data-browse);
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.5em + 1.25rem + 4px);
    padding: 0.625rem 1.1875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 2px solid rgba(0, 0, 0, 0.15);
    border-radius: 0;
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 1.25rem);
    padding: 0.625rem 1.1875rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0 0 0;
}

.custom-range {
    width: 100%;
    height: calc(1rem + 0rem);
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.custom-range:focus {
    outline: none;
}

.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #e9e9e9, 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #e9e9e9, 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #e9e9e9, 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.custom-range::-moz-focus-outer {
    border: 0;
}

.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #1abc9c;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none;
}

@media (prefers-reduced-motion: reduce) {
    .custom-range::-webkit-slider-thumb {
        transition: none;
    }
}

.custom-range::-webkit-slider-thumb:active {
    background-color: #98f1df;
}

.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #1abc9c;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none;
}

@media (prefers-reduced-motion: reduce) {
    .custom-range::-moz-range-thumb {
        transition: none;
    }
}

.custom-range::-moz-range-thumb:active {
    background-color: #98f1df;
}

.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}

.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0rem;
    margin-left: 0rem;
    background-color: #1abc9c;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none;
}

@media (prefers-reduced-motion: reduce) {
    .custom-range::-ms-thumb {
        transition: none;
    }
}

.custom-range::-ms-thumb:active {
    background-color: #98f1df;
}

.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem;
}

.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd;
}

.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default;
}

.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd;
}

.custom-range:disabled::-moz-range-track {
    cursor: default;
}

.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: none;
    }
}

.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
    text-decoration: none;
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default;
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
    margin-bottom: -1px;
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
    border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent;
}

.nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav-pills .nav-link {
    border-radius: 2px;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    color: #fff;
    background-color: #1abc9c;
}

.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center;
}

.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center;
}

.tab-content > .tab-pane {
    display: none;
}

.tab-content > .active {
    display: block;
}

.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
}

.navbar > .container,
  .navbar > .container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none;
}

.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}

.navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 2px;
}

.navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none;
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%;
}

@media (max-width: 575.98px) {
    .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand-sm .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
        flex-wrap: nowrap;
    }

    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand-sm .navbar-toggler {
        display: none;
    }
}

@media (max-width: 767.98px) {
    .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand-md .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
        flex-wrap: nowrap;
    }

    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand-md .navbar-toggler {
        display: none;
    }
}

@media (max-width: 991.98px) {
    .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
        flex-wrap: nowrap;
    }

    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
}

@media (max-width: 1199.98px) {
    .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar-expand-xl .navbar-nav {
        flex-direction: row;
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
        flex-wrap: nowrap;
    }

    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand-xl .navbar-toggler {
        display: none;
    }
}

.navbar-expand {
    flex-flow: row nowrap;
    justify-content: flex-start;
}

.navbar-expand > .container,
  .navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0;
}

.navbar-expand .navbar-nav {
    flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}

.navbar-expand > .container,
  .navbar-expand > .container-fluid {
    flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
}

.navbar-expand .navbar-toggler {
    display: none;
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
    color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
    color: #fff;
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
    color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
    color: #fff;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0.125);
    border-radius: 2px;
}

.card > hr {
    margin-right: 0;
    margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}

.card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}

.card-title {
    margin-bottom: 1.25rem;
}

.card-subtitle {
    margin-top: -0.625rem;
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link:hover {
    text-decoration: none;
}

.card-link + .card-link {
    margin-left: 1.25rem;
}

.card-header {
    padding: 1.25rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0);
    border-bottom: 0px solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
    border-radius: calc(2px - 0px) calc(2px - 0px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
    border-top: 0;
}

.card-footer {
    padding: 1.25rem 1.25rem;
    background-color: rgba(0, 0, 0, 0);
    border-top: 0px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
    border-radius: 0 0 calc(2px - 0px) calc(2px - 0px);
}

.card-header-tabs {
    margin-right: -0.625rem;
    margin-bottom: -1.25rem;
    margin-left: -0.625rem;
    border-bottom: 0;
}

.card-header-pills {
    margin-right: -0.625rem;
    margin-left: -0.625rem;
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem;
}

.card-img {
    width: 100%;
    border-radius: calc(2px - 0px);
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(2px - 0px);
    border-top-right-radius: calc(2px - 0px);
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(2px - 0px);
    border-bottom-left-radius: calc(2px - 0px);
}

.card-deck {
    display: flex;
    flex-direction: column;
}

.card-deck .card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-deck {
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .card-deck .card {
        display: flex;
        flex: 1 0 0%;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
    }
}

.card-group {
    display: flex;
    flex-direction: column;
}

.card-group > .card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-group {
        flex-flow: row wrap;
    }

    .card-group > .card {
        flex: 1 0 0%;
        margin-bottom: 0;
    }

    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
    }

    .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .card-group > .card:not(:last-child) .card-img-top,
          .card-group > .card:not(:last-child) .card-header {
        border-top-right-radius: 0;
    }

    .card-group > .card:not(:last-child) .card-img-bottom,
          .card-group > .card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
    }

    .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .card-group > .card:not(:first-child) .card-img-top,
          .card-group > .card:not(:first-child) .card-header {
        border-top-left-radius: 0;
    }

    .card-group > .card:not(:first-child) .card-img-bottom,
          .card-group > .card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
    }
}

.card-columns .card {
    margin-bottom: 1.25rem;
}

@media (min-width: 576px) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }

    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}

.accordion > .card {
    overflow: hidden;
}

.accordion > .card:not(:first-of-type) .card-header:first-child {
    border-radius: 0;
}

.accordion > .card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0;
}

.accordion > .card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.accordion > .card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.accordion > .card .card-header {
    margin-bottom: 0px;
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9e9e9;
    border-radius: 2px;
}

.breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #6c757d;
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 2px;
}

.page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: 0;
    line-height: 1.25;
    color: #1abc9c;
    background-color: #fff;
    border: 0 solid #dee2e6;
}

.page-link:hover {
    z-index: 2;
    color: #1abc9c;
    text-decoration: none;
    background-color: #e9e9e9;
    border-color: #dee2e6;
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.25);
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.page-item:last-child .page-link {
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
}

.badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 2px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .badge {
        transition: none;
    }
}

a.badge:hover, a.badge:focus {
    text-decoration: none;
}

.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

.badge-pill {
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem;
}

.badge-primary {
    color: #fff;
    background-color: #1abc9c;
}

a.badge-primary:hover, a.badge-primary:focus {
    color: #fff;
    background-color: #148f77;
}

a.badge-primary:focus, a.badge-primary.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(26, 188, 156, 0.5);
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d;
}

a.badge-secondary:hover, a.badge-secondary:focus {
    color: #fff;
    background-color: #545b62;
}

a.badge-secondary:focus, a.badge-secondary.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(108, 117, 125, 0.5);
}

.badge-success {
    color: #fff;
    background-color: #2ecc71;
}

a.badge-success:hover, a.badge-success:focus {
    color: #fff;
    background-color: #25a25a;
}

a.badge-success:focus, a.badge-success.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(46, 204, 113, 0.5);
}

.badge-info {
    color: #fff;
    background-color: #00acc1;
}

a.badge-info:hover, a.badge-info:focus {
    color: #fff;
    background-color: #007f8e;
}

a.badge-info:focus, a.badge-info.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(0, 172, 193, 0.5);
}

.badge-warning {
    color: #fff;
    background-color: #f1c40f;
}

a.badge-warning:hover, a.badge-warning:focus {
    color: #fff;
    background-color: #c29d0b;
}

a.badge-warning:focus, a.badge-warning.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(241, 196, 15, 0.5);
}

.badge-danger {
    color: #fff;
    background-color: #e74c3c;
}

a.badge-danger:hover, a.badge-danger:focus {
    color: #fff;
    background-color: #d62c1a;
}

a.badge-danger:focus, a.badge-danger.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(231, 76, 60, 0.5);
}

.badge-light {
    color: #212529;
    background-color: #f8f9fa;
}

a.badge-light:hover, a.badge-light:focus {
    color: #212529;
    background-color: #dae0e5;
}

a.badge-light:focus, a.badge-light.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(248, 249, 250, 0.5);
}

.badge-dark {
    color: #fff;
    background-color: #343a40;
}

a.badge-dark:hover, a.badge-dark:focus {
    color: #fff;
    background-color: #1d2124;
}

a.badge-dark:focus, a.badge-dark.focus {
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(52, 58, 64, 0.5);
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: 2px;
}

@media (min-width: 576px) {
    .jumbotron {
        padding: 4rem 2rem;
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
}

.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 2px;
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 700;
}

.alert-dismissible {
    padding-right: 4rem;
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit;
}

.alert-primary {
    color: #0e6251;
    background-color: #d1f2eb;
    border-color: #bfece3;
}

.alert-primary hr {
    border-top-color: #abe6da;
}

.alert-primary .alert-link {
    color: #08352c;
}

.alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db;
}

.alert-secondary hr {
    border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
    color: #202326;
}

.alert-success {
    color: #186a3b;
    background-color: #d5f5e3;
    border-color: #c4f1d7;
}

.alert-success hr {
    border-top-color: #afecc9;
}

.alert-success .alert-link {
    color: #0f4024;
}

.alert-info {
    color: #005964;
    background-color: #cceef3;
    border-color: #b8e8ee;
}

.alert-info hr {
    border-top-color: #a3e1e9;
}

.alert-info .alert-link {
    color: #002c31;
}

.alert-warning {
    color: #7d6608;
    background-color: #fcf3cf;
    border-color: #fbeebc;
}

.alert-warning hr {
    border-top-color: #fae8a4;
}

.alert-warning .alert-link {
    color: #4d3f05;
}

.alert-danger {
    color: #78281f;
    background-color: #fadbd8;
    border-color: #f8cdc8;
}

.alert-danger hr {
    border-top-color: #f5b8b1;
}

.alert-danger .alert-link {
    color: #4f1a15;
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe;
}

.alert-light hr {
    border-top-color: #ececf6;
}

.alert-light .alert-link {
    color: #686868;
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca;
}

.alert-dark hr {
    border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
    color: #040505;
}

@keyframes progress-bar-stripes {
    from {
        background-position: 0.6rem 0;
    }

    to {
        background-position: 0 0;
    }
}

.progress {
    display: flex;
    height: 0.6rem;
    overflow: hidden;
    font-size: 0.5rem;
    background-color: #e9e9e9;
    border-radius: 2px;
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #1abc9c;
    transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 0.6rem 0.6rem;
}

.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        -webkit-animation: none;
        animation: none;
    }
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1;
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa;
}

.list-group-item-action:active {
    color: #373a3c;
    background-color: #e9ecef;
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
}

.list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.list-group-horizontal {
    flex-direction: row;
}

.list-group-horizontal .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
}

.list-group-horizontal .list-group-item:first-child {
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
    border-top-right-radius: 0;
}

.list-group-horizontal .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 0;
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction: row;
    }

    .list-group-horizontal-sm .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }

    .list-group-horizontal-sm .list-group-item:first-child {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
        border-top-right-radius: 0;
    }

    .list-group-horizontal-sm .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 0;
    }
}

@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction: row;
    }

    .list-group-horizontal-md .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }

    .list-group-horizontal-md .list-group-item:first-child {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
        border-top-right-radius: 0;
    }

    .list-group-horizontal-md .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 0;
    }
}

@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction: row;
    }

    .list-group-horizontal-lg .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }

    .list-group-horizontal-lg .list-group-item:first-child {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
        border-top-right-radius: 0;
    }

    .list-group-horizontal-lg .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 0;
    }
}

@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction: row;
    }

    .list-group-horizontal-xl .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }

    .list-group-horizontal-xl .list-group-item:first-child {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
        border-top-right-radius: 0;
    }

    .list-group-horizontal-xl .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 0;
    }
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}

.list-group-flush .list-group-item:last-child {
    margin-bottom: -1px;
}

.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom: 0;
}

.list-group-item-primary {
    color: #0e6251;
    background-color: #bfece3;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #0e6251;
    background-color: #abe6da;
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #0e6251;
    border-color: #0e6251;
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41;
}

.list-group-item-success {
    color: #186a3b;
    background-color: #c4f1d7;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #186a3b;
    background-color: #afecc9;
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #186a3b;
    border-color: #186a3b;
}

.list-group-item-info {
    color: #005964;
    background-color: #b8e8ee;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #005964;
    background-color: #a3e1e9;
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #005964;
    border-color: #005964;
}

.list-group-item-warning {
    color: #7d6608;
    background-color: #fbeebc;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #7d6608;
    background-color: #fae8a4;
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #7d6608;
    border-color: #7d6608;
}

.list-group-item-danger {
    color: #78281f;
    background-color: #f8cdc8;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #78281f;
    background-color: #f5b8b1;
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #78281f;
    border-color: #78281f;
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182;
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21;
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}

.close:hover {
    color: #000;
    text-decoration: none;
}

.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
    opacity: .75;
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

a.close.disabled {
    pointer-events: none;
}

.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: 0.25rem;
}

.toast:not(:last-child) {
    margin-bottom: 0.75rem;
}

.toast.showing {
    opacity: 1;
}

.toast.show {
    display: block;
    opacity: 1;
}

.toast.hide {
    display: none;
}

.toast-header {
    display: flex;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color: #6c757d;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.toast-body {
    padding: 0.75rem;
}

.modal-open {
    overflow: hidden;
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}

.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: scale(0.7);
}

@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}

.modal.show .modal-dialog {
    transform: none;
}

.modal-dialog-scrollable {
    display: flex;
    max-height: calc(100% - 1rem);
}

.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden;
}

.modal-dialog-scrollable .modal-header,
  .modal-dialog-scrollable .modal-footer {
    flex-shrink: 0;
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}

.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: "";
}

.modal-dialog-centered.modal-dialog-scrollable {
    flex-direction: column;
    justify-content: center;
    height: 100%;
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none;
}

.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none;
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 2px;
    outline: 0;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}

.modal-backdrop.fade {
    opacity: 0;
}

.modal-backdrop.show {
    opacity: 0.5;
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 20px 20px;
    border-bottom: 1px solid #e3eaef;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}

.modal-header .close {
    padding: 20px 20px;
    margin: -20px -20px -20px auto;
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 20px 20px;
}

.modal-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 20px 20px;
    border-top: 1px solid #e3eaef;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
}

.modal-footer > :not(:first-child) {
    margin-left: .25rem;
}

.modal-footer > :not(:last-child) {
    margin-right: .25rem;
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }

    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem);
    }

    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem);
    }

    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem);
    }

    .modal-sm {
        max-width: 300px;
    }
}

@media (min-width: 992px) {
    .modal-lg,
  .modal-xl {
        max-width: 800px;
    }
}

@media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px;
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: "Open Sans", sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0;
}

.tooltip.show {
    opacity: 0.9;
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}

.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
    padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
    padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
    padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
    padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000;
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 2px;
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: "Open Sans", sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 2px;
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 2px;
}

.popover .arrow::before, .popover .arrow::after {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
    margin-bottom: 0.5rem;
}

.bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
    bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
    margin-left: 0.5rem;
}

.bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 2px 0;
}

.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
    margin-top: 0.5rem;
}

.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
    top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
    margin-right: 0.5rem;
}

.bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 2px 0;
}

.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff;
}

.popover-header {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 1rem;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(2px - 1px);
    border-top-right-radius: calc(2px - 1px);
}

.popover-header:empty {
    display: none;
}

.popover-body {
    padding: 0.5rem 0.75rem;
    color: #373a3c;
}

.carousel {
    position: relative;
}

.carousel.pointer-event {
    touch-action: pan-y;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: "";
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
    display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
    transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
    transform: translateX(-100%);
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
    z-index: 1;
    opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: 0s 0.6s opacity;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        transition: none;
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0.5;
    transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
        transition: none;
    }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: flex;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}

.carousel-indicators li {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-indicators li {
        transition: none;
    }
}

.carousel-indicators .active {
    opacity: 1;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}

@-webkit-keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg);
    }
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: 0.25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner-border .75s linear infinite;
    animation: spinner-border .75s linear infinite;
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
    0% {
        transform: scale(0);
    }

    50% {
        opacity: 1;
    }
}

@keyframes spinner-grow {
    0% {
        transform: scale(0);
    }

    50% {
        opacity: 1;
    }
}

.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    -webkit-animation: spinner-grow .75s linear infinite;
    animation: spinner-grow .75s linear infinite;
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem;
}

.align-baseline {
    vertical-align: baseline !important;
}

.align-top {
    vertical-align: top !important;
}

.align-middle {
    vertical-align: middle !important;
}

.align-bottom {
    vertical-align: bottom !important;
}

.align-text-bottom {
    vertical-align: text-bottom !important;
}

.align-text-top {
    vertical-align: text-top !important;
}

.bg-primary {
    background-color: #1abc9c !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
    background-color: #148f77 !important;
}

.bg-secondary {
    background-color: #6c757d !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
    background-color: #545b62 !important;
}

.bg-success {
    background-color: #2ecc71 !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
    background-color: #25a25a !important;
}

.bg-info {
    background-color: #00acc1 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
    background-color: #007f8e !important;
}

.bg-warning {
    background-color: #f1c40f !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
    background-color: #c29d0b !important;
}

.bg-danger {
    background-color: #e74c3c !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
    background-color: #d62c1a !important;
}

.bg-light {
    background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
    background-color: #dae0e5 !important;
}

.bg-dark {
    background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
    background-color: #1d2124 !important;
}

.bg-white {
    background-color: #fff !important;
}

.bg-transparent {
    background-color: transparent !important;
}

.border {
    border: 1px solid #e3eaef !important;
}

.border-top {
    border-top: 1px solid #e3eaef !important;
}

.border-right {
    border-right: 1px solid #e3eaef !important;
}

.border-bottom {
    border-bottom: 1px solid #e3eaef !important;
}

.border-left {
    border-left: 1px solid #e3eaef !important;
}

.border-0 {
    border: 0 !important;
}

.border-top-0 {
    border-top: 0 !important;
}

.border-right-0 {
    border-right: 0 !important;
}

.border-bottom-0 {
    border-bottom: 0 !important;
}

.border-left-0 {
    border-left: 0 !important;
}

.border-primary {
    border-color: #1abc9c !important;
}

.border-secondary {
    border-color: #6c757d !important;
}

.border-success {
    border-color: #2ecc71 !important;
}

.border-info {
    border-color: #00acc1 !important;
}

.border-warning {
    border-color: #f1c40f !important;
}

.border-danger {
    border-color: #e74c3c !important;
}

.border-light {
    border-color: #f8f9fa !important;
}

.border-dark {
    border-color: #343a40 !important;
}

.border-white {
    border-color: #fff !important;
}

.rounded-sm {
    border-radius: 2px !important;
}

.rounded {
    border-radius: 2px !important;
}

.rounded-top {
    border-top-left-radius: 2px !important;
    border-top-right-radius: 2px !important;
}

.rounded-right {
    border-top-right-radius: 2px !important;
    border-bottom-right-radius: 2px !important;
}

.rounded-bottom {
    border-bottom-right-radius: 2px !important;
    border-bottom-left-radius: 2px !important;
}

.rounded-left {
    border-top-left-radius: 2px !important;
    border-bottom-left-radius: 2px !important;
}

.rounded-lg {
    border-radius: 2px !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.rounded-pill {
    border-radius: 50rem !important;
}

.rounded-0 {
    border-radius: 0 !important;
}

.clearfix::after {
    display: block;
    clear: both;
    content: "";
}

.d-none {
    display: none !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: flex !important;
}

.d-inline-flex {
    display: inline-flex !important;
}

@media (min-width: 576px) {
    .d-sm-none {
        display: none !important;
    }

    .d-sm-inline {
        display: inline !important;
    }

    .d-sm-inline-block {
        display: inline-block !important;
    }

    .d-sm-block {
        display: block !important;
    }

    .d-sm-table {
        display: table !important;
    }

    .d-sm-table-row {
        display: table-row !important;
    }

    .d-sm-table-cell {
        display: table-cell !important;
    }

    .d-sm-flex {
        display: flex !important;
    }

    .d-sm-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display: none !important;
    }

    .d-md-inline {
        display: inline !important;
    }

    .d-md-inline-block {
        display: inline-block !important;
    }

    .d-md-block {
        display: block !important;
    }

    .d-md-table {
        display: table !important;
    }

    .d-md-table-row {
        display: table-row !important;
    }

    .d-md-table-cell {
        display: table-cell !important;
    }

    .d-md-flex {
        display: flex !important;
    }

    .d-md-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display: none !important;
    }

    .d-lg-inline {
        display: inline !important;
    }

    .d-lg-inline-block {
        display: inline-block !important;
    }

    .d-lg-block {
        display: block !important;
    }

    .d-lg-table {
        display: table !important;
    }

    .d-lg-table-row {
        display: table-row !important;
    }

    .d-lg-table-cell {
        display: table-cell !important;
    }

    .d-lg-flex {
        display: flex !important;
    }

    .d-lg-inline-flex {
        display: inline-flex !important;
    }
}

@media (min-width: 1200px) {
    .d-xl-none {
        display: none !important;
    }

    .d-xl-inline {
        display: inline !important;
    }

    .d-xl-inline-block {
        display: inline-block !important;
    }

    .d-xl-block {
        display: block !important;
    }

    .d-xl-table {
        display: table !important;
    }

    .d-xl-table-row {
        display: table-row !important;
    }

    .d-xl-table-cell {
        display: table-cell !important;
    }

    .d-xl-flex {
        display: flex !important;
    }

    .d-xl-inline-flex {
        display: inline-flex !important;
    }
}

@media print {
    .d-print-none {
        display: none !important;
    }

    .d-print-inline {
        display: inline !important;
    }

    .d-print-inline-block {
        display: inline-block !important;
    }

    .d-print-block {
        display: block !important;
    }

    .d-print-table {
        display: table !important;
    }

    .d-print-table-row {
        display: table-row !important;
    }

    .d-print-table-cell {
        display: table-cell !important;
    }

    .d-print-flex {
        display: flex !important;
    }

    .d-print-inline-flex {
        display: inline-flex !important;
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}

.embed-responsive::before {
    display: block;
    content: "";
}

.embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

.embed-responsive-21by9::before {
    padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
    padding-top: 56.25%;
}

.embed-responsive-4by3::before {
    padding-top: 75%;
}

.embed-responsive-1by1::before {
    padding-top: 100%;
}

.embed-responsive-21by9::before {
    padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
    padding-top: 56.25%;
}

.embed-responsive-4by3::before {
    padding-top: 75%;
}

.embed-responsive-1by1::before {
    padding-top: 100%;
}

.flex-row {
    flex-direction: row !important;
}

.flex-column {
    flex-direction: column !important;
}

.flex-row-reverse {
    flex-direction: row-reverse !important;
}

.flex-column-reverse {
    flex-direction: column-reverse !important;
}

.flex-wrap {
    flex-wrap: wrap !important;
}

.flex-nowrap {
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
}

.flex-fill {
    flex: 1 1 auto !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.flex-grow-1 {
    flex-grow: 1 !important;
}

.flex-shrink-0 {
    flex-shrink: 0 !important;
}

.flex-shrink-1 {
    flex-shrink: 1 !important;
}

.justify-content-start {
    justify-content: flex-start !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.justify-content-center {
    justify-content: center !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.justify-content-around {
    justify-content: space-around !important;
}

.align-items-start {
    align-items: flex-start !important;
}

.align-items-end {
    align-items: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

.align-items-baseline {
    align-items: baseline !important;
}

.align-items-stretch {
    align-items: stretch !important;
}

.align-content-start {
    align-content: flex-start !important;
}

.align-content-end {
    align-content: flex-end !important;
}

.align-content-center {
    align-content: center !important;
}

.align-content-between {
    align-content: space-between !important;
}

.align-content-around {
    align-content: space-around !important;
}

.align-content-stretch {
    align-content: stretch !important;
}

.align-self-auto {
    align-self: auto !important;
}

.align-self-start {
    align-self: flex-start !important;
}

.align-self-end {
    align-self: flex-end !important;
}

.align-self-center {
    align-self: center !important;
}

.align-self-baseline {
    align-self: baseline !important;
}

.align-self-stretch {
    align-self: stretch !important;
}

@media (min-width: 576px) {
    .flex-sm-row {
        flex-direction: row !important;
    }

    .flex-sm-column {
        flex-direction: column !important;
    }

    .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-sm-wrap {
        flex-wrap: wrap !important;
    }

    .flex-sm-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-sm-fill {
        flex: 1 1 auto !important;
    }

    .flex-sm-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-sm-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-sm-start {
        justify-content: flex-start !important;
    }

    .justify-content-sm-end {
        justify-content: flex-end !important;
    }

    .justify-content-sm-center {
        justify-content: center !important;
    }

    .justify-content-sm-between {
        justify-content: space-between !important;
    }

    .justify-content-sm-around {
        justify-content: space-around !important;
    }

    .align-items-sm-start {
        align-items: flex-start !important;
    }

    .align-items-sm-end {
        align-items: flex-end !important;
    }

    .align-items-sm-center {
        align-items: center !important;
    }

    .align-items-sm-baseline {
        align-items: baseline !important;
    }

    .align-items-sm-stretch {
        align-items: stretch !important;
    }

    .align-content-sm-start {
        align-content: flex-start !important;
    }

    .align-content-sm-end {
        align-content: flex-end !important;
    }

    .align-content-sm-center {
        align-content: center !important;
    }

    .align-content-sm-between {
        align-content: space-between !important;
    }

    .align-content-sm-around {
        align-content: space-around !important;
    }

    .align-content-sm-stretch {
        align-content: stretch !important;
    }

    .align-self-sm-auto {
        align-self: auto !important;
    }

    .align-self-sm-start {
        align-self: flex-start !important;
    }

    .align-self-sm-end {
        align-self: flex-end !important;
    }

    .align-self-sm-center {
        align-self: center !important;
    }

    .align-self-sm-baseline {
        align-self: baseline !important;
    }

    .align-self-sm-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        flex-direction: row !important;
    }

    .flex-md-column {
        flex-direction: column !important;
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-md-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-md-wrap {
        flex-wrap: wrap !important;
    }

    .flex-md-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-md-fill {
        flex: 1 1 auto !important;
    }

    .flex-md-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-md-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-md-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-md-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-md-start {
        justify-content: flex-start !important;
    }

    .justify-content-md-end {
        justify-content: flex-end !important;
    }

    .justify-content-md-center {
        justify-content: center !important;
    }

    .justify-content-md-between {
        justify-content: space-between !important;
    }

    .justify-content-md-around {
        justify-content: space-around !important;
    }

    .align-items-md-start {
        align-items: flex-start !important;
    }

    .align-items-md-end {
        align-items: flex-end !important;
    }

    .align-items-md-center {
        align-items: center !important;
    }

    .align-items-md-baseline {
        align-items: baseline !important;
    }

    .align-items-md-stretch {
        align-items: stretch !important;
    }

    .align-content-md-start {
        align-content: flex-start !important;
    }

    .align-content-md-end {
        align-content: flex-end !important;
    }

    .align-content-md-center {
        align-content: center !important;
    }

    .align-content-md-between {
        align-content: space-between !important;
    }

    .align-content-md-around {
        align-content: space-around !important;
    }

    .align-content-md-stretch {
        align-content: stretch !important;
    }

    .align-self-md-auto {
        align-self: auto !important;
    }

    .align-self-md-start {
        align-self: flex-start !important;
    }

    .align-self-md-end {
        align-self: flex-end !important;
    }

    .align-self-md-center {
        align-self: center !important;
    }

    .align-self-md-baseline {
        align-self: baseline !important;
    }

    .align-self-md-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        flex-direction: row !important;
    }

    .flex-lg-column {
        flex-direction: column !important;
    }

    .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-lg-wrap {
        flex-wrap: wrap !important;
    }

    .flex-lg-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-lg-fill {
        flex: 1 1 auto !important;
    }

    .flex-lg-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-lg-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-lg-start {
        justify-content: flex-start !important;
    }

    .justify-content-lg-end {
        justify-content: flex-end !important;
    }

    .justify-content-lg-center {
        justify-content: center !important;
    }

    .justify-content-lg-between {
        justify-content: space-between !important;
    }

    .justify-content-lg-around {
        justify-content: space-around !important;
    }

    .align-items-lg-start {
        align-items: flex-start !important;
    }

    .align-items-lg-end {
        align-items: flex-end !important;
    }

    .align-items-lg-center {
        align-items: center !important;
    }

    .align-items-lg-baseline {
        align-items: baseline !important;
    }

    .align-items-lg-stretch {
        align-items: stretch !important;
    }

    .align-content-lg-start {
        align-content: flex-start !important;
    }

    .align-content-lg-end {
        align-content: flex-end !important;
    }

    .align-content-lg-center {
        align-content: center !important;
    }

    .align-content-lg-between {
        align-content: space-between !important;
    }

    .align-content-lg-around {
        align-content: space-around !important;
    }

    .align-content-lg-stretch {
        align-content: stretch !important;
    }

    .align-self-lg-auto {
        align-self: auto !important;
    }

    .align-self-lg-start {
        align-self: flex-start !important;
    }

    .align-self-lg-end {
        align-self: flex-end !important;
    }

    .align-self-lg-center {
        align-self: center !important;
    }

    .align-self-lg-baseline {
        align-self: baseline !important;
    }

    .align-self-lg-stretch {
        align-self: stretch !important;
    }
}

@media (min-width: 1200px) {
    .flex-xl-row {
        flex-direction: row !important;
    }

    .flex-xl-column {
        flex-direction: column !important;
    }

    .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
    }

    .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
    }

    .flex-xl-wrap {
        flex-wrap: wrap !important;
    }

    .flex-xl-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-xl-fill {
        flex: 1 1 auto !important;
    }

    .flex-xl-grow-0 {
        flex-grow: 0 !important;
    }

    .flex-xl-grow-1 {
        flex-grow: 1 !important;
    }

    .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-xl-start {
        justify-content: flex-start !important;
    }

    .justify-content-xl-end {
        justify-content: flex-end !important;
    }

    .justify-content-xl-center {
        justify-content: center !important;
    }

    .justify-content-xl-between {
        justify-content: space-between !important;
    }

    .justify-content-xl-around {
        justify-content: space-around !important;
    }

    .align-items-xl-start {
        align-items: flex-start !important;
    }

    .align-items-xl-end {
        align-items: flex-end !important;
    }

    .align-items-xl-center {
        align-items: center !important;
    }

    .align-items-xl-baseline {
        align-items: baseline !important;
    }

    .align-items-xl-stretch {
        align-items: stretch !important;
    }

    .align-content-xl-start {
        align-content: flex-start !important;
    }

    .align-content-xl-end {
        align-content: flex-end !important;
    }

    .align-content-xl-center {
        align-content: center !important;
    }

    .align-content-xl-between {
        align-content: space-between !important;
    }

    .align-content-xl-around {
        align-content: space-around !important;
    }

    .align-content-xl-stretch {
        align-content: stretch !important;
    }

    .align-self-xl-auto {
        align-self: auto !important;
    }

    .align-self-xl-start {
        align-self: flex-start !important;
    }

    .align-self-xl-end {
        align-self: flex-end !important;
    }

    .align-self-xl-center {
        align-self: center !important;
    }

    .align-self-xl-baseline {
        align-self: baseline !important;
    }

    .align-self-xl-stretch {
        align-self: stretch !important;
    }
}

.float-left {
    float: left !important;
}

.float-right {
    float: right !important;
}

.float-none {
    float: none !important;
}

@media (min-width: 576px) {
    .float-sm-left {
        float: left !important;
    }

    .float-sm-right {
        float: right !important;
    }

    .float-sm-none {
        float: none !important;
    }
}

@media (min-width: 768px) {
    .float-md-left {
        float: left !important;
    }

    .float-md-right {
        float: right !important;
    }

    .float-md-none {
        float: none !important;
    }
}

@media (min-width: 992px) {
    .float-lg-left {
        float: left !important;
    }

    .float-lg-right {
        float: right !important;
    }

    .float-lg-none {
        float: none !important;
    }
}

@media (min-width: 1200px) {
    .float-xl-left {
        float: left !important;
    }

    .float-xl-right {
        float: right !important;
    }

    .float-xl-none {
        float: none !important;
    }
}

.overflow-auto {
    overflow: auto !important;
}

.overflow-hidden {
    overflow: hidden !important;
}

.position-static {
    position: static !important;
}

.position-relative {
    position: relative !important;
}

.position-absolute {
    position: absolute !important;
}

.position-fixed {
    position: fixed !important;
}

.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}
.fixed-button {
    left: 30px;
    right: auto !important;
    display: none !important;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
    box-shadow: none !important;
}

.w-25 {
    width: 25% !important;
}

.w-50 {
    width: 50% !important;
}

.w-75 {
    width: 75% !important;
}

.w-100 {
    width: 100% !important;
}

.w-auto {
    width: auto !important;
}

.h-25 {
    height: 25% !important;
}

.h-50 {
    height: 50% !important;
}

.h-75 {
    height: 75% !important;
}

.h-100 {
    height: 100% !important;
}

.h-auto {
    height: auto !important;
}

.mw-100 {
    max-width: 100% !important;
}

.mh-100 {
    max-height: 100% !important;
}

.min-vw-100 {
    min-width: 100vw !important;
}

.min-vh-100 {
    min-height: 100vh !important;
}

.vw-100 {
    width: 100vw !important;
}

.vh-100 {
    height: 100vh !important;
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0, 0, 0, 0);
}

.m-0 {
    margin: 0 !important;
}

.mt-0,
.my-0 {
    margin-top: 0 !important;
}

.mr-0,
.mx-0 {
    margin-right: 0 !important;
}

.mb-0,
.my-0 {
    margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
    margin-left: 0 !important;
}

.m-1 {
    margin: 0.25rem !important;
}

.mt-1,
.my-1 {
    margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
    margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
    margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
    margin-left: 0.25rem !important;
}

.m-2 {
    margin: 0.5rem !important;
}

.mt-2,
.my-2 {
    margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
    margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
    margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
    margin-left: 0.5rem !important;
}

.m-3 {
    margin: 1rem !important;
}

.mt-3,
.my-3 {
    margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
    margin-right: 1rem !important;
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
    margin-left: 1rem !important;
}

.m-4 {
    margin: 1.5rem !important;
}

.mt-4,
.my-4 {
    margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
    margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
    margin-left: 1.5rem !important;
}

.m-5 {
    margin: 3rem !important;
}

.mt-5,
.my-5 {
    margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
    margin-right: 3rem !important;
}

.mb-5,
.my-5 {
    margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
    margin-left: 3rem !important;
}

.p-0 {
    padding: 0 !important;
}

.pt-0,
.py-0 {
    padding-top: 0 !important;
}

.pr-0,
.px-0 {
    padding-right: 0 !important;
}

.pb-0,
.py-0 {
    padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
    padding-left: 0 !important;
}

.p-1 {
    padding: 0.25rem !important;
}

.pt-1,
.py-1 {
    padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
    padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
    padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
    padding-left: 0.25rem !important;
}

.p-2 {
    padding: 0.5rem !important;
}

.pt-2,
.py-2 {
    padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
    padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
    padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
    padding-left: 0.5rem !important;
}

.p-3 {
    padding: 1rem !important;
}

.pt-3,
.py-3 {
    padding-top: 1rem !important;
}

.pr-3,
.px-3 {
    padding-right: 1rem !important;
}

.pb-3,
.py-3 {
    padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
    padding-left: 1rem !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.pt-4,
.py-4 {
    padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
    padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
    padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
    padding-left: 1.5rem !important;
}

.p-5 {
    padding: 3rem !important;
}

.pt-5,
.py-5 {
    padding-top: 3rem !important;
}

.pr-5,
.px-5 {
    padding-right: 3rem !important;
}

.pb-5,
.py-5 {
    padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
    padding-left: 3rem !important;
}

.m-n1 {
    margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
    margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
    margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
    margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
    margin-left: -0.25rem !important;
}

.m-n2 {
    margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
    margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
    margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
    margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
    margin-left: -0.5rem !important;
}

.m-n3 {
    margin: -1rem !important;
}

.mt-n3,
.my-n3 {
    margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
    margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
    margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
    margin-left: -1rem !important;
}

.m-n4 {
    margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
    margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
    margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
    margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
    margin-left: -1.5rem !important;
}

.m-n5 {
    margin: -3rem !important;
}

.mt-n5,
.my-n5 {
    margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
    margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
    margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
    margin-left: -3rem !important;
}

.m-auto {
    margin: auto !important;
}

.mt-auto,
.my-auto {
    margin-top: auto !important;
}

.mr-auto,
.mx-auto {
    margin-right: auto !important;
}

.mb-auto,
.my-auto {
    margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
    margin-left: auto !important;
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important;
    }

    .mt-sm-0,
  .my-sm-0 {
        margin-top: 0 !important;
    }

    .mr-sm-0,
  .mx-sm-0 {
        margin-right: 0 !important;
    }

    .mb-sm-0,
  .my-sm-0 {
        margin-bottom: 0 !important;
    }

    .ml-sm-0,
  .mx-sm-0 {
        margin-left: 0 !important;
    }

    .m-sm-1 {
        margin: 0.25rem !important;
    }

    .mt-sm-1,
  .my-sm-1 {
        margin-top: 0.25rem !important;
    }

    .mr-sm-1,
  .mx-sm-1 {
        margin-right: 0.25rem !important;
    }

    .mb-sm-1,
  .my-sm-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-sm-1,
  .mx-sm-1 {
        margin-left: 0.25rem !important;
    }

    .m-sm-2 {
        margin: 0.5rem !important;
    }

    .mt-sm-2,
  .my-sm-2 {
        margin-top: 0.5rem !important;
    }

    .mr-sm-2,
  .mx-sm-2 {
        margin-right: 0.5rem !important;
    }

    .mb-sm-2,
  .my-sm-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-sm-2,
  .mx-sm-2 {
        margin-left: 0.5rem !important;
    }

    .m-sm-3 {
        margin: 1rem !important;
    }

    .mt-sm-3,
  .my-sm-3 {
        margin-top: 1rem !important;
    }

    .mr-sm-3,
  .mx-sm-3 {
        margin-right: 1rem !important;
    }

    .mb-sm-3,
  .my-sm-3 {
        margin-bottom: 1rem !important;
    }

    .ml-sm-3,
  .mx-sm-3 {
        margin-left: 1rem !important;
    }

    .m-sm-4 {
        margin: 1.5rem !important;
    }

    .mt-sm-4,
  .my-sm-4 {
        margin-top: 1.5rem !important;
    }

    .mr-sm-4,
  .mx-sm-4 {
        margin-right: 1.5rem !important;
    }

    .mb-sm-4,
  .my-sm-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-sm-4,
  .mx-sm-4 {
        margin-left: 1.5rem !important;
    }

    .m-sm-5 {
        margin: 3rem !important;
    }

    .mt-sm-5,
  .my-sm-5 {
        margin-top: 3rem !important;
    }

    .mr-sm-5,
  .mx-sm-5 {
        margin-right: 3rem !important;
    }

    .mb-sm-5,
  .my-sm-5 {
        margin-bottom: 3rem !important;
    }

    .ml-sm-5,
  .mx-sm-5 {
        margin-left: 3rem !important;
    }

    .p-sm-0 {
        padding: 0 !important;
    }

    .pt-sm-0,
  .py-sm-0 {
        padding-top: 0 !important;
    }

    .pr-sm-0,
  .px-sm-0 {
        padding-right: 0 !important;
    }

    .pb-sm-0,
  .py-sm-0 {
        padding-bottom: 0 !important;
    }

    .pl-sm-0,
  .px-sm-0 {
        padding-left: 0 !important;
    }

    .p-sm-1 {
        padding: 0.25rem !important;
    }

    .pt-sm-1,
  .py-sm-1 {
        padding-top: 0.25rem !important;
    }

    .pr-sm-1,
  .px-sm-1 {
        padding-right: 0.25rem !important;
    }

    .pb-sm-1,
  .py-sm-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-sm-1,
  .px-sm-1 {
        padding-left: 0.25rem !important;
    }

    .p-sm-2 {
        padding: 0.5rem !important;
    }

    .pt-sm-2,
  .py-sm-2 {
        padding-top: 0.5rem !important;
    }

    .pr-sm-2,
  .px-sm-2 {
        padding-right: 0.5rem !important;
    }

    .pb-sm-2,
  .py-sm-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-sm-2,
  .px-sm-2 {
        padding-left: 0.5rem !important;
    }

    .p-sm-3 {
        padding: 1rem !important;
    }

    .pt-sm-3,
  .py-sm-3 {
        padding-top: 1rem !important;
    }

    .pr-sm-3,
  .px-sm-3 {
        padding-right: 1rem !important;
    }

    .pb-sm-3,
  .py-sm-3 {
        padding-bottom: 1rem !important;
    }

    .pl-sm-3,
  .px-sm-3 {
        padding-left: 1rem !important;
    }

    .p-sm-4 {
        padding: 1.5rem !important;
    }

    .pt-sm-4,
  .py-sm-4 {
        padding-top: 1.5rem !important;
    }

    .pr-sm-4,
  .px-sm-4 {
        padding-right: 1.5rem !important;
    }

    .pb-sm-4,
  .py-sm-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-sm-4,
  .px-sm-4 {
        padding-left: 1.5rem !important;
    }

    .p-sm-5 {
        padding: 3rem !important;
    }

    .pt-sm-5,
  .py-sm-5 {
        padding-top: 3rem !important;
    }

    .pr-sm-5,
  .px-sm-5 {
        padding-right: 3rem !important;
    }

    .pb-sm-5,
  .py-sm-5 {
        padding-bottom: 3rem !important;
    }

    .pl-sm-5,
  .px-sm-5 {
        padding-left: 3rem !important;
    }

    .m-sm-n1 {
        margin: -0.25rem !important;
    }

    .mt-sm-n1,
  .my-sm-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-sm-n1,
  .mx-sm-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-sm-n1,
  .my-sm-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-sm-n1,
  .mx-sm-n1 {
        margin-left: -0.25rem !important;
    }

    .m-sm-n2 {
        margin: -0.5rem !important;
    }

    .mt-sm-n2,
  .my-sm-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-sm-n2,
  .mx-sm-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-sm-n2,
  .my-sm-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-sm-n2,
  .mx-sm-n2 {
        margin-left: -0.5rem !important;
    }

    .m-sm-n3 {
        margin: -1rem !important;
    }

    .mt-sm-n3,
  .my-sm-n3 {
        margin-top: -1rem !important;
    }

    .mr-sm-n3,
  .mx-sm-n3 {
        margin-right: -1rem !important;
    }

    .mb-sm-n3,
  .my-sm-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-sm-n3,
  .mx-sm-n3 {
        margin-left: -1rem !important;
    }

    .m-sm-n4 {
        margin: -1.5rem !important;
    }

    .mt-sm-n4,
  .my-sm-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-sm-n4,
  .mx-sm-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-sm-n4,
  .my-sm-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-sm-n4,
  .mx-sm-n4 {
        margin-left: -1.5rem !important;
    }

    .m-sm-n5 {
        margin: -3rem !important;
    }

    .mt-sm-n5,
  .my-sm-n5 {
        margin-top: -3rem !important;
    }

    .mr-sm-n5,
  .mx-sm-n5 {
        margin-right: -3rem !important;
    }

    .mb-sm-n5,
  .my-sm-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-sm-n5,
  .mx-sm-n5 {
        margin-left: -3rem !important;
    }

    .m-sm-auto {
        margin: auto !important;
    }

    .mt-sm-auto,
  .my-sm-auto {
        margin-top: auto !important;
    }

    .mr-sm-auto,
  .mx-sm-auto {
        margin-right: auto !important;
    }

    .mb-sm-auto,
  .my-sm-auto {
        margin-bottom: auto !important;
    }

    .ml-sm-auto,
  .mx-sm-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important;
    }

    .mt-md-0,
  .my-md-0 {
        margin-top: 0 !important;
    }

    .mr-md-0,
  .mx-md-0 {
        margin-right: 0 !important;
    }

    .mb-md-0,
  .my-md-0 {
        margin-bottom: 0 !important;
    }

    .ml-md-0,
  .mx-md-0 {
        margin-left: 0 !important;
    }

    .m-md-1 {
        margin: 0.25rem !important;
    }

    .mt-md-1,
  .my-md-1 {
        margin-top: 0.25rem !important;
    }

    .mr-md-1,
  .mx-md-1 {
        margin-right: 0.25rem !important;
    }

    .mb-md-1,
  .my-md-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-md-1,
  .mx-md-1 {
        margin-left: 0.25rem !important;
    }

    .m-md-2 {
        margin: 0.5rem !important;
    }

    .mt-md-2,
  .my-md-2 {
        margin-top: 0.5rem !important;
    }

    .mr-md-2,
  .mx-md-2 {
        margin-right: 0.5rem !important;
    }

    .mb-md-2,
  .my-md-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-md-2,
  .mx-md-2 {
        margin-left: 0.5rem !important;
    }

    .m-md-3 {
        margin: 1rem !important;
    }

    .mt-md-3,
  .my-md-3 {
        margin-top: 1rem !important;
    }

    .mr-md-3,
  .mx-md-3 {
        margin-right: 1rem !important;
    }

    .mb-md-3,
  .my-md-3 {
        margin-bottom: 1rem !important;
    }

    .ml-md-3,
  .mx-md-3 {
        margin-left: 1rem !important;
    }

    .m-md-4 {
        margin: 1.5rem !important;
    }

    .mt-md-4,
  .my-md-4 {
        margin-top: 1.5rem !important;
    }

    .mr-md-4,
  .mx-md-4 {
        margin-right: 1.5rem !important;
    }

    .mb-md-4,
  .my-md-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-md-4,
  .mx-md-4 {
        margin-left: 1.5rem !important;
    }

    .m-md-5 {
        margin: 3rem !important;
    }

    .mt-md-5,
  .my-md-5 {
        margin-top: 3rem !important;
    }

    .mr-md-5,
  .mx-md-5 {
        margin-right: 3rem !important;
    }

    .mb-md-5,
  .my-md-5 {
        margin-bottom: 3rem !important;
    }

    .ml-md-5,
  .mx-md-5 {
        margin-left: 3rem !important;
    }

    .p-md-0 {
        padding: 0 !important;
    }

    .pt-md-0,
  .py-md-0 {
        padding-top: 0 !important;
    }

    .pr-md-0,
  .px-md-0 {
        padding-right: 0 !important;
    }

    .pb-md-0,
  .py-md-0 {
        padding-bottom: 0 !important;
    }

    .pl-md-0,
  .px-md-0 {
        padding-left: 0 !important;
    }

    .p-md-1 {
        padding: 0.25rem !important;
    }

    .pt-md-1,
  .py-md-1 {
        padding-top: 0.25rem !important;
    }

    .pr-md-1,
  .px-md-1 {
        padding-right: 0.25rem !important;
    }

    .pb-md-1,
  .py-md-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-md-1,
  .px-md-1 {
        padding-left: 0.25rem !important;
    }

    .p-md-2 {
        padding: 0.5rem !important;
    }

    .pt-md-2,
  .py-md-2 {
        padding-top: 0.5rem !important;
    }

    .pr-md-2,
  .px-md-2 {
        padding-right: 0.5rem !important;
    }

    .pb-md-2,
  .py-md-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-md-2,
  .px-md-2 {
        padding-left: 0.5rem !important;
    }

    .p-md-3 {
        padding: 1rem !important;
    }

    .pt-md-3,
  .py-md-3 {
        padding-top: 1rem !important;
    }

    .pr-md-3,
  .px-md-3 {
        padding-right: 1rem !important;
    }

    .pb-md-3,
  .py-md-3 {
        padding-bottom: 1rem !important;
    }

    .pl-md-3,
  .px-md-3 {
        padding-left: 1rem !important;
    }

    .p-md-4 {
        padding: 1.5rem !important;
    }

    .pt-md-4,
  .py-md-4 {
        padding-top: 1.5rem !important;
    }

    .pr-md-4,
  .px-md-4 {
        padding-right: 1.5rem !important;
    }

    .pb-md-4,
  .py-md-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-md-4,
  .px-md-4 {
        padding-left: 1.5rem !important;
    }

    .p-md-5 {
        padding: 3rem !important;
    }

    .pt-md-5,
  .py-md-5 {
        padding-top: 3rem !important;
    }

    .pr-md-5,
  .px-md-5 {
        padding-right: 3rem !important;
    }

    .pb-md-5,
  .py-md-5 {
        padding-bottom: 3rem !important;
    }

    .pl-md-5,
  .px-md-5 {
        padding-left: 3rem !important;
    }

    .m-md-n1 {
        margin: -0.25rem !important;
    }

    .mt-md-n1,
  .my-md-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-md-n1,
  .mx-md-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-md-n1,
  .my-md-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-md-n1,
  .mx-md-n1 {
        margin-left: -0.25rem !important;
    }

    .m-md-n2 {
        margin: -0.5rem !important;
    }

    .mt-md-n2,
  .my-md-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-md-n2,
  .mx-md-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-md-n2,
  .my-md-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-md-n2,
  .mx-md-n2 {
        margin-left: -0.5rem !important;
    }

    .m-md-n3 {
        margin: -1rem !important;
    }

    .mt-md-n3,
  .my-md-n3 {
        margin-top: -1rem !important;
    }

    .mr-md-n3,
  .mx-md-n3 {
        margin-right: -1rem !important;
    }

    .mb-md-n3,
  .my-md-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-md-n3,
  .mx-md-n3 {
        margin-left: -1rem !important;
    }

    .m-md-n4 {
        margin: -1.5rem !important;
    }

    .mt-md-n4,
  .my-md-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-md-n4,
  .mx-md-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-md-n4,
  .my-md-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-md-n4,
  .mx-md-n4 {
        margin-left: -1.5rem !important;
    }

    .m-md-n5 {
        margin: -3rem !important;
    }

    .mt-md-n5,
  .my-md-n5 {
        margin-top: -3rem !important;
    }

    .mr-md-n5,
  .mx-md-n5 {
        margin-right: -3rem !important;
    }

    .mb-md-n5,
  .my-md-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-md-n5,
  .mx-md-n5 {
        margin-left: -3rem !important;
    }

    .m-md-auto {
        margin: auto !important;
    }

    .mt-md-auto,
  .my-md-auto {
        margin-top: auto !important;
    }

    .mr-md-auto,
  .mx-md-auto {
        margin-right: auto !important;
    }

    .mb-md-auto,
  .my-md-auto {
        margin-bottom: auto !important;
    }

    .ml-md-auto,
  .mx-md-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important;
    }

    .mt-lg-0,
  .my-lg-0 {
        margin-top: 0 !important;
    }

    .mr-lg-0,
  .mx-lg-0 {
        margin-right: 0 !important;
    }

    .mb-lg-0,
  .my-lg-0 {
        margin-bottom: 0 !important;
    }

    .ml-lg-0,
  .mx-lg-0 {
        margin-left: 0 !important;
    }

    .m-lg-1 {
        margin: 0.25rem !important;
    }

    .mt-lg-1,
  .my-lg-1 {
        margin-top: 0.25rem !important;
    }

    .mr-lg-1,
  .mx-lg-1 {
        margin-right: 0.25rem !important;
    }

    .mb-lg-1,
  .my-lg-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-lg-1,
  .mx-lg-1 {
        margin-left: 0.25rem !important;
    }

    .m-lg-2 {
        margin: 0.5rem !important;
    }

    .mt-lg-2,
  .my-lg-2 {
        margin-top: 0.5rem !important;
    }

    .mr-lg-2,
  .mx-lg-2 {
        margin-right: 0.5rem !important;
    }

    .mb-lg-2,
  .my-lg-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-lg-2,
  .mx-lg-2 {
        margin-left: 0.5rem !important;
    }

    .m-lg-3 {
        margin: 1rem !important;
    }

    .mt-lg-3,
  .my-lg-3 {
        margin-top: 1rem !important;
    }

    .mr-lg-3,
  .mx-lg-3 {
        margin-right: 1rem !important;
    }

    .mb-lg-3,
  .my-lg-3 {
        margin-bottom: 1rem !important;
    }

    .ml-lg-3,
  .mx-lg-3 {
        margin-left: 1rem !important;
    }

    .m-lg-4 {
        margin: 1.5rem !important;
    }

    .mt-lg-4,
  .my-lg-4 {
        margin-top: 1.5rem !important;
    }

    .mr-lg-4,
  .mx-lg-4 {
        margin-right: 1.5rem !important;
    }

    .mb-lg-4,
  .my-lg-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-lg-4,
  .mx-lg-4 {
        margin-left: 1.5rem !important;
    }

    .m-lg-5 {
        margin: 3rem !important;
    }

    .mt-lg-5,
  .my-lg-5 {
        margin-top: 3rem !important;
    }

    .mr-lg-5,
  .mx-lg-5 {
        margin-right: 3rem !important;
    }

    .mb-lg-5,
  .my-lg-5 {
        margin-bottom: 3rem !important;
    }

    .ml-lg-5,
  .mx-lg-5 {
        margin-left: 3rem !important;
    }

    .p-lg-0 {
        padding: 0 !important;
    }

    .pt-lg-0,
  .py-lg-0 {
        padding-top: 0 !important;
    }

    .pr-lg-0,
  .px-lg-0 {
        padding-right: 0 !important;
    }

    .pb-lg-0,
  .py-lg-0 {
        padding-bottom: 0 !important;
    }

    .pl-lg-0,
  .px-lg-0 {
        padding-left: 0 !important;
    }

    .p-lg-1 {
        padding: 0.25rem !important;
    }

    .pt-lg-1,
  .py-lg-1 {
        padding-top: 0.25rem !important;
    }

    .pr-lg-1,
  .px-lg-1 {
        padding-right: 0.25rem !important;
    }

    .pb-lg-1,
  .py-lg-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-lg-1,
  .px-lg-1 {
        padding-left: 0.25rem !important;
    }

    .p-lg-2 {
        padding: 0.5rem !important;
    }

    .pt-lg-2,
  .py-lg-2 {
        padding-top: 0.5rem !important;
    }

    .pr-lg-2,
  .px-lg-2 {
        padding-right: 0.5rem !important;
    }

    .pb-lg-2,
  .py-lg-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-lg-2,
  .px-lg-2 {
        padding-left: 0.5rem !important;
    }

    .p-lg-3 {
        padding: 1rem !important;
    }

    .pt-lg-3,
  .py-lg-3 {
        padding-top: 1rem !important;
    }

    .pr-lg-3,
  .px-lg-3 {
        padding-right: 1rem !important;
    }

    .pb-lg-3,
  .py-lg-3 {
        padding-bottom: 1rem !important;
    }

    .pl-lg-3,
  .px-lg-3 {
        padding-left: 1rem !important;
    }

    .p-lg-4 {
        padding: 1.5rem !important;
    }

    .pt-lg-4,
  .py-lg-4 {
        padding-top: 1.5rem !important;
    }

    .pr-lg-4,
  .px-lg-4 {
        padding-right: 1.5rem !important;
    }

    .pb-lg-4,
  .py-lg-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-lg-4,
  .px-lg-4 {
        padding-left: 1.5rem !important;
    }

    .p-lg-5 {
        padding: 3rem !important;
    }

    .pt-lg-5,
  .py-lg-5 {
        padding-top: 3rem !important;
    }

    .pr-lg-5,
  .px-lg-5 {
        padding-right: 3rem !important;
    }

    .pb-lg-5,
  .py-lg-5 {
        padding-bottom: 3rem !important;
    }

    .pl-lg-5,
  .px-lg-5 {
        padding-left: 3rem !important;
    }

    .m-lg-n1 {
        margin: -0.25rem !important;
    }

    .mt-lg-n1,
  .my-lg-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-lg-n1,
  .mx-lg-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-lg-n1,
  .my-lg-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-lg-n1,
  .mx-lg-n1 {
        margin-left: -0.25rem !important;
    }

    .m-lg-n2 {
        margin: -0.5rem !important;
    }

    .mt-lg-n2,
  .my-lg-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-lg-n2,
  .mx-lg-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-lg-n2,
  .my-lg-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-lg-n2,
  .mx-lg-n2 {
        margin-left: -0.5rem !important;
    }

    .m-lg-n3 {
        margin: -1rem !important;
    }

    .mt-lg-n3,
  .my-lg-n3 {
        margin-top: -1rem !important;
    }

    .mr-lg-n3,
  .mx-lg-n3 {
        margin-right: -1rem !important;
    }

    .mb-lg-n3,
  .my-lg-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-lg-n3,
  .mx-lg-n3 {
        margin-left: -1rem !important;
    }

    .m-lg-n4 {
        margin: -1.5rem !important;
    }

    .mt-lg-n4,
  .my-lg-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-lg-n4,
  .mx-lg-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-lg-n4,
  .my-lg-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-lg-n4,
  .mx-lg-n4 {
        margin-left: -1.5rem !important;
    }

    .m-lg-n5 {
        margin: -3rem !important;
    }

    .mt-lg-n5,
  .my-lg-n5 {
        margin-top: -3rem !important;
    }

    .mr-lg-n5,
  .mx-lg-n5 {
        margin-right: -3rem !important;
    }

    .mb-lg-n5,
  .my-lg-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-lg-n5,
  .mx-lg-n5 {
        margin-left: -3rem !important;
    }

    .m-lg-auto {
        margin: auto !important;
    }

    .mt-lg-auto,
  .my-lg-auto {
        margin-top: auto !important;
    }

    .mr-lg-auto,
  .mx-lg-auto {
        margin-right: auto !important;
    }

    .mb-lg-auto,
  .my-lg-auto {
        margin-bottom: auto !important;
    }

    .ml-lg-auto,
  .mx-lg-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 1200px) {
    .m-xl-0 {
        margin: 0 !important;
    }

    .mt-xl-0,
  .my-xl-0 {
        margin-top: 0 !important;
    }

    .mr-xl-0,
  .mx-xl-0 {
        margin-right: 0 !important;
    }

    .mb-xl-0,
  .my-xl-0 {
        margin-bottom: 0 !important;
    }

    .ml-xl-0,
  .mx-xl-0 {
        margin-left: 0 !important;
    }

    .m-xl-1 {
        margin: 0.25rem !important;
    }

    .mt-xl-1,
  .my-xl-1 {
        margin-top: 0.25rem !important;
    }

    .mr-xl-1,
  .mx-xl-1 {
        margin-right: 0.25rem !important;
    }

    .mb-xl-1,
  .my-xl-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-xl-1,
  .mx-xl-1 {
        margin-left: 0.25rem !important;
    }

    .m-xl-2 {
        margin: 0.5rem !important;
    }

    .mt-xl-2,
  .my-xl-2 {
        margin-top: 0.5rem !important;
    }

    .mr-xl-2,
  .mx-xl-2 {
        margin-right: 0.5rem !important;
    }

    .mb-xl-2,
  .my-xl-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-xl-2,
  .mx-xl-2 {
        margin-left: 0.5rem !important;
    }

    .m-xl-3 {
        margin: 1rem !important;
    }

    .mt-xl-3,
  .my-xl-3 {
        margin-top: 1rem !important;
    }

    .mr-xl-3,
  .mx-xl-3 {
        margin-right: 1rem !important;
    }

    .mb-xl-3,
  .my-xl-3 {
        margin-bottom: 1rem !important;
    }

    .ml-xl-3,
  .mx-xl-3 {
        margin-left: 1rem !important;
    }

    .m-xl-4 {
        margin: 1.5rem !important;
    }

    .mt-xl-4,
  .my-xl-4 {
        margin-top: 1.5rem !important;
    }

    .mr-xl-4,
  .mx-xl-4 {
        margin-right: 1.5rem !important;
    }

    .mb-xl-4,
  .my-xl-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-xl-4,
  .mx-xl-4 {
        margin-left: 1.5rem !important;
    }

    .m-xl-5 {
        margin: 3rem !important;
    }

    .mt-xl-5,
  .my-xl-5 {
        margin-top: 3rem !important;
    }

    .mr-xl-5,
  .mx-xl-5 {
        margin-right: 3rem !important;
    }

    .mb-xl-5,
  .my-xl-5 {
        margin-bottom: 3rem !important;
    }

    .ml-xl-5,
  .mx-xl-5 {
        margin-left: 3rem !important;
    }

    .p-xl-0 {
        padding: 0 !important;
    }

    .pt-xl-0,
  .py-xl-0 {
        padding-top: 0 !important;
    }

    .pr-xl-0,
  .px-xl-0 {
        padding-right: 0 !important;
    }

    .pb-xl-0,
  .py-xl-0 {
        padding-bottom: 0 !important;
    }

    .pl-xl-0,
  .px-xl-0 {
        padding-left: 0 !important;
    }

    .p-xl-1 {
        padding: 0.25rem !important;
    }

    .pt-xl-1,
  .py-xl-1 {
        padding-top: 0.25rem !important;
    }

    .pr-xl-1,
  .px-xl-1 {
        padding-right: 0.25rem !important;
    }

    .pb-xl-1,
  .py-xl-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-xl-1,
  .px-xl-1 {
        padding-left: 0.25rem !important;
    }

    .p-xl-2 {
        padding: 0.5rem !important;
    }

    .pt-xl-2,
  .py-xl-2 {
        padding-top: 0.5rem !important;
    }

    .pr-xl-2,
  .px-xl-2 {
        padding-right: 0.5rem !important;
    }

    .pb-xl-2,
  .py-xl-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-xl-2,
  .px-xl-2 {
        padding-left: 0.5rem !important;
    }

    .p-xl-3 {
        padding: 1rem !important;
    }

    .pt-xl-3,
  .py-xl-3 {
        padding-top: 1rem !important;
    }

    .pr-xl-3,
  .px-xl-3 {
        padding-right: 1rem !important;
    }

    .pb-xl-3,
  .py-xl-3 {
        padding-bottom: 1rem !important;
    }

    .pl-xl-3,
  .px-xl-3 {
        padding-left: 1rem !important;
    }

    .p-xl-4 {
        padding: 1.5rem !important;
    }

    .pt-xl-4,
  .py-xl-4 {
        padding-top: 1.5rem !important;
    }

    .pr-xl-4,
  .px-xl-4 {
        padding-right: 1.5rem !important;
    }

    .pb-xl-4,
  .py-xl-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-xl-4,
  .px-xl-4 {
        padding-left: 1.5rem !important;
    }

    .p-xl-5 {
        padding: 3rem !important;
    }

    .pt-xl-5,
  .py-xl-5 {
        padding-top: 3rem !important;
    }

    .pr-xl-5,
  .px-xl-5 {
        padding-right: 3rem !important;
    }

    .pb-xl-5,
  .py-xl-5 {
        padding-bottom: 3rem !important;
    }

    .pl-xl-5,
  .px-xl-5 {
        padding-left: 3rem !important;
    }

    .m-xl-n1 {
        margin: -0.25rem !important;
    }

    .mt-xl-n1,
  .my-xl-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-xl-n1,
  .mx-xl-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-xl-n1,
  .my-xl-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-xl-n1,
  .mx-xl-n1 {
        margin-left: -0.25rem !important;
    }

    .m-xl-n2 {
        margin: -0.5rem !important;
    }

    .mt-xl-n2,
  .my-xl-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-xl-n2,
  .mx-xl-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-xl-n2,
  .my-xl-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-xl-n2,
  .mx-xl-n2 {
        margin-left: -0.5rem !important;
    }

    .m-xl-n3 {
        margin: -1rem !important;
    }

    .mt-xl-n3,
  .my-xl-n3 {
        margin-top: -1rem !important;
    }

    .mr-xl-n3,
  .mx-xl-n3 {
        margin-right: -1rem !important;
    }

    .mb-xl-n3,
  .my-xl-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-xl-n3,
  .mx-xl-n3 {
        margin-left: -1rem !important;
    }

    .m-xl-n4 {
        margin: -1.5rem !important;
    }

    .mt-xl-n4,
  .my-xl-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-xl-n4,
  .mx-xl-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-xl-n4,
  .my-xl-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-xl-n4,
  .mx-xl-n4 {
        margin-left: -1.5rem !important;
    }

    .m-xl-n5 {
        margin: -3rem !important;
    }

    .mt-xl-n5,
  .my-xl-n5 {
        margin-top: -3rem !important;
    }

    .mr-xl-n5,
  .mx-xl-n5 {
        margin-right: -3rem !important;
    }

    .mb-xl-n5,
  .my-xl-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-xl-n5,
  .mx-xl-n5 {
        margin-left: -3rem !important;
    }

    .m-xl-auto {
        margin: auto !important;
    }

    .mt-xl-auto,
  .my-xl-auto {
        margin-top: auto !important;
    }

    .mr-xl-auto,
  .mx-xl-auto {
        margin-right: auto !important;
    }

    .mb-xl-auto,
  .my-xl-auto {
        margin-bottom: auto !important;
    }

    .ml-xl-auto,
  .mx-xl-auto {
        margin-left: auto !important;
    }
}

.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
    text-align: justify !important;
}

.text-wrap {
    white-space: normal !important;
}

.text-nowrap {
    white-space: nowrap !important;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.text-left {
    text-align: left !important;
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important;
    }

    .text-sm-right {
        text-align: right !important;
    }

    .text-sm-center {
        text-align: center !important;
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important;
    }

    .text-md-right {
        text-align: right !important;
    }

    .text-md-center {
        text-align: center !important;
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important;
    }

    .text-lg-right {
        text-align: right !important;
    }

    .text-lg-center {
        text-align: center !important;
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important;
    }

    .text-xl-right {
        text-align: right !important;
    }

    .text-xl-center {
        text-align: center !important;
    }
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.font-weight-light {
    font-weight: 300 !important;
}

.font-weight-lighter {
    font-weight: lighter !important;
}

.font-weight-normal {
    font-weight: 400 !important;
}

.font-weight-bold {
    font-weight: 700 !important;
}

.font-weight-bolder {
    font-weight: bolder !important;
}

.font-italic {
    font-style: italic !important;
}

.text-white {
    color: #fff !important;
}

.text-primary {
    color: #1abc9c !important;
}

a.text-primary:hover, a.text-primary:focus {
    color: #117964 !important;
}

.text-secondary {
    color: #6c757d !important;
}

a.text-secondary:hover, a.text-secondary:focus {
    color: #494f54 !important;
}

.text-success {
    color: #2ecc71 !important;
}

a.text-success:hover, a.text-success:focus {
    color: #208e4e !important;
}

.text-info {
    color: #00acc1 !important;
}

a.text-info:hover, a.text-info:focus {
    color: #006875 !important;
}

.text-warning {
    color: #f1c40f !important;
}

a.text-warning:hover, a.text-warning:focus {
    color: #aa8a0a !important;
}

.text-danger {
    color: #e74c3c !important;
}

a.text-danger:hover, a.text-danger:focus {
    color: #bf2718 !important;
}

.text-light {
    color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
    color: #cbd3da !important;
}

.text-dark {
    color: #343a40 !important;
}

a.text-dark:hover, a.text-dark:focus {
    color: #121416 !important;
}

.text-body {
    color: #373a3c !important;
}

.text-muted {
    color: #868e96 !important;
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}

.text-decoration-none {
    text-decoration: none !important;
}

.text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important;
}

.text-reset {
    color: inherit !important;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

@media print {
    *,
  *::before,
  *::after {
        text-shadow: none !important;
        box-shadow: none !important;
    }

    a:not(.btn) {
        text-decoration: underline;
    }

    abbr[title]::after {
        content: " (" attr(title) ")";
    }

    pre {
        white-space: pre-wrap !important;
    }

    pre,
  blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group;
    }

    tr,
  img {
        page-break-inside: avoid;
    }

    p,
  h2,
  h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
  h3 {
        page-break-after: avoid;
    }
  @    page {
        size: a3;
    }

    body {
        min-width: 992px !important;
    }

    .container {
        min-width: 992px !important;
    }

    .navbar {
        display: none;
    }

    .badge {
        border: 1px solid #000;
    }

    .table {
        border-collapse: collapse !important;
    }

    .table td,
    .table th {
        background-color: #fff !important;
    }

    .table-bordered th,
  .table-bordered td {
        border: 1px solid #dee2e6 !important;
    }

    .table-dark {
        color: inherit;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
        border-color: #e3eaef;
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #e3eaef;
    }
}

@font-face {
    font-family: "pct";
  src: url("../fonts/pct.eot");
  src: url("../fonts/pct.eot?#iefix") format("embedded-opentype"), url("../fonts/pct.woff") format("woff"), url("../fonts/pct.ttf") format("truetype"), url("../fonts/pct.svg#pct") format("svg");
  font-weight: normal;
  font-style: normal;
}

[data-icon]:before {
    font-family: "pct" !important;
    content: attr(data-icon);
    font-style: normal !important;
    font-weight: normal !important;
    font-variant: normal !important;
    text-transform: none !important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

[class^="pct-"]:before, [class*=" pct-"]:before {
    font-family: "pct" !important;
    font-style: normal !important;
    font-weight: normal !important;
    font-variant: normal !important;
    text-transform: none !important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.pct-arrow1:before {
    content: "\61";
}

.pct-arrow2:before {
    content: "\62";
}

.pct-arrow3:before {
    content: "\63";
}

.pct-arrow4:before {
    content: "\64";
}

.pct-chat1:before {
    content: "\65";
}

.pct-chat2:before {
    content: "\66";
}

.pct-chat3:before {
    content: "\67";
}

.pct-chat4:before {
    content: "\68";
}

.pct-loader1:before {
    content: "\69";
}

.pct-arrow-sharp1:before {
    content: "\6a";
}

.pct-arrow-sharp2:before {
    content: "\6b";
}

.pct-arrow-sharp3:before {
    content: "\6c";
}

.pct-arrow-sharp4:before {
    content: "\6d";
}

@font-face {
    font-family: "feather";
  src: url("../fonts/feather.eot?t=1501841394106");
  /* IE9*/
  src: url("../fonts/feather.eot?t=1501841394106#iefix") format("embedded-opentype"), url("../fonts/feather.woff?t=1501841394106") format("woff"), url("../fonts/feather.ttf?t=1501841394106") format("truetype"), url("../fonts/feather.svg?t=1501841394106#feather") format("svg");
  /* iOS 4.1- */
}

.feather {
  /* use !important to prevent issues with browser extensions that change fonts */
    font-family: 'feather' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
  /* Better Font Rendering =========== */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.icon-alert-octagon:before {
    content: "\e81b";
}

.icon-alert-circle:before {
    content: "\e81c";
}

.icon-activity:before {
    content: "\e81d";
}

.icon-alert-triangle:before {
    content: "\e81e";
}

.icon-align-center:before {
    content: "\e81f";
}

.icon-airplay:before {
    content: "\e820";
}

.icon-align-justify:before {
    content: "\e821";
}

.icon-align-left:before {
    content: "\e822";
}

.icon-align-right:before {
    content: "\e823";
}

.icon-arrow-down-left:before {
    content: "\e824";
}

.icon-arrow-down-right:before {
    content: "\e825";
}

.icon-anchor:before {
    content: "\e826";
}

.icon-aperture:before {
    content: "\e827";
}

.icon-arrow-left:before {
    content: "\e828";
}

.icon-arrow-right:before {
    content: "\e829";
}

.icon-arrow-down:before {
    content: "\e82a";
}

.icon-arrow-up-left:before {
    content: "\e82b";
}

.icon-arrow-up-right:before {
    content: "\e82c";
}

.icon-arrow-up:before {
    content: "\e82d";
}

.icon-award:before {
    content: "\e82e";
}

.icon-bar-chart:before {
    content: "\e82f";
}

.icon-at-sign:before {
    content: "\e830";
}

.icon-bar-chart-2:before {
    content: "\e831";
}

.icon-battery-charging:before {
    content: "\e832";
}

.icon-bell-off:before {
    content: "\e833";
}

.icon-battery:before {
    content: "\e834";
}

.icon-bluetooth:before {
    content: "\e835";
}

.icon-bell:before {
    content: "\e836";
}

.icon-book:before {
    content: "\e837";
}

.icon-briefcase:before {
    content: "\e838";
}

.icon-camera-off:before {
    content: "\e839";
}

.icon-calendar:before {
    content: "\e83a";
}

.icon-bookmark:before {
    content: "\e83b";
}

.icon-box:before {
    content: "\e83c";
}

.icon-camera:before {
    content: "\e83d";
}

.icon-check-circle:before {
    content: "\e83e";
}

.icon-check:before {
    content: "\e83f";
}

.icon-check-square:before {
    content: "\e840";
}

.icon-cast:before {
    content: "\e841";
}

.icon-chevron-down:before {
    content: "\e842";
}

.icon-chevron-left:before {
    content: "\e843";
}

.icon-chevron-right:before {
    content: "\e844";
}

.icon-chevron-up:before {
    content: "\e845";
}

.icon-chevrons-down:before {
    content: "\e846";
}

.icon-chevrons-right:before {
    content: "\e847";
}

.icon-chevrons-up:before {
    content: "\e848";
}

.icon-chevrons-left:before {
    content: "\e849";
}

.icon-circle:before {
    content: "\e84a";
}

.icon-clipboard:before {
    content: "\e84b";
}

.icon-chrome:before {
    content: "\e84c";
}

.icon-clock:before {
    content: "\e84d";
}

.icon-cloud-lightning:before {
    content: "\e84e";
}

.icon-cloud-drizzle:before {
    content: "\e84f";
}

.icon-cloud-rain:before {
    content: "\e850";
}

.icon-cloud-off:before {
    content: "\e851";
}

.icon-codepen:before {
    content: "\e852";
}

.icon-cloud-snow:before {
    content: "\e853";
}

.icon-compass:before {
    content: "\e854";
}

.icon-copy:before {
    content: "\e855";
}

.icon-corner-down-right:before {
    content: "\e856";
}

.icon-corner-down-left:before {
    content: "\e857";
}

.icon-corner-left-down:before {
    content: "\e858";
}

.icon-corner-left-up:before {
    content: "\e859";
}

.icon-corner-up-left:before {
    content: "\e85a";
}

.icon-corner-up-right:before {
    content: "\e85b";
}

.icon-corner-right-down:before {
    content: "\e85c";
}

.icon-corner-right-up:before {
    content: "\e85d";
}

.icon-cpu:before {
    content: "\e85e";
}

.icon-credit-card:before {
    content: "\e85f";
}

.icon-crosshair:before {
    content: "\e860";
}

.icon-disc:before {
    content: "\e861";
}

.icon-delete:before {
    content: "\e862";
}

.icon-download-cloud:before {
    content: "\e863";
}

.icon-download:before {
    content: "\e864";
}

.icon-droplet:before {
    content: "\e865";
}

.icon-edit-2:before {
    content: "\e866";
}

.icon-edit:before {
    content: "\e867";
}

.icon-edit-1:before {
    content: "\e868";
}

.icon-external-link:before {
    content: "\e869";
}

.icon-eye:before {
    content: "\e86a";
}

.icon-feather:before {
    content: "\e86b";
}

.icon-facebook:before {
    content: "\e86c";
}

.icon-file-minus:before {
    content: "\e86d";
}

.icon-eye-off:before {
    content: "\e86e";
}

.icon-fast-forward:before {
    content: "\e86f";
}

.icon-file-text:before {
    content: "\e870";
}

.icon-film:before {
    content: "\e871";
}

.icon-file:before {
    content: "\e872";
}

.icon-file-plus:before {
    content: "\e873";
}

.icon-folder:before {
    content: "\e874";
}

.icon-filter:before {
    content: "\e875";
}

.icon-flag:before {
    content: "\e876";
}

.icon-globe:before {
    content: "\e877";
}

.icon-grid:before {
    content: "\e878";
}

.icon-heart:before {
    content: "\e879";
}

.icon-home:before {
    content: "\e87a";
}

.icon-github:before {
    content: "\e87b";
}

.icon-image:before {
    content: "\e87c";
}

.icon-inbox:before {
    content: "\e87d";
}

.icon-layers:before {
    content: "\e87e";
}

.icon-info:before {
    content: "\e87f";
}

.icon-instagram:before {
    content: "\e880";
}

.icon-layout:before {
    content: "\e881";
}

.icon-link-2:before {
    content: "\e882";
}

.icon-life-buoy:before {
    content: "\e883";
}

.icon-link:before {
    content: "\e884";
}

.icon-log-in:before {
    content: "\e885";
}

.icon-list:before {
    content: "\e886";
}

.icon-lock:before {
    content: "\e887";
}

.icon-log-out:before {
    content: "\e888";
}

.icon-loader:before {
    content: "\e889";
}

.icon-mail:before {
    content: "\e88a";
}

.icon-maximize-2:before {
    content: "\e88b";
}

.icon-map:before {
    content: "\e88c";
}

.icon-map-pin:before {
    content: "\e88e";
}

.icon-menu:before {
    content: "\e88f";
}

.icon-message-circle:before {
    content: "\e890";
}

.icon-message-square:before {
    content: "\e891";
}

.icon-minimize-2:before {
    content: "\e892";
}

.icon-mic-off:before {
    content: "\e893";
}

.icon-minus-circle:before {
    content: "\e894";
}

.icon-mic:before {
    content: "\e895";
}

.icon-minus-square:before {
    content: "\e896";
}

.icon-minus:before {
    content: "\e897";
}

.icon-moon:before {
    content: "\e898";
}

.icon-monitor:before {
    content: "\e899";
}

.icon-more-vertical:before {
    content: "\e89a";
}

.icon-more-horizontal:before {
    content: "\e89b";
}

.icon-move:before {
    content: "\e89c";
}

.icon-music:before {
    content: "\e89d";
}

.icon-navigation-2:before {
    content: "\e89e";
}

.icon-navigation:before {
    content: "\e89f";
}

.icon-octagon:before {
    content: "\e8a0";
}

.icon-package:before {
    content: "\e8a1";
}

.icon-pause-circle:before {
    content: "\e8a2";
}

.icon-pause:before {
    content: "\e8a3";
}

.icon-percent:before {
    content: "\e8a4";
}

.icon-phone-call:before {
    content: "\e8a5";
}

.icon-phone-forwarded:before {
    content: "\e8a6";
}

.icon-phone-missed:before {
    content: "\e8a7";
}

.icon-phone-off:before {
    content: "\e8a8";
}

.icon-phone-incoming:before {
    content: "\e8a9";
}

.icon-phone:before {
    content: "\e8aa";
}

.icon-phone-outgoing:before {
    content: "\e8ab";
}

.icon-pie-chart:before {
    content: "\e8ac";
}

.icon-play-circle:before {
    content: "\e8ad";
}

.icon-play:before {
    content: "\e8ae";
}

.icon-plus-square:before {
    content: "\e8af";
}

.icon-plus-circle:before {
    content: "\e8b0";
}

.icon-plus:before {
    content: "\e8b1";
}

.icon-pocket:before {
    content: "\e8b2";
}

.icon-printer:before {
    content: "\e8b3";
}

.icon-power:before {
    content: "\e8b4";
}

.icon-radio:before {
    content: "\e8b5";
}

.icon-repeat:before {
    content: "\e8b6";
}

.icon-refresh-ccw:before {
    content: "\e8b7";
}

.icon-rewind:before {
    content: "\e8b8";
}

.icon-rotate-ccw:before {
    content: "\e8b9";
}

.icon-refresh-cw:before {
    content: "\e8ba";
}

.icon-rotate-cw:before {
    content: "\e8bb";
}

.icon-save:before {
    content: "\e8bc";
}

.icon-search:before {
    content: "\e8bd";
}

.icon-server:before {
    content: "\e8be";
}

.icon-scissors:before {
    content: "\e8bf";
}

.icon-share-2:before {
    content: "\e8c0";
}

.icon-share:before {
    content: "\e8c1";
}

.icon-shield:before {
    content: "\e8c2";
}

.icon-settings:before {
    content: "\e8c3";
}

.icon-skip-back:before {
    content: "\e8c4";
}

.icon-shuffle:before {
    content: "\e8c5";
}

.icon-sidebar:before {
    content: "\e8c6";
}

.icon-skip-forward:before {
    content: "\e8c7";
}

.icon-slack:before {
    content: "\e8c8";
}

.icon-slash:before {
    content: "\e8c9";
}

.icon-smartphone:before {
    content: "\e8ca";
}

.icon-square:before {
    content: "\e8cb";
}

.icon-speaker:before {
    content: "\e8cc";
}

.icon-star:before {
    content: "\e8cd";
}

.icon-stop-circle:before {
    content: "\e8ce";
}

.icon-sun:before {
    content: "\e8cf";
}

.icon-sunrise:before {
    content: "\e8d0";
}

.icon-tablet:before {
    content: "\e8d1";
}

.icon-tag:before {
    content: "\e8d2";
}

.icon-sunset:before {
    content: "\e8d3";
}

.icon-target:before {
    content: "\e8d4";
}

.icon-thermometer:before {
    content: "\e8d5";
}

.icon-thumbs-up:before {
    content: "\e8d6";
}

.icon-thumbs-down:before {
    content: "\e8d7";
}

.icon-toggle-left:before {
    content: "\e8d8";
}

.icon-toggle-right:before {
    content: "\e8d9";
}

.icon-trash-2:before {
    content: "\e8da";
}

.icon-trash:before {
    content: "\e8db";
}

.icon-trending-up:before {
    content: "\e8dc";
}

.icon-trending-down:before {
    content: "\e8dd";
}

.icon-triangle:before {
    content: "\e8de";
}

.icon-type:before {
    content: "\e8df";
}

.icon-twitter:before {
    content: "\e8e0";
}

.icon-upload:before {
    content: "\e8e1";
}

.icon-umbrella:before {
    content: "\e8e2";
}

.icon-upload-cloud:before {
    content: "\e8e3";
}

.icon-unlock:before {
    content: "\e8e4";
}

.icon-user-check:before {
    content: "\e8e5";
}

.icon-user-minus:before {
    content: "\e8e6";
}

.icon-user-plus:before {
    content: "\e8e7";
}

.icon-user-x:before {
    content: "\e8e8";
}

.icon-user:before {
    content: "\e8e9";
}

.icon-users:before {
    content: "\e8ea";
}

.icon-video-off:before {
    content: "\e8eb";
}

.icon-video:before {
    content: "\e8ec";
}

.icon-voicemail:before {
    content: "\e8ed";
}

.icon-volume-x:before {
    content: "\e8ee";
}

.icon-volume-2:before {
    content: "\e8ef";
}

.icon-volume-1:before {
    content: "\e8f0";
}

.icon-volume:before {
    content: "\e8f1";
}

.icon-watch:before {
    content: "\e8f2";
}

.icon-wifi:before {
    content: "\e8f3";
}

.icon-x-square:before {
    content: "\e8f4";
}

.icon-wind:before {
    content: "\e8f5";
}

.icon-x:before {
    content: "\e8f6";
}

.icon-x-circle:before {
    content: "\e8f7";
}

.icon-zap:before {
    content: "\e8f8";
}

.icon-zoom-in:before {
    content: "\e8f9";
}

.icon-zoom-out:before {
    content: "\e8fa";
}

.icon-command:before {
    content: "\e8fb";
}

.icon-cloud:before {
    content: "\e8fc";
}

.icon-hash:before {
    content: "\e8fd";
}

.icon-headphones:before {
    content: "\e8fe";
}

.icon-underline:before {
    content: "\e8ff";
}

.icon-italic:before {
    content: "\e900";
}

.icon-bold:before {
    content: "\e901";
}

.icon-crop:before {
    content: "\e902";
}

.icon-help-circle:before {
    content: "\e903";
}

.icon-paperclip:before {
    content: "\e904";
}

.icon-shopping-cart:before {
    content: "\e905";
}

.icon-tv:before {
    content: "\e906";
}

.icon-wifi-off:before {
    content: "\e907";
}

.icon-minimize:before {
    content: "\e88d";
}

.icon-maximize:before {
    content: "\e908";
}

.icon-gitlab:before {
    content: "\e909";
}

.icon-sliders:before {
    content: "\e90a";
}

.icon-star-on:before {
    content: "\e90b";
}

.icon-heart-on:before {
    content: "\e90c";
}

.fa, .fab, .fal, .far, .fas {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
}

.fa-lg {
    font-size: 1.33333em;
    line-height: .75em;
    vertical-align: -.0667em;
}

.fa-xs {
    font-size: .75em;
}

.fa-sm {
    font-size: .875em;
}

.fa-1x {
    font-size: 1em;
}

.fa-2x {
    font-size: 2em;
}

.fa-3x {
    font-size: 3em;
}

.fa-4x {
    font-size: 4em;
}

.fa-5x {
    font-size: 5em;
}

.fa-6x {
    font-size: 6em;
}

.fa-7x {
    font-size: 7em;
}

.fa-8x {
    font-size: 8em;
}

.fa-9x {
    font-size: 9em;
}

.fa-10x {
    font-size: 10em;
}

.fa-fw {
    text-align: center;
    width: 1.25em;
}

.fa-ul {
    list-style-type: none;
    margin-left: 2.5em;
    padding-left: 0;
}

.fa-ul > li {
    position: relative;
}

.fa-li {
    left: -2em;
    position: absolute;
    text-align: center;
    width: 2em;
    line-height: inherit;
}

.fa-border {
    border: .08em solid #eee;
    border-radius: .1em;
    padding: .2em .25em .15em;
}

.fa-pull-left {
    float: left;
}

.fa-pull-right {
    float: right;
}

.fa.fa-pull-left, .fab.fa-pull-left, .fal.fa-pull-left, .far.fa-pull-left, .fas.fa-pull-left {
    margin-right: .3em;
}

.fa.fa-pull-right, .fab.fa-pull-right, .fal.fa-pull-right, .far.fa-pull-right, .fas.fa-pull-right {
    margin-left: .3em;
}

.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear;
}

.fa-pulse {
    -webkit-animation: fa-spin 1s infinite steps(8);
    animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
    0% {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(1turn);
    }
}

@keyframes fa-spin {
    0% {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(1turn);
    }
}

.fa-rotate-90 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
    transform: rotate(90deg);
}

.fa-rotate-180 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
    transform: rotate(180deg);
}

.fa-rotate-270 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
    transform: rotate(270deg);
}

.fa-flip-horizontal {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
    transform: scaleX(-1);
}

.fa-flip-vertical {
    transform: scaleY(-1);
}

.fa-flip-horizontal.fa-flip-vertical, .fa-flip-vertical {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
}

.fa-flip-horizontal.fa-flip-vertical {
    transform: scale(-1);
}

:root .fa-flip-horizontal, :root .fa-flip-vertical, :root .fa-rotate-90, :root .fa-rotate-180, :root .fa-rotate-270 {
    -webkit-filter: none;
    filter: none;
}

.fa-stack {
    display: inline-block;
    height: 2em;
    line-height: 2em;
    position: relative;
    vertical-align: middle;
    width: 2.5em;
}

.fa-stack-1x, .fa-stack-2x {
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%;
}

.fa-stack-1x {
    line-height: inherit;
}

.fa-stack-2x {
    font-size: 2em;
}

.fa-inverse {
    color: #fff;
}

.fa-500px:before {
    content: "\f26e";
}

.fa-accessible-icon:before {
    content: "\f368";
}

.fa-accusoft:before {
    content: "\f369";
}

.fa-acquisitions-incorporated:before {
    content: "\f6af";
}

.fa-ad:before {
    content: "\f641";
}

.fa-address-book:before {
    content: "\f2b9";
}

.fa-address-card:before {
    content: "\f2bb";
}

.fa-adjust:before {
    content: "\f042";
}

.fa-adn:before {
    content: "\f170";
}

.fa-adobe:before {
    content: "\f778";
}

.fa-adversal:before {
    content: "\f36a";
}

.fa-affiliatetheme:before {
    content: "\f36b";
}

.fa-air-freshener:before {
    content: "\f5d0";
}

.fa-algolia:before {
    content: "\f36c";
}

.fa-align-center:before {
    content: "\f037";
}

.fa-align-justify:before {
    content: "\f039";
}

.fa-align-left:before {
    content: "\f036";
}

.fa-align-right:before {
    content: "\f038";
}

.fa-alipay:before {
    content: "\f642";
}

.fa-allergies:before {
    content: "\f461";
}

.fa-amazon:before {
    content: "\f270";
}

.fa-amazon-pay:before {
    content: "\f42c";
}

.fa-ambulance:before {
    content: "\f0f9";
}

.fa-american-sign-language-interpreting:before {
    content: "\f2a3";
}

.fa-amilia:before {
    content: "\f36d";
}

.fa-anchor:before {
    content: "\f13d";
}

.fa-android:before {
    content: "\f17b";
}

.fa-angellist:before {
    content: "\f209";
}

.fa-angle-double-down:before {
    content: "\f103";
}

.fa-angle-double-left:before {
    content: "\f100";
}

.fa-angle-double-right:before {
    content: "\f101";
}

.fa-angle-double-up:before {
    content: "\f102";
}

.fa-angle-down:before {
    content: "\f107";
}

.fa-angle-left:before {
    content: "\f104";
}

.fa-angle-right:before {
    content: "\f105";
}

.fa-angle-up:before {
    content: "\f106";
}

.fa-angry:before {
    content: "\f556";
}

.fa-angrycreative:before {
    content: "\f36e";
}

.fa-angular:before {
    content: "\f420";
}

.fa-ankh:before {
    content: "\f644";
}

.fa-app-store:before {
    content: "\f36f";
}

.fa-app-store-ios:before {
    content: "\f370";
}

.fa-apper:before {
    content: "\f371";
}

.fa-apple:before {
    content: "\f179";
}

.fa-apple-alt:before {
    content: "\f5d1";
}

.fa-apple-pay:before {
    content: "\f415";
}

.fa-archive:before {
    content: "\f187";
}

.fa-archway:before {
    content: "\f557";
}

.fa-arrow-alt-circle-down:before {
    content: "\f358";
}

.fa-arrow-alt-circle-left:before {
    content: "\f359";
}

.fa-arrow-alt-circle-right:before {
    content: "\f35a";
}

.fa-arrow-alt-circle-up:before {
    content: "\f35b";
}

.fa-arrow-circle-down:before {
    content: "\f0ab";
}

.fa-arrow-circle-left:before {
    content: "\f0a8";
}

.fa-arrow-circle-right:before {
    content: "\f0a9";
}

.fa-arrow-circle-up:before {
    content: "\f0aa";
}

.fa-arrow-down:before {
    content: "\f063";
}

.fa-arrow-left:before {
    content: "\f060";
}

.fa-arrow-right:before {
    content: "\f061";
}

.fa-arrow-up:before {
    content: "\f062";
}

.fa-arrows-alt:before {
    content: "\f0b2";
}

.fa-arrows-alt-h:before {
    content: "\f337";
}

.fa-arrows-alt-v:before {
    content: "\f338";
}

.fa-artstation:before {
    content: "\f77a";
}

.fa-assistive-listening-systems:before {
    content: "\f2a2";
}

.fa-asterisk:before {
    content: "\f069";
}

.fa-asymmetrik:before {
    content: "\f372";
}

.fa-at:before {
    content: "\f1fa";
}

.fa-atlas:before {
    content: "\f558";
}

.fa-atlassian:before {
    content: "\f77b";
}

.fa-atom:before {
    content: "\f5d2";
}

.fa-audible:before {
    content: "\f373";
}

.fa-audio-description:before {
    content: "\f29e";
}

.fa-autoprefixer:before {
    content: "\f41c";
}

.fa-avianex:before {
    content: "\f374";
}

.fa-aviato:before {
    content: "\f421";
}

.fa-award:before {
    content: "\f559";
}

.fa-aws:before {
    content: "\f375";
}

.fa-baby:before {
    content: "\f77c";
}

.fa-baby-carriage:before {
    content: "\f77d";
}

.fa-backspace:before {
    content: "\f55a";
}

.fa-backward:before {
    content: "\f04a";
}

.fa-balance-scale:before {
    content: "\f24e";
}

.fa-ban:before {
    content: "\f05e";
}

.fa-band-aid:before {
    content: "\f462";
}

.fa-bandcamp:before {
    content: "\f2d5";
}

.fa-barcode:before {
    content: "\f02a";
}

.fa-bars:before {
    content: "\f0c9";
}

.fa-baseball-ball:before {
    content: "\f433";
}

.fa-basketball-ball:before {
    content: "\f434";
}

.fa-bath:before {
    content: "\f2cd";
}

.fa-battery-empty:before {
    content: "\f244";
}

.fa-battery-full:before {
    content: "\f240";
}

.fa-battery-half:before {
    content: "\f242";
}

.fa-battery-quarter:before {
    content: "\f243";
}

.fa-battery-three-quarters:before {
    content: "\f241";
}

.fa-bed:before {
    content: "\f236";
}

.fa-beer:before {
    content: "\f0fc";
}

.fa-behance:before {
    content: "\f1b4";
}

.fa-behance-square:before {
    content: "\f1b5";
}

.fa-bell:before {
    content: "\f0f3";
}

.fa-bell-slash:before {
    content: "\f1f6";
}

.fa-bezier-curve:before {
    content: "\f55b";
}

.fa-bible:before {
    content: "\f647";
}

.fa-bicycle:before {
    content: "\f206";
}

.fa-bimobject:before {
    content: "\f378";
}

.fa-binoculars:before {
    content: "\f1e5";
}

.fa-biohazard:before {
    content: "\f780";
}

.fa-birthday-cake:before {
    content: "\f1fd";
}

.fa-bitbucket:before {
    content: "\f171";
}

.fa-bitcoin:before {
    content: "\f379";
}

.fa-bity:before {
    content: "\f37a";
}

.fa-black-tie:before {
    content: "\f27e";
}

.fa-blackberry:before {
    content: "\f37b";
}

.fa-blender:before {
    content: "\f517";
}

.fa-blender-phone:before {
    content: "\f6b6";
}

.fa-blind:before {
    content: "\f29d";
}

.fa-blog:before {
    content: "\f781";
}

.fa-blogger:before {
    content: "\f37c";
}

.fa-blogger-b:before {
    content: "\f37d";
}

.fa-bluetooth:before {
    content: "\f293";
}

.fa-bluetooth-b:before {
    content: "\f294";
}

.fa-bold:before {
    content: "\f032";
}

.fa-bolt:before {
    content: "\f0e7";
}

.fa-bomb:before {
    content: "\f1e2";
}

.fa-bone:before {
    content: "\f5d7";
}

.fa-bong:before {
    content: "\f55c";
}

.fa-book:before {
    content: "\f02d";
}

.fa-book-dead:before {
    content: "\f6b7";
}

.fa-book-open:before {
    content: "\f518";
}

.fa-book-reader:before {
    content: "\f5da";
}

.fa-bookmark:before {
    content: "\f02e";
}

.fa-bowling-ball:before {
    content: "\f436";
}

.fa-box:before {
    content: "\f466";
}

.fa-box-open:before {
    content: "\f49e";
}

.fa-boxes:before {
    content: "\f468";
}

.fa-braille:before {
    content: "\f2a1";
}

.fa-brain:before {
    content: "\f5dc";
}

.fa-briefcase:before {
    content: "\f0b1";
}

.fa-briefcase-medical:before {
    content: "\f469";
}

.fa-broadcast-tower:before {
    content: "\f519";
}

.fa-broom:before {
    content: "\f51a";
}

.fa-brush:before {
    content: "\f55d";
}

.fa-btc:before {
    content: "\f15a";
}

.fa-bug:before {
    content: "\f188";
}

.fa-building:before {
    content: "\f1ad";
}

.fa-bullhorn:before {
    content: "\f0a1";
}

.fa-bullseye:before {
    content: "\f140";
}

.fa-burn:before {
    content: "\f46a";
}

.fa-buromobelexperte:before {
    content: "\f37f";
}

.fa-bus:before {
    content: "\f207";
}

.fa-bus-alt:before {
    content: "\f55e";
}

.fa-business-time:before {
    content: "\f64a";
}

.fa-buysellads:before {
    content: "\f20d";
}

.fa-calculator:before {
    content: "\f1ec";
}

.fa-calendar:before {
    content: "\f133";
}

.fa-calendar-alt:before {
    content: "\f073";
}

.fa-calendar-check:before {
    content: "\f274";
}

.fa-calendar-day:before {
    content: "\f783";
}

.fa-calendar-minus:before {
    content: "\f272";
}

.fa-calendar-plus:before {
    content: "\f271";
}

.fa-calendar-times:before {
    content: "\f273";
}

.fa-calendar-week:before {
    content: "\f784";
}

.fa-camera:before {
    content: "\f030";
}

.fa-camera-retro:before {
    content: "\f083";
}

.fa-campground:before {
    content: "\f6bb";
}

.fa-canadian-maple-leaf:before {
    content: "\f785";
}

.fa-candy-cane:before {
    content: "\f786";
}

.fa-cannabis:before {
    content: "\f55f";
}

.fa-capsules:before {
    content: "\f46b";
}

.fa-car:before {
    content: "\f1b9";
}

.fa-car-alt:before {
    content: "\f5de";
}

.fa-car-battery:before {
    content: "\f5df";
}

.fa-car-crash:before {
    content: "\f5e1";
}

.fa-car-side:before {
    content: "\f5e4";
}

.fa-caret-down:before {
    content: "\f0d7";
}

.fa-caret-left:before {
    content: "\f0d9";
}

.fa-caret-right:before {
    content: "\f0da";
}

.fa-caret-square-down:before {
    content: "\f150";
}

.fa-caret-square-left:before {
    content: "\f191";
}

.fa-caret-square-right:before {
    content: "\f152";
}

.fa-caret-square-up:before {
    content: "\f151";
}

.fa-caret-up:before {
    content: "\f0d8";
}

.fa-carrot:before {
    content: "\f787";
}

.fa-cart-arrow-down:before {
    content: "\f218";
}

.fa-cart-plus:before {
    content: "\f217";
}

.fa-cash-register:before {
    content: "\f788";
}

.fa-cat:before {
    content: "\f6be";
}

.fa-cc-amazon-pay:before {
    content: "\f42d";
}

.fa-cc-amex:before {
    content: "\f1f3";
}

.fa-cc-apple-pay:before {
    content: "\f416";
}

.fa-cc-diners-club:before {
    content: "\f24c";
}

.fa-cc-discover:before {
    content: "\f1f2";
}

.fa-cc-jcb:before {
    content: "\f24b";
}

.fa-cc-mastercard:before {
    content: "\f1f1";
}

.fa-cc-paypal:before {
    content: "\f1f4";
}

.fa-cc-stripe:before {
    content: "\f1f5";
}

.fa-cc-visa:before {
    content: "\f1f0";
}

.fa-centercode:before {
    content: "\f380";
}

.fa-centos:before {
    content: "\f789";
}

.fa-certificate:before {
    content: "\f0a3";
}

.fa-chair:before {
    content: "\f6c0";
}

.fa-chalkboard:before {
    content: "\f51b";
}

.fa-chalkboard-teacher:before {
    content: "\f51c";
}

.fa-charging-station:before {
    content: "\f5e7";
}

.fa-chart-area:before {
    content: "\f1fe";
}

.fa-chart-bar:before {
    content: "\f080";
}

.fa-chart-line:before {
    content: "\f201";
}

.fa-chart-pie:before {
    content: "\f200";
}

.fa-check:before {
    content: "\f00c";
}

.fa-check-circle:before {
    content: "\f058";
}

.fa-check-double:before {
    content: "\f560";
}

.fa-check-square:before {
    content: "\f14a";
}

.fa-chess:before {
    content: "\f439";
}

.fa-chess-bishop:before {
    content: "\f43a";
}

.fa-chess-board:before {
    content: "\f43c";
}

.fa-chess-king:before {
    content: "\f43f";
}

.fa-chess-knight:before {
    content: "\f441";
}

.fa-chess-pawn:before {
    content: "\f443";
}

.fa-chess-queen:before {
    content: "\f445";
}

.fa-chess-rook:before {
    content: "\f447";
}

.fa-chevron-circle-down:before {
    content: "\f13a";
}

.fa-chevron-circle-left:before {
    content: "\f137";
}

.fa-chevron-circle-right:before {
    content: "\f138";
}

.fa-chevron-circle-up:before {
    content: "\f139";
}

.fa-chevron-down:before {
    content: "\f078";
}

.fa-chevron-left:before {
    content: "\f053";
}

.fa-chevron-right:before {
    content: "\f054";
}

.fa-chevron-up:before {
    content: "\f077";
}

.fa-child:before {
    content: "\f1ae";
}

.fa-chrome:before {
    content: "\f268";
}

.fa-church:before {
    content: "\f51d";
}

.fa-circle:before {
    content: "\f111";
}

.fa-circle-notch:before {
    content: "\f1ce";
}

.fa-city:before {
    content: "\f64f";
}

.fa-clipboard:before {
    content: "\f328";
}

.fa-clipboard-check:before {
    content: "\f46c";
}

.fa-clipboard-list:before {
    content: "\f46d";
}

.fa-clock:before {
    content: "\f017";
}

.fa-clone:before {
    content: "\f24d";
}

.fa-closed-captioning:before {
    content: "\f20a";
}

.fa-cloud:before {
    content: "\f0c2";
}

.fa-cloud-download-alt:before {
    content: "\f381";
}

.fa-cloud-meatball:before {
    content: "\f73b";
}

.fa-cloud-moon:before {
    content: "\f6c3";
}

.fa-cloud-moon-rain:before {
    content: "\f73c";
}

.fa-cloud-rain:before {
    content: "\f73d";
}

.fa-cloud-showers-heavy:before {
    content: "\f740";
}

.fa-cloud-sun:before {
    content: "\f6c4";
}

.fa-cloud-sun-rain:before {
    content: "\f743";
}

.fa-cloud-upload-alt:before {
    content: "\f382";
}

.fa-cloudscale:before {
    content: "\f383";
}

.fa-cloudsmith:before {
    content: "\f384";
}

.fa-cloudversify:before {
    content: "\f385";
}

.fa-cocktail:before {
    content: "\f561";
}

.fa-code:before {
    content: "\f121";
}

.fa-code-branch:before {
    content: "\f126";
}

.fa-codepen:before {
    content: "\f1cb";
}

.fa-codiepie:before {
    content: "\f284";
}

.fa-coffee:before {
    content: "\f0f4";
}

.fa-cog:before {
    content: "\f013";
}

.fa-cogs:before {
    content: "\f085";
}

.fa-coins:before {
    content: "\f51e";
}

.fa-columns:before {
    content: "\f0db";
}

.fa-comment:before {
    content: "\f075";
}

.fa-comment-alt:before {
    content: "\f27a";
}

.fa-comment-dollar:before {
    content: "\f651";
}

.fa-comment-dots:before {
    content: "\f4ad";
}

.fa-comment-slash:before {
    content: "\f4b3";
}

.fa-comments:before {
    content: "\f086";
}

.fa-comments-dollar:before {
    content: "\f653";
}

.fa-compact-disc:before {
    content: "\f51f";
}

.fa-compass:before {
    content: "\f14e";
}

.fa-compress:before {
    content: "\f066";
}

.fa-compress-arrows-alt:before {
    content: "\f78c";
}

.fa-concierge-bell:before {
    content: "\f562";
}

.fa-confluence:before {
    content: "\f78d";
}

.fa-connectdevelop:before {
    content: "\f20e";
}

.fa-contao:before {
    content: "\f26d";
}

.fa-cookie:before {
    content: "\f563";
}

.fa-cookie-bite:before {
    content: "\f564";
}

.fa-copy:before {
    content: "\f0c5";
}

.fa-copyright:before {
    content: "\f1f9";
}

.fa-couch:before {
    content: "\f4b8";
}

.fa-cpanel:before {
    content: "\f388";
}

.fa-creative-commons:before {
    content: "\f25e";
}

.fa-creative-commons-by:before {
    content: "\f4e7";
}

.fa-creative-commons-nc:before {
    content: "\f4e8";
}

.fa-creative-commons-nc-eu:before {
    content: "\f4e9";
}

.fa-creative-commons-nc-jp:before {
    content: "\f4ea";
}

.fa-creative-commons-nd:before {
    content: "\f4eb";
}

.fa-creative-commons-pd:before {
    content: "\f4ec";
}

.fa-creative-commons-pd-alt:before {
    content: "\f4ed";
}

.fa-creative-commons-remix:before {
    content: "\f4ee";
}

.fa-creative-commons-sa:before {
    content: "\f4ef";
}

.fa-creative-commons-sampling:before {
    content: "\f4f0";
}

.fa-creative-commons-sampling-plus:before {
    content: "\f4f1";
}

.fa-creative-commons-share:before {
    content: "\f4f2";
}

.fa-creative-commons-zero:before {
    content: "\f4f3";
}

.fa-credit-card:before {
    content: "\f09d";
}

.fa-critical-role:before {
    content: "\f6c9";
}

.fa-crop:before {
    content: "\f125";
}

.fa-crop-alt:before {
    content: "\f565";
}

.fa-cross:before {
    content: "\f654";
}

.fa-crosshairs:before {
    content: "\f05b";
}

.fa-crow:before {
    content: "\f520";
}

.fa-crown:before {
    content: "\f521";
}

.fa-css3:before {
    content: "\f13c";
}

.fa-css3-alt:before {
    content: "\f38b";
}

.fa-cube:before {
    content: "\f1b2";
}

.fa-cubes:before {
    content: "\f1b3";
}

.fa-cut:before {
    content: "\f0c4";
}

.fa-cuttlefish:before {
    content: "\f38c";
}

.fa-d-and-d:before {
    content: "\f38d";
}

.fa-d-and-d-beyond:before {
    content: "\f6ca";
}

.fa-dashcube:before {
    content: "\f210";
}

.fa-database:before {
    content: "\f1c0";
}

.fa-deaf:before {
    content: "\f2a4";
}

.fa-delicious:before {
    content: "\f1a5";
}

.fa-democrat:before {
    content: "\f747";
}

.fa-deploydog:before {
    content: "\f38e";
}

.fa-deskpro:before {
    content: "\f38f";
}

.fa-desktop:before {
    content: "\f108";
}

.fa-dev:before {
    content: "\f6cc";
}

.fa-deviantart:before {
    content: "\f1bd";
}

.fa-dharmachakra:before {
    content: "\f655";
}

.fa-dhl:before {
    content: "\f790";
}

.fa-diagnoses:before {
    content: "\f470";
}

.fa-diaspora:before {
    content: "\f791";
}

.fa-dice:before {
    content: "\f522";
}

.fa-dice-d20:before {
    content: "\f6cf";
}

.fa-dice-d6:before {
    content: "\f6d1";
}

.fa-dice-five:before {
    content: "\f523";
}

.fa-dice-four:before {
    content: "\f524";
}

.fa-dice-one:before {
    content: "\f525";
}

.fa-dice-six:before {
    content: "\f526";
}

.fa-dice-three:before {
    content: "\f527";
}

.fa-dice-two:before {
    content: "\f528";
}

.fa-digg:before {
    content: "\f1a6";
}

.fa-digital-ocean:before {
    content: "\f391";
}

.fa-digital-tachograph:before {
    content: "\f566";
}

.fa-directions:before {
    content: "\f5eb";
}

.fa-discord:before {
    content: "\f392";
}

.fa-discourse:before {
    content: "\f393";
}

.fa-divide:before {
    content: "\f529";
}

.fa-dizzy:before {
    content: "\f567";
}

.fa-dna:before {
    content: "\f471";
}

.fa-dochub:before {
    content: "\f394";
}

.fa-docker:before {
    content: "\f395";
}

.fa-dog:before {
    content: "\f6d3";
}

.fa-dollar-sign:before {
    content: "\f155";
}

.fa-dolly:before {
    content: "\f472";
}

.fa-dolly-flatbed:before {
    content: "\f474";
}

.fa-donate:before {
    content: "\f4b9";
}

.fa-door-closed:before {
    content: "\f52a";
}

.fa-door-open:before {
    content: "\f52b";
}

.fa-dot-circle:before {
    content: "\f192";
}

.fa-dove:before {
    content: "\f4ba";
}

.fa-download:before {
    content: "\f019";
}

.fa-draft2digital:before {
    content: "\f396";
}

.fa-drafting-compass:before {
    content: "\f568";
}

.fa-dragon:before {
    content: "\f6d5";
}

.fa-draw-polygon:before {
    content: "\f5ee";
}

.fa-dribbble:before {
    content: "\f17d";
}

.fa-dribbble-square:before {
    content: "\f397";
}

.fa-dropbox:before {
    content: "\f16b";
}

.fa-drum:before {
    content: "\f569";
}

.fa-drum-steelpan:before {
    content: "\f56a";
}

.fa-drumstick-bite:before {
    content: "\f6d7";
}

.fa-drupal:before {
    content: "\f1a9";
}

.fa-dumbbell:before {
    content: "\f44b";
}

.fa-dumpster:before {
    content: "\f793";
}

.fa-dumpster-fire:before {
    content: "\f794";
}

.fa-dungeon:before {
    content: "\f6d9";
}

.fa-dyalog:before {
    content: "\f399";
}

.fa-earlybirds:before {
    content: "\f39a";
}

.fa-ebay:before {
    content: "\f4f4";
}

.fa-edge:before {
    content: "\f282";
}

.fa-edit:before {
    content: "\f044";
}

.fa-eject:before {
    content: "\f052";
}

.fa-elementor:before {
    content: "\f430";
}

.fa-ellipsis-h:before {
    content: "\f141";
}

.fa-ellipsis-v:before {
    content: "\f142";
}

.fa-ello:before {
    content: "\f5f1";
}

.fa-ember:before {
    content: "\f423";
}

.fa-empire:before {
    content: "\f1d1";
}

.fa-envelope:before {
    content: "\f0e0";
}

.fa-envelope-open:before {
    content: "\f2b6";
}

.fa-envelope-open-text:before {
    content: "\f658";
}

.fa-envelope-square:before {
    content: "\f199";
}

.fa-envira:before {
    content: "\f299";
}

.fa-equals:before {
    content: "\f52c";
}

.fa-eraser:before {
    content: "\f12d";
}

.fa-erlang:before {
    content: "\f39d";
}

.fa-ethereum:before {
    content: "\f42e";
}

.fa-ethernet:before {
    content: "\f796";
}

.fa-etsy:before {
    content: "\f2d7";
}

.fa-euro-sign:before {
    content: "\f153";
}

.fa-exchange-alt:before {
    content: "\f362";
}

.fa-exclamation:before {
    content: "\f12a";
}

.fa-exclamation-circle:before {
    content: "\f06a";
}

.fa-exclamation-triangle:before {
    content: "\f071";
}

.fa-expand:before {
    content: "\f065";
}

.fa-expand-arrows-alt:before {
    content: "\f31e";
}

.fa-expeditedssl:before {
    content: "\f23e";
}

.fa-external-link-alt:before {
    content: "\f35d";
}

.fa-external-link-square-alt:before {
    content: "\f360";
}

.fa-eye:before {
    content: "\f06e";
}

.fa-eye-dropper:before {
    content: "\f1fb";
}

.fa-eye-slash:before {
    content: "\f070";
}

.fa-facebook:before {
    content: "\f09a";
}

.fa-facebook-f:before {
    content: "\f39e";
}

.fa-facebook-messenger:before {
    content: "\f39f";
}

.fa-facebook-square:before {
    content: "\f082";
}

.fa-fantasy-flight-games:before {
    content: "\f6dc";
}

.fa-fast-backward:before {
    content: "\f049";
}

.fa-fast-forward:before {
    content: "\f050";
}

.fa-fax:before {
    content: "\f1ac";
}

.fa-feather:before {
    content: "\f52d";
}

.fa-feather-alt:before {
    content: "\f56b";
}

.fa-fedex:before {
    content: "\f797";
}

.fa-fedora:before {
    content: "\f798";
}

.fa-female:before {
    content: "\f182";
}

.fa-fighter-jet:before {
    content: "\f0fb";
}

.fa-figma:before {
    content: "\f799";
}

.fa-file:before {
    content: "\f15b";
}

.fa-file-alt:before {
    content: "\f15c";
}

.fa-file-archive:before {
    content: "\f1c6";
}

.fa-file-audio:before {
    content: "\f1c7";
}

.fa-file-code:before {
    content: "\f1c9";
}

.fa-file-contract:before {
    content: "\f56c";
}

.fa-file-csv:before {
    content: "\f6dd";
}

.fa-file-download:before {
    content: "\f56d";
}

.fa-file-excel:before {
    content: "\f1c3";
}

.fa-file-export:before {
    content: "\f56e";
}

.fa-file-image:before {
    content: "\f1c5";
}

.fa-file-import:before {
    content: "\f56f";
}

.fa-file-invoice:before {
    content: "\f570";
}

.fa-file-invoice-dollar:before {
    content: "\f571";
}

.fa-file-medical:before {
    content: "\f477";
}

.fa-file-medical-alt:before {
    content: "\f478";
}

.fa-file-pdf:before {
    content: "\f1c1";
}

.fa-file-powerpoint:before {
    content: "\f1c4";
}

.fa-file-prescription:before {
    content: "\f572";
}

.fa-file-signature:before {
    content: "\f573";
}

.fa-file-upload:before {
    content: "\f574";
}

.fa-file-video:before {
    content: "\f1c8";
}

.fa-file-word:before {
    content: "\f1c2";
}

.fa-fill:before {
    content: "\f575";
}

.fa-fill-drip:before {
    content: "\f576";
}

.fa-film:before {
    content: "\f008";
}

.fa-filter:before {
    content: "\f0b0";
}

.fa-fingerprint:before {
    content: "\f577";
}

.fa-fire:before {
    content: "\f06d";
}

.fa-fire-alt:before {
    content: "\f7e4";
}

.fa-fire-extinguisher:before {
    content: "\f134";
}

.fa-firefox:before {
    content: "\f269";
}

.fa-first-aid:before {
    content: "\f479";
}

.fa-first-order:before {
    content: "\f2b0";
}

.fa-first-order-alt:before {
    content: "\f50a";
}

.fa-firstdraft:before {
    content: "\f3a1";
}

.fa-fish:before {
    content: "\f578";
}

.fa-fist-raised:before {
    content: "\f6de";
}

.fa-flag:before {
    content: "\f024";
}

.fa-flag-checkered:before {
    content: "\f11e";
}

.fa-flag-usa:before {
    content: "\f74d";
}

.fa-flask:before {
    content: "\f0c3";
}

.fa-flickr:before {
    content: "\f16e";
}

.fa-flipboard:before {
    content: "\f44d";
}

.fa-flushed:before {
    content: "\f579";
}

.fa-fly:before {
    content: "\f417";
}

.fa-folder:before {
    content: "\f07b";
}

.fa-folder-minus:before {
    content: "\f65d";
}

.fa-folder-open:before {
    content: "\f07c";
}

.fa-folder-plus:before {
    content: "\f65e";
}

.fa-font:before {
    content: "\f031";
}

.fa-font-awesome:before {
    content: "\f2b4";
}

.fa-font-awesome-alt:before {
    content: "\f35c";
}

.fa-font-awesome-flag:before {
    content: "\f425";
}

.fa-font-awesome-logo-full:before {
    content: "\f4e6";
}

.fa-fonticons:before {
    content: "\f280";
}

.fa-fonticons-fi:before {
    content: "\f3a2";
}

.fa-football-ball:before {
    content: "\f44e";
}

.fa-fort-awesome:before {
    content: "\f286";
}

.fa-fort-awesome-alt:before {
    content: "\f3a3";
}

.fa-forumbee:before {
    content: "\f211";
}

.fa-forward:before {
    content: "\f04e";
}

.fa-foursquare:before {
    content: "\f180";
}

.fa-free-code-camp:before {
    content: "\f2c5";
}

.fa-freebsd:before {
    content: "\f3a4";
}

.fa-frog:before {
    content: "\f52e";
}

.fa-frown:before {
    content: "\f119";
}

.fa-frown-open:before {
    content: "\f57a";
}

.fa-fulcrum:before {
    content: "\f50b";
}

.fa-funnel-dollar:before {
    content: "\f662";
}

.fa-futbol:before {
    content: "\f1e3";
}

.fa-galactic-republic:before {
    content: "\f50c";
}

.fa-galactic-senate:before {
    content: "\f50d";
}

.fa-gamepad:before {
    content: "\f11b";
}

.fa-gas-pump:before {
    content: "\f52f";
}

.fa-gavel:before {
    content: "\f0e3";
}

.fa-gem:before {
    content: "\f3a5";
}

.fa-genderless:before {
    content: "\f22d";
}

.fa-get-pocket:before {
    content: "\f265";
}

.fa-gg:before {
    content: "\f260";
}

.fa-gg-circle:before {
    content: "\f261";
}

.fa-ghost:before {
    content: "\f6e2";
}

.fa-gift:before {
    content: "\f06b";
}

.fa-gifts:before {
    content: "\f79c";
}

.fa-git:before {
    content: "\f1d3";
}

.fa-git-square:before {
    content: "\f1d2";
}

.fa-github:before {
    content: "\f09b";
}

.fa-github-alt:before {
    content: "\f113";
}

.fa-github-square:before {
    content: "\f092";
}

.fa-gitkraken:before {
    content: "\f3a6";
}

.fa-gitlab:before {
    content: "\f296";
}

.fa-gitter:before {
    content: "\f426";
}

.fa-glass-cheers:before {
    content: "\f79f";
}

.fa-glass-martini:before {
    content: "\f000";
}

.fa-glass-martini-alt:before {
    content: "\f57b";
}

.fa-glass-whiskey:before {
    content: "\f7a0";
}

.fa-glasses:before {
    content: "\f530";
}

.fa-glide:before {
    content: "\f2a5";
}

.fa-glide-g:before {
    content: "\f2a6";
}

.fa-globe:before {
    content: "\f0ac";
}

.fa-globe-africa:before {
    content: "\f57c";
}

.fa-globe-americas:before {
    content: "\f57d";
}

.fa-globe-asia:before {
    content: "\f57e";
}

.fa-globe-europe:before {
    content: "\f7a2";
}

.fa-gofore:before {
    content: "\f3a7";
}

.fa-golf-ball:before {
    content: "\f450";
}

.fa-goodreads:before {
    content: "\f3a8";
}

.fa-goodreads-g:before {
    content: "\f3a9";
}

.fa-google:before {
    content: "\f1a0";
}

.fa-google-drive:before {
    content: "\f3aa";
}

.fa-google-play:before {
    content: "\f3ab";
}

.fa-google-plus:before {
    content: "\f2b3";
}

.fa-google-plus-g:before {
    content: "\f0d5";
}

.fa-google-plus-square:before {
    content: "\f0d4";
}

.fa-google-wallet:before {
    content: "\f1ee";
}

.fa-gopuram:before {
    content: "\f664";
}

.fa-graduation-cap:before {
    content: "\f19d";
}

.fa-gratipay:before {
    content: "\f184";
}

.fa-grav:before {
    content: "\f2d6";
}

.fa-greater-than:before {
    content: "\f531";
}

.fa-greater-than-equal:before {
    content: "\f532";
}

.fa-grimace:before {
    content: "\f57f";
}

.fa-grin:before {
    content: "\f580";
}

.fa-grin-alt:before {
    content: "\f581";
}

.fa-grin-beam:before {
    content: "\f582";
}

.fa-grin-beam-sweat:before {
    content: "\f583";
}

.fa-grin-hearts:before {
    content: "\f584";
}

.fa-grin-squint:before {
    content: "\f585";
}

.fa-grin-squint-tears:before {
    content: "\f586";
}

.fa-grin-stars:before {
    content: "\f587";
}

.fa-grin-tears:before {
    content: "\f588";
}

.fa-grin-tongue:before {
    content: "\f589";
}

.fa-grin-tongue-squint:before {
    content: "\f58a";
}

.fa-grin-tongue-wink:before {
    content: "\f58b";
}

.fa-grin-wink:before {
    content: "\f58c";
}

.fa-grip-horizontal:before {
    content: "\f58d";
}

.fa-grip-lines:before {
    content: "\f7a4";
}

.fa-grip-lines-vertical:before {
    content: "\f7a5";
}

.fa-grip-vertical:before {
    content: "\f58e";
}

.fa-gripfire:before {
    content: "\f3ac";
}

.fa-grunt:before {
    content: "\f3ad";
}

.fa-guitar:before {
    content: "\f7a6";
}

.fa-gulp:before {
    content: "\f3ae";
}

.fa-h-square:before {
    content: "\f0fd";
}

.fa-hacker-news:before {
    content: "\f1d4";
}

.fa-hacker-news-square:before {
    content: "\f3af";
}

.fa-hackerrank:before {
    content: "\f5f7";
}

.fa-hammer:before {
    content: "\f6e3";
}

.fa-hamsa:before {
    content: "\f665";
}

.fa-hand-holding:before {
    content: "\f4bd";
}

.fa-hand-holding-heart:before {
    content: "\f4be";
}

.fa-hand-holding-usd:before {
    content: "\f4c0";
}

.fa-hand-lizard:before {
    content: "\f258";
}

.fa-hand-paper:before {
    content: "\f256";
}

.fa-hand-peace:before {
    content: "\f25b";
}

.fa-hand-point-down:before {
    content: "\f0a7";
}

.fa-hand-point-left:before {
    content: "\f0a5";
}

.fa-hand-point-right:before {
    content: "\f0a4";
}

.fa-hand-point-up:before {
    content: "\f0a6";
}

.fa-hand-pointer:before {
    content: "\f25a";
}

.fa-hand-rock:before {
    content: "\f255";
}

.fa-hand-scissors:before {
    content: "\f257";
}

.fa-hand-spock:before {
    content: "\f259";
}

.fa-hands:before {
    content: "\f4c2";
}

.fa-hands-helping:before {
    content: "\f4c4";
}

.fa-handshake:before {
    content: "\f2b5";
}

.fa-hanukiah:before {
    content: "\f6e6";
}

.fa-hashtag:before {
    content: "\f292";
}

.fa-hat-wizard:before {
    content: "\f6e8";
}

.fa-haykal:before {
    content: "\f666";
}

.fa-hdd:before {
    content: "\f0a0";
}

.fa-heading:before {
    content: "\f1dc";
}

.fa-headphones:before {
    content: "\f025";
}

.fa-headphones-alt:before {
    content: "\f58f";
}

.fa-headset:before {
    content: "\f590";
}

.fa-heart:before {
    content: "\f004";
}

.fa-heart-broken:before {
    content: "\f7a9";
}

.fa-heartbeat:before {
    content: "\f21e";
}

.fa-helicopter:before {
    content: "\f533";
}

.fa-highlighter:before {
    content: "\f591";
}

.fa-hiking:before {
    content: "\f6ec";
}

.fa-hippo:before {
    content: "\f6ed";
}

.fa-hips:before {
    content: "\f452";
}

.fa-hire-a-helper:before {
    content: "\f3b0";
}

.fa-history:before {
    content: "\f1da";
}

.fa-hockey-puck:before {
    content: "\f453";
}

.fa-holly-berry:before {
    content: "\f7aa";
}

.fa-home:before {
    content: "\f015";
}

.fa-hooli:before {
    content: "\f427";
}

.fa-hornbill:before {
    content: "\f592";
}

.fa-horse:before {
    content: "\f6f0";
}

.fa-horse-head:before {
    content: "\f7ab";
}

.fa-hospital:before {
    content: "\f0f8";
}

.fa-hospital-alt:before {
    content: "\f47d";
}

.fa-hospital-symbol:before {
    content: "\f47e";
}

.fa-hot-tub:before {
    content: "\f593";
}

.fa-hotel:before {
    content: "\f594";
}

.fa-hotjar:before {
    content: "\f3b1";
}

.fa-hourglass:before {
    content: "\f254";
}

.fa-hourglass-end:before {
    content: "\f253";
}

.fa-hourglass-half:before {
    content: "\f252";
}

.fa-hourglass-start:before {
    content: "\f251";
}

.fa-house-damage:before {
    content: "\f6f1";
}

.fa-houzz:before {
    content: "\f27c";
}

.fa-hryvnia:before {
    content: "\f6f2";
}

.fa-html5:before {
    content: "\f13b";
}

.fa-hubspot:before {
    content: "\f3b2";
}

.fa-i-cursor:before {
    content: "\f246";
}

.fa-icicles:before {
    content: "\f7ad";
}

.fa-id-badge:before {
    content: "\f2c1";
}

.fa-id-card:before {
    content: "\f2c2";
}

.fa-id-card-alt:before {
    content: "\f47f";
}

.fa-igloo:before {
    content: "\f7ae";
}

.fa-image:before {
    content: "\f03e";
}

.fa-images:before {
    content: "\f302";
}

.fa-imdb:before {
    content: "\f2d8";
}

.fa-inbox:before {
    content: "\f01c";
}

.fa-indent:before {
    content: "\f03c";
}

.fa-industry:before {
    content: "\f275";
}

.fa-infinity:before {
    content: "\f534";
}

.fa-info:before {
    content: "\f129";
}

.fa-info-circle:before {
    content: "\f05a";
}

.fa-instagram:before {
    content: "\f16d";
}

.fa-intercom:before {
    content: "\f7af";
}

.fa-internet-explorer:before {
    content: "\f26b";
}

.fa-invision:before {
    content: "\f7b0";
}

.fa-ioxhost:before {
    content: "\f208";
}

.fa-italic:before {
    content: "\f033";
}

.fa-itunes:before {
    content: "\f3b4";
}

.fa-itunes-note:before {
    content: "\f3b5";
}

.fa-java:before {
    content: "\f4e4";
}

.fa-jedi:before {
    content: "\f669";
}

.fa-jedi-order:before {
    content: "\f50e";
}

.fa-jenkins:before {
    content: "\f3b6";
}

.fa-jira:before {
    content: "\f7b1";
}

.fa-joget:before {
    content: "\f3b7";
}

.fa-joint:before {
    content: "\f595";
}

.fa-joomla:before {
    content: "\f1aa";
}

.fa-journal-whills:before {
    content: "\f66a";
}

.fa-js:before {
    content: "\f3b8";
}

.fa-js-square:before {
    content: "\f3b9";
}

.fa-jsfiddle:before {
    content: "\f1cc";
}

.fa-kaaba:before {
    content: "\f66b";
}

.fa-kaggle:before {
    content: "\f5fa";
}

.fa-key:before {
    content: "\f084";
}

.fa-keybase:before {
    content: "\f4f5";
}

.fa-keyboard:before {
    content: "\f11c";
}

.fa-keycdn:before {
    content: "\f3ba";
}

.fa-khanda:before {
    content: "\f66d";
}

.fa-kickstarter:before {
    content: "\f3bb";
}

.fa-kickstarter-k:before {
    content: "\f3bc";
}

.fa-kiss:before {
    content: "\f596";
}

.fa-kiss-beam:before {
    content: "\f597";
}

.fa-kiss-wink-heart:before {
    content: "\f598";
}

.fa-kiwi-bird:before {
    content: "\f535";
}

.fa-korvue:before {
    content: "\f42f";
}

.fa-landmark:before {
    content: "\f66f";
}

.fa-language:before {
    content: "\f1ab";
}

.fa-laptop:before {
    content: "\f109";
}

.fa-laptop-code:before {
    content: "\f5fc";
}

.fa-laravel:before {
    content: "\f3bd";
}

.fa-lastfm:before {
    content: "\f202";
}

.fa-lastfm-square:before {
    content: "\f203";
}

.fa-laugh:before {
    content: "\f599";
}

.fa-laugh-beam:before {
    content: "\f59a";
}

.fa-laugh-squint:before {
    content: "\f59b";
}

.fa-laugh-wink:before {
    content: "\f59c";
}

.fa-layer-group:before {
    content: "\f5fd";
}

.fa-leaf:before {
    content: "\f06c";
}

.fa-leanpub:before {
    content: "\f212";
}

.fa-lemon:before {
    content: "\f094";
}

.fa-less:before {
    content: "\f41d";
}

.fa-less-than:before {
    content: "\f536";
}

.fa-less-than-equal:before {
    content: "\f537";
}

.fa-level-down-alt:before {
    content: "\f3be";
}

.fa-level-up-alt:before {
    content: "\f3bf";
}

.fa-life-ring:before {
    content: "\f1cd";
}

.fa-lightbulb:before {
    content: "\f0eb";
}

.fa-line:before {
    content: "\f3c0";
}

.fa-link:before {
    content: "\f0c1";
}

.fa-linkedin:before {
    content: "\f08c";
}

.fa-linkedin-in:before {
    content: "\f0e1";
}

.fa-linode:before {
    content: "\f2b8";
}

.fa-linux:before {
    content: "\f17c";
}

.fa-lira-sign:before {
    content: "\f195";
}

.fa-list:before {
    content: "\f03a";
}

.fa-list-alt:before {
    content: "\f022";
}

.fa-list-ol:before {
    content: "\f0cb";
}

.fa-list-ul:before {
    content: "\f0ca";
}

.fa-location-arrow:before {
    content: "\f124";
}

.fa-lock:before {
    content: "\f023";
}

.fa-lock-open:before {
    content: "\f3c1";
}

.fa-long-arrow-alt-down:before {
    content: "\f309";
}

.fa-long-arrow-alt-left:before {
    content: "\f30a";
}

.fa-long-arrow-alt-right:before {
    content: "\f30b";
}

.fa-long-arrow-alt-up:before {
    content: "\f30c";
}

.fa-low-vision:before {
    content: "\f2a8";
}

.fa-luggage-cart:before {
    content: "\f59d";
}

.fa-lyft:before {
    content: "\f3c3";
}

.fa-magento:before {
    content: "\f3c4";
}

.fa-magic:before {
    content: "\f0d0";
}

.fa-magnet:before {
    content: "\f076";
}

.fa-mail-bulk:before {
    content: "\f674";
}

.fa-mailchimp:before {
    content: "\f59e";
}

.fa-male:before {
    content: "\f183";
}

.fa-mandalorian:before {
    content: "\f50f";
}

.fa-map:before {
    content: "\f279";
}

.fa-map-marked:before {
    content: "\f59f";
}

.fa-map-marked-alt:before {
    content: "\f5a0";
}

.fa-map-marker:before {
    content: "\f041";
}

.fa-map-marker-alt:before {
    content: "\f3c5";
}

.fa-map-pin:before {
    content: "\f276";
}

.fa-map-signs:before {
    content: "\f277";
}

.fa-markdown:before {
    content: "\f60f";
}

.fa-marker:before {
    content: "\f5a1";
}

.fa-mars:before {
    content: "\f222";
}

.fa-mars-double:before {
    content: "\f227";
}

.fa-mars-stroke:before {
    content: "\f229";
}

.fa-mars-stroke-h:before {
    content: "\f22b";
}

.fa-mars-stroke-v:before {
    content: "\f22a";
}

.fa-mask:before {
    content: "\f6fa";
}

.fa-mastodon:before {
    content: "\f4f6";
}

.fa-maxcdn:before {
    content: "\f136";
}

.fa-medal:before {
    content: "\f5a2";
}

.fa-medapps:before {
    content: "\f3c6";
}

.fa-medium:before {
    content: "\f23a";
}

.fa-medium-m:before {
    content: "\f3c7";
}

.fa-medkit:before {
    content: "\f0fa";
}

.fa-medrt:before {
    content: "\f3c8";
}

.fa-meetup:before {
    content: "\f2e0";
}

.fa-megaport:before {
    content: "\f5a3";
}

.fa-meh:before {
    content: "\f11a";
}

.fa-meh-blank:before {
    content: "\f5a4";
}

.fa-meh-rolling-eyes:before {
    content: "\f5a5";
}

.fa-memory:before {
    content: "\f538";
}

.fa-mendeley:before {
    content: "\f7b3";
}

.fa-menorah:before {
    content: "\f676";
}

.fa-mercury:before {
    content: "\f223";
}

.fa-meteor:before {
    content: "\f753";
}

.fa-microchip:before {
    content: "\f2db";
}

.fa-microphone:before {
    content: "\f130";
}

.fa-microphone-alt:before {
    content: "\f3c9";
}

.fa-microphone-alt-slash:before {
    content: "\f539";
}

.fa-microphone-slash:before {
    content: "\f131";
}

.fa-microscope:before {
    content: "\f610";
}

.fa-microsoft:before {
    content: "\f3ca";
}

.fa-minus:before {
    content: "\f068";
}

.fa-minus-circle:before {
    content: "\f056";
}

.fa-minus-square:before {
    content: "\f146";
}

.fa-mitten:before {
    content: "\f7b5";
}

.fa-mix:before {
    content: "\f3cb";
}

.fa-mixcloud:before {
    content: "\f289";
}

.fa-mizuni:before {
    content: "\f3cc";
}

.fa-mobile:before {
    content: "\f10b";
}

.fa-mobile-alt:before {
    content: "\f3cd";
}

.fa-modx:before {
    content: "\f285";
}

.fa-monero:before {
    content: "\f3d0";
}

.fa-money-bill:before {
    content: "\f0d6";
}

.fa-money-bill-alt:before {
    content: "\f3d1";
}

.fa-money-bill-wave:before {
    content: "\f53a";
}

.fa-money-bill-wave-alt:before {
    content: "\f53b";
}

.fa-money-check:before {
    content: "\f53c";
}

.fa-money-check-alt:before {
    content: "\f53d";
}

.fa-monument:before {
    content: "\f5a6";
}

.fa-moon:before {
    content: "\f186";
}

.fa-mortar-pestle:before {
    content: "\f5a7";
}

.fa-mosque:before {
    content: "\f678";
}

.fa-motorcycle:before {
    content: "\f21c";
}

.fa-mountain:before {
    content: "\f6fc";
}

.fa-mouse-pointer:before {
    content: "\f245";
}

.fa-mug-hot:before {
    content: "\f7b6";
}

.fa-music:before {
    content: "\f001";
}

.fa-napster:before {
    content: "\f3d2";
}

.fa-neos:before {
    content: "\f612";
}

.fa-network-wired:before {
    content: "\f6ff";
}

.fa-neuter:before {
    content: "\f22c";
}

.fa-newspaper:before {
    content: "\f1ea";
}

.fa-nimblr:before {
    content: "\f5a8";
}

.fa-nintendo-switch:before {
    content: "\f418";
}

.fa-node:before {
    content: "\f419";
}

.fa-node-js:before {
    content: "\f3d3";
}

.fa-not-equal:before {
    content: "\f53e";
}

.fa-notes-medical:before {
    content: "\f481";
}

.fa-npm:before {
    content: "\f3d4";
}

.fa-ns8:before {
    content: "\f3d5";
}

.fa-nutritionix:before {
    content: "\f3d6";
}

.fa-object-group:before {
    content: "\f247";
}

.fa-object-ungroup:before {
    content: "\f248";
}

.fa-odnoklassniki:before {
    content: "\f263";
}

.fa-odnoklassniki-square:before {
    content: "\f264";
}

.fa-oil-can:before {
    content: "\f613";
}

.fa-old-republic:before {
    content: "\f510";
}

.fa-om:before {
    content: "\f679";
}

.fa-opencart:before {
    content: "\f23d";
}

.fa-openid:before {
    content: "\f19b";
}

.fa-opera:before {
    content: "\f26a";
}

.fa-optin-monster:before {
    content: "\f23c";
}

.fa-osi:before {
    content: "\f41a";
}

.fa-otter:before {
    content: "\f700";
}

.fa-outdent:before {
    content: "\f03b";
}

.fa-page4:before {
    content: "\f3d7";
}

.fa-pagelines:before {
    content: "\f18c";
}

.fa-paint-brush:before {
    content: "\f1fc";
}

.fa-paint-roller:before {
    content: "\f5aa";
}

.fa-palette:before {
    content: "\f53f";
}

.fa-palfed:before {
    content: "\f3d8";
}

.fa-pallet:before {
    content: "\f482";
}

.fa-paper-plane:before {
    content: "\f1d8";
}

.fa-paperclip:before {
    content: "\f0c6";
}

.fa-parachute-box:before {
    content: "\f4cd";
}

.fa-paragraph:before {
    content: "\f1dd";
}

.fa-parking:before {
    content: "\f540";
}

.fa-passport:before {
    content: "\f5ab";
}

.fa-pastafarianism:before {
    content: "\f67b";
}

.fa-paste:before {
    content: "\f0ea";
}

.fa-patreon:before {
    content: "\f3d9";
}

.fa-pause:before {
    content: "\f04c";
}

.fa-pause-circle:before {
    content: "\f28b";
}

.fa-paw:before {
    content: "\f1b0";
}

.fa-paypal:before {
    content: "\f1ed";
}

.fa-peace:before {
    content: "\f67c";
}

.fa-pen:before {
    content: "\f304";
}

.fa-pen-alt:before {
    content: "\f305";
}

.fa-pen-fancy:before {
    content: "\f5ac";
}

.fa-pen-nib:before {
    content: "\f5ad";
}

.fa-pen-square:before {
    content: "\f14b";
}

.fa-pencil-alt:before {
    content: "\f303";
}

.fa-pencil-ruler:before {
    content: "\f5ae";
}

.fa-penny-arcade:before {
    content: "\f704";
}

.fa-people-carry:before {
    content: "\f4ce";
}

.fa-percent:before {
    content: "\f295";
}

.fa-percentage:before {
    content: "\f541";
}

.fa-periscope:before {
    content: "\f3da";
}

.fa-person-booth:before {
    content: "\f756";
}

.fa-phabricator:before {
    content: "\f3db";
}

.fa-phoenix-framework:before {
    content: "\f3dc";
}

.fa-phoenix-squadron:before {
    content: "\f511";
}

.fa-phone:before {
    content: "\f095";
}

.fa-phone-slash:before {
    content: "\f3dd";
}

.fa-phone-square:before {
    content: "\f098";
}

.fa-phone-volume:before {
    content: "\f2a0";
}

.fa-php:before {
    content: "\f457";
}

.fa-pied-piper:before {
    content: "\f2ae";
}

.fa-pied-piper-alt:before {
    content: "\f1a8";
}

.fa-pied-piper-hat:before {
    content: "\f4e5";
}

.fa-pied-piper-pp:before {
    content: "\f1a7";
}

.fa-piggy-bank:before {
    content: "\f4d3";
}

.fa-pills:before {
    content: "\f484";
}

.fa-pinterest:before {
    content: "\f0d2";
}

.fa-pinterest-p:before {
    content: "\f231";
}

.fa-pinterest-square:before {
    content: "\f0d3";
}

.fa-place-of-worship:before {
    content: "\f67f";
}

.fa-plane:before {
    content: "\f072";
}

.fa-plane-arrival:before {
    content: "\f5af";
}

.fa-plane-departure:before {
    content: "\f5b0";
}

.fa-play:before {
    content: "\f04b";
}

.fa-play-circle:before {
    content: "\f144";
}

.fa-playstation:before {
    content: "\f3df";
}

.fa-plug:before {
    content: "\f1e6";
}

.fa-plus:before {
    content: "\f067";
}

.fa-plus-circle:before {
    content: "\f055";
}

.fa-plus-square:before {
    content: "\f0fe";
}

.fa-podcast:before {
    content: "\f2ce";
}

.fa-poll:before {
    content: "\f681";
}

.fa-poll-h:before {
    content: "\f682";
}

.fa-poo:before {
    content: "\f2fe";
}

.fa-poo-storm:before {
    content: "\f75a";
}

.fa-poop:before {
    content: "\f619";
}

.fa-portrait:before {
    content: "\f3e0";
}

.fa-pound-sign:before {
    content: "\f154";
}

.fa-power-off:before {
    content: "\f011";
}

.fa-pray:before {
    content: "\f683";
}

.fa-praying-hands:before {
    content: "\f684";
}

.fa-prescription:before {
    content: "\f5b1";
}

.fa-prescription-bottle:before {
    content: "\f485";
}

.fa-prescription-bottle-alt:before {
    content: "\f486";
}

.fa-print:before {
    content: "\f02f";
}

.fa-procedures:before {
    content: "\f487";
}

.fa-product-hunt:before {
    content: "\f288";
}

.fa-project-diagram:before {
    content: "\f542";
}

.fa-pushed:before {
    content: "\f3e1";
}

.fa-puzzle-piece:before {
    content: "\f12e";
}

.fa-python:before {
    content: "\f3e2";
}

.fa-qq:before {
    content: "\f1d6";
}

.fa-qrcode:before {
    content: "\f029";
}

.fa-question:before {
    content: "\f128";
}

.fa-question-circle:before {
    content: "\f059";
}

.fa-quidditch:before {
    content: "\f458";
}

.fa-quinscape:before {
    content: "\f459";
}

.fa-quora:before {
    content: "\f2c4";
}

.fa-quote-left:before {
    content: "\f10d";
}

.fa-quote-right:before {
    content: "\f10e";
}

.fa-quran:before {
    content: "\f687";
}

.fa-r-project:before {
    content: "\f4f7";
}

.fa-radiation:before {
    content: "\f7b9";
}

.fa-radiation-alt:before {
    content: "\f7ba";
}

.fa-rainbow:before {
    content: "\f75b";
}

.fa-random:before {
    content: "\f074";
}

.fa-raspberry-pi:before {
    content: "\f7bb";
}

.fa-ravelry:before {
    content: "\f2d9";
}

.fa-react:before {
    content: "\f41b";
}

.fa-reacteurope:before {
    content: "\f75d";
}

.fa-readme:before {
    content: "\f4d5";
}

.fa-rebel:before {
    content: "\f1d0";
}

.fa-receipt:before {
    content: "\f543";
}

.fa-recycle:before {
    content: "\f1b8";
}

.fa-red-river:before {
    content: "\f3e3";
}

.fa-reddit:before {
    content: "\f1a1";
}

.fa-reddit-alien:before {
    content: "\f281";
}

.fa-reddit-square:before {
    content: "\f1a2";
}

.fa-redhat:before {
    content: "\f7bc";
}

.fa-redo:before {
    content: "\f01e";
}

.fa-redo-alt:before {
    content: "\f2f9";
}

.fa-registered:before {
    content: "\f25d";
}

.fa-renren:before {
    content: "\f18b";
}

.fa-reply:before {
    content: "\f3e5";
}

.fa-reply-all:before {
    content: "\f122";
}

.fa-replyd:before {
    content: "\f3e6";
}

.fa-republican:before {
    content: "\f75e";
}

.fa-researchgate:before {
    content: "\f4f8";
}

.fa-resolving:before {
    content: "\f3e7";
}

.fa-restroom:before {
    content: "\f7bd";
}

.fa-retweet:before {
    content: "\f079";
}

.fa-rev:before {
    content: "\f5b2";
}

.fa-ribbon:before {
    content: "\f4d6";
}

.fa-ring:before {
    content: "\f70b";
}

.fa-road:before {
    content: "\f018";
}

.fa-robot:before {
    content: "\f544";
}

.fa-rocket:before {
    content: "\f135";
}

.fa-rocketchat:before {
    content: "\f3e8";
}

.fa-rockrms:before {
    content: "\f3e9";
}

.fa-route:before {
    content: "\f4d7";
}

.fa-rss:before {
    content: "\f09e";
}

.fa-rss-square:before {
    content: "\f143";
}

.fa-ruble-sign:before {
    content: "\f158";
}

.fa-ruler:before {
    content: "\f545";
}

.fa-ruler-combined:before {
    content: "\f546";
}

.fa-ruler-horizontal:before {
    content: "\f547";
}

.fa-ruler-vertical:before {
    content: "\f548";
}

.fa-running:before {
    content: "\f70c";
}

.fa-rupee-sign:before {
    content: "\f156";
}

.fa-sad-cry:before {
    content: "\f5b3";
}

.fa-sad-tear:before {
    content: "\f5b4";
}

.fa-safari:before {
    content: "\f267";
}

.fa-sass:before {
    content: "\f41e";
}

.fa-satellite:before {
    content: "\f7bf";
}

.fa-satellite-dish:before {
    content: "\f7c0";
}

.fa-save:before {
    content: "\f0c7";
}

.fa-schlix:before {
    content: "\f3ea";
}

.fa-school:before {
    content: "\f549";
}

.fa-screwdriver:before {
    content: "\f54a";
}

.fa-scribd:before {
    content: "\f28a";
}

.fa-scroll:before {
    content: "\f70e";
}

.fa-sd-card:before {
    content: "\f7c2";
}

.fa-search:before {
    content: "\f002";
}

.fa-search-dollar:before {
    content: "\f688";
}

.fa-search-location:before {
    content: "\f689";
}

.fa-search-minus:before {
    content: "\f010";
}

.fa-search-plus:before {
    content: "\f00e";
}

.fa-searchengin:before {
    content: "\f3eb";
}

.fa-seedling:before {
    content: "\f4d8";
}

.fa-sellcast:before {
    content: "\f2da";
}

.fa-sellsy:before {
    content: "\f213";
}

.fa-server:before {
    content: "\f233";
}

.fa-servicestack:before {
    content: "\f3ec";
}

.fa-shapes:before {
    content: "\f61f";
}

.fa-share:before {
    content: "\f064";
}

.fa-share-alt:before {
    content: "\f1e0";
}

.fa-share-alt-square:before {
    content: "\f1e1";
}

.fa-share-square:before {
    content: "\f14d";
}

.fa-shekel-sign:before {
    content: "\f20b";
}

.fa-shield-alt:before {
    content: "\f3ed";
}

.fa-ship:before {
    content: "\f21a";
}

.fa-shipping-fast:before {
    content: "\f48b";
}

.fa-shirtsinbulk:before {
    content: "\f214";
}

.fa-shoe-prints:before {
    content: "\f54b";
}

.fa-shopping-bag:before {
    content: "\f290";
}

.fa-shopping-basket:before {
    content: "\f291";
}

.fa-shopping-cart:before {
    content: "\f07a";
}

.fa-shopware:before {
    content: "\f5b5";
}

.fa-shower:before {
    content: "\f2cc";
}

.fa-shuttle-van:before {
    content: "\f5b6";
}

.fa-sign:before {
    content: "\f4d9";
}

.fa-sign-in-alt:before {
    content: "\f2f6";
}

.fa-sign-language:before {
    content: "\f2a7";
}

.fa-sign-out-alt:before {
    content: "\f2f5";
}

.fa-signal:before {
    content: "\f012";
}

.fa-signature:before {
    content: "\f5b7";
}

.fa-sim-card:before {
    content: "\f7c4";
}

.fa-simplybuilt:before {
    content: "\f215";
}

.fa-sistrix:before {
    content: "\f3ee";
}

.fa-sitemap:before {
    content: "\f0e8";
}

.fa-sith:before {
    content: "\f512";
}

.fa-skating:before {
    content: "\f7c5";
}

.fa-sketch:before {
    content: "\f7c6";
}

.fa-skiing:before {
    content: "\f7c9";
}

.fa-skiing-nordic:before {
    content: "\f7ca";
}

.fa-skull:before {
    content: "\f54c";
}

.fa-skull-crossbones:before {
    content: "\f714";
}

.fa-skyatlas:before {
    content: "\f216";
}

.fa-skype:before {
    content: "\f17e";
}

.fa-slack:before {
    content: "\f198";
}

.fa-slack-hash:before {
    content: "\f3ef";
}

.fa-slash:before {
    content: "\f715";
}

.fa-sleigh:before {
    content: "\f7cc";
}

.fa-sliders-h:before {
    content: "\f1de";
}

.fa-slideshare:before {
    content: "\f1e7";
}

.fa-smile:before {
    content: "\f118";
}

.fa-smile-beam:before {
    content: "\f5b8";
}

.fa-smile-wink:before {
    content: "\f4da";
}

.fa-smog:before {
    content: "\f75f";
}

.fa-smoking:before {
    content: "\f48d";
}

.fa-smoking-ban:before {
    content: "\f54d";
}

.fa-sms:before {
    content: "\f7cd";
}

.fa-snapchat:before {
    content: "\f2ab";
}

.fa-snapchat-ghost:before {
    content: "\f2ac";
}

.fa-snapchat-square:before {
    content: "\f2ad";
}

.fa-snowboarding:before {
    content: "\f7ce";
}

.fa-snowflake:before {
    content: "\f2dc";
}

.fa-snowman:before {
    content: "\f7d0";
}

.fa-snowplow:before {
    content: "\f7d2";
}

.fa-socks:before {
    content: "\f696";
}

.fa-solar-panel:before {
    content: "\f5ba";
}

.fa-sort:before {
    content: "\f0dc";
}

.fa-sort-alpha-down:before {
    content: "\f15d";
}

.fa-sort-alpha-up:before {
    content: "\f15e";
}

.fa-sort-amount-down:before {
    content: "\f160";
}

.fa-sort-amount-up:before {
    content: "\f161";
}

.fa-sort-down:before {
    content: "\f0dd";
}

.fa-sort-numeric-down:before {
    content: "\f162";
}

.fa-sort-numeric-up:before {
    content: "\f163";
}

.fa-sort-up:before {
    content: "\f0de";
}

.fa-soundcloud:before {
    content: "\f1be";
}

.fa-sourcetree:before {
    content: "\f7d3";
}

.fa-spa:before {
    content: "\f5bb";
}

.fa-space-shuttle:before {
    content: "\f197";
}

.fa-speakap:before {
    content: "\f3f3";
}

.fa-spider:before {
    content: "\f717";
}

.fa-spinner:before {
    content: "\f110";
}

.fa-splotch:before {
    content: "\f5bc";
}

.fa-spotify:before {
    content: "\f1bc";
}

.fa-spray-can:before {
    content: "\f5bd";
}

.fa-square:before {
    content: "\f0c8";
}

.fa-square-full:before {
    content: "\f45c";
}

.fa-square-root-alt:before {
    content: "\f698";
}

.fa-squarespace:before {
    content: "\f5be";
}

.fa-stack-exchange:before {
    content: "\f18d";
}

.fa-stack-overflow:before {
    content: "\f16c";
}

.fa-stamp:before {
    content: "\f5bf";
}

.fa-star:before {
    content: "\f005";
}

.fa-star-and-crescent:before {
    content: "\f699";
}

.fa-star-half:before {
    content: "\f089";
}

.fa-star-half-alt:before {
    content: "\f5c0";
}

.fa-star-of-david:before {
    content: "\f69a";
}

.fa-star-of-life:before {
    content: "\f621";
}

.fa-staylinked:before {
    content: "\f3f5";
}

.fa-steam:before {
    content: "\f1b6";
}

.fa-steam-square:before {
    content: "\f1b7";
}

.fa-steam-symbol:before {
    content: "\f3f6";
}

.fa-step-backward:before {
    content: "\f048";
}

.fa-step-forward:before {
    content: "\f051";
}

.fa-stethoscope:before {
    content: "\f0f1";
}

.fa-sticker-mule:before {
    content: "\f3f7";
}

.fa-sticky-note:before {
    content: "\f249";
}

.fa-stop:before {
    content: "\f04d";
}

.fa-stop-circle:before {
    content: "\f28d";
}

.fa-stopwatch:before {
    content: "\f2f2";
}

.fa-store:before {
    content: "\f54e";
}

.fa-store-alt:before {
    content: "\f54f";
}

.fa-strava:before {
    content: "\f428";
}

.fa-stream:before {
    content: "\f550";
}

.fa-street-view:before {
    content: "\f21d";
}

.fa-strikethrough:before {
    content: "\f0cc";
}

.fa-stripe:before {
    content: "\f429";
}

.fa-stripe-s:before {
    content: "\f42a";
}

.fa-stroopwafel:before {
    content: "\f551";
}

.fa-studiovinari:before {
    content: "\f3f8";
}

.fa-stumbleupon:before {
    content: "\f1a4";
}

.fa-stumbleupon-circle:before {
    content: "\f1a3";
}

.fa-subscript:before {
    content: "\f12c";
}

.fa-subway:before {
    content: "\f239";
}

.fa-suitcase:before {
    content: "\f0f2";
}

.fa-suitcase-rolling:before {
    content: "\f5c1";
}

.fa-sun:before {
    content: "\f185";
}

.fa-superpowers:before {
    content: "\f2dd";
}

.fa-superscript:before {
    content: "\f12b";
}

.fa-supple:before {
    content: "\f3f9";
}

.fa-surprise:before {
    content: "\f5c2";
}

.fa-suse:before {
    content: "\f7d6";
}

.fa-swatchbook:before {
    content: "\f5c3";
}

.fa-swimmer:before {
    content: "\f5c4";
}

.fa-swimming-pool:before {
    content: "\f5c5";
}

.fa-synagogue:before {
    content: "\f69b";
}

.fa-sync:before {
    content: "\f021";
}

.fa-sync-alt:before {
    content: "\f2f1";
}

.fa-syringe:before {
    content: "\f48e";
}

.fa-table:before {
    content: "\f0ce";
}

.fa-table-tennis:before {
    content: "\f45d";
}

.fa-tablet:before {
    content: "\f10a";
}

.fa-tablet-alt:before {
    content: "\f3fa";
}

.fa-tablets:before {
    content: "\f490";
}

.fa-tachometer-alt:before {
    content: "\f3fd";
}

.fa-tag:before {
    content: "\f02b";
}

.fa-tags:before {
    content: "\f02c";
}

.fa-tape:before {
    content: "\f4db";
}

.fa-tasks:before {
    content: "\f0ae";
}

.fa-taxi:before {
    content: "\f1ba";
}

.fa-teamspeak:before {
    content: "\f4f9";
}

.fa-teeth:before {
    content: "\f62e";
}

.fa-teeth-open:before {
    content: "\f62f";
}

.fa-telegram:before {
    content: "\f2c6";
}

.fa-telegram-plane:before {
    content: "\f3fe";
}

.fa-temperature-high:before {
    content: "\f769";
}

.fa-temperature-low:before {
    content: "\f76b";
}

.fa-tencent-weibo:before {
    content: "\f1d5";
}

.fa-tenge:before {
    content: "\f7d7";
}

.fa-terminal:before {
    content: "\f120";
}

.fa-text-height:before {
    content: "\f034";
}

.fa-text-width:before {
    content: "\f035";
}

.fa-th:before {
    content: "\f00a";
}

.fa-th-large:before {
    content: "\f009";
}

.fa-th-list:before {
    content: "\f00b";
}

.fa-the-red-yeti:before {
    content: "\f69d";
}

.fa-theater-masks:before {
    content: "\f630";
}

.fa-themeco:before {
    content: "\f5c6";
}

.fa-themeisle:before {
    content: "\f2b2";
}

.fa-thermometer:before {
    content: "\f491";
}

.fa-thermometer-empty:before {
    content: "\f2cb";
}

.fa-thermometer-full:before {
    content: "\f2c7";
}

.fa-thermometer-half:before {
    content: "\f2c9";
}

.fa-thermometer-quarter:before {
    content: "\f2ca";
}

.fa-thermometer-three-quarters:before {
    content: "\f2c8";
}

.fa-think-peaks:before {
    content: "\f731";
}

.fa-thumbs-down:before {
    content: "\f165";
}

.fa-thumbs-up:before {
    content: "\f164";
}

.fa-thumbtack:before {
    content: "\f08d";
}

.fa-ticket-alt:before {
    content: "\f3ff";
}

.fa-times:before {
    content: "\f00d";
}

.fa-times-circle:before {
    content: "\f057";
}

.fa-tint:before {
    content: "\f043";
}

.fa-tint-slash:before {
    content: "\f5c7";
}

.fa-tired:before {
    content: "\f5c8";
}

.fa-toggle-off:before {
    content: "\f204";
}

.fa-toggle-on:before {
    content: "\f205";
}

.fa-toilet:before {
    content: "\f7d8";
}

.fa-toilet-paper:before {
    content: "\f71e";
}

.fa-toolbox:before {
    content: "\f552";
}

.fa-tools:before {
    content: "\f7d9";
}

.fa-tooth:before {
    content: "\f5c9";
}

.fa-torah:before {
    content: "\f6a0";
}

.fa-torii-gate:before {
    content: "\f6a1";
}

.fa-tractor:before {
    content: "\f722";
}

.fa-trade-federation:before {
    content: "\f513";
}

.fa-trademark:before {
    content: "\f25c";
}

.fa-traffic-light:before {
    content: "\f637";
}

.fa-train:before {
    content: "\f238";
}

.fa-tram:before {
    content: "\f7da";
}

.fa-transgender:before {
    content: "\f224";
}

.fa-transgender-alt:before {
    content: "\f225";
}

.fa-trash:before {
    content: "\f1f8";
}

.fa-trash-alt:before {
    content: "\f2ed";
}

.fa-tree:before {
    content: "\f1bb";
}

.fa-trello:before {
    content: "\f181";
}

.fa-tripadvisor:before {
    content: "\f262";
}

.fa-trophy:before {
    content: "\f091";
}

.fa-truck:before {
    content: "\f0d1";
}

.fa-truck-loading:before {
    content: "\f4de";
}

.fa-truck-monster:before {
    content: "\f63b";
}

.fa-truck-moving:before {
    content: "\f4df";
}

.fa-truck-pickup:before {
    content: "\f63c";
}

.fa-tshirt:before {
    content: "\f553";
}

.fa-tty:before {
    content: "\f1e4";
}

.fa-tumblr:before {
    content: "\f173";
}

.fa-tumblr-square:before {
    content: "\f174";
}

.fa-tv:before {
    content: "\f26c";
}

.fa-twitch:before {
    content: "\f1e8";
}

.fa-twitter:before {
    content: "\f099";
}

.fa-twitter-square:before {
    content: "\f081";
}

.fa-typo3:before {
    content: "\f42b";
}

.fa-uber:before {
    content: "\f402";
}

.fa-ubuntu:before {
    content: "\f7df";
}

.fa-uikit:before {
    content: "\f403";
}

.fa-umbrella:before {
    content: "\f0e9";
}

.fa-umbrella-beach:before {
    content: "\f5ca";
}

.fa-underline:before {
    content: "\f0cd";
}

.fa-undo:before {
    content: "\f0e2";
}

.fa-undo-alt:before {
    content: "\f2ea";
}

.fa-uniregistry:before {
    content: "\f404";
}

.fa-universal-access:before {
    content: "\f29a";
}

.fa-university:before {
    content: "\f19c";
}

.fa-unlink:before {
    content: "\f127";
}

.fa-unlock:before {
    content: "\f09c";
}

.fa-unlock-alt:before {
    content: "\f13e";
}

.fa-untappd:before {
    content: "\f405";
}

.fa-upload:before {
    content: "\f093";
}

.fa-ups:before {
    content: "\f7e0";
}

.fa-usb:before {
    content: "\f287";
}

.fa-user:before {
    content: "\f007";
}

.fa-user-alt:before {
    content: "\f406";
}

.fa-user-alt-slash:before {
    content: "\f4fa";
}

.fa-user-astronaut:before {
    content: "\f4fb";
}

.fa-user-check:before {
    content: "\f4fc";
}

.fa-user-circle:before {
    content: "\f2bd";
}

.fa-user-clock:before {
    content: "\f4fd";
}

.fa-user-cog:before {
    content: "\f4fe";
}

.fa-user-edit:before {
    content: "\f4ff";
}

.fa-user-friends:before {
    content: "\f500";
}

.fa-user-graduate:before {
    content: "\f501";
}

.fa-user-injured:before {
    content: "\f728";
}

.fa-user-lock:before {
    content: "\f502";
}

.fa-user-md:before {
    content: "\f0f0";
}

.fa-user-minus:before {
    content: "\f503";
}

.fa-user-ninja:before {
    content: "\f504";
}

.fa-user-plus:before {
    content: "\f234";
}

.fa-user-secret:before {
    content: "\f21b";
}

.fa-user-shield:before {
    content: "\f505";
}

.fa-user-slash:before {
    content: "\f506";
}

.fa-user-tag:before {
    content: "\f507";
}

.fa-user-tie:before {
    content: "\f508";
}

.fa-user-times:before {
    content: "\f235";
}

.fa-users:before {
    content: "\f0c0";
}

.fa-users-cog:before {
    content: "\f509";
}

.fa-usps:before {
    content: "\f7e1";
}

.fa-ussunnah:before {
    content: "\f407";
}

.fa-utensil-spoon:before {
    content: "\f2e5";
}

.fa-utensils:before {
    content: "\f2e7";
}

.fa-vaadin:before {
    content: "\f408";
}

.fa-vector-square:before {
    content: "\f5cb";
}

.fa-venus:before {
    content: "\f221";
}

.fa-venus-double:before {
    content: "\f226";
}

.fa-venus-mars:before {
    content: "\f228";
}

.fa-viacoin:before {
    content: "\f237";
}

.fa-viadeo:before {
    content: "\f2a9";
}

.fa-viadeo-square:before {
    content: "\f2aa";
}

.fa-vial:before {
    content: "\f492";
}

.fa-vials:before {
    content: "\f493";
}

.fa-viber:before {
    content: "\f409";
}

.fa-video:before {
    content: "\f03d";
}

.fa-video-slash:before {
    content: "\f4e2";
}

.fa-vihara:before {
    content: "\f6a7";
}

.fa-vimeo:before {
    content: "\f40a";
}

.fa-vimeo-square:before {
    content: "\f194";
}

.fa-vimeo-v:before {
    content: "\f27d";
}

.fa-vine:before {
    content: "\f1ca";
}

.fa-vk:before {
    content: "\f189";
}

.fa-vnv:before {
    content: "\f40b";
}

.fa-volleyball-ball:before {
    content: "\f45f";
}

.fa-volume-down:before {
    content: "\f027";
}

.fa-volume-mute:before {
    content: "\f6a9";
}

.fa-volume-off:before {
    content: "\f026";
}

.fa-volume-up:before {
    content: "\f028";
}

.fa-vote-yea:before {
    content: "\f772";
}

.fa-vr-cardboard:before {
    content: "\f729";
}

.fa-vuejs:before {
    content: "\f41f";
}

.fa-walking:before {
    content: "\f554";
}

.fa-wallet:before {
    content: "\f555";
}

.fa-warehouse:before {
    content: "\f494";
}

.fa-water:before {
    content: "\f773";
}

.fa-weebly:before {
    content: "\f5cc";
}

.fa-weibo:before {
    content: "\f18a";
}

.fa-weight:before {
    content: "\f496";
}

.fa-weight-hanging:before {
    content: "\f5cd";
}

.fa-weixin:before {
    content: "\f1d7";
}

.fa-whatsapp:before {
    content: "\f232";
}

.fa-whatsapp-square:before {
    content: "\f40c";
}

.fa-wheelchair:before {
    content: "\f193";
}

.fa-whmcs:before {
    content: "\f40d";
}

.fa-wifi:before {
    content: "\f1eb";
}

.fa-wikipedia-w:before {
    content: "\f266";
}

.fa-wind:before {
    content: "\f72e";
}

.fa-window-close:before {
    content: "\f410";
}

.fa-window-maximize:before {
    content: "\f2d0";
}

.fa-window-minimize:before {
    content: "\f2d1";
}

.fa-window-restore:before {
    content: "\f2d2";
}

.fa-windows:before {
    content: "\f17a";
}

.fa-wine-bottle:before {
    content: "\f72f";
}

.fa-wine-glass:before {
    content: "\f4e3";
}

.fa-wine-glass-alt:before {
    content: "\f5ce";
}

.fa-wix:before {
    content: "\f5cf";
}

.fa-wizards-of-the-coast:before {
    content: "\f730";
}

.fa-wolf-pack-battalion:before {
    content: "\f514";
}

.fa-won-sign:before {
    content: "\f159";
}

.fa-wordpress:before {
    content: "\f19a";
}

.fa-wordpress-simple:before {
    content: "\f411";
}

.fa-wpbeginner:before {
    content: "\f297";
}

.fa-wpexplorer:before {
    content: "\f2de";
}

.fa-wpforms:before {
    content: "\f298";
}

.fa-wpressr:before {
    content: "\f3e4";
}

.fa-wrench:before {
    content: "\f0ad";
}

.fa-x-ray:before {
    content: "\f497";
}

.fa-xbox:before {
    content: "\f412";
}

.fa-xing:before {
    content: "\f168";
}

.fa-xing-square:before {
    content: "\f169";
}

.fa-y-combinator:before {
    content: "\f23b";
}

.fa-yahoo:before {
    content: "\f19e";
}

.fa-yandex:before {
    content: "\f413";
}

.fa-yandex-international:before {
    content: "\f414";
}

.fa-yarn:before {
    content: "\f7e3";
}

.fa-yelp:before {
    content: "\f1e9";
}

.fa-yen-sign:before {
    content: "\f157";
}

.fa-yin-yang:before {
    content: "\f6ad";
}

.fa-yoast:before {
    content: "\f2b1";
}

.fa-youtube:before {
    content: "\f167";
}

.fa-youtube-square:before {
    content: "\f431";
}

.fa-zhihu:before {
    content: "\f63f";
}

.sr-only {
    border: 0;
    clip: rect(0, 0, 0, 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

@font-face {
    font-family: "Font Awesome 5 Brands";
  font-style: normal;
  font-weight: normal;
  src: url(../fonts/fa-brands-400.eot);
  src: url(../fonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(../fonts/fa-brands-400.woff2) format("woff2"), url(../fonts/fa-brands-400.woff) format("woff"), url(../fonts/fa-brands-400.ttf) format("truetype"), url(../fonts/fa-brands-400.svg#fontawesome) format("svg");
}

.fab {
    font-family: "Font Awesome 5 Brands";
}

@font-face {
    font-family: "Font Awesome 5 Free";
  font-style: normal;
  font-weight: 400;
  src: url(../fonts/fa-regular-400.eot);
  src: url(../fonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(../fonts/fa-regular-400.woff2) format("woff2"), url(../fonts/fa-regular-400.woff) format("woff"), url(../fonts/fa-regular-400.ttf) format("truetype"), url(../fonts/fa-regular-400.svg#fontawesome) format("svg");
}

.far {
    font-weight: 400;
}

@font-face {
    font-family: "Font Awesome 5 Free";
  font-style: normal;
  font-weight: 900;
  src: url(../fonts/fa-solid-900.eot);
  src: url(../fonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(../fonts/fa-solid-900.woff2) format("woff2"), url(../fonts/fa-solid-900.woff) format("woff"), url(../fonts/fa-solid-900.ttf) format("truetype"), url(../fonts/fa-solid-900.svg#fontawesome) format("svg");
}

.fa, .far, .fas {
    font-family: "Font Awesome 5 Free";
}

.fa, .fas {
    font-weight: 900;
}

/*
    Flaticon icon font: Flaticon
    Creation date: 11/04/2019 05:01
    */
@font-face {
    font-family: "Flaticon";
  src: url("../fonts/Flaticon.eot");
  src: url("../fonts/Flaticon.eot?#iefix") format("embedded-opentype"), url("../fonts/Flaticon.woff2") format("woff2"), url("../fonts/Flaticon.woff") format("woff"), url("../fonts/Flaticon.ttf") format("truetype"), url("../fonts/Flaticon.svg#Flaticon") format("svg");
  font-weight: normal;
  font-style: normal;
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  @    font-face {
        font-family: "Flaticon";
        src: url("../fonts/Flaticon.svg#Flaticon") format("svg");
    }
}

.fi:before {
    display: inline-block;
    font-family: "Flaticon";
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    line-height: 1;
    text-decoration: inherit;
    text-rendering: optimizeLegibility;
    text-transform: none;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
}

.flaticon-shield:before {
    content: "\f100";
}

.flaticon-layout:before {
    content: "\f101";
}

.flaticon-layers:before {
    content: "\f102";
}

.flaticon-cube:before {
    content: "\f103";
}

.flaticon-compass:before {
    content: "\f104";
}

.flaticon-thunderbolt:before {
    content: "\f105";
}

.flaticon-gift:before {
    content: "\f106";
}

.flaticon-shapes-and-symbols:before {
    content: "\f107";
}

.flaticon-feather:before {
    content: "\f108";
}

.flaticon-menu:before {
    content: "\f109";
}

.flaticon-abc:before {
    content: "\f10a";
}

.flaticon-alarm:before {
    content: "\f10b";
}

.flaticon-locker:before {
    content: "\f10c";
}

.flaticon-menu-1:before {
    content: "\f10d";
}

.flaticon-crop:before {
    content: "\f10e";
}

.flaticon-mail:before {
    content: "\f10f";
}

.flaticon-diamond:before {
    content: "\f110";
}

.flaticon-edit:before {
    content: "\f111";
}

.flaticon-gear:before {
    content: "\f112";
}

.flaticon-video:before {
    content: "\f113";
}

.flaticon-clipboard:before {
    content: "\f114";
}

.flaticon-search:before {
    content: "\f115";
}

.flaticon-data-storage:before {
    content: "\f116";
}

.flaticon-table:before {
    content: "\f117";
}

.flaticon-pie-chart:before {
    content: "\f118";
}

.flaticon-map:before {
    content: "\f119";
}

.flaticon-calendar:before {
    content: "\f11a";
}

.flaticon-mixer:before {
    content: "\f11b";
}

.flaticon-chat:before {
    content: "\f11c";
}

.flaticon-lock:before {
    content: "\f11d";
}

.flaticon-photo:before {
    content: "\f11e";
}

.flaticon-start-up:before {
    content: "\f11f";
}

.flaticon-test:before {
    content: "\f120";
}

.flaticon-study:before {
    content: "\f121";
}

.flaticon-information:before {
    content: "\f122";
}

.flaticon-support:before {
    content: "\f123";
}

.flaticon-help:before {
    content: "\f124";
}

.flaticon-business-and-finance:before {
    content: "\f125";
}

.flaticon-cloud:before {
    content: "\f126";
}

.flaticon-grid:before {
    content: "\f127";
}

.flaticon-text:before {
    content: "\f128";
}

.flaticon-draft:before {
    content: "\f129";
}

.flaticon-writing:before {
    content: "\f12a";
}

.flaticon-flag:before {
    content: "\f12b";
}

.flaticon-waiting:before {
    content: "\f12c";
}

.flaticon-questions:before {
    content: "\f12d";
}

/**  =====================
      Custom css start
==========================  **/
/* ==========  card css start  =========== */
.anim-rotate {
    -webkit-animation: anim-rotate 1s linear infinite;
    animation: anim-rotate 1s linear infinite;
}

@-webkit-keyframes anim-rotate {
    100% {
        transform: rotate(360deg);
    }
}

@keyframes anim-rotate {
    100% {
        transform: rotate(360deg);
    }
}

.anim-close-card {
    -webkit-animation: anim-close-card 1.4s linear;
    animation: anim-close-card 1.4s linear;
}

@-webkit-keyframes anim-close-card {
    100% {
        opacity: 0.3;
        transform: scale3d(0.3, 0.3, 0.3);
    }
}

@keyframes anim-close-card {
    100% {
        opacity: 0.3;
        transform: scale3d(0.3, 0.3, 0.3);
    }
}

.card {
    box-shadow: 0 2px 1px rgba(0, 0, 0, 0.05);
    margin-bottom: 22px;
    transition: box-shadow 0.2s ease-in-out;
    border-top: 3px solid #8CDDCD;
}

.card.borderless {
    border-top: none;
}

.card .card-header {
    border-bottom: 1px solid #e2e5e8;
    position: relative;
}

.card .card-header h5 {
    margin-bottom: 0;
    color: #37474f;
    font-size: 0.9375rem;
    font-weight: 600;
    display: inline-block;
    margin-right: 10px;
    line-height: 1.1;
    position: relative;
}

.card .card-header .card-header-right {
    right: 10px;
    top: 10px;
    display: inline-block;
    float: right;
    padding: 0;
    position: absolute;
}

@media only screen and (max-width: 575px) {
    .card .card-header .card-header-right {
        display: none;
    }
}

.card .card-header .card-header-right .dropdown-menu {
    margin-top: 0;
}

.card .card-header .card-header-right .dropdown-menu li {
    cursor: pointer;
}

.card .card-header .card-header-right .dropdown-menu li a {
    font-size: 14px;
    text-transform: capitalize;
}

.card .card-header .card-header-right .btn.dropdown-toggle {
    border: none;
    background: transparent;
    box-shadow: none;
    color: #888;
}

.card .card-header .card-header-right .btn.dropdown-toggle i {
    margin-right: 0;
}

.card .card-header .card-header-right .btn.dropdown-toggle:after {
    display: none;
}

.card .card-header .card-header-right .btn.dropdown-toggle:focus {
    box-shadow: none;
    outline: none;
}

.card .card-header .card-header-right .btn.dropdown-toggle {
    border: none;
    background: transparent;
    box-shadow: none;
    padding: 0;
    width: 20px;
    height: 20px;
    right: 8px;
    top: 8px;
}

.card .card-header .card-header-right .btn.dropdown-toggle.mobile-menu span {
    background-color: #888;
    height: 2px;
    border-radius: 5px;
}

.card .card-header .card-header-right .btn.dropdown-toggle.mobile-menu span:after, .card .card-header .card-header-right .btn.dropdown-toggle.mobile-menu span:before {
    border-radius: 5px;
    height: 2px;
    background-color: #888;
}

.card .card-header .card-header-right .nav-pills {
    padding: 0;
    box-shadow: none;
    background: transparent;
}

.card .card-footer {
    border-top: 1px solid #e2e5e8;
    padding: 8px 20px;
}

.card .card-footer:not([class*="bg-"]) {
    background: transparent;
}

.card .card-block,
  .card .card-body {
    padding: 20px;
}

.ctm-tablebody {
    padding: 20px 20px 40px 20px !important;
}
.footer p{
    color: #fff;
    position: fixed !important;
    bottom: 0 !important;
    height: 47px !important;
    padding: 12px 13px;
    background-color: #3e5871;
    width: 235px !important;
    margin-bottom: 0px !important;
}
.card.card-load {
    position: relative;
    overflow: hidden;
}

.card.card-load .card-loader {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.7);
    z-index: 999;
}

.card.card-load .card-loader i {
    margin: 0 auto;
    color: #1abc9c;
    font-size: 24px;
    align-items: center;
    display: flex;
}

.card.full-card {
    z-index: 99999;
    border-radius: 0;
}

.card[class*="bg-"] .card-header {
    border-bottom-color: rgba(255, 255, 255, 0.25);
}

/**  =====================
      button css start
==========================  **/
.btn-page .btn {
    margin-right: 5px;
    margin-bottom: 5px;
}

.btn-page .btn-group .btn,
.btn-page .btn-group-vertical .btn {
    margin-right: 0;
    margin-bottom: 0;
}

.btn.btn-icon {
    width: 45px;
    height: 45px;
    padding: 0;
    border-radius: 50%;
    font-size: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

/**  =====================
      Radio & Checked css start
==========================  **/
.custom-checkbox .custom-control-label:before {
    top: 0;
    width: 1.2rem;
    height: 1.2rem;
    border-radius: 0.125rem;
}

.custom-checkbox .custom-control-label:after {
    content: "";
    display: block;
    width: 6px;
    height: 12px;
    opacity: 0.9;
    background-image: none;
    border-right: 2px solid #fff;
    border-top: 2px solid #fff;
    position: absolute;
    left: -21px;
    top: 10px;
    transform: scaleX(-1) rotate(135deg);
    transform-origin: left top;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label:before {
    -webkit-animation: custripple 0.3s linear forwards;
    animation: custripple 0.3s linear forwards;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: none;
    -webkit-animation: check linear 0.5s;
    animation: check linear 0.5s;
    opacity: 1;
}

.custom-radio .custom-control-label:after, .custom-radio .custom-control-label:before {
    top: 2px;
    width: 1.2rem;
    height: 1.2rem;
}

.custom-radio .custom-control-label:after {
    transform: scale(0);
    opacity: 0;
    background: #fff;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
    -webkit-animation: custripple 0.3s linear forwards;
    animation: custripple 0.3s linear forwards;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: none;
    opacity: 1;
    transform: scale(0.4);
}

.custom-switch .custom-control-label:before {
    left: -2.25rem;
    top: 0.35rem;
    width: 1.75rem;
    height: 0.8rem;
    pointer-events: all;
    border-radius: 0.5rem;
    background: gainsboro;
    border: none;
    box-shadow: none !important;
}

.custom-switch .custom-control-label:after {
    top: 3px;
    left: -37px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::before {
    background: #9ae2d3;
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    -webkit-animation: custripple 0.3s linear forwards;
    animation: custripple 0.3s linear forwards;
    background: #1abc9c;
}

@-webkit-keyframes check {
    0% {
        height: 0;
        width: 0;
    }

    25% {
        height: 0;
        width: 6px;
    }

    50% {
        height: 12px;
        width: 6px;
    }
}

@keyframes check {
    0% {
        height: 0;
        width: 0;
    }

    25% {
        height: 0;
        width: 6px;
    }

    50% {
        height: 12px;
        width: 6px;
    }
}

@-webkit-keyframes custripple {
    0% {
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
    }

    50% {
        box-shadow: 0 0 0 12px rgba(0, 0, 0, 0.08);
    }

    100% {
        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
    }
}

@keyframes custripple {
    0% {
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
    }

    50% {
        box-shadow: 0 0 0 12px rgba(0, 0, 0, 0.08);
    }

    100% {
        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
    }
}

/**====== Radio & Checked css end ======**/
/**  =====================
      Switches css start
==========================  **/
.switch input[type=checkbox] {
    opacity: 0;
    position: absolute;
}

.switch input[type=checkbox] + .cr {
    position: relative;
    display: inline-block;
    transition: 0.4s ease;
    height: 20px;
    width: 35px;
    border: 1px solid #e9eaec;
    border-radius: 60px;
    cursor: pointer;
    z-index: 0;
    top: 12px;
}

.switch input[type=checkbox] + .cr:after, .switch input[type=checkbox] + .cr:before {
    content: "";
    position: absolute;
    display: block;
    top: 0;
    left: 0;
}

.switch input[type=checkbox] + .cr:before {
    transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
    height: 20px;
    width: 35px;
    border-radius: 30px;
}

.switch input[type=checkbox] + .cr:after {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 4px 0 0 rgba(0, 0, 0, 0.04), 0 4px 9px rgba(0, 0, 0, 0.13), 0 3px 3px rgba(0, 0, 0, 0.05);
    transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
    background: #f7f7f7;
    height: 19px;
    width: 19px;
    border-radius: 60px;
}

.switch input[type=checkbox]:checked + .cr:before {
    background: #1abc9c;
    transition: width 0.2s cubic-bezier(0, 0, 0, 0.1);
}

.switch input[type=checkbox]:checked + .cr:after {
    left: 16px;
}

.switch input[type=checkbox]:disabled + label {
    opacity: 0.5;
    -webkit-filter: grayscale(0.4);
    filter: grayscale(0.4);
    cursor: not-allowed;
}

.switch.switch-primary input[type=checkbox]:checked + .cr:before {
    background: #1abc9c;
}

.switch.switch-danger input[type=checkbox]:checked + .cr:before {
    background: #e74c3c;
}

.switch.switch-success input[type=checkbox]:checked + .cr:before {
    background: #2ecc71;
}

.switch.switch-warning input[type=checkbox]:checked + .cr:before {
    background: #f1c40f;
}

.switch.switch-info input[type=checkbox]:checked + .cr:before {
    background: #3498db;
}

.switch.switch-purple input[type=checkbox]:checked + .cr:before {
    background: #536dfe;
}

/**====== Switches css end ======**/
/**  =====================
      Badges css start
==========================  **/
.badge {
    font-size: 80%;
    padding: 0.35em 0.6em;
    font-weight: 600;
}

.badge-light-primary {
    background: rgba(26, 188, 156, 0.2);
    border-color: #bfece3;
    color: #1abc9c;
}

a.badge-light-primary.active, a.badge-light-primary:active, a.badge-light-primary:focus, a.badge-light-primary:hover {
    background: #1abc9c;
    border-color: #1abc9c;
    color: #d1f2eb;
}

.badge-light-secondary {
    background: rgba(108, 117, 125, 0.2);
    border-color: #d6d8db;
    color: #6c757d;
}

a.badge-light-secondary.active, a.badge-light-secondary:active, a.badge-light-secondary:focus, a.badge-light-secondary:hover {
    background: #6c757d;
    border-color: #6c757d;
    color: #e2e3e5;
}

.badge-light-success {
    background: rgba(46, 204, 113, 0.2);
    border-color: #c4f1d7;
    color: #2ecc71;
}

a.badge-light-success.active, a.badge-light-success:active, a.badge-light-success:focus, a.badge-light-success:hover {
    background: #2ecc71;
    border-color: #2ecc71;
    color: #d5f5e3;
}

.badge-light-info {
    background: rgba(0, 172, 193, 0.2);
    border-color: #b8e8ee;
    color: #00acc1;
}

a.badge-light-info.active, a.badge-light-info:active, a.badge-light-info:focus, a.badge-light-info:hover {
    background: #00acc1;
    border-color: #00acc1;
    color: #cceef3;
}

.badge-light-warning {
    background: rgba(241, 196, 15, 0.2);
    border-color: #fbeebc;
    color: #f1c40f;
}

a.badge-light-warning.active, a.badge-light-warning:active, a.badge-light-warning:focus, a.badge-light-warning:hover {
    background: #f1c40f;
    border-color: #f1c40f;
    color: #fcf3cf;
}

.badge-light-danger {
    background: rgba(231, 76, 60, 0.2);
    border-color: #f8cdc8;
    color: #e74c3c;
}

a.badge-light-danger.active, a.badge-light-danger:active, a.badge-light-danger:focus, a.badge-light-danger:hover {
    background: #e74c3c;
    border-color: #e74c3c;
    color: #fadbd8;
}

.badge-light-light {
    background: rgba(248, 249, 250, 0.2);
    border-color: #fdfdfe;
    color: #f8f9fa;
}

a.badge-light-light.active, a.badge-light-light:active, a.badge-light-light:focus, a.badge-light-light:hover {
    background: #f8f9fa;
    border-color: #f8f9fa;
    color: #fefefe;
}

.badge-light-dark {
    background: rgba(52, 58, 64, 0.2);
    border-color: #c6c8ca;
    color: #343a40;
}

a.badge-light-dark.active, a.badge-light-dark:active, a.badge-light-dark:focus, a.badge-light-dark:hover {
    background: #343a40;
    border-color: #343a40;
    color: #d6d8d9;
}

/**====== Badges css end ======**/
/**  =====================
      Custom css start
==========================  **/
body {
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    color: #373a3c;
    font-weight: 400;
    background: #e9e9e9;
    position: relative;
}

*:focus {
    outline: none;
}

a:hover {
    outline: none;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5 {
    color: #37474f;
    font-weight: 600;
}

h1 {
    font-size: 40px;
}

h2 {
    font-size: 32px;
}

h3 {
    font-size: 28px;
}

h4 {
    font-size: 24px;
}

h5 {
    font-size: 16px;
}

h6 {
    font-size: 16px;
    color: #37474f;
    font-weight: 400;
}

p {
    font-size: 13px;
}

b,
strong {
    font-weight: 600;
}

.img-radius {
    border-radius: 50%;
}

.page-header {
    background: transparent;
    margin-bottom: 30px;
}

.page-header h5 {
    margin-bottom: 15px;
    color: #37474f;
}

.page-header .page-header-title + .breadcrumb {
    background: transparent;
    padding: 0;
    margin-bottom: 0;
}

.page-header .page-header-title + .breadcrumb > .breadcrumb-item {
    line-height: 1;
}

.page-header .page-header-title + .breadcrumb > .breadcrumb-item:before {
    color: rgba(55, 58, 60, 0.6);
}

.page-header .page-header-title + .breadcrumb > .breadcrumb-item a {
    color: #373a3c;
    font-weight: 400;
}

.page-header .page-header-title + .breadcrumb > .breadcrumb-item:last-child a {
    color: #37474f;
    font-weight: 600;
}

.page-header:not(.breadcumb-sticky) .page-header-title + .breadcrumb > .breadcrumb-item a {
    font-size: 13px;
}

.page-header.breadcumb-sticky {
    overflow: hidden;
    position: relative;
}

.page-header.breadcumb-sticky .page-header-title {
    display: inline-block;
}

.page-header.breadcumb-sticky .page-header-title h5 {
    margin-bottom: 0;
}

.page-header.breadcumb-sticky .breadcrumb {
    display: inline-flex;
    float: right;
    margin-top: 4px;
}

@media only screen and (max-width: 767px) {
    .page-header.breadcumb-sticky .breadcrumb {
        display: flex;
        float: none;
    }
}

/* ==========  card css start  =========== */
.anim-rotate {
    -webkit-animation: anim-rotate 1s linear infinite;
    animation: anim-rotate 1s linear infinite;
}

@keyframes anim-rotate {
    100% {
        transform: rotate(360deg);
    }
}

.anim-close-card {
    -webkit-animation: anim-close-card 1.4s linear;
    animation: anim-close-card 1.4s linear;
}

@keyframes anim-close-card {
    100% {
        opacity: 0.3;
        transform: scale3d(0.3, 0.3, 0.3);
    }
}

/* ==========  scrollbar End  =========== */
.scroll-y {
    z-index: 1027;
}

/* ==========  scrollbar End  ===========
 ==========  card css End  ===========
 ================================    Dropdown Start  ===================== */
.dropdown-menu {
    padding: 10px 0;
    font-size: 14px;
}

.dropdown-menu > li,
  .dropdown-menu > .dropdown-item {
    padding-left: 18px;
    padding-right: 18px;
    margin: 0;
    width: auto;
    border-radius: 0;
}

.dropdown-menu > li > a,
    .dropdown-menu > .dropdown-item > a {
    padding: 5px;
    color: #373a3c;
}

.dropdown-menu > li > a i,
      .dropdown-menu > .dropdown-item > a i {
    font-size: 15px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
}

.dropdown-menu > li.active, .dropdown-menu > li:active, .dropdown-menu > li:focus, .dropdown-menu > li:hover,
    .dropdown-menu > .dropdown-item.active,
    .dropdown-menu > .dropdown-item:active,
    .dropdown-menu > .dropdown-item:focus,
    .dropdown-menu > .dropdown-item:hover {
    background: #1abc9c;
    color: #fff;
    box-shadow: 0 0 4px 0 rgba(43, 43, 43, 0.25);
}

.dropdown-menu > li.active > a, .dropdown-menu > li:active > a, .dropdown-menu > li:focus > a, .dropdown-menu > li:hover > a,
      .dropdown-menu > .dropdown-item.active > a,
      .dropdown-menu > .dropdown-item:active > a,
      .dropdown-menu > .dropdown-item:focus > a,
      .dropdown-menu > .dropdown-item:hover > a {
    background: transparent;
    color: #fff;
}

.dropdown-menu > a.active, .dropdown-menu > a:active, .dropdown-menu > a:focus, .dropdown-menu > a:hover {
    background: #1abc9c;
    color: #fff;
}

.drp-icon:after {
    display: none;
}

/* ================================    Dropdown End  ===================== */
@media (min-width: 1600px) {
    .container {
        max-width: 1540px;
    }
}

@media (max-width: 992px) {
    .container {
        max-width: 100%;
    }
}

/* ========================================================
 ===============     document      ======================
 ========================================================

 Grid examples
*/
.bd-example-row {
    background: #e9e9e9;
    padding: 15px;
    margin-bottom: 15px;
}

.bd-example-row .row > [class^="col-"],
  .bd-example-row .row > .col {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    background-color: rgba(86, 61, 124, 0.15);
    border: 1px solid rgba(86, 61, 124, 0.2);
}

.bd-example-row .row + .row {
    margin-top: 1rem;
}

.bd-example-row .flex-items-bottom,
  .bd-example-row .flex-items-middle,
  .bd-example-row .flex-items-top {
    min-height: 6rem;
    background-color: rgba(255, 0, 0, 0.1);
}

.bd-example-row-flex-cols .row {
    min-height: 10rem;
    background-color: rgba(255, 0, 0, 0.1);
}

/* Docs examples */
.bd-example {
    position: relative;
    padding: 1rem;
    margin: 1rem;
    border: solid #ddd;
    border-width: 0.2rem 0 0;
}

@media only screen and (max-height: 575px) {
    .bd-example {
        padding: 1.5rem;
        margin-right: 0;
        margin-left: 0;
        border-width: 0.2rem;
    }
}

/* Example modals */
.modal {
    z-index: 1072;
}

.modal .popover,
  .modal .tooltip {
    z-index: 1073;
}

.modal-backdrop {
    z-index: 1071;
}

.bd-example-modal {
    background-color: #fafafa;
}

.bd-example-modal .modal {
    position: relative;
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
    z-index: 1;
    display: block;
}

.bd-example-modal .modal-dialog {
    left: auto;
    margin-right: auto;
    margin-left: auto;
}

/* Example tabbable tabs */
.bd-example-tabs .nav-tabs {
    margin-bottom: 1rem;
}

/* Code snippets */
.highlight {
    padding: 1rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
    background-color: #f3f2fb;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

@media only screen and (max-height: 575px) {
    .highlight {
        padding: 1.5rem;
    }
}

.bd-content .highlight {
    margin-right: 15px;
    margin-left: 15px;
}

@media only screen and (max-height: 575px) {
    .bd-content .highlight {
        margin-right: 0;
        margin-left: 0;
    }
}

.highlight pre {
    padding: 0;
    margin-top: 0;
    margin-bottom: 0;
    background-color: transparent;
    border: 0;
}

.highlight pre code {
    font-size: inherit;
    color: #333;
}

:not(pre) > code[class*="language-"],
pre[class*="language-"] {
    background: transparent;
}

/* =======================================================================
 ===============     Ui kit copy model style      ====================== */
/* Code examples */
.datta-example {
    position: relative;
}

.datta-example .datta-example-btns {
    position: absolute;
    right: 30px;
    top: -10px;
    opacity: 0;
    transform: rotateX(-90deg);
    transition: all 0.3s ease-in-out;
}

.datta-example .datta-example-btns .datta-example-btn {
    display: inline-block;
    line-height: 1;
    font-weight: 600;
    background: #1abc9c;
    color: #fff;
    padding: 0.1875rem 0.3125rem;
    border-radius: 2px;
    white-space: nowrap;
    font-size: 11px;
    margin: 0 4px;
}

.datta-example .datta-example-btns .datta-example-btn.copy::before {
    content: "COPY";
}

.datta-example .datta-example-btns .datta-example-btn.copied {
    background: #2ecc71 !important;
    color: #fff !important;
}

.datta-example .datta-example-btns .datta-example-btn.copied::before {
    content: "COPIED!";
}

.datta-example:hover .datta-example-btns {
    top: -21px;
    transform: rotateX(0deg);
    opacity: 1;
}

/* Modal */
.datta-example-modal {
    position: fixed;
    z-index: 1099;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: #282c34;
    transform-origin: 50% 0;
    transform: scale(0);
    transition: all 0.3s ease-in-out;
}

.datta-example-modal-opened {
    overflow: hidden !important;
}

.datta-example-modal-opened .datta-example-modal {
    transform: scale(1);
}

.datta-example-modal-content {
    max-width: 100vw;
    margin: auto;
    padding: 50px;
    height: 100vh;
    overflow: auto;
}

.datta-example-modal-content > pre {
    overflow: hidden;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
}

.datta-example-modal-content > pre > code {
    padding: 0;
    background: none;
    font-size: 16px;
}

.md-datta-example-modal-copy {
    display: block;
    position: fixed;
    top: 90px;
    right: 30px;
    margin-right: 8px;
    font-size: 1.5rem;
    border-radius: 50%;
    padding: 10px 15px;
    background: #1abc9c;
    color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
    white-space: nowrap;
}

.md-datta-example-modal-copy:hover {
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
    color: #fff;
}

.md-datta-example-modal-copy.copied::before {
    content: "Copied to Clipboard Successfully ! . . .";
    position: absolute;
    display: block;
    right: 100%;
    margin-right: 10px;
    font-size: 14px;
    background: #2ecc71;
    line-height: 24px;
    height: 24px;
    border-radius: 3px;
    padding: 0 6px;
    top: 50%;
    margin-top: -12px;
}

.datta-example-modal-close {
    display: block;
    position: fixed;
    top: 10px;
    right: 52px;
    color: #fff;
    opacity: 0.2;
    font-size: 3rem;
    font-weight: 100;
    transition: all 0.3s ease-in-out;
    z-index: 1;
}

.datta-example-modal-close:hover {
    color: #fff;
    opacity: 0.9;
}

/* Code */
.cui-bottom-spacer {
    height: 12rem;
}

/* editor style for model */
.hljs {
    padding: 0.5em;
    color: #abb2bf;
    background: #282c34;
}

.hljs-comment,
.hljs-quote {
    color: #5c6370;
    font-style: italic;
}

.hljs-doctag,
.hljs-formula,
.hljs-keyword {
    color: #c678dd;
}

.hljs-deletion,
.hljs-name,
.hljs-section,
.hljs-selector-tag,
.hljs-subst {
    color: #e06c75;
}

.hljs-literal {
    color: #56b6c2;
}

.hljs-addition,
.hljs-attribute,
.hljs-meta-string,
.hljs-regexp,
.hljs-string {
    color: #98c379;
}

.hljs-built_in,
.hljs-class .hljs-title {
    color: #e6c07b;
}

.hljs-attr,
.hljs-number,
.hljs-selector-attr,
.hljs-selector-class,
.hljs-selector-pseudo,
.hljs-template-variable,
.hljs-type,
.hljs-variable {
    color: #d19a66;
}

.hljs-bullet,
.hljs-link,
.hljs-meta,
.hljs-selector-id,
.hljs-symbol,
.hljs-title {
    color: #61aeee;
}

.hljs-emphasis {
    font-style: italic;
}

.hljs-strong {
    font-weight: bold;
}

.hljs-link {
    text-decoration: underline;
}

/* ================================    md animated mode start   ===================== */
.md-show.md-effect-12 ~ .md-overlay {
    background: #1abc9c;
}

/* ================================    md animated mode End   ===================== */
/* ================================    range slider Start  ===================== */
.tooltip.in {
    opacity: 0.9;
}

.tooltip .tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
}

.tooltip.top {
    padding: 5px 0;
    margin-top: -3px;
}

.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000;
}

/* ================================    range slider End  ===================== */
/* ================================    owl-carousel slider Start  ===================== */
.owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev {
    padding: 3px 9px;
}

/* ================================    owl-carousel slider End  ===================== */
/* ================================    Bootstrap tags input Start  ===================== */
.bootstrap-tagsinput {
    padding: 10px 15px;
    box-shadow: none;
    border-radius: 2px;
    background: #ecf0f5;
}

.bootstrap-tagsinput .tag {
    padding: 5px 12px;
    border-radius: 2px;
    line-height: 37px;
    margin-top: 5px;
    margin-right: 5px;
}

.bootstrap-tagsinput .tag [data-role="remove"] {
    margin-right: -5px;
}

.bootstrap-tagsinput .tag [data-role="remove"]:after {
    content: "\e8f6";
    padding: 0 2px;
    font-family: 'feather' !important;
}

/* ================================    Bootstrap tags input End  ===================== */
/* ================================    Multi-Select Start  ===================== */
.ms-container {
    width: 100%;
}

/* ================================    Multi-Select End  ===================== */
/* ================================    Blockquote Start  ===================== */
.blockquote {
    border-left: 0.25rem solid #e2e5e8;
    padding: 0.5rem 1rem;
}

.blockquote.text-right {
    border-left: none;
    border-right: 0.25rem solid #e2e5e8;
}

/* ================================    Blockquote End  ===================== */
/* ================================    animation start  ===================== */
.card .animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    border: 5px solid #fff;
    margin-bottom: 30px;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
}

/* ================================    animation End  ===================== */
/* ================================    browser  warning  Start  ===================== */
.ie-warning {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999999;
    background: #000000;
    width: 100%;
    height: 100%;
    text-align: center;
    color: #fff;
    font-family: "Courier New", Courier, monospace;
    padding: 50px 0;
}

.ie-warning p {
    font-size: 17px;
}

.ie-warning h1 {
    color: #fff;
}

.ie-warning .iew-container {
    min-width: 1024px;
    width: 100%;
    height: 200px;
    background: #fff;
    margin: 50px 0;
}

.ie-warning .iew-download {
    list-style: none;
    padding: 30px 0;
    margin: 0 auto;
    width: 720px;
}

.ie-warning .iew-download > li {
    float: left;
    vertical-align: top;
}

.ie-warning .iew-download > li > a {
    display: block;
    color: #000;
    width: 140px;
    font-size: 15px;
    padding: 15px 0;
}

.ie-warning .iew-download > li > a > div {
    margin-top: 10px;
}

.ie-warning .iew-download > li > a:hover {
    background-color: #eee;
}

/* ================================    browser  warning  End  ===================== */
div.code-toolbar > .toolbar a,
div.code-toolbar > .toolbar span,
div.code-toolbar > .toolbar button {
    padding: 3px 0.9em !important;
    background: #04a9f5 !important;
    color: #fff !important;
    box-shadow: none !important;
}

pre[class*=language-]:after,
pre[class*=language-]:before {
    display: none;
}

/* table css */
.table-borderless tbody tr td,
.table-borderless tbody tr th {
    border: 0;
}

@media only screen and (max-width: 400px) {
    .lay-customizer .theme-color > a[data-value="reset"],
  .theme-color > a[data-value="reset"] {
        margin-top: 20px;
    }
}

/**  =====================
      Generic-class css start
========================== **/
/*====== Padding , Margin css starts ======*/
.p-0 {
    padding: 0px;
}

.p-t-0 {
    padding-top: 0px;
}

.p-b-0 {
    padding-bottom: 0px;
}

.p-l-0 {
    padding-left: 0px;
}

.p-r-0 {
    padding-right: 0px;
}

.m-0 {
    margin: 0px;
}

.m-t-0 {
    margin-top: 0px;
}

.m-b-0 {
    margin-bottom: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.m-r-0 {
    margin-right: 0px;
}

.p-5 {
    padding: 5px;
}

.p-t-5 {
    padding-top: 5px;
}

.p-b-5 {
    padding-bottom: 5px;
}

.p-l-5 {
    padding-left: 5px;
}

.p-r-5 {
    padding-right: 5px;
}

.m-5 {
    margin: 5px;
}

.m-t-5 {
    margin-top: 5px;
}

.m-b-5 {
    margin-bottom: 5px;
}

.m-l-5 {
    margin-left: 5px;
}

.m-r-5 {
    margin-right: 5px;
}

.p-10 {
    padding: 10px;
}

.p-t-10 {
    padding-top: 10px;
}

.p-b-10 {
    padding-bottom: 10px;
}

.p-l-10 {
    padding-left: 10px;
}

.p-r-10 {
    padding-right: 10px;
}

.m-10 {
    margin: 10px;
}

.m-t-10 {
    margin-top: 10px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-l-10 {
    margin-left: 10px;
}

.m-r-10 {
    margin-right: 10px;
}

.p-15 {
    padding: 15px;
}

.p-t-15 {
    padding-top: 15px;
}

.p-b-15 {
    padding-bottom: 15px;
}

.p-l-15 {
    padding-left: 15px;
}

.p-r-15 {
    padding-right: 15px;
}

.m-15 {
    margin: 15px;
}

.m-t-15 {
    margin-top: 15px;
}

.m-b-15 {
    margin-bottom: 15px;
}

.m-l-15 {
    margin-left: 15px;
}

.m-r-15 {
    margin-right: 15px;
}

.p-20 {
    padding: 20px;
}

.p-t-20 {
    padding-top: 20px;
}

.p-b-20 {
    padding-bottom: 20px;
}

.p-l-20 {
    padding-left: 20px;
}

.p-r-20 {
    padding-right: 20px;
}

.m-20 {
    margin: 20px;
}

.m-t-20 {
    margin-top: 20px;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-l-20 {
    margin-left: 20px;
}

.m-r-20 {
    margin-right: 20px;
}

.p-25 {
    padding: 25px;
}

.p-t-25 {
    padding-top: 25px;
}

.p-b-25 {
    padding-bottom: 25px;
}

.p-l-25 {
    padding-left: 25px;
}

.p-r-25 {
    padding-right: 25px;
}

.m-25 {
    margin: 25px;
}

.m-t-25 {
    margin-top: 25px;
}

.m-b-25 {
    margin-bottom: 25px;
}

.m-l-25 {
    margin-left: 25px;
}

.m-r-25 {
    margin-right: 25px;
}

.p-30 {
    padding: 30px;
}

.p-t-30 {
    padding-top: 30px;
}

.p-b-30 {
    padding-bottom: 30px;
}

.p-l-30 {
    padding-left: 30px;
}

.p-r-30 {
    padding-right: 30px;
}

.m-30 {
    margin: 30px;
}

.m-t-30 {
    margin-top: 30px;
}

.m-b-30 {
    margin-bottom: 30px;
}

.m-l-30 {
    margin-left: 30px;
}

.m-r-30 {
    margin-right: 30px;
}

.p-35 {
    padding: 35px;
}

.p-t-35 {
    padding-top: 35px;
}

.p-b-35 {
    padding-bottom: 35px;
}

.p-l-35 {
    padding-left: 35px;
}

.p-r-35 {
    padding-right: 35px;
}

.m-35 {
    margin: 35px;
}

.m-t-35 {
    margin-top: 35px;
}

.m-b-35 {
    margin-bottom: 35px;
}

.m-l-35 {
    margin-left: 35px;
}

.m-r-35 {
    margin-right: 35px;
}

.p-40 {
    padding: 40px;
}

.p-t-40 {
    padding-top: 40px;
}

.p-b-40 {
    padding-bottom: 40px;
}

.p-l-40 {
    padding-left: 40px;
}

.p-r-40 {
    padding-right: 40px;
}

.m-40 {
    margin: 40px;
}

.m-t-40 {
    margin-top: 40px;
}

.m-b-40 {
    margin-bottom: 40px;
}

.m-l-40 {
    margin-left: 40px;
}

.m-r-40 {
    margin-right: 40px;
}

.p-45 {
    padding: 45px;
}

.p-t-45 {
    padding-top: 45px;
}

.p-b-45 {
    padding-bottom: 45px;
}

.p-l-45 {
    padding-left: 45px;
}

.p-r-45 {
    padding-right: 45px;
}

.m-45 {
    margin: 45px;
}

.m-t-45 {
    margin-top: 45px;
}

.m-b-45 {
    margin-bottom: 45px;
}

.m-l-45 {
    margin-left: 45px;
}

.m-r-45 {
    margin-right: 45px;
}

.p-50 {
    padding: 50px;
}

.p-t-50 {
    padding-top: 50px;
}

.p-b-50 {
    padding-bottom: 50px;
}

.p-l-50 {
    padding-left: 50px;
}

.p-r-50 {
    padding-right: 50px;
}

.m-50 {
    margin: 50px;
}

.m-t-50 {
    margin-top: 50px;
}

.m-b-50 {
    margin-bottom: 50px;
}

.m-l-50 {
    margin-left: 50px;
}

.m-r-50 {
    margin-right: 50px;
}

/*====== Padding , Margin css ends ======*/
/*====== text-color, background & border css starts ======*/
.bg-c-blue {
    background-color: #1abc9c;
}

.text-c-blue {
    color: #1abc9c;
}

.b-c-blue {
    border: 1px solid #1abc9c;
}

.bg-c-red {
    background-color: #e74c3c;
}

.text-c-red {
    color: #e74c3c;
}

.b-c-red {
    border: 1px solid #e74c3c;
}

.bg-c-green {
    background-color: #2ecc71;
}

.text-c-green {
    color: #2ecc71;
}

.b-c-green {
    border: 1px solid #2ecc71;
}

.bg-c-yellow {
    background-color: #f1c40f;
}

.text-c-yellow {
    color: #f1c40f;
}

.b-c-yellow {
    border: 1px solid #f1c40f;
}

.bg-c-purple {
    background-color: #536dfe;
}

.text-c-purple {
    color: #536dfe;
}

.b-c-purple {
    border: 1px solid #536dfe;
}

/*====== text-color, background & border css ends ======*/
/*====== [ overrides bootstrap color ]text-color, background & border css starts ======*/
.bg-primary {
    background-color: #1abc9c !important;
}

.text-primary {
    color: #1abc9c !important;
}

.b-primary {
    border: 1px solid #1abc9c !important;
}

.text-h-primary:hover {
    color: #1abc9c !important;
}

.bg-danger {
    background-color: #e74c3c !important;
}

.text-danger {
    color: #e74c3c !important;
}

.b-danger {
    border: 1px solid #e74c3c !important;
}

.text-h-danger:hover {
    color: #e74c3c !important;
}

.bg-success {
    background-color: #2ecc71 !important;
}

.text-success {
    color: #2ecc71 !important;
}

.b-success {
    border: 1px solid #2ecc71 !important;
}

.text-h-success:hover {
    color: #2ecc71 !important;
}

.bg-warning {
    background-color: #f1c40f !important;
}

.text-warning {
    color: #f1c40f !important;
}

.b-warning {
    border: 1px solid #f1c40f !important;
}

.text-h-warning:hover {
    color: #f1c40f !important;
}

.bg-info {
    background-color: #3498db !important;
}

.text-info {
    color: #3498db !important;
}

.b-info {
    border: 1px solid #3498db !important;
}

.text-h-info:hover {
    color: #3498db !important;
}

.bg-purple {
    background-color: #536dfe !important;
}

.text-purple {
    color: #536dfe !important;
}

.b-purple {
    border: 1px solid #536dfe !important;
}

.text-h-purple:hover {
    color: #536dfe !important;
}

/*====== [ overrides bootstrap color ]text-color, background & border css ends ======*/
/*====== border color css starts ======*/
.b-primary {
    border: 1px solid #1abc9c;
}

.border-bottom-primary td {
    border-bottom: 1px solid #1abc9c;
}

.border-bottom-primary th {
    border-bottom: 1px solid #1abc9c !important;
}

.b-danger {
    border: 1px solid #e74c3c;
}

.border-bottom-danger td {
    border-bottom: 1px solid #e74c3c;
}

.border-bottom-danger th {
    border-bottom: 1px solid #e74c3c !important;
}

.b-success {
    border: 1px solid #2ecc71;
}

.border-bottom-success td {
    border-bottom: 1px solid #2ecc71;
}

.border-bottom-success th {
    border-bottom: 1px solid #2ecc71 !important;
}

.b-warning {
    border: 1px solid #f1c40f;
}

.border-bottom-warning td {
    border-bottom: 1px solid #f1c40f;
}

.border-bottom-warning th {
    border-bottom: 1px solid #f1c40f !important;
}

.b-info {
    border: 1px solid #3498db;
}

.border-bottom-info td {
    border-bottom: 1px solid #3498db;
}

.border-bottom-info th {
    border-bottom: 1px solid #3498db !important;
}

.b-purple {
    border: 1px solid #536dfe;
}

.border-bottom-purple td {
    border-bottom: 1px solid #536dfe;
}

.border-bottom-purple th {
    border-bottom: 1px solid #536dfe !important;
}

/*====== border color css ends ======*/
/*====== Card top border css starts ======*/
.card-border-c-blue {
    border-top: 4px solid #1abc9c;
}

.card-border-c-red {
    border-top: 4px solid #e74c3c;
}

.card-border-c-green {
    border-top: 4px solid #2ecc71;
}

.card-border-c-yellow {
    border-top: 4px solid #f1c40f;
}

.card-border-c-purple {
    border-top: 4px solid #536dfe;
}

/*====== Card top border ends ======*/
/*====== Font-size css starts ======*/
.f-10 {
    font-size: 10px;
}

.f-12 {
    font-size: 12px;
}

.f-14 {
    font-size: 14px;
}

.f-16 {
    font-size: 16px;
}

.f-18 {
    font-size: 18px;
}

.f-20 {
    font-size: 20px;
}

.f-22 {
    font-size: 22px;
}

.f-24 {
    font-size: 24px;
}

.f-26 {
    font-size: 26px;
}

.f-28 {
    font-size: 28px;
}

.f-30 {
    font-size: 30px;
}

.f-32 {
    font-size: 32px;
}

.f-34 {
    font-size: 34px;
}

.f-36 {
    font-size: 36px;
}

.f-38 {
    font-size: 38px;
}

.f-40 {
    font-size: 40px;
}

.f-42 {
    font-size: 42px;
}

.f-44 {
    font-size: 44px;
}

.f-46 {
    font-size: 46px;
}

.f-48 {
    font-size: 48px;
}

.f-50 {
    font-size: 50px;
}

.f-52 {
    font-size: 52px;
}

.f-54 {
    font-size: 54px;
}

.f-56 {
    font-size: 56px;
}

.f-58 {
    font-size: 58px;
}

.f-60 {
    font-size: 60px;
}

.f-62 {
    font-size: 62px;
}

.f-64 {
    font-size: 64px;
}

.f-66 {
    font-size: 66px;
}

.f-68 {
    font-size: 68px;
}

.f-70 {
    font-size: 70px;
}

.f-72 {
    font-size: 72px;
}

.f-74 {
    font-size: 74px;
}

.f-76 {
    font-size: 76px;
}

.f-78 {
    font-size: 78px;
}

.f-80 {
    font-size: 80px;
}

/*====== Font-size css ends ======*/
/*====== Font-weight css starts ======*/
.f-w-100 {
    font-weight: 100;
}

.f-w-200 {
    font-weight: 200;
}

.f-w-300 {
    font-weight: 300;
}

.f-w-400 {
    font-weight: 400;
}

.f-w-500 {
    font-weight: 500;
}

.f-w-600 {
    font-weight: 600;
}

.f-w-700 {
    font-weight: 700;
}

.f-w-800 {
    font-weight: 800;
}

.f-w-900 {
    font-weight: 900;
}

/*====== Font-weight css ends ======*/
/*====== text-color, background color css starts ======*/
.bg-facebook {
    background: #3C5A99;
}

.text-facebook {
    color: #3C5A99;
}

.bg-twitter {
    background: #42C0FB;
}

.text-twitter {
    color: #42C0FB;
}

.bg-dribbble {
    background: #EC4A89;
}

.text-dribbble {
    color: #EC4A89;
}

.bg-pinterest {
    background: #BF2131;
}

.text-pinterest {
    color: #BF2131;
}

.bg-youtube {
    background: #E0291D;
}

.text-youtube {
    color: #E0291D;
}

.bg-googleplus {
    background: #C73E2E;
}

.text-googleplus {
    color: #C73E2E;
}

.bg-instagram {
    background: #AA7C62;
}

.text-instagram {
    color: #AA7C62;
}

.bg-viber {
    background: #7B519D;
}

.text-viber {
    color: #7B519D;
}

.bg-behance {
    background: #0057ff;
}

.text-behance {
    color: #0057ff;
}

.bg-dropbox {
    background: #3380FF;
}

.text-dropbox {
    color: #3380FF;
}

.bg-linkedin {
    background: #0077B5;
}

.text-linkedin {
    color: #0077B5;
}

/*====== text-color css ends ======*/
/*====== width, Height css starts ======*/
.wid-20 {
    width: 20px;
}

.hei-20 {
    height: 20px;
}

.wid-25 {
    width: 25px;
}

.hei-25 {
    height: 25px;
}

.wid-30 {
    width: 30px;
}

.hei-30 {
    height: 30px;
}

.wid-35 {
    width: 35px;
}

.hei-35 {
    height: 35px;
}

.wid-40 {
    width: 40px;
}

.hei-40 {
    height: 40px;
}

.wid-45 {
    width: 45px;
}

.hei-45 {
    height: 45px;
}

.wid-50 {
    width: 50px;
}

.hei-50 {
    height: 50px;
}

.wid-55 {
    width: 55px;
}

.hei-55 {
    height: 55px;
}

.wid-60 {
    width: 60px;
}

.hei-60 {
    height: 60px;
}

.wid-65 {
    width: 65px;
}

.hei-65 {
    height: 65px;
}

.wid-70 {
    width: 70px;
}

.hei-70 {
    height: 70px;
}

.wid-75 {
    width: 75px;
}

.hei-75 {
    height: 75px;
}

.wid-80 {
    width: 80px;
}

.hei-80 {
    height: 80px;
}

.wid-85 {
    width: 85px;
}

.hei-85 {
    height: 85px;
}

.wid-90 {
    width: 90px;
}

.hei-90 {
    height: 90px;
}

.wid-95 {
    width: 95px;
}

.hei-95 {
    height: 95px;
}

.wid-100 {
    width: 100px;
}

.hei-100 {
    height: 100px;
}

.wid-105 {
    width: 105px;
}

.hei-105 {
    height: 105px;
}

.wid-110 {
    width: 110px;
}

.hei-110 {
    height: 110px;
}

.wid-115 {
    width: 115px;
}

.hei-115 {
    height: 115px;
}

.wid-120 {
    width: 120px;
}

.hei-120 {
    height: 120px;
}

.wid-125 {
    width: 125px;
}

.hei-125 {
    height: 125px;
}

.wid-130 {
    width: 130px;
}

.hei-130 {
    height: 130px;
}

.wid-135 {
    width: 135px;
}

.hei-135 {
    height: 135px;
}

.wid-140 {
    width: 140px;
}

.hei-140 {
    height: 140px;
}

.wid-145 {
    width: 145px;
}

.hei-145 {
    height: 145px;
}

.wid-150 {
    width: 150px;
}

.hei-150 {
    height: 150px;
}

/*====== width, Height css ends ======*/
/*====== border-width css starts ======*/
.b-wid-1 {
    border-width: 1px;
}

.b-wid-2 {
    border-width: 2px;
}

.b-wid-3 {
    border-width: 3px;
}

.b-wid-4 {
    border-width: 4px;
}

.b-wid-5 {
    border-width: 5px;
}

.b-wid-6 {
    border-width: 6px;
}

.b-wid-7 {
    border-width: 7px;
}

.b-wid-8 {
    border-width: 8px;
}

/*====== border-width css ends ======*/
/* new logo start */
.b-brand {
    display: flex;
    align-items: center;
}

.b-brand .b-bg {
    background: #1abc9c;
    border-radius: 3px;
    width: 30px;
    height: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #fff;
}

.b-brand .b-title {
    margin-left: 10px;
    font-weight: 400;
    color: #fff;
    font-size: 16px;
}

.navbar-collapsed .b-brand .b-title {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.navbar-collapsed .mobile-menu {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.navbar-collapsed:hover .b-brand .b-title {
    transform: rotateY(0deg);
    opacity: 1;
}

.navbar-collapsed:hover .mobile-menu {
    transition-delay: 0.3s;
    transform: rotateY(0deg);
    opacity: 1;
}

/* new logo End  */
/* Pre-loader css start */
.loader-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    z-index: 1035;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.2);
}

.loader-bg .loader-track {
    position: relative;
    height: 3px;
    display: block;
    width: 100%;
    overflow: hidden;
}

.loader-bg .loader-track .loader-fill:after, .loader-bg .loader-track .loader-fill:before {
    content: '';
    background: #fff;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    will-change: left, right;
}

.loader-bg .loader-track .loader-fill:before {
    -webkit-animation: mbar 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: mbar 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.loader-bg .loader-track .loader-fill:after {
    -webkit-animation: m_s 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: m_s 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s;
}

@-webkit-keyframes mbar {
    0% {
        left: -35%;
        right: 100%;
    }

    60% {
        left: 100%;
        right: -90%;
    }

    100% {
        left: 100%;
        right: -35%;
    }
}

@keyframes mbar {
    0% {
        left: -35%;
        right: 100%;
    }

    60% {
        left: 100%;
        right: -90%;
    }

    100% {
        left: 100%;
        right: -35%;
    }
}

@-webkit-keyframes m_s {
    0% {
        left: -200%;
        right: 100%;
    }

    60% {
        left: 107%;
        right: -8%;
    }

    100% {
        left: 107%;
        right: -8%;
    }
}

@keyframes m_s {
    0% {
        left: -200%;
        right: 100%;
    }

    60% {
        left: 107%;
        right: -8%;
    }

    100% {
        left: 107%;
        right: -8%;
    }
}

/* Pre-loader css end */
/* header css start */
.search-bar {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    box-shadow: 0 2px 1px rgba(0, 0, 0, 0.05);
    z-index: 1030;
    background: #fff;
    padding: 6px 12px;
}

.search-bar .close {
    position: absolute;
    top: 9px;
    right: 9px;
    padding: 8px 16px;
}

.pcoded-header {
    z-index: 1029;
    position: relative;
    display: flex;
    min-height: 56px;
    padding: 0;
    top: 0;
    background: #fff;
    color: rgba(44, 62, 80, 0.8);
    width: 100%;
    transition: all 0.3s ease-in-out;
}

.pcoded-header .m-header {
    width: 235px;
    position: relative;
    height: 56px;
    display: inline-flex;
    align-items: center;
    /*justify-content: center;*/
    padding: 0 25px;
}

.pcoded-header .m-header .logo-dark,
    .pcoded-header .m-header .logo-thumb {
    display: none;
}

.pcoded-header .input-group {
    background: transparent;
}

.pcoded-header .input-group .input-group-text {
    margin-right: 0;
}

.pcoded-header .input-group .input-group-text,
  .pcoded-header a,
  .pcoded-header dropdown-toggle {
    color: rgba(44, 62, 80, 0.8);
}

.pcoded-header .input-group .input-group-text:hover,
    .pcoded-header a:hover,
    .pcoded-header dropdown-toggle:hover {
    color: #2c3e50;
}

.pcoded-header #mobile-header {
    display: none;
}

.pcoded-header .navbar-nav {
    padding-left: 0;
    list-style: none;
    margin-bottom: 0;
    display: inline-flex;
    flex-direction: row;
}

.pcoded-header .navbar-nav > li {
    line-height: 56px;
    display: inline-block;
    padding: 0 12px;
}

.pcoded-header .navbar-nav > li .nav-link {
    padding: 0;
}

.pcoded-header .navbar-nav > li:first-child {
    padding-left: 25px;
}

.pcoded-header .navbar-nav > li:last-child {
    padding-right: 25px;
}

.pcoded-header .navbar-nav .dropdown {
    height: 56px;
}

.pcoded-header .mr-auto .dropdown-menu {
    margin-left: -20px;
}

.pcoded-header .ml-auto {
    float: right;
    height: 56px;
}

.pcoded-header .ml-auto .dropdown-menu {
    margin-right: -20px;
}

.pcoded-header .pop-search {
    font-size: 16px;
}

.pcoded-header .dropdown .dropdown-toggle {
    display: inline-block;
    text-align: center;
    position: relative;
    min-width: 20px;
}

.pcoded-header .dropdown .dropdown-toggle > i {
    font-size: 16px;
}

.pcoded-header .dropdown .dropdown-toggle:after {
    display: none;
}

.pcoded-header .dropdown .dropdown-toggle .badge {
    position: absolute;
    top: 8px;
    right: -11px;
    font-size: 12px;
}

.pcoded-header .dropdown .dropdown-menu {
    position: absolute;
    min-width: 220px;
    margin: 0;
}

.pcoded-header .dropdown .dropdown-menu li {
    line-height: 1.2;
}

.pcoded-header .dropdown .dropdown-menu li a {
    padding: 10px;
    font-size: 14px;
}

.pcoded-header .dropdown .dropdown-menu li a > .fa-circle {
    font-size: 6px;
    opacity: 0.6;
}

.pcoded-header .dropdown .dropdown-menu li.active a, .pcoded-header .dropdown .dropdown-menu li:active a, .pcoded-header .dropdown .dropdown-menu li:focus a, .pcoded-header .dropdown .dropdown-menu li:hover a {
    color: #fff;
}

.pcoded-header .dropdown.mega-menu {
    position: static;
}

.pcoded-header .dropdown.mega-menu .dropdown-menu {
    margin-left: 0;
    left: 235px;
    width: calc(100vw - 235px - 18px);
}

.pcoded-header .dropdown.mega-menu .dropdown-menu .mega-title {
    margin: 25px 0 -10px 20px;
}

.pcoded-header .dropdown.mega-menu .dropdown-menu > .row > .col + .col:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 1px;
    height: 100%;
    background: rgba(226, 229, 232, 0.7);
}

.pcoded-header .dropdown .notification {
    width: 350px;
    padding: 0;
    line-height: 1.4;
    overflow: hidden;
}

.pcoded-header .dropdown .notification a {
    color: #373a3c;
}

.pcoded-header .dropdown .notification a:hover {
    color: #37474f;
}

.pcoded-header .dropdown .notification .noti-head {
    background: #2c3e50;
    padding: 15px 20px;
}

.pcoded-header .dropdown .notification .noti-head h6 {
    color: #fff;
}

.pcoded-header .dropdown .notification .noti-head a {
    color: #fff;
    text-decoration: underline;
    font-size: 13px;
}

.pcoded-header .dropdown .notification .noti-body {
    padding: 0;
    position: relative;
    height: 300px;
}

.pcoded-header .dropdown .notification .noti-body img {
    width: 40px;
    margin-right: 20px;
}

.pcoded-header .dropdown .notification .noti-body li {
    padding: 15px 20px;
    transition: all 0.3s ease-in-out;
}

.pcoded-header .dropdown .notification .noti-body li.n-title {
    padding-bottom: 0;
}

.pcoded-header .dropdown .notification .noti-body li.n-title p {
    margin-bottom: 5px;
}

.pcoded-header .dropdown .notification .noti-body li.notification:hover {
    background: rgba(26, 188, 156, 0.1);
}

.pcoded-header .dropdown .notification .noti-body li p {
    margin-bottom: 5px;
    font-size: 13px;
}

.pcoded-header .dropdown .notification .noti-body li p strong {
    color: #222;
}

.pcoded-header .dropdown .notification .noti-body li .n-time {
    font-size: 80%;
    float: right;
}

.pcoded-header .dropdown .notification .noti-footer {
    border-top: 1px solid #f1f1f1;
    padding: 15px 20px;
    text-align: center;
    background: #e9e9e9;
}

.pcoded-header .dropdown .notification .noti-footer a {
    text-decoration: underline;
    font-size: 13px;
}

.pcoded-header .dropdown .notification ul {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.pcoded-header .dropdown .notification ul li {
    padding: 20px 15px;
}

.pcoded-header .dropdown .profile-notification {
    padding: 0;
    line-height: 1.4;
    overflow: hidden;
}

.pcoded-header .dropdown .profile-notification .pro-head {
    color: #fff;
    padding: 15px;
    position: relative;
    background: #2c3e50;
}

.pcoded-header .dropdown .profile-notification .pro-head img {
    width: 40px;
    margin-right: 10px;
}

.pcoded-header .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
    padding-right: 0;
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pcoded-header .dropdown .profile-notification .pro-body {
    padding: 20px 0;
    margin-bottom: 0;
    list-style: none;
}

.pcoded-header .dropdown .profile-notification .pro-body li {
    margin: 0;
    border-radius: 0;
}

.pcoded-header .dropdown .profile-notification .pro-body li a {
    color: #373a3c;
    font-size: 14px;
    padding: 10px 20px;
}

.pcoded-header .dropdown .profile-notification .pro-body li a i {
    margin-right: 10px;
}

.pcoded-header .dropdown .profile-notification .pro-body li.active, .pcoded-header .dropdown .profile-notification .pro-body li:active, .pcoded-header .dropdown .profile-notification .pro-body li:focus, .pcoded-header .dropdown .profile-notification .pro-body li:hover {
    background: #1abc9c;
}

.pcoded-header .dropdown .profile-notification .pro-body li.active > a, .pcoded-header .dropdown .profile-notification .pro-body li:active > a, .pcoded-header .dropdown .profile-notification .pro-body li:focus > a, .pcoded-header .dropdown .profile-notification .pro-body li:hover > a {
    color: #fff;
    background: transparent;
}

/* header css end */
/* menu[ vartical ] css start */
.mob-toggler,
.mobile-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 56px;
    position: absolute;
    right: 0;
    top: 0;
    padding: 0 10px;
}

.mob-toggler span,
  .mobile-menu span {
    position: relative;
    display: block;
    width: 100%;
    height: 2px;
    background-color: rgba(44, 62, 80, 0.8);
    transition: 0.3s cubic-bezier(0.97, 0.75, 0.61, 1.84);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 2px;
}

.mob-toggler span:after, .mob-toggler span:before,
    .mobile-menu span:after,
    .mobile-menu span:before {
    content: "";
    position: absolute;
    left: 0;
    height: 2px;
    background-color: rgba(44, 62, 80, 0.8);
    transition: 0.3s cubic-bezier(0.97, 0.75, 0.61, 1.84);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 2px;
}

.mob-toggler span:after,
    .mobile-menu span:after {
    top: 6px;
    width: 70%;
}

.mob-toggler span:before,
    .mobile-menu span:before {
    top: -6px;
    width: 40%;
}

.mob-toggler:hover span,
  .mobile-menu:hover span {
    background-color: #2c3e50;
}

.mob-toggler:hover span:after, .mob-toggler:hover span:before,
    .mobile-menu:hover span:after,
    .mobile-menu:hover span:before {
    background-color: #2c3e50;
    width: 100%;
}

.mob-toggler {
    right: 5px;
    display: none;
}

.pcoded-header:before,
.pcoded-main-container:before {
    content: "";
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar {
    display: block;
    z-index: 1028;
    position: absolute;
    box-shadow: 0 2px 10px -1px rgba(69, 90, 100, 0.3);
    transition: all 0.3s ease-in-out;
    width: 235px;
    height: calc(100% - 56px);
    margin-top: 56px;
    top: 0;
    /*background: #2c3e50;*/
    background: #1f7b89;
    color: #d0dcda;
}

.pcoded-navbar ul {
    padding-left: 0;
    list-style: none;
    margin-bottom: 0;
}

.pcoded-navbar .scroll-div.navbar-content {
    height: 100%;
}

.pcoded-navbar .header-logo {
    position: relative;
    align-items: center;
    display: inline-flex;
    float: left;
    background: #2c3e50;
    height: 56px;
    text-align: center;
    width: 235px;
    margin-right: 0;
    padding: 10px 25px;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar .header-logo .logo-dark {
    display: none;
}

.pcoded-navbar .header-logo .logo-thumb {
    transform: rotateY(-90deg);
    opacity: 0;
    position: absolute;
    transition: unset;
}

.pcoded-navbar .header-logo + .scroll-div {
    float: left;
    display: inline-block;
}

.pcoded-navbar .mobile-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 56px;
    position: absolute;
    right: 10px;
    top: 0;
    padding: 0 10px;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar .pcoded-badge {
    font-size: 75%;
    position: relative;
    right: 0;
    top: -1px;
    padding: 2px 7px;
    border-radius: 2px;
    display: inline-block;
    margin-left: 10px;
}

.pcoded-navbar .main-menu-header {
    background: #3e5871;
    position: relative;
    padding: 20px;
    text-align: left;
    display: flex;
    height: 82px;
    align-items: center;
}

.pcoded-navbar .main-menu-header .user-details {
    cursor: pointer;
    display: inline-block;
    margin-left: 10px;
}

.pcoded-navbar .main-menu-header .user-details > div,
      .pcoded-navbar .main-menu-header .user-details > span {
    transition: all 0.2s ease-in-out;
}

.pcoded-navbar .main-menu-header .img-radius {
    width: 40px;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar .main-menu-header + div .list-group-item {
    cursor: pointer;
    position: relative;
    background: transparent;
    overflow: hidden;
    padding: 0.75rem 1.85rem;
    border: none;
}

.pcoded-navbar .pcoded-inner-navbar {
    flex-direction: column;
}

.pcoded-navbar .pcoded-inner-navbar li {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li > a {
    text-align: left;
    padding: 5px 10px;
    margin: 0 0 5px;
    display: block;
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li > a .pcoded-mtext {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li > a > .pcoded-micon {
    font-size: 16px;
    padding: 0;
    margin-right: 5px;
    border-radius: 4px;
    width: 30px;
    display: inline-flex;
    align-items: center;
    height: 30px;
    text-align: center;
    justify-content: center;
}

.pcoded-navbar .pcoded-inner-navbar li > a > .pcoded-micon + .pcoded-mtext {
    position: relative;
    top: 0;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu > a:after {
    content: "\e844";
    font-family: 'feather';
    font-size: 13px;
    border: none;
    position: absolute;
    top: 13px;
    right: 20px;
    transition: 0.3s ease-in-out;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu.pcoded-trigger > a:after {
    transform: rotate(90deg);
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu {
    display: none;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu a:after {
    top: 7px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu.pcoded-trigger.active > .pcoded-submenu {
    display: block;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu.pcoded-trigger.active > a {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li {
    position: relative;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li > a {
    text-align: left;
    padding: 7px 7px 7px 45px;
    margin: 0;
    display: block;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li > a:before {
    content: "\e844";
    font-family: 'feather';
    position: absolute;
    top: 10px;
    left: 24px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu:after {
    left: 45px;
    top: -20px;
    height: calc(100% - 15px);
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li:after {
    left: 46px;
    width: 20px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li > a {
    padding: 7px 7px 7px 65px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li .pcoded-submenu > li > a:before {
    left: 45px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-menu-caption {
    font-size: 13px;
    font-weight: 600;
    color: #1abc9c;
    padding: 18px 15px 5px;
    text-transform: capitalize;
    position: relative;
    margin-top: 10px;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-menu-caption:first-child {
    border-top: none;
    margin-top: 0;
}

.pcoded-navbar .pcoded-inner-navbar li.pcoded-menu-caption > label {
    margin-bottom: 0;
}

.pcoded-navbar .pcoded-inner-navbar li.disabled > a {
    cursor: default;
    opacity: 0.5;
}

.pcoded-navbar .pcoded-submenu {
    background:#07717f;
    padding: 15px 0;
}

.pcoded-navbar a {
    color: #d0dcda;
}

.pcoded-navbar .navbar-content,
  .pcoded-navbar .navbar-wrapper {
    width: 100%;
    height: 100%;
}
.img_gcm_logo{
  width: 100%;
}
.pcoded-navbar.navbar-collapsed {
    width: 70px;
    height: calc(100% - 56px);
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar.navbar-collapsed .header-logo {
    width: 70px;
    padding: 10px 20px;
}

.pcoded-navbar.navbar-collapsed .header-logo img {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: unset;
}

.pcoded-navbar.navbar-collapsed .header-logo .logo-thumb {
    transform: rotateY(0deg);
    transform-origin: 0 0;
    opacity: 1;
    left: calc((70px / 2) - 20px);
}

.pcoded-navbar.navbar-collapsed .header-logo .mobile-menu {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
}

.pcoded-navbar.navbar-collapsed .navbar-content.ps {
    overflow: visible;
}

.pcoded-navbar.navbar-collapsed .pcoded-menu-caption {
    position: relative;
    width: 100%;
    height: auto;
    white-space: nowrap;
    overflow: hidden;
}

.pcoded-navbar.navbar-collapsed .pcoded-menu-caption > label {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar.navbar-collapsed .pcoded-menu-caption:after {
    content: "";
    position: absolute;
    top: 32px;
    left: 15px;
    width: calc(100% - 30px);
    height: 1px;
    background: rgba(208, 220, 218, 0.5);
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li > a {
    padding: 7px 20px;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li > a > .pcoded-micon + .pcoded-mtext {
    position: absolute;
    top: 11px;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li > a > .pcoded-mtext {
    transform: rotateY(-90deg);
    transform-origin: 0 0;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-hasmenu > a:after {
    right: 12px;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-hasmenu .pcoded-submenu {
    display: none;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu li a {
    color: transparent;
    white-space: nowrap;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu li + li a {
    border-top: none;
}

.pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu .pcoded-submenu li a:before {
    opacity: 0;
}

.pcoded-navbar.navbar-collapsed ~ .pcoded-header .dropdown.mega-menu .dropdown-menu {
    left: 70px;
    width: calc(100vw - 70px - 15px);
}

.pcoded-navbar.navbar-collapsed ~ .pcoded-main-container {
    margin-left: 70px;
}

.pcoded-navbar.navbar-collapsed .pcoded-badge {
    transform: rotateX(-90deg);
    transform-origin: 50% 50%;
    opacity: 0;
    display: none;
    transition: all 0.15s ease-in-out;
}

.pcoded-navbar.navbar-collapsed:hover {
    width: 235px !important;
}

.pcoded-navbar.navbar-collapsed:hover .header-logo {
    width: 235px;
}

.pcoded-navbar.navbar-collapsed:hover .header-logo img {
    transform: rotateY(0deg);
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:hover .header-logo .logo-thumb {
    transform: rotateY(-90deg);
    opacity: 0;
}

.pcoded-navbar.navbar-collapsed:hover .header-logo .mobile-menu {
    display: flex;
    right: 10px;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-menu-caption > label {
    transform: rotateY(0deg);
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-menu-caption:after {
    background: transparent;
}

.pcoded-navbar.navbar-collapsed:hover .mobile-menu {
    transform: rotateY(0deg);
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li > a > .pcoded-mtext {
    transform: rotateY(0deg);
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li > a > .pcoded-mtext:after {
    opacity: 1;
    visibility: visible;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li.pcoded-hasmenu > a:after {
    transform: rotateX(0deg);
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li.pcoded-hasmenu.pcoded-trigger > a:after {
    transform: rotateX(0deg) rotate(90deg);
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu li a {
    color: inherit;
}

.pcoded-navbar.navbar-collapsed:hover .pcoded-inner-navbar > li.pcoded-trigger .pcoded-submenu .pcoded-submenu li a:before {
    opacity: 1;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li > a {
    transition: all 0.3s ease-in-out;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li > a:after {
    display: none;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li.active > a:before,
    .pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li.pcoded-trigger > a:before,
    .pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li:hover > a:before {
    content: "";
    top: 10px;
    left: 31px;
    border-radius: 50%;
    background: #1abc9c;
    padding: 5px;
    box-shadow: 0 0 0 5px #2c3e50;
    z-index: 6;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu:before {
    content: "";
    width: 2px;
    height: 100%;
    position: absolute;
    top: 0;
    left: calc(70px / 2);
    z-index: 5;
    background: rgba(208, 220, 218, 0.2);
}

.pcoded-navbar.navbar-collapsed:not(:hover) .main-menu-header {
    padding: 25px 15px;
}

.pcoded-navbar.navbar-collapsed:not(:hover) .main-menu-header .user-details > div,
      .pcoded-navbar.navbar-collapsed:not(:hover) .main-menu-header .user-details > span {
    opacity: 0;
    transform: rotateY(-90deg);
}

.pcoded-navbar .pcoded-menu-caption {
    color: #8090a5;
}

.pcoded-navbar .pcoded-inner-navbar li.active > a, .pcoded-navbar .pcoded-inner-navbar li:focus > a, .pcoded-navbar .pcoded-inner-navbar li:hover > a {
    color: #1abc9c;
}

.pcoded-navbar .pcoded-inner-navbar > li.active > a, .pcoded-navbar .pcoded-inner-navbar > li.pcoded-trigger > a {
    background: #94c0c4;
    color: #fff;
}

.pcoded-navbar .pcoded-inner-navbar > .pcoded-menu-caption.active:after, .pcoded-navbar .pcoded-inner-navbar > .pcoded-menu-caption.pcoded-trigger:after {
    display: none;
}

.pcoded-navbar.mob-open ~ .pcoded-header:before,
.pcoded-navbar.mob-open ~ .pcoded-main-container:before, .pcoded-navbar.navbar-collapsed:hover ~ .pcoded-header:before,
.pcoded-navbar.navbar-collapsed:hover ~ .pcoded-main-container:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

/* ===  scroll bar start  ===== */
.navbar-content {
    position: relative;
}

.ps__rail-y {
    z-index: 5;
}

.ps .ps__rail-x.ps--clicking,
.ps .ps__rail-x:focus,
.ps .ps__rail-x:hover,
.ps .ps__rail-y.ps--clicking,
.ps .ps__rail-y:focus,
.ps .ps__rail-y:hover {
    background: transparent;
}

.ps__thumb-y {
    background: darkgray;
}

.ps__rail-y.ps--clicking .ps__thumb-y,
.ps__rail-y:focus > .ps__thumb-y,
.ps__rail-y:hover > .ps__thumb-y {
    background: #b6b6b6;
}

/* ===  scroll bar End  ===== */
/* menu [ vartical ] css end */
/* menu[ horizontal ] css start */
.pcoded-navbar.theme-horizontal {
    display: block;
    height: 56px;
    width: 100%;
    z-index: 1023;
    position: fixed;
    border-radius: 0;
    top: 56px;
    margin-top: 0;
}

.pcoded-navbar.theme-horizontal .pcoded-badge {
    display: none;
}

.pcoded-navbar.theme-horizontal.top-nav-collapse {
    top: 0;
}

.pcoded-navbar.theme-horizontal.default, .pcoded-navbar.theme-horizontal.default.top-nav-collapse {
    top: 56px;
}

.pcoded-navbar.theme-horizontal.header-hide {
    top: 0;
}

.pcoded-navbar.theme-horizontal.header-hide.top-nav-collapse {
    top: -56px;
}

.pcoded-navbar.theme-horizontal.header-hide ~ .pcoded-main-container {
    margin-top: 56px;
}

.pcoded-navbar.theme-horizontal .header-logo {
    display: none;
}

.pcoded-navbar.theme-horizontal .sidenav-horizontal-wrapper {
    display: flex;
    align-items: center;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar {
    display: block;
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
    white-space: nowrap;
    transition: all 0.5s ease-in-out;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-menu-caption {
    display: none;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li {
    display: inline-flex;
    list-style: outside none none;
    margin: 0;
    padding: 0;
    position: relative;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li > a {
    margin: 0;
    padding: 8px 15px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li > a > .pcoded-mtext {
    position: relative;
    top: 0;
    margin-right: 5px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li > a:after {
    position: relative;
    top: 0;
    right: 0;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.active a, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-trigger a, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li:hover a {
    box-shadow: none;
    color: #fff;
    background: transparent;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.active:before, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.pcoded-trigger:before {
    content: "\6d";
    position: absolute;
    bottom: -27px;
    left: 0;
    font-family: "pct";
    z-index: 1001;
    font-size: 50px;
    line-height: 1;
    padding-left: calc(50% - 25px);
    color: #2c3e50;
    text-shadow: 0 3px 4px rgba(69, 90, 100, 0.3);
    width: 100%;
    height: 40px;
    transform: scaleX(1.2);
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.active > .pcoded-submenu, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.pcoded-trigger > .pcoded-submenu {
    margin-top: 30px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.active:after, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-trigger:after {
    content: "";
    background-color: #1abc9c;
    z-index: 4;
    position: absolute;
    left: 19px;
    top: auto;
    bottom: 5px;
    width: 23px;
    height: 2px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.edge > .pcoded-submenu {
    left: auto;
    right: 0;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu {
    position: relative;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu {
    opacity: 0;
    visibility: hidden;
    transform-origin: 50% 50%;
    transition: transform 0.3s, opacity 0.3s;
    transform-style: preserve-3d;
    transform: rotateX(-90deg);
    position: absolute;
    min-width: 250px;
    display: block;
    z-index: 1;
    top: 100%;
    list-style: outside none none;
    margin: 0;
    border-radius: 4px;
    padding: 15px;
    box-shadow: 0 4px 24px 0 rgba(62, 57, 107, 0.18);
    background: #fff;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu:after {
    display: none;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu a {
    color: #2c3e50;
    padding: 10px 20px 10px 30px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu a:before {
    left: 5px;
    top: 11px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li + li a {
    border-top-color: #ededed;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li:after {
    display: none;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li.active > a, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li.pcoded-trigger > a, .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu li:hover > a {
    color: #1abc9c;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu {
    position: absolute;
    min-width: 250px;
    z-index: 1;
    left: calc(100% + 10px);
    top: -10px;
    margin: 0 0 0 20px;
    border-radius: 4px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu:before {
    content: "\6a";
    position: absolute;
    top: 8px;
    left: -31px;
    font-family: "pct";
    z-index: 1001;
    font-size: 50px;
    line-height: 1;
    color: #fff;
    width: 40px;
    height: 100%;
    text-shadow: -8px 0 13px rgba(62, 57, 107, 0.08);
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu a {
    color: #2c3e50;
    padding: 10px 20px 10px 30px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-submenu a:before {
    left: 5px;
    top: 11px;
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-hasmenu.edge .pcoded-submenu {
    left: auto;
    margin: 0 20px 0 0;
    right: calc(100% + 10px);
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu .pcoded-submenu .pcoded-hasmenu.edge .pcoded-submenu:before {
    content: '\6b';
    left: auto;
    right: -21px;
    text-shadow: 8px 0 13px rgba(62, 57, 107, 0.08);
}

.pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu {
    opacity: 1;
    visibility: visible;
    transform: rotateX(0deg);
}

.pcoded-navbar.theme-horizontal .navbar-content {
    display: flex;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header {
    position: fixed;
    top: 0;
    margin-left: 0;
    width: 100%;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .dropdown.mega-menu .dropdown-menu {
    left: 0;
    width: 100vw;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .b-title {
    color: #2c3e50;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*='header-'] .b-title {
    color: #fff;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .m-header {
    display: inline-flex;
    padding: 0 15px;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .m-header .logo-main,
      .pcoded-navbar.theme-horizontal ~ .pcoded-header .m-header .logo-thumb {
    display: none;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .m-header .logo-dark {
    display: inline-block;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header .mobile-menu {
    display: none;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .m-header {
    display: inline-flex;
    padding: 0 15px;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .m-header .logo-dark,
        .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .m-header .logo-thumb {
    display: none;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .m-header .logo-main {
    display: inline-block;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu {
    color: #373a3c;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu a {
    color: #373a3c;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li.active, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:active, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:focus, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:hover {
    background: rgba(26, 188, 156, 0.1);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li.active > a, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:active > a, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:focus > a, .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] a,
      .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown .notification .noti-body li.notification:hover {
    background: rgba(26, 188, 156, 0.1);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown .profile-notification .pro-head {
    color: #fff;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-main-container {
    margin-top: 112px;
    margin-left: 0;
    padding-top: 1px;
    min-height: calc(100vh - 112px);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-main-container .page-header h5 {
    color: #37474f;
}

.pcoded-navbar.theme-horizontal ~ .pcoded-main-container .page-header .page-header-title + .breadcrumb > .breadcrumb-item:before {
    color: rgba(55, 71, 79, 0.8);
}

.pcoded-navbar.theme-horizontal ~ .pcoded-main-container .page-header .page-header-title + .breadcrumb > .breadcrumb-item a {
    color: #37474f;
}

/* menu [ horizontal ] css end */
/* main content start */
.pcoded-content {
    position: relative;
    display: block;
    padding: 25px;
}

.pcoded-main-container {
    position: relative;
    margin: 0 auto;
    padding-top: 0;
    display: block;
    clear: both;
    float: unset;
    right: 0;
    top: 0;
    margin-left: 235px;
    min-height: 100vh;
    transition: all 0.3s ease-in-out;
}

/* main content end*/
/* ==========================    Rsponsive Menu  start   ====================== */
@media only screen and (max-width: 991px) {
    .pcoded-header .input-group-text,
  .pcoded-header a,
  .pcoded-header dropdown-toggle {
        color: #2c3e50;
    }

    .pcoded-header .input-group-text:hover,
    .pcoded-header a:hover,
    .pcoded-header dropdown-toggle:hover {
        color: #1abc9c;
    }

    .pcoded-header #mobile-header {
        display: none;
        right: 20px;
    }

    .pcoded-header .dropdown.mega-menu .dropdown-menu {
        left: 0;
        width: 100vw;
    }

    .pcoded-header > .collapse:not(.show),
  .pcoded-header .container > .collapse:not(.show) {
        background: #fff;
        box-shadow: 0 2px 1px rgba(0, 0, 0, 0.05);
        position: relative;
    }

    .pcoded-header > .collapse:not(.show) .mob-toggler:after,
    .pcoded-header .container > .collapse:not(.show) .mob-toggler:after {
        content: "\e89a";
        font-family: "feather";
        font-size: 20px;
        color: #2c3e50;
        position: absolute;
        right: 10px;
        top: 0;
        width: 40px;
        height: 56px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pcoded-header > .collapse:not(.show) .mr-auto,
    .pcoded-header .container > .collapse:not(.show) .mr-auto {
        height: 56px;
        display: flex;
        justify-content: center;
    }

    .pcoded-header > .collapse:not(.show) .ml-auto,
    .pcoded-header .container > .collapse:not(.show) .ml-auto {
        margin-left: auto;
        margin-right: 0 !important;
    }

    .pcoded-header .dropdown-menu,
  .pcoded-header .dropdown-menu a,
  .pcoded-header .search-close .input-group-text {
        color: #2c3e50;
    }

    .pcoded-header .m-header {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 56px;
    }

    .pcoded-header .m-header .mobile-menu {
        right: auto;
        left: 10px;
    }

    .pcoded-header .m-header .mob-toggler {
        display: flex;
    }

    .pcoded-header .full-screen {
        display: none;
    }

    .pcoded-header .navbar-nav > li:last-child {
        padding-right: 20px;
    }

    .pcoded-navbar {
        margin-left: -235px;
        position: absolute;
        height: calc(100% - 56px);
    }

    .pcoded-navbar .scroll-div.navbar-content {
        height: 100%;
    }

    .pcoded-navbar ~ .pcoded-header,
    .pcoded-navbar ~ .pcoded-main-container {
        margin-left: 0;
    }

    .pcoded-navbar ~ .pcoded-header {
        width: 100%;
    }

    .pcoded-navbar .navbar-brand {
        display: none;
    }

    .pcoded-navbar.mob-open {
        margin-left: 0;
    }

    .pcoded-navbar.mob-open .pcoded-main-container ~ .pcoded-header,
      .pcoded-navbar.mob-open ~ .pcoded-main-container {
        margin-left: 0;
    }

    .pcoded-main-container {
        padding-top: 0;
    }
}

@media only screen and (max-width: 575px) {
    .pcoded-header .main-search.open .input-group .search-close {
        display: none;
    }

    .pcoded-header .navbar-nav > li {
        padding: 0 8px;
    }

    .pcoded-header .navbar-nav.ml-auto > li:first-child {
        padding-left: 0;
    }

    .pcoded-header .navbar-nav > li:last-child {
        padding-right: 15px;
    }

    .pcoded-header .navbar-nav.mr-auto li.nav-item:not(.dropdown) {
        display: block;
        padding-right: 0;
    }

    .pcoded-header .navbar-nav.mr-auto li.nav-item:not(.dropdown) .search-close {
        display: none;
    }

    .pcoded-header .dropdown.show {
        position: static;
    }

    .pcoded-header .dropdown.show a:after {
        display: none;
    }

    .pcoded-header .dropdown.show:before {
        display: none;
    }

    .pcoded-header .dropdown.mega-menu {
        position: static;
    }

    .pcoded-header .dropdown.mega-menu .dropdown-menu.profile-notification .pro-body li a {
        padding: 5px 10px;
    }

    .pcoded-header .dropdown .notification {
        width: 100%;
    }

    .pcoded-header .dropdown .dropdown-menu {
        width: 95%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
    }

    .header-chat.open,
  .header-user-list.open {
        width: 280px;
    }

    .pcoded-content {
        padding: 25px 15px;
    }

    .card {
        margin-bottom: 15px;
    }
}

@media only screen and (max-width: 1200px) and (min-width: 768px) {
    .pcoded-navbar .header-logo {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed .header-logo img {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed .pcoded-menu-caption > label {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li > a > .pcoded-mtext {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed .pcoded-inner-navbar > li.pcoded-hasmenu > a:after {
        transition: none;
        transition-delay: 0;
    }

    .pcoded-navbar.navbar-collapsed .pcoded-badge {
        transition: none;
    }

    .pcoded-navbar.navbar-collapsed:hover .pcoded-badge {
        transition-delay: 0;
    }
}

@media only screen and (max-width: 1024px) {
    .pcoded-navbar.navbar-collapsed ~ .pcoded-header .dropdown.mega-menu .dropdown-menu {
        left: 70px;
        width: calc(100vw - 70px);
    }
}

@media only screen and (max-width: 350px) {
    .pcoded-header .dropdown.mega-menu {
        display: none;
    }
}

/* responsive horizontal menu */
@media only screen and (max-width: 991px) {
    .pcoded-navbar.theme-horizontal {
        margin-left: 0;
    }

    .pcoded-navbar.theme-horizontal ~ .pcoded-header > .collapse:not(.show),
    .pcoded-navbar.theme-horizontal ~ .pcoded-header .container > .collapse:not(.show) {
        display: inline-flex;
        background: #fff;
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    }

    .pcoded-navbar.theme-horizontal ~ .pcoded-header .b-title {
        color: #fff;
    }

    .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu .pcoded-trigger > .pcoded-submenu,
    .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu .pcoded-trigger.edge > .pcoded-submenu {
        position: relative;
        left: 0;
        min-width: 100%;
        margin: 0;
        box-shadow: none;
    }

    .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu .pcoded-trigger > .pcoded-submenu:before,
      .pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-hasmenu.pcoded-trigger > .pcoded-submenu .pcoded-trigger.edge > .pcoded-submenu:before {
        display: none;
    }
}

/* ==========================    Rsponsive Menu  end   ====================== */
/* ******************************************************************************* */
/* * Horizontal */
.theme-horizontal .sidenav-horizontal-wrapper {
    flex: 1 1 auto;
    width: 0;
}

.sidenav:not(.sidenav-no-animation) .theme-horizontal .sidenav-horizontal-wrapper .sidenav-inner {
    transition: margin 0.2s;
}

.theme-horizontal .sidenav-horizontal-next,
.theme-horizontal .sidenav-horizontal-prev {
    position: relative;
    display: block;
    flex: 0 0 auto;
    width: 2.25rem;
    background-color: #2c3e50;
    z-index: 9;
}

.theme-horizontal .sidenav-horizontal-next::after,
  .theme-horizontal .sidenav-horizontal-prev::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: 0.8rem;
    height: 0.8rem;
    border: 2px solid;
    border-top: 0;
}

.theme-horizontal .sidenav-horizontal-next.disabled,
  .theme-horizontal .sidenav-horizontal-prev.disabled {
    cursor: default !important;
    opacity: 0;
}

.theme-horizontal .sidenav-horizontal-prev::after {
    border-right: 0;
    transform: translate(-50%, -50%) rotate(45deg);
}

.theme-horizontal .sidenav-horizontal-next::after {
    border-left: 0;
    transform: translate(-50%, -50%) rotate(-45deg);
}

.theme-horizontal .sidenav-horizontal:after, .theme-horizontal .sidenav-horizontal:before {
    content: "";
    background: #2c3e50;
    width: 100%;
    position: absolute;
    top: 0;
    height: 100%;
    z-index: 5;
}

@media only screen and (max-width: 991px) {
    .theme-horizontal .sidenav-horizontal:after, .theme-horizontal .sidenav-horizontal:before {
        display: none;
    }
}

.theme-horizontal .sidenav-horizontal:before {
    left: 100%;
}

.theme-horizontal .sidenav-horizontal:after {
    right: 100%;
}

.theme-horizontal.menu-light .sidenav-horizontal:after, .theme-horizontal.menu-light .sidenav-horizontal:before {
    background: #fff;
}

@-webkit-keyframes sidenavDropdownShow {
    0% {
        opacity: 0;
        transform: translateY(-0.5rem);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes sidenavDropdownShow {
    0% {
        opacity: 0;
        transform: translateY(-0.5rem);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.pcoded-navbar .card {
    background: rgba(255, 255, 255, 0.1);
    margin: 20px;
    box-shadow: 0 0 0 1px rgba(226, 229, 232, 0.15);
    color: rgba(255, 255, 255, 0.6);
}

.pcoded-navbar .card h6 {
    color: rgba(255, 255, 255, 0.6);
}

.pcoded-navbar .card .close {
    position: absolute;
    color: #d0dcda;
    position: absolute;
    top: 10px;
    right: 12px;
    opacity: 0.8;
    text-shadow: none;
}

.pcoded-navbar.menu-light .card {
    background: rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 0 1px #e9e9e9;
    color: rgba(0, 0, 0, 0.6);
}

.pcoded-navbar.menu-light .card h6 {
    color: #535763;
}

.pcoded-navbar.menu-light .card .close {
    color: #535763;
}

.pcoded-navbar.navbar-collapsed .card {
    display: none;
}

.menu-styler {
    z-index: 1029;
    position: relative;
    color: #373a3c;
}

.menu-styler h5,
  .menu-styler h6 {
    color: #37474f;
}

.menu-styler hr {
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.menu-styler .style-toggler {
    position: relative;
    z-index: 1028;
}

.menu-styler .style-toggler > a {
    position: fixed;
    right: 0;
    top: 250px;
    z-index: 1031;
    transition: 0.3s ease-in-out;
}

.menu-styler .style-toggler > a:before {
    content: "";
    width: 60px;
    height: 60px;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1001;
    background: #2c3e50;
    transition: 0.3s ease-in-out;
    border-radius: 4px 0 0 4px;
    box-shadow: 0 0 0 2px #1abc9c;
}

.menu-styler .style-toggler > a:after {
    content: "\e8c3";
    top: 14px;
    font-size: 30px;
    position: absolute;
    right: 12px;
    font-family: "feather";
    z-index: 1029;
    line-height: 1;
    -webkit-animation: mymove 1.3s infinite linear;
    animation: mymove 1.3s infinite linear;
    color: #fff;
    transition: 0.3s ease-in-out;
}

@media all and (-ms-high-contrast: none) {
    .menu-styler .style-toggler > a:after {
        line-height: 0.5;
        top: 18px;
    }
}

.menu-styler.open .style-toggler > a, .menu-styler.prebuild-open .style-toggler > a {
    right: 400px;
    -webkit-animation: sh-shake 0s ease infinite;
    animation: sh-shake 0s ease infinite;
}

.menu-styler.open .style-toggler > a:after, .menu-styler.prebuild-open .style-toggler > a:after {
    content: "\e8f6";
    -webkit-animation: mymove 0s linear infinite;
    animation: mymove 0s linear infinite;
}

.menu-styler.open .prebuild-toggler > .prebuild-group, .menu-styler.prebuild-open .prebuild-toggler > .prebuild-group {
    right: calc(400px - 100px);
}

.menu-styler.open .style-block {
    right: 0;
    box-shadow: -6px 0 12px rgba(0, 0, 0, 0.175);
}

.menu-styler.prebuild-open .style-block-prebuild {
    right: 0;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

.menu-styler .style-block,
  .menu-styler .style-block-prebuild {
    position: fixed;
    top: 0;
    right: -400px;
    width: 400px;
    border-radius: 4px 0 0 4px;
    background: #fff;
    z-index: 1030;
    transition: 0.3s ease-in-out;
    padding: 25px 20px 20px;
}

.menu-styler .mst-scroll {
    height: calc(100vh - 175px);
    background-color: rgba(26, 188, 156, 0.03);
    padding: 0 15px;
}

.menu-styler label {
    margin-bottom: 3px;
}

.menu-styler .switch input[type=checkbox] + .cr {
    top: 8px;
}

.menu-styler .radio input[type=radio] + .cr {
    margin-right: 10px;
}

.menu-styler .radio input[type=radio] + .cr:after, .menu-styler .radio input[type=radio] + .cr:before {
    margin-right: 3px;
}

.menu-styler h6 {
    position: relative;
    margin: 20px 0 10px;
}

.menu-styler .nav-pills {
    padding: 0;
    box-shadow: none;
}

.menu-styler .nav-pills li {
    width: calc(100% / 3);
}

.menu-styler .m-style-scroller {
    padding: 15px 20px;
    box-shadow: none;
    background-color: #e9e9e9;
    border-radius: 4px;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.24);
}

@media only screen and (max-width: 992px) {
    .menu-styler {
        display: none;
    }
}

@-webkit-keyframes mymove {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes mymove {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@-webkit-keyframes sh-shake {
    0%,
  100%,
  25% {
        transform: scale(1);
    }

    15%,
  3%,
  9% {
        transform: scale(1.1);
    }

    12%,
  20%,
  6% {
        transform: scale(0.9);
    }
}

@keyframes sh-shake {
    0%,
  100%,
  25% {
        transform: scale(1);
    }

    15%,
  3%,
  9% {
        transform: scale(1.1);
    }

    12%,
  20%,
  6% {
        transform: scale(0.9);
    }
}

.lay-customizer .theme-color,
.theme-color {
    display: block;
    position: relative;
    padding: 0;
    margin-bottom: 10px;
}

.lay-customizer .theme-color > a,
  .theme-color > a {
    position: relative;
    width: 45px;
    height: 30px;
    border-radius: 3px;
    display: inline-block;
    background: #e9e9e9;
    overflow: hidden;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.28);
}

.lay-customizer .theme-color > a + a,
    .theme-color > a + a {
    margin-left: 8px;
}

.lay-customizer .theme-color > a span,
    .theme-color > a span {
    width: 100%;
    position: absolute;
}

.lay-customizer .theme-color > a span:after, .lay-customizer .theme-color > a span:before,
      .theme-color > a span:after,
      .theme-color > a span:before {
    content: "";
    height: 100%;
    position: absolute;
}

.lay-customizer .theme-color > a span:before,
      .theme-color > a span:before {
    width: 32%;
    left: 0;
    background: #2c3e50;
}

.lay-customizer .theme-color > a span:after,
      .theme-color > a span:after {
    width: 70%;
    right: 0;
    background: #e9e9e9;
}

.lay-customizer .theme-color > a > span:nth-child(1),
    .theme-color > a > span:nth-child(1) {
    height: 30%;
    top: 0;
}

.lay-customizer .theme-color > a > span:nth-child(1):after,
      .theme-color > a > span:nth-child(1):after {
    background: #fff;
}

.lay-customizer .theme-color > a > span:nth-child(2),
    .theme-color > a > span:nth-child(2) {
    height: 75%;
    bottom: 0;
}

.lay-customizer .theme-color > a > span:nth-child(2):before,
      .theme-color > a > span:nth-child(2):before {
    border-radius: 0 3px 0 0;
}

.lay-customizer .theme-color > a.active:before,
    .theme-color > a.active:before {
    content: "\e83e";
    top: 1px;
    font-size: 20px;
    position: absolute;
    left: 12px;
    font-family: "feather";
    z-index: 1001;
    color: #1abc9c;
    transition: 0.3s ease-in-out;
    text-shadow: 0 1px 3px rgba(26, 188, 156, 0.9), 0 3px 8px rgba(0, 0, 0, 0.1);
}

.lay-customizer .theme-color > a.active:after,
    .theme-color > a.active:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
}

.lay-customizer .theme-color > a[data-value="menu-light"] span:before,
    .theme-color > a[data-value="menu-light"] span:before {
    background: #fff;
}

.lay-customizer .theme-color > a[data-value="dark"] span:after,
    .theme-color > a[data-value="dark"] span:after {
    background: #11181f;
}

.lay-customizer .theme-color > a[data-value="reset"],
    .theme-color > a[data-value="reset"] {
    background: #e74c3c;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    top: -10px;
    width: 135px;
    box-shadow: none;
}

.lay-customizer .theme-color.small > a,
  .theme-color.small > a {
    width: 25px;
    height: 25px;
    border-radius: 50%;
}

.lay-customizer .theme-color.small > a:before,
    .theme-color.small > a:before {
    font-size: 15px;
    left: 5px;
    top: 1px;
}

.lay-customizer .theme-color.small > a > span,
    .theme-color.small > a > span {
    display: none;
}

.lay-customizer .theme-color.header-color > a[data-value="header-blue"] > span:nth-child(1):after, .lay-customizer .theme-color.header-color > a[data-value="header-blue"] > span:nth-child(1):before,
  .theme-color.header-color > a[data-value="header-blue"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-blue"] > span:nth-child(1):before {
    background: #1abc9c;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-blue"],
  .theme-color.header-color.small > a[data-value="header-blue"] {
    background: #1abc9c;
}

.lay-customizer .theme-color.header-color > a[data-value="header-red"] > span:nth-child(1):after, .lay-customizer .theme-color.header-color > a[data-value="header-red"] > span:nth-child(1):before,
  .theme-color.header-color > a[data-value="header-red"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-red"] > span:nth-child(1):before {
    background: #e74c3c;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-red"],
  .theme-color.header-color.small > a[data-value="header-red"] {
    background: #e74c3c;
}

.lay-customizer .theme-color.header-color > a[data-value="header-purple"] > span:nth-child(1):after, .lay-customizer .theme-color.header-color > a[data-value="header-purple"] > span:nth-child(1):before,
  .theme-color.header-color > a[data-value="header-purple"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-purple"] > span:nth-child(1):before {
    background: #536dfe;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-purple"],
  .theme-color.header-color.small > a[data-value="header-purple"] {
    background: #536dfe;
}

.lay-customizer .theme-color.header-color > a[data-value="header-info"] > span:nth-child(1):after, .lay-customizer .theme-color.header-color > a[data-value="header-info"] > span:nth-child(1):before,
  .theme-color.header-color > a[data-value="header-info"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-info"] > span:nth-child(1):before {
    background: #3498db;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-info"],
  .theme-color.header-color.small > a[data-value="header-info"] {
    background: #3498db;
}

.lay-customizer .theme-color.header-color > a[data-value="header-green"] > span:nth-child(1):after, .lay-customizer .theme-color.header-color > a[data-value="header-green"] > span:nth-child(1):before,
  .theme-color.header-color > a[data-value="header-green"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-green"] > span:nth-child(1):before {
    background: #2ecc71;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-green"],
  .theme-color.header-color.small > a[data-value="header-green"] {
    background: #2ecc71;
}

.lay-customizer .theme-color.header-color > a[data-value="header-dark"] > span:nth-child(1):after, .lay-customizer .theme-color.header-color > a[data-value="header-dark"] > span:nth-child(1):before,
  .theme-color.header-color > a[data-value="header-dark"] > span:nth-child(1):after,
  .theme-color.header-color > a[data-value="header-dark"] > span:nth-child(1):before {
    background: #2c3e50;
}

.lay-customizer .theme-color.header-color.small > a[data-value="header-dark"],
  .theme-color.header-color.small > a[data-value="header-dark"] {
    background: #2c3e50;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"],
  .theme-color.background-color.flat > a[data-value="background-blue"] {
    background: #1abc9c;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #e9e9e9 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-red"],
  .theme-color.background-color.flat > a[data-value="background-red"] {
    background: #e74c3c;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-red"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #e9e9e9 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"],
  .theme-color.background-color.flat > a[data-value="background-purple"] {
    background: #536dfe;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #e9e9e9 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-info"],
  .theme-color.background-color.flat > a[data-value="background-info"] {
    background: #3498db;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-info"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #e9e9e9 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-green"],
  .theme-color.background-color.flat > a[data-value="background-green"] {
    background: #2ecc71;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-green"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #e9e9e9 0%);
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"],
  .theme-color.background-color.flat > a[data-value="background-dark"] {
    background: #2c3e50;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):after, .lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):before,
    .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):after,
    .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):before {
    background: transparent;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):before,
    .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):before {
    background: #fff;
}

.lay-customizer .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):after,
    .theme-color.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 8px, #e9e9e9 0%);
}

.doc-img > a {
    position: relative;
    width: 130px;
    height: 80px;
    display: inline-block;
    background: #e9e9e9;
    overflow: hidden;
    box-shadow: 0 0 0 1px #e2e5e8;
}

.doc-img > a span {
    width: 100%;
    position: absolute;
}

.doc-img > a span:after, .doc-img > a span:before {
    content: "";
    height: 100%;
    position: absolute;
}

.doc-img > a span:before {
    width: 30%;
    left: 0;
    background: #2c3e50;
}

.doc-img > a span:after {
    width: 70%;
    right: 0;
    background: #e9e9e9;
}

.doc-img > a > span:nth-child(1) {
    height: 20%;
    top: 0;
}

.doc-img > a > span:nth-child(1):after {
    background: #fff;
}

.doc-img > a > span:nth-child(2) {
    height: 80%;
    bottom: 0;
}

.doc-img > a.active {
    border-color: #1abc9c;
}

.doc-img > a.active:before {
    content: "\e83f";
    top: -4px;
    font-size: 20px;
    position: absolute;
    left: 10px;
    font-family: "feather";
    z-index: 1001;
    color: #1abc9c;
    transition: 0.3s ease-in-out;
    text-shadow: 0 3px 8px rgba(26, 188, 156, 0.9), 0 3px 8px rgba(0, 0, 0, 0.1);
}

.doc-img > a.active:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.65);
}

.doc-img > a[data-value="menu-light"] span:before {
    background: #fff;
}

.doc-img > a[data-value="dark"] span:after {
    background: #11181f;
}

.doc-img.header-color > a[data-value="header-blue"] > span:nth-child(1):after {
    background: #1abc9c;
}

.doc-img.header-color > a[data-value="header-red"] > span:nth-child(1):after {
    background: #e74c3c;
}

.doc-img.header-color > a[data-value="header-purple"] > span:nth-child(1):after {
    background: #536dfe;
}

.doc-img.header-color > a[data-value="header-info"] > span:nth-child(1):after {
    background: #3498db;
}

.doc-img.header-color > a[data-value="header-green"] > span:nth-child(1):after {
    background: #2ecc71;
}

.doc-img.header-color > a[data-value="header-dark"] > span:nth-child(1):after {
    background: #2c3e50;
}

.doc-img.background-color.flat > a[data-value="background-blue"] {
    background: #1abc9c;
}

.doc-img.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-blue"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-blue"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.flat > a[data-value="background-red"] {
    background: #e74c3c;
}

.doc-img.background-color.flat > a[data-value="background-red"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-red"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-red"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-red"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.flat > a[data-value="background-purple"] {
    background: #536dfe;
}

.doc-img.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-purple"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-purple"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.flat > a[data-value="background-info"] {
    background: #3498db;
}

.doc-img.background-color.flat > a[data-value="background-info"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-info"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-info"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-info"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.flat > a[data-value="background-green"] {
    background: #2ecc71;
}

.doc-img.background-color.flat > a[data-value="background-green"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-green"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-green"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-green"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.flat > a[data-value="background-dark"] {
    background: #2c3e50;
}

.doc-img.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):after, .doc-img.background-color.flat > a[data-value="background-dark"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.flat > a[data-value="background-dark"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-blue"] {
    background: linear-gradient(to right, #1abc9c 0%, #00f2fe 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-blue"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-red"] {
    background: linear-gradient(to right, #e74c3c 0%, #ff9a44 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-red"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-purple"] {
    background: linear-gradient(to right, #536dfe 0%, #00adff 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-purple"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-info"] {
    background: linear-gradient(to right, #3498db 0%, #22e1ff 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-info"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-green"] {
    background: linear-gradient(to right, #2ecc71 0%, #00e3ae 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-green"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-dark"] {
    background: linear-gradient(to right, #2c3e50 0%, #1f3054 100%);
}

.doc-img.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(1):after, .doc-img.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.gradient > a[data-value="background-grd-dark"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.image > a {
    background-size: cover;
    background-repeat: no-repeat;
}

.doc-img.background-color.image > a[data-value="background-img-1"] {
    background-image: url("../images/nav-bg/body-bg-1.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-1"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-1"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-1"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-1"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.image > a[data-value="background-img-2"] {
    background-image: url("../images/nav-bg/body-bg-2.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-2"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-2"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-2"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-2"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.image > a[data-value="background-img-3"] {
    background-image: url("../images/nav-bg/body-bg-3.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-3"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-3"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-3"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-3"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.image > a[data-value="background-img-4"] {
    background-image: url("../images/nav-bg/body-bg-4.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-4"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-4"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-4"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-4"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.image > a[data-value="background-img-5"] {
    background-image: url("../images/nav-bg/body-bg-5.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-5"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-5"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-5"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-5"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

.doc-img.background-color.image > a[data-value="background-img-6"] {
    background-image: url("../images/nav-bg/body-bg-6.jpg");
}

.doc-img.background-color.image > a[data-value="background-img-6"] > span:nth-child(1):after, .doc-img.background-color.image > a[data-value="background-img-6"] > span:nth-child(1):before {
    background: transparent;
}

.doc-img.background-color.image > a[data-value="background-img-6"] > span:nth-child(2):before {
    background: #fff;
}

.doc-img.background-color.image > a[data-value="background-img-6"] > span:nth-child(2):after {
    background: linear-gradient(to bottom, transparent 20px, #e9e9e9 0%);
}

/* ===================================================================================
 ==========================    Diffrent Layout Styles Start     ====================
 ===================================================================================
 ====== [ light menu style start ] ======== */
.pcoded-navbar.menu-light {
    background-color: #fff;
    color: #535763;
}

.pcoded-navbar.menu-light .header-logo {
    background-color: #2c3e50;
}

.pcoded-navbar.menu-light .header-logo .logo-dark {
    display: none;
}

.pcoded-navbar.menu-light .header-logo .logo-main {
    display: block;
}

.pcoded-navbar.menu-light .main-menu-header {
    background: #f2f2f2;
}

.pcoded-navbar.menu-light .sidenav-horizontal-next,
  .pcoded-navbar.menu-light .sidenav-horizontal-prev {
    background: #fff;
}

.pcoded-navbar.menu-light .mobile-menu span {
    background-color: rgba(255, 255, 255, 0.8);
}

.pcoded-navbar.menu-light .mobile-menu span:after, .pcoded-navbar.menu-light .mobile-menu span:before {
    background-color: rgba(255, 255, 255, 0.8);
}

.pcoded-navbar.menu-light .mobile-menu.on span {
    background-color: transparent;
}

.pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li.active > a:before, .pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li.pcoded-trigger > a:before, .pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li:hover > a:before {
    color: #1abc9c;
}

.pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-hasmenu .pcoded-submenu li + li > a {
    border-top-color: #ededed;
}

.pcoded-navbar.menu-light .pcoded-submenu {
    background: #fff;
}

.pcoded-navbar.menu-light a {
    color: #535763;
}

.pcoded-navbar.menu-light.navbar-collapsed .pcoded-menu-caption:after {
    background: rgba(0, 0, 0, 0.1);
}

.pcoded-navbar.menu-light.navbar-collapsed:hover .pcoded-menu-caption:after {
    background: transparent;
}

.pcoded-navbar.menu-light.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li.active > a:before,
  .pcoded-navbar.menu-light.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li.pcoded-trigger > a:before,
  .pcoded-navbar.menu-light.navbar-collapsed:not(:hover) .pcoded-inner-navbar > li.pcoded-trigger.pcoded-hasmenu > .pcoded-submenu li:hover > a:before {
    box-shadow: 0 0 0 5px #fff;
}

.pcoded-navbar.menu-light .pcoded-menu-caption {
    color: #535763;
}

.pcoded-navbar.menu-light .pcoded-inner-navbar li.active > a, .pcoded-navbar.menu-light .pcoded-inner-navbar li.pcoded-trigger > a, .pcoded-navbar.menu-light .pcoded-inner-navbar li:hover > a {
    color: #1abc9c;
    background: transparent;
}

.pcoded-navbar.menu-light .pcoded-inner-navbar > li.active > a, .pcoded-navbar.menu-light .pcoded-inner-navbar > li.pcoded-trigger > a {
    background: #1abc9c;
    color: #fff;
}

.pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li.active a, .pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li.pcoded-trigger a, .pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li:hover a {
    color: #535763;
    background: transparent;
}

.pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.active:before, .pcoded-navbar.menu-light.theme-horizontal .pcoded-inner-navbar > li.pcoded-hasmenu.pcoded-trigger:before {
    color: #fff;
}

/* ====== [ light menu style end ] ======== */
/* ====== [ Header color start ] ======== */
.pcoded-header[class*="header-"] .mobile-menu span {
    background-color: rgba(255, 255, 255, 0.8);
}

.pcoded-header[class*="header-"] .mobile-menu span:after, .pcoded-header[class*="header-"] .mobile-menu span:before {
    background-color: rgba(255, 255, 255, 0.8);
}

.pcoded-header[class*="header-"] .mobile-menu:hover span {
    background-color: #fff;
}

.pcoded-header[class*="header-"] .mobile-menu:hover span:after, .pcoded-header[class*="header-"] .mobile-menu:hover span:before {
    background-color: #fff;
}

@media only screen and (min-width: 992px) {
    .pcoded-header[class*="header-"] .page-header .breadcrumb-item + .breadcrumb-item::before,
  .pcoded-header[class*="header-"] .page-header .page-header-title + .breadcrumb > .breadcrumb-item a,
  .pcoded-header[class*="header-"] .page-header h5 {
        color: #fff;
    }
}

.pcoded-header.header-blue {
    background: #1abc9c;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-blue .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-blue .profile-notification li.active, .pcoded-header.header-blue .profile-notification li:active, .pcoded-header.header-blue .profile-notification li:focus, .pcoded-header.header-blue .profile-notification li:hover {
    background: rgba(26, 188, 156, 0.1);
}

.pcoded-header.header-blue .profile-notification li.active > a, .pcoded-header.header-blue .profile-notification li:active > a, .pcoded-header.header-blue .profile-notification li:focus > a, .pcoded-header.header-blue .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-blue .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-blue .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-blue .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-blue .dropdown-menu > li.active, .pcoded-header.header-blue .dropdown-menu > li:active, .pcoded-header.header-blue .dropdown-menu > li:focus, .pcoded-header.header-blue .dropdown-menu > li:hover {
    background: rgba(26, 188, 156, 0.1);
    color: #373a3c;
}

.pcoded-header.header-blue .dropdown-menu > li.active > a, .pcoded-header.header-blue .dropdown-menu > li:active > a, .pcoded-header.header-blue .dropdown-menu > li:focus > a, .pcoded-header.header-blue .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-blue .input-group .input-group-text,
  .pcoded-header.header-blue a,
  .pcoded-header.header-blue dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-blue .input-group .input-group-text:hover,
    .pcoded-header.header-blue a:hover,
    .pcoded-header.header-blue dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-blue .input-group .input-group-text,
      .pcoded-header.header-blue a,
      .pcoded-header.header-blue dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-blue .input-group .input-group-text:hover,
        .pcoded-header.header-blue a:hover,
        .pcoded-header.header-blue dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-blue .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-blue .main-search .search-close > .input-group-text {
    color: #1abc9c;
}

.pcoded-header.header-blue .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-blue .main-search.open .input-group {
        background: #e9e9e9;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-blue .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-blue .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-blue .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-blue .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-blue .main-search.open .input-group .search-btn {
    background: #1abc9c;
    border-color: #1abc9c;
}

.pcoded-header.header-blue .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-blue .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-blue .dropdown .notification .noti-body li.notification:hover {
    background: rgba(26, 188, 156, 0.1);
}

.pcoded-header.header-blue .dropdown .profile-notification .pro-head {
    color: #fff;
    background: #1abc9c;
}

.pcoded-header.header-blue .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-blue .b-bg {
    background: #fff;
    color: #1abc9c;
}

.pcoded-header.header-red {
    background: #e74c3c;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-red .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-red .profile-notification li.active, .pcoded-header.header-red .profile-notification li:active, .pcoded-header.header-red .profile-notification li:focus, .pcoded-header.header-red .profile-notification li:hover {
    background: rgba(231, 76, 60, 0.1);
}

.pcoded-header.header-red .profile-notification li.active > a, .pcoded-header.header-red .profile-notification li:active > a, .pcoded-header.header-red .profile-notification li:focus > a, .pcoded-header.header-red .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-red .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-red .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-red .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-red .dropdown-menu > li.active, .pcoded-header.header-red .dropdown-menu > li:active, .pcoded-header.header-red .dropdown-menu > li:focus, .pcoded-header.header-red .dropdown-menu > li:hover {
    background: rgba(231, 76, 60, 0.1);
    color: #373a3c;
}

.pcoded-header.header-red .dropdown-menu > li.active > a, .pcoded-header.header-red .dropdown-menu > li:active > a, .pcoded-header.header-red .dropdown-menu > li:focus > a, .pcoded-header.header-red .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-red .input-group .input-group-text,
  .pcoded-header.header-red a,
  .pcoded-header.header-red dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-red .input-group .input-group-text:hover,
    .pcoded-header.header-red a:hover,
    .pcoded-header.header-red dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-red .input-group .input-group-text,
      .pcoded-header.header-red a,
      .pcoded-header.header-red dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-red .input-group .input-group-text:hover,
        .pcoded-header.header-red a:hover,
        .pcoded-header.header-red dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-red .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-red .main-search .search-close > .input-group-text {
    color: #e74c3c;
}

.pcoded-header.header-red .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-red .main-search.open .input-group {
        background: #e9e9e9;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-red .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-red .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-red .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-red .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-red .main-search.open .input-group .search-btn {
    background: #e74c3c;
    border-color: #e74c3c;
}

.pcoded-header.header-red .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-red .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-red .dropdown .notification .noti-body li.notification:hover {
    background: rgba(231, 76, 60, 0.1);
}

.pcoded-header.header-red .dropdown .profile-notification .pro-head {
    color: #fff;
    background: #e74c3c;
}

.pcoded-header.header-red .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-red .b-bg {
    background: #fff;
    color: #e74c3c;
}

.pcoded-header.header-purple {
    background: #536dfe;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-purple .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-purple .profile-notification li.active, .pcoded-header.header-purple .profile-notification li:active, .pcoded-header.header-purple .profile-notification li:focus, .pcoded-header.header-purple .profile-notification li:hover {
    background: rgba(83, 109, 254, 0.1);
}

.pcoded-header.header-purple .profile-notification li.active > a, .pcoded-header.header-purple .profile-notification li:active > a, .pcoded-header.header-purple .profile-notification li:focus > a, .pcoded-header.header-purple .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-purple .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-purple .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-purple .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-purple .dropdown-menu > li.active, .pcoded-header.header-purple .dropdown-menu > li:active, .pcoded-header.header-purple .dropdown-menu > li:focus, .pcoded-header.header-purple .dropdown-menu > li:hover {
    background: rgba(83, 109, 254, 0.1);
    color: #373a3c;
}

.pcoded-header.header-purple .dropdown-menu > li.active > a, .pcoded-header.header-purple .dropdown-menu > li:active > a, .pcoded-header.header-purple .dropdown-menu > li:focus > a, .pcoded-header.header-purple .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-purple .input-group .input-group-text,
  .pcoded-header.header-purple a,
  .pcoded-header.header-purple dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-purple .input-group .input-group-text:hover,
    .pcoded-header.header-purple a:hover,
    .pcoded-header.header-purple dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-purple .input-group .input-group-text,
      .pcoded-header.header-purple a,
      .pcoded-header.header-purple dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-purple .input-group .input-group-text:hover,
        .pcoded-header.header-purple a:hover,
        .pcoded-header.header-purple dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-purple .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-purple .main-search .search-close > .input-group-text {
    color: #536dfe;
}

.pcoded-header.header-purple .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-purple .main-search.open .input-group {
        background: #e9e9e9;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-purple .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-purple .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-purple .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-purple .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-purple .main-search.open .input-group .search-btn {
    background: #536dfe;
    border-color: #536dfe;
}

.pcoded-header.header-purple .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-purple .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-purple .dropdown .notification .noti-body li.notification:hover {
    background: rgba(83, 109, 254, 0.1);
}

.pcoded-header.header-purple .dropdown .profile-notification .pro-head {
    color: #fff;
    background: #536dfe;
}

.pcoded-header.header-purple .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-purple .b-bg {
    background: #fff;
    color: #536dfe;
}

.pcoded-header.header-info {
    background: #3498db;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-info .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-info .profile-notification li.active, .pcoded-header.header-info .profile-notification li:active, .pcoded-header.header-info .profile-notification li:focus, .pcoded-header.header-info .profile-notification li:hover {
    background: rgba(52, 152, 219, 0.1);
}

.pcoded-header.header-info .profile-notification li.active > a, .pcoded-header.header-info .profile-notification li:active > a, .pcoded-header.header-info .profile-notification li:focus > a, .pcoded-header.header-info .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-info .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-info .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-info .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-info .dropdown-menu > li.active, .pcoded-header.header-info .dropdown-menu > li:active, .pcoded-header.header-info .dropdown-menu > li:focus, .pcoded-header.header-info .dropdown-menu > li:hover {
    background: rgba(52, 152, 219, 0.1);
    color: #373a3c;
}

.pcoded-header.header-info .dropdown-menu > li.active > a, .pcoded-header.header-info .dropdown-menu > li:active > a, .pcoded-header.header-info .dropdown-menu > li:focus > a, .pcoded-header.header-info .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-info .input-group .input-group-text,
  .pcoded-header.header-info a,
  .pcoded-header.header-info dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-info .input-group .input-group-text:hover,
    .pcoded-header.header-info a:hover,
    .pcoded-header.header-info dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-info .input-group .input-group-text,
      .pcoded-header.header-info a,
      .pcoded-header.header-info dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-info .input-group .input-group-text:hover,
        .pcoded-header.header-info a:hover,
        .pcoded-header.header-info dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-info .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-info .main-search .search-close > .input-group-text {
    color: #3498db;
}

.pcoded-header.header-info .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-info .main-search.open .input-group {
        background: #e9e9e9;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-info .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-info .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-info .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-info .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-info .main-search.open .input-group .search-btn {
    background: #3498db;
    border-color: #3498db;
}

.pcoded-header.header-info .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-info .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-info .dropdown .notification .noti-body li.notification:hover {
    background: rgba(52, 152, 219, 0.1);
}

.pcoded-header.header-info .dropdown .profile-notification .pro-head {
    color: #fff;
    background: #3498db;
}

.pcoded-header.header-info .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-info .b-bg {
    background: #fff;
    color: #3498db;
}

.pcoded-header.header-green {
    background: #2ecc71;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-green .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-green .profile-notification li.active, .pcoded-header.header-green .profile-notification li:active, .pcoded-header.header-green .profile-notification li:focus, .pcoded-header.header-green .profile-notification li:hover {
    background: rgba(46, 204, 113, 0.1);
}

.pcoded-header.header-green .profile-notification li.active > a, .pcoded-header.header-green .profile-notification li:active > a, .pcoded-header.header-green .profile-notification li:focus > a, .pcoded-header.header-green .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-green .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-green .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-green .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-green .dropdown-menu > li.active, .pcoded-header.header-green .dropdown-menu > li:active, .pcoded-header.header-green .dropdown-menu > li:focus, .pcoded-header.header-green .dropdown-menu > li:hover {
    background: rgba(46, 204, 113, 0.1);
    color: #373a3c;
}

.pcoded-header.header-green .dropdown-menu > li.active > a, .pcoded-header.header-green .dropdown-menu > li:active > a, .pcoded-header.header-green .dropdown-menu > li:focus > a, .pcoded-header.header-green .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-green .input-group .input-group-text,
  .pcoded-header.header-green a,
  .pcoded-header.header-green dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-green .input-group .input-group-text:hover,
    .pcoded-header.header-green a:hover,
    .pcoded-header.header-green dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-green .input-group .input-group-text,
      .pcoded-header.header-green a,
      .pcoded-header.header-green dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-green .input-group .input-group-text:hover,
        .pcoded-header.header-green a:hover,
        .pcoded-header.header-green dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-green .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-green .main-search .search-close > .input-group-text {
    color: #2ecc71;
}

.pcoded-header.header-green .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-green .main-search.open .input-group {
        background: #e9e9e9;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-green .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-green .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-green .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-green .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-green .main-search.open .input-group .search-btn {
    background: #2ecc71;
    border-color: #2ecc71;
}

.pcoded-header.header-green .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-green .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-green .dropdown .notification .noti-body li.notification:hover {
    background: rgba(46, 204, 113, 0.1);
}

.pcoded-header.header-green .dropdown .profile-notification .pro-head {
    color: #fff;
    background: #2ecc71;
}

.pcoded-header.header-green .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-green .b-bg {
    background: #fff;
    color: #2ecc71;
}

.pcoded-header.header-dark {
    /*background: #1a5962;*/
    background: #07717f;
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-dark .profile-notification li > a {
    color: #373a3c;
}

.pcoded-header.header-dark .profile-notification li.active, .pcoded-header.header-dark .profile-notification li:active, .pcoded-header.header-dark .profile-notification li:focus, .pcoded-header.header-dark .profile-notification li:hover {
    background: rgba(44, 62, 80, 0.1);
}

.pcoded-header.header-dark .profile-notification li.active > a, .pcoded-header.header-dark .profile-notification li:active > a, .pcoded-header.header-dark .profile-notification li:focus > a, .pcoded-header.header-dark .profile-notification li:hover > a {
    background: transparent;
}

.pcoded-header.header-dark .dropdown-menu {
    color: #373a3c;
}

.pcoded-header.header-dark .dropdown-menu a {
    color: #373a3c;
}

.pcoded-header.header-dark .dropdown-menu > li > a {
    color: #373a3c;
}

.pcoded-header.header-dark .dropdown-menu > li.active, .pcoded-header.header-dark .dropdown-menu > li:active, .pcoded-header.header-dark .dropdown-menu > li:focus, .pcoded-header.header-dark .dropdown-menu > li:hover {
    background: rgba(44, 62, 80, 0.1);
    color: #373a3c;
}

.pcoded-header.header-dark .dropdown-menu > li.active > a, .pcoded-header.header-dark .dropdown-menu > li:active > a, .pcoded-header.header-dark .dropdown-menu > li:focus > a, .pcoded-header.header-dark .dropdown-menu > li:hover > a {
    background: transparent;
}

.pcoded-header.header-dark .input-group .input-group-text,
  .pcoded-header.header-dark a,
  .pcoded-header.header-dark dropdown-toggle {
    color: rgba(255, 255, 255, 0.8);
}

.pcoded-header.header-dark .input-group .input-group-text:hover,
    .pcoded-header.header-dark a:hover,
    .pcoded-header.header-dark dropdown-toggle:hover {
    color: #fff;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-dark .input-group .input-group-text,
      .pcoded-header.header-dark a,
      .pcoded-header.header-dark dropdown-toggle {
        color: #535763;
    }

    .pcoded-header.header-dark .input-group .input-group-text:hover,
        .pcoded-header.header-dark a:hover,
        .pcoded-header.header-dark dropdown-toggle:hover {
        color: #3c3f47;
    }
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-dark .m-header > a {
        color: #fff;
    }
}

.pcoded-header.header-dark .main-search .search-close > .input-group-text {
    color: #2c3e50;
}

.pcoded-header.header-dark .main-search.open .input-group {
    background: rgba(255, 255, 255, 0.25);
    border: 0 solid rgba(255, 255, 255, 0.25);
    padding: 2px 2px 2px 20px;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.header-dark .main-search.open .input-group {
        background: #e9e9e9;
    }
}

@media only screen and (min-width: 992px) {
    .pcoded-header.header-dark .main-search.open .input-group .form-control {
        color: #fff;
    }

    .pcoded-header.header-dark .main-search.open .input-group .form-control::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }

    .pcoded-header.header-dark .main-search.open .input-group .form-control:-ms-input-placeholder {
        color: #fff;
    }

    .pcoded-header.header-dark .main-search.open .input-group .form-control::-webkit-input-placeholder {
        color: #fff;
    }
}

.pcoded-header.header-dark .main-search.open .input-group .search-btn {
    background: #2c3e50;
    border-color: #2c3e50;
}

.pcoded-header.header-dark .main-search.open .input-group .search-btn .input-group-text {
    color: #fff;
}

.pcoded-header.header-dark .dropdown .notification .noti-head a {
    color: #fff;
}

.pcoded-header.header-dark .dropdown .notification .noti-body li.notification:hover {
    background: rgba(44, 62, 80, 0.1);
}

.pcoded-header.header-dark .dropdown .profile-notification .pro-head {
    color: #fff;
    background: #2c3e50;
}

.pcoded-header.header-dark .dropdown .profile-notification .pro-head .dud-logout {
    color: #fff;
}

.pcoded-header.header-dark .b-bg {
    background: #fff;
    color: #2c3e50;
}

body.background-blue {
    background: #1abc9c;
}

body.background-blue .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #1abc9c;
}

body.background-red {
    background: #e74c3c;
}

body.background-red .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #e74c3c;
}

body.background-purple {
    background: #536dfe;
}

body.background-purple .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #536dfe;
}

body.background-info {
    background: #3498db;
}

body.background-info .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #3498db;
}

body.background-green {
    background: #2ecc71;
}

body.background-green .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #2ecc71;
}

body.background-dark {
    background: #2c3e50;
}

body.background-dark .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: #2c3e50;
}

body.background-grd-blue {
    background: linear-gradient(to right, #1abc9c 0%, #00f2fe 100%);
}

body.background-grd-blue .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #1abc9c 0%, #00f2fe 100%);
}

body.background-grd-red {
    background: linear-gradient(to right, #e74c3c 0%, #ff9a44 100%);
}

body.background-grd-red .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #e74c3c 0%, #ff9a44 100%);
}

body.background-grd-purple {
    background: linear-gradient(to right, #536dfe 0%, #00adff 100%);
}

body.background-grd-purple .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #536dfe 0%, #00adff 100%);
}

body.background-grd-info {
    background: linear-gradient(to right, #3498db 0%, #22e1ff 100%);
}

body.background-grd-info .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #3498db 0%, #22e1ff 100%);
}

body.background-grd-green {
    background: linear-gradient(to right, #2ecc71 0%, #00e3ae 100%);
}

body.background-grd-green .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #2ecc71 0%, #00e3ae 100%);
}

body.background-grd-dark {
    background: linear-gradient(to right, #2c3e50 0%, #1f3054 100%);
}

body.background-grd-dark .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background: linear-gradient(to right, #2c3e50 0%, #1f3054 100%);
}

body[class*='background-img-'] {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top right;
    background-attachment: fixed;
}

body[class*='background-img-'] .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top right;
    background-attachment: fixed;
}

body.background-img-1 {
    background-image: url("../images/nav-bg/body-bg-1.jpg");
}

body.background-img-1 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-1.jpg");
}

body.background-img-2 {
    background-image: url("../images/nav-bg/body-bg-2.jpg");
}

body.background-img-2 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-2.jpg");
}

body.background-img-3 {
    background-image: url("../images/nav-bg/body-bg-3.jpg");
}

body.background-img-3 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-3.jpg");
}

body.background-img-4 {
    background-image: url("../images/nav-bg/body-bg-4.jpg");
}

body.background-img-4 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-4.jpg");
}

body.background-img-5 {
    background-image: url("../images/nav-bg/body-bg-5.jpg");
}

body.background-img-5 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-5.jpg");
}

body.background-img-6 {
    background-image: url("../images/nav-bg/body-bg-6.jpg");
}

body.background-img-6 .pcoded-navbar.theme-horizontal ~ .pcoded-header[class*="header-"] {
    background-image: url("../images/nav-bg/body-bg-6.jpg");
}

/* ====== [ Header color end ] ======== */
/* ====== [ Brand color start ] ======== */
.pcoded-header[class*="brand-"]:not(.brand-default) .mobile-menu span,
.pcoded-header[class*="brand-"]:not(.brand-default) .mobile-menu span:after,
.pcoded-header[class*="brand-"]:not(.brand-default) .mobile-menu span:before {
    background: #fff;
}

.pcoded-header[class*="brand-"]:not(.brand-default) .mobile-menu.on span {
    background: transparent;
}

.pcoded-header[class*="brand-"]:not(.brand-default) .b-bg {
    background: #fff;
    color: #1abc9c;
}

.pcoded-header.brand-blue .m-header,
.pcoded-header[class*="header-"].brand-blue .m-header {
    background: #1abc9c;
}

.pcoded-header.brand-blue .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-blue .m-header .b-bg {
    background: #fff;
    color: #1abc9c;
}

.pcoded-header.brand-red .m-header,
.pcoded-header[class*="header-"].brand-red .m-header {
    background: #e74c3c;
}

.pcoded-header.brand-red .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-red .m-header .b-bg {
    background: #fff;
    color: #e74c3c;
}

.pcoded-header.brand-purple .m-header,
.pcoded-header[class*="header-"].brand-purple .m-header {
    background: #536dfe;
}

.pcoded-header.brand-purple .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-purple .m-header .b-bg {
    background: #fff;
    color: #536dfe;
}

.pcoded-header.brand-info .m-header,
.pcoded-header[class*="header-"].brand-info .m-header {
    background: #3498db;
}

.pcoded-header.brand-info .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-info .m-header .b-bg {
    background: #fff;
    color: #3498db;
}

.pcoded-header.brand-green .m-header,
.pcoded-header[class*="header-"].brand-green .m-header {
    background: #2ecc71;
}

.pcoded-header.brand-green .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-green .m-header .b-bg {
    background: #fff;
    color: #2ecc71;
}

.pcoded-header.brand-dark .m-header,
.pcoded-header[class*="header-"].brand-dark .m-header {
    background: #2c3e50;
}

.pcoded-header.brand-dark .m-header .b-bg,
  .pcoded-header[class*="header-"].brand-dark .m-header .b-bg {
    background: #1abc9c;
    color: #fff;
}

.pcoded-header.brand-default .header-logo,
.pcoded-header[class*="header-"].brand-default .header-logo {
    background: #2c3e50;
}

/* ====== [ Brand color end ] ======== */
/* ====== [ Menu background images start ] ======== */
.pcoded-navbar[class*="navbar-image"] {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center bottom;
}

.pcoded-navbar[class*="navbar-image"] .navbar-brand,
  .pcoded-navbar[class*="navbar-image"] .pcoded-submenu {
    background: transparent;
}

.pcoded-navbar[class*="navbar-image"]:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(255, 255, 255, 0.7);
}

.pcoded-navbar.navbar-image-1 {
    background-image: url("../images/nav-bg/navbar-img-1.jpg");
}

/* ====== [ Menu background images end ] ========== */
/* ====== [ menu fixed start ] ======== */
.pcoded-navbar.menupos-fixed {
    position: fixed;
    height: 100vh;
    min-height: 100vh;
    border-radius: 0;
}

.pcoded-navbar.menupos-fixed .scroll-div.navbar-content {
    height: calc(100% - 56px);
    min-height: calc(100% - 56px);
}

/* ====== [ menu fixed end ] ======== */
/* ====== [ Header Fixed start ] ======== */
.pcoded-header.headerpos-fixed {
    position: fixed;
    top: 0;
}

.pcoded-header.headerpos-fixed ~ .pcoded-main-container {
    padding-top: 56px;
}

.pcoded-header.headerpos-fixed ~ .pcoded-main-container .page-header h5 {
    color: #37474f;
}

.pcoded-header.headerpos-fixed ~ .pcoded-main-container .page-header .page-header-title + .breadcrumb > .breadcrumb-item:before {
    color: rgba(55, 71, 79, 0.8);
}

.pcoded-header.headerpos-fixed ~ .pcoded-main-container .page-header .page-header-title + .breadcrumb > .breadcrumb-item a {
    color: #37474f;
}

@media only screen and (max-width: 991px) {
    .pcoded-header.headerpos-fixed ~ .pcoded-main-container {
        padding-top: 56px;
    }
}

/* ====== [Header Fixed  end ] ======== */
/* ====== [Box start ] ======== */
body.box-layout {
    position: static;
    background-size: auto;
}

body.box-layout .pcoded-header {
    position: relative;
}

body.box-layout .pcoded-header ~ .pcoded-main-container {
    padding-top: 0;
    background: #e9e9e9;
}

body.box-layout .pcoded-navbar {
    position: fixed;
    border-radius: 0;
    align-content: space-around;
    height: 100%;
}

body.box-layout .pcoded-navbar.theme-horizontal ~ .pcoded-header {
    position: relative;
}

@media only screen and (max-width: 992px) {
    body.box-layout {
        position: relative;
    }
}

@media only screen and (max-width: 992px) {
    .container {
        padding: 0;
    }
}

/* ====== [ Box end ] ======== */
.nav-tabs .nav-item {
    margin-bottom: 0;
}

.nav-tabs .nav-link {
    border: none;
    background: no-repeat center bottom, center 100%;
    background-size: 0 100%, 100% 100%;
    transition: background 0.3s ease-out;
    background-image: linear-gradient(to top, #1abc9c 2px, rgba(255, 255, 255, 0) 2px);
}

.nav-tabs .nav-link.active {
    background-size: 100% 100%, 100% 100%;
}

.page-item .page-link {
    border-radius: 60px;
    margin: 0 5px;
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 60px;
    border-bottom-left-radius: 60px;
}

.page-item:last-child .page-link {
    border-top-right-radius: 60px;
    border-bottom-right-radius: 60px;
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 60px;
    border-bottom-left-radius: 60px;
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 60px;
    border-bottom-right-radius: 60px;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 60px;
    border-bottom-left-radius: 60px;
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 60px;
    border-bottom-right-radius: 60px;
}

.social-card {
    color: #fff;
    overflow: hidden;
}

.social-card .social-icon {
    background-color: #fff;
    border-radius: 5px;
    text-align: center;
    padding: 22px 23px;
}

.social-card .download-icon {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.5);
    position: absolute;
    height: 125px;
    width: 125px;
    right: -125px;
    font-size: 35px;
    padding: 40px 22px;
    border-radius: 50%;
    transition: all 0.3s ease-in-out;
}

.social-card:hover .download-icon {
    right: -60px;
}

.total-card {
    overflow: hidden;
}

.total-card .text-left h4 {
    color: #fff;
    font-weight: 400;
    margin-bottom: 5px;
}

.total-card .text-left p {
    color: #fff;
    font-size: 15px;
}

.table-card .card-body {
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
}

.table-card .card-body .table > thead > tr > th {
    border-top: 0;
}

.table-card .card-body .table .chk-option {
    vertical-align: middle;
    width: 30px;
    display: inline-block;
}

.table-card .card-body .table .chk-option .checkbox-fade,
    .table-card .card-body .table .chk-option .checkbox-fade .cr,
    .table-card .card-body .table .chk-option .checkbox-zoom,
    .table-card .card-body .table .chk-option .checkbox-zoom .cr {
    margin-right: 0;
}

.table-card .card-body .table label {
    margin-bottom: 0;
}

.table-card .card-body .table tr td:first-child,
  .table-card .card-body .table tr th:first-child {
    padding-left: 20px;
}

.table-card .card-body .table tr td:last-child,
  .table-card .card-body .table tr th:last-child {
    padding-right: 20px;
}

.latest-update-card .card-body {
    padding-top: 0;
}

.latest-update-card .card-body .latest-update-box {
    position: relative;
}

.latest-update-card .card-body .latest-update-box td {
    border-top: none;
}

.latest-update-card .card-body .latest-update-box:after {
    content: "";
    position: absolute;
    background: #e2e5e8;
    height: 100%;
    width: 1px;
    top: 0;
    left: 110px;
    z-index: 1;
}

.latest-update-card .card-body .latest-update-box .update-meta {
    z-index: 2;
    min-width: 160px;
}

.latest-update-card .card-body .latest-update-box .update-meta .update-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    padding: 12px 13px;
    font-size: 16px;
    color: #fff;
    margin-left: 10px;
}

@media only screen and (max-width: 575px) {
    .latest-update-card .card-body .latest-update-box:after {
        display: none;
    }

    .latest-update-card .card-body .latest-update-box .update-meta {
        z-index: 2;
        min-width: 100%;
        text-align: left !important;
        margin-bottom: 15px;
        border-top: 1px solid #f1f1f1;
        padding-top: 30px;
    }
}

.review-card .review-block .cust-img {
    width: 50px;
    height: 50px;
}

.review-card .review-block > div {
    padding-top: 25px;
    padding-bottom: 25px;
    margin-left: 0;
    margin-right: 0;
    padding-left: 5px;
    padding-right: 5px;
}

.review-card .review-block > div:hover {
    background-color: rgba(26, 188, 156, 0.1);
}

.to-do-list {
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.to-do-list i {
    color: #ccc;
    font-size: 17px;
    opacity: 0;
}

.to-do-list:last-child {
    border: none;
    padding: 0;
    margin: 0;
}

.to-do-list:hover i {
    opacity: 1;
    transition: opacity ease-in 0.3s;
}

.to-do-list p {
    display: inline-block;
}

.to-do-label .checkbox-fade {
    display: block;
}

.to-do-label .checkbox-fade .delete_todo {
    float: right;
    font-size: 24px;
    color: #ccc;
}

.to-do-label .check-task {
    display: block;
}

.to-do-label i {
    cursor: pointer;
}

.done-task .captions,
.done-task span {
    color: #919aa3;
    text-decoration: line-through;
}

.trafic-card .progress {
    height: 7px;
}

.trafic-card .progress.blue {
    background-color: rgba(26, 188, 156, 0.5);
}

.trafic-card .progress.green {
    background-color: rgba(46, 204, 113, 0.5);
}

.trafic-card .progress.red {
    background-color: rgba(231, 76, 60, 0.5);
}

.trafic-card .progress.purple {
    background-color: rgba(83, 109, 254, 0.5);
}

.trafic-card .progress.yellow {
    background-color: rgba(241, 196, 15, 0.5);
}

.user-activity-card .u-img {
    position: relative;
}

.user-activity-card .u-img .cover-img {
    width: 40px;
    height: 40px;
}

.user-activity-card .u-img .profile-img {
    width: 20px;
    height: 20px;
    position: absolute;
    bottom: 0;
    right: -5px;
}

.user-Messages-card .u-img {
    position: relative;
}

.user-Messages-card .u-img .profile-img {
    width: 40px;
    height: 40px;
}

.user-Messages-card .u-img .tot-msg {
    width: 15px;
    height: 15px;
    position: absolute;
    bottom: 0;
    right: -5px;
    background-color: #e74c3c;
    color: #fff;
    font-size: 10px;
    border-radius: 50%;
    text-align: center;
}

.latest-posts-card .latest-posts-img {
    width: 90px;
    height: 80px;
}

.task-card .task-list {
    position: relative;
}

.task-card .task-list:after {
    content: "";
    position: absolute;
    background: #e2e5e8;
    height: 100%;
    width: 2px;
    top: 0;
    left: 10px;
    z-index: 1;
}

.task-card .task-list:before {
    content: "";
    position: absolute;
    background: #e2e5e8;
    height: 15px;
    width: 15px;
    bottom: -14px;
    left: 3px;
    z-index: 2;
    border-radius: 50%;
}

.task-card .task-list li {
    margin-bottom: 30px;
    padding-left: 30px;
    position: relative;
}

.task-card .task-list li .task-icon {
    position: absolute;
    left: 3px;
    top: 1px;
    border-radius: 50%;
    padding: 2px;
    color: #fff;
    min-width: 15px;
    min-height: 15px;
    z-index: 2;
}

.widget-primary-card.flat-card, .flat-card.widget-purple-card {
    border-top: none;
    background-color: #1abc9c;
    color: #fff;
}

.widget-primary-card.flat-card h4, .flat-card.widget-purple-card h4,
  .widget-primary-card.flat-card h6,
  .flat-card.widget-purple-card h6 {
    color: #fff;
}

.widget-primary-card.flat-card .row-table:first-child, .flat-card.widget-purple-card .row-table:first-child {
    border-bottom: none;
}

.widget-primary-card.flat-card .row-table > [class*=col-], .flat-card.widget-purple-card .row-table > [class*=col-] {
    display: inline-block;
    vertical-align: middle;
}

.widget-primary-card.flat-card .row-table > [class*=col-]:first-child, .flat-card.widget-purple-card .row-table > [class*=col-]:first-child {
    background-color: #17a689;
    text-align: center;
}

.widget-primary-card.flat-card .row-table > [class*=col-] .row, .flat-card.widget-purple-card .row-table > [class*=col-] .row {
    display: flex;
    align-items: center;
}

.widget-purple-card.flat-card {
    background-color: #2ecc71;
}

.widget-purple-card.flat-card .row-table:first-child {
    border-bottom: none;
}

.widget-purple-card.flat-card .row-table > [class*=col-]:first-child {
    background-color: #29b765;
}

.latest-activity-card .card-body {
    padding-top: 0;
}

.latest-activity-card .card-body .latest-update-box {
    position: relative;
}

.latest-activity-card .card-body .latest-update-box .update-meta {
    z-index: 2;
    min-width: 160px;
}

.latest-activity-card .card-body .latest-update-box .update-meta .update-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    padding: 12px 13px;
    font-size: 16px;
    color: #fff;
    margin-left: 10px;
}

@media only screen and (max-width: 575px) {
    .latest-activity-card .card-body .latest-update-box .update-meta {
        z-index: 2;
        min-width: 100%;
        text-align: left !important;
        margin-bottom: 15px;
        border-top: 1px solid #f1f1f1;
        padding-top: 30px;
    }
}

.feed-card h6 {
    margin-top: 7px;
}

.feed-card .feed-icon {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 8px;
}

.latest-activity-card .table td {
    vertical-align: middle;
}

.order-visitor-card {
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.order-visitor-card h4,
  .order-visitor-card h6,
  .order-visitor-card p {
    transition: all 0.3s ease-in-out;
}

.form-icon {
    position: absolute;
    bottom: 8px;
    right: 8px;
}

.form-icon .btn.btn-icon {
    width: 35px;
    height: 35px;
}

.widget-statstic-card {
    position: relative;
    overflow: hidden;
}

.widget-statstic-card .st-icon {
    color: #fff;
    font-size: 23px;
    padding: 40px 40px 20px 20px;
    border-radius: 50%;
    position: absolute;
    top: -30px;
    right: -30px;
    transition: all 0.3s ease-in-out;
}

.widget-statstic-card h2 {
    font-weight: 600;
    display: inline-block;
}

.widget-statstic-card span {
    border-radius: 30px;
    padding: 5px 20px;
    color: #fff;
    font-weight: 600;
}

.widget-statstic-card:hover .st-icon {
    font-size: 50px;
}

.widget-visitor-card {
    overflow: hidden;
    padding: 10px 0;
}

.widget-visitor-card i {
    color: #fff;
    font-size: 80px;
    position: absolute;
    bottom: -10px;
    opacity: 0.3;
    left: -10px;
    transform: rotate(15deg);
    transition: all 0.3s ease-in-out;
}

.widget-visitor-card:hover i {
    transform: rotate(0deg) scale(1.4);
    opacity: 0.5;
}

.app-design .btn {
    padding: 5px 8px;
    font-size: 12px;
    font-weight: 600;
    border-radius: 5px;
}

.app-design .team-section img {
    width: 35px;
    border-radius: 5px;
}

.app-design .progress-box p {
    margin-bottom: 0;
}

.app-design .progress-box .progress {
    width: calc(100% - 80px);
    height: 8px;
    text-align: center;
    margin: 0 auto;
    background-color: #E5E5E5;
    border-radius: 30px;
    position: relative;
    overflow: inherit;
}

.app-design .progress-box .progress .progress-bar {
    border-radius: 30px;
}

.app-design .progress-box .progress .progress-bar label {
    position: absolute;
    top: -24px;
    right: 0;
    font-weight: 600;
    font-size: 13px;
}

.order-card {
    color: #fff;
    overflow: hidden;
}

.order-card .card-icon {
    position: absolute;
    right: -17px;
    font-size: 100px;
    top: 20px;
    opacity: 0.5;
}

.statustic-card .card-body {
    position: relative;
}

.statustic-card .card-body .progress {
    position: absolute;
    bottom: 0;
    width: 100%;
    left: 0;
    height: 5px;
    overflow: visible;
}

.statustic-card .card-body .progress .progress-bar {
    position: relative;
}

.statustic-card .card-body .progress .progress-bar:before {
    content: "";
    height: 5px;
    width: 5px;
    border-radius: 50%;
    position: absolute;
    right: 0;
    background: inherit;
}

.statustic-card .card-body .progress .progress-bar.bg-c-blue:before {
    -webkit-animation: blue-blink-bar 0.5s linear infinite;
    animation: blue-blink-bar 0.5s linear infinite;
}

.statustic-card .card-body .progress .progress-bar.bg-c-green:before {
    -webkit-animation: green-blink-bar 0.5s linear infinite;
    animation: green-blink-bar 0.5s linear infinite;
}

.statustic-card .card-body .progress .progress-bar.bg-c-red:before {
    -webkit-animation: red-blink-bar 0.5s linear infinite;
    animation: red-blink-bar 0.5s linear infinite;
}

.statustic-card .card-body .progress .progress-bar.bg-c-yellow:before {
    -webkit-animation: yellow-blink-bar 0.5s linear infinite;
    animation: yellow-blink-bar 0.5s linear infinite;
}

@-webkit-keyframes blue-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(26, 188, 156, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(26, 188, 156, 0.3);
    }
}

@keyframes blue-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(26, 188, 156, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(26, 188, 156, 0.3);
    }
}

@-webkit-keyframes green-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(46, 204, 113, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(46, 204, 113, 0.3);
    }
}

@keyframes green-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(46, 204, 113, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(46, 204, 113, 0.3);
    }
}

@-webkit-keyframes red-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(231, 76, 60, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(231, 76, 60, 0.3);
    }
}

@keyframes red-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(231, 76, 60, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(231, 76, 60, 0.3);
    }
}

@-webkit-keyframes yellow-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(241, 196, 15, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(241, 196, 15, 0.3);
    }
}

@keyframes yellow-blink-bar {
    0% {
        box-shadow: 0 0 0 0 rgba(241, 196, 15, 0.1);
    }

    50% {
        box-shadow: 0 0 0 6px rgba(241, 196, 15, 0.3);
    }
}

.statustic-progress-card .progress {
    height: 5px;
}

.client-map img {
    vertical-align: top;
    width: 90px;
}

.client-map .client-detail {
    margin-bottom: 20px;
}

.client-map .client-detail img {
    border-radius: 5px;
}

.client-map .client-profile {
    float: left;
}

.client-map .client-contain {
    display: inline-block;
    margin-left: 20px;
}

.client-map .client-contain h5 {
    display: block;
    text-transform: capitalize;
    font-weight: 600;
    font-size: 18px;
    padding-bottom: 10px;
}

.client-map .client-card-box {
    border: 1px solid #ccc;
    border-radius: 5px;
}

.client-map .client-card-box .client-border {
    border-right: 1px solid #ccc;
}

.client-map .client-card-box .client-border-card {
    border-top: 1px solid #ccc;
}

.flat-card .row-table {
    display: table;
    align-items: center;
    table-layout: fixed;
    height: 100%;
    width: 100%;
    margin: 0;
}

.flat-card .row-table:first-child {
    border-bottom: 1px solid #ddd;
}

/*.flat-card .row-table .br {
    border-right: 1px solid #ccc;
}*/

.flat-card .row-table i {
    font-size: 28px;
}

.flat-card .row-table span {
    text-transform: uppercase;
    font-size: 12px;
}

.flat-card .row-table h5 {
    display: block;
    margin-bottom: 0.3em;
    margin-right: 0;
}

.flat-card .row-table > [class*=col-] {
    display: table-cell;
    float: none;
    table-layout: fixed;
    vertical-align: middle;
}

.flat-card .row-table > [class*=col-] .row {
    display: flex;
    align-items: center;
}

.flat-card[class*="widget-"] .row-table {
    display: flex;
}

.table-card .card-body {
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
}

.table-card .card-body .table > thead > tr > th {
    border-top: 0;
}

.table-card .card-body .table tr td:first-child,
  .table-card .card-body .table tr th:first-child {
    padding-left: 25px;
}

.table-card .card-body .table tr td:last-child,
  .table-card .card-body .table tr th:last-child {
    padding-right: 25px;
}

.table-card .card-body .table.without-header tr:first-child td {
    border-top: none;
}

.stastic-slider-full-card .carousel-item {
    transition: transform 12s linear;
}

.statstic-data-card .active.carousel-item-right,
.statstic-data-card .carousel-item-next:not(.carousel-item-left) {
    transform: translateY(100%);
}

.statstic-data-card .active.carousel-item-left,
.statstic-data-card .carousel-item-prev:not(.carousel-item-right) {
    transform: translateY(-100%);
}

.statstic-data-card .card-body {
    border-top: 2px solid transparent;
}

.statstic-data-card .card-body.level-down {
    border-color: #e74c3c;
}

.statstic-data-card .card-body.level-up {
    border-color: #2ecc71;
}

.social-widget-card {
    border-top: none;
    color: #fff;
}

.social-widget-card:hover i {
    opacity: 1;
    transform: scale(1.1);
}

.social-widget-card i {
    position: absolute;
    right: 10px;
    bottom: 10px;
    font-size: 48px;
    opacity: 0.4;
    transition: all ease-in 0.3s;
}

.ticket-card .lbl-card {
    border-radius: 50px;
    padding: 5px 15px;
    display: inline-block;
}

.widget-profile-card-1 {
    position: relative;
    margin-bottom: 50px;
}

.widget-profile-card-1 .middle-user {
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    bottom: -60px;
}

.widget-profile-card-1 .middle-user img {
    width: 115px;
    border-radius: 50%;
}

.widget-profile-card-1 ~ .card-footer [class*=col-] {
    border-right: 1px solid #fff;
}

.widget-profile-card-1 ~ .card-footer [class*=col-]:last-child {
    border: none;
}

@media only screen and (max-width: 767px) {
    .widget-profile-card-1 ~ .card-footer [class*=col-]:nth-child(2) {
        border: 0;
    }

    .widget-profile-card-1 ~ .card-footer [class*=col-]:last-child {
        margin-top: 10px;
    }
}

.widget-profile-card-2 img.user-img {
    width: 115px;
}

.widget-profile-card-2 a {
    color: #fff;
    transition: all ease-in 0.3s;
}

.widget-profile-card-2 a:hover {
    opacity: 0.7;
}

.widget-profile-card-3 {
    background-image: url("../images/widget/slider5.jpg");
    background-size: cover;
    padding: 50px 0;
    text-align: center;
}

.widget-profile-card-3 img {
    width: 120px;
    border-radius: 50%;
}

.profile-card {
    position: relative;
    min-height: 410px;
    overflow: hidden;
}

.profile-card img {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.profile-card .card-body {
    text-align: center;
    color: #fff;
    position: absolute;
    bottom: 0;
    text-align: center;
    width: 100%;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.72));
}

.profile-card .card-body h3 {
    font-weight: 600;
}

.profile-card ~ .card-footer [class*="col-"] {
    padding: 10px;
    border-right: 1px solid rgba(255, 255, 255, 0.57);
}

.profile-card ~ .card-footer [class*="col-"] h4 {
    font-size: 18px;
    font-weight: 600;
}

.profile-card ~ .card-footer [class*="col-"]:last-child {
    border: none;
}

.profile-card ~ .card-footer [class*="col-"] span {
    text-transform: uppercase;
}

@media only screen and (max-width: 767px) {
    .profile-card ~ .card-footer [class*="col-"]:nth-child(2) {
        border: none;
    }
}

.blur-user-card {
    color: #fff;
    text-align: center;
    padding-top: 45px;
    background-image: url("../images/widget/blur-bg.png");
    background-size: cover;
}

.blur-user-card h3 {
    margin-top: 10px;
    font-size: 30px;
    font-weight: 600;
}

.blur-user-card p {
    font-size: 18px;
    font-weight: 300;
}

.blur-user-card .blur-footer [class*="col-"] {
    padding: 1em;
    border-right: 1px solid #fff;
    margin-top: 30px;
    margin-bottom: 30px;
}

.blur-user-card .blur-footer [class*="col-"]:last-child {
    border-right: none;
}

@media only screen and (max-width: 767px) {
    .blur-user-card .blur-footer [class*="col-"]:nth-child(2) {
        border: 0;
    }

    .blur-user-card .blur-footer [class*="col-"]:last-child {
        margin-top: 0;
        padding-top: 0;
    }
}

.weather-bg-card {
    position: relative;
}

.weather-bg-card img {
    width: 100%;
}

.weather-bg-card .card-body {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
}

.weather-bg-card h5 {
    color: #fff;
}

.weather-bg-card .card-body.alt {
    position: absolute;
    top: 0;
}

.weather-bg-card .card-body.alt span {
    color: #fff;
}

.weather-bg-card .weather-temp {
    font-size: 70px;
    color: #fff;
}

.weather-bg-card ~ .card-footer {
    border-top: none;
}

@media only screen and (max-width: 575px) {
    .weather-bg-card ~ .card-footer [class*="col-"] {
        margin-bottom: 10px;
    }
}

.new-cust-card img {
    width: 40px;
}

.new-cust-card h6 {
    margin-bottom: 0;
}

.new-cust-card .align-middle {
    position: relative;
}

.new-cust-card .align-middle .status {
    position: absolute;
    right: 0;
    top: 19px;
    font-size: 13px;
}

.new-cust-card .align-middle .status.active {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #2ecc71;
}

.latest-update-card.update-card .card-body .latest-update-box:after {
    left: 19px;
}

.testimonial-card .progress {
    height: 5px;
}

.testimonial-card .review-block .cust-img {
    width: 40px;
    height: 40px;
}

.testimonial-card .review-block > div {
    padding-top: 15px;
    padding-bottom: 9px;
    margin-left: 0;
    margin-right: 0;
    padding-left: 5px;
    padding-right: 5px;
}

.testimonial-card .review-block > div:hover {
    background-color: rgba(26, 188, 156, 0.1);
}

.widget-chat-box .card-header i {
    font-size: 17px;
    color: #263238;
    position: relative;
}

.widget-chat-box .card-header .pop-up:after {
    content: '';
    position: absolute;
    background-color: #e74c3c;
    height: 8px;
    width: 8px;
    border-radius: 50px;
    right: -3px;
}

.widget-chat-box .send-chat, .widget-chat-box .receive-chat {
    position: relative;
    background: #81eed8;
    padding: 7px;
    border-radius: 0 10px 10px 10px;
    font-size: 13px;
    margin-bottom: 30px;
}

.widget-chat-box .send-chat:before, .widget-chat-box .receive-chat:before {
    content: '';
    position: absolute;
    height: 12px;
    width: 12px;
    border: 6px solid transparent;
    border-top: 6px solid #81eed8;
    border-right: 6px solid #81eed8;
    left: -12px;
    top: 0;
}

.widget-chat-box .send-chat .time, .widget-chat-box .receive-chat .time {
    position: absolute;
    bottom: -20px;
    left: 0;
}

.widget-chat-box .receive-chat {
    background-color: #1abc9c;
    color: #fff;
    border-radius: 10px;
}

.widget-chat-box .receive-chat:before {
    display: none;
}

.widget-chat-box .receive-chat .time {
    color: #666;
}

.widget-chat-box .rc-10 {
    margin-bottom: 10px;
}

.chat-card .msg {
    margin-bottom: 5px;
    display: inline-block;
    padding: 10px;
    position: relative;
}

.chat-card .msg img {
    width: 60px;
    border-radius: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
    margin-right: 10px;
}

.chat-card .received-chat .msg {
    background: #81eed8;
    border-radius: 0 5px 5px 5px;
}

.chat-card .received-chat .msg:after {
    content: "";
    position: absolute;
    left: -7px;
    top: -7px;
    transform: rotate(45deg);
    border: 7px solid transparent;
    border-bottom-color: #81eed8;
}

.chat-card .send-chat, .chat-card .widget-chat-box .receive-chat, .widget-chat-box .chat-card .receive-chat {
    text-align: right;
}

.chat-card .send-chat .msg, .chat-card .widget-chat-box .receive-chat .msg, .widget-chat-box .chat-card .receive-chat .msg {
    background: #1abc9c;
    color: #fff;
    border-radius: 5px 0 5px 5px;
}

.chat-card .send-chat .msg:after, .chat-card .widget-chat-box .receive-chat .msg:after, .widget-chat-box .chat-card .receive-chat .msg:after {
    content: "";
    position: absolute;
    right: -7px;
    top: -7px;
    transform: rotate(45deg);
    border: 7px solid transparent;
    border-right-color: #1abc9c;
}

.nav {
    position: relative;
    z-index: 1;
}

.feed-card h6 {
    margin-top: 7px;
    font-size: 14px;
}

.feed-card .feed-icon {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    color: #fff;
    text-align: center;
    padding: 8px 9px;
}

.mrr-card {
    position: relative;
}

.mrr-card .bottom-chart {
    bottom: 0;
}

.swal-icon--error {
    border-color: #e74c3c;
}

.swal-icon--error__line {
    background-color: #e74c3c;
}

.swal-icon--warning {
    border-color: #f1c40f;
}

.swal-icon--warning__body {
    background-color: #f1c40f;
}

.swal-icon--warning__dot {
    background-color: #f1c40f;
}

@-webkit-keyframes pulseWarning {
    0% {
        border-color: #f2ca27;
    }

    to {
        border-color: #f1c40f;
    }
}

@keyframes pulseWarning {
    0% {
        border-color: #f2ca27;
    }

    to {
        border-color: #f1c40f;
    }
}

.swal-icon--success {
    border-color: #2ecc71;
}

.swal-icon--success__ring {
    border: 4px solid rgba(46, 204, 113, 0.2);
}

.swal-icon--success__line {
    background-color: #2ecc71;
}

.swal-icon--info {
    border-color: #00acc1;
}

.swal-icon--info:after, .swal-icon--info:before {
    background-color: #00acc1;
}

.swal-title {
    color: rgba(0, 0, 0, 0.65);
}

.swal-text {
    color: rgba(0, 0, 0, 0.64);
}

.swal-button {
    background-color: #1abc9c;
}

.swal-button:not([disabled]):hover {
    background-color: #17a689;
}

.swal-button:active {
    background-color: #17a689;
}

.swal-button:focus {
    box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(26, 188, 156, 0.29);
}

.swal-button--cancel {
    color: #555;
    background-color: #efefef;
}

.swal-button--cancel:not([disabled]):hover {
    background-color: #e8e8e8;
}

.swal-button--cancel:active {
    background-color: #d7d7d7;
}

.swal-button--cancel:focus {
    box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, 0.29);
}

.swal-button--danger {
    background-color: #e74c3c;
}

.swal-button--danger:not([disabled]):hover {
    background-color: #e43725;
}

.swal-button--danger:active {
    background-color: #e43725;
}

.swal-button--danger:focus {
    box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(231, 76, 60, 0.29);
}

.swal-footer {
    text-align: center;
}

.swal-content__input:focus {
    border-color: rgba(26, 188, 156, 0.29);
}

.swal-content__textarea:focus {
    border-color: rgba(26, 188, 156, 0.29);
}

.lb-cancel {
    background: url("../images/loading.gif") no-repeat;
}

.lb-nav a.lb-prev {
    background: url("../images/prev.png") left 48% no-repeat;
}

.lb-nav a.lb-next {
    background: url("../images/next.png") right 48% no-repeat;
}

.lb-data .lb-caption a {
    color: #1abc9c;
}

.lb-data .lb-close {
    background: url("../images/close.png") top right no-repeat;
}

.alert-dismissable .close,
.alert-dismissible .close {
    color: inherit;
    text-shadow: none;
}

@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 40px 0;
    }

    to {
        background-position: 0 0;
    }
}

@keyframes progress-bar-stripes {
    from {
        background-position: 40px 0;
    }

    to {
        background-position: 0 0;
    }
}

.alert-inverse {
    background-color: #333;
    border-color: transparent;
    color: #fff;
}

.alert-inverse .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: #fff;
    text-shadow: none;
}

.alert-inverse .alert-link {
    color: #e6e6e6;
}

.growl-animated.alert-inverse {
    box-shadow: 0 0 5px rgba(51, 51, 51, 0.5);
}

.growl-animated.alert-info {
    box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
}

.growl-animated.alert-success {
    box-shadow: 0 0 5px rgba(46, 204, 113, 0.5);
}

.growl-animated.alert-warning {
    box-shadow: 0 0 5px rgba(241, 196, 15, 0.5);
}

.growl-animated.alert-danger {
    box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
}

[data-notify="progressbar"] {
    margin-bottom: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 5px;
}

[ui-pnotify].ui-pnotify.stack-bar-top {
    width: 100%;
}

[ui-pnotify].ui-pnotify.stack-bar-bottom {
    width: 100%;
}

[ui-pnotify].ui-pnotify .brighttheme-notice {
    background-color: #f8e287;
}

[ui-pnotify].ui-pnotify .brighttheme-notice div,
  [ui-pnotify].ui-pnotify .brighttheme-notice h4 {
    color: #614f06;
}

[ui-pnotify].ui-pnotify .brighttheme-info {
    background-color: #6bebd1;
}

[ui-pnotify].ui-pnotify .brighttheme-info div,
  [ui-pnotify].ui-pnotify .brighttheme-info h4 {
    color: #07362c;
}

[ui-pnotify].ui-pnotify .brighttheme-success {
    background-color: #93e7b6;
}

[ui-pnotify].ui-pnotify .brighttheme-success div,
  [ui-pnotify].ui-pnotify .brighttheme-success h4 {
    color: #124f2c;
}

[ui-pnotify].ui-pnotify .brighttheme-error {
    background-color: #f5b4ae;
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
}

[ui-pnotify].ui-pnotify .brighttheme-error div,
  [ui-pnotify].ui-pnotify .brighttheme-error h4 {
    color: danger(#e74c3c, 30%);
}

[ui-pnotify].ui-pnotify .brighttheme-icon-notice {
    background-color: #614f06;
    color: #f8e287;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-info {
    background-color: #07362c;
    color: #6bebd1;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-success {
    background-color: #124f2c;
    color: #93e7b6;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-error {
    width: 0;
    height: 0;
    font-size: 0;
    line-height: 0;
    border-radius: 0;
    border-left: 0.6rem solid transparent;
    border-right: 0.6rem solid transparent;
    border-bottom: 1.2rem solid danger(#e74c3c, 30%);
    color: #f5b4ae;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-error:after {
    position: absolute;
    top: 0.1rem;
    left: -.25rem;
    font-size: 0.9rem;
    font-weight: 700;
    line-height: 1.4rem;
    font-family: "Courier New", Courier, monospace;
    content: "!";
}

[ui-pnotify].ui-pnotify .brighttheme {
    border-radius: 0;
}

[ui-pnotify].ui-pnotify .brighttheme.ui-pnotify-container {
    padding: 1.3rem;
}

[ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-confirm,
[ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-text,
[ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-title {
    margin-left: 1.8rem;
}

[dir=rtl] [ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-confirm,
[dir=rtl] [ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-text,
[dir=rtl] [ui-pnotify].ui-pnotify-with-icon .brighttheme .ui-pnotify-title {
    margin-right: 1.8rem;
    margin-left: 0;
}

[ui-pnotify].ui-pnotify .brighttheme-icon-notice:after {
    content: "!";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-info:after {
    content: "i";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-success:after {
    content: "\002713";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-error:after {
    content: "!";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-closer:after {
    content: "\002715";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-sticker:after {
    top: -1px;
    content: "\002016";
}

[ui-pnotify].ui-pnotify .brighttheme-icon-sticker.brighttheme-icon-stuck:after {
    content: "\00003E";
}

.br-theme-bars-1to10 .br-widget a {
    background-color: #f9e8a0;
}

.br-theme-bars-1to10 .br-widget a.br-active, .br-theme-bars-1to10 .br-widget a.br-selected {
    background-color: #f1c40f;
}

.br-theme-bars-1to10 .br-widget .br-current-rating {
    color: #f1c40f;
}

.br-theme-bars-1to10 .br-readonly a.br-active, .br-theme-bars-1to10 .br-readonly a.br-selected {
    background-color: #f1c40f;
}

.br-theme-bars-1to10 .br-readonly .br-current-rating {
    color: #f7dc6f;
}

.br-theme-bars-horizontal .br-widget a {
    background-color: #f9e8a0;
}

.br-theme-bars-horizontal .br-widget a.br-active, .br-theme-bars-horizontal .br-widget a.br-selected {
    background-color: #f1c40f;
}

.br-theme-bars-horizontal .br-widget .br-current-rating {
    color: #f1c40f;
}

.br-theme-bars-horizontal .br-readonly a.br-active, .br-theme-bars-horizontal .br-readonly a.br-selected {
    background-color: #f9e8a0;
}

.br-theme-bars-horizontal .br-readonly .br-current-rating {
    color: #f9e8a0;
}

.br-theme-bars-movie .br-widget {
    height: auto;
}

.br-theme-bars-movie .br-widget a {
    background-color: #81eed8;
}

.br-theme-bars-movie .br-widget a.br-active, .br-theme-bars-movie .br-widget a.br-selected {
    background-color: #1abc9c;
}

.br-theme-bars-movie .br-widget .br-current-rating {
    color: #1abc9c;
}

.br-theme-bars-movie .br-readonly a.br-active, .br-theme-bars-movie .br-readonly a.br-selected {
    background-color: #55e7ca;
}

.br-theme-bars-movie .br-readonly .br-current-rating {
    color: #55e7ca;
}

.br-theme-bars-pill .br-widget a {
    background-color: #e6f9ee;
    color: #2ecc71;
}

.br-theme-bars-pill .br-widget a.br-active, .br-theme-bars-pill .br-widget a.br-selected {
    background-color: #2ecc71;
}

.br-theme-bars-pill .br-readonly a.br-active, .br-theme-bars-pill .br-readonly a.br-selected {
    background-color: #54d98c;
}

.br-theme-bars-reversed .br-widget a {
    background-color: #a8f5ff;
    color: #00acc1;
}

.br-theme-bars-reversed .br-widget a.br-active, .br-theme-bars-reversed .br-widget a.br-selected {
    background-color: #00acc1;
}

.br-theme-bars-reversed .br-widget .br-current-rating {
    color: #00acc1;
    width: 100%;
    padding: 0;
    margin-top: 15px;
}

.br-theme-bars-reversed .br-readonly a.br-active, .br-theme-bars-reversed .br-readonly a.br-selected {
    background-color: #00d9f4;
}

.br-theme-bars-reversed .br-readonly .br-current-rating {
    color: #00d9f4;
}

.br-theme-bars-square .br-widget a {
    border: 2px solid #f5b4ae;
    color: #f5b4ae;
}

.br-theme-bars-square .br-widget a.br-active, .br-theme-bars-square .br-widget a.br-selected {
    border: 2px solid #e74c3c;
    color: #e74c3c;
}

.br-theme-bars-square .br-readonly a.br-active, .br-theme-bars-square .br-readonly a.br-selected {
    border: 2px solid #ed7669;
    color: #ed7669;
}

.br-theme-bootstrap-stars .br-widget a:after {
    color: #e1e1e1;
}

.br-theme-css-stars .br-widget a:after {
    color: #e1e1e1;
}

.br-theme-css-stars .br-widget a.br-active:after, .br-theme-css-stars .br-widget a.br-selected:after {
    color: #f1c40f;
}

.br-theme-fontawesome-stars .br-widget a {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 18px;
}

.br-theme-fontawesome-stars .br-widget a:after {
    content: "\f005";
    color: #e1e1e1;
}

.br-theme-fontawesome-stars .br-widget a.br-active:after, .br-theme-fontawesome-stars .br-widget a.br-selected:after {
    color: #f1c40f;
}

.br-theme-fontawesome-stars-o .br-widget a {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 18px;
}

.br-theme-fontawesome-stars-o .br-widget a:after {
    content: "\f005";
    color: #e1e1e1;
}

.br-theme-fontawesome-stars-o .br-widget a.br-active:after, .br-theme-fontawesome-stars-o .br-widget a.br-selected:after {
    color: #2ecc71;
}

.br-theme-fontawesome-stars-o .br-widget a.br-fractional:after {
    content: "\f5c0";
    color: #2ecc71;
}

.slider.slider-horizontal .slider-handle.triangle,
.slider.slider-horizontal .slider-tick.triangle {
    border-bottom-color: #1abc9c;
}

.slider.slider-vertical .slider-handle.triangle,
.slider.slider-vertical .slider-tick.triangle {
    border-left-color: #1abc9c;
    border-right-color: #1abc9c;
}

.slider.slider-disabled .slider-handle {
    background-image: linear-gradient(to bottom, #dfdfdf 0, #bebebe 100%);
    background-repeat: repeat-x;
}

.slider.slider-disabled .slider-track {
    background-image: linear-gradient(to bottom, #e9e9e9 0, #e9e9e9 100%);
    background-repeat: repeat-x;
}

.slider-track {
    background-image: linear-gradient(to bottom, #e9e9e9 0, #e9e9e9 100%);
    background-repeat: repeat-x;
}

.slider-selection {
    background-image: linear-gradient(to bottom, #6bebd1 0, #6bebd1 100%);
    background-repeat: repeat-x;
}

.slider-selection.tick-slider-selection {
    background-image: linear-gradient(to bottom, #55e7ca 0, #55e7ca 100%);
    background-repeat: repeat-x;
}

.slider-handle {
    background-color: #1abc9c;
    background-image: linear-gradient(to bottom, #1abc9c 0, #1abc9c 100%);
    background-repeat: repeat-x;
}

.slider-tick {
    background-image: linear-gradient(to bottom, #f9f9f9 0, #f5f5f5 100%);
    background-repeat: repeat-x;
}

.slider-tick.in-selection {
    background-image: linear-gradient(to bottom, #55e7ca 0, #55e7ca 100%);
    background-repeat: repeat-x;
}

#ex7-enabled {
    position: relative;
    top: 4px;
    height: 18px;
    width: 18px;
}

#RGB {
    height: 10px;
    background: gray;
}

#RC .slider-selection {
    background: #FF8282;
}

#RC .slider-handle {
    background: red;
}

#GC .slider-selection {
    background: #428041;
}

#GC .slider-handle {
    background: green;
}

#BC .slider-selection {
    background: #8283FF;
}

#BC .slider-handle {
    border-bottom-color: blue;
}

#B,
#G,
#R {
    width: 300px;
}

.slider-handle.custom {
    background: transparent none;
}

.slider-handle.custom::before {
    line-height: 15px;
    font-size: 28px;
    content: '\2605';
    color: #726204;
}

#slider12a .slider-track-high,
#slider12c .slider-track-high {
    background: #2ecc71;
}

#slider12b .slider-track-low {
    background: #e74c3c;
}

#slider12c .slider-track-low {
    background: #e74c3c;
}

#slider12c .slider-selection {
    background: #f1c40f;
}

#slider22 .slider-rangeHighlight {
    background: #f70616;
}

#slider22 .slider-rangeHighlight.category1 {
    background: #FF9900;
}

#slider22 .slider-rangeHighlight.category2 {
    background: #99CC00;
}

.daterangepicker {
    font-family: "Open Sans", sans-serif;
    border: 1px solid rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 25px rgba(26, 188, 156, 0.15);
    background-color: #fff;
}

.daterangepicker .calendar-table {
    border: 1px solid #fff;
    background-color: #fff;
}

.daterangepicker .calendar-table td,
    .daterangepicker .calendar-table th {
    color: #6c757d;
}

.daterangepicker .calendar-table .next span,
    .daterangepicker .calendar-table .prev span {
    border-color: #adb5bd;
}

.daterangepicker td.in-range {
    background-color: #8aefdb;
    color: #495057;
}

.daterangepicker td.off, .daterangepicker td.off.end-date, .daterangepicker td.off.in-range, .daterangepicker td.off.start-date {
    background-color: #fff;
    color: #373a3c;
    opacity: 0.5;
}

.daterangepicker td.active, .daterangepicker td.active:hover {
    background-color: #1abc9c;
    color: #fff;
}

.daterangepicker td.available:hover,
  .daterangepicker th.available:hover {
    background-color: #1abc9c;
    color: #fff;
}

.daterangepicker td.available:hover > span,
    .daterangepicker th.available:hover > span {
    border-color: #fff;
}

.daterangepicker:after {
    border-bottom: 6px solid #fff;
}

.daterangepicker:before {
    border-bottom: 7px solid rgba(0, 0, 0, 0.15);
}

.daterangepicker .ranges ul {
    padding-top: 15px;
    padding-bottom: 15px;
}

@media (min-width: 564px) {
    .daterangepicker .ranges ul {
        width: 160px;
    }
}

.daterangepicker .ranges ul li {
    margin: 5px 10px;
    transition: all 0.2s ease-in-out;
}

.daterangepicker .ranges ul li.active {
    background-color: #1abc9c;
}

.daterangepicker .ranges ul li:hover {
    box-shadow: 0 15px 8px -9px rgba(0, 0, 0, 0.25);
    background-color: #1abc9c;
    color: #fff;
}

.daterangepicker .drp-buttons {
    border-top: 1px solid rgba(0, 0, 0, 0.15);
}

.daterangepicker.show-ranges .drp-calendar.left {
    border-left: 1px solid rgba(0, 0, 0, 0.15);
}

.bootstrap-tagsinput {
    padding: 5px 10px;
    background: #e9e9e9;
    border: 1px solid #e3eaef;
    border-radius: 2px;
    width: 100%;
}

.bootstrap-tagsinput .tag {
    background: #1abc9c;
    color: #fff;
    border-radius: 2px;
}

.bootstrap-maxlength {
    background: #1abc9c;
    border-radius: 2px;
    padding: 5px 10px;
    color: #fff;
}

.bootstrap-maxlength.label-danger {
    background: #e74c3c;
}

.bootstrap-maxlength.label-success {
    background: #2ecc71;
}

.bootstrap-maxlength.label-warning {
    background: #f1c40f;
}

.bt-wizard .nav {
    background: #e9e9e9;
}

.bt-wizard .nav .nav-link.active {
    box-shadow: 0px 0px 5px 2px rgba(26, 188, 156, 0.3);
}

.select2-container .select2-selection--single {
    height: calc(1.5em + 0.75rem + 2px);
}

.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
}

.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
    padding-right: 8px;
    padding-left: 20px;
}

.select2-container .select2-selection--multiple {
    min-height: 32px;
}

.select2-container .select2-selection--multiple .select2-selection__rendered {
    padding-left: 8px;
}

.select2-dropdown {
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 3px;
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 3px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 3px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #1abc9c;
    border: 1px solid #1abc9c;
    color: #fff;
    border-radius: 3px;
    padding: 2px 10px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #fff;
    margin-right: 8px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #fff;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 8px;
    margin-right: auto;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid rgba(0, 0, 0, 0.15) 1px;
    outline: 0;
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid rgba(0, 0, 0, 0.15);
}

.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #e9e9e9;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #1abc9c;
    color: #fff;
}

.select2-container--classic .select2-selection--single {
    background-color: #f7f7f7;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 3px;
    outline: 0;
}

.select2-container--classic .select2-selection--single:focus {
    border: 1px solid #1abc9c;
}

.select2-container--classic .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--classic .select2-selection--single .select2-selection__arrow {
    background-color: #e9e9e9;
    border-left: 1px solid rgba(0, 0, 0, 0.15);
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    height: calc(1.5em + 0.75rem + 2px);
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow {
    border-right: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.select2-container--classic.select2-container--open .select2-selection--single {
    border: 1px solid #1abc9c;
}

.select2-container--classic .select2-selection--multiple {
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 3px;
}

.select2-container--classic .select2-selection--multiple:focus {
    border: 1px solid #1abc9c;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 3px;
}

.select2-container--classic.select2-container--open .select2-selection--multiple {
    border: 1px solid #1abc9c;
}

.select2-container--classic .select2-search--dropdown .select2-search__field {
    border: 1px solid rgba(0, 0, 0, 0.15);
}

.select2-container--classic .select2-results__option--highlighted[aria-selected] {
    background-color: #3875d7;
    color: #fff;
}

.select2-container--classic.select2-container--open .select2-dropdown {
    border-color: #1abc9c;
}

/**  =====================
      Data Tables css start
==========================  **/
.table td,
.table th {
    border-top: 1px solid #e2e5e8;
    white-space: nowrap;
    padding: 1.05rem 0.75rem;
}

.table thead th {
    border-bottom: 1px solid #e2e5e8;
    font-size: 13px;
    color: #37474f;
    background: #f6f6f6;
    text-transform: uppercase;
}

.table tbody + tbody {
    border-top: 2px solid #e2e5e8;
}

.table.table-dark thead th {
    background-color: #11171a;
}

.table.dataTable[class*="table-"] thead th {
    background: #f6f6f6;
}

/* Border versions */
.table-bordered {
    border: 1px solid #e2e5e8;
}

.table-bordered td,
  .table-bordered th {
    border: 1px solid #e2e5e8;
}

/* Zebra-striping */
.table-striped tbody tr:nth-of-type(2n+1) {
    background-color: rgba(26, 188, 156, 0.03);
}

/* Hover effect */
.table-hover tbody tr:hover {
    background-color: rgba(26, 188, 156, 0.03);
}

/* Table backgrounds */
.table .thead-dark th {
    color: #fff;
    background-color: #263238;
    border-color: #11171a;
}

.table-dark {
    color: #fff;
    background-color: #263238;
}

.table-dark td,
  .table-dark th,
  .table-dark thead th {
    border-color: #11171a;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: #222d32;
}

.table-dark.table-hover tbody tr:hover {
    background-color: #1c2429;
}

.table-dark thead th {
    color: #fff;
}

/* fixed header position */
table.dataTable.fixedHeader-floating {
    top: 0 !important;
}

@media screen and (max-width: 992px) {
    table.dataTable.fixedHeader-floating {
        display: none !important;
    }
}

@media screen and (max-width: 992px) {
    .fixedHeader-locked {
        display: none !important;
    }
}

/**  =====================
      Foo-table css start
==========================  **/
.footable .pagination > .active > a,
.footable .pagination > .active > span {
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.footable .pagination > .active > a:focus, .footable .pagination > .active > a:hover,
  .footable .pagination > .active > span:focus,
  .footable .pagination > .active > span:hover {
    background-color: #1abc9c;
    border-color: #1abc9c;
}

.footable .pagination > li > a,
.footable .pagination > li > span {
    color: #222;
}

.footable-details.table,
.footable.table {
    margin-bottom: 0;
}

table.footable > tfoot > tr.footable-paging > td > span.label {
    margin-bottom: 0;
}

table.footable-paging-center > tfoot > tr.footable-paging > td {
    padding-bottom: 0;
}

.table-columned > tbody > tr > td {
    border: 0;
    border-left: 1px solid #e2e5e8;
}

.table-columned > tbody > tr > th {
    border: 0;
}

/**====== Foo-table css end ======**/
/**======= basic table css start =======**/
.table.table-xl td,
.table.table-xl th {
    padding: 1.25rem 2rem;
}

.table.table-lg td,
.table.table-lg th {
    padding: 0.9rem 2rem;
}

.table.table-de td,
.table.table-de th {
    padding: 0.75rem 2rem;
}

.table.table-sm td,
.table.table-sm th {
    padding: 0.6rem 2rem;
}

.table.table-xs td,
.table.table-xs th {
    padding: 0.4rem 2rem;
}

/**======= basic table css end ======**/
#row-delete .selected,
#row-select .selected {
    background-color: #1abc9c;
    color: #fff;
}

table.dataTable tbody > tr.selected,
table.dataTable tbody > tr > .selected {
    background: #1abc9c;
}

table.dataTable tbody > tr.selected table.dataTable tbody > tr > .selected td.select-checkbox:after,
  table.dataTable tbody > tr.selected table.dataTable tbody > tr.selected.select-checkbox:after,
  table.dataTable tbody > tr.selected th.select-checkbox:after,
  table.dataTable tbody > tr > .selected table.dataTable tbody > tr > .selected td.select-checkbox:after,
  table.dataTable tbody > tr > .selected table.dataTable tbody > tr.selected.select-checkbox:after,
  table.dataTable tbody > tr > .selected th.select-checkbox:after {
    text-shadow: 1px 1px #e4f2fe, -1px -1px #e4f2fe, 1px -1px #e4f2fe, -1px 1px #e4f2fe;
}

table.dataTable tbody .selected td.select-checkbox:before,
table.dataTable tbody .selected th.select-checkbox:before {
    border-color: #fff;
}

table.dataTable tbody > tr > .selected td.select-checkbox:after,
table.dataTable tbody > tr > .selected th.select-checkbox:after,
table.dataTable tbody > tr.selected td.select-checkbox:after,
table.dataTable tbody > tr.selected th.select-checkbox:after {
    content: '\2714';
    margin-top: -11px;
    margin-left: -4px;
    text-align: center;
}

div.dt-button-info {
    position: fixed;
    top: 50%;
    left: 50%;
    width: 400px;
    margin-top: -100px;
    margin-left: -200px;
    background-color: #81eed8;
    color: #1abc9c;
    border: 2px solid #1abc9c;
    box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    text-align: center;
    z-index: 21;
}

div.dt-button-info h2 {
    padding: 0.5em;
    margin: 0;
    font-weight: normal;
    color: #fff;
    border-bottom: 1px solid #1abc9c;
    background-color: #1abc9c;
}

div.dt-button-info > div {
    padding: 1em;
}

.dt-buttons {
    margin-bottom: 5px;
}

table.dataTable tbody td.focus,
table.dataTable tbody th.focus {
    box-shadow: inset 0 0 1px 2px #1abc9c;
}

div.dtk-focus-alt table.dataTable tbody td.focus,
div.dtk-focus-alt table.dataTable tbody th.focus {
    box-shadow: inset 0 0 1px 2px #f1c40f;
    background: rgba(241, 196, 15, 0.15);
    color: #f1c40f;
}

/**====== Data Tables css end ======**/
.highcharts-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100%;
    text-align: left;
    line-height: normal;
    z-index: 0;
    font-size: 12px;
}

.highcharts-root {
    display: block;
}

.highcharts-root text {
    stroke-width: 0;
}

.highcharts-strong {
    font-weight: bold;
}

.highcharts-emphasized {
    font-style: italic;
}

.highcharts-anchor {
    cursor: pointer;
}

.highcharts-background {
    fill: #ffffff;
}

.highcharts-label-box,
.highcharts-plot-background,
.highcharts-plot-border {
    fill: none;
}

.highcharts-button-box {
    fill: inherit;
}

.highcharts-tracker-line {
    stroke-linejoin: round;
    stroke: rgba(192, 192, 192, 0.0001);
    stroke-width: 22;
    fill: none;
}

.highcharts-tracker-area {
    fill: rgba(192, 192, 192, 0.0001);
    stroke-width: 0;
}

/* Titles */
.highcharts-title {
    fill: #333333;
    font-size: 1.5em;
}

.highcharts-subtitle {
    fill: #666666;
}

/* Axes */
.highcharts-axis-line {
    fill: none;
    stroke: #ccd6eb;
}

.highcharts-yaxis .highcharts-axis-line {
    stroke-width: 0;
}

.highcharts-axis-title {
    fill: #666666;
}

.highcharts-axis-labels {
    fill: #666666;
    cursor: default;
    font-size: 0.9em;
}

.highcharts-grid-line {
    fill: none;
    stroke: #e6e6e6;
}

.highcharts-xaxis-grid .highcharts-grid-line {
    stroke-width: 0;
}

.highcharts-tick {
    stroke: #ccd6eb;
}

.highcharts-yaxis .highcharts-tick {
    stroke-width: 0;
}

.highcharts-minor-grid-line {
    stroke: #f2f2f2;
}

.highcharts-crosshair-thin {
    stroke-width: 1px;
    stroke: #cccccc;
}

.highcharts-crosshair-category {
    stroke: #ccd6eb;
    stroke-opacity: 0.25;
}

/* Credits */
.highcharts-credits {
    cursor: pointer;
    fill: #999999;
    font-size: 0.7em;
    transition: fill 250ms, font-size 250ms;
}

.highcharts-credits:hover {
    fill: black;
    font-size: 1em;
}

/* Tooltip */
.highcharts-tooltip {
    cursor: default;
    pointer-events: none;
    white-space: nowrap;
    transition: stroke 150ms;
}

.highcharts-tooltip text {
    fill: #333333;
}

.highcharts-tooltip .highcharts-header {
    font-size: 0.85em;
}

.highcharts-tooltip-box {
    stroke-width: 1px;
    fill: #f7f7f7;
    fill-opacity: 0.85;
}

.highcharts-tooltip-box .highcharts-label-box {
    fill: #f7f7f7;
    fill-opacity: 0.85;
}

.highcharts-selection-marker {
    fill: #1abc9c;
    fill-opacity: 0.25;
}

.highcharts-graph {
    fill: none;
    stroke-width: 2px;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.highcharts-state-hover .highcharts-graph {
    stroke-width: 3;
}

.highcharts-state-hover path {
    transition: stroke-width 50;
  /* quick in */
}

.highcharts-state-normal path {
    transition: stroke-width 250ms;
  /* slow out */
}

/* Legend hover affects points and series */
.highcharts-data-labels,
.highcharts-markers,
.highcharts-point,
g.highcharts-series {
    transition: opacity 250ms;
}

.highcharts-legend-point-active .highcharts-point:not(.highcharts-point-hover),
.highcharts-legend-series-active g.highcharts-series:not(.highcharts-series-hover) {
    opacity: 0.2;
}

.highcharts-legend-series-active .highcharts-data-labels:not(.highcharts-series-hover),
.highcharts-legend-series-active .highcharts-markers:not(.highcharts-series-hover) {
    opacity: 0.2;
}

/* Series options */
/* Default colors */
.highcharts-color-0 {
    fill: #1abc9c;
    stroke: #1abc9c;
}

.highcharts-color-1 {
    fill: #343a40;
    stroke: #343a40;
}

.highcharts-color-2 {
    fill: #2ecc71;
    stroke: #2ecc71;
}

.highcharts-color-3 {
    fill: #e74c3c;
    stroke: #e74c3c;
}

.highcharts-color-4 {
    fill: #6610f2;
    stroke: #6610f2;
}

.highcharts-color-5 {
    fill: #e83e8c;
    stroke: #e83e8c;
}

.highcharts-color-6 {
    fill: #f1c40f;
    stroke: #f1c40f;
}

.highcharts-color-7 {
    fill: #20c997;
    stroke: #20c997;
}

.highcharts-color-8 {
    fill: #fd7e14;
    stroke: #fd7e14;
}

.highcharts-color-9 {
    fill: #00acc1;
    stroke: #00acc1;
}

.highcharts-area {
    fill-opacity: 0.75;
    stroke-width: 0;
}

.highcharts-markers {
    stroke-width: 1px;
    stroke: #ffffff;
}

.highcharts-point {
    stroke-width: 1px;
}

.highcharts-dense-data .highcharts-point {
    stroke-width: 0;
}

.highcharts-data-label {
    font-size: 0.9em;
    font-weight: bold;
}

.highcharts-data-label-box {
    fill: none;
    stroke-width: 0;
}

.highcharts-data-label text,
text.highcharts-data-label {
    fill: #333333;
}

.highcharts-data-label-connector {
    fill: none;
}

.highcharts-halo {
    fill-opacity: 0.25;
    stroke-width: 0;
}

.highcharts-markers .highcharts-point-select,
.highcharts-series:not(.highcharts-pie-series) .highcharts-point-select {
    fill: #cccccc;
    stroke: #000000;
}

.highcharts-column-series rect.highcharts-point {
    stroke: #ffffff;
}

.highcharts-column-series .highcharts-point {
    transition: fill-opacity 250ms;
}

.highcharts-column-series .highcharts-point-hover {
    fill-opacity: 0.75;
    transition: fill-opacity 50ms;
}

.highcharts-pie-series .highcharts-point {
    stroke-linejoin: round;
    stroke: #ffffff;
}

.highcharts-pie-series .highcharts-point-hover {
    fill-opacity: 0.75;
    transition: fill-opacity 50ms;
}

.highcharts-funnel-series .highcharts-point,
.highcharts-pyramid-series .highcharts-point {
    stroke-linejoin: round;
    stroke: #ffffff;
}

.highcharts-funnel-series .highcharts-point-hover,
.highcharts-pyramid-series .highcharts-point-hover {
    fill-opacity: 0.75;
    transition: fill-opacity 50ms;
}

.highcharts-funnel-series .highcharts-point-select,
.highcharts-pyramid-series .highcharts-point-select {
    fill: inherit;
    stroke: inherit;
}

.highcharts-solidgauge-series .highcharts-point {
    stroke-width: 0;
}

.highcharts-treemap-series .highcharts-point {
    stroke-width: 1px;
    stroke: #e6e6e6;
    transition: stroke 250ms, fill 250ms, fill-opacity 250ms;
}

.highcharts-treemap-series .highcharts-point-hover {
    stroke: #999999;
    transition: stroke 25ms, fill 25ms, fill-opacity 25ms;
}

.highcharts-treemap-series .highcharts-above-level {
    display: none;
}

.highcharts-treemap-series .highcharts-internal-node {
    fill: none;
}

.highcharts-treemap-series .highcharts-internal-node-interactive {
    fill-opacity: 0.15;
    cursor: pointer;
}

.highcharts-treemap-series .highcharts-internal-node-interactive:hover {
    fill-opacity: 0.75;
}

/* Legend */
.highcharts-legend-box {
    fill: none;
    stroke-width: 0;
}

.highcharts-legend-item > text {
    fill: #333333;
    font-weight: bold;
    font-size: 1em;
    cursor: pointer;
    stroke-width: 0;
}

.highcharts-legend-item:hover text {
    fill: #000000;
}

.highcharts-legend-item-hidden * {
    fill: #cccccc !important;
    stroke: #cccccc !important;
    transition: fill 250ms;
}

.highcharts-legend-nav-active {
    fill: #1abc9c;
    cursor: pointer;
}

.highcharts-legend-nav-inactive {
    fill: #cccccc;
}

circle.highcharts-legend-nav-active, circle.highcharts-legend-nav-inactive {
  /* tracker */
    fill: rgba(192, 192, 192, 0.0001);
}

.highcharts-legend-title-box {
    fill: none;
    stroke-width: 0;
}

/* Bubble legend */
.highcharts-bubble-legend-symbol {
    stroke-width: 2;
    fill-opacity: 0.5;
}

.highcharts-bubble-legend-connectors {
    stroke-width: 1;
}

.highcharts-bubble-legend-labels {
    fill: #333333;
}

/* Loading */
.highcharts-loading {
    position: absolute;
    background-color: #ffffff;
    opacity: 0.5;
    text-align: center;
    z-index: 10;
    transition: opacity 250ms;
}

.highcharts-loading-hidden {
    height: 0 !important;
    opacity: 0;
    overflow: hidden;
    transition: opacity 250ms, height 250ms step-end;
}

.highcharts-loading-inner {
    font-weight: bold;
    position: relative;
    top: 45%;
}

/* Plot bands and polar pane backgrounds */
.highcharts-pane,
.highcharts-plot-band {
    fill: #000000;
    fill-opacity: 0.05;
}

.highcharts-plot-line {
    fill: none;
    stroke: #999999;
    stroke-width: 1px;
}

/* Highcharts More and modules */
.highcharts-boxplot-box {
    fill: #ffffff;
}

.highcharts-boxplot-median {
    stroke-width: 2px;
}

.highcharts-bubble-series .highcharts-point {
    fill-opacity: 0.5;
}

.highcharts-errorbar-series .highcharts-point {
    stroke: #000000;
}

.highcharts-gauge-series .highcharts-data-label-box {
    stroke: #cccccc;
    stroke-width: 1px;
}

.highcharts-gauge-series .highcharts-dial {
    fill: #000000;
    stroke-width: 0;
}

.highcharts-polygon-series .highcharts-graph {
    fill: inherit;
    stroke-width: 0;
}

.highcharts-waterfall-series .highcharts-graph {
    stroke: #333333;
    stroke-dasharray: 1, 3;
}

.highcharts-sankey-series .highcharts-point {
    stroke-width: 0;
}

.highcharts-sankey-series .highcharts-link {
    transition: fill 250ms, fill-opacity 250ms;
    fill-opacity: 0.5;
}

.highcharts-sankey-series .highcharts-point-hover.highcharts-link {
    transition: fill 50ms, fill-opacity 50ms;
    fill-opacity: 1;
}

.highcharts-venn-series .highcharts-point {
    fill-opacity: 0.75;
    stroke: #cccccc;
    transition: stroke 250ms, fill-opacity 250ms;
}

.highcharts-venn-series .highcharts-point-hover {
    fill-opacity: 1;
    stroke: #cccccc;
}

/* Highstock */
.highcharts-navigator-mask-outside {
    fill-opacity: 0;
}

.highcharts-navigator-mask-inside {
    fill: #1abc9c;
  /* navigator.maskFill option */
    fill-opacity: 0.25;
    cursor: ew-resize;
}

.highcharts-navigator-outline {
    stroke: #cccccc;
    fill: none;
}

.highcharts-navigator-handle {
    stroke: #cccccc;
    fill: #f2f2f2;
    cursor: ew-resize;
}

.highcharts-navigator-series {
    fill: #1abc9c;
    stroke: #1abc9c;
}

.highcharts-navigator-series .highcharts-graph {
    stroke-width: 1px;
}

.highcharts-navigator-series .highcharts-area {
    fill-opacity: 0.05;
}

.highcharts-navigator-xaxis .highcharts-axis-line {
    stroke-width: 0;
}

.highcharts-navigator-xaxis .highcharts-grid-line {
    stroke-width: 1px;
    stroke: #e6e6e6;
}

.highcharts-navigator-xaxis.highcharts-axis-labels {
    fill: #999999;
}

.highcharts-navigator-yaxis .highcharts-grid-line {
    stroke-width: 0;
}

.highcharts-scrollbar-thumb {
    fill: #cccccc;
    stroke: #cccccc;
    stroke-width: 1px;
}

.highcharts-scrollbar-button {
    fill: #e6e6e6;
    stroke: #cccccc;
    stroke-width: 1px;
}

.highcharts-scrollbar-arrow {
    fill: #666666;
}

.highcharts-scrollbar-rifles {
    stroke: #666666;
    stroke-width: 1px;
}

.highcharts-scrollbar-track {
    fill: #f2f2f2;
    stroke: #f2f2f2;
    stroke-width: 1px;
}

.highcharts-button {
    fill: #f7f7f7;
    stroke: #cccccc;
    cursor: default;
    stroke-width: 1px;
    transition: fill 250ms;
}

.highcharts-button text {
    fill: #333333;
}

.highcharts-button-hover {
    transition: fill 0;
    fill: #e6e6e6;
    stroke: #cccccc;
}

.highcharts-button-hover text {
    fill: #333333;
}

.highcharts-button-pressed {
    font-weight: bold;
    fill: #e6ebf5;
    stroke: #cccccc;
}

.highcharts-button-pressed text {
    fill: #333333;
    font-weight: bold;
}

.highcharts-button-disabled text {
    fill: #333333;
}

.highcharts-range-selector-buttons .highcharts-button {
    stroke-width: 0;
}

.highcharts-range-label rect {
    fill: none;
}

.highcharts-range-label text {
    fill: #666666;
}

.highcharts-range-input {
    stroke-width: 1px;
    stroke: #cccccc;
}

.highcharts-range-input rect {
    fill: none;
}

.highcharts-range-input text {
    fill: #333333;
}

input.highcharts-range-selector {
    position: absolute;
    border: 0;
    width: 1px;
  /* Chrome needs a pixel to see it */
    height: 1px;
    padding: 0;
    text-align: center;
    left: -9em;
  /* #4798 */
}

.highcharts-crosshair-label text {
    fill: #ffffff;
    font-size: 1.1em;
}

.highcharts-crosshair-label .highcharts-label-box {
    fill: inherit;
}

.highcharts-candlestick-series .highcharts-point {
    stroke: #000000;
    stroke-width: 1px;
}

.highcharts-candlestick-series .highcharts-point-up {
    fill: #ffffff;
}

.highcharts-ohlc-series .highcharts-point-hover {
    stroke-width: 3px;
}

.highcharts-flags-series .highcharts-point .highcharts-label-box {
    stroke: #999999;
    fill: #ffffff;
    transition: fill 250ms;
}

.highcharts-flags-series .highcharts-point-hover .highcharts-label-box {
    stroke: #000000;
    fill: #ccd6eb;
}

.highcharts-flags-series .highcharts-point text {
    fill: #000000;
    font-size: 0.9em;
    font-weight: bold;
}

/* Highmaps */
.highcharts-map-series .highcharts-point {
    transition: fill 500ms, fill-opacity 500ms, stroke-width 250ms;
    stroke: #cccccc;
}

.highcharts-map-series .highcharts-point-hover {
    transition: fill 0ms, fill-opacity 0;
    fill-opacity: 0.5;
    stroke-width: 2px;
}

.highcharts-mapline-series .highcharts-point {
    fill: none;
}

.highcharts-heatmap-series .highcharts-point {
    stroke-width: 0;
}

.highcharts-map-navigation {
    font-size: 1.3em;
    font-weight: bold;
    text-align: center;
}

.highcharts-coloraxis {
    stroke-width: 0;
}

.highcharts-coloraxis-marker {
    fill: #999999;
}

.highcharts-null-point {
    fill: #f7f7f7;
}

/* 3d charts */
.highcharts-3d-frame {
    fill: transparent;
}

/* Exporting module */
.highcharts-contextbutton {
    fill: #ffffff;
  /* needed to capture hover */
    stroke: none;
    stroke-linecap: round;
}

.highcharts-contextbutton:hover {
    fill: #e6e6e6;
    stroke: #e6e6e6;
}

.highcharts-button-symbol {
    stroke: #666666;
    stroke-width: 3px;
}

.highcharts-menu {
    border: 1px solid #999999;
    background: #ffffff;
    padding: 5px 0;
    box-shadow: 3px 3px 10px #888;
}

.highcharts-menu-item {
    padding: 0.5em 1em;
    background: none;
    color: #333333;
    cursor: pointer;
    transition: background 250ms, color 250ms;
}

.highcharts-menu-item:hover {
    background: #1abc9c;
    color: #ffffff;
}

/* Drilldown module */
.highcharts-drilldown-point {
    cursor: pointer;
}

.highcharts-drilldown-axis-label,
.highcharts-drilldown-data-label text,
text.highcharts-drilldown-data-label {
    cursor: pointer;
    fill: #1abc9c;
    font-weight: bold;
    text-decoration: underline;
}

/* No-data module */
.highcharts-no-data text {
    font-weight: bold;
    font-size: 12px;
    fill: #666666;
}

/* Drag-panes module */
.highcharts-axis-resizer {
    cursor: ns-resize;
    stroke: black;
    stroke-width: 2px;
}

/* Bullet type series */
.highcharts-bullet-target {
    stroke-width: 0;
}

/* Lineargauge type series */
.highcharts-lineargauge-target,
.highcharts-lineargauge-target-line {
    stroke-width: 1px;
    stroke: #333333;
}

/* Annotations module */
.highcharts-annotation-label-box {
    stroke-width: 1px;
    stroke: #000000;
    fill: #000000;
    fill-opacity: 0.75;
}

.highcharts-annotation-label text {
    fill: #e6e6e6;
}

/* Gantt */
.highcharts-treegrid-node-collapsed,
.highcharts-treegrid-node-expanded {
    cursor: pointer;
}

.highcharts-point-connecting-path {
    fill: none;
}

.highcharts-grid-axis .highcharts-axis-line,
.highcharts-grid-axis .highcharts-tick {
    stroke-width: 1px;
}

.peity-chart + .peity {
    width: 100%;
    height: 250px;
}

/**  =====================
      Authentication css start
==========================  **/
.auth-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    min-width: 100%;
    min-height: 100vh;
    background: #1abc9c;
    background-image: url("../images/auth/img-auth-big.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

@media (min-width: 1200px) {
    .auth-wrapper .container {
        max-width: 1140px;
    }
}

@media (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .auth-wrapper {
        display: block;
        margin: 0 auto;
    }

    .auth-wrapper > .row {
        min-height: 100vh;
    }

    .auth-wrapper > .row > .aut-bg-img {
        min-height: 100vh;
    }
}

.auth-wrapper .saprator {
    position: relative;
    margin: 8px 0;
}

.auth-wrapper .saprator span {
    background: #fff;
    position: relative;
    padding: 0 10px;
    z-index: 5;
    font-size: 20px;
}

.auth-wrapper .saprator:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 0;
    width: 100%;
    height: 1px;
    background: #e2e5e8;
    z-index: 1;
}

.auth-wrapper a,
  .auth-wrapper p > a {
    color: #37474f;
    font-weight: 600;
}

.auth-wrapper .input-group {
    background: transparent;
}

.auth-wrapper .card {
    margin-bottom: 0;
    padding: 8px;
    border-radius: 8px;
}

.auth-wrapper .card .card-body {
    padding: 20px 25px 20px 40px;
}

@media (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .auth-wrapper .card {
        display: block;
    }
}

.auth-wrapper > div {
    z-index: 5;
}

.auth-wrapper .auth-content {
    position: relative;
    padding: 15px;
    z-index: 5;
}

.auth-wrapper .auth-content:not(.container) {
    width: 400px;
}

.auth-wrapper .auth-content:not(.container) .card-body {
    padding: 40px 35px;
}

@media (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .auth-wrapper .auth-content {
        margin: 0 auto;
    }
}

.auth-wrapper .auth-side-img {
    padding-right: 400px;
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    justify-content: center;
}

@media only screen and (max-width: 991px) {
    .auth-wrapper .auth-side-img {
        display: none;
    }
}

.auth-wrapper .auth-side-form {
    position: relative;
    min-height: 100%;
    background: #fff;
    display: inline-flex;
    align-items: center;
    left: auto;
    float: right;
}

.auth-wrapper .auth-side-form > * {
    position: relative;
    z-index: 5;
}

@media only screen and (max-width: 991px) {
    .auth-wrapper .auth-side-form {
        width: 100%;
        justify-content: center;
    }

    .auth-wrapper .auth-side-form .auth-content:not(.container) {
        max-width: 350px;
    }
}

@media (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .auth-wrapper.aut-bg-img .auth-side-form {
        height: 100vh;
    }
}

@media only screen and (max-width: 767px) {
    .auth-wrapper .card .card-body {
        padding: 30px 15px;
    }
}

.auth-wrapper.offline {
    background-image: none;
}

.auth-wrapper.offline h1 {
    font-size: 87px;
    font-weight: 700;
}

.auth-wrapper.offline:before {
    display: none;
}

.auth-wrapper .card-body .carousel-indicators {
    margin: 15px 0 10px;
    bottom: 0;
}

.auth-wrapper .card-body .carousel-indicators li {
    width: 50px;
    background-color: rgba(26, 188, 156, 0.4);
    border-radius: 5px;
    height: 4px;
}

.auth-wrapper .card-body .carousel-indicators li.active {
    background-color: #1abc9c;
}

.auth-wrapper .img-logo-overlay {
    position: absolute;
    top: 40px;
    left: 50px;
}

/* image varient start */
.aut-bg-img {
    background-image: url("../images/auth/img-auth-big.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

.aut-bg-img .auth-content {
    padding: 70px 40px;
}

/* image varient End */
/**====== Authentication css end ======**/
/**  =====================
      Authentication css start
==========================  **/
.auth-wrapper.maintance {
    background: #e9e9e9;
}

.auth-wrapper.offline {
    background: radial-gradient(#94acbe, #253653);
}

.auth-wrapper.offline .offline-wrapper {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
}

.auth-wrapper.offline .offline-wrapper > svg {
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
}

.auth-wrapper.offline .offline-wrapper .boat-img {
    -webkit-animation: boatanim 12s ease-in-out infinite;
    animation: boatanim 12s ease-in-out infinite;
}

.auth-wrapper.offline .s-img-1,
  .auth-wrapper.offline .s-img-2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.auth-wrapper.offline .s-img-1 {
    -webkit-animation: sparcle 3.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: sparcle 3.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.auth-wrapper.offline .s-img-2 {
    -webkit-animation: sparcle 3.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: sparcle 3.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.19s;
    animation-delay: 1.19s;
}

.auth-wrapper.offline .moon {
    background: rgba(255, 255, 255, 0.4);
    position: absolute;
    top: 12%;
    left: 40%;
    width: 150px;
    height: 150px;
    border-radius: 50%;
}

.auth-wrapper.offline .moon:after, .auth-wrapper.offline .moon:before {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    box-shadow: inset 0 0 20px 5px rgba(255, 255, 255, 0.4);
}

.auth-wrapper.offline .moon:after {
    -webkit-animation: sunwawe 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: sunwawe 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.auth-wrapper.offline .moon:before {
    -webkit-animation: sunwawe 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: sunwawe 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s;
}

.auth-wrapper.offline .sark .img-sark {
    width: 300px;
    position: absolute;
    right: -200px;
    -webkit-animation: sark 12s ease-in-out infinite;
    animation: sark 12s ease-in-out infinite;
}

.auth-wrapper.offline .sark .bubble {
    background: rgba(255, 255, 255, 0);
    position: absolute;
    top: 12%;
    left: 60%;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    -webkit-animation: bubble 12s ease-in-out infinite;
    animation: bubble 12s ease-in-out infinite;
}

.auth-wrapper.offline .sark .bubble:after, .auth-wrapper.offline .sark .bubble:before {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    box-shadow: inset 0 0 20px 5px rgba(255, 255, 255, 0.4);
}

.auth-wrapper.offline .sark .bubble:after {
    -webkit-animation: sunwawe 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: sunwawe 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.auth-wrapper.offline .sark .bubble:before {
    -webkit-animation: sunwawe 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: sunwawe 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s;
}

.auth-wrapper.offline .off-main {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
}

.auth-wrapper.offline .off-main .off-content {
    position: absolute;
    width: 100%;
    bottom: 5%;
    left: 0;
    z-index: 5;
}

@media only screen and (max-width: 575px) {
    .auth-wrapper.offline .sark {
        display: none;
    }

    .auth-wrapper.offline .offline-wrapper > svg {
        height: 95%;
    }

    .auth-wrapper.offline .off-main .off-content {
        bottom: 0%;
    }

    .auth-wrapper.offline .off-main .off-content h1 {
        font-size: 45px;
    }

    .auth-wrapper.offline .moon {
        top: 12%;
        width: 50px;
        height: 50px;
    }
}

@-webkit-keyframes bubble {
    0%, 30% {
        opacity: 0;
    }

    31% {
        opacity: 1;
    }

    59% {
        opacity: 1;
    }

    60%, 100% {
        opacity: 0;
    }
}

@keyframes bubble {
    0%, 30% {
        opacity: 0;
    }

    31% {
        opacity: 1;
    }

    59% {
        opacity: 1;
    }

    60%, 100% {
        opacity: 0;
    }
}

@-webkit-keyframes sark {
    0% {
        transform: rotate(-10deg) translate(245px, 46px);
    }

    30% {
        transform: rotate(-13deg) translate(-329px, -80px);
    }

    60% {
        transform: rotate(-13deg) translate(-329px, -80px);
    }

    100% {
        transform: rotate(-26deg) translate(-887px, -80px);
    }
}

@keyframes sark {
    0% {
        transform: rotate(-10deg) translate(245px, 46px);
    }

    30% {
        transform: rotate(-13deg) translate(-329px, -80px);
    }

    60% {
        transform: rotate(-13deg) translate(-329px, -80px);
    }

    100% {
        transform: rotate(-26deg) translate(-887px, -80px);
    }
}

@-webkit-keyframes boatanim {
    0% {
        transform: rotate(-10deg) translate(95px, -14px);
    }

    50% {
        transform: rotate(5deg) translate(-65px, -14px);
    }

    100% {
        transform: rotate(-10deg) translate(95px, -14px);
    }
}

@keyframes boatanim {
    0% {
        transform: rotate(-10deg) translate(95px, -14px);
    }

    50% {
        transform: rotate(5deg) translate(-65px, -14px);
    }

    100% {
        transform: rotate(-10deg) translate(95px, -14px);
    }
}

@-webkit-keyframes sunwawe {
    0% {
        transform: scale(1);
        opacity: 1;
    }

    100% {
        transform: scale(4);
        opacity: 0;
    }
}

@keyframes sunwawe {
    0% {
        transform: scale(1);
        opacity: 1;
    }

    100% {
        transform: scale(4);
        opacity: 0;
    }
}

@-webkit-keyframes sparcle {
    0% {
        opacity: 0.5;
    }

    50% {
        opacity: 0;
    }
}

@keyframes sparcle {
    0% {
        opacity: 0.5;
    }

    50% {
        opacity: 0;
    }
}

/**====== Authentication css end ======**/
/* ===================== to do page start ======================================= */
#task-container ul {
    overflow: hidden;
    padding: 0;
}

#task-container li {
    float: left;
    width: 49%;
    overflow: auto;
    height: auto;
    min-height: 10px;
    background: #fff;
    display: inline-block;
    padding: 20px;
    border: 1px solid #ccc;
    color: #666;
    border-top: 5px solid #1abc9c;
    cursor: pointer;
    margin-bottom: 20px;
    margin-right: 2%;
    transition: all 0.3s;
    position: relative;
}

#task-container li:nth-child(2n) {
    margin-right: 0;
}

#task-container li.complete {
    opacity: 1;
    border-top: 9px solid #e74c3c;
    transition: all ease-in 0.3s;
}

#task-container li.complete:before {
    background: url("../images/complete.png") no-repeat;
    position: absolute;
    top: 5px;
    right: 5px;
    content: "";
    width: 55px;
    height: 55px;
    background-size: 100%;
}

#task-container li.complete p {
    text-decoration: line-through;
}

@media screen and (max-width: 580px) {
    #task-container li {
        width: 100%;
    }
}

.new-task .to-do-list .cr {
    float: left;
    top: 0;
    margin-right: 16px;
}

.new-task label input[type=checkbox] {
    display: none;
}

.checkbox-fade .cr {
    border-radius: 6px;
    border: 1px solid #e3e3e3;
    cursor: pointer;
    display: inline-block;
    float: left;
    height: 24px;
    margin-right: 0.5em;
    position: relative;
    width: 24px;
    margin-right: 16px;
    top: 0;
}

.task-panel .to-do-label {
    margin-bottom: 15px;
}

.task-panel .to-do-label:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding: 0;
}

.done-task .captions,
.done-task span {
    color: #919aa3;
    text-decoration: line-through;
}

.to-do-list i {
    color: #ccc;
    font-size: 17px;
    opacity: 0;
}

.to-do-list:hover i {
    opacity: 1;
    transition: opacity ease-in 0.3s;
}

.to-do-list h6 {
    display: inline-block;
}

.to-do-list .done-task {
    opacity: 0.7;
}

.to-do-list .done-task > div {
    -webkit-filter: grayscale(0.8);
    filter: grayscale(0.8);
}

.to-do-list .done-task h6,
  .to-do-list .done-task p,
  .to-do-list .done-task span {
    text-decoration: line-through;
}

.to-do-list .checkbox-fade .check-task {
    display: block;
}

.to-do-list .checkbox-fade .to-content {
    display: inline-block;
}

.to-do-list .checkbox-fade .cr {
    border-radius: 6px;
    border: 1px solid #e3e3e3;
    cursor: pointer;
    display: inline-block;
    float: left;
    height: 24px;
    margin-right: 0.5em;
    position: relative;
    width: 24px;
    margin: 0;
    top: 5px;
}

.to-do-list .checkbox-fade .cr .cr-icon {
    color: #fff;
    font-size: 0.8em;
    left: 0;
    line-height: 0;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
}

.to-do-list .checkbox-fade label input[type=checkbox] {
    display: none;
}

.to-do-list .checkbox-fade label input[type=checkbox] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all 0.3s ease-in;
}

.to-do-list .checkbox-fade label input[type=checkbox]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.to-do-list .checkbox-fade label input[type=checkbox]:checked + .cr {
    background: #1abc9c;
    border: 0;
}

new-task .to-do-list .cr {
    float: left;
    top: 0;
    margin-right: 16px;
}

new-task label input[type=checkbox] {
    display: none;
}

/* ===================== to do page end =========================================*/
/* ===================== Gallery-masonry page start ============================= */
.gallery-masonry .card-columns {
    -webkit-column-count: 4;
    -moz-column-count: 4;
    column-count: 4;
}

@media screen and (max-width: 1400px) {
    .gallery-masonry .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
    }
}

@media screen and (max-width: 992px) {
    .gallery-masonry .card-columns {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;
    }
}

@media screen and (max-width: 575px) {
    .gallery-masonry .card-columns {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
    }
}

.job-meta-data i {
    margin-right: 5px;
    color: #1abc9c;
}

/* ===================== Gallery-masonry page end ============================= */
/* ===================== Task-list page start ============================= */
.task-data img {
    width: 40px;
    box-shadow: none;
}

.task-data i {
    color: #37474f;
}

.task-data .dropdown-toggle:after {
    color: #37474f;
}

.task-board-left .task-right-header-revision,
.task-board-left .task-right-header-status,
.task-board-left .task-right-header-users {
    padding-bottom: 10px;
    padding-top: 10px;
    border-bottom: 1px solid #f1f1f1;
    cursor: pointer;
}

.task-board-left .taskboard-right-progress,
.task-board-left .taskboard-right-revision,
.task-board-left .taskboard-right-users {
    padding-top: 10px;
}

.task-board-left .taskboard-right-progress .progress {
    height: 9px;
    margin-bottom: 25px;
}

.task-board-left .user-box .media-object {
    height: 50px;
    width: 50px;
    cursor: pointer;
}

.task-board-left .user-box .media-left {
    position: relative;
}

.task-board-left .user-box .btn.btn-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.task-board-left .live-status {
    height: 8px;
    width: 8px;
    position: absolute;
    bottom: 0;
    right: 0;
    border-radius: 100%;
    top: 5px;
}

.filter-bar .navbar {
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    padding: 0.5rem 1rem;
}

@media screen and (max-width: 557px) {
    .filter-bar .navbar .f-text {
        display: block;
        width: 100%;
    }

    .filter-bar .navbar .f-view {
        padding-left: 24px;
    }

    .filter-bar .navbar .f-view span {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
}

.filter-bar .label {
    border-radius: 4px;
    font-size: 13px;
    padding: 3px 7px;
}

.filter-bar .task-detail {
    margin-bottom: 5px;
}

.filter-bar .card-task .task-list-table {
    display: inline-block;
}

.filter-bar .card-task .task-list-table img {
    width: 40px;
    box-shadow: none;
}

.filter-bar .card-task .task-list-table i {
    color: #37474f;
}

.filter-bar .card-task .task-board {
    float: right;
    margin-top: 5px;
}

.filter-bar .card-task .task-board .dropdown {
    display: inline-block;
}

.filter-bar .card-task .task-board .btn {
    padding: 4px 10px;
    font-size: 10px;
    margin: 0;
}

.assign-user img,
.task-comment img {
    width: 45px;
    box-shadow: none;
}

/* ===================== Task-list page end ===================================== */
/* ===================== Invoice page start ===================================== */
.invoice-contact {
    display: flex;
    margin-bottom: 30px;
    padding-top: 30px;
    align-items: center;
}

@media screen and (max-width: 767px) {
    .invoice-contact {
        margin-bottom: 0;
    }
}

.invoice-table.table td {
    border: 0;
    padding: 4px 0;
}

.invoive-info {
    display: flex;
    margin-bottom: 30px;
}

.invoive-info h6 {
    margin-bottom: 20px;
    text-transform: uppercase;
}

.invoive-info .invoice-order.table {
    padding-left: 0;
}

.invoive-info .invoice-order.table th {
    border: 0;
    padding: 4px 0;
}

.invoive-info .invoice-order.table th:first-child {
    padding-left: 0;
    width: 80px;
}

.invoice-total.table {
    background: #f3f3f3;
    padding: 30px 0;
}

.invoice-total.table th {
    border: 0;
    padding: 4px 0;
    text-align: right;
}

.invoice-total.table td {
    text-align: right;
}

.invoice-total.table tbody {
    padding-right: 20px;
    float: right;
}

.invoice-summary .label {
    border-radius: 5px;
    padding: 3px 10px;
    font-size: 12px;
}

.invoice-list .btn {
    padding: 5px 10px;
    font-size: 12px;
}

.invoice-list .task-list-table {
    display: inline-block;
}

/* ===================== Invoice page end ======================================= */
/* ==============================================================
                     email-page  Start
====================================================== */
.email-card .tab-content {
    box-shadow: none;
}

.email-card .tab-content .btn {
    border: none;
}

.email-card .tab-content .btn i {
    font-size: 18px;
    line-height: 1.4;
}

.email-card .tab-content .table tr {
    transition: all 0.12s ease-in-out;
}

.email-card .tab-content .table tr td,
    .email-card .tab-content .table tr th {
    padding: 0.65rem 0.75rem;
}

.email-card .tab-content .table tr td .checkbox,
      .email-card .tab-content .table tr th .checkbox {
    padding: 12px 0;
}

.email-card .tab-content .table tr td label,
      .email-card .tab-content .table tr th label {
    margin-bottom: 0;
}

.email-card .tab-content .table tr.unread {
    font-weight: 600;
}

.email-card .tab-content .table tr.read {
    background: rgba(233, 233, 233, 0.7);
}

.email-card .tab-content .table tr:hover {
    background: #e9e9e9;
    box-shadow: 0 1px 3px 0 #e2e5e8;
}

.email-card .tab-content .nav-pills {
    margin-left: 0;
    border-top: 1px solid #e2e5e8;
    padding: 15px 0 0;
}

.email-card .tab-content .nav-pills > li .nav-link {
    border-radius: 0;
    border: none;
    padding: 5px 12px 22px;
    position: relative;
}

.email-card .tab-content .nav-pills > li .nav-link::after {
    content: "";
    width: calc(100% - 24px);
    height: 3px;
    position: absolute;
    left: 12px;
    bottom: 0;
    border-radius: 3px 3px 0 0;
}

.email-card .tab-content .nav-pills > li .nav-link.active {
    background: transparent;
    color: #e74c3c;
}

.email-card .tab-content .nav-pills > li .nav-link.active:after {
    background: #e74c3c;
}

.email-card .nav-pills {
    padding: 0;
    margin-left: -20px;
}

.email-card .nav-pills > li .nav-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 14px;
    padding: 8px 25px;
    border-radius: 0 20px 20px 0;
    text-transform: capitalize;
    border: 1px solid transparent;
    border-left: none;
    color: #373a3c;
}

.email-card .nav-pills > li .nav-link i {
    padding: 0;
    margin-right: 10px;
    font-size: 16px;
    display: inline-block;
    position: relative;
    top: 2px;
}

.email-card .nav-pills > li .nav-link.active,
  .email-card .nav-pills > li .show > .nav-link {
    font-weight: 600;
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    border-color: rgba(231, 76, 60, 0.1);
}

.email-card .email-more-link {
    font-size: 16px;
}

.email-card .email-more-link i {
    line-height: 1.1;
}

.email-card .mail-body-content a {
    color: #373a3c;
}

.email-card .mail-body-content .mail-attach {
    display: inline-block;
    border: 1px solid #e2e5e8;
    border-radius: 50px;
    padding: 5px 15px;
    margin-top: 10px;
}

.email-card .email-btn .btn {
    border: none;
}

.email-card .email-btn .btn.dropdown-toggle::after {
    display: none;
}

@media screen and (max-width: 767px) {
    .email-card .input-group {
        margin-top: 20px;
    }
}

.email-content {
    border-bottom: 1px solid #e2e5e8;
    padding-bottom: 15px;
}

.email-read {
    display: flex;
    align-items: flex-start;
}

@media screen and (max-width: 575px) {
    .email-read {
        display: inline-block;
    }

    .email-read .photo-table {
        margin-bottom: 10px;
    }

    .email-contant {
        margin: 0 !important;
        padding: 0 !important;
    }
}

/* ==================  email-page  End  =================== */
/* ==============================================================
                     image-cropper  Start
====================================================== */
.docs-buttons .btn {
    margin-bottom: 10px !important;
}

.docs-data .input-group {
    background: transparent;
    margin-bottom: 10px;
}

.docs-data > .input-group > label {
    min-width: 80px;
}

.docs-data .input-group > span {
    min-width: 50px;
}

.img-container {
    min-height: 200px;
    max-height: 516px;
    margin-bottom: 20px;
}

.img-container > img {
    max-width: 100%;
}

@media (min-width: 768px) {
    .img-container {
        min-height: 516px;
    }
}

.docs-preview {
    margin-right: -15px;
}

.docs-preview .img-preview {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
    overflow: hidden;
}

.docs-preview .img-preview > img {
    max-width: 100%;
}

.docs-preview .preview-lg {
    width: 100% !important;
}

.docs-preview .preview-md {
    width: 139px;
    height: 78px;
}

.docs-preview .preview-sm {
    width: 69px;
    height: 39px;
}

.docs-preview .preview-xs {
    width: 35px;
    height: 20px;
    margin-right: 0;
}

.docs-buttons > .btn,
.docs-buttons > .btn-group,
.docs-buttons > .form-control {
    margin-right: 5px;
}

.docs-toggles > .btn,
.docs-toggles > .btn-group,
.docs-toggles > .dropdown {
    margin-bottom: 10px;
}

.docs-tooltip {
    display: block;
    margin: -6px -12px;
    padding: 6px 12px;
}

.docs-tooltip > .icon {
    margin: 0 -3px;
    vertical-align: top;
}

.tooltip-inner {
    white-space: normal;
}

.btn-upload .tooltip-inner {
    white-space: nowrap;
}

@media (max-width: 400px) {
    .btn-group-crop {
        margin-right: -15px !important;
    }

    .btn-group-crop > .btn {
        padding-left: 5px;
        padding-right: 5px;
    }

    .btn-group-crop .docs-tooltip {
        margin-left: -5px;
        margin-right: -5px;
        padding-left: 5px;
        padding-right: 5px;
    }
}

.docs-options .dropdown-menu {
    width: 100%;
}

.docs-options .dropdown-menu > li {
    padding: 3px 20px;
    font-size: 14px;
}

.docs-options .dropdown-menu > li:hover {
    background-color: #f7f7f7;
}

.docs-options .dropdown-menu > li > label {
    display: block;
}

.docs-cropped .modal-body {
    text-align: center;
}

.docs-cropped .modal-body > canvas,
  .docs-cropped .modal-body > img {
    max-width: 100%;
}

.card-block .docs-options .dropdown-menu {
    top: inherit;
}

/* ==================  image-cropper end  ======================================= */
/**  =====================
      Help Desk Application css start
==========================  **/
.hd-body .excerpt {
    padding: 15px;
    background: #e9e9e9;
    border: 1px solid #e2e5e8;
}

.hd-body .ticket-customer,
.hd-body .ticket-type-icon {
    display: block;
    text-transform: capitalize;
}

.hd-body:hover .hover-blk {
    transform: scale(1);
}

.sm-view .card-body .excerpt,
.sm-view .card-body ul.list-inline {
    display: none;
}

.md-view .excerpt {
    display: none;
}

.md-view .col-auto ul li:nth-child(1),
.md-view .col-auto ul li:nth-child(3),
.sm-view .col-auto ul li:nth-child(1),
.sm-view .col-auto ul li:nth-child(3) {
    display: none;
}

.hover-blk {
    background: #fff;
    width: 270px;
    left: calc(100% + 10px);
    transform: scale(0);
    z-index: 5;
    transition: all 0.1s ease-out;
}

.hover-blk .img-txt p {
    display: inline-block;
}

.topic-name h1 {
    float: left;
    font-weight: normal;
}

.topic-name .btn-star {
    float: right;
}

.dicon-blk {
    top: 0;
    right: 0;
}

.dicon-blk li {
    display: inline-block;
}

.hd-detail .col-right .edit-del {
    opacity: 0;
}

.hd-detail .col-right .edit-del i {
    opacity: 0.2;
}

.hd-detail .col-right .edit-del i:hover {
    opacity: 1;
}

.hd-detail:hover .edit-del {
    opacity: 1;
}

.hdd-user i {
    bottom: 0;
}

.ticket-block .hd-body {
    border-left: 3px solid #ccc;
}

.ticket-block .col.border-right {
    border-color: #ccc !important;
}

.ticket-block .ticket-type-icon {
    font-weight: 500;
    color: #111;
}

.ticket-block .excerpt h6 {
    color: #686c71;
    font-weight: 500;
}

.ticket-block .excerpt h6 a {
    color: #686c71;
}

.ticket-block .excerpt h6 a:hover {
    text-decoration: underline !important;
    color: #111;
}

.ticket-block.open-tic .hd-body {
    border-color: #ea394a;
}

.ticket-block.close-tic .hd-body {
    border-color: #5AC17F;
}

.right-col .card-footer label {
    font-weight: 500;
}

.q-view {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 1030;
    top: 0;
    right: 0;
    visibility: hidden;
}

.q-view .overlay {
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.q-view .content {
    width: 585px;
    height: 100vh;
    z-index: 5;
    position: absolute;
    top: 0;
    background-color: #fff;
    padding-top: 20px;
    box-shadow: 0 0 100px rgba(0, 0, 0, 0.3);
    right: -765px;
    transition: right 0.195s ease-in, visibility 0s linear 0.195s;
    min-height: 100vh;
    overflow: auto;
}

.q-view.active {
    visibility: visible;
}

.q-view.active .content {
    right: 0;
    transition: right 0.225s ease-out;
}

.select2-container--default {
    margin-bottom: 10px;
}

.select2-container--default .select2-selection {
    border-color: #e2e5e8;
}

.hdd-right-side {
    width: 495px;
}

.hdd-right-side .hdd-right-inner {
    position: fixed;
    width: 465px;
}

.span-content a {
    padding: 0 7px;
}

.file-btn {
    position: relative;
    overflow: hidden;
}

.file-btn input {
    position: absolute;
    font-size: 50px;
    opacity: 0;
    right: 0;
    top: 0;
}

@media (max-width: 992px) {
    .hd-detail .col-right .edit-del {
        opacity: 1;
    }
}

@media only screen and (max-width: 767px) {
    .hdd-right-side {
        width: 100%;
    }

    .hdd-right-side .hdd-right-inner {
        position: static;
        width: 100%;
    }
}

@media (max-width: 575px) {
    .q-view .content {
        width: 450px;
    }
}

@media (max-width: 380px) {
    .q-view .content {
        width: 300px;
    }
}

/**====== Help Desk Application css start ======**/
.fc-view {
    margin-top: 30px;
}

.none-border .modal-footer {
    border-top: none;
}

.fc-toolbar {
    margin: 15px 0 5px;
}

.fc-toolbar h2 {
    font-size: 1.25rem;
    line-height: 1.875rem;
    text-transform: uppercase;
}

.fc-day-grid-event .fc-time {
    font-weight: 700;
}

.fc-day {
    background: transparent;
}

.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active,
.fc-toolbar .ui-state-hover,
.fc-toolbar button:focus,
.fc-toolbar button:hover {
    z-index: 0;
}

.fc th.fc-widget-header {
    background: #1abc9c;
    color: #fff;
    border-color: #1abc9c;
    font-size: 13px;
    line-height: 20px;
    padding: 10px 0;
    text-transform: uppercase;
}

.fc-unthemed .fc-divider,
.fc-unthemed .fc-popover,
.fc-unthemed .fc-row,
.fc-unthemed tbody,
.fc-unthemed td,
.fc-unthemed th,
.fc-unthemed thead {
    border-color: #f0f2f3;
}

.fc-today-button,
.fc-button {
    background: #f0f2f3;
    border: none;
    color: #343a40;
    text-shadow: none;
    text-transform: capitalize;
    box-shadow: none;
    border-radius: 3px;
    margin: 0.375rem 0.75rem;
    padding: 0.375rem 0.75rem !important;
    height: auto !important;
}

.fc-text-arrow {
    font-family: inherit;
    font-size: 1rem;
}

.fc-state-hover {
    background: #e9ecef;
}

.fc-state-highlight {
    background: #dee2e6;
}

.fc-state-active,
.fc-state-disabled,
.fc-state-down {
    background-color: #1abc9c;
    color: #fff;
    text-shadow: none;
}

.fc-cell-overlay {
    background: #dee2e6;
}

.fc-unthemed td.fc-today {
    background: #f8f9fa;
}

.fc-unthemed .fc-divider,
.fc-unthemed .fc-list-heading td,
.fc-unthemed .fc-popover .fc-header {
    background: #f8f9fa;
}

.fc-event,
.fc-event:not([href]) {
    background-color: #1abc9c;
    border-color: #1abc9c;
    color: #fff;
    padding: 5px 10px;
    border-radius: 2px;
    margin-bottom: 5px;
    cursor: move;
}

.external-event {
    cursor: move;
    margin: 10px 0;
    padding: 8px 10px;
    color: #fff;
}

.fc-basic-view td.fc-week-number span {
    padding-right: 8px;
}

.fc-basic-view td.fc-day-number {
    padding-right: 8px;
}

.fc-basic-view .fc-content {
    color: #fff;
}

.fc-time-grid-event .fc-content {
    color: #fff;
}

.fc-today-button,
.fc .fc-button-group > * {
    margin-bottom: 4px;
    margin-left: 10px;
    border-radius: 2px;
    font-size: 1rem;
}

.fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
    float: right;
    height: 20px;
    width: 20px;
    text-align: center;
    line-height: 20px;
    background-color: #f0f2f3;
    border-radius: 2px;
    margin: 5px;
    font-size: 12px;
    border: 1px solid #ebedef;
}

.fc-scroller {
    overflow: visible !important;
    height: auto !important;
}

@media (max-width: 767.98px) {
    .fc-toolbar .fc-center,
  .fc-toolbar .fc-left,
  .fc-toolbar .fc-right {
        float: none;
        display: block;
        clear: both;
        margin: 10px 0;
    }

    .fc .fc-toolbar > * > * {
        float: none;
    }

    .fc-today-button {
        display: none;
    }
}

/**  =====================
      Icon layouts css start
==========================  **/
.i-main .i-block {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
    margin: 5px;
    border: 1px solid #f1f1f1;
    position: relative;
    cursor: pointer;
}

.i-main .i-block i {
    font-size: 30px;
}

.i-main .i-block label {
    margin-bottom: 0;
    display: none;
}

.i-main .i-block span.ic-badge {
    position: absolute;
    bottom: 0;
    right: 0;
}

.i-main .i-block .flag-icon-background {
    width: 40px;
    height: 40px;
}

.sample-icon .i-block {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
    margin: 5px;
    border-radius: 50%;
    border: 1px solid #f1f1f1;
    position: relative;
    cursor: pointer;
}

.sample-icon .i-block i {
    font-size: 28px;
}

.sample-icon .i-block:nth-child(1) {
    border-color: #1abc9c;
    background: rgba(26, 188, 156, 0.1);
}

.sample-icon .i-block:nth-child(1) i {
    color: #1abc9c;
}

.sample-icon .i-block:nth-child(2) {
    border-color: #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.sample-icon .i-block:nth-child(2) i {
    color: #6610f2;
}

.sample-icon .i-block:nth-child(3) {
    border-color: #6f42c1;
    background: rgba(111, 66, 193, 0.1);
}

.sample-icon .i-block:nth-child(3) i {
    color: #6f42c1;
}

.sample-icon .i-block:nth-child(4) {
    border-color: #e83e8c;
    background: rgba(232, 62, 140, 0.1);
}

.sample-icon .i-block:nth-child(4) i {
    color: #e83e8c;
}

.sample-icon .i-block:nth-child(5) {
    border-color: #e74c3c;
    background: rgba(231, 76, 60, 0.1);
}

.sample-icon .i-block:nth-child(5) i {
    color: #e74c3c;
}

.sample-icon .i-block:nth-child(6) {
    border-color: #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.sample-icon .i-block:nth-child(6) i {
    color: #fd7e14;
}

.sample-icon .i-block:nth-child(7) {
    border-color: #f1c40f;
    background: rgba(241, 196, 15, 0.1);
}

.sample-icon .i-block:nth-child(7) i {
    color: #f1c40f;
}

.sample-icon .i-block:nth-child(8) {
    border-color: #2ecc71;
    background: rgba(46, 204, 113, 0.1);
}

.sample-icon .i-block:nth-child(8) i {
    color: #2ecc71;
}

.sample-icon .i-block:nth-child(9) {
    border-color: #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.sample-icon .i-block:nth-child(9) i {
    color: #20c997;
}

.sample-icon .i-block:nth-child(10) {
    border-color: #00acc1;
    background: rgba(0, 172, 193, 0.1);
}

.sample-icon .i-block:nth-child(10) i {
    color: #00acc1;
}

.sample-icon .i-block:nth-child(11) {
    border-color: #1abc9c;
    background: rgba(26, 188, 156, 0.1);
}

.sample-icon .i-block:nth-child(11) i {
    color: #1abc9c;
}

.sample-icon .i-block:nth-child(12) {
    border-color: #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.sample-icon .i-block:nth-child(12) i {
    color: #6610f2;
}

.sample-icon .i-block:nth-child(13) {
    border-color: #6f42c1;
    background: rgba(111, 66, 193, 0.1);
}

.sample-icon .i-block:nth-child(13) i {
    color: #6f42c1;
}

.sample-icon .i-block:nth-child(14) {
    border-color: #e83e8c;
    background: rgba(232, 62, 140, 0.1);
}

.sample-icon .i-block:nth-child(14) i {
    color: #e83e8c;
}

.sample-icon .i-block:nth-child(15) {
    border-color: #e74c3c;
    background: rgba(231, 76, 60, 0.1);
}

.sample-icon .i-block:nth-child(15) i {
    color: #e74c3c;
}

.sample-icon .i-block:nth-child(16) {
    border-color: #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.sample-icon .i-block:nth-child(16) i {
    color: #fd7e14;
}

.sample-icon .i-block:nth-child(17) {
    border-color: #f1c40f;
    background: rgba(241, 196, 15, 0.1);
}

.sample-icon .i-block:nth-child(17) i {
    color: #f1c40f;
}

.sample-icon .i-block:nth-child(18) {
    border-color: #2ecc71;
    background: rgba(46, 204, 113, 0.1);
}

.sample-icon .i-block:nth-child(18) i {
    color: #2ecc71;
}

.sample-icon .i-block:nth-child(19) {
    border-color: #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.sample-icon .i-block:nth-child(19) i {
    color: #20c997;
}

.sample-icon .i-block:nth-child(20) {
    border-color: #00acc1;
    background: rgba(0, 172, 193, 0.1);
}

.sample-icon .i-block:nth-child(20) i {
    color: #00acc1;
}

.sample-icon .i-block:nth-child(21) {
    border-color: #1abc9c;
    background: rgba(26, 188, 156, 0.1);
}

.sample-icon .i-block:nth-child(21) i {
    color: #1abc9c;
}

.sample-icon .i-block:nth-child(22) {
    border-color: #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.sample-icon .i-block:nth-child(22) i {
    color: #6610f2;
}

.sample-icon .i-block:nth-child(23) {
    border-color: #6f42c1;
    background: rgba(111, 66, 193, 0.1);
}

.sample-icon .i-block:nth-child(23) i {
    color: #6f42c1;
}

.sample-icon .i-block:nth-child(24) {
    border-color: #e83e8c;
    background: rgba(232, 62, 140, 0.1);
}

.sample-icon .i-block:nth-child(24) i {
    color: #e83e8c;
}

.sample-icon .i-block:nth-child(25) {
    border-color: #e74c3c;
    background: rgba(231, 76, 60, 0.1);
}

.sample-icon .i-block:nth-child(25) i {
    color: #e74c3c;
}

.sample-icon .i-block:nth-child(26) {
    border-color: #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.sample-icon .i-block:nth-child(26) i {
    color: #fd7e14;
}

.sample-icon .i-block:nth-child(27) {
    border-color: #f1c40f;
    background: rgba(241, 196, 15, 0.1);
}

.sample-icon .i-block:nth-child(27) i {
    color: #f1c40f;
}

.sample-icon .i-block:nth-child(28) {
    border-color: #2ecc71;
    background: rgba(46, 204, 113, 0.1);
}

.sample-icon .i-block:nth-child(28) i {
    color: #2ecc71;
}

.sample-icon .i-block:nth-child(29) {
    border-color: #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.sample-icon .i-block:nth-child(29) i {
    color: #20c997;
}

.sample-icon .i-block:nth-child(30) {
    border-color: #00acc1;
    background: rgba(0, 172, 193, 0.1);
}

.sample-icon .i-block:nth-child(30) i {
    color: #00acc1;
}

.sample-icon .i-block:nth-child(31) {
    border-color: #1abc9c;
    background: rgba(26, 188, 156, 0.1);
}

.sample-icon .i-block:nth-child(31) i {
    color: #1abc9c;
}

.sample-icon .i-block:nth-child(32) {
    border-color: #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.sample-icon .i-block:nth-child(32) i {
    color: #6610f2;
}

.sample-icon .i-block:nth-child(33) {
    border-color: #6f42c1;
    background: rgba(111, 66, 193, 0.1);
}

.sample-icon .i-block:nth-child(33) i {
    color: #6f42c1;
}

.sample-icon .i-block:nth-child(34) {
    border-color: #e83e8c;
    background: rgba(232, 62, 140, 0.1);
}

.sample-icon .i-block:nth-child(34) i {
    color: #e83e8c;
}

.sample-icon .i-block:nth-child(35) {
    border-color: #e74c3c;
    background: rgba(231, 76, 60, 0.1);
}

.sample-icon .i-block:nth-child(35) i {
    color: #e74c3c;
}

.sample-icon .i-block:nth-child(36) {
    border-color: #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.sample-icon .i-block:nth-child(36) i {
    color: #fd7e14;
}

.sample-icon .i-block:nth-child(37) {
    border-color: #f1c40f;
    background: rgba(241, 196, 15, 0.1);
}

.sample-icon .i-block:nth-child(37) i {
    color: #f1c40f;
}

.sample-icon .i-block:nth-child(38) {
    border-color: #2ecc71;
    background: rgba(46, 204, 113, 0.1);
}

.sample-icon .i-block:nth-child(38) i {
    color: #2ecc71;
}

.sample-icon .i-block:nth-child(39) {
    border-color: #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.sample-icon .i-block:nth-child(39) i {
    color: #20c997;
}

.sample-icon .i-block:nth-child(40) {
    border-color: #00acc1;
    background: rgba(0, 172, 193, 0.1);
}

.sample-icon .i-block:nth-child(40) i {
    color: #00acc1;
}

/**====== Icon layouts css end ======**/
/**  =====================
      user card css start
==========================  **/
.user-card .cover-img-block {
    position: relative;
}

.user-card .cover-img-block .change-cover {
    position: absolute;
    top: 30px;
    left: 30px;
    z-index: 5;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.user-card .cover-img-block .change-cover .dropdown-toggle {
    color: #fff;
    background: rgba(0, 0, 0, 0.6);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.user-card .cover-img-block .change-cover .dropdown-toggle:after {
    display: none;
}

.user-card .cover-img-block .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 1;
    background: rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease-in-out;
}

.user-card .cover-img-block:hover .change-cover,
  .user-card .cover-img-block:hover .overlay {
    opacity: 1;
}

.user-card .user-about-block {
    margin-top: -30px;
}

.user-card .user-about-block img {
    box-shadow: 0 0 0 5px #fff;
}

.user-card .user-about-block .certificated-badge {
    position: absolute;
    bottom: -5px;
    right: -5px;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    background: #fff;
    padding: 5px 3px;
}

.user-card .user-about-block .certificated-badge .bg-icon {
    font-size: 22px;
}

.user-card .user-about-block .certificated-badge .front-icon {
    font-size: 11px;
    position: absolute;
    top: 11px;
    left: 9px;
}

.user-card .hover-data {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(36, 46, 62, 0.92);
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: scale(0);
    transition: all 0.3s ease-in-out;
}

.user-card:hover .hover-data {
    transform: scale(1);
}

.user-card .change-profile .dropdown-toggle::after {
    display: none;
}

.user-card .change-profile .profile-dp {
    position: relative;
    overflow: hidden;
    padding: 5px;
    width: 110px;
    height: 110px;
    border-radius: 50%;
}

.user-card .change-profile .profile-dp .overlay {
    position: absolute;
    top: 5px;
    left: 5px;
    width: calc(100% - 10px);
    height: calc(100% - 10px);
    border-radius: 50%;
    opacity: 0;
    z-index: 1;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease-in-out;
}

.user-card .change-profile .profile-dp .overlay span {
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
    border-top: 1px solid rgba(255, 255, 255, 0.4);
    padding: 0 0 5px;
}

.user-card .change-profile .profile-dp:hover .overlay {
    opacity: 1;
}

@media only screen and (max-width: 992px) {
    .user-card .user-about-block {
        margin-top: -10px;
    }

    .user-card .wid-80 {
        width: 60px;
    }

    .user-card .change-profile .profile-dp {
        width: 90px;
        height: 90px;
    }

    .user-card.user-card-2.shape-right .cover-img-block {
        -webkit-clip-path: none;
        clip-path: none;
    }

    .user-card .cover-img-block .change-cover .dropdown-toggle {
        padding: 5px 7px;
    }
}

.user-card-2 .cover-img-block {
    -webkit-clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 80%);
    clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 80%);
}

.user-card-2.shape-right .cover-img-block {
    -webkit-clip-path: polygon(0 0, 100% 0%, 100% 80%, 0% 100%);
    clip-path: polygon(0 0, 100% 0%, 100% 80%, 0% 100%);
}

.user-card-2.shape-center .cover-img-block {
    -webkit-clip-path: polygon(0 0, 100% 0%, 100% 80%, 50% 100%, 0% 80%);
    clip-path: polygon(0 0, 100% 0%, 100% 80%, 50% 100%, 0% 80%);
}

.user-card-3 .certificated-badge {
    position: absolute;
    bottom: 5px;
    right: 5px;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background: #fff;
    padding: 5px 3px;
}

.user-card-3 .certificated-badge .bg-icon {
    font-size: 30px;
}

.user-card-3 .certificated-badge .front-icon {
    font-size: 14px;
    position: absolute;
    top: 14px;
    left: 13px;
}

.user-card-3 .social-top-link {
    position: absolute;
    top: 20px;
    left: 20px;
}

.user-card-3.social-hover .social-top-link {
    top: 20px;
    left: 20px;
    overflow: hidden;
}

.user-card-3.social-hover .social-top-link .btn,
  .user-card-3.social-hover .social-top-link li {
    margin-left: -100px;
    transition: all 0.2s ease-in-out;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(1),
    .user-card-3.social-hover .social-top-link li:nth-child(1) {
    transition-delay: 0.05s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(2),
    .user-card-3.social-hover .social-top-link li:nth-child(2) {
    transition-delay: 0.1s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(3),
    .user-card-3.social-hover .social-top-link li:nth-child(3) {
    transition-delay: 0.15s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(4),
    .user-card-3.social-hover .social-top-link li:nth-child(4) {
    transition-delay: 0.2s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(5),
    .user-card-3.social-hover .social-top-link li:nth-child(5) {
    transition-delay: 0.25s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(6),
    .user-card-3.social-hover .social-top-link li:nth-child(6) {
    transition-delay: 0.3s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(7),
    .user-card-3.social-hover .social-top-link li:nth-child(7) {
    transition-delay: 0.35s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(8),
    .user-card-3.social-hover .social-top-link li:nth-child(8) {
    transition-delay: 0.4s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(9),
    .user-card-3.social-hover .social-top-link li:nth-child(9) {
    transition-delay: 0.45s;
}

.user-card-3.social-hover .social-top-link .btn:nth-child(10),
    .user-card-3.social-hover .social-top-link li:nth-child(10) {
    transition-delay: 0.5s;
}

.user-card-3.social-hover:hover .social-top-link .btn,
.user-card-3.social-hover:hover .social-top-link li {
    margin-left: 0;
}

.user-profile {
    margin-top: -25px;
    margin-left: -25px;
    margin-right: -25px;
    background: #fff;
}

.user-profile .card-body {
    position: relative;
    z-index: 1;
    box-shadow: 0 2px 4px -2px rgba(54, 80, 138, 0.3);
}

.user-profile .card-body .overlay > span {
    cursor: pointer;
}

.user-profile .cover-img-block:hover > img {
    -webkit-filter: grayscale(1) blur(1px);
    filter: grayscale(1) blur(1px);
}

.user-profile .profile-dp .overlay {
    text-align: left;
}

.user-profile .user-about-block .certificated-badge {
    bottom: 8px;
    right: 0;
    z-index: 2;
}

.user-profile .profile-tabs {
    border-bottom: 0;
    margin-top: 30px;
}

.user-profile .profile-tabs .nav-item {
    margin-bottom: -0px;
}

.user-profile .profile-tabs .nav-item .nav-link {
    position: relative;
}

.user-profile .profile-tabs .nav-item .nav-link:after {
    content: "";
    background: #1abc9c;
    position: absolute;
    transition: all 0.3s ease-in-out;
    left: 50%;
    right: 50%;
    bottom: -1px;
    height: 2px;
    border-radius: 2px 2px 0 0;
}

.user-profile .profile-tabs .nav-link:hover {
    border-color: transparent;
}

.user-profile .profile-tabs .nav-item.show .nav-link,
    .user-profile .profile-tabs .nav-link.active {
    border-color: transparent;
}

.user-profile .profile-tabs .nav-item.show .nav-link:after,
      .user-profile .profile-tabs .nav-link.active:after {
    left: 0;
    right: 0;
}

@media only screen and (max-width: 575px) {
    .user-profile {
        margin-top: -30px;
        margin-left: -15px;
        margin-right: -15px;
    }
}

.user-profile-list table {
    border-spacing: 0 10px;
    width: calc(100% - 10px);
    margin: 0 5px;
}

.user-profile-list table tbody tr {
    box-shadow: 0 2px 1px rgba(0, 0, 0, 0.05);
    border-radius: 2px;
    position: relative;
}

.user-profile-list table tbody tr .overlay-edit {
    position: absolute;
    opacity: 0;
    top: 0;
    right: 0;
    background: #1abc9c;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.user-profile-list table tbody tr .overlay-edit .btn {
    border-radius: 50%;
    margin: 0 3px;
    width: 35px;
    height: 35px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.user-profile-list table tbody tr:hover {
    box-shadow: 0 0 6px 0 #1abc9c;
}

.user-profile-list table tbody tr:hover td {
    cursor: pointer;
    color: #fff;
    background: #1abc9c;
}

.user-profile-list table tbody tr:hover td h6 {
    color: #fff;
}

.user-profile-list table tbody tr:hover td .overlay-edit {
    opacity: 1;
}

.user-profile-list table tr td,
  .user-profile-list table tr th {
    vertical-align: middle;
    border: none;
}

.user-profile-list table tr td {
    background: #fff;
    position: relative;
}

.user-profile-list table tr td:first-child {
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.user-profile-list table tr td:last-child {
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
}

/**====== user card css end ======**/

</style>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="fa fa-bars fa-lg"></span>
      </a>

      <a class="brand" href="/" title="<?php echo CHtml::encode(Yii::app()->name . ' | ' . Yii::app()->params['GHPCS']['clustername']); ?>">
        <img src="<?php echo $baseUrl.'/img/brand_logo.png';?>" alt="<?php echo CHtml::encode(Yii::app()->name);?>"
          style="border-right:1px solid #fff;padding-right:5px;">
        <i class="fa fa-cubes"></i> <?php echo CHtml::encode(Yii::app()->params['GHPCS']['clustername']); ?>
      </a>

      <div class="nav-collapse collapse">
        <?php $this->widget('zii.widgets.CMenu',array(
            'htmlOptions'=>array('class'=>'pull-right nav'),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            //'itemCssClass'=>'item-test',
            'encodeLabel'=>false,
            'items'=>$this->menuTopNav,
        )); ?>
      </div>
    </div>
  </div>
</div>
<!-- [ navigation menu ] start -->
  <nav class="pcoded-navbar  ">
   <div class="navbar-wrapper  ">
    <div class="navbar-content scroll-div ">
     <div class="">
        <div class="main-menu-header">
       <!-- <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image"> -->
       <div class="user-details">
        <span>Sudheer</span>
        <div id="more-details">Software Developer <i class="fa fa-chevron-down m-l-5"></i>
        </div>
       </div>
      </div>
      <div class="collapse" id="nav-user-link">
  <ul class="list-unstyled">
        <li class="list-group-item">
         <a href="user-profile.html">
          <i class="feather icon-user m-r-5"></i>View Profile </a>
        </li>
        <li class="list-group-item">
         <a href="#!">
          <i class="feather icon-settings m-r-5"></i>Settings </a>
        </li>
        <li class="list-group-item">
         <a href="auth-normal-sign-in.html">
          <i class="feather icon-log-out m-r-5"></i>Logout </a>
        </li>
       </ul>
      </div>
     </div>
     <ul class="nav pcoded-inner-navbar ">
      <li class="nav-item pcoded-menu-caption">
       <label>Navigation</label>
      </li>
      <li class="nav-item">
       <a href="http://localhost:8000/" class="nav-link ">
        <span class="pcoded-micon">
         <i class="feather icon-home"></i>
        </span>
        <span class="pcoded-mtext">Dashboard</span>
       </a>
      </li>
      <li class="nav-item">
       <a href="/users" class="nav-link ">
        <span class="pcoded-micon">
         <i class="feather icon-user"></i>
        </span>
        <span class="pcoded-mtext">Users</span>
       </a>
      </li>
      <li class="nav-item pcoded-menu-caption">
       <label>Utilities</label>
      </li>
      <li class="nav-item">
       <a href="/settings" class="nav-link ">
        <span class="pcoded-micon">
         <i class="feather icon-settings"></i>
        </span>
        <span class="pcoded-mtext">Settings</span>
       </a>
      </li>
      <li class="nav-item pcoded-hasmenu pcoded-trigger">
       <a href="#!" class="nav-link ">
        <span class="pcoded-micon">
         <i class="feather icon-layout"></i>
        </span>
        <span class="pcoded-mtext">Admin</span>
       </a>
       <ul class="pcoded-submenu">
        <li>
         <a href="#" target="_blank">View Account</a>
        </li>
        <li>
         <a href="#" target="_blank">Update Account</a>
        </li>
        <li>
         <a href="logout/" target="_blank">Logout</a>
        </li>
       </ul>
      </li>
<!--          <li class="nav-item pcoded-menu-caption">-->
      <!--            <label>App's Info</label>-->
      <!--          </li>-->
      <li class="nav-item pcoded-hasmenu">
       <a href="#!" class="nav-link ">
        <span class="pcoded-micon">
         <i class="feather icon-box"></i>
        </span>
        <span class="pcoded-mtext">App's Info</span>
       </a>
       <ul class="pcoded-submenu">
        <li>
         <a href="/application_install" target="_blank">Application Installer</a>
        </li>
        <li>
         <a href="/application_uninstall" target="_blank">Application Uninstaller</a>
        </li>
        <li>
         <a href="/application_backup" target="_blank">Application Backup</a>
        </li>
       </ul>
      </li>
      <li class="nav-item pcoded-menu-caption">
       <label>Apps</label>
      </li>
      <li class="nav-item pcoded-hasmenu">
       <a href="#!" class="nav-link ">
        <span class="pcoded-micon">
         <i class="feather icon-box"></i>
        </span>
        <span class="pcoded-mtext">GCM</span>
       </a>
      </li>
      <li class="nav-item pcoded-hasmenu">
       <a href="#!" class="nav-link ">
        <span class="pcoded-micon">
         <i class="feather icon-box"></i>
        </span>
        <span class="pcoded-mtext">Slurm</span>
       </a>
      </li>
      <li class="nav-item pcoded-menu-caption">
       <label>Tools &amp; Help</label>
      </li>
      <li class="nav-item pcoded-hasmenu">
       <a href="#!" class="nav-link ">
        <span class="pcoded-micon">
         <i class='fas fa-tools'></i>
        </span>
        <span class="pcoded-mtext">Tools</span>
       </a>
       <ul class="pcoded-submenu">
        <li>
         <a href="#" target="_blank">>_SSH Terminal</a>
        </li>
        <li>
         <a href="#" target="_blank">VNC Terminal</a>
        </li>
        <li>
         <a href="/session_log" target="_blank">Sessions Logs</a>
        </li>
        <li>
         <a href="/system_log_viewer" target="_blank">System Log Viewer</a>
        </li>
       </ul>
      </li>
      <li class="nav-item pcoded-hasmenu">
       <a href="#!" class="nav-link ">
        <span class="pcoded-micon">
         <i class="fa fa-question-circle"></i>
        </span>
        <span class="pcoded-mtext">Help</span>
       </a>
       <ul class="pcoded-submenu">
        <li>
         <a href="#" target="_blank">Ganana HPC Suite Help</a>
        </li>
        <li>
         <a href="/about" target="_blank">About</a>
        </li>
       </ul>
      </li>
     </ul>
     <footer class="footer py-2">
      <p style="color:#fff; position: fixed; bottom: 0; width: 100%; height: 60px;">© 2022 Locuz. All rights reserved</p>
     </footer>
    </div>
   </div>
  </nav>
  <!-- [ navigation menu ] end -->
/*
! tailwindcss v3.3.5 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
*/

html {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.prose {
  color: var(--tw-prose-body);
  max-width: 65ch;
}

.prose :where(p):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 1.25em;
  margin-bottom: 1.25em;
}

.prose :where([class~="lead"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-lead);
  font-size: 1.25em;
  line-height: 1.6;
  margin-top: 1.2em;
  margin-bottom: 1.2em;
}

.prose :where(a):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-links);
  text-decoration: underline;
  font-weight: 500;
}

.prose :where(strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-bold);
  font-weight: 600;
}

.prose :where(a strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}

.prose :where(blockquote strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}

.prose :where(thead th strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}

.prose :where(ol):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: decimal;
  margin-top: 1.25em;
  margin-bottom: 1.25em;
  padding-left: 1.625em;
}

.prose :where(ol[type="A"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: upper-alpha;
}

.prose :where(ol[type="a"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: lower-alpha;
}

.prose :where(ol[type="A" s]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: upper-alpha;
}

.prose :where(ol[type="a" s]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: lower-alpha;
}

.prose :where(ol[type="I"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: upper-roman;
}

.prose :where(ol[type="i"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: lower-roman;
}

.prose :where(ol[type="I" s]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: upper-roman;
}

.prose :where(ol[type="i" s]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: lower-roman;
}

.prose :where(ol[type="1"]):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: decimal;
}

.prose :where(ul):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  list-style-type: disc;
  margin-top: 1.25em;
  margin-bottom: 1.25em;
  padding-left: 1.625em;
}

.prose :where(ol > li):not(:where([class~="not-prose"],[class~="not-prose"] *))::marker {
  font-weight: 400;
  color: var(--tw-prose-counters);
}

.prose :where(ul > li):not(:where([class~="not-prose"],[class~="not-prose"] *))::marker {
  color: var(--tw-prose-bullets);
}

.prose :where(dt):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 600;
  margin-top: 1.25em;
}

.prose :where(hr):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-color: var(--tw-prose-hr);
  border-top-width: 1px;
  margin-top: 3em;
  margin-bottom: 3em;
}

.prose :where(blockquote):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 500;
  font-style: italic;
  color: var(--tw-prose-quotes);
  border-left-width: 0.25rem;
  border-left-color: var(--tw-prose-quote-borders);
  quotes: "\201C""\201D""\2018""\2019";
  margin-top: 1.6em;
  margin-bottom: 1.6em;
  padding-left: 1em;
}

.prose :where(blockquote p:first-of-type):not(:where([class~="not-prose"],[class~="not-prose"] *))::before {
  content: open-quote;
}

.prose :where(blockquote p:last-of-type):not(:where([class~="not-prose"],[class~="not-prose"] *))::after {
  content: close-quote;
}

.prose :where(h1):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 800;
  font-size: 2.25em;
  margin-top: 0;
  margin-bottom: 0.8888889em;
  line-height: 1.1111111;
}

.prose :where(h1 strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 900;
  color: inherit;
}

.prose :where(h2):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 700;
  font-size: 1.5em;
  margin-top: 2em;
  margin-bottom: 1em;
  line-height: 1.3333333;
}

.prose :where(h2 strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 800;
  color: inherit;
}

.prose :where(h3):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 600;
  font-size: 1.25em;
  margin-top: 1.6em;
  margin-bottom: 0.6em;
  line-height: 1.6;
}

.prose :where(h3 strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 700;
  color: inherit;
}

.prose :where(h4):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 600;
  margin-top: 1.5em;
  margin-bottom: 0.5em;
  line-height: 1.5;
}

.prose :where(h4 strong):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 700;
  color: inherit;
}

.prose :where(img):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 2em;
  margin-bottom: 2em;
}

.prose :where(picture):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  display: block;
  margin-top: 2em;
  margin-bottom: 2em;
}

.prose :where(kbd):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  font-weight: 500;
  font-family: inherit;
  color: var(--tw-prose-kbd);
  box-shadow: 0 0 0 1px rgb(var(--tw-prose-kbd-shadows) / 10%), 0 3px 0 rgb(var(--tw-prose-kbd-shadows) / 10%);
  font-size: 0.875em;
  border-radius: 0.3125rem;
  padding-top: 0.1875em;
  padding-right: 0.375em;
  padding-bottom: 0.1875em;
  padding-left: 0.375em;
}

.prose :where(code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-code);
  font-weight: 600;
  font-size: 0.875em;
}

.prose :where(code):not(:where([class~="not-prose"],[class~="not-prose"] *))::before {
  content: "`";
}

.prose :where(code):not(:where([class~="not-prose"],[class~="not-prose"] *))::after {
  content: "`";
}

.prose :where(a code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}

.prose :where(h1 code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}

.prose :where(h2 code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
  font-size: 0.875em;
}

.prose :where(h3 code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
  font-size: 0.9em;
}

.prose :where(h4 code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}

.prose :where(blockquote code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}

.prose :where(thead th code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: inherit;
}

.prose :where(pre):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-pre-code);
  background-color: var(--tw-prose-pre-bg);
  overflow-x: auto;
  font-weight: 400;
  font-size: 0.875em;
  line-height: 1.7142857;
  margin-top: 1.7142857em;
  margin-bottom: 1.7142857em;
  border-radius: 0.375rem;
  padding-top: 0.8571429em;
  padding-right: 1.1428571em;
  padding-bottom: 0.8571429em;
  padding-left: 1.1428571em;
}

.prose :where(pre code):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  background-color: transparent;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-weight: inherit;
  color: inherit;
  font-size: inherit;
  font-family: inherit;
  line-height: inherit;
}

.prose :where(pre code):not(:where([class~="not-prose"],[class~="not-prose"] *))::before {
  content: none;
}

.prose :where(pre code):not(:where([class~="not-prose"],[class~="not-prose"] *))::after {
  content: none;
}

.prose :where(table):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  width: 100%;
  table-layout: auto;
  text-align: left;
  margin-top: 2em;
  margin-bottom: 2em;
  font-size: 0.875em;
  line-height: 1.7142857;
}

.prose :where(thead):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-bottom-width: 1px;
  border-bottom-color: var(--tw-prose-th-borders);
}

.prose :where(thead th):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-headings);
  font-weight: 600;
  vertical-align: bottom;
  padding-right: 0.5714286em;
  padding-bottom: 0.5714286em;
  padding-left: 0.5714286em;
}

.prose :where(tbody tr):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-bottom-width: 1px;
  border-bottom-color: var(--tw-prose-td-borders);
}

.prose :where(tbody tr:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-bottom-width: 0;
}

.prose :where(tbody td):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  vertical-align: baseline;
}

.prose :where(tfoot):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  border-top-width: 1px;
  border-top-color: var(--tw-prose-th-borders);
}

.prose :where(tfoot td):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  vertical-align: top;
}

.prose :where(figure > *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
  margin-bottom: 0;
}

.prose :where(figcaption):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  color: var(--tw-prose-captions);
  font-size: 0.875em;
  line-height: 1.4285714;
  margin-top: 0.8571429em;
}

.prose {
  --tw-prose-body: #374151;
  --tw-prose-headings: #111827;
  --tw-prose-lead: #4b5563;
  --tw-prose-links: #111827;
  --tw-prose-bold: #111827;
  --tw-prose-counters: #6b7280;
  --tw-prose-bullets: #d1d5db;
  --tw-prose-hr: #e5e7eb;
  --tw-prose-quotes: #111827;
  --tw-prose-quote-borders: #e5e7eb;
  --tw-prose-captions: #6b7280;
  --tw-prose-kbd: #111827;
  --tw-prose-kbd-shadows: 17 24 39;
  --tw-prose-code: #111827;
  --tw-prose-pre-code: #e5e7eb;
  --tw-prose-pre-bg: #1f2937;
  --tw-prose-th-borders: #d1d5db;
  --tw-prose-td-borders: #e5e7eb;
  --tw-prose-invert-body: #d1d5db;
  --tw-prose-invert-headings: #fff;
  --tw-prose-invert-lead: #9ca3af;
  --tw-prose-invert-links: #fff;
  --tw-prose-invert-bold: #fff;
  --tw-prose-invert-counters: #9ca3af;
  --tw-prose-invert-bullets: #4b5563;
  --tw-prose-invert-hr: #374151;
  --tw-prose-invert-quotes: #f3f4f6;
  --tw-prose-invert-quote-borders: #374151;
  --tw-prose-invert-captions: #9ca3af;
  --tw-prose-invert-kbd: #fff;
  --tw-prose-invert-kbd-shadows: 255 255 255;
  --tw-prose-invert-code: #fff;
  --tw-prose-invert-pre-code: #d1d5db;
  --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
  --tw-prose-invert-th-borders: #4b5563;
  --tw-prose-invert-td-borders: #374151;
  font-size: 1rem;
  line-height: 1.75;
}

.prose :where(picture > img):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
  margin-bottom: 0;
}

.prose :where(video):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 2em;
  margin-bottom: 2em;
}

.prose :where(li):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0.5em;
  margin-bottom: 0.5em;
}

.prose :where(ol > li):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-left: 0.375em;
}

.prose :where(ul > li):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-left: 0.375em;
}

.prose :where(.prose > ul > li p):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0.75em;
  margin-bottom: 0.75em;
}

.prose :where(.prose > ul > li > *:first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 1.25em;
}

.prose :where(.prose > ul > li > *:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-bottom: 1.25em;
}

.prose :where(.prose > ol > li > *:first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 1.25em;
}

.prose :where(.prose > ol > li > *:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-bottom: 1.25em;
}

.prose :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0.75em;
  margin-bottom: 0.75em;
}

.prose :where(dl):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 1.25em;
  margin-bottom: 1.25em;
}

.prose :where(dd):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0.5em;
  padding-left: 1.625em;
}

.prose :where(hr + *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}

.prose :where(h2 + *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}

.prose :where(h3 + *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}

.prose :where(h4 + *):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}

.prose :where(thead th:first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-left: 0;
}

.prose :where(thead th:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-right: 0;
}

.prose :where(tbody td, tfoot td):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-top: 0.5714286em;
  padding-right: 0.5714286em;
  padding-bottom: 0.5714286em;
  padding-left: 0.5714286em;
}

.prose :where(tbody td:first-child, tfoot td:first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-left: 0;
}

.prose :where(tbody td:last-child, tfoot td:last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  padding-right: 0;
}

.prose :where(figure):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 2em;
  margin-bottom: 2em;
}

.prose :where(.prose > :first-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-top: 0;
}

.prose :where(.prose > :last-child):not(:where([class~="not-prose"],[class~="not-prose"] *)) {
  margin-bottom: 0;
}

.visible {
  visibility: visible;
}

.collapse {
  visibility: collapse;
}

.relative {
  position: relative;
}

.sticky {
  position: sticky;
}

.top-0 {
  top: 0px;
}

.z-50 {
  z-index: 50;
}

.col-span-1 {
  grid-column: span 1 / span 1;
}

.col-span-3 {
  grid-column: span 3 / span 3;
}

.col-span-4 {
  grid-column: span 4 / span 4;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.-mb-\[70px\] {
  margin-bottom: -70px;
}

.mb-3 {
  margin-bottom: 0.75rem;
}

.mb-\[100px\] {
  margin-bottom: 100px;
}

.mr-0 {
  margin-right: 0px;
}

.mr-3 {
  margin-right: 0.75rem;
}

.mt-5 {
  margin-top: 1.25rem;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.flex {
  display: flex;
}

.table {
  display: table;
}

.grid {
  display: grid;
}

.contents {
  display: contents;
}

.hidden {
  display: none;
}

.aspect-square {
  aspect-ratio: 1 / 1;
}

.w-\[100px\] {
  width: 100px;
}

.w-\[150px\] {
  width: 150px;
}

.w-\[70px\] {
  width: 70px;
}

.w-fit {
  width: -moz-fit-content;
  width: fit-content;
}

.w-full {
  width: 100%;
}

.max-w-full {
  max-width: 100%;
}

.border-collapse {
  border-collapse: collapse;
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.resize {
  resize: both;
}

.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.grid-cols-4 {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.items-center {
  align-items: center;
}

.justify-center {
  justify-content: center;
}

.gap-5 {
  gap: 1.25rem;
}

.overflow-hidden {
  overflow: hidden;
}

.rounded-\[50\%\] {
  border-radius: 50%;
}

.rounded-xl {
  border-radius: 0.75rem;
}

.border {
  border-width: 1px;
}

.border-orange-500 {
  --tw-border-opacity: 1;
  border-color: rgb(249 115 22 / var(--tw-border-opacity));
}

.bg-orange-300 {
  --tw-bg-opacity: 1;
  background-color: rgb(253 186 116 / var(--tw-bg-opacity));
}

.bg-orange-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(249 115 22 / var(--tw-bg-opacity));
}

.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}

.p-10 {
  padding: 2.5rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-5 {
  padding: 1.25rem;
}

.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.py-0 {
  padding-top: 0px;
  padding-bottom: 0px;
}

.py-10 {
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.pt-0 {
  padding-top: 0px;
}

.pt-7 {
  padding-top: 1.75rem;
}

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.text-\[40px\] {
  font-size: 40px;
}

.text-\[70px\] {
  font-size: 70px;
}

.text-base {
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.font-bold {
  font-weight: 700;
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.underline {
  text-decoration-line: underline;
}

.outline {
  outline-style: solid;
}

.ring-4 {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.ring-orange-500 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity));
}

.hover\:bg-orange-500:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(249 115 22 / var(--tw-bg-opacity));
}

.hover\:text-white:hover {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

@media (min-width: 640px) {
  .sm\:col-span-1 {
    grid-column: span 1 / span 1;
  }

  .sm\:col-span-3 {
    grid-column: span 3 / span 3;
  }

  .sm\:block {
    display: block;
  }

  .sm\:flex {
    display: flex;
  }

  .sm\:hidden {
    display: none;
  }

  .sm\:w-\[100px\] {
    width: 100px;
  }

  .sm\:w-\[300px\] {
    width: 300px;
  }

  .sm\:gap-5 {
    gap: 1.25rem;
  }

  .sm\:py-0 {
    padding-top: 0px;
    padding-bottom: 0px;
  }

  .sm\:text-left {
    text-align: left;
  }

  .sm\:text-\[100px\] {
    font-size: 100px;
  }

  .sm\:text-\[80px\] {
    font-size: 80px;
  }

  .sm\:text-base {
    font-size: 1rem;
    line-height: 1.5rem;
  }
}

.\[\&_a\]\:mr-3 a {
  margin-right: 0.75rem;
}

.\[\&_a\]\:inline-block a {
  display: inline-block;
}

.last\:\[\&_a\]\:mr-0 a:last-child {
  margin-right: 0px;
}
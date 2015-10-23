---
layout: docs
title: Support
description: An outline Browser Support of CSS3 features and workarounds for non-modern browsing technologies.
permalink: /docs/support/
---

## Browsers

{% include tables/browsers.html %}

### Android Default Browser

The Default Android Browser is not supported. Android 4.4+ does not ship with a default Browser. (note: Chrome on Android is fully supported)

### IE Compatibility modes

Turret is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate `<meta>` tag in your pages:

```html
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
```

The meta tag tells the IE rendering engine two things:

1. It should use the latest, or edge, version of the IE rendering environment
2. If already installed, it should use the Google Chrome Frame rendering engine.

This line breaks validation, and the Google Chrome Frame part won't work inside a conditional comment. To avoid these edge case issues it is recommended that you remove this line and use the `.htaccess` to send these headers instead as specified in [Validating: X-UA-Compatible](https://groups.google.com/forum/#!topic/html5boilerplate/bRtrFSrKjtI).

### Modernizr

[Modernizr](https://modernizr.com/) is a JavaScript library which adds classes to the `html` element based on the results of feature test and which ensures that all browsers can make use of HTML5 elements (as it includes the HTML5 Shiv). This allows you to target parts of your CSS and JavaScript based on the features supported by a browser.

In general, in order to keep page load times to a minimum, it's best to call any JavaScript at the end of the page because if a script is slow to load from an external server it may cause the whole page to hang. That said, the Modernizr script needs to run before the browser begins rendering the page, so that browsers lacking support for some of the new HTML5 elements are able to handle them properly. Therefore the Modernizr script is the only JavaScript file synchronously loaded at the top of the document.

### Respond.js

IE8 requires the use of [Respond.js](https://github.com/scottjehl/Respond) to enable media query support.

### IE8 and [Respond.js](https://github.com/scottjehl/Respond)

Beware of the following caveats when using [Respond.js](https://github.com/scottjehl/Respond) in your development and production environments for Internet Explorer 8.

### Respond.js and cross-domain CSS

Using [Respond.js](https://github.com/scottjehl/Respond) with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. See the [Respond.js](https://github.com/scottjehl/Respond) docs for details.

### Respond.js and file://

Due to browser security rules, [Respond.js](https://github.com/scottjehl/Respond) doesn't work with pages viewed via the `file://` protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). See the [Respond.js](https://github.com/scottjehl/Respond) docs for details.

### Respond.js and @import

[Respond.js](https://github.com/scottjehl/Respond) doesn't work with CSS that's referenced via @import. In particular, some Drupal configurations are known to use @import. See the [Respond.js](https://github.com/scottjehl/Respond) docs for details.

### IE8 and box-sizing

IE8 does not fully support `box-sizing: border-box;` when combined with `min-width`, `max-width`, `min-height`, or `max-height`. Cannot use `max-width` on `.container`.

## CSS

Some CSS3 properties and HTML5 elements are not fully supported by Internet Explorer 8 and 9.

{% include tables/css.html %}

Visit [Can I Use](http://caniuse.com/) for details on browser support of CSS3 and HTML5 features.

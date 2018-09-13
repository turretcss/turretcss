---
layout: docs
title: Support
description: ""
---

## Browsers

<div class="table-responsive">
  <table style="table-layout:fixed;">
    <thead>
      <tr>
        <td></td>
        <th>Chrome</th>
        <th>Firefox</th>
        <th>Internet Explorer</th>
        <th>Opera</th>
        <th>Safari</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Android</th>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td rowspan="3" style="vertical-align: middle;">N/A</td>
        <td class="color-error background-error-50">&times;</td>
        <td>N/A</td>
      </tr>
      <tr>
        <th>iOS</th>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <th>Mac OS X</th>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <th>Windows</th>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td>Supported (IE10+)</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
    </tbody>
  </table>
</div>

### Android Default Browser

The Default Android Browser is not supported. Android 4.4+ does not ship with a default Browser. (note: Chrome on Android is fully supported)

### IE Compatibility modes

turretcss is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate `<meta>` tag in your pages:

```html
<meta http-equiv="X-UA-Compatible" content="IE=edge">
```

The meta tag tells the IE rendering engine it should use the latest, or edge, version of the IE rendering environment

## CSS

Some CSS properties and HTML5 attributes and elements are not fully supported by Internet Explorer 8 and 9.

<div class="table-responsive">
  <table style="table-layout:fixed;">
    <thead>
      <tr>
        <th>Feature</th>
        <th>IE8</th>
        <th>IE9</th>
        <th>IE10</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>border-radius</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>box-shadow</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>transform</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td>2D transforms supported, with <code>-ms</code> prefix</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>transition</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>placeholder</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>flexbox</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td>Partially supported, with <code>-ms</code> prefix</td>
      </tr>
    </tbody>
  </table>
</div>

Visit [Can I Use](http://caniuse.com/) for details on browser support of CSS and HTML features.

---
layout: docs
title: Visibility
description: Define content to be visible or hidden.
---

| Class           | Description                                     |
| --------------- | ----------------------------------------------- |
| `hide`          | Hides element `display: none;`                  |
| `show`          | Shows element `display: block;`                 |
| `visible`       | Sets `visibility: visible;`                     |
| `hidden`        | Sets `visibility: hidden;`                      |
| `hide-print`    | Hides element for when `@media print`           |
| `show-print`    | Shows element for when `@media print`           |
| `hide-screen`   | Hides element for when `@media screen`          |
| `show-screen`   | Shows element for when `@media screen`          |
| `hide-visually` | Hide element but keep in DOM for Screen Readers |
| `text-hide`     | Hides text visually                             |

### Visibile Breakpoint Classes

Define content to be visible at different breakpoints. Note: `!important` is used to override specificity issues.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="30%"></th>
        <th width="10%">XXS</th>
        <th width="10%">XS</th>
        <th width="10%">S</th>
        <th width="10%">M</th>
        <th width="10%">L</th>
        <th width="10%">XL</th>
        <th width="10%">XXL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.show-xxs</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-xs</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-xs-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.show-xs-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-s</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-s-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.show-s-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-m</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-m-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.show-m-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-l</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-l-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.show-l-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-xl</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-xl-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.show-xl-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.show-xxl</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
    </tbody>
  </table>
</div>

### Hidden Breakpoint Classes

Define content to be hidden at different breakpoints. Note: `!important` is used to override specificity issues.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="30%"></th>
        <th width="10%">XXS</th>
        <th width="10%">XS</th>
        <th width="10%">S</th>
        <th width="10%">M</th>
        <th width="10%">L</th>
        <th width="10%">XL</th>
        <th width="10%">XXL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.hide-xxs</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-xs</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-xs-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hide-xs-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-s</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-s-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hide-s-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-m</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-m-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hide-m-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-l</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-l-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hide-l-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-xl</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-xl-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hide-xl-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hide-xxl</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
    </tbody>
  </table>
</div>

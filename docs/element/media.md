---
layout: docs
title: Media
description: The media frame is for content loaded after the document is ready. It stops layouts from jumping when media is being loaded.
---

## About

The media frame wraps `<img>`, `<svg>`, `<video>`, and `<iframe>` by default, to wrap other content in a media container use the media-inner class. The `media-transparent` class removes the default background color on the media element.

## Example

<div class="media media-16-9 spinner"></div>

### HTML

```html
<div class="media media-16-9 spinner">...</div>
```

### CSS

```scss
--media-background: color-mod(var(--black) alpha(10%));
--media-border-radius: var(--border-radius);
```

## Media Ratios

By default the media element has the following common media type ratios:

- `media-1-2`
- `media-9-16`
- `media-9-14`
- `media-2-3`
- `media-3-4`
- `media-1`
- `media-4-3`
- `media-3-2`
- `media-16-9`
- `media-2-1`
- `media-4-5`
- `media-5-4`

## Custom Media Ratios

To add custom media ratios use padding top with `calc`.

```scss
padding-top: calc((height / width) * 100%);
```

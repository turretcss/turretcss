---
layout: docs
title: Media Queries
description: ""
---

## About

Responsive breakpoints are configurable via setting `@custom-media queries`, by default these are configured to generic sizes.

### CSS

```scss
@custom-media --xxl (min-width: 120rem);
@custom-media --xl-down (max-width: 120rem);
@custom-media --xl (min-width: 100rem) and (max-width: 120rem);
@custom-media --xl-up (min-width: 100rem);
@custom-media --l-down (max-width: 100rem);
@custom-media --l (min-width: 80rem) and (max-width: 100rem);
@custom-media --l-up (min-width: 80rem);
@custom-media --m-down (max-width: 80rem);
@custom-media --m (min-width: 60rem) and (max-width: 1279px);
@custom-media --m-up (min-width: 60rem);
@custom-media --s-down (max-width: 60rem);
@custom-media --s (min-width: 40rem) and (max-width: 60rem);
@custom-media --s-up (min-width: 40rem);
@custom-media --xs-down (max-width: 40rem);
@custom-media --xs (min-width: 20rem) and (max-width: 40rem);
@custom-media --xs-up (min-width: 20rem);
@custom-media --xxs (max-width: 20rem);
```

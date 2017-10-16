## Options
Please take a look in the `examples` folder to get the basic HTML structure and see the features in action.

### Remove or Add Background color to inline code.

This will remove the background color from a code sample.

```html
<pre class="no-container">
 Your Code here
</pre>
```

### Change the font size of your code.

The e default font size is 15px. Pre-baked font classes include "font--12", "font--14", "font--16", "font--18", "font--20", "font--22", "font--24", "font--26", "font--28", "font--30", "font--32", "font--34", and "font--36". All font classes are measured in pixels, so be sure your aspect ratio is set correctly before you adjust font sizes.

```html
<pre class="font--12">
 Your Code here
</pre>
```

### Add layouts to your slides.
This provides the option of having 2 column, 3 column, or 4 column layouts on your slides.
  2. Find the section that you'd like to add a layout to.
  3. on the section tag, add the class "l-2up" for a 2 column layout, "l-3up" for a 3 column layout, or "l-4up" for a 4 column layout.
  4. Create 2, 3, or 4 divs depending on the layout you chose and add content to each div. The class is directly targeting child divs of the section, so you can have additional divs within your wrapper div.

#### Examples

1. Two Column Grid

```html
<section class="l-2up">
    <div> This is your first column of content </div>
    <div> This is your second column of content </div>
</section>
```

2. Three Column Grid

```html
<section class="l-3up">
    <div> This is your first column of content </div>
    <div> This is your second column of content </div>
    <div> This is your third column of content </div>
</section>
```

3. Four Column Grid

```html
<section class="l-4up">
    <div> This is your first column of content </div>
    <div> This is your second column of content </div>
    <div> This is your third column of content </div>
    <div> This is your fourth column of content </div>
</section>
```

### Splash pages

```html
<section class="splashpage">
    Your Code here
</section>
```

### Images without border
```html
<img src="..." class="noborder">
```

### Zoom backgound image from top
```html
<section data-state="background-from-top" data-background-image="img/some-image.jpg">
</section>
```

### Grayscale sections
```html
<section data-state="grayscale">
 Your Code here
</section>
```

### Grayscale images
```html
<img src="..." class="grayscale">
```

### Splash headlines (useful for fullscreen images)
```html
<h1 class="splash">
 Headline
</h1>
```

### Minimal footer
```html
<footer class="minimal">
...
</footer>
```

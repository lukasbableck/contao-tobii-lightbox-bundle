# contao-tobii-lightbox-bundle

This bundle adds the Tobii lightbox to Contao.\
Tobii is an accessible, open-source lightbox made by [@midzer](https://www.github.com/midzer) with no dependencies that supports images, inline HTML, iframes and videos.\
For more information visit [https://midzer.github.io/tobii/](https://midzer.github.io/tobii/).

After installation you only have to enable the `js_tobii` JavaScript template in your page layout.
If you are using Contao 5.6 or higher with a Twig layout, you don't have to do this, the lightbox will work out of the box.\

\
Keep in mind that this bundle changes the selector for Tobii to `[data-lightbox]` to be compatible with Contao. \
By default Tobii uses `.lightbox` so if you want to use other media types, you would have to adapt the examples on [https://midzer.github.io/tobii/](https://midzer.github.io/tobii/) accordingly.
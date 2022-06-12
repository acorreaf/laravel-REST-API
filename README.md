# [Laravel REST API](https://adminlte.io)

Es un programa de prueba basado en el Framework Laravel. Trabaja con Bootstrap y JS/jQuery.

Se tomó la librería de Laravel para el acceso a la API externa.

## Laravel
Se trabajó con la versión 8.

## Login y registro
Para el acceso y creación de usuarios se tomó como base el ejemplo en la página https://www.itsolutionstuff.com/post/laravel-custom-login-and-registration-exampleexample.html.

## Acceso a API Externa
Se trabajó con la libreria HTTP Client de Laravel
```bash
composer require guzzlehttp/guzzle
```

## Stable release
### Grab from [jsdelivr](https://www.jsdelivr.com/package/npm/admin-lte) CDN:
_**Important Note**: You needed to add separately cdn links for plugins in your project._
```html
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
```
```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
```
### Using The Command Line:
_**Important Note**: To install it via npm/Yarn, you need at least Node.js 14 or higher._
#### Via npm
```bash
npm install admin-lte@^3.2 --save
```
#### Via Yarn
```bash
yarn add admin-lte@^3.2
```
#### Via Composer
```bash
composer require "almasaeed2010/adminlte=~3.2"
```
#### Via Git
```bash
git clone https://github.com/ColorlibHQ/AdminLTE.git
```

## Documentation

Visit the [online documentation](https://adminlte.io/docs/3.2/) for the most
updated guide. Information will be added on a weekly basis.

## Browsers support

| [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/edge/edge_48x48.png" alt="IE / Edge" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>IE / Edge | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/firefox/firefox_48x48.png" alt="Firefox" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>Firefox | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/chrome/chrome_48x48.png" alt="Chrome" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>Chrome | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/safari/safari_48x48.png" alt="Safari" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>Safari | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/safari-ios/safari-ios_48x48.png" alt="iOS Safari" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>iOS Safari | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/samsung-internet/samsung-internet_48x48.png" alt="Samsung" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>Samsung | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/opera/opera_48x48.png" alt="Opera" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>Opera | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/vivaldi/vivaldi_48x48.png" alt="Vivaldi" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>Vivaldi | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/electron/electron_48x48.png" alt="Electron" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)<br/>Electron |
| --------- | --------- | --------- | --------- | --------- | --------- | --------- | --------- | --------- |
| IE10, IE11, Edge| last 2 versions| last 2 versions| last 2 versions| last 2 versions| last 2 versions| last 2 versions| last 2 versions| last 2 versions

## Light Mode (Only Dark Mode Removed)
You can use light-mode-only version, if you are not using dark mode and also file size less without dark-mode.

File Location `./dist/css/alt/adminlte.light.css`


## Compile dist files

To compile the dist files you need Node.js/npm, clone/download the repo then:

1. `npm install` (install npm deps)
2. _Optional:_ `npm run dev` (developer mode, autocompile with browsersync support for live demo)
3. `npm run production` (compile css/js files)


## Contributing

Please read through our [contributing guidelines](https://github.com/ColorlibHQ/AdminLTE/tree/master/.github/CONTRIBUTING.md). Included are directions for opening issues, coding standards, and notes on development.

Editor preferences are available in the [editor config](https://github.com/twbs/bootstrap/blob/main/.editorconfig) for easy use in common text editors. Read more and download plugins at <https://editorconfig.org/>.


## License

AdminLTE is an open source project by [AdminLTE.io](https://adminlte.io) that is licensed under [MIT](https://opensource.org/licenses/MIT).
AdminLTE.io reserves the right to change the license of future releases.

## Image Credits

- [Pixeden](http://www.pixeden.com/psd-web-elements/flat-responsive-showcase-psd)
- [Graphicsfuel](https://www.graphicsfuel.com/2013/02/13-high-resolution-blur-backgrounds/)
- [Pickaface](https://pickaface.net/)
- [Unsplash](https://unsplash.com/)
- [Uifaces](http://uifaces.com/)

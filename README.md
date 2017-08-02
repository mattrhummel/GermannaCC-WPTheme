# GermannaCC [![Build Status](https://travis-ci.org/olefredrik/FoundationPress.svg?branch=master)](https://travis-ci.org/olefredrik/FoundationPress)

This is a WordPress theme based on Foundation 5 by Zurb for Germanna.EDU. 

Please fork, copy, modify, delete, share or do whatever you like with this. 

All contributions are welcome!

## Requirements

**A brief explanation to the requirements** (feel free to skip this if you're a pro):

**Okay, so you'll need to have the following items installed before continuing.**

  * [Node.js](http://nodejs.org)
  * [Grunt](http://gruntjs.com/): Run `[sudo] npm install -g grunt-cli`
  * [Bower](http://bower.io): Run `[sudo] npm install -g bower`

## Quickstart

```bash
cd my-wordpress-folder/wp-content/themes/
git clone git@github.com:olefredrik/FoundationPress.git
mv FoundationPress your-theme-name
cd your-theme-name
npm install && bower install && grunt build
```

**Tip:** 
If you get an error saying Permission denied (publickey) when cloning the repository, use the https protocol instead:
```git clone https://github.com/olefredrik/FoundationPress.git```

While you're working on your project, run:

`grunt watch`

And you're set!

Check for Foundation Updates? Run:
`foundation update` 
(this requires the foundation gem to be installed in order to work. Please see the [docs](http://foundation.zurb.com/docs/sass.html) for details.)

### Stylesheet Folder Structure

  * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

  * `scss/foundation.scss`: Imports for Foundation components and your custom styles.
  * `scss/config/_settings.scss`: Original Foundation 5 base settings
  * `scss/config/_custom-settings.scss`: Copy the settings you will modify to this file. Make it your own
  * `scss/site/*.scss`: Unleash your creativity and make it look perfect. Create the files you need (and remember to make import statements for all your files in scss/foundation.scss)
  
  * `css/foundation.css`: All Sass files are minified and compiled to this file
  * `css/foundation.css.map`: CSS source maps

### Script Folder Strucutre
  
  * `bower_components/`: This is the source folder where all Foundation components are located. `foundation update` will check and update scripts in this folder.

  * `js/custom`: This is where you put all your custom scripts. Every .js file you put in this directory will be minified and concatinated to [foundation.js](https://github.com/olefredrik/FoundationPress/blob/master/js/foundation.js)

  * `js/vendor`: Vendor scripts are copied from `bower_components/` to this directory. We use this path for enqueing the vendor scripts in WordPress.

  * Please note that you must run `grunt build` in your terminal for the script to be copied and concatinated. See [Gruntfile.js](https://github.com/olefredrik/FoundationPress/blob/master/Gruntfile.js) for details

## Demo

* [Clean FoundationPress install](http://foundationpress.olefredrik.com/)
* [FoundationPress Kitchen Sink - see every single element in action](http://foundationpress.olefredrik.com/kitchen-sink/)

## Unit Testing With Travis CI

FoundationPress is completely ready to be deployed to and tested by Travis CI for WordPress Coding Standards and best practices. All you need to do to activate the test is sign up and follow the instructions to point Travis CI towards your repo. Just don't forget to update the status badge to point to your repositories unit test.
[Travis CI](https://travis-ci.org/)

## UI toolkits for rapid prototyping

* [Foundation UI Kit for Axure RP](https://gumroad.com/l/foundation-ui-kit-axure-rp)
* [FoundationPSD - Foundation UI Kit for Photoshop](http://foundationpress.olefredrik.com/downloads/foundation-psd-template/)

## Tutorials and reviews

* [Installing FoundationPress - video tutorial](https://www.youtube.com/watch?v=s4m5wwM4BWM#t=11)
* [Responsive images in WordPress with Interchange](http://rachievee.com/responsive-images-in-wordpress/)
* [Integration guide for Sensei LMS plugin from WooThemes](https://support.woothemes.com/hc/en-us/articles/204125559-FoundationPress)
* [Build a Responsive WordPress theme](http://www.webdesignermag.co.uk/build-a-responsive-wordpress-theme/)
* [Setting Up a Blog with Foundation and WordPress](http://www.thecodecub.com/htmlcss/setting-up-a-blog-with-foundation-and-wordpress/)
* [FoundationPress un starter theme pour WordPress (fr)](http://www.leblogduresponsivedesign.fr/developpement/foundationpress-un-starter-theme-pour-wordpress/)
* [Learn to use the _settings file to change almost every aspect of a Foundation site](http://zurb.com/university/lessons/66)
* [Other lessons from Zurb University](http://zurb.com/university/past-lessons)

## A selection of sites built with FoundationPress

* [Harvard Center for Green Buildings and Cities](http://www.harvardcgbc.org/)
* [Parent-Child Home Program](http://www.parent-child.org/)
* [Hip and Healthy](http://hipandhealthy.com/)
* [Thinx Underwear](http://www.shethinx.com/)
* [Threadbird blog](http://blog.threadbird.com/)
* [Public House Wines](http://publichousewines.hstestsite.info/)
* [Franchise Career Advisors](http://franchisecareeradvisors.com/)
* [Le saint](http://www.lesaint.ca/)
* [Help blog](http://help.com/blog/)
* [Maren Schmidt](http://marenschmidt.com/)
* [Ciancimino Gallery](http://ciancimino.com/)
* [Sokolove Law](http://www.sokolovelaw.com/)
* [Pandora Children's Parties](http://www.pandorachildrensparties.co.uk/)
* [The Rainbow Venues](http://www.therainbowvenues.co.uk/)
* [Ameronix](http://www.ameronix.com/)
* [Finnerodja](http://www.finnerodja.se/)
* [Nufloors](http://www.nufloors.ca/)
* [Glossop Cartons](http://www.glossopcartons.co.uk/)
* [Ready4Work](http://www.ready4work.my/)
* [Just Legal](http://www.justlegal.co.jp/en/)
* [Vintage and Stuff](http://vintageandstuff.com/)
* [Software for FM](http://softwareforfm.co.uk/)
* [WP Diamonds](http://www.wpdiamonds.com/)
* [Storm Arts](http://stormarts.fi/)

## Contributing
#### Here are ways to get involved:

1. [Star](https://github.com/olefredrik/FoundationPress/stargazers) the project!
2. Answer questions that come through [GitHub issues](https://github.com/olefredrik/FoundationPress/issues)
3. Report a bug that you find
4. Share a theme you've built on top of FoundationPress
5. [Tweet](https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Ffoundationpress.olefredrik.com%2F&text=Check%20out%20FoundationPress%2C%20the%20ultimate%20%23WordPress%20starter-theme%20built%20on%20%23Foundation%205&tw_p=tweetbutton&url=http%3A%2F%2Ffoundationpress.olefredrik.com&via=olefredrik) and [blog](http://www.justinfriebel.com/my-first-experience-with-foundationpress-a-wordpress-starter-theme-106/) your experience of FoundationPress.

#### Pull Requests

Pull requests are highly appreciated. More than three dozen amazing people have contributed to FoundationPress (so far). Here are some guidelines to help:

1. Solve a problem. Features are great, but even better is cleaning-up and fixing issues in the code that you discover
2. Make sure that your code is bug-free and does not introduce new bugs
3. Create a [pull request](https://help.github.com/articles/creating-a-pull-request)

## Documentation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)
* [WordPress Codex](http://codex.wordpress.org/)
# Facebook Button Shortcode

## Plugin Information

Display Facebook-Buttons via shortcode.

## Installation

1. Unzip the download package
2. Upload `i3-fb-buttons` to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

***

## Usage / Features

Use the shortcode `[fb]<Facebook URL>[/fb]` to display a Facebook button in posts, pages or widgets.

Available parameters:

**send**
Display a send button.
* true
* false - Default

**layout**
Selects one of the different layouts that are available.
* standard - Default
* button_count
* button
* box_count

**show_faces**
Specifies whether to display profile photos below the button (standard layout only).
* true
* false - Default

**width**
The width of the plugin (standard layout only), which is subject to the minimum and default width.
* 450px - Default

**action**
The verb to display on the button. Can be either 'like' or 'recommend'.
* recommend
* like - Default

**font**
Name of the font-face to use.
* arial - Default

**colorscheme**
The color scheme used by the plugin. Can be "light" or "dark".
* light - Default
* dark

**ref**
A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_). Default empty.

**locale**
Language of the button.
* de_DE - Default

**share**
Specifies whether to include a share button beside the Like button. This only works with the XFBML version.
* true
* false - Default

**appId**
Add an AppID if you use one.


Example `[fb layout="button_count" share="true" ref="xxx"]http://www.facebook.com/username[/fb]`

***

## Changelog

### 1.0.0
* First push
Bootstrap Widget Library
=============
2019-05-01



Below is the documentation for the widgets of the Bootstrap Widget Library.
The variables of the widgets described in this document represent the front variables of
a [Picasso widget array](https://github.com/lingtalfi/Kit_PicassoWidget#the-picasso-widget-array), referenced by the **vars** key.
For more information about the variables representation, please refer to the [widget variables description](https://github.com/lingtalfi/Kit_PicassoWidget/blob/master/doc/pages/widget-variables-description.md) page.



Summary
=========

- [LoopLabMonoChromeHeaderWidget](#looplabmonochromeheaderwidget)
- [LoopLabTwoColumnsSignupFormWidget](#looplabtwocolumnssignupformwidget)
- [LoopLabTwoColumnsTeaserWidget](#looplabtwocolumnsteaserwidget)
- [MainNavWidget](#mainnavwidget)






LoopLabMonoChromeHeaderWidget
==============

LoopLabMonoChromeHeaderWidget is a bootstrap 4 widget representing a monochrome header.
It contains a title, a text, and a button.

We can change the background color using bootstrap css classes (or custom classes).






LoopLabMonoChromeHeaderWidget screenshots
----------

![Screenshot looplab_monochrome_header-dark.png](http://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabMonoChromeHeaderWidget/looplab_monochrome_header-dark.png)

![Screenshot looplab_monochrome_header.png](http://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabMonoChromeHeaderWidget/looplab_monochrome_header.png)




LoopLabMonoChromeHeaderWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**: null
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: text-white bg-dark
            - **description**: The css class to apply to the widget container tag. We recommend using bootstrap 4 css classes.
            - **example**: text-white bg-dark
- **title**
    - **type**: string
    - **default_value**: No title
    - **description**: The title of the header.
    - **example**: Explore
- **text**
    - **type**: string
    - **default_value**: 
    - **description**: The text of the header.
    - **example**: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium deserunt reprehenderit sunt minus.
- **button_url**
    - **type**: string
    - **default_value**: #
    - **description**: The url of the button.
    - **example**: #
- **button_class**
    - **type**: string
    - **default_value**: btn btn-outline-secondary
    - **description**: The css class to apply to the button. We recommend using bootstrap 4 css classes.
    - **example**: btn btn-outline-secondary
- **button_text**
    - **type**: string
    - **default_value**: 
    - **description**: The text of the button.
    - **example**: Find Out More




LoopLabMonoChromeHeaderWidget configuration example
----------------

```yaml
attr:
    class: text-white bg-dark

title: Explore
text: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium deserunt reprehenderit sunt minus.
button_url: "#"
button_class: btn btn-outline-secondary
button_text: Find Out More
```






LoopLabTwoColumnsSignupFormWidget
==============

The LoopLabTwoColumnsSignupFormWidget is a bootstrap 4 widget representing a two columns signup form.

The looplab two columns signup form widget is composed of three parts:
- the teaser part
- the form
- the background

By default, the teaser part will only appear for large screens (because for lower resolutions, we believe it's not readable enough).
This can be customized using the teaser_visible_size property (default=lg).


First, you decide if you want to show the teaser part with the showTeaser property.
Then, you decide whether the form is on the right (by default) or on the left with the form_align_right property.

Then, customize each part as you want.

The teaser is composed of a title, and an arbitrary number of icons (which by default are checkboxes) along with some text.

Then signup form is composed of a title, a subtitle, some fields including a submit button. Don't forget to
set the action (attribute) of the form, to hook it with your application.





More about the form fields
--------
The form fields are input tags. You can choose the type of the input amongst the following:

- text
- password

The submit button has its own variables and is not considered as a regular form field.









LoopLabTwoColumnsSignupFormWidget screenshots
----------

![Screenshot looplab_two_columns_signup_form.jpg](http://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabTwoColumnsSignupFormWidget/looplab_two_columns_signup_form.jpg)




LoopLabTwoColumnsSignupFormWidget variables description
-----------

- **showTeaser**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to show the teaser.
- **form_align_right**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to align the form to the right.
- **teaser_visible_size**
    - **type**: string
    - **default_value**: 
    - **description**: The bootstrap size at which the teaser should start to be visible.
    - **example**: lg
    - **choices**
        - sm
        - md
        - lg
- **teaser_title**
    - **type**: string
    - **default_value**: 
    - **description**: The teaser title.
    - **example**: Build <strong>social profiles</strong> and gain revenue <strong>profits</strong>
- **teaser_items**
    - **type**: item_list
    - **default_value**
    - **description**: An array of teaser items to display in the teaser.
    - **item_properties**
        - **icon**
            - **type**: string
            - **default_value**: 
            - **description**: The icon of the teaser item.
            - **example**: fas fa-check fa-2x
        - **text**
            - **type**: string
            - **default_value**: 
            - **description**: The text of the teaser item.
            - **example**: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!
- **form_title**
    - **type**: string
    - **default_value**: 
    - **description**: The title of the form.
    - **example**: Sign up Today
- **form_subtitle**
    - **type**: string
    - **default_value**: 
    - **description**: The subtitle of the form.
    - **example**: Please fill out this form to register
- **form_fields**
    - **type**: item_list
    - **default_value**
    - **description**: An array of the form fields (not including the submit button).
    - **item_properties**
        - **name**
            - **type**: string
            - **default_value**: 
            - **description**: The name attribute of the input tag for this field.
            - **example**: username
        - **placeholder**
            - **type**: string
            - **default_value**: 
            - **description**: The placeholder attribute of the input tag for this field.
            - **example**: Username
        - **type**
            - **type**: string
            - **default_value**: 
            - **description**: The type attribute of the input tag for this field.
            - **example**: text
            - **choices**
                - text
                - password
- **form_submit_value**
    - **type**: string
    - **default_value**: 
    - **description**: The value for the submit button.
    - **example**: Submit
- **form_submit_class**
    - **type**: string
    - **default_value**: 
    - **description**: The css class for the submit button.
    - **example**: btn btn-outline-light btn-block
- **background_style**
    - **type**: string
    - **default_value**: 
    - **description**: The background css value. Note, you can use a simple color, or an image.
    - **example**: url('/plugins/Light_Kit_Demo/looplab/img/home.jpg')




LoopLabTwoColumnsSignupFormWidget configuration example
----------------

```yaml
showTeaser: true
form_align_right: false
teaser_visible_size: lg
teaser_title: Build <strong>social profiles</strong> and gain revenue <strong>profits</strong>
teaser_items:
    -
        icon: fas fa-check fa-2x
        text: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!

    -
        icon: fas fa-check fa-2x
        text: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!

    -
        icon: fas fa-check fa-2x
        text: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!


form_title: Sign up Today
form_subtitle: Please fill out this form to register
form_fields:
    -
        name: username
        placeholder: Username
        type: text

    -
        name: email
        placeholder: Email
        type: text

    -
        name: password
        placeholder: Password
        type: password

    -
        name: confirm_password
        placeholder: Confirm Password
        type: password


form_submit_value: Submit
form_submit_class: btn btn-outline-light btn-block
background_style: url('/plugins/Light_Kit_Demo/looplab/img/home.jpg')
```






LoopLabTwoColumnsTeaserWidget
==============

LoopLabTwoColumnsTeaserWidget is a bootstrap 4 widget representing a two columns teaser header.
It's composed of two parts: the image and the teaser.
By default, the image is on the left.
You can change this using the **img_on_left** property.
If you don't want it rounded, set the **img_rounded** property to false.
The teaser part contains a title, a text, and a list with an arbitrary number of items with icons.






LoopLabTwoColumnsTeaserWidget screenshots
----------

![Screenshot looplab_two_columns_teaser-alt.png](http://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabTwoColumnsTeaserWidget/looplab_two_columns_teaser-alt.png)

![Screenshot looplab_two_columns_teaser-dark.png](http://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabTwoColumnsTeaserWidget/looplab_two_columns_teaser-dark.png)

![Screenshot looplab_two_columns_teaser.png](http://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabTwoColumnsTeaserWidget/looplab_two_columns_teaser.png)




LoopLabTwoColumnsTeaserWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**: null
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: bg-light text-muted py-5
            - **description**: The css class to add to the widget container. We recommend using bootstrap css classes.
            - **example**: bg-light text-muted py-5
- **img_on_left**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether the image is on the left.
- **img_rounded**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether the image is rounded.
- **img_src**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the src attribute of the img tag.
    - **example**: img/explore-section1.jpg
- **img_alt**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the alt attribute of the img tag.
    - **example**: Explore & Connect
- **teaser_title**
    - **type**: string
    - **default_value**: 
    - **description**: The teaser title.
    - **example**: Explore & Connect
- **teaser_text**
    - **type**: string
    - **default_value**: 
    - **description**: The teaser text.
    - **example**: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquidtempore perspiciatis repudiandae hic?
- **teaser_items**
    - **type**: item_list
    - **default_value**
    - **description**: A list of teaser items.
    - **item_properties**
        - **icon**
            - **type**: string
            - **default_value**: 
            - **description**: The css class for the icon of the teaser item.
            - **example**: fas fa-check fa-2x
        - **text**
            - **type**: string
            - **default_value**: 
            - **description**: The text for the teaser item.
            - **example**: Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?




LoopLabTwoColumnsTeaserWidget configuration example
----------------

```yaml
attr:
    class: bg-light text-muted py-5

img_on_left: true
img_rounded: true
img_src: img/explore-section1.jpg
img_alt: Explore & Connect
teaser_title: Explore & Connect
teaser_text: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquidtempore perspiciatis repudiandae hic?
teaser_items:
    -
        icon: fas fa-check fa-2x
        text: Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?

    -
        icon: fas fa-check fa-2x
        text: Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?

```






MainNavWidget
==============

The MainNavWidget is a bootstrap 4 widget representing the top navigation on a website.
You can configure the title of the nav with or without a logo, and you can create two separate
sets of links, with various options for each link, such as adding an icon, or a dropdown menu.






MainNavWidget screenshots
----------

![Screenshot MainNavWidget-01.png](http://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/MainNavWidget/MainNavWidget-01.png)




MainNavWidget variables description
-----------

- **title**
    - **type**: string
    - **default_value**: null
    - **description**: The title of the nav widget. It's usually the name of the company or website.
- **title_logo**
    - **type**: array
    - **default_value**: null
    - **description**: Adds a logo to the title.
    - **properties**
        - **url**
            - **type**: string
            - **default_value**: null
            - **description**: The url of the logo image (the value to put into the src attribute of the img tag).
        - **width**
            - **type**: string
            - **default_value**: 50
            - **description**: The width of the logo image.
        - **height**
            - **type**: string
            - **default_value**: 50
            - **description**: The height of the logo image.
        - **alt**
            - **type**: string
            - **default_value**: null
            - **description**: The value of the alt attribute of the logo img tag.
- **fixed_top**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether the nav is fixed on the top, or scrolls along with the content.
- **title_url**
    - **type**: string
    - **default_value**: /
    - **description**: The string to put in the href attribute of the title link. It can be an anchor if necessary (starting with a hash symbol).
- **expand_size**
    - **type**: string
    - **default_value**: sm
    - **description**: Defines at which size does the burger menu expand.
    - **choices**
        - sm
        - md
        - lg
- **links**
    - **type**: item_list
    - **default_value**
    - **description**: An array of link items to display in the nav.
    - **item_properties**
        - **text**
            - **type**: string
            - **default_value**: null
            - **description**: The text of the link item.
        - **url**
            - **type**: string
            - **default_value**: null
            - **description**: The url of the link item (anchors are accepted).
        - **icon**
            - **type**: string
            - **default_value**: null
            - **description**: The css class for the icon.
            - **example**: fas fa-user
- **links_align_right**
    - **type**: bool
    - **default_value**: false
    - **description**: Whether to align the links to the right.
- **links_item_class**
    - **type**: string
    - **default_value**: null
    - **description**: An additional css class expression to add to all link items.
    - **example**: px-2
- **links2**: same as links
- **links2_align_right**: same as links_align_right
- **links2_item_class**: same as links_item_class




MainNavWidget configuration example
----------------

```yaml

title: LoopLab

# Whether the top nav is fixed on the top
fixed_top: true

# the string to put in the href attribute of the title link.
# It can be an anchor if necessary
# The default value is slash
title_url: /

# If not set, the title will not use a logo
# If set, the title_logo must define all parameters as the example below
#title_logo:
#    url: /plugins/Light_Kit_Demo/mizuxe/img/mlogo.png
#    width: 50
#    height: 50
#    alt: Mizuxe logo
expand_size: sm # at which size does the burger menu expand (sm | md | lg) = sm
links:
    -
        text: Home
        url: "#home"
#        icon: fas fa-user
    -
        text: Explore
        url: "#explore-head-section"

    -
        text: Create
        url: "#create-head-section"
    -
        text: Share
        url: "#share-head-section"

# An additional css class to add to all link items. Example: px-2
#links_item_class: px-2

# Whether to push the links on the right. Note: if you use links2.
links_align_right: false

links2:
    -
        text: Welcome Ling
        url: "#"
        icon: fas fa-user
        children:
            -
                text: Profile
                url: "#create-head-section"
                icon: fas fa-user-circle
            -
                text: Settings
                url: "#create-head-section"
                icon: fas fa-cog
    -
        text: Log out
        url: "#share-head-section"
        icon: fas fa-user-times
links2_align_right: true

```













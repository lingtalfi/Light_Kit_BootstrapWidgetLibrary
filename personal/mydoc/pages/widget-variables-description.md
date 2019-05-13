Bootstrap Widget Library
=============
2019-05-01



Below is the documentation for the widgets of the Bootstrap Widget Library.
The variables of the widgets described in this document represent the front variables of
a [Picasso widget array](https://github.com/lingtalfi/Kit_PicassoWidget#the-picasso-widget-array), referenced by the **vars** key.
For more information about the variables representation, please refer to the [widget variables description](https://github.com/lingtalfi/Kit_PicassoWidget/blob/master/doc/pages/widget-variables-description.md) page.



Summary
=========

- [ColoredBoxesWidget](#coloredboxeswidget)
- [IconTeaserWidget](#iconteaserwidget)
- [LoopLabFooterWithContactUseButtonWidget](#looplabfooterwithcontactusebuttonwidget)
- [LoopLabMonoChromeHeaderWidget](#looplabmonochromeheaderwidget)
- [LoopLabTwoColumnsSignupFormWidget](#looplabtwocolumnssignupformwidget)
- [LoopLabTwoColumnsTeaserWidget](#looplabtwocolumnsteaserwidget)
- [MainNavWidget](#mainnavwidget)
- [MizuxeFourColumnsOurStaffWidget](#mizuxefourcolumnsourstaffwidget)
- [MizuxeNewsletterSignupHeaderWidget](#mizuxenewslettersignupheaderwidget)
- [MizuxeTwoColumnsContactFormWidget](#mizuxetwocolumnscontactformwidget)
- [MizuxeTwoColumnsTeaserWidget](#mizuxetwocolumnsteaserwidget)
- [OneColumnAccordionWidget](#onecolumnaccordionwidget)
- [ParallaxHeaderWidget](#parallaxheaderwidget)
- [ShowCaseCarouselWidget](#showcasecarouselwidget)
- [SimpleFooterWidget](#simplefooterwidget)






ColoredBoxesWidget
==============

[Back to top](#summary)

- [Screenshots](#coloredboxeswidget-screenshots)
- [Templates and skins](#coloredboxeswidget-templates-and-skins)
- [Example](#coloredboxeswidget-configuration-example)
- [Variables descriptions](#coloredboxeswidget-variables-description)



ColoredBoxesWidget is a bootstrap 4 widget used to display colored boxes.
We can change the number of columns using the **column_class** property.
Each box contains an optional icon, a title and a text.
We can change the css class and the background style for each box,
and align the text on the left, center or right.





ColoredBoxesWidget screenshots
----------

![Screenshot glozzom_three_columns_colored_icon_cards.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/ColoredBoxesWidget/glozzom_three_columns_colored_icon_cards.png)

![Screenshot mizuxe_four_columns_card_teaser.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/ColoredBoxesWidget/mizuxe_four_columns_card_teaser.png)





ColoredBoxesWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: 
- **Presets**: mizuxe.byml


ColoredBoxesWidget configuration example
----------------

```yaml
name: colored_boxes
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\ColoredBoxesWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/ColoredBoxesWidget
template: default.php
vars:
    attr:
        class: py-5

    column_class: col-md-3
    boxes:
        -
            class: border-primary mb-resp
            text_align: center
            title: Be Better
            title_class: text-primary
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, totam.
            text_class: text-muted
            icon: ""

        -
            class: bg-primary mb-resp text-white
            text_align: center
            title: Be Smarter
            title_class: ""
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, totam.
            text_class: ""
            icon: ""

        -
            class: border-primary mb-resp
            text_align: center
            title: Be Faster
            title_class: text-primary
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, totam.
            text_class: text-muted
            icon: ""

        -
            class: bg-primary mb-resp text-white
            text_align: center
            title: Be Stronger
            title_class: ""
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, totam.
            text_class: ""
            icon: ""


```



ColoredBoxesWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: py-5
            - **description**: The css class to add to the widget container tag.
            - **example**: py-5
- **column_class**
    - **type**: string
    - **default_value**: col-md-3
    - **description**: Defines the width and responsiveness of the columns containing the boxes.
This widget uses bootstrap 4 grid system: https://getbootstrap.com/docs/4.0/layout/grid/.
    - **example**: col-md-3
- **boxes**
    - **type**: item_list
    - **default_value**
    - **description**: An array of boxes.
    - **item_properties**
        - **class**
            - **type**: string
            - **default_value**: 
            - **description**: The css class to apply to the box outer container.
            - **example**
                - border-primary mb-resp
                - bg-dark text-white
                - bg-primary mb-resp
        - **text_align**
            - **type**: string
            - **default_value**: center
            - **description**: The alignment to apply to the box content (including title and text).
            - **example**: center
            - **choices**
                - left
                - center
                - right
        - **title**
            - **type**: string
            - **default_value**: No title
            - **description**: The title of the box.
            - **example**: Be Better
        - **title_class**
            - **type**: string
            - **default_value**: 
            - **description**: The css class to add to the title of the box.
            - **example**: text-primary
        - **text**
            - **type**: string
            - **default_value**: 
            - **description**: The text of the box
            - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, totam.
        - **text_class**
            - **type**: string
            - **default_value**: 
            - **description**: The css class to add to the text of the box.
            - **example**: text-muted
        - **icon**
            - **type**: string
            - **default_value**: 
            - **description**: The css class for the icon of the box. If empty, the icon will not be displayed.
            - **example**: fas fa-box fa-3x







IconTeaserWidget
==============

[Back to top](#summary)

- [Screenshots](#iconteaserwidget-screenshots)
- [Templates and skins](#iconteaserwidget-templates-and-skins)
- [Example](#iconteaserwidget-configuration-example)
- [Variables descriptions](#iconteaserwidget-variables-description)



IconTeaserWidget is a bootstrap 4 widget to display some boxes with icons.
Each box is composed of 3 elements:
- icon
- title
- text

If an element is empty, it's not displayed.

We can choose how many boxes we want per line using the "column_class" property,
which takes a bootstrap 4 grid system css class as the input.

More info at https://getbootstrap.com/docs/4.0/layout/grid/





IconTeaserWidget screenshots
----------

![Screenshot glozzom_three_columns_icon_teaser.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/IconTeaserWidget/glozzom_three_columns_icon_teaser.png)





IconTeaserWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: 
- **Presets**: glozzom.byml


IconTeaserWidget configuration example
----------------

```yaml
name: icon_teaser
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\IconTeaserWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/IconTeaserWidget
template: default.php
vars:
    attr:
        class: py-5
        id: home-icons

    column_class: col-md-4
    boxes:
        -
            class: mb-4 text-center
            icon: fas fa-cog fa-3x mb-2
            title: Turning Gears
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, dignissimos!

        -
            icon: fas fa-cloud fa-3x mb-2
            class: mb-4 text-center
            title: Sending Data
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, dignissimos!

        -
            icon: fas fa-cart-plus fa-3x mb-2
            class: mb-4 text-center
            title: Making Money
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, dignissimos!


```



IconTeaserWidget variables description
-----------

- **column_class**
    - **type**: string
    - **default_value**: col-md-4
    - **description**: The column size css class to apply. A bootstrap 4 grid css class (or a combination of css classes) is
expected, such as col-md-4, col-sd-3, col-lg-6, ...
    - **example**: col-md-4
- **boxes**
    - **type**: item_list
    - **default_value**
    - **description**: The array of boxes.
    - **item_properties**
        - **class**
            - **type**: string
            - **default_value**: 
            - **description**: The css class to apply to the box outer tag.
            - **example**: mb-4 text-center
        - **icon**
            - **type**: string
            - **default_value**: 
            - **description**: The css class of the icon of this box.
            - **example**: fas fa-cog fa-3x mb-2
        - **title**
            - **type**: string
            - **default_value**: 
            - **description**: The title for this box.
            - **example**: Turning Gears
        - **text**
            - **type**: string
            - **default_value**: 
            - **description**: The description for this box.
            - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, dignissimos!







LoopLabFooterWithContactUseButtonWidget
==============

[Back to top](#summary)

- [Screenshots](#looplabfooterwithcontactusebuttonwidget-screenshots)
- [Templates and skins](#looplabfooterwithcontactusebuttonwidget-templates-and-skins)
- [Example](#looplabfooterwithcontactusebuttonwidget-configuration-example)
- [Variables descriptions](#looplabfooterwithcontactusebuttonwidget-variables-description)



LoopLabFooterWithContactUseButtonWidget is a bootstrap 4 widget representing a footer with a button opening a "contact us" modal form.

It's composed of two parts: the footer, and the form.

The footer has a title, a text, and a button.

In the footer text, you can use the $year variable to add an always up-to-date copyright year.

The form has a title, some customizable fields, and a submit button.

Each customizable field has a type which can be one of the following:

- text: an input tag with type text
- email: an input tag with type email
- textarea: a textarea tag








LoopLabFooterWithContactUseButtonWidget screenshots
----------

![Screenshot looplab_footer_with_contact_us_button.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabFooterWithContactUseButtonWidget/looplab_footer_with_contact_us_button.png)





LoopLabFooterWithContactUseButtonWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: default.css
- **Presets**: 


LoopLabFooterWithContactUseButtonWidget configuration example
----------------

```yaml
name: looplab_footer_with_contact_us_button
type: picasso
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\LoopLabFooterWithContactUseButtonWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/LoopLabFooterWithContactUseButtonWidget
template: default.php
vars:
    attr:
        class: bg-dark

    footer_title: LoopLab
    footer_text: Copyright &copy; $year
    footer_button_class: btn btn-primary
    footer_button_text: Contact Us
    modal_title: Contact Us
    modal_form_action: ""
    modal_form_method: post
    modal_fields:
        -
            label: Name
            name: name
            type: text

        -
            label: Email
            name: email
            type: email

        -
            label: Message
            name: message
            type: textarea


    modal_btn_text: Submit
    modal_btn_class: btn btn-primary btn-block
```



LoopLabFooterWithContactUseButtonWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: 
            - **description**: The css class to apply to the widget container tag. We recommend using bootstrap 4 css classes.
            - **example**: bg-dark
- **footer_title**
    - **type**: string
    - **default_value**: 
    - **description**: The title of the footer.
    - **example**: LoopLab
- **footer_text**
    - **type**: string
    - **default_value**: 
    - **description**: The text of the footer. You can use the **$year** variable to indicate the year dynamically.
    - **example**: Copyright &copy; $year
- **footer_button_class**
    - **type**: string
    - **default_value**: btn btn-primary
    - **description**: todo: here
    - **example**: btn btn-primary
- **footer_button_text**
    - **type**: string
    - **default_value**: Contact Us
    - **description**: The footer button text.
    - **example**: Contact Us
- **modal_title**
    - **type**: string
    - **default_value**: Contact Us
    - **description**: The modal form text.
    - **example**: Contact Us
- **modal_form_action**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the modal form **action** attribute.
    - **example**: 
- **modal_form_method**
    - **type**: string
    - **default_value**: post
    - **description**: The value of the modal form **method** attribute.
    - **example**: post
- **modal_fields**
    - **type**: item_list
    - **default_value**
    - **description**: A list of fields to display in the modal form.
    - **item_properties**
        - **label**
            - **type**: string
            - **default_value**: 
            - **description**: The label of the field.
            - **example**: Name
        - **name**
            - **type**: string
            - **default_value**: 
            - **description**: The value of the name attribute of the field.
            - **example**: name
        - **type**
            - **type**: string
            - **default_value**: 
            - **description**: The type of the field. See the possible value in the choices property.
            - **choices**
                - text
                - email
                - textarea
            - **example**: text
- **modal_btn_text**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the modal form's submit button.
    - **example**: Submit
- **modal_btn_class**
    - **type**: string
    - **default_value**: btn btn-primary btn-block
    - **description**: The css class for the modal form's submit button.
    - **example**: btn btn-primary btn-block







LoopLabMonoChromeHeaderWidget
==============

[Back to top](#summary)

- [Screenshots](#looplabmonochromeheaderwidget-screenshots)
- [Templates and skins](#looplabmonochromeheaderwidget-templates-and-skins)
- [Example](#looplabmonochromeheaderwidget-configuration-example)
- [Variables descriptions](#looplabmonochromeheaderwidget-variables-description)



LoopLabMonoChromeHeaderWidget is a bootstrap 4 widget representing a monochrome header.
It contains a title, a text, and a button.

We can change the background color using bootstrap css classes (or custom classes).





LoopLabMonoChromeHeaderWidget screenshots
----------

![Screenshot looplab_monochrome_header-dark.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabMonoChromeHeaderWidget/looplab_monochrome_header-dark.png)

![Screenshot looplab_monochrome_header.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabMonoChromeHeaderWidget/looplab_monochrome_header.png)





LoopLabMonoChromeHeaderWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: looplab-dark.css
- **Presets**: 


LoopLabMonoChromeHeaderWidget configuration example
----------------

```yaml
name: looplab_monochrome_header
type: picasso
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\LoopLabMonoChromeHeaderWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/LoopLabMonoChromeHeaderWidget
template: default.php
skin: looplab-dark
vars:
    attr:
        class: looplab-dark
        id: explore-head-section

    title: Explore
    text: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium deserunt reprehenderit sunt minus.
    button_url: "#"
    button_class: btn btn-outline-secondary
    button_text: Find Out More
```



LoopLabMonoChromeHeaderWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
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







LoopLabTwoColumnsSignupFormWidget
==============

[Back to top](#summary)

- [Screenshots](#looplabtwocolumnssignupformwidget-screenshots)
- [Templates and skins](#looplabtwocolumnssignupformwidget-templates-and-skins)
- [Example](#looplabtwocolumnssignupformwidget-configuration-example)
- [Variables descriptions](#looplabtwocolumnssignupformwidget-variables-description)



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

![Screenshot looplab_two_columns_signup_form.jpg](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabTwoColumnsSignupFormWidget/looplab_two_columns_signup_form.jpg)





LoopLabTwoColumnsSignupFormWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: default.css.php
- **Presets**: 


LoopLabTwoColumnsSignupFormWidget configuration example
----------------

```yaml
name: looplab_two_columns_signup_form
type: picasso
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\LoopLabTwoColumnsSignupFormWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/LoopLabTwoColumnsSignupFormWidget
template: default.php
vars:
    attr:
        id: home

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







LoopLabTwoColumnsTeaserWidget
==============

[Back to top](#summary)

- [Screenshots](#looplabtwocolumnsteaserwidget-screenshots)
- [Templates and skins](#looplabtwocolumnsteaserwidget-templates-and-skins)
- [Example](#looplabtwocolumnsteaserwidget-configuration-example)
- [Variables descriptions](#looplabtwocolumnsteaserwidget-variables-description)



LoopLabTwoColumnsTeaserWidget is a bootstrap 4 widget representing a two columns teaser header.
It's composed of two parts: the image and the teaser.
By default, the image is on the left.
You can change this using the **img_on_left** property.
If you don't want it rounded, set the **img_rounded** property to false.
The teaser part contains a title, a text, and a list with an arbitrary number of items with icons.





LoopLabTwoColumnsTeaserWidget screenshots
----------

![Screenshot looplab_two_columns_teaser-alt.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabTwoColumnsTeaserWidget/looplab_two_columns_teaser-alt.png)

![Screenshot looplab_two_columns_teaser-dark.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabTwoColumnsTeaserWidget/looplab_two_columns_teaser-dark.png)

![Screenshot looplab_two_columns_teaser.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/LoopLabTwoColumnsTeaserWidget/looplab_two_columns_teaser.png)





LoopLabTwoColumnsTeaserWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: default.css, looplab-dark.css
- **Presets**: 


LoopLabTwoColumnsTeaserWidget configuration example
----------------

```yaml
name: looplab_two_columns_teaser
type: picasso
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\LoopLabTwoColumnsTeaserWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/LoopLabTwoColumnsTeaserWidget
template: default.php
vars:
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



LoopLabTwoColumnsTeaserWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
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







MainNavWidget
==============

[Back to top](#summary)

- [Screenshots](#mainnavwidget-screenshots)
- [Templates and skins](#mainnavwidget-templates-and-skins)
- [Example](#mainnavwidget-configuration-example)
- [Variables descriptions](#mainnavwidget-variables-description)



The MainNavWidget is a bootstrap 4 widget representing the top navigation on a website.
You can configure the title of the nav with or without a logo, and you can create two separate
sets of links, with various options for each link, such as adding an icon, or a dropdown menu.

You can also enable spyscroll and smooth scrolling to enhance your navigation if your theme is a one page theme.






MainNavWidget screenshots
----------

![Screenshot MainNavWidget-01.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/MainNavWidget/MainNavWidget-01.png)





MainNavWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: glozzom.css, glozzom.scss, looplab-nav.css, mizuxe-nav.css, mizuxe-nav.scss
- **Presets**: glozzom.byml, looplab.byml, mizuxe.byml


MainNavWidget configuration example
----------------

```yaml
name: main_nav
type: picasso
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\MainNavWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/MainNavWidget
template: default.php
skin: looplab-nav
vars:
    attr:
        id: main-nav
        class: bg-dark navbar-dark looplab-nav

    title: LoopLAB
    fixed_top: true
    use_scrollspy: true
    use_smooth_scrolling: true
    title_url: /
    expand_size: sm
    links:
        -
            text: Home
            url: "#home"

        -
            text: Explore
            url: "#explore-head-section"

        -
            text: Create
            url: "#create-head-section"

        -
            text: Share
            url: "#share-head-section"


    links_align_right: true
```



MainNavWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: bg-light text-muted py-5
            - **description**: The css class to add to the widget container. We recommend using bootstrap css classes.
            - **example**: bg-dark navbar-dark looplab-nav
        - **id**
            - **type**: string
            - **default_value**: 
            - **description**: The css id to add to the widget container. It's required if you are using the spyscroll or the smooth scrolling feature.
            - **example**: main-nav
- **use_scrollspy**
    - **type**: bool
    - **default_value**: false
    - **description**: Whether to activate the scroll spy. If so, you must define a css id. See the bootstrap documentation for more info.
- **use_smooth_scrolling**
    - **type**: bool
    - **default_value**: false
    - **description**: Whether to smoothly scroll to the desired anchor when you the user clicks a link item (this only works on one page themes). To use this feature you must define a css id.
- **title**
    - **type**: string
    - **default_value**: null
    - **description**: The title of the nav widget. It's usually the name of the company or website.
- **title_logo**
    - **type**: array
    - **default_value**
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
        - **active**
            - **type**: bool
            - **default_value**: false
            - **description**: Whether to add the active class to the item.
            - **example**: true
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







MizuxeFourColumnsOurStaffWidget
==============

[Back to top](#summary)

- [Screenshots](#mizuxefourcolumnsourstaffwidget-screenshots)
- [Templates and skins](#mizuxefourcolumnsourstaffwidget-templates-and-skins)
- [Example](#mizuxefourcolumnsourstaffwidget-configuration-example)
- [Variables descriptions](#mizuxefourcolumnsourstaffwidget-variables-description)



MizuxeFourColumnsOurStaffWidget is a bootstrap 4 widget showing your staff members.

It's composed of 3 parts:
- the title
- the text
- the items

You can show/hide each parts individually with the show_xxx properties.

Each item is composed of an image, the name of the member, the role, a description, and a list of social icon links.

By default, the member items are displayed in a 4 columns grid on large screens, and 2 columns grid for medium screens (and they
stack on each other for small screens).
This can be changed with the "column_class" property, which leverages the bootstrap 4 framework responsive capabilities.

See the grid system of bootstrap 4 for more details (https://getbootstrap.com/docs/4.0/layout/grid/).







MizuxeFourColumnsOurStaffWidget screenshots
----------

![Screenshot mizuxe_four_columns_our_staff_header.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/MizuxeFourColumnsOurStaffWidget/mizuxe_four_columns_our_staff_header.png)





MizuxeFourColumnsOurStaffWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: 
- **Presets**: 


MizuxeFourColumnsOurStaffWidget configuration example
----------------

```yaml
name: mizuxe_four_columns_our_staff_header
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\MizuxeFourColumnsOurStaffWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/MizuxeFourColumnsOurStaffWidget
template: default.php
vars:
    attr:
        class: my-5 text-center
        id: authors

    column_class: col-lg-3 col-md-6
    show_title: true
    show_text: true
    show_items: true
    title: Meet The Authors
    text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque corporis ea ipsam laborum officia quo.
    items:
        -
            img_url: img/person1.jpg
            img_alt: Lead Writer Susan Williams
            name: Susan Wiliams
            role: Lead Writer
            description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloribus facere itaque soluta. Odio, voluptate.
            icons:
                -
                    icon: fab fa-facebook
                    url: http://facebook.com

                -
                    icon: fab fa-twitter
                    url: http://twitter.com

                -
                    icon: fab fa-instagram
                    url: http://instagram.com



        -
            img_url: img/person2.jpg
            img_alt: Co-Writer Grace Smith
            name: Grace Smith
            role: Co-Writer
            description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloribus facere itaque soluta. Odio, voluptate.
            icons:
                -
                    icon: fab fa-facebook
                    url: http://facebook.com

                -
                    icon: fab fa-twitter
                    url: http://twitter.com

                -
                    icon: fab fa-instagram
                    url: http://instagram.com



        -
            img_url: img/person3.jpg
            img_alt: Editor John Doe
            name: John Doe
            role: Editor
            description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloribus facere itaque soluta. Odio, voluptate.
            icons:
                -
                    icon: fab fa-facebook
                    url: http://facebook.com

                -
                    icon: fab fa-twitter
                    url: http://twitter.com

                -
                    icon: fab fa-instagram
                    url: http://instagram.com



        -
            img_url: img/person4.jpg
            img_alt: Designer Kevin Swanson
            name: Kevin Swanson
            role: Designer
            description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloribus facere itaque soluta. Odio, voluptate.
            icons:
                -
                    icon: fab fa-facebook
                    url: http://facebook.com

                -
                    icon: fab fa-twitter
                    url: http://twitter.com

                -
                    icon: fab fa-instagram
                    url: http://instagram.com




```



MizuxeFourColumnsOurStaffWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: my-5 text-center
            - **description**: The css class to apply to the widget container tag.
            - **example**: my-5 text-center
- **column_class**
    - **type**: string
    - **default_value**: col-lg-3 col-md-6
    - **description**: The boostrap 4 grid responsive class for each column containing a card. See https://getbootstrap.com/docs/4.0/layout/grid/ for more info.
    - **example**: col-lg-3 col-md-6
- **show_title**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to show the title.
- **show_text**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to show the text.
- **show_items**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to show the items.
- **title**
    - **type**: string
    - **default_value**: No title
    - **description**: The title.
    - **example**: Meet The Authors
- **text**
    - **type**: string
    - **default_value**: 
    - **description**: The text.
    - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque corporis ea ipsam laborum officia quo.
- **items**
    - **type**: item_list
    - **default_value**
    - **description**: An array of member items.
    - **item_properties**
        - **img_url**
            - **type**: string
            - **default_value**: 
            - **description**: The value of the src attribute of the img tag.
            - **example**: img/person1.jpg
        - **img_alt**
            - **type**: string
            - **default_value**: 
            - **description**: The value of the alt attribute of the img tag.
            - **example**: Lead Writer Susan Williams
        - **name**
            - **type**: string
            - **default_value**: 
            - **description**: The name of the member.
            - **example**: Susan Wiliams
        - **role**
            - **type**: string
            - **default_value**: 
            - **description**: The role of the member.
            - **example**: Lead Writer
        - **description**
            - **type**: string
            - **default_value**: 
            - **description**: The description of the member.
            - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloribus facere itaque soluta. Odio, voluptate.
        - **icons**
            - **type**: item_list
            - **default_value**
            - **description**: The social icon items for this member.
            - **item_properties**
                - **icon**
                    - **type**: string
                    - **default_value**: 
                    - **description**: The css class for the social icon.
                    - **example**: fab fa-facebook
                - **url**
                    - **type**: string
                    - **default_value**: 
                    - **description**: The url for the social icon.
                    - **example**: http://facebook.com







MizuxeNewsletterSignupHeaderWidget
==============

[Back to top](#summary)

- [Screenshots](#mizuxenewslettersignupheaderwidget-screenshots)
- [Templates and skins](#mizuxenewslettersignupheaderwidget-templates-and-skins)
- [Example](#mizuxenewslettersignupheaderwidget-configuration-example)
- [Variables descriptions](#mizuxenewslettersignupheaderwidget-variables-description)



MizuxeNewsletterSignupHeaderWidget is a bootstrap 4 widget.
It's an epurated newsletter signup form with two fields and a submit button.
The two fields are name and email.
We can disable the name field to only collect the email using the **field_name_active** property.






MizuxeNewsletterSignupHeaderWidget screenshots
----------

![Screenshot mizuxe_newsletter_signup_header.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/MizuxeNewsletterSignupHeaderWidget/mizuxe_newsletter_signup_header.png)





MizuxeNewsletterSignupHeaderWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: 
- **Presets**: 


MizuxeNewsletterSignupHeaderWidget configuration example
----------------

```yaml
name: mizuxe_newsletter_signup_header
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\MizuxeNewsletterSignupHeaderWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/MizuxeNewsletterSignupHeaderWidget
template: default.php
vars:
    attr:
        class: bg-dark text-white py-5

    field_name_active: true
    field_name_name: name
    field_name_label: Enter Name
    field_email_name: email
    field_email_label: Enter Email
    btn_class: btn btn-primary btn-lg btn-block
    btn_icon: fas fa-envelope-open
    btn_text: Subscribe
```



MizuxeNewsletterSignupHeaderWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: bg-dark text-white py-5
            - **description**: The css class to apply to the widget's container tag.
            - **example**: bg-dark text-white py-5
- **field_name_active**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to show the name field.
- **field_name_name**
    - **type**: string
    - **default_value**: name
    - **description**: The value of the name attribute for the **name** field.
    - **example**: name
- **field_name_label**
    - **type**: string
    - **default_value**: Enter Name
    - **description**: The label for the **name** field.
    - **example**: Enter Name
- **field_email_name**
    - **type**: string
    - **default_value**: email
    - **description**: The value of the name attribute for the **email** field.
    - **example**: email
- **field_email_label**
    - **type**: string
    - **default_value**: Enter Email
    - **description**: The label for the **email** field.
    - **example**: Enter Email
- **btn_class**
    - **type**: string
    - **default_value**: btn btn-primary btn-lg btn-block
    - **description**: The css class to use on the button.
    - **example**: btn btn-primary btn-lg btn-block
- **btn_icon**
    - **type**: string
    - **default_value**: fas fa-envelope-open
    - **description**: The css class of the button icon.
    - **example**: fas fa-envelope-open
- **btn_text**
    - **type**: string
    - **default_value**: Subscribe
    - **description**: The text of the button.
    - **example**: Subscribe







MizuxeTwoColumnsContactFormWidget
==============

[Back to top](#summary)

- [Screenshots](#mizuxetwocolumnscontactformwidget-screenshots)
- [Templates and skins](#mizuxetwocolumnscontactformwidget-templates-and-skins)
- [Example](#mizuxetwocolumnscontactformwidget-configuration-example)
- [Variables descriptions](#mizuxetwocolumnscontactformwidget-variables-description)



MizuxeTwoColumnsContactFormWidget is a bootstrap 4 widget representing a contact form.

It's composed of two parts:
- the form
- the image

The form is composed of a title, a text, some fields, and a submit button.

Each form field has a type, which can be one of:
- text: an input of type text
- email: an input of type email
- textarea: a textarea


The image can be hidden using the "show_image" property.







MizuxeTwoColumnsContactFormWidget screenshots
----------

![Screenshot mizuxe_one_column_contact_form.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/MizuxeTwoColumnsContactFormWidget/mizuxe_one_column_contact_form.png)





MizuxeTwoColumnsContactFormWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: 
- **Presets**: 


MizuxeTwoColumnsContactFormWidget configuration example
----------------

```yaml
name: mizuxe_one_column_contact_form
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\MizuxeTwoColumnsContactFormWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/MizuxeTwoColumnsContactFormWidget
template: default.php
vars:
    attr:
        class: bg-light py-5
        id: contact

    show_image: true
    image_url: img/mlogo.png
    image_alt: our company logo
    form_action: ""
    form_method: post
    form_title: Get In Touch
    form_text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, ea!
    form_fields:
        -
            icon: fas fa-user
            name: name
            label: Name
            type: text

        -
            icon: fas fa-envelope
            name: email
            label: Email
            type: email

        -
            icon: fas fa-pencil-alt
            name: message
            label: Message
            type: textarea


    submit_btn_text: Submit
    submit_btn_class: btn btn-primary btn-block btn-lg
```



MizuxeTwoColumnsContactFormWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: 
            - **description**: The css class to apply to the widget container.
            - **example**: bg-light py-5
- **show_image**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to show the image.
- **image_url**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the src attribute of the img tag.
    - **example**: img/mlogo.png
- **image_alt**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the alt attribute of the img tag.
    - **example**: our company logo
- **form_action**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the action attribute of the form tag.
    - **example**: 
- **form_method**
    - **type**: string
    - **default_value**: post
    - **description**: The value of the method attribute of the form tag.
    - **example**: post
    - **choices**
        - get
        - post
- **form_title**
    - **type**: string
    - **default_value**: 
    - **description**: The title of the form.
    - **example**: Get In Touch
- **form_text**
    - **type**: string
    - **default_value**: 
    - **description**: The text of the form.
    - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, ea!
- **form_fields**
    - **type**: item_list
    - **default_value**
    - **description**: An array of form fields.
    - **item_properties**
        - **icon**
            - **type**: string
            - **default_value**: 
            - **description**: The icon for this field. If empty, the icon will not be displayed.
            - **example**: fas fa-user
        - **name**
            - **type**: string
            - **default_value**: 
            - **description**: The name attribute for this field.
            - **example**: name
        - **label**
            - **type**: string
            - **default_value**: 
            - **description**: The label for this field. It might be displayed in a placeholder.
            - **example**: Name
        - **type**
            - **type**: string
            - **default_value**: 
            - **description**: The type of this form field.
            - **example**: text
            - **choices**
                - text, an input of type text
                - email, an input of type email
                - textarea, a textarea
- **submit_btn_text**
    - **type**: string
    - **default_value**: Submit
    - **description**: The text for the submit button.
    - **example**: Submit
- **submit_btn_class**
    - **type**: string
    - **default_value**: btn btn-primary btn-block btn-lg
    - **description**: The css class to apply to the submit button.
    - **example**: btn btn-primary btn-block btn-lg







MizuxeTwoColumnsTeaserWidget
==============

[Back to top](#summary)

- [Screenshots](#mizuxetwocolumnsteaserwidget-screenshots)
- [Templates and skins](#mizuxetwocolumnsteaserwidget-templates-and-skins)
- [Example](#mizuxetwocolumnsteaserwidget-configuration-example)
- [Variables descriptions](#mizuxetwocolumnsteaserwidget-variables-description)




MizuxeTwoColumnsTeaserWidget is a bootstrap 4 widget composed of three parts:

- the teaser
- the image
- the background

The teaser has a title, a text and a button with an icon.

By default, the image only appears on large screens.
You can make it appears on a different size using the **img_size_visible** property.

The image will appear by default on the right of the text. This can be changed using the **img_on_right** property.

The background is composed of a background image and a background overlay used as a tint.








MizuxeTwoColumnsTeaserWidget screenshots
----------

![Screenshot mizuxe_two_columns_teaser.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/MizuxeTwoColumnsTeaserWidget/mizuxe_two_columns_teaser.png)





MizuxeTwoColumnsTeaserWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: default.css
- **Presets**: 


MizuxeTwoColumnsTeaserWidget configuration example
----------------

```yaml
name: mizuxe_two_columns_teaser
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\MizuxeTwoColumnsTeaserWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/MizuxeTwoColumnsTeaserWidget
template: default.php
vars:
    attr:
        id: showcase
        class: py-5

    teaser_title: Do What You Dream Of...
    teaser_text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptatibus?
    teaser_text_align: center
    teaser_button_text: Read More
    teaser_button_icon: fas fa-arrow-right
    teaser_button_class: btn btn-outline-secondary btn-lg text-white
    teaser_button_url: "#"
    img_on_right: true
    img_size_visible: lg
    img_src: /plugins/Light_Kit_Demo/mizuxe/img/book.png
    img_alt: Mizuxe Mountains Book
    bg_style: url('/plugins/Light_Kit_Demo/mizuxe/img/mountains.jpg')
    bg_overlay_style: rgba(50, 146, 166, 0.8);
    bg_overlay_class: text-white
```



MizuxeTwoColumnsTeaserWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: 
            - **description**: The css class to add to the widget container tag.
            - **example**: py-5
- **teaser_title**
    - **type**: string
    - **default_value**: No title
    - **description**: The title of the teaser.
    - **example**: Do What You Dream Of...
- **teaser_text**
    - **type**: string
    - **default_value**: 
    - **description**: The text of the teaser.
    - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptatibus?
- **teaser_text_align**
    - **type**: string
    - **default_value**: center
    - **description**: The align value for the teaser text. See the choices for the available values.
    - **example**: center
    - **choices**
        - center
        - left
        - right
- **teaser_button_text**
    - **type**: string
    - **default_value**: Read More
    - **description**: The text of the teaser button.
    - **example**: Read More
- **teaser_button_icon**
    - **type**: string
    - **default_value**: fas fa-arrow-right
    - **description**: The icon of the teaser button.
    - **example**: fas fa-arrow-right
- **teaser_button_class**
    - **type**: string
    - **default_value**: btn btn-outline-secondary btn-lg text-white
    - **description**: The css class of the teaser button.
    - **example**: btn btn-outline-secondary btn-lg text-white
- **teaser_button_url**
    - **type**: string
    - **default_value**: #
    - **description**: The url of the teaser button.
    - **example**: #
- **img_on_right**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to display the image on the right of the teaser.
- **img_size_visible**
    - **type**: string
    - **default_value**: lg
    - **description**: The screen size at which the image becomes visible. Use bootstrap 4 sizes.
    - **example**: lg
    - **choices**
        - sm
        - md
        - lg
- **img_src**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the src attribute of the img tag for the image.
    - **example**: /plugins/Light_Kit_Demo/mizuxe/img/book.png
- **img_alt**
    - **type**: string
    - **default_value**: 
    - **description**: The value of the alt attribute of the img tag for the image.
    - **example**: Mizuxe Mountains Book
- **bg_style**
    - **type**: string
    - **default_value**: transparent
    - **description**: The value of the background css property for the background image.
    - **example**: url('/plugins/Light_Kit_Demo/mizuxe/img/mountains.jpg')
- **bg_overlay_style**
    - **type**: string
    - **default_value**: transparent
    - **description**: The value of the background css property for the background overlay.
    - **example**: rgba(50, 146, 166, 0.8);
- **bg_overlay_class**
    - **type**: string
    - **default_value**: 
    - **description**: The css class to add to the background overlay.
    - **example**: text-white







OneColumnAccordionWidget
==============

[Back to top](#summary)

- [Screenshots](#onecolumnaccordionwidget-screenshots)
- [Templates and skins](#onecolumnaccordionwidget-templates-and-skins)
- [Example](#onecolumnaccordionwidget-configuration-example)
- [Variables descriptions](#onecolumnaccordionwidget-variables-description)



OneColumnAccordionWidget is a bootstrap 4 widget composed of three parts:
    - the title
    - the text
    - the accordion

We can show/hide each of those parts.

The accordion items can have icons.





OneColumnAccordionWidget screenshots
----------

![Screenshot mizuxe_one_column_accordion_teaser.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/OneColumnAccordionWidget/mizuxe_one_column_accordion_teaser.png)





OneColumnAccordionWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: 
- **Presets**: 


OneColumnAccordionWidget configuration example
----------------

```yaml
name: one_column_accordion
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\OneColumnAccordionWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/OneColumnAccordionWidget
template: default.php
vars:
    attr:
        class: py-5 text-center bg-light

    title_visible: true
    title: Why This Book?
    title_class: text-primary pb-3
    text_visible: true
    text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolore laboriosam nisi reiciendis sint sunt?
    text_class: lead pb-3
    accordion_visible: true
    accordion_items:
        -
            icon: fas fa-arrow-circle-down
            title: Get Inspired
            is_open: true
            text: <
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi asperiores
                at culpa, deserunt ducimus facilis ipsa minima, obcaecati, quod reprehenderit
                repudiandae sed voluptates. Amet at autem commodi dicta dolore dolorum error esse et
                excepturi fugiat fugit labore laboriosam molestiae odit provident quisquam, repellendus
                ut vero vitae voluptas, voluptatem voluptatibus.
            >

        -
            icon: fas fa-arrow-circle-down
            title: Gain The Knowledge
            is_open: false
            text: <
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi asperiores
                at culpa, deserunt ducimus facilis ipsa minima, obcaecati, quod reprehenderit
                repudiandae sed voluptates. Amet at autem commodi dicta dolore dolorum error esse et
                excepturi fugiat fugit labore laboriosam molestiae odit provident quisquam, repellendus
                ut vero vitae voluptas, voluptatem voluptatibus.
            >

        -
            icon: fas fa-arrow-circle-down
            title: Open Your Mind
            is_open: false
            text: <
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi asperiores
                at culpa, deserunt ducimus facilis ipsa minima, obcaecati, quod reprehenderit
                repudiandae sed voluptates. Amet at autem commodi dicta dolore dolorum error esse et
                excepturi fugiat fugit labore laboriosam molestiae odit provident quisquam, repellendus
                ut vero vitae voluptas, voluptatem voluptatibus.
            >


```



OneColumnAccordionWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: py-5 text-center bg-light
            - **description**: The css class to add to the widget container tag.
            - **example**: py-5 text-center bg-light
- **title_visible**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to display the title.
- **title**
    - **type**: string
    - **default_value**: 
    - **description**: The title.
    - **example**: Why This Book?
- **title_class**
    - **type**: string
    - **default_value**: text-primary pb-3
    - **description**: The css class of the title.
    - **example**: text-primary pb-3
- **text_visible**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to display the text.
- **text**
    - **type**: string
    - **default_value**: 
    - **description**: The text below the title.
    - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolore laboriosam nisi reiciendis sint sunt?
- **text_class**
    - **type**: string
    - **default_value**: lead pb-3
    - **description**: The css class of the text.
    - **example**: lead pb-3
- **accordion_visible**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to display the accordion.
- **accordion_items**
    - **type**: item_list
    - **default_value**
    - **description**: An array of accordion items.
    - **item_properties**
        - **icon**
            - **type**: string
            - **default_value**: 
            - **description**: The css class of the icon. If empty, the icon won't be displayed.
            - **example**: fas fa-arrow-circle-down
        - **title**
            - **type**: string
            - **default_value**: 
            - **description**: The title of the accordion item.
            - **example**: Get Inspired
        - **is_open**
            - **type**: bool
            - **default_value**: true
            - **description**: Whether to open the accordion item by default.
        - **text**
            - **type**: string
            - **default_value**: 
            - **description**: The text of the accordion item.
            - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi asperiores
at culpa, deserunt ducimus facilis ipsa minima, obcaecati, quod reprehenderit
repudiandae sed voluptates. Amet at autem commodi dicta dolore dolorum error esse et
excepturi fugiat fugit labore laboriosam molestiae odit provident quisquam, repellendus
ut vero vitae voluptas, voluptatem voluptatibus.







ParallaxHeaderWidget
==============

[Back to top](#summary)

- [Screenshots](#parallaxheaderwidget-screenshots)
- [Templates and skins](#parallaxheaderwidget-templates-and-skins)
- [Example](#parallaxheaderwidget-configuration-example)
- [Variables descriptions](#parallaxheaderwidget-variables-description)



ParallaxHeaderWidget is a bootstrap 4 widget to display a header with a parallax effect.
The parallax header is composed of four elements:
- the background image
- an overlay to tint/attenuate the background image
- a title
- a text

By default, the text only shows up if the screen is medium size or larger.
We can control at which size the text shows up by using the "text_visible_size" property.

If the title is empty, it will not be displayed.

If the text is empty, it will not be displayed.





ParallaxHeaderWidget screenshots
----------

![Screenshot glozzom_parallax_header.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/ParallaxHeaderWidget/glozzom_parallax_header.png)





ParallaxHeaderWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: default.css
- **Presets**: glozzom.byml


ParallaxHeaderWidget configuration example
----------------

```yaml
name: parallax_header
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\ParallaxHeaderWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/ParallaxHeaderWidget
template: default.php
vars:
    attr:
        id: home-heading
        class: p-5

    background_url: /plugins/Light_Kit_Demo/glozzom/img/lights.jpg
    background_height: 200px
    overlay_color: rgba(0,0,0,0.7)
    title: Are You Ready To Get Started?
    text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore illum in ipsum iste odio perferendis quia quidem quos sit?
    text_visible_size: md
```



ParallaxHeaderWidget variables description
-----------

- **background_url**
    - **type**: string
    - **default_value**: 
    - **description**: The url of the background image.
    - **example**: /plugins/Light_Kit_Demo/glozzom/img/lights.jpg
- **background_height**
    - **type**: string
    - **default_value**: 200px
    - **description**: The css height of the background image.
    - **example**: 200px
- **overlay_color**
    - **type**: string
    - **default_value**: rgba(0,0,0,0.7)
    - **description**: The background color of the overlay covering the background image.
    - **example**: rgba(0,0,0,0.7)
- **title**
    - **type**: string
    - **default_value**: 
    - **description**: The title. If empty, it will not be displayed.
    - **example**: Are You Ready To Get Started?
- **text**
    - **type**: string
    - **default_value**: 
    - **description**: The text. If empty, it will not be displayed.
    - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore illum in ipsum iste odio perferendis quia quidem quos sit?
- **text_visible_size**
    - **type**: string
    - **default_value**: md
    - **description**: The bootstrap size at which the text should start to be visible.
    - **example**: md
    - **choices**
        - sm
        - md
        - lg







ShowCaseCarouselWidget
==============

[Back to top](#summary)

- [Screenshots](#showcasecarouselwidget-screenshots)
- [Templates and skins](#showcasecarouselwidget-templates-and-skins)
- [Example](#showcasecarouselwidget-configuration-example)
- [Variables descriptions](#showcasecarouselwidget-variables-description)



The ShowCaseCarouselWidget is a bootstrap 4 widget representing a carousel with sliding items.

It uses the bootstrap 4 carousel component (more info at https://getbootstrap.com/docs/4.0/components/carousel/)

Each item by default is composed of the following elements:
- background image
- title
- text
- button

We can decide which item should be display first by adding the setting the "active" property of the desired item
to true.

By default, the textual elements of an item (the title, text and button) are only visible on small screens and larger (i.e. on
very small screens like mobile, they aren't visible, because they take too much space).

We can change the size at which the textual elements become visible using the "captions_visible_size" property.

Also, for the title, text and button of each item, if their text is empty they will not be displayed.

So for instance if the title of an item is empty, it will not be displayed for that item.
Same for the text and the button.


By default, the navigation between items occur automatically every 6 seconds.
It's possible to change the time an item stays on the showcase using the "js.interval" property,
and more generally it's possible to define the behaviour of the carousel using the properties inside the "js" property.

See the variables description for more details.

By default, the carousel has navigation arrows on the edges, and navigation indicators near the bottom of the carousel.
We can de-activate those by using the "show_nav_arrows" and "show_nav_indicators" properties.






ShowCaseCarouselWidget screenshots
----------

![Screenshot glozzom_showcase_carousel.jpg](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/ShowCaseCarouselWidget/glozzom_showcase_carousel.jpg)





ShowCaseCarouselWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: default.css.php
- **Presets**: 


ShowCaseCarouselWidget configuration example
----------------

```yaml
name: glozzom_showcase_carousel
type: picasso
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\ShowCaseCarouselWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/ShowCaseCarouselWidget
template: default.php
vars:
    attr:
        id: showcase

    js:
        automatic_cycle: true
        interval: 6000
        pause_on_hover: true

    show_nav_arrows: true
    show_nav_indicators: true
    captions_visible_size: sm
    items:
        -
            img_url: /plugins/Light_Kit_Demo/glozzom/img/image1.jpg
            caption_align: right
            title: Heading One
            title_class: display-3
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore ea, harum itaque maiores nihil perferendis quae sint tempore voluptates?
            text_class: lead
            btn_text: Sign Up Now
            btn_url: "#"
            btn_class: btn btn-danger btn-lg
            active: true

        -
            img_url: /plugins/Light_Kit_Demo/glozzom/img/image2.jpg
            caption_align: center
            title: Heading Two
            title_class: display-3
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore ea, harum itaque maiores nihil perferendis quae sint tempore voluptates?
            text_class: lead
            btn_text: Learn More
            btn_url: "#"
            btn_class: btn btn-primary btn-lg

        -
            caption_align: right
            img_url: /plugins/Light_Kit_Demo/glozzom/img/image3.jpg
            title: Heading Three
            title_class: display-3
            text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore ea, harum itaque maiores nihil perferendis quae sint tempore voluptates?
            text_class: lead
            btn_text: Learn More
            btn_url: "#"
            btn_class: btn btn-success btn-lg


```



ShowCaseCarouselWidget variables description
-----------

- **js**
    - **type**: array
    - **default_value**: null
    - **description**: An array of parameters to define the behaviour of the javascript part of the slider.
    - **properties**
        - **automatic_cycle**
            - **type**: bool
            - **default_value**: true
            - **description**: Whether to automatically cycles through the items. If not, the user needs to change the slide manually.
        - **interval**
            - **type**: string
            - **default_value**: 6000
            - **description**: The amount of time (in milliseconds) to delay between automatically cycling an item. This option is only
relevant if the automatic_cycle option is set to true.
            - **example**: 6000
        - **pause_on_hover**
            - **type**: bool
            - **default_value**: true
            - **description**: If true, the carousel will stop sliding as long as the user hovers her cursor on a carousel item.
- **show_nav_arrows**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to show the navigation arrows.
- **show_nav_indicators**
    - **type**: bool
    - **default_value**: true
    - **description**: Whether to show the navigation indicators.
- **captions_visible_size**
    - **type**: string
    - **default_value**: sm
    - **description**: The size at which the textual information of the slide should become visible (between small, medium and large).
    - **example**: sm
    - **choices**
        - sm
        - md
        - lg
- **items**
    - **type**: item_list
    - **default_value**
    - **description**: The items of the carousel.
    - **item_properties**
        - **img_url**
            - **type**: string
            - **default_value**: 
            - **description**: The url of the background image for this carousel item.
            - **example**: /plugins/Light_Kit_Demo/glozzom/img/image1.jpg
        - **caption_align**
            - **type**: string
            - **default_value**: right
            - **description**: How to align the textual information (aka caption) of this carousel item.
            - **example**: right
            - **choices**
                - left
                - center
                - right
        - **title**
            - **type**: string
            - **default_value**: 
            - **description**: The title for this carousel item. If this value is empty, the title will not be displayed.
            - **example**: Heading One
        - **title_class**
            - **type**: string
            - **default_value**: display-3
            - **description**: The css class to apply to the title of this carousel item.
            - **example**: display-3
        - **text**
            - **type**: string
            - **default_value**: 
            - **description**: The text for this carousel item. If this value is empty, the text will not be displayed.
            - **example**: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore ea, harum itaque maiores nihil perferendis quae sint tempore voluptates?
        - **text_class**
            - **type**: string
            - **default_value**: lead
            - **description**: The css class to apply to the text of this carousel item.
            - **example**: lead
        - **btn_text**
            - **type**: string
            - **default_value**: 
            - **description**: The text for the button of this carousel item. If this value is empty, the button will not be displayed.
            - **example**
                - Sign Up Now
                - Read More
        - **btn_url**
            - **type**: string
            - **default_value**: 
            - **description**: The url of the button for this carousel item.
            - **example**: 
        - **btn_class**
            - **type**: string
            - **default_value**: btn
            - **description**: The css class to apply to the button for this carousel item.
            - **example**: btn btn-danger btn-lg
        - **active**
            - **type**: bool
            - **default_value**: false
            - **description**: If true, indicates that this carousel item should be displayed first when the page opens.







SimpleFooterWidget
==============

[Back to top](#summary)

- [Screenshots](#simplefooterwidget-screenshots)
- [Templates and skins](#simplefooterwidget-templates-and-skins)
- [Example](#simplefooterwidget-configuration-example)
- [Variables descriptions](#simplefooterwidget-variables-description)



SimpleFooterWidget is a bootstrap 4 widget representing a footer.

It is composed of a text, which we can align horizontally using the "text_align" property.

In the footer text, we can use the $year string, which will be replaced by the current year.






SimpleFooterWidget screenshots
----------

![Screenshot blogen_footer.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/SimpleFooterWidget/blogen_footer.png)

![Screenshot glozzom_simple_copyright_footer.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/SimpleFooterWidget/glozzom_simple_copyright_footer.png)

![Screenshot mizuxe_right_aligned_monochrome_footer.png](https://lingtalfi.com/img/universe/Light_Kit_BootstrapWidgetLibrary/screenshots/SimpleFooterWidget/mizuxe_right_aligned_monochrome_footer.png)





SimpleFooterWidget templates, skins, presets
-----------
- **Templates**: default.php
- **Skins**: 
- **Presets**: blogen.byml, glozzom.byml, mizuxe.byml


SimpleFooterWidget configuration example
----------------

```yaml
name: mizuxe_right_aligned_monochrome_footer
type: picasso
active: true
className: Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\SimpleFooterWidget
widgetDir: templates/Light_Kit_BootstrapWidgetLibrary/widgets/picasso/SimpleFooterWidget
template: default.php
vars:
    attr:
        class: py-5 bg-primary text-white
        id: main-footer

    text_align: right
    text_class: ""
    text: Copyright &copy; $year
```



SimpleFooterWidget variables description
-----------

- **attr**
    - **type**: array
    - **default_value**
    - **description**: The attributes to add to the widget's container tag.
    - **properties**
        - **class**
            - **type**: string
            - **default_value**: 
            - **description**: The css class to apply to the widget container.
            - **example**: py-5 bg-primary text-white
- **text_align**
    - **type**: string
    - **default_value**: right
    - **description**: How to align the text of the widget.
    - **example**: right
    - **choices**
        - left
        - center
        - right
- **text_class**
    - **type**: string
    - **default_value**: lead
    - **description**: The css class to apply to the text of the widget.
    - **example**: lead
- **text**
    - **type**: string
    - **default_value**: Copyright &copy; $year
    - **description**: The text of the widget.
    - **example**: Copyright &copy; $year














[Back to the Ling/Light_Kit_BootstrapWidgetLibrary api](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary/blob/master/doc/api/Ling/Light_Kit_BootstrapWidgetLibrary.md)



The ZeroAdminHeroGraphWidget class
================
2019-04-26 --> 2019-07-25






Introduction
============

The ZeroAdminHeroGraphWidget class.



Class synopsis
==============


class <span class="pl-k">ZeroAdminHeroGraphWidget</span> extends EasyLightPicassoWidget implements KitPageRendererAwareInterface, [UniversalTemplateEngineInterface](https://github.com/lingtalfi/UniversalTemplateEngine/blob/master/UniversalTemplateEngineInterface.php), WidgetConfAwarePicassoWidgetInterface {

- Inherited properties
    - protected Ling\Kit\PageRenderer\KitPageRendererInterface [EasyLightPicassoWidget::$kitPageRenderer](#property-kitPageRenderer) ;
    - protected array [WidgetConfAwarePicassoWidget::$widgetConf](#property-widgetConf) ;
    - protected array [PicassoWidget::$libraries](#property-libraries) ;
    - protected array [PicassoWidget::$attr](#property-attr) ;
    - protected [Ling\HtmlPageTools\Copilot\HtmlPageCopilot](https://github.com/lingtalfi/HtmlPageTools/blob/master/doc/api/Ling/HtmlPageTools/Copilot/HtmlPageCopilot.md) [PicassoWidget::$copilot](#property-copilot) ;

- Inherited methods
    - public EasyLightPicassoWidget::__construct() : void
    - public EasyLightPicassoWidget::setKitPageRenderer(Ling\Kit\PageRenderer\KitPageRendererInterface $renderer) : void
    - public EasyLightPicassoWidget::getKitPageRenderer() : Ling\Kit\PageRenderer\KitPageRendererInterface | null
    - protected EasyLightPicassoWidget::getContainer() : Ling\Light\ServiceContainer\LightServiceContainerInterface
    - public WidgetConfAwarePicassoWidget::setWidgetConf(array $widgetConf) : void
    - public WidgetConfAwarePicassoWidget::getWidgetConf() : array
    - public PicassoWidget::getLibraries() : array
    - public PicassoWidget::setCopilot([Ling\HtmlPageTools\Copilot\HtmlPageCopilot](https://github.com/lingtalfi/HtmlPageTools/blob/master/doc/api/Ling/HtmlPageTools/Copilot/HtmlPageCopilot.md) $copilot) : void
    - public PicassoWidget::renderFile(string $filePath, array $variables = []) : false | string
    - public PicassoWidget::prepare(array &$widgetConf, [Ling\HtmlPageTools\Copilot\HtmlPageCopilot](https://github.com/lingtalfi/HtmlPageTools/blob/master/doc/api/Ling/HtmlPageTools/Copilot/HtmlPageCopilot.md) $copilot) : void
    - protected PicassoWidget::getAttributesHtml(bool $excludeClass = true) : string
    - protected PicassoWidget::getCssClass() : string
    - protected PicassoWidget::registerLibrary(string $libraryName, array $css, array $js) : void
    - public ZephyrTemplateEngine::render(string $resourceId, array $variables = []) : false | string
    - public ZephyrTemplateEngine::getErrors() : array
    - public ZephyrTemplateEngine::setDirectory(string $directory) : void
    - protected ZephyrTemplateEngine::interpret(string $___path, array $z) : false | string
    - private ZephyrTemplateEngine::addError(string $msg) : void

}






Methods
==============

- EasyLightPicassoWidget::__construct &ndash; Builds the EasyPicassoWidget instance.
- EasyLightPicassoWidget::setKitPageRenderer &ndash; Sets the KitPageRenderer instance.
- EasyLightPicassoWidget::getKitPageRenderer &ndash; 
- EasyLightPicassoWidget::getContainer &ndash; Returns a light service container instance.
- WidgetConfAwarePicassoWidget::setWidgetConf &ndash; Sets the widget configuration.
- WidgetConfAwarePicassoWidget::getWidgetConf &ndash; Returns the widget configuration.
- PicassoWidget::getLibraries &ndash; Returns the libraries of this instance.
- PicassoWidget::setCopilot &ndash; Sets the copilot.
- PicassoWidget::renderFile &ndash; Parses the file identified and returns its interpreted content (by injecting the variables in it).
- PicassoWidget::prepare &ndash; Prepares the widget according to the given widget configuration.
- PicassoWidget::getAttributesHtml &ndash; Returns the string of html attributes defined in the widget attributes (attr property in the [widget configuration array](https://github.com/lingtalfi/Kit_PicassoWidget#the-picasso-widget-array)).
- PicassoWidget::getCssClass &ndash; 
- PicassoWidget::registerLibrary &ndash; Registers an (external) library that this widget uses.
- ZephyrTemplateEngine::render &ndash; Parses the template identified by $resourceId and returns the interpreted template (the template with the variables injected in it).
- ZephyrTemplateEngine::getErrors &ndash; Returns the errors of this instance.
- ZephyrTemplateEngine::setDirectory &ndash; Sets the directory.
- ZephyrTemplateEngine::interpret &ndash; and returns the resulting html code.
- ZephyrTemplateEngine::addError &ndash; Adds an error to this instance.





Location
=============
Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\ZeroAdminHeroGraphWidget<br>
See the source code of [Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\ZeroAdminHeroGraphWidget](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary/blob/master/Widget/Picasso/ZeroAdminHeroGraphWidget.php)



SeeAlso
==============
Previous class: [ZeroAdminHeaderWidget](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary/blob/master/doc/api/Ling/Light_Kit_BootstrapWidgetLibrary/Widget/Picasso/ZeroAdminHeaderWidget.md)<br>Next class: [ZeroAdminNotificationAlertWidget](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary/blob/master/doc/api/Ling/Light_Kit_BootstrapWidgetLibrary/Widget/Picasso/ZeroAdminNotificationAlertWidget.md)<br>
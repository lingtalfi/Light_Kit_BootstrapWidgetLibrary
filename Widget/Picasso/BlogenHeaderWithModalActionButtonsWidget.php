<?php


namespace Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso;


use Ling\Kit_PicassoWidget\Widget\PicassoWidget;


/**
 * The BlogenHeaderWithModalActionButtonsWidget class.
 */
class BlogenHeaderWithModalActionButtonsWidget extends PicassoWidget
{

    /**
     * @overrides
     */
    public function __construct()
    {
        parent::__construct();
        $this->registerLibrary("ckeditor", [], [
            'https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js',
        ]);
    }


}
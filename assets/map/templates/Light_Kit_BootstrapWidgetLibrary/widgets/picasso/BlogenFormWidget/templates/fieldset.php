<?php


/**
 * @var $this PicassoWidget
 */


use Ling\Bat\CaseTool;
use Ling\Bat\StringTool;
use Ling\Kit_PicassoWidget\Widget\PicassoWidget;

$title = $z['title'] ?? "";
$title_class = $z['title_class'] ?? "";
$form_action = $z['form_action'] ?? "";
$form_method = $z['form_method'] ?? "";
$form_fields = $z['form_fields'] ?? [];
$footer_class = $z['footer_class'] ?? '';
$submit_btn_text = $z['submit_btn_text'] ?? 'Submit';
$submit_btn_class = $z['submit_btn_class'] ?? '';
$show_footer = $z['show_footer'] ?? true;


$prefix = StringTool::getUniqueCssId("blogen_form_id-")

?>

<section class="kit-bwl-blogen_form <?php echo htmlspecialchars($this->getCssClass()); ?>"
    <?php echo $this->getAttributesHtml(); ?>
>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <?php if ($title): ?>
                        <div class="card-header">
                            <h4><?php echo $title; ?></h4>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($form_action); ?>"
                              method="<?php echo htmlspecialchars($form_method); ?>">
                            <?php foreach ($form_fields as $field):
                                $type = $field['type'];
                                $name = $field['name'];
                                $label = $field['label'];
                                $value = $field['value'] ?? '';
                                $hint = $field['hint'] ?? '';

                                $id = $prefix . "-" . CaseTool::toDash($name);

                                ?>
                                <fieldset class="form-group">
                                    <legend><?php echo $label; ?></legend>
                                    <?php switch ($type):
                                        case 'text':
                                        case 'password':
                                        case 'email':
                                            ?>
                                            <input
                                                    name="<?php echo htmlspecialchars($name); ?>"
                                                    type="<?php echo htmlspecialchars($type); ?>"
                                                    class="form-control"
                                                    value="<?php echo htmlspecialchars($value); ?>"
                                                    id="<?php echo htmlspecialchars($id); ?>"
                                            >
                                            <?php break; ?>
                                        <?php case 'list':
                                            $options = $field['options'] ?? [];
                                            ?>
                                            <select class="form-control"
                                                    name="<?php echo htmlspecialchars($name); ?>"
                                                    id="<?php echo htmlspecialchars($id); ?>"
                                            >
                                                <?php foreach ($options as $val => $lab):
                                                    $sSel = ((string)$value === (string)$val) ? 'selected="selected"' : '';
                                                    ?>
                                                    <option <?php echo $sSel; ?>
                                                            value="<?php echo htmlspecialchars($val); ?>"><?php echo $lab; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php break; ?>
                                        <?php case 'file':
                                            $file_label = $field['file_label'] ?? '';
                                            ?>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                       name="<?php echo htmlspecialchars($name); ?>"
                                                       id="<?php echo htmlspecialchars($id); ?>"
                                                >
                                                <label for="<?php echo htmlspecialchars($id); ?>"
                                                       class="custom-file-label"><?php echo $file_label; ?></label>
                                            </div>

                                            <?php break; ?>
                                        <?php case 'textarea': ?>
                                        <?php case 'textarea_ck':

                                            if ('textarea_ck' === $type) {

                                                $securedName = CaseTool::toSnake($name); // ensure no javascript injection...
                                                $jsCode = <<<EEE
CKEDITOR.replace('$securedName');
EEE;
                                                $this->copilot->addJsCodeBlock($jsCode);
                                            }

                                            ?>
                                            <textarea
                                                    class="form-control"
                                                    name="<?php echo htmlspecialchars($name); ?>"
                                                    id="<?php echo htmlspecialchars($id); ?>"
                                            ><?php echo htmlspecialchars($value); ?></textarea>
                                            <?php break; ?>
                                        <?php case 'radio':
                                            $choices = $field['choices'] ?? [];
                                            ?>
                                            <?php foreach ($choices as $val => $label):
                                            $sChecked = ((string)$value === (string)$val) ? 'checked="checked"' : '';
                                            ?>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input
                                                            name="<?php echo htmlspecialchars($name); ?>"
                                                            type="radio" class="form-check-input"
                                                            value="<?php echo htmlspecialchars($val); ?>" <?php echo $sChecked; ?>>
                                                    <?php echo $label; ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                            <?php break; ?>
                                        <?php default: ?>
                                            <?php break; ?>
                                        <?php endswitch; ?>


                                    <?php if ($hint): ?>
                                        <small class="form-text text-muted"><?php echo $hint; ?></small>
                                    <?php endif; ?>

                                </fieldset>
                            <?php endforeach; ?>
                        </form>
                    </div>

                    <?php if (true === $show_footer): ?>

                        <div class="card-footer <?php echo htmlspecialchars($footer_class); ?>">
                            <button class="<?php echo htmlspecialchars($submit_btn_class); ?>"
                                    data-dismiss="modal"><?php echo $submit_btn_text; ?></button>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
</section>


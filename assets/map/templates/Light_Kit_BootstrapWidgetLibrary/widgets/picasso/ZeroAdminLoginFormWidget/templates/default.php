<?php


/**
 * @var $this ZeroAdminLoginFormWidget
 */


use Ling\Light_Kit_BootstrapWidgetLibrary\Widget\Picasso\ZeroAdminLoginFormWidget;


$form_method = $z['form_method'] ?? "post";
$form_action = $z['form_action'] ?? "";
$hidden_var = $z['hidden_var'] ?? "zeroadmin_login_form";
$title = $z['title'] ?? "Login";
$subtitle = $z['subtitle'] ?? "Sign In to your account";
$field_username = $z['field_username'] ?? [
        "icon" => "fas fa-user",
        "name" => "username",
        "label" => "Username",
    ];
$field_password = $z['field_password'] ?? [
        "icon" => "fas fa-lock",
        "name" => "password",
        "label" => "Password",
    ];
$btn_submit = $z['btn_submit'] ?? [
        "class" => "btn btn-primary px-4",
        "text" => "Login",
    ];
$link_forgot_password = $z['link_forgot_password'] ?? [
        "link" => "",
        "text" => "Forgot password?",
    ];
$use_link_forgot_password = $z['use_link_forgot_password'] ?? true;


?>

<div class="kit-bwl-zeroadmin_login_form <?php echo htmlspecialchars($this->getCssClass()); ?>"
    <?php echo $this->getAttributesHtml(); ?>
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <form action="<?php echo htmlspecialchars($form_action); ?>"
                          method="<?php echo htmlspecialchars($form_method); ?>">
                        <div class="card-body">
                            <?php if ($title): ?>
                                <h1><?php echo $title; ?></h1>
                            <?php endif; ?>
                            <?php if ($subtitle): ?>
                                <p class="text-muted"><?php echo $subtitle; ?></p>
                            <?php endif; ?>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="<?php echo htmlspecialchars($field_username['icon']); ?>"></i>
                                </span>
                                </div>
                                <input class="form-control" type="text"
                                       name="<?php echo htmlspecialchars($field_username['name']); ?>"
                                       placeholder="<?php echo htmlspecialchars($field_username['label']); ?>">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="<?php echo htmlspecialchars($field_password['icon']); ?>"></i>
                                </span>
                                </div>
                                <input class="form-control" type="password"
                                       name="<?php echo htmlspecialchars($field_password['name']); ?>"
                                       placeholder="<?php echo htmlspecialchars($field_password['label']); ?>">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="<?php echo htmlspecialchars($btn_submit['class']); ?>">
                                        <?php echo $btn_submit['text']; ?>
                                    </button>
                                </div>

                                <?php if ($use_link_forgot_password): ?>
                                    <div class="col-6 text-right">
                                        <a href="<?php echo htmlspecialchars($link_forgot_password['link']); ?>"
                                           class="btn btn-link px-0" type="button">
                                            <?php echo $link_forgot_password['text']; ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
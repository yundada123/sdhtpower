<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Navbar;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */



Admin::navbar(function (Navbar $navbar) {
    // 切换主题
//    $navbar->right(view('admin.switch-theme', [
//        'map' => [
//            'indigo'    => Dcat\Admin\Admin::color()->indigo(),
//            'blue'      => '#5686d4',
//            'blue-dark' => '#5686d4',
//        ],
//    ]));
    $method = config('admin.layout.horizontal_menu') ? 'left' : 'right';



    // ajax请求不执行
    if (! Dcat\Admin\Support\Helper::isAjaxRequest()) {
//        $navbar->$method(App\Admin\Actions\AdminSetting::make()->render());
    }

    // 下拉菜单
    $navbar->right(view('admin.navbar-2'));

    // 搜索框
    $navbar->right(
        <<<HTML
HTML
    );

    // 下拉面板
    $navbar->right(view('admin.navbar-1'));
});

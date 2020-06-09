<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('categorie', __('カテゴリ'));
        $grid->column('sort', __('ソート'));
        $grid->column('comment', __('コメント'));
        $grid->column('created_at', __('作成日時'));
        $grid->column('updated_at', __('更新日時'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('categorie', __('カテゴリ'));
        $show->field('sort', __('ソート'));
        $show->field('comment', __('コメント'));
        $show->field('created_at', __('作成日時'));
        $show->field('updated_at', __('更新日時'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category());

        $form->text('categorie', __('カテゴリ'));
        $form->number('sort', __('ソート'));
        $form->text('comment', __('コメント'));

        return $form;
    }
}

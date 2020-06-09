<?php

namespace App\Admin\Controllers;

use App\Models\Skill;
use App\Models\Category;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SkillController extends AdminController
{
    /**
     *
     *
     * @var string
     */
    protected $title = 'Skill';

    /**
     * 一覧画面の内容
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Skill());

        $grid->column('id', __('Id'));
        $grid->column('category.categorie', __('カテゴリ'));
        $grid->column('technology', __('技術'));
        $grid->column('years', __('経験年数'));
        $grid->column('created_at', __('作成日時'));
        $grid->column('updated_at', __('更新日時'));

        return $grid;
    }

    /**
     * 詳細画面の内容
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Skill::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category.categorie', __('カテゴリ'));
        $show->field('technology', __('技術'));
        $show->field('years', __('経験年数'));
        $show->field('created_at', __('作成日時'));
        $show->field('updated_at', __('更新日時'));

        return $show;
    }

    /**
     * 新規・編集画面の内容
     *
     * @return Form
     */
    protected function form()
    {
        $categories = Category::pluck('categorie', 'id');

        $form = new Form(new Skill());

        $form->select('categorie_id', __('カテゴリ'))->options($categories);
        $form->text('technology', __('技術'));
        $form->number('years', __('経験年数'));

        return $form;
    }
}

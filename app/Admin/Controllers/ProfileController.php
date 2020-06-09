<?php

namespace App\Admin\Controllers;

use App\Models\Profile;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProfileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Profile';

    /**
     * 一覧画面の内容
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Profile());

        $grid->column('id', __('Id'));
        $grid->column('content', __('Content'));
        $grid->column('picture', __('Picture'));
        $grid->column('git_account', __('Git Account'));
        $grid->column('git_url', __('Git URL'));
        $grid->column('twitter_account', __('Twitter Account'));
        $grid->column('twitter_url', __('Twitter URL'));
        $grid->column('qiita_account', __('Qiita Account'));
        $grid->column('qiita_url', __('Qiita URL'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Profile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('content', __('Content'));
        $show->field('picture', __('Picture'));
        $show->field('git_account', __('Git Account'));
        $show->field('git_url', __('Git URL'));
        $show->field('twitter_account', __('Twitter Account'));
        $show->field('twitter_url', __('Twitter URL'));
        $show->field('qiita_account', __('Qiita Account'));
        $show->field('qiita_url', __('Qiita URL'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * 新規・編集画面の内容
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Profile());

        $form->textarea('content', __('Content'));
        $form->image('picture', __('Picture'));
        $form->text('git_account', __('Git Account'));
        $form->text('git_url', __('Git URL'));
        $form->text('twitter_account', __('Twitter Account'));
        $form->text('twitter_url', __('Twitter URL'));
        $form->text('qiita_account', __('Qiita Account'));
        $form->text('qiita_url', __('Qiita URL'));

        return $form;
    }
}

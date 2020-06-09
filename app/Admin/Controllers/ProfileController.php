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
        $grid->column('content', __('プロフィール内容'));
        $grid->column('picture', __('プロフィール画像'));
        $grid->column('git_account', __('Gitアカウント名'));
        $grid->column('git_url', __('Git URL'));
        $grid->column('twitter_account', __('Twitterアカウント名'));
        $grid->column('twitter_url', __('Twitter URL'));
        $grid->column('qiita_account', __('Qiitaアカウント名'));
        $grid->column('qiita_url', __('Qiita URL'));
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
        $show = new Show(Profile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('content', __('プロフィール内容'));
        $show->field('picture', __('プロフィール画像'));
        $show->field('git_account', __('Gitアカウント名'));
        $show->field('git_url', __('Git URL'));
        $show->field('twitter_account', __('Twitterアカウント名'));
        $show->field('twitter_url', __('Twitter URL'));
        $show->field('qiita_account', __('Qiitaアカウント名'));
        $show->field('qiita_url', __('Qiita URL'));
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
        $form = new Form(new Profile());

        $form->textarea('content', __('プロフィール内容'));
        $form->image('picture', __('プロフィール画像'));
        $form->text('git_account', __('Gitアカウント名'));
        $form->text('git_url', __('Git URL'));
        $form->text('twitter_account', __('Twitterアカウント名'));
        $form->text('twitter_url', __('Twitter URL'));
        $form->text('qiita_account', __('Qiitaアカウント名'));
        $form->text('qiita_url', __('Qiita URL'));

        return $form;
    }
}

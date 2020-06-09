<?php

namespace App\Admin\Controllers;

use App\Models\Development;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DevelopmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Development';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Development());

        $grid->column('id', __('Id'));
        $grid->column('title', __('タイトル'));
        $grid->column('reason', __('開発理由'));
        $grid->column('content', __('開発内容'));
        $grid->column('development', __('開発環境'));
        $grid->column('git_url', __('Git URL'));
        $grid->column('demo', __('デモサイト'));
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
        $show = new Show(Development::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('タイトル'));
        $show->field('reason', __('開発理由'));
        $show->field('content', __('開発内容'));
        $show->field('development', __('開発環境'));
        $show->field('git_url', __('GitU RL'));
        $show->field('demo', __('デモサイト'));
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
        $form = new Form(new Development());

        $form->text('title', __('タイトル'));
        $form->textarea('reason', __('開発理由'));
        $form->textarea('content', __('開発内容'));
        $form->textarea('development', __('開発環境'));
        $form->url('git_url', __('Git URL'));
        $form->textarea('demo', __('デモサイト'));
        $form->textarea('comment', __('コメント'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\ActualResult;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActualResultController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ActualResult';

    /**
     * 一覧画面の内容
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ActualResult());

        $grid->column('id', __('Id'));
        $grid->column('title', __('タイトル'));
        $grid->column('content', __('業務内容'));
        $grid->column('job', __('担当業務'));
        $grid->column('environment', __('開発環境'));
        $grid->column('job_from', __('開始日'));
        $grid->column('job_to', __('終了日'));
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
        $show = new Show(ActualResult::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('タイトル'));
        $show->field('content', __('業務内容'));
        $show->field('job', __('担当業務'));
        $show->field('environment', __('開発環境'));
        $show->field('job_from', __('開始日'));
        $show->field('job_to', __('終了日'));
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
        $form = new Form(new ActualResult());

        $form->text('title', __('タイトル'));
        $form->dateRange('job_from', 'job_to', '期間');
        $form->textarea('content', __('業務内容'));
        $form->textarea('job', __('担当業務'));
        $form->textarea('environment', __('開発環境'));

        return $form;
    }
}

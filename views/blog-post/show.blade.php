@php
    use Capmega\Base\Widgets\Grid\Details;
    use Capmega\Base\Widgets\Information\BreadCrumb;
@endphp
@extends('base::layouts.main')

@section('title_tab', __('blog::blog.detail_blog_post'))

@section('breadcrumb')
    <?= BreadCrumb::generate([
        'blog.index' => __('blog::blog.blog_post'),
        'Active' => __('blog::blog.detail_blog_post'),
        ]) ?>
@endsection

@section('content')
    @card({{__('blog::blog.detail_blog_post')}})
        <?= Details::generate($model, [
            'name',
            'description',
            'created_at',
            [
                'attribute' => 'created_by',
                'value' => function($model){
                    return $model->createdBy->username;
                }
            ],
            ])?>
    @endcard()
@endsection

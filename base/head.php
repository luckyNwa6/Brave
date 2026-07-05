<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <?php $this->header(); ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/base/style.css'); ?>">
    <link href="https://imgs.luckynwa.top/profile/blog/jscss/brave.css"
          rel="stylesheet">
    <link href="https://imgs.luckynwa.top/profile/blog/jscss/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script src="https://imgs.luckynwa.top/profile/blog/jscss/jquery.min.js"
            type="application/javascript"></script>
    <script src="https://imgs.luckynwa.top/profile/blog/jscss/bootstrap.bundle.min.js" type="application/javascript"></script>
    <?php $this->options->头部自定义(); ?>
</head>
<style>
    <?php $this->options->Css自定义(); ?>
</style>
<body>

<?= $this->section('head') ?>
<!-- jQuery custom content scroller -->
<link href="<?= base_url('assets/gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') ?>" rel="stylesheet"/>
<?= $this->endSection() ?>

@extends('layouts_fixed.master_sidebar', ['title' => $title])

<?= $this->section('foot') ?>
<!-- jQuery custom content scroller -->
<script src="<?= base_url('assets/gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
Tes
<?= $this->endSection() ?>
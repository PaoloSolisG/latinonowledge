<?= $this->extend('front/layout/main') ?>
<?= $this->section('content') ?>
<?php include APPPATH . 'Views/front/about.php'; ?>
<?php include APPPATH . 'Views/front/servicios.php'; ?>
<?php include APPPATH . 'Views/front/team.php'; ?>
<?php include APPPATH . 'Views/front/insights.php'; ?>
<?php include APPPATH . 'Views/front/contacto.php'; ?>
<!-- Agrega aquí más secciones si lo deseas -->

<?= $this->endSection() ?>
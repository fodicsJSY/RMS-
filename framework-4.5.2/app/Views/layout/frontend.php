<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <title>RMS 자원관리 솔루션</title>
    <!-- jQuery -->
    <script src="/plugins/js/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="/css_cs/css_cs.css">
    <link rel="stylesheet" href="/css_cs/css_common.css">
    <link rel="stylesheet" href="/css/write/communityWrite.css">
    <link rel="stylesheet" href="/css/write/writeTable.css">
    <link rel="stylesheet" href="/css/detail/communityDetail.css">
    <link rel="stylesheet" href="/css/detail/detailTable.css">
    <link rel="stylesheet" href="/css/list/communityList.css">
    <link rel="stylesheet" href="/css/list/listTable.css">
</header>
<style>

/*
.contents {
position: relative;
width: 1920px;
height: 960px;
}
*/
</style>

<body>
<!-- header -->
<?= $this->include('layout/header.php') ?>

<!-- main content -->
<?= $this->renderSection('content') ?>



<?= $this->renderSection('scripts') ?>
</body>
</html>
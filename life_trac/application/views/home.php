
<?php $this->load->view('partials/head'); ?>

<div class="main_header">
<?php $this->load->view('partials/header'); ?>
</div>

<div class="container">
    <div class="row title">

        <br/><br />
    </div>
    <div class="row home_page">
        <?php $this->load->view($mainContent); ?>

    </div>
</div>

<footer>
    <?php $this->load->view('partials/footer'); ?>
</footer>

</body>
</html>
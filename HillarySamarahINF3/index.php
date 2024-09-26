<?php include("header.php"); ?>

<div class="container mt-5">

    <?php include("listarAgendamentos.php") ?>

</div>

<?php include("footer.php"); ?>

<style>
    body {
        background-color: #e9ecef;
        font-family: 'Arial', sans-serif;
    }
    .alert {
        font-size: 1.2em;
        font-weight: bold;
    }
    .btn-success {
        background-color: #008B8B;
        border: none;
    }
    .btn-success:hover {
        background-color: #2F4F4F;
        color: white;
    }
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>

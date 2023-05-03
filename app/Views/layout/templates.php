
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>
    <title>Wira GGG</title>
</head>
<body>
    <!-- header -->
    <?php echo $this->include('layout/sidebar'); ?>

    <!-- content -->
    <?php echo $this->renderSection('content'); ?>

    <!-- footer -->
    <?php echo $this->include('layout/footer'); ?>
</body>
</html>

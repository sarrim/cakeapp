<html>

<head>
    <title><?= $this->fetch("title"); ?></title>
    <!-- CSS Links -->
    <?php echo $this->Html->css("bootstrap.min.css"); ?>
    <?php echo $this->Html->css("jquery.dataTables.min.css"); ?>
</head>

<body>

    <div class="container">
       <h3 style="text-align: center;">This is Parent Layout</h3>
       <?= $this->Flash->render() ?>
       <?= $this->fetch("content") ?>
    </div>

    <!-- JS File -->
    <?php echo $this->Html->script("jquery.min.js"); ?>
    <?php echo $this->Html->script("jquery.validate.min.js"); ?>
    <?php echo $this->Html->script("custom.js"); ?>
</body>

</html>
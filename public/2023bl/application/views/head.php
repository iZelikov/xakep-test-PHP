        <base href="/2023bl/">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css"/>

        <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
        <link rel="manifest" href="icons/site.webmanifest">
        <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <?php echo '<title>'.$title.'</title>'?>
        <!-- TO DO: Не забыть везде поменять переходы между уровнями по прямым ссылкам на нормальные -->
        <!-- И закомментированные куски кода тоже убрать не забыть! -->
        <script src="<?php if($_SESSION['godmode']=='on') print('js/godmode.js');?>"></script>
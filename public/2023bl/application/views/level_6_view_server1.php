<body class="black-bg">
    <div class="wrap">
        <div> 
            <div class="center header" style="padding-top: 10vh;">
                <p><img id="logo" style = "margin-right: auto; margin-left: auto;" src="images/lamabed.png" alt=""></p>                    
                Welcome to Bed Lama Server</div>
            <div class = "white hint">
                <!-- #TODO Не забыть поменять заводские настройки -->
                <form method="POST">
                    <table>
                        <tr>
                            <td>IP-adress:</td>
                            <td><input class="codeinput" name="ip" type="text"></td>
                        </tr>
                        <tr>
                            <td>Login:</td>
                            <td><input class="codeinput" name="login" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input class="codeinput" name="password" type="password"></td>
                        </tr>
                        <tr>
                            <td class="right"><input class="codeinput" id="inside" type="submit" value="Enter to Server"></td>
                        </tr>
                    </table>                                       
                </form>
            </div>
            <div class = "white hint center">
                <form method="POST">
                    <input class="codeinput" id="inside" type="submit" value="Лучше лоботомия!">
                    <input type="hidden" name ="code" value="back">                      
                </form>
            </div>
        </div>
    </div>
</body>
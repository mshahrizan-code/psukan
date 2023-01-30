<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
        <title></title>
        <style>
            body{
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            .card {
                background-color:cadetblue;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                width: 550px;
                margin: 0 auto;
                padding: 20px;
                border-radius: 15px;
            }
            .container {
                display: flex;
                flex-wrap: wrap;
            }
            .center {
                text-align: center;
                
            }
        </style>
    </head>

    <body>
        <?php
            if(isset($_GET['reg'])){

                header('Location: https://www.unishams.edu.my'); //BUANG BILA DAH ADA DB
            }else{
            echo '
                <div class="center">
                    <img src="gmbr/logo.png" width="10%"/>
                    <H2>PENDAFTARAN</H2>
                </div>
                <div class="card">
                    <div class="container"> 
                    <form action="daftar.php?reg=1" method="POST">
                        <table>
                            <tr>
                                <td>Nama Penuh</td>
                                <td>:</td>
                                <td>
                                    <input type="text" size="40" name="txtFName"/>
                                </td>
                            </tr>
                            <tr>
                                <td>No Staf/Matrik/MyKAD</td>
                                <td>:</td>
                                <td>
                                    <input type="text" size="20" name="txtID"/>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Telefon (WhatsApp)</td>
                                <td>:</td>
                                <td>
                                    <input type="text" size="30" name="txtNoTel"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Emel</td>
                                <td>:</td>
                                <td>
                                    <input type="text" size="30" name="txtEmel"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat/Kulliyyah/Jabatan</td>
                                <td>:</td>
                                <td>
                                    <textarea name="txtAlamat" rows="5" cols="40">

                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input type="submit" value="DAFTAR"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </div>
                ';
            }
            ?>
    </body>
</html>
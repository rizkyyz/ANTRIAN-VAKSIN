<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/stylelogin.css');?>">
</head>
<body>
    <div class="form">
        
           
            <center>
        <img src="https://assets.promediateknologi.com/crop/0x0:0x0/750x500/photo/ayosemarang/images/post/articles/2021/01/10/70036/[kartun]_vaksin_datang,_akankah_pandemi_covid-19_berakhir.jpg" alt="" height="200px" widht="200px" srcset="">
        </center>
                <center><p><h1>LOGIN SISTEM  VAKSIN</h1></p></center>
                <?php if(session()->getFlashdata('flash_msg')):?>
    <div class="alert alert-danger"><?=
         session()->getFlashdata('flash_msg') ?>
         </div>
        <?php endif;?>
   
                <form action="/pages/daftar" method="post" name="login">
                    
                    <center>
                        <input type="text" name="username" placeholder="Username" required />
                    </center>
                    <center><input type="password" name="password" placeholder="Password" required /></center>
                        <input name="submit" type="submit" value="Login" />
                </form>
               

        </div><br><br><br><br><br><br><br>
        <center>
        <footer>
            <p>&copy; Satuan Tugas Penanganan COVID-19 - © Copyright 2021. All Rights Reserved.</p>
        </footer></center>
    </body>
</html>



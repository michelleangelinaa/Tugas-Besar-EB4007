<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting Login and Registration Form to Database-----SeekCoding</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Website Puskesmas</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button></li>
                </ul>
            </nav>
        </div>
        
        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='emailid' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="password", required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                        <center><h1 class="main-heading">Register Form</h1></center>
				        <input type="text" name='nama_lengkap'placeholder="Nama Lengkap" required/>
				        <input type="number" name='nik'placeholder="NIK" required/>
                        <input type="date" name='tanggal_lahir'placeholder="Tanggal Lahir" required/>
                        <input type="number" name='usia'placeholder="Usia" required/>
                        <input type="text" name='tempat_tinggal'placeholder="Tempat Tinggal" required/>
                        <select name='bpjs' required>
                            <option value="" disabled selected hidden>BPJS</option>
	                        <option value="Ya">Ya</option>
	                        <option value="Tidak">Tidak</option> 
                            </select>
                        <select name='jenis_kelamin' required>
                            <option value="" disabled selected hidden>Jenis Kelamin</option>
	                        <option value="Pria">Pria</option>
	                        <option value="Wanita">Wanita</option> 
                            </select>
                        <select name='golongan_darah' required>
                            <option value="" disabled selected hidden>Golongan Darah</option>
	                        <option value="A">A</option>
	                        <option value="AB">AB</option> 
                            <option value="B">B</option> 
                            <option value="O">O</option> 
                            </select>
                        <input type="text" name='pekerjaan'placeholder="Pekerjaan" required/>
                        <input type="number" name='nomor_telepon'placeholder="Nomor Telepon" required/>
                        <input type="text" name='email'placeholder="Email" required/>
                        <input type="text" name='username'placeholder="Username" required/>
                        <input type="password" name='password'placeholder="Password" required/>
				        <button>REGISTER</button>
                    </form>
                </div>
            </div>
        </div>

        <section class="banner">
		<h2>WELCOME TO MY WEBSITE</h2>
	    </section>

        	<!-- about -->
        <section class="about">
            <div class="container">
                <h3>ABOUT</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</strong> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </section>

        <!-- footer -->
        <footer>
            <div class="container">
                <small> Copyright &copy; 2021 - Muhammad Nury, All Rights Reserved.</small>
            </div>
        </footer>

    </div>
</body>
</html>
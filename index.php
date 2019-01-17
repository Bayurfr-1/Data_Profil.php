<!DOCTYPE html>
<?php
include "show-data.php";
?>
<html>
<head>
    
    <title>Profile Page</title>
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
    <nav>
        <div class="menu-mobile">
            <a href="#" onclick="showMenu()">Menu</a>

        </div>
        <ul id="menu">
              <li><a href="beranda.html">Beranda</a></li>  
              <li><a href="product.html">Product</a></li>
              <li><a href="berita.html">Berita</a></li>
              <li><a href="pengaturan.html">Pengaturan</a></li>
              <li><a href="data admin.html">Data Admin</a></li>        
               
        </ul>
    </nav>
    <section id="box-profile">
        <div class="img-profile">
           <div class="photo" style="background-image:url(Assets/img/Foto.jpg)"></div>
          
        </div>
        <div class="description">
        <h1 id="pName"><?php echo $nama; ?></h1>
        <p id="pRole"><?php echo $role; ?></p>
        <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
        <a href="#"class="button border-blue">Resume</a>
       
    </div>

    <div class="information">

        <div class="data">
        <p class="field">Availaibility</p>
        <p id="pAvailability" class="text-gray"><?php echo $availability;?></p>
        </div>
        <div class="data">
            <p class="field">Age</p>
            <p id="pAge" class="text-gray"><?php echo $age; ?></p>
        </div>
        <div class="data">
        <p class="field">Location</p>
            <p id="pLocation" class="text-gray"><?php echo $location;?></p>
            </div>
            <div class="data">
            <p class="field">Years Experience</p>
                <p id="pExperience" class="text-gray"><?php echo $experience;?></p>
                </div>
                <div class="data">
                        <p class="field">Email</p>
                        <p id="pEmail" class="text-gray"><?php echo $email;?></p>
                    </div>
                    
    </div>
    </section>
    <section id="input-form">
        <form method="#" action="#">
        <div class="form">
        <label>Nama</label>
        <input id="inpNama" type="text" name="Nama">
    </div>

    <div class="form">
            <label>Role</label>
            <input id="inpRole" type="text" name="Role">
        </div>

        <div class="form">
                <label>Location</label>
                <input id="inpLocation" type="tetx" name="Location">
            </div>
            
    <div class="form">
            <label>Years Experience</label>
            <input id="inpExperience" type="number" name="Experience">
        </div>
         
                    <div class="form">
                            <label>Email</label>
                            <input id="inpEmail" type="email" name="Email">
                        </div>
                        <div class="form">
                            <input onclick="simpanForm()" type="submit" name="Submit" value="SUBMIT" class="bg-blue">
                        </div>
                    </form>
    </section>
    <script>
        var formMenu = document.getElementById("input-form");
        formMenu.style.display = "none";

        function editForm(){
            if(formMenu.style.display === "none"){
                formMenu.style.display = "block";
            }else{
                formMenu.style.display = "none";
            }
            var name = document.getElementById("pName").innerHTML;
            var Role = document.getElementById("pRole").innerHTML;
            var Location = document.getElementById("pLocation").innerHTML;
            var Availability = document.getElementById("pAvailability").innerHTML;
            var Age = document.getElementById("pAge").innerHTML;
            var Years Experience = document.getElementById("pExperience").innerHTML;
            var Email = document.getElementById("pEmail").innerHTML;


           document.getElementById("inpNama").value = name ;
           document.getElementById("inpRole").value = Role;
           document.getElementById("inpLocation").value = Location;
           document.getElementById("inpAge").value=Age;
           document.getElementById("inpExperience").value=Experience;
           document.getElementById("inpEmail").value=Email;

        }

        
    function showMenu(){
        var menu = document.getElementById("menu");
        var box = document.getElementById("box-profile");

        if(menu.style.display === "block"){
            menu.style.display ="none";
            box.style.paddingTop="0px";
        }else{
            menu.style.display="block";
            box.style.paddingTop="125px";
        }
    }
    </script>
    </body>
    </html>
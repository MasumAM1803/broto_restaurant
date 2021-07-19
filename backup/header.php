<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .menu_icon {
            width: 35px;
            height: 5px;
            background-color: #fff;
            margin: 6px 0;
        }
        .size_menu_icon {
            font-size: 2px;
        }
    </style>
</head>
<div class="topnav">
    <div class="left-side">
        <a href="../manager/main.php">
            <img class="brand-logo" src="../assets/img/logo_yourinks_ecommerce.png" alt="LOGO">
        </a>
        <a href="#" class="size_menu_icon">
            <div class="menu_icon"></div>
            <div class="menu_icon"></div>
            <div class="menu_icon"></div>
        </a>
    </div>
    <div class="right-side">
        <div class="dropdown">
            <button class="dropbtn" onclick="dropdownFunction()">
                <img class="img-avatar" src="../assets/img/admin_masum.jpg" alt="profile">
            </button>
            <div id="dropdown" class="dropdown-content">
                <a href="#">Logout</a>
            </div>
        </div>
    </div>
</div>

<script>
    function dropdownFunction() {
        document.getElementById("dropdown").classList.toggle("show");
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementByClassName("dropdown-content");
                var i;
                for (i=0; i<dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.containts('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    }
</script>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
</head>

<body>
    <div class="app">
   

        <div class="main">
            
         
            <div class="main-content">
                <div class="card card-2 card-img">
                    
                    <?php 
                    $project = [
                        "name" => "Bayart",
                        "tech" => ["angular", "tailwindcss", "nodejs", "mongodb"],
                        "description" => "Réseau social d'artistes, musée 3d, gestion rdv, gestion client etc...",
                        "link" => "https://bayart-c7913.web.app/dashboard",
                        "creation" => "2023",
                        "logo" => "img/projects/bayart/logo.png",
                        "image1" => "img/projects/bayart/image1.png",
                        "image2" => "img/projects/bayart/image2.png",
                        "image3" => "img/projects/bayart/image3.png",
                        "image4" => "img/projects/bayart/image4.png"
                    ];

                    require "gallery.php" ?>
                </div>
                <div class="card card-3 card-img">
                <?php 
                    $project = [
                        "name" => "LensOCR",
                        "tech" => ["flask", "OpenCV-Python", "Pytesseract", "PostgreSQL"],
                        "description" => "Scanne et organise les tickets de caisse",
                        "link" => "#",
                        "creation" => "2024",
                        "logo" => "img/projects/lensocr/logo.png",
                        "image1" => "img/projects/lensocr/image2.png",
                        "image2" => "img/projects/lensocr/image3.png",
                        "image3" => "img/projects/lensocr/image1.png",
                        "image4" => "img/projects/lensocr/image4.png"
                    ];

                    require "gallery.php" ?>
                </div>
                <div class="card card-img card-1 card-main">
                <?php 
                    $project = [
                        "name" => "USC",
                        "tech" => ["ionic", "capacitor", "react", "androidstudio"],
                        "description" => "Urban Safety Compass : Application mobile qui évalue la sécurité en temps réel via la géolocalisation et des données démographiques. (lat. et long.)",
                        "link" => "#",
                        "creation" => "2024",
                        "logo" => "img/projects/usc/logo.png",
                        "image1" => "img/projects/usc/image3.png",
                        "image2" => "img/projects/usc/image2.png",
                        "image3" => "img/projects/usc/image1.png",
                        "image4" => "img/projects/usc/image4.png"
                    ];

                    require "gallery.php" ?>
                </div>
                <div class="card card-4 card-img"></div>
                <div class="card card-img card-5"></div>
                <div class="card card-6 card-img"></div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>


<script>
    const menuItems = document.querySelectorAll(".sidebar-menu__link");

const navItems = document.querySelectorAll(".nav-item");

menuItems.forEach((menuItem) => {
  menuItem.addEventListener("click", (e) => {
    if (!e.target.classList.contains("active")) {
      document
        .querySelector(".sidebar-menu__link.active")
        .classList.remove("active");
      e.target.classList.add("active");
    }
  });
});

navItems.forEach((navItem) => {
  navItem.addEventListener("click", (e) => {
    if (!e.target.classList.contains("active")) {
      document.querySelector(".nav-item.active").classList.remove("active");
      e.target.classList.add("active");
    }
  });
});

const cards = document.querySelectorAll(".card");
const mainContent = document.querySelector(".main-content");

cards.forEach((card) => {
  card.addEventListener("click", () => {
    console.log("");
    document.startViewTransition(() => {
      if (!card.classList.contains('active')) {
        mainContent.classList.add("expanded");
        card.classList.add("active");
      } else {
        card.classList.remove("active");
        mainContent.classList.remove("expanded");
      }
    });
  });
});

</script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
* {
  outline: none;
  box-sizing: border-box;
}




@media (max-width: 480px) {
  body {
    padding: 0.5em;
  }
}

.app {
  background-color: var(--theme-bg-color);
  width: 100%;
  max-width: 1200px;
  height: 92vh;
  max-height: 900px;
  border-radius: 20px;
  overflow: hidden;
  display: flex;
  position: relative;
}

.sidebar {
  flex-basis: 284px;
  display: flex;
  flex-direction: column;
  height: 100%;
  flex-shrink: 0;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 50px;
}
@media (max-width: 480px) {
  .sidebar {
    display: none;
  }
}
.sidebar-menu {
  display: inline-flex;
  flex-direction: column;
  padding-top: 64px;
}
.sidebar-menu__link {
  color: var(--theme-inactive-color);
  text-decoration: none;
  font-size: 20px;
  font-weight: 500;
  transition: 0.3s;
}
.sidebar-menu__link + .sidebar-menu__link {
  margin-top: 24px;
}
.sidebar-menu__link:hover, .sidebar-menu__link.active {
  color: var(--theme-color);
}

.user {
  display: flex;
  flex-direction: column;
  padding-bottom: 64px;
  border-bottom: 1px solid var(--border-color);
}
.user-photo {
  width: 54px;
  height: 54px;
  border-radius: 10px;
  object-fit: cover;
  flex-shrink: 0;
  margin-bottom: 20px;
}
.user-mail {
  margin-top: 6px;
  color: var(--theme-inactive-color);
  font-size: 14px;
}

.toggle {
  position: relative;
  display: inline-block;
  width: 56px;
  height: 24px;
  margin-top: auto;
}

input[type=checkbox] {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #4649bd;
  transition: 0.3s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 6px;
  bottom: 4px;
  background-color: #fff;
  transition: 0.4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #489f8c;
}

input:checked + .slider:before {
  transform: translateX(28px);
}

.main {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  padding: 50px 50px 50px 20px;
}
@media (max-width: 480px) {
  .main {
    padding: 40px 20px;
  }
}
.main-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}
.main-header__title {
  font-size: 28px;
  font-weight: 600;
  margin-right: 24px;
}
.main-header__avatars {
  flex-shrink: 0;
  display: flex;
  align-items: center;
}
@media (max-width: 480px) {
  .main-header__avatars {
    display: none;
  }
}
.main-header__avatars .main-header__avatar {
  width: 36px;
  height: 36px;
  object-fit: cover;
  flex-shrink: 0;
  border-radius: 50%;
  border: 2px solid var(--theme-bg-color);
}
.main-header__avatars .main-header__avatar + .main-header__avatar {
  margin-left: -5px;
}
.main-header__avatars .add-button {
  background-color: transparent;
  border: 0;
  padding: 0;
  color: #d8d8d8;
  margin-left: 6px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}
.main-header__avatars .add-button svg {
  width: 28px;
  height: 28px;
  flex-shrink: 0;
}
.main-header__add {
  background-color: #ea4e34;
  border: none;
  color: #fff;
  padding: 4px;
  width: 36px;
  height: 36px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  margin-left: auto;
  cursor: pointer;
  transition: 0.3s;
}
.main-header__add:hover {
  background-color: #e4361a;
}
.main-header__add svg {
  width: 20px;
  height: 20px;
}
.main-header-nav {
  display: flex;
  align-items: center;
  font-size: 15px;
  padding: 20px 0;
}
.main-header-nav .nav-item {
  color: var(--theme-inactive-color);
  text-decoration: none;
  padding-bottom: 6px;
  transition: 0.3s;
  border-bottom: 1px solid transparent;
}
.main-header-nav .nav-item:hover {
  color: #fff;
}
.main-header-nav .nav-item.active {
  border-bottom: 1px solid #fff;
  color: #fff;
}
.main-header-nav * + * {
  margin-left: 24px;
}

.main-content {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
@media (max-width: 480px) {
  .main-content {
    gap: 10px;
  }
}

.card {
  border-radius: 20px;
  overflow: hidden;
  max-width: 100%;
  contain: layout;
  position: relative;
  z-index: 1;
  cursor: pointer;
  width: auto;
  aspect-ratio: 1/1;
}
@media (max-width: 480px) {
  .card {
    aspect-ratio: 1/1.4;
  }
}
.card.clicked {
  position: absolute;
  width: 500px;
  height: 600px;
  z-index: 2;
}
.card.card-1 {
  background-image: url("https://images.unsplash.com/photo-1567653418876-5bb0e566e1c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1664&q=80");
  view-transition-name: c1;
}
.card.card-2 {
  view-transition-name: c2;
  background-image: url("https://images.unsplash.com/photo-1575500221017-ea5e7b7d0e34?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1635&q=80");
}
.card.card-3 {
  view-transition-name: c3;
  background-image: url("https://images.unsplash.com/photo-1506619216599-9d16d0903dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80");
}
.card.card-4 {
  background-color: #e3dfec;
  view-transition-name: c4;
  background-image: url("https://images.unsplash.com/photo-1684483871267-739be928cb0e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=400&q=60");
}
.card.card-5 {
  background-image: url("https://images.unsplash.com/photo-1559181567-c3190ca9959b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1664&q=80");
  view-transition-name: c5;
}
.card.card-6 {
  background-color: #f8d7cd;
  view-transition-name: c6;
  background-image: url("https://images.unsplash.com/photo-1586788224331-947f68671cf1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80");
}

.card-img {
  object-fit: cover;
  background-size: cover;
  background-position: center;
}

.card-main {
  view-transition-name: card1;
}

.card.active {
  grid-column: 1;
  grid-column-end: 3;
  grid-row: 1;
  grid-row-end: 6;
  z-index: 999;
  aspect-ratio: 1/1;
}
@media (max-width: 480px) {
  .card.active {
    grid-column-end: 4;
    aspect-ratio: 2/1;
  }
}

.main-content.expanded .card:not(.active) {
  opacity: 0.4;
  pointer-events: none;
  aspect-ratio: 3/1;
  grid-column-start: 3;
}
@media (max-width: 480px) {
  .main-content.expanded .card:not(.active) {
    aspect-ratio: 1;
    grid-column-start: auto;
  }
}

/*# sourceMappingURL=styles.css.map */

</style>
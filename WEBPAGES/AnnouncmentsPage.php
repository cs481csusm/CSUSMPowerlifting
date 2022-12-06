<?php
use LDAP\Result;

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="StylesForWebpages.css" />
  <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="WorkoutsPagesStyles.css">

</head>

<body>

  <?php if (isset($_SESSION["user_id"])): ?>

  <section class="layout">
    <div id="header-wrapper" class="col-lg-12">
      <h1>Announcements</h1>
    </div>
    <div id="sidebar-wrapper" class="col-lg-3">
      <div class="sidenav">
        <!-- <a class="active" href="#home">Workouts</a> -->
        <a href="AnnouncmentsPage.php">Home</a>
        <a href="EditProfilePage.html">Profile</a>
        <a href="CurrentMaxesPage.html">Maxes</a>
        <button class="dropdown-btn">Workouts
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown">
          <a href="BuildingBlockOnePage.html">Week 1</a>
          <a href="BuildingBlockTwoPage.html">Week 2</a>
          <a href="ExceedBlockPage.html">Week 3</a>
          <a href="RecoveryBlockPage.html">Week 4</a>
        </div>
      </div>
    </div>
  </section>
  <div class="calendar-wrapper" style="float: left;">
    <label class="Calender col-lg-11">
      <h2>Friday, November 4th 2022:</h2>
    </label>
    <textarea name="" id="" cols="100"
      rows="50;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque vitae. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Justo laoreet sit amet cursus sit. Non tellus orci ac auctor augue mauris. Senectus et netus et malesuada fames ac. Felis eget velit aliquet sagittis id consectetur purus. Sed libero enim sed faucibus turpis in eu mi. Velit aliquet sagittis id consectetur purus. Sed libero enim sed faucibus turpis in eu. Sed ullamcorper morbi tincidunt ornare massa eget egestas. Sagittis eu volutpat odio facilisis mauris sit. Ultrices dui sapien eget mi proin. Purus viverra accumsan in nisl nisi scelerisque eu. Blandit libero volutpat sed cras ornare arcu dui. Gravida rutrum quisque non tellus orci ac auctor augue. Elit ullamcorper dignissim cras tincidunt. Sit amet consectetur adipiscing elit pellentesque habitant. Tortor consequat id porta nibh venenatis.

              Nam libero justo laoreet sit amet cursus sit amet dictum. Nec sagittis aliquam malesuada bibendum arcu vitae. Mi in nulla posuere sollicitudin. Netus et malesuada fames ac turpis. Ipsum consequat nisl vel pretium lectus quam id leo in. Et ligula ullamcorper malesuada proin libero nunc consequat interdum. Sed vulputate odio ut enim blandit volutpat maecenas volutpat blandit. Nibh nisl condimentum id venenatis a condimentum vitae sapien. Amet consectetur adipiscing elit ut aliquam. Duis at tellus at urna condimentum. Semper risus in hendrerit gravida. Sem viverra aliquet eget sit amet tellus. Tempor id eu nisl nunc. Pulvinar etiam non quam lacus suspendisse faucibus. At in tellus integer feugiat scelerisque varius morbi enim nunc.
              
              Viverra vitae congue eu consequat ac felis donec. In hac habitasse platea dictumst. Vitae nunc sed velit dignissim sodales ut eu. Posuere morbi leo urna molestie at elementum eu facilisis. Justo laoreet sit amet cursus sit. Nunc consequat interdum varius sit amet mattis vulputate. Pulvinar etiam non quam lacus suspendisse faucibus. In ante metus dictum at tempor commodo ullamcorper a lacus. Mauris in aliquam sem fringilla. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Praesent semper feugiat nibh sed pulvinar proin. Nunc lobortis mattis aliquam faucibus.
              
              Commodo odio aenean sed adipiscing diam donec adipiscing. Nulla facilisi etiam dignissim diam quis enim. Nam aliquam sem et tortor consequat id porta nibh venenatis. Ac tincidunt vitae semper quis lectus nulla. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Enim neque volutpat ac tincidunt vitae semper. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor. In nisl nisi scelerisque eu ultrices vitae auctor. Id cursus metus aliquam eleifend mi in. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Ac auctor augue mauris augue neque gravida in fermentum. Facilisi etiam dignissim diam quis. Sem nulla pharetra diam sit amet. Maecenas pharetra convallis posuere morbi. Libero id faucibus nisl tincidunt eget. Donec enim diam vulputate ut pharetra sit amet.
              
              Dignissim sodales ut eu sem. Magna sit amet purus gravida. Turpis egestas maecenas pharetra convallis posuere morbi leo urna molestie. Massa ultricies mi quis hendrerit. Non curabitur gravida arcu ac tortor dignissim convallis aenean et. Pulvinar elementum integer enim neque volutpat. Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Laoreet sit amet cursus sit. Eros donec ac odio tempor. Nam aliquam sem et tortor consequat id porta. Molestie a iaculis at erat pellentesque adipiscing. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Diam maecenas sed enim ut sem viverra. Rhoncus dolor purus non enim praesent elementum facilisis. Id diam maecenas ultricies mi eget mauris. Integer enim neque volutpat ac tincidunt vitae.
              
              Pellentesque id nibh tortor id aliquet lectus proin. Libero justo laoreet sit amet. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Turpis egestas sed tempus urna et pharetra pharetra massa. Lorem mollis aliquam ut porttitor leo a diam. Congue quisque egestas diam in arcu cursus euismod quis. Ullamcorper eget nulla facilisi etiam dignissim. Ornare massa eget egestas purus viverra. Nunc sed velit dignissim sodales ut eu sem integer. Accumsan lacus vel facilisis volutpat. Pellentesque eu tincidunt tortor aliquam nulla. Elit at imperdiet dui accumsan sit amet nulla facilisi morbi. Arcu felis bibendum ut tristique et egestas quis. Nisi est sit amet facilisis magna etiam tempor orci eu. Turpis massa sed elementum tempus egestas.
              
              Non nisi est sit amet facilisis magna etiam. Tempor commodo ullamcorper a lacus vestibulum sed arcu non odio. Odio ut sem nulla pharetra diam sit amet. Nisl purus in mollis nunc sed. Morbi blandit cursus risus at ultrices mi tempus. Fermentum odio eu feugiat pretium nibh ipsum consequat nisl vel. Tellus cras adipiscing enim eu turpis. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Euismod elementum nisi quis eleifend quam adipiscing vitae. Quisque sagittis purus sit amet volutpat consequat. Pulvinar etiam non quam lacus. Eget est lorem ipsum dolor. Consequat nisl vel pretium lectus quam id leo in. Faucibus nisl tincidunt eget nullam non nisi est sit. Enim eu turpis egestas pretium aenean pharetra magna. Sed risus pretium quam vulputate. Viverra justo nec ultrices dui sapien eget mi proin. Leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Sit amet nulla facilisi morbi tempus iaculis. Scelerisque in dictum non consectetur a.
              
              Quis lectus nulla at volutpat diam ut venenatis tellus in. Pharetra vel turpis nunc eget lorem. Purus non enim praesent elementum facilisis leo vel. Ut etiam sit amet nisl purus in mollis nunc sed. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Urna nec tincidunt praesent semper feugiat nibh sed pulvinar. Ut lectus arcu bibendum at varius vel pharetra. Pharetra sit amet aliquam id. Donec enim diam vulputate ut pharetra sit. Nunc mi ipsum faucibus vitae. Ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a. In fermentum posuere urna nec tincidunt.</textarea>
  </div>
  <div class="officers-wrapper">
    <h2>Club Officers:</h2>

    <img
      src="https://thumbs.dreamstime.com/b/profile-pic-icon-isolated-white-background-your-web-mobile-app-design-133862807.jpg"
      alt="empty Profile Picture" class="picture">
    <p>Officer: 1 Name</p>
    <p>Email:</p>
    <p>Phone Number:</p>

    <img
      src="https://thumbs.dreamstime.com/b/profile-pic-icon-isolated-white-background-your-web-mobile-app-design-133862807.jpg"
      alt="empty Profile Picture" class="picture">
    <p>Officer: 2 Name</p>
    <p>Email:</p>
    <p>Phone Number:</p>

    <img
      src="https://thumbs.dreamstime.com/b/profile-pic-icon-isolated-white-background-your-web-mobile-app-design-133862807.jpg"
      alt="empty Profile Picture" class="picture">
    <p>Officer: 3 Name</p>
    <p>Email:</p>
    <p>Phone Number:</p>
    <img
      src="https://thumbs.dreamstime.com/b/profile-pic-icon-isolated-white-background-your-web-mobile-app-design-133862807.jpg"
      alt="empty Profile Picture" class="picture">
    <p>Officer: 4 Name</p>
    <p>Email:</p>
    <p>Phone Number:</p> <br>

    <p><a href="Logout.php">Log out</a></p>

  </div>


  <script>//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }</script>

  <?php else: ?>
  <p><a href="LoginPage.php">Log in</a> or <a href="SignUpPage.php">sign up</a></p>

  <?php endif; ?>
</body>

</html>
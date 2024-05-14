<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.image-container');
    const contentContainers = document.querySelectorAll('.content-container');
    const mediaScreenWidth = 400; // Define the width for mediascreen
    let translationWidth; // Declare translationWidth variable

    function showSlide(index) {
        const screenWidth = window.innerWidth; // Get the current screen width
        if (screenWidth <= mediaScreenWidth) {
            translationWidth = 340; // Adjust width for smaller screens
        } else {
            translationWidth = 800; // Default width
        }
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(-${index * translationWidth}px)`;
        });
        // Change background of content-container with gradient
        contentContainers.forEach(container => {
            container.style.background = `linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('${slides[index].querySelector('img').src}')`;
            container.style.backgroundSize = 'cover';
            container.style.backgroundPosition = 'center';
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    setInterval(nextSlide, 3000);
</script>
  <!-- logout script -->
  <script>
      function confirmLogout() {
        if (confirm("Are you sure you want to log out?")) {
          window.location.href = "includes/logout.inc.php";
        }
      }
  </script>
  
  <!-- Open Log-in, Signup Form -->
   <script type="text/javascript" charset="utf-8">
      function openLoginForm() {
          document.getElementById("overlay").style.display = "block";
          document.getElementById("loginForm").style.display = "block";
      }
      
      function closeLoginForm() {
          document.getElementById("overlay").style.display = "none";
          document.getElementById("loginForm").style.display = "none";
      }
      
      function openSignupForm() {
          document.getElementById("overlay").style.display = "block";
          document.getElementById("signupForm").style.display = "block";
      }
      
      function closeSignupForm() {
          document.getElementById("overlay").style.display = "none";
          document.getElementById("signupForm").style.display = "none";
      }
  
      
      function logout() {
          alert("Logged out successfully!");
          // Add your logout logic here
      }
    </script>
    <!-- navbar menu-toggle acript -->
    <script type="text/javascript" charset="utf-8">
      document.getElementById("menu1-toggle").addEventListener("change", function() {
          var menuList = document.querySelector(".menu1-list");
          if (this.checked) {
              menuList.classList.add("show");
          } else {
              menuList.classList.remove("show");
          }
      });
    </script>
        <script type="text/javascript" charset="utf-8">
        // Function to handle checkbox change event
        function handleCheckboxChange(checkboxId, listClass) {
            var checkbox = document.getElementById(checkboxId);
            var menuList = document.querySelector("." + listClass);
            
            // If the checkbox is checked
            if (checkbox.checked) {
                // Add 'show' class to the corresponding menu list
                menuList.classList.add("show");
                // Uncheck the other checkbox
                var otherCheckboxId = (checkboxId === "menu-toggle") ? "not-toggle" : "menu-toggle";
                document.getElementById(otherCheckboxId).checked = false;
                // Remove 'show' class from the other menu list
                var otherListClass = (listClass === "menu-list") ? "not-list" : "menu-list";
                document.querySelector("." + otherListClass).classList.remove("show");
            } else {
                // If the checkbox is unchecked, remove 'show' class from the menu list
                menuList.classList.remove("show");
            }
        }

        // Add event listeners to checkboxes
        document.getElementById("menu-toggle").addEventListener("change", function() {
            handleCheckboxChange("menu-toggle", "menu-list");
        });

        document.getElementById("not-toggle").addEventListener("change", function() {
            handleCheckboxChange("not-toggle", "not-list");
        });
    </script>
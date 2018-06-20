<!DOCTYPE html>
<html>
<head>
  <title>Sam's RPG Settings</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include dirname(__DIR__).'/common/links.html'; ?>
</head>

<body style="background-color:#FFD7C5">
  <?php include  dirname(__DIR__).'/common/navbar.html'; ?>

  <h1 class="text">The Gods</h1>
  <p class="text">
      Long ago the world was created by the eight gods and goddesses of the 
      Circle. They were bored by the static dealings of Good and Evil, and 
      sought to entertain themselves with the creatures they created, to whom 
      they granted free will and uncertainty of purpose.
  </p>
  <p class="text">
      In the ages that followed the free willed races who name their kin, 
      collectively called the Namers, fought many long and terrible wars on the 
      behalf of their deities. Their zealotry was unquenchable, and the Circle 
      knew that for their creation to survive their influence must be dimmed. 
      They cast themselves into a deep sleep, that they could still watch over 
      the world in their dreams, but their terrible wills would not permeate 
      the Namers so. Thus began the Age of Slumber.
  </p>

  <button class="accordion">Akanpra, Goddess of Enlightenment</button>
  <div class="panel">
      <p><b>Knowledge</b> (Light)</p>
    <p>The creator of the elves and saint of lorekeepers and historians.</p>
  </div>
  <button class="accordion"><img src="dolune.png" alt="Dolune Symbol">
    Dolune, Mother of All</button>
  <div class="panel">
    <p><b>Life</b> (Nature)</p>
    <p>Watches over all the Namers with love and compassion. It is said she 
      convinced Gruumsh to lay down arms and join the other seven in sleep,
      averting the God War and the end of days.
    </p>
  </div>
  <button class="accordion"><img src="gruumsh.png" alt="Gruumsh Symbol">
    Gruumsh the Warmonger</button>
  <div class="panel">
    <p><b>War</b> (Death)</p>
    <p>Sire of the brutal orcs and despiser of the weak, the Warmonger's 
      evil is so strong that it permeates his creations even to this day.</p>
  </div>
  <button class="accordion"><img src="zemne.png" alt="Zemne Symbol">
    Lightlord Zemne</button>
  <div class="panel">
    <p><b>Light</b> (Tempest)</p>
    <p>Zemne created humans and champions the supremacy of justice.</p>
  </div>
  <button class="accordion">Nanolomon the Storyteller</button>
  <div class="panel">
    <p><b>Trickery</b> (Knowledge)</p>
    <p>Patron of halflings and beloved trickster.</p>
  </div>
  <button class="accordion"><img src="maheet.png" alt="Ot Maheet Symbol">
    Ot Maheet of the One Wood</button>
  <div class="panel">
    <p><b>Nature</b> (Trickery)</p>
    <p>Creator of the gnomes and progenitor of the woods and wilds of the land.</p>
  </div>
  <button class="accordion">Sardak the Devourer</button>
  <div class="panel">
    <p><b>Death</b> (Life)</p>
    <p>Both the humble earthworm who returns spent bodies to the earth and
      foul serpent who drags cursed souls to their hideous eternities, Sardak
      created the dragons. In their endless avarice the dragons created Namers 
      of their own to forge their riches. Enraged by the dragons' arrogance, 
      Sardak cursed the dragons, took their Making, and freed the dwarves from
      their slavery.</p>
  </div>
  <button class="accordion">Storm Queen Mor-Lu</button>
  <div class="panel">
    <p><b>Tempest</b> (War)</p>
    <p>Mor-Lu is the goddess of storm and sea and stony peak. It is said that 
      she hewed the giants from mountain-stone with bolts of lightning.
    </p>
  </div>





  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
          /* Toggle between adding and removing the "active" class,
          to highlight the button that controls the panel */
          this.classList.toggle("active");

          /* Toggle between hiding and showing the active panel */
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
          } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
          }
      });
    }
  </script>
</body>

</html> 
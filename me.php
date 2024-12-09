<script>
  let isTab1 = true;

  function switchTab(tab) {
    isTab1 = tab;

    // Sélectionner les deux onglets
    const tab1 = document.querySelector('.tab1');
    const tab2 = document.querySelector('.tab2');

    // Correction : `ducment` remplacé par `document`
    const tab1Content = document.querySelector('.tab1Content');
    const tab2Content = document.querySelector('.tab2Content');

    // Mettre à jour les styles en fonction de `isTab1`
    if (isTab1) {
      tab1.style.background = 'rgba(30, 30, 30, 0.69)';
      tab2.style.background = 'rgba(37, 37, 38, 0.69)';
      tab1Content.style.display = 'flex';
      tab2Content.style.display = 'none';
    } else {
      tab1.style.background = 'rgba(37, 37, 38, 0.69)';
      tab2.style.background = 'rgba(30, 30, 30, 0.69)';
      tab2Content.style.display = 'flex';
      tab1Content.style.display = 'none';
    }
  }

  // Appliquer les styles de survol
  function applyHoverEffect(tab) {
    tab.addEventListener('mouseenter', () => {
      tab.style.background = '#2B282F';
    });

    tab.addEventListener('mouseleave', () => {
      // Restaurer le fond en fonction de l'onglet actif
      if ((isTab1 && tab.id === 'tab1') || (!isTab1 && tab.id === 'tab2')) {
        tab.style.background = 'rgba(30, 30, 30, 0.69)';
      } else {
        tab.style.background = 'rgba(37, 37, 38, 0.69)';
      }
    });
  }

  // Appliquer l'effet aux deux onglets
  document.addEventListener('DOMContentLoaded', () => {
    const tab1 = document.getElementById('tab1');
    const tab2 = document.getElementById('tab2');

    applyHoverEffect(tab1);
    applyHoverEffect(tab2);
  });
</script>







<div class="w-screen md:w-[70vw] mx-auto editor flex flex-col fira-code">
  <div class="w-full flex h-20 rounded-t-[30px]">

    <div style="background: rgba(30, 30, 30, 0.69)" onclick="switchTab(true)"
      class="tab1 cursor-pointer px-6 rounded-tl-[30px] h-full flex items-center gap-2 justify-center">
      aboutme.json

      <button class="p-1 hover:bg-[#313232] rounded flex items-center justify-center">
        <svg class="w-4 h-4 fill-[#BEBFBF]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">

          <path
            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
          </path>

        </svg>
      </button>
    </div>

    <!-- preview button -->
    <div style="background: rgba(37, 37, 38, 0.69);" onclick="switchTab(false)"
      class="!important tab2 cursor-pointer text-[#BEBFBF] px-6 h-full flex items-center gap-2 justify-center">
      <button class="p-1 hover:bg-[#313232] rounded flex items-center justify-center">


        <svg class="w-4 h-4 fill-[#BEBFBF]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

          <path
            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z">
          </path>

        </svg>
      </button>

      Preview


    </div>

    <div class="h-full w-full bg-blue-200" style="background: rgba(37, 37, 38, 0.69);">

    </div>

  </div>

  <div class="tab1Content max-md:text-xs flex p-2 rounded-b-[30px] w-full overflow-y-scroll max-h-[500px]"
    style="background: rgba(30, 30, 30, 0.69); ">
    <div class="linesNumbers w-12 text-right pr-2">
      <?php
      $jsonLines = 43;
      for ($i = 1; $i <= $jsonLines; $i++) {
        echo "<p>$i</p>";
      }
      ?>
    </div>

    <div class="w-full text-white pl-6">

      {
      &nbsp;&nbsp;<span style="color: #9DE0FF">"lastname"</span>: <span style="color: #CE9075">"Bouamrioune"</span>,<br>
      &nbsp;&nbsp;<span style="color: #9DE0FF">"firstname"</span>: <span style="color: #CE9075">"Adil"</span>,<br>
      &nbsp;&nbsp;<span style="color: #9DE0FF">"birth_year"</span>: <span style="color: #CE9075">"2006"</span>,<br>
      &nbsp;&nbsp;<span style="color: #9DE0FF">"birth_place"</span>: <span style="color: #CE9075">"Lausanne,
        Suisse"</span>,<br>
      &nbsp;&nbsp;<span style="color: #9DE0FF">"skills_link"</span>: <span style="color: #CE9075">"#"</span>,<br>
      &nbsp;&nbsp;<span style="color: #9DE0FF">"user_description"</span>: <span style="color: #CE9075">"Je me considère
        comme \"Développeur Bohémien\""</span>,<br>
      &nbsp;&nbsp;<span style="color: #9DE0FF">"hobbies_link"</span>: <span style="color: #CE9075">"#"</span>,<br>
      &nbsp;&nbsp;<span style="color: #9DE0FF">"professional_experience"</span>: [<br>
      &nbsp;&nbsp;&nbsp;&nbsp;{<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"company"</span>: <span
        style="color: #CE9075">"Solutions KLÄY"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"start_date"</span>: <span
        style="color: #CE9075">"Septembre 2024"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"position"</span>: <span
        style="color: #CE9075">"Apprenti informaticien CFC - Développement d’applications"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"description"</span>: <span
        style="color: #CE9075">"PHP, MySQL, plugin WordPress"</span><br>
      &nbsp;&nbsp;&nbsp;&nbsp;},<br>
      &nbsp;&nbsp;&nbsp;&nbsp;{<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"company"</span>: <span
        style="color: #CE9075">"Jobtrek"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"start_date"</span>: <span
        style="color: #CE9075">"Avril 2024"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"position"</span>: <span
        style="color: #CE9075">"Apprenti informaticien CFC - Développement d'applications"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"description"</span>: <span
        style="color: #CE9075">"Laravel, Inertia, Docker, Vue.js, PostgreSQL, Tailwind CSS"</span><br>
      &nbsp;&nbsp;&nbsp;&nbsp;},<br>
      &nbsp;&nbsp;&nbsp;&nbsp;{<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"company"</span>: <span
        style="color: #CE9075">"Eva-it"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"start_date"</span>: <span
        style="color: #CE9075">"Août 2023"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"position"</span>: <span
        style="color: #CE9075">"Apprenti informaticien CFC - Développement d'applications"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"description"</span>: <span
        style="color: #CE9075">"Python (Flask), Angular, MongoDB"</span><br>
      &nbsp;&nbsp;&nbsp;&nbsp;},<br>
      &nbsp;&nbsp;&nbsp;&nbsp;{<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"company"</span>: <span
        style="color: #CE9075">"Jobtrek"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"start_date"</span>: <span
        style="color: #CE9075">"Août 2022"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"position"</span>: <span
        style="color: #CE9075">"Apprenti informaticien CFC - Développement d'applications"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"description"</span>: <span
        style="color: #CE9075">"PHP, JS (OOP), Python, Dart (Flutter), Bootstrap 5, Three.js, MySQL, implémentation et
        création de maquettes Figma en HTML & CSS, le tout sous Linux"</span><br>
      &nbsp;&nbsp;&nbsp;&nbsp;},<br>
      &nbsp;&nbsp;&nbsp;&nbsp;{<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"event"</span>: <span
        style="color: #CE9075">"Année de transition et formation"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"start_date"</span>: <span
        style="color: #CE9075">"Début août 2021"</span>,<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #9DE0FF">"description"</span>: <span
        style="color: #CE9075">"Stages : Service Informatique, Ville de Renens, Next Link Solutions, Ville de Prilly,
        SOI Lausanne, Romanel-sur-Morges, Ville de Lausanne. Formation en HTML, CSS, et JavaScript"</span><br>
      &nbsp;&nbsp;&nbsp;&nbsp;}<br>
      &nbsp;&nbsp;]<br>
      }

    </div>

  </div>

  <div class="tab2Content max-md:text-xs hidden p-2 rounded-b-[30px] w-full min-h-[500px]"
    style="background: rgba(30, 30, 30, 0.69);">
    <h1>test</h1>
  </div>





</div>


<style>
  .linesNumbers p {
    color: #6E6B6E;
  }

  .editor {
    family: 'Fira Code', monospace;

    border-radius: 30px;
  }

  .fira-code {
    font-family: 'Fira Code', monospace;

  }

  /* Firefox-specific */
  .tab1Content {
    scrollbar-color: rgba(111, 111, 111, 0.78) #241D29;
    /* pouce rouge, track gris */
  }


  div.tab1Content::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
  }

  div.tab1Content::-webkit-scrollbar-thumb {
    background: red;
    border-radius: 10px;
  }

  div.tab1Content::-webkit-scrollbar-thumb:hover {
    background: blue;
  }
</style>


<script>
  const editorDiv = document.querySelector('.flex.p-2.rounded-b-[30px]');
  let isInsideEditor = false;

  // Update isInsideEditor on focus events
  document.addEventListener('focusin', () => {
    if (editorDiv.contains(document.activeElement)) {
      isInsideEditor = true;
    }
  });

  document.addEventListener('focusout', () => {
    isInsideEditor = false;
  });

  // Scroll handler
  window.addEventListener('wheel', (event) => {
    if (!isInsideEditor) {
      handleDivChange(event);
    }
  });

  function handleDivChange(event) {
    if (event.deltaY > 0) {
      console.log('Scrolling down: Change div to next');
      // Handle changing div to the next section
    } else {
      console.log('Scrolling up: Change div to previous');
      // Handle changing div to the previous section
    }
  }
</script>
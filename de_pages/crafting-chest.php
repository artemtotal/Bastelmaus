<?php include '../partials/header-de.php'; ?>


<main>
  <!-- Заголовок и короткое описание раздела -->
  <section class="section-header">
    <h1>Kommode</h1>
    <p>Kurze Beschreibung des Abschnitts "Kommode". Hier können Sie die Arbeiten meines Kindes sehen und Inspiration finden.</p>
  </section>
  
  <!-- Слайдер-галерея -->
  <section class="gallery">
    <div class="slider">
      <div class="slides">
        <?php
          // Папка с изображениями для раздела «Раскраски»
          $galleryDir = '../gallery/crafting-chest/';
          // Получаем все изображения с нужными расширениями
          $images = glob($galleryDir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
          if($images) {
            foreach($images as $image) {
              echo '<div class="slide"><img src="'.$image.'" alt="Изображение"></div>';
            }
          } else {
              echo "<p>Bilder nicht gefunden.</p>";
          }
        ?>
      </div>
    </div>
  </section>
  
  <!-- Видео-секция с YouTube (пример)
<section class="video-section">
  <h2>Видео</h2>
  <div class="video-slider">
    <button class="prev">Предыдущее</button>
    <div class="video-container">
      <iframe class="video-slide active" src="https://youtube.com/embed/1zDrc5VIdds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="video-slide" src="https://youtube.com/embed/8VQlK1r9puE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <button class="next">Следующее</button>
  </div>
</section>
  -->

  
</main>

<?php include '../partials/footer.php'; ?>

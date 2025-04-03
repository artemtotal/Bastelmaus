<?php include '../partials/header.php'; ?>


<main>
  <!-- Заголовок и короткое описание раздела -->
  <section class="section-header">
    <h1>Раскраски</h1>
    <p>Короткое описание раздела «Раскраски». Здесь вы можете увидеть работы, выполненные моим ребенком, и получить вдохновение.</p>
  </section>
  
  <!-- Слайдер-галерея -->
  <section class="gallery">
    <div class="slider">
      <div class="slides">
        <?php
          // Папка с изображениями для раздела «Раскраски»
          $galleryDir = '../gallery/drawing-learning/';
          // Получаем все изображения с нужными расширениями
          $images = glob($galleryDir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
          if($images) {
            foreach($images as $image) {
              echo '<div class="slide"><img src="'.$image.'" alt="Изображение"></div>';
            }
          } else {
              echo "<p>Изображения не найдены.</p>";
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

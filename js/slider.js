document.addEventListener("DOMContentLoaded", function() {
  const slider = document.querySelector('.slider');
  if (!slider) return;
  
  const slidesContainer = slider.querySelector('.slides');
  const slides = slider.querySelectorAll('.slide');
  let currentIndex = 0;
  const totalSlides = slides.length;
  
  // Если слайдов меньше двух, не создаем навигацию и автопрокрутку
  if (totalSlides < 2) {
    return;
  }
  
  // Создаем блок навигации (стрелки)
  const nav = document.createElement('div');
  nav.classList.add('nav');
  const prevBtn = document.createElement('button');
  prevBtn.textContent = '<';
  const nextBtn = document.createElement('button');
  nextBtn.textContent = '>';
  nav.appendChild(prevBtn);
  nav.appendChild(nextBtn);
  slider.appendChild(nav);
  
  // Создаем пагинацию (точки)
  const pagination = document.createElement('div');
  pagination.classList.add('pagination');
  slides.forEach((slide, index) => {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    dot.addEventListener('click', () => {
      currentIndex = index;
      updateSlider();
      clearInterval(autoSlideInterval); // отключаем автопрокрутку при ручном выборе
    });
    pagination.appendChild(dot);
  });
  slider.appendChild(pagination);
  
  // Функция обновления слайдера
  function updateSlider() {
    slidesContainer.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';
    
    // Обновляем активную точку
    const dots = pagination.querySelectorAll('.dot');
    dots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentIndex);
    });
  }
  
  // Обработчики кликов для стрелок
  prevBtn.addEventListener('click', function() {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - 1;
    updateSlider();
    clearInterval(autoSlideInterval);
  });
  
  nextBtn.addEventListener('click', function() {
    currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
    updateSlider();
    clearInterval(autoSlideInterval);
  });
  
  // Автопрокрутка каждые 5 секунд
  function autoSlide() {
    currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
    updateSlider();
  }
  let autoSlideInterval = setInterval(autoSlide, 5000);
  
  // Инициализация
  updateSlider();
});
// Видео-слайдер
const videoSlider = document.querySelector('.video-slider');
if (videoSlider) {
  const videoContainer = videoSlider.querySelector('.video-container');
  const videoSlides = videoContainer.querySelectorAll('.video-slide');
  const prevVideoBtn = videoSlider.querySelector('.prev');
  const nextVideoBtn = videoSlider.querySelector('.next');
  let currentVideoIndex = 0;

  function updateVideoSlider() {
    videoSlides.forEach((slide, idx) => {
      slide.classList.toggle('active', idx === currentVideoIndex);
    });
  }
  

  prevVideoBtn.addEventListener('click', function () {
    currentVideoIndex = (currentVideoIndex > 0) ? currentVideoIndex - 1 : videoSlides.length - 1;
    updateVideoSlider();
  });

  nextVideoBtn.addEventListener('click', function () {
    currentVideoIndex = (currentVideoIndex < videoSlides.length - 1) ? currentVideoIndex + 1 : 0;
    updateVideoSlider();
  });

  // Инициализация
  updateVideoSlider();
}

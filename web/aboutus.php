  
<section class="ds-grid">
  <!-- Card đơn giản -->
  <article class="ds-card">
    <div class="ds-media">
      <a href="link-to-page.html" class="ds-link">
        <img src="Group 167.png" alt="Office">
        <span class="ds-cta">KHÁM PHÁ NGAY</span>
      </a>
    </div>
  </article>

    <article class="ds-card">
    <div class="ds-media">
      <a href="link-to-page.html" class="ds-link">
        <img src="Group 167.png" alt="Office">
        <span class="ds-cta">KHÁM PHÁ NGAY</span>
      </a>
    </div>
  </article>

    <article class="ds-card">
    <div class="ds-media">
      <a href="link-to-page.html" class="ds-link">
        <img src="Group 167.png" alt="Office">
        <span class="ds-cta">KHÁM PHÁ NGAY</span>
      </a>
    </div>
  </article>

  
    <article class="ds-card">
    <div class="ds-media">
      <a href="link-to-page.html" class="ds-link">
        <img src="Group 167.png" alt="Office">
        <span class="ds-cta">KHÁM PHÁ NGAY</span>
      </a>
    </div>
  </article>
</section>

<style>
  .ds-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* có thể dùng 4 nếu đủ không gian */
  gap: 20px;
  padding: 20px;
}

.ds-card {
  border-radius: 12px;
  overflow: hidden;
  position: relative;
}

.ds-media {
  position: relative;
  width: 100%;
  overflow: hidden;
  border-radius: 12px;
}

.ds-media img {
  width: 100%;
  display: block;
  border-radius: 12px;
}

.ds-link {
  position: relative;
  display: block;
  text-align: center;
  text-decoration: none;
  color: inherit;
}

.ds-cta {
  position: absolute;
  bottom: 16px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #6a4c49;
  color: #fff;
  padding: 10px 20px;
  font-size: 13px;
  border-radius: 20px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.ds-cta:hover {
  background-color: #4a2f2d;
}

</style>
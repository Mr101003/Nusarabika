@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- HERO SECTION START -->
<section class="hero" id="home">
    <main class="content">
      <h1>Nikmati Rasa Nusantara <span>dari NUSARABICA</span></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt,
        cupiditate!
      </p>
      <a
        href="https://wa.me/6283139846085?text=Halo Kak,%20Aku%20mau%20order%20joki%20dong"
        class="cta"
        >Order Sekarang!</a
      >
    </main>
  </section>
  <!-- HERO SECTION END -->

  <!-- ABOUT US SECTION START -->
  <section class="about" id="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/tentang-kami.png" alt="Tentang Kami" />
      </div>
      <div class="content">
        <h3>Kenapa memilih Joki Kicau?</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
          temporibus obcaecati deleniti est incidunt! Dolorem?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
          voluptatem! Veniam optio distinctio a reprehenderit quidem, impedit
          mollitia nemo aperiam.
        </p>
      </div>
    </div>
  </section>
  <!-- ABOUT US SECTION END -->

  <!-- MENU START -->
  <section id="price" class="price">
    <h2><span>Price</span> List</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
      deleniti, nemo temporibus provident fugit perferendis consequuntur
      incidunt ad odit, enim dolorum voluptatibus alias ut reiciendis?
    </p>

    <div class="row">
      <div class="price-card">
        <img
          src="img/price/kopi3.jpeg"
          alt="kopi kopian"
          class="menu-card-img"
        />
        <h3 class="price-card-title">Bali Kintamani</h3>
        <p class="price-card-harga">Harian IDR 10K</p>
        <p class="price-card-harga">Mingguan IDR 50K</p>
        <p class="price-card-harga">Bulanan 180K</p>
      </div>
      <div class="price-card">
        <img
          src="img/price/kopi3.jpeg"
          alt="kopi kopian"
          class="menu-card-img"
        />
        <h3 class="price-card-title">Toraja Brew</h3>
        <p class="price-card-harga">Harian IDR 10K</p>
        <p class="price-card-harga">Mingguan IDR 50K</p>
        <p class="price-card-harga">Bulanan 180K</p>
      </div>
      <div class="price-card">
        <img
          src="img/price/kopi3.jpeg"
          alt="kopi kopian"
          class="menu-card-img"
        />
        <h3 class="price-card-title">Winebrew Sidoarjo</h3>
        <p class="price-card-harga">Harian IDR 10K</p>
        <p class="price-card-harga">Mingguan IDR 50K</p>
        <p class="price-card-harga">Bulanan 180K</p>
      </div>
      <div class="price-card">
        <img
          src="img/price/kopi3.jpeg"
          alt="kopi kopian"
          class="menu-card-img"
        />
        <h3 class="price-card-title">Aceh Gayo</h3>
        <p class="price-card-harga">Harian IDR 10K</p>
        <p class="price-card-harga">Mingguan IDR 50K</p>
        <p class="price-card-harga">Bulanan 180K</p>
      </div>
      <div class="price-card">
        <img
          src="img/price/kopi3.jpeg"
          alt="kopi kopian"
          class="menu-card-img"
        />
        <h3 class="price-card-title">Robusta</h3>
        <p class="price-card-harga">Harian IDR 10K</p>
        <p class="price-card-harga">Mingguan IDR 50K</p>
        <p class="price-card-harga">Bulanan 180K</p>
      </div>
      <div class="price-card">
        <img
          src="img/price/kopi3.jpeg"
          alt="kopi kopian"
          class="menu-card-img"
        />
        <h3 class="price-card-title">Arabica</h3>
        <p class="price-card-harga">Harian IDR 10K</p>
        <p class="price-card-harga">Mingguan IDR 50K</p>
        <p class="price-card-harga">Bulanan 180K</p>
      </div>
    </div>
  </section>
  <!-- MENU END -->

  <!-- PRODUCT SECTION START -->
  <section class="products" id="products">
    <h2><span>Kopi Unggulan</span> kami</h2>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus
      sint fuga sunt aspernatur ex? Excepturi.
    </p>

    <div class="row">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"
            ><i data-feather="eye"></i
          ></a>
        </div>
        <div class="product-image">
          <img src="img/price/kopi3.jpeg" alt="Rawat Akun" />
        </div>
        <div class="product-content">
          <h3>Aceh Gayo</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 100K <span>IDR 1000K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"
            ><i data-feather="eye"></i
          ></a>
        </div>
        <div class="product-image">
          <img src="img/price/kopi3.jpeg" alt="Rawat Akun" />
        </div>
        <div class="product-content">
          <h3>Toraja Brew</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 100K <span>IDR 1000K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"
            ><i data-feather="eye"></i
          ></a>
        </div>
        <div class="product-image">
          <img src="img/price/kopi3.jpeg" alt="Rawat Akun" />
        </div>
        <div class="product-content">
          <h3>Bali Kintamani</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 100K <span>IDR 1000K</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- PRODUCT SECTION END -->

  <!-- CONTACT START -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, iste!
    </p>

    <div class="row">
      <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2221.2731080192775!2d106.84561562196403!3d-6.362407912889712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sen!2sid!4v1719660024287!5m2!1sen!2sid"
      width="600"
      height="450"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
      </iframe>

      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="Nama" />
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="Email" />
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="No Hp" />
        </div>

        <button type="submit" class="btn">Kirim Pesan</button>
      </form>
    </div>
  </section>
  <!-- CONTACT END -->

  <h1>Welcome to the Home Page</h1>
    <p>This is the content of the home page.</p>
@endsection
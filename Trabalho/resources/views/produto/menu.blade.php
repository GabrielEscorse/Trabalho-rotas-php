@extends('template.template')

@section('content')
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Veja nosso menu degustação</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Tudo</li>
              <li data-filter=".filter-starters">Entradas</li>
              <li data-filter=".filter-salads">Saladas</li>
              <li data-filter=".filter-specialty">Especialidades da casa</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="/assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bisque de Lagosta</a><span>R$16,90</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="/assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Torrada</a><span>R$6,95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="/assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bolo de primavera</a><span>R$20,95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="/assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salada Caesar</a><span>R$24,95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="/assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Grelhado Toscano</a><span>R$32,95</span>
            </div>
            <div class="menu-ingredients">
              Frango grelhado com provolone, corações de alcachofra e pesto vermelho assado
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="/assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Palito de Mussarela</a><span>R$8,95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="/assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salada grega</a><span>R$15,90</span>
            </div>
            <div class="menu-ingredients">
              Espinafre fresco, alface crocante, tomates, and azeite grego
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="/assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salada de Espinafre</a><span>R$19,95</span>
            </div>
            <div class="menu-ingredients">
              Espinafre fresco com cogumelos, ovo cozido, and vinagrete de bacon
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="/assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Rolinho de lagosta</a><span>R$35,95</span>
            </div>
            <div class="menu-ingredients">
              Carne gorda de lagosta, maionese e alface crocante na torrada
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
    @endsection
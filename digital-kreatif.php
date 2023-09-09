<?php include 'partial/header.php'; ?>
<style>
  .nav {
    text-decoration: none;
  }
  .corpItem {
    width: 100%;
    height: 95%;
    display: flex;
    flex-direction:column;
    justify-content:center;
    border: 1px solid black;
    padding: 10px;
  }
  .corpItems{
    justify-content:space-between;
  }
  .corpItem>div>h3{
    padding-top:10px;
  }
</style>
<!-- Header Start -->
<div
  class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom"
  style="margin-bottom: 90px"
>
  <div class="container text-center py-5">
    <h1 class="text-white display-1">Digital Kreatif</h1>
    <div class="d-inline-flex text-white mb-5">
      <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
      <i class="fa fa-angle-double-right pt-1 px-3"></i>
      <p class="m-0 text-uppercase">Kelas Digital Kreatif</p>
      <i class="fa fa-angle-double-right pt-1 px-3"></i>
      <p class="m-0 text-uppercase">Detail Kursus</p>
    </div>

    <p
      class="text-white align-items-center mb-5"
      data-aos="fade-up"
      data-aos-delay="100"
    >
      SoftUni mempunyai banyak pilihan program sesuai dengan kebutuhan
      perusahaan anda. Mulai dari tahapan pengenalan sampai ke tahapan ahli yang
      akan dibimbing oleh tutor berpengalaman. Pengaturan jadwal kelas pun
      fleksibel sesuai kesepakatan dengan perusahaan (dan karyawan)
    </p>
  </div>
</div>
<!-- Header End -->
<section>
  <div class="container-fluid">
    <div class="container">
      <div class="corpContainer">
        <nav class="">
          <div
            class="nav justify-content-center nav-tabs border-0"
            id="nav-tab"
            role="tablist"
          >
            <button
              class="nav-link active"
              id="nav-graphic-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-graphic"
              type="button"
              role="tab"
              aria-controls="nav-graphic"
              aria-selected="true"
            >
              Graphic Design
            </button>
            <button
              class="nav-link"
              id="nav-uiux-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-uiux"
              type="button"
              role="tab"
              aria-controls="nav-uiux"
              aria-selected="false"
            >
              UI/UX Design
            </button>
            <button
              class="nav-link"
              id="nav-animation-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-animation"
              type="button"
              role="tab"
              aria-controls="nav-animation"
              aria-selected="false"
            >
              Animation/Video
            </button>
            <button
              class="nav-link"
              id="nav-gameD-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-gameD"
              type="button"
              role="tab"
              aria-controls="nav-gameD"
              aria-selected="false"
            >
              Game Design
            </button>
            <button
              class="nav-link"
              id="nav-lainnya-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-lainnya"
              type="button"
              role="tab"
              aria-controls="nav-lainnya"
              aria-selected="false"
            >
              Lainnya
            </button>
          </div>
        </nav>
        <div class="tab-content mt-5" id="nav-tabContent">
          <!-- Graphic Design  -->
          <div
            class="tab-pane fade show active"
            id="nav-graphic"
            role="tabpanel"
            aria-labelledby="nav-graphic-tab"
          >
            <h3>Graphic Design</h3>

            <!-- Graphic Design  -->
            <div>
              <div class="row corpItems py-5">
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div>
                      <h3 class="text-center">Design Basic</h3>
                      <p>
                        Apa itu desain grafis, apa itu komposisi, teori warna,
                        konteks warna, pallets & profile, grids & guides, raster
                        & vector, resolusi, bagaimana penggunaan golden ratio,
                        typography, pictograms, ideograms, icons, & logo,
                        terminologi desain, best practices desain, popular
                        design software, membuat portfolio
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div>
                      <h3 class="text-center">Illustrator</h3>
                      <p>
                      Introduction vector graphics, menus & panels di
                            Illustrator, vectorizing simple object, vectorizing
                            complex object, typography & color, membuat logo,
                            membuat branding element, Illustrator tips & tricks
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div style="min-height: 160px">
                      <h3 class="text-center">Photoshop</h3>
                      <p>
                      Introduction Photoshop, keyboard shortcuts, membuat
                            CD cover, membuat movie poster, membuat book cover
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div>
                      <h3 class="text-center">Illustrator Advanced</h3>
                      <p>
                      Graphic sculpting & style manipulation, brushes
                            Illustrator; colors & effects, proportions, balance,
                            dan composition, complex curves & style adaptations,
                            vectorizing raster images; typography & lettering,
                            beralih dari prototipe ke presentasi, personalized
                            fonds, persiapan prepress.
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div>
                      <h3 class="text-center">Photoshop Advanced</h3>
                      <p>
                      Advertising Design, Web Design, Package Design,
                            desain untuk social media; photo editing, photo
                            manipulation, mockups, membuat collages
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div>
                      <h3 class="text-center">Graphic Design Marketing</h3>
                      <p>
                      Membuat ad campaign, unsur creative portfolio,
                            membuat key vision, brand identity, label design,
                            package design, brand communication, TV ads &
                            Packshot, Web Design, banners & flyers, desain untuk
                            social media.
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div style="min-height: 160px">
                      <h3 class="text-center">Logo & Visual Identity Design</h3>
                      <p>
                      Logo and visual identity, logo design vs. visual
                            identity vs. branding, elements of a visual
                            identity, idea, process, brief, moodboards,
                            typography, logo Design, colors, visual identity in
                            print, visual identity in digital, creating a
                            mockup, presenting best practices, creating a brand
                            book.
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div>
                      <h3 class="text-center">Photoshop Beginner</h3>
                      <p>
                      Introduction Photoshop interface, raster vs vector,
                            print vs digital, layers, smart objects, typography,
                            image editing & manipulation, desain untuk digital,
                            desain untuk print
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div >
                      <h3 class="text-center">Retouching Photoshop</h3>
                      <p>
                      Komunikasi melalui warna & Bentuk, Retouching
                            workflow, Catalog photography, Ad photography,
                            product photography, corporate portrait photography,
                            toning & color changes, transparency, perspective,
                            membuat ad campaign promosi
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <div class="corpItem">
                    <div >
                      <h3 class="text-center">Illustrator Beginner</h3>
                      <p>
                      Tool utama di Illustrator, color & pallets,
                            typography & text effects, vectorizing simple
                            object, vectorizing complex object, finalizing
                            project
                      </p>
                    </div>
                    <div class="text-center">
                      <a
                        data-bs-toggle="modal"
                        data-bs-target="#formModal"
                        class="mt-2 btn btn-warning"
                        >HUBUNGI</a
                      >
                    </div>
                  </div>
                </div>
              
              </div>

          
              
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="nav-uiux"
            role="tabpanel"
            aria-labelledby="nav-uiux-tab"
          >
            uiux
          </div>
          <div
            class="tab-pane fade"
            id="nav-animation"
            role="tabpanel"
            aria-labelledby="nav-animation-tab"
          >
            animation
          </div>
          <div
            class="tab-pane fade"
            id="nav-gameD"
            role="tabpanel"
            aria-labelledby="nav-gameD-tab"
          >
            Game Design
          </div>
          <div
            class="tab-pane fade"
            id="nav-lainnya"
            role="tabpanel"
            aria-labelledby="nav-lainnya-tab"
          >
            Lainnya
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End Header -->
<section>
  <div class="container">
    <div class="row align-items-center justify-content-between pt-5">
      <div class="col-lg-12 text-center pe-lg-5">
        <h1 class="heading text-white mb-3" data-aos="fade-up">
          KELAS DIGITAL KREATIF
        </h1>
        <p
          class="text-white align-items-center mb-5"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          SoftUni mempunyai banyak pilihan program sesuai dengan kebutuhan
          perusahaan anda. Mulai dari tahapan pengenalan sampai ke tahapan ahli
          yang akan dibimbing oleh tutor berpengalaman. Pengaturan jadwal kelas
          pun fleksibel sesuai kesepakatan dengan perusahaan (dan karyawan)
        </p>
      </div>
    </div>
  </div>
</section>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button
      class="nav-link active"
      id="nav-graphic-tab"
      data-bs-toggle="tab"
      data-bs-target="#nav-graphic"
      type="button"
      role="tab"
      aria-controls="nav-graphic"
      aria-selected="true"
    >
      Graphic Design
    </button>
    <button
      class="nav-link"
      id="nav-uiux-tab"
      data-bs-toggle="tab"
      data-bs-target="#nav-uiux"
      type="button"
      role="tab"
      aria-controls="nav-uiux"
      aria-selected="false"
    >
      UI/UX Design
    </button>
    <button
      class="nav-link"
      id="nav-animation-tab"
      data-bs-toggle="tab"
      data-bs-target="#nav-animation"
      type="button"
      role="tab"
      aria-controls="nav-animation"
      aria-selected="false"
    >
      Animation/Video
    </button>
    <button
      class="nav-link"
      id="nav-gameD-tab"
      data-bs-toggle="tab"
      data-bs-target="#nav-gameD"
      type="button"
      role="tab"
      aria-controls="nav-gameD"
      aria-selected="false"
    >
      Game Design
    </button>
    <button
      class="nav-link"
      id="nav-lainnya-tab"
      data-bs-toggle="tab"
      data-bs-target="#nav-lainnya"
      type="button"
      role="tab"
      aria-controls="nav-lainnya"
      aria-selected="false"
    >
      Lainnya
    </button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div
    class="tab-pane fade show active"
    id="nav-graphic"
    role="tabpanel"
    aria-labelledby="nav-graphic-tab"
  >
    graphic
  </div>
  <div
    class="tab-pane fade"
    id="nav-uiux"
    role="tabpanel"
    aria-labelledby="nav-uiux-tab"
  >
    uiux
  </div>
  <div
    class="tab-pane fade"
    id="nav-animation"
    role="tabpanel"
    aria-labelledby="nav-animation-tab"
  >
    animation
  </div>
  <div
    class="tab-pane fade"
    id="nav-gameD"
    role="tabpanel"
    aria-labelledby="nav-gameD-tab"
  >
    Game Design
  </div>
  <div
    class="tab-pane fade"
    id="nav-lainnya"
    role="tabpanel"
    aria-labelledby="nav-lainnya-tab"
  >
    Lainnya
  </div>
</div>

<!-- Modal -->
<div
  class="modal fade"
  id="formModal"
  tabindex="-1"
  aria-labelledby="formModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Form Konsultasi</h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="add-course-form">
          <form action="https://softuni.id/kontak" method="POST">
            <input
              type="hidden"
              name="s0ftun1.1d"
              value="2b7029dc9317df1b502fd63629560d6c"
            />
            <input name="type" hidden value="Enterprise IT" type="text" />
            <div class="form-group">
              <label class="form-control-label">Email</label>
              <input
                name="email"
                type="email"
                class="form-control"
                placeholder="Ketikan Email Aktif"
                value=""
                required
              />
              <small class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label class="form-control-label">Nama Lengkap</label>
              <input
                name="name"
                type="text"
                class="form-control"
                placeholder="Ketikan Nama Lengkap"
                value=""
                required
              />
              <small class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label class="form-control-labTeleponel">Nomor </label>
              <input
                name="phone"
                type="text"
                class="form-control"
                placeholder="Ketikan Nomor Telepon Aktif"
                value=""
                required
              />
              <small class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label>Detail Konsultasi</label>
              <textarea
                area
                name="message"
                class="form-control"
                placeholder="Isi Detail Konsultasi di sini..."
                rows="4"
              ></textarea>
              <small class="text-danger"></small>
            </div>
            <div
              class="g-recaptcha mt-3 mb-2"
              data-sitekey="6Lc4GtYiAAAAAH49laSizRCLOaCzxOPwtVseKyG7"
            ></div>
            <div class="d-grid">
              <button
                onclick="loadingPopUp()"
                class="btn btn-primary btn-start"
                type="submit"
              >
                Daftar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ======= KELAS INFORMASI TEKNOLOGI Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>KELAS Kreatif</h2>
    </div>

    <ul
      id="portfolio-flters"
      class="d-flex justify-content-center"
      data-aos="fade-up"
      data-aos-delay="100"
    >
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-graphic">Graphic Design</li>
      <li data-filter=".filter-uiux">UI/UX Design</li>
      <li data-filter=".filter-animation">Animation/Video</li>
      <li data-filter=".filter-game">Game Design</li>
      <li data-filter=".filter-other">Lainnya</li>
    </ul>

    <div
      class="row portfolio-container"
      data-aos="fade-up"
      data-aos-delay="200"
    >
      <!-- UI  UX  -->
      <div>
        <div class="col-lg-4 col-md-12 portfolio-item filter-uiux">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>UI Beginner</h3>
                    <p>
                      Introduction UI, Design UI & Design Basics, Design
                      systems, Flowcharts, planning wireframes, & sketches
                      dengan Figma, UI Graphic Design dengan Figma
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="buy-btn mt-3"
                      >Hubungi</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 portfolio-item filter-uiux">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>UI Design</h3>
                    <p>
                      User Interface hierarchy & composition Atomic design,
                      membuat UI Design system, web & responsive UI Design,
                      native mobile UI design, desain augmented reality, virtual
                      reality, mixed reality, panduan step-by-step Design
                      project
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-uiux">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>UX Design</h3>
                    <p>
                      Introduction User Experience design, basic theories &
                      principles, membuat personas & scenarios, user journey,
                      membuat contextual storyboards, paper & digital
                      prototypes, Interactive prototypes dengan Adobe XD,
                      validation interactive prototypes dengan Indigo Design
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-uiux">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>UI Design Advanced</h3>
                    <p>
                      icons illustrations data visuali ation, animation & micro
                      interactions, conversational UI, dekomposisi antarmuka
                      dialog, augmented, virtual, dan mix realities, automation,
                      memvalidasi Desain UI dengan calon pengguna, kerjasama tim
                      yang efektif.
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-uiux">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>UX Design Advanced</h3>
                    <p>
                      Analisis kompetitif similar products, polls & interviews,
                      menus, forms, dan dialogs, user manuals, product
                      assistance & tutorials, App Design, user & continuity
                      tests, interface description untuk sistem desain,
                      components, styles, dan interface templates untuk sistem
                      desain, information search & data visualization.
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-uiux">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Photoshop Advanced</h3>
                    <p>
                      Advertising Design, Web Design, Package Design, desain
                      untuk social media; photo editing, photo manipulation,
                      mockups, membuat collages
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-uiux">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Illustrator Advanced</h3>
                    <p>
                      Graphic sculpting & style manipulation, brushes
                      Illustrator colors & effects, proportions, balance, dan
                      composition, complex curves & style adaptations vectori
                      ing raster images typography & lettering, beralih dari
                      prototipe ke presentasi, personali ed fonds, persiapan
                      prepress.
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Animation -->
      <div>
        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Premiere Pro</h3>
                    <p>
                      Introduction Premiere Pro, montage techniques untuk genres
                      berbeda, video editing automation, green screen,
                      penambahan text, color corrections, grading, LUTs, bekerja
                      dengan build-in effects, bagaimana export project dengan
                      baik
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>After Effects</h3>
                    <p>
                      Introduction After Effects, basic animation, bekerja
                      dengan text, infographics, processing raster images, 3D
                      dalam Animation, membuat storyboard, mendesain karakter,
                      menambahkan sound
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Premiere Pro Advanced</h3>
                    <p>
                      interface preview, menciptakan proses kerja yang tepat,
                      doubles, video composition, color, correction techniques,
                      audio manipulasi dengan audio Cli, track Mixer, DeNoise,
                      Unlink, bagaimana export project dengan benar.
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>After Effects Advanced</h3>
                    <p>
                      main plugins, Duik, Motion V2, Explode Layer Shapes,
                      Joysticks n sliders, RubberHose, bekerja dengan Graph
                      Editor & keys; Fake 3D, fluid animation, import vector
                      dari Illustrator, text manipulation, integrasi beberapa
                      object dalam satu, 3D camera & compositing seperti
                      tracking, Joystics, Duik Rig, dan putar object di motion.
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Concept Art</h3>
                    <p>
                      Basics perspective, light, & saturation, menambahkan
                      realism dengan materials & texture, Membuat thumbnails di
                      Photoshop, 2D unfold buildings, structures, & assets, Poly
                      modelling, kitbash, & 3DS, Max materials, 2D Rendering
                      dengan Vray & Arnold di 3DS Max, finishing project
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Concept Art Character</h3>
                    <p>
                      Design Introduction Character Design, Anatomy, muscles,
                      skeleton, Color theory, Tipe material, Light, Basic 3D
                      block outs & grayboxing, Membuat & eksekusi final concept
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Concept Art Environment Design</h3>
                    <p>
                      Introduction Blender, mengorganisir proses kerja, 3D
                      thumbnails, 3D sketching, & meremuskan ide, tipe material,
                      rendering, model integration, plugins & automation,
                      generate characters, vehicles, & buildings, finalizing
                      project, membuat portfolio
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Character Sculpting ZBrush</h3>
                    <p>
                      Introduction ZBrush, sculpting organic character,
                      sculpting attributes untuk organic character, texturing
                      techniques di ZBrush, bagaimana menampilkan final model
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>3D Animation</h3>
                    <p>
                      introduction Autodesk Maya s interface, modeling, UV
                      unfold, shaders, membuat texture dengan Maya & Photoshop,
                      rigging, prinsip utama animasi; classic case studies,
                      adjusting light, render Arnold to Maya.
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>3D Animation Advanced</h3>
                    <p>
                      modeling organic character, UV unfolds untuk organic
                      character, menggambar textures untuk organic character,
                      rigging humanoid character, animation motion, animasi
                      weight & balance, animasi melompat, export animation
                      cycles untuk game engine, menyusun frame untuk animasi
                      movie.
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Character Sculpting ZBrush</h3>
                    <p>
                      Introduction ZBrush, sculpting organic character,
                      sculpting attributes untuk organic character, texturing
                      techniques di ZBrush, bagaimana menampilkan final model
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-animation">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Video Production</h3>
                    <p>
                      Fundamentals Introduction video recording, light &
                      lighting, frame composition, dramaturgy & sound, video
                      recording for advertisement, video recording for music
                      video, video recording for vlog, movie scenes breakdown
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Game Design  -->
      <div>
        <div class="col-lg-4 col-md-12 portfolio-item filter-game">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Concept Art</h3>
                    <p>
                      Basics perspective, light, & saturation, menambahkan
                      realism dengan materials & texture, Membuat thumbnails di
                      Photoshop, 2D unfold buildings, structures, & assets, Poly
                      modelling, kitbash, & 3DS, Max materials, 2D Rendering
                      dengan Vray & Arnold di 3DS Max, finishing project
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-game">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Concept Art - Character</h3>
                    <p>
                      Introduction Character Design, Anatomy, muscles, skeleton,
                      Color theory, Tipe material, Light, Basic 3D block outs &
                      grayboxing, Membuat & eksekusi final concept
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-game">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Concept Art - Environment</h3>
                    <p>
                      Design Introduction Blender, mengorganisir proses kerja,
                      3D thumbnails, 3D sketching, & meremuskan ide, tipe
                      material, rendering, model integration, plugins &
                      automation, generate characters, vehicles, & buildings,
                      finalizing project, membuat portfolio
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-game">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Character Sculpting ZBrush</h3>
                    <p>
                      Introduction ZBrush, sculpting organic character,
                      sculpting attributes untuk organic character, texturing
                      techniques di ZBrush, bagaimana menampilkan final model
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-game">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Game Design</h3>
                    <p>
                      Game Design Basics, Foundation Game Design, Design Cycle,
                      Game Design Document, Specific digital games, Card game
                      live demo, Game Design vs. Game Art, Prototyping, Level
                      Design, Game testing
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-game">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Game Modelling Maya</h3>
                    <p>
                      Introduction Maya, teknik dasar di 3D, character
                      texturing, 3D character animation, generating movie,
                      tahapan akhir proses, animation
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-game">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Game Modelling Maya Advanced</h3>
                    <p>
                      Organic form modeling, Hard surface form modeling,
                      Topology & techniques untuk membuat UV unfolds, 3D
                      texturing techniques Photoshop, Character rigging dengan
                      HumanIK di Maya, Membuat animation cycles
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Others  -->
      <div>
        <div class="col-lg-4 col-md-12 portfolio-item filter-other">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Figma</h3>
                    <p>
                      Introduction Figma, Figma essentials, Shapes & colors,
                      Text & layers, Images & masking, UI elements, Wireframing,
                      Creating a prototype, Design system, creating a Landing
                      page, Figma plugins
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-other">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Creating Landing Page</h3>
                    <p>
                      Apa itu Landing page, Wireframe & responsive Design,
                      Prinsip conversion-centered Design, Creating & maintaining
                      a brand style, bagaimana menyusun dokumen kerja, testing
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-other">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Photography</h3>
                    <p>
                      Photography sebagai ekspresi diri, Photography sebagai
                      bentuk komunikasi, Composition, perspective, & diagonal
                      lines, Types of cameras & lances, Blending & depth field,
                      Exposure, Editing dengan Photoshop, Light, color
                      temperature, & white balance
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-other">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>InDesign</h3>
                    <p>
                      Introduction InDesign, Typography, Bekerja dengan text &
                      styles, Merancang multi-page print edition, Graphic &
                      editorial elements, Mempersiapkan PDF untuk print & PDF
                      interactive untuk kebutuhan digital
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 portfolio-item filter-other">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>InDesign Advanced</h3>
                    <p>
                      Typography & text, Membuat bentuk grafis kompleks, Color,
                      Image design & usage, Paragraph styles, Bekerja dengan
                      text documents, Paging, Membuat master page, Composition
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 portfolio-item filter-other">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Interior Design</h3>
                    <p>
                      Introduction Interior Design, 3D Modeling Basics, Color &
                      texture, Space planning, Membuat persentasi,
                      Post-production tips
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 portfolio-item filter-other">
          <div class="container" data-aos="fade-up">
            <div class="pricing">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <div style="min-height: 160px">
                    <h3>Typography</h3>
                    <p>
                      Sejarah bahasa & tulisan, Merancang sistem penulisan,
                      Specifics letter, Specifics printed letter, Typesetting &
                      text formatting, Modern fonds
                    </p>
                  </div>
                  <div class="text-center">
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#formModal"
                      class="mt-3 buy-btn"
                      ><b>HUBUNGI</b>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End KELAS INFORMASI TEKNOLOGI Section -->

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Belum temukan kelas yang sesuai kebutuhan anda?</h2>
      <p>
        Konsultasikan kebutuhan anda dengan kami dan dapatkan kelas yang anda
        butuhkan hanya dengan satu klik
      </p>
    </div>
    <div class="text-center">
      <a
        data-bs-toggle="modal"
        data-bs-target="#formModal"
        style="padding: 10px 16px !important"
        class="mt-3 mx-auto btn btn-primary btn-rounded"
        ><b>HUBUNGI</b>
      </a>
    </div>
  </div>
</section>

<!-- Footer -->
<?php include 'partial/footer.php'; ?>

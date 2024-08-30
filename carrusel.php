<style>
    @keyframes tonext {
  75% {
    left: 0;
  }
  95% {
    left: 100%;
  }
  98% {
    left: 100%;
  }
  99% {
    left: 0;
  }
}

@keyframes tostart {
  75% {
    left: 0;
  }
  95% {
    left: -300%;
  }
  98% {
    left: -300%;
  }
  99% {
    left: 0;
  }
}

@keyframes snap {
  96% {
    scroll-snap-align: center;
  }
  97% {
    scroll-snap-align: none;
  }
  99% {
    scroll-snap-align: none;
  }
  100% {
    scroll-snap-align: center;
  }
}

body {
  max-width: 37.5rem;
  margin: 0 auto;
  padding: 0 1.25rem;
  font-family: 'Lato', sans-serif;
}

.fotitos {
  position: relative;
  padding-top: 75%;
  filter: drop-shadow(0 0 10px #0003);
  perspective: 100px;
}

.fotitos__viewport {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  overflow-x: scroll;
  counter-reset: item;
  scroll-behavior: smooth;
  scroll-snap-type: x mandatory;
}

.fotitos__slide {
  position: relative;
  flex: 0 0 100%;
  width: 100%;
  background-color: #f99;
  counter-increment: item;
}

.fotitos__slide:nth-child(even) {
  background-color: #99f;
}

.fotitos__slide:before {
  content: counter(item);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%,-40%,70px);
  color: #fff;
  font-size: 2em;
}

.fotitos__snapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  scroll-snap-align: center;
}

@media (hover: hover) {
  .fotitos__snapper {
    animation-name: tonext, snap;
    animation-timing-function: ease;
    animation-duration: 4s;
    animation-iteration-count: infinite;
  }

  .fotitos__slide:last-child .fotitos__snapper {
    animation-name: tostart, snap;
  }
}

@media (prefers-reduced-motion: reduce) {
  .fotitos__snapper {
    animation-name: none;
  }
}

.fotitos:hover .fotitos__snapper,
.fotitos:focus-within .fotitos__snapper {
  animation-name: none;
}

.fotitos__navigation {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  text-align: center;
}

.fotitos__navigation-list,
.fotitos__navigation-item {
  display: inline-block;
}

.fotitos__navigation-button {
  display: inline-block;
  width: 1.5rem;
  height: 1.5rem;
  background-color: #333;
  background-clip: content-box;
  border: 0.25rem solid transparent;
  border-radius: 50%;
  font-size: 0;
  transition: transform 0.1s;
}

.fotitos::before,
.fotitos::after,
.fotitos__prev,
.fotitos__next {
  position: absolute;
  top: 0;
  margin-top: 37.5%;
  width: 4rem;
  height: 4rem;
  transform: translateY(-50%);
  border-radius: 50%;
  font-size: 0;
  outline: 0;
}

.fotitos::before,
.fotitos__prev {
  left: -1rem;
}

.fotitos::after,
.fotitos__next {
  right: -1rem;
}

.fotitos::before,
.fotitos::after {
  content: '';
  z-index: 1;
  background-color: #333;
  background-size: 1.5rem 1.5rem;
  background-repeat: no-repeat;
  background-position: center center;
  color: #fff;
  font-size: 2.5rem;
  line-height: 4rem;
  text-align: center;
  pointer-events: none;
}

.fotitos::before {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
}

.fotitos::after {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
}

.estilofotitos{
    list-style: none;
    margin: 0;
    padding: 0;
}
</style>

<h1>CSS-only fotitos</h1>

<p>This fotitos is created with HTML and CSS only.</p>

<section class="fotitos" aria-label="Gallery">
  <ol class="fotitos__viewport estilofotitos">
    <li id="fotitos__slide1" 
        tabindex="0"
        class="fotitos__slide estilofotitos">
      <div class="fotitos__snapper">
        <a href="#fotitos__slide4"
           class="fotitos__prev">Go to last slide</a>
        <a href="#fotitos__slide2"
           class="fotitos__next">Go to next slide</a>
      </div>
    </li>
    <li id="fotitos__slide2"
        tabindex="0"
        class="fotitos__slide estilofotitos">
      <div class="fotitos__snapper"></div>
      <a href="#fotitos__slide1"
         class="fotitos__prev">Go to previous slide</a>
      <a href="#fotitos__slide3"
         class="fotitos__next">Go to next slide</a>
    </li>
    <li id="fotitos__slide3"
        tabindex="0"
        class="fotitos__slide estilofotitos">
      <div class="fotitos__snapper"></div>
      <a href="#fotitos__slide2"
         class="fotitos__prev">Go to previous slide</a>
      <a href="#fotitos__slide4"
         class="fotitos__next">Go to next slide</a>
    </li>
    <li id="fotitos__slide4"
        tabindex="0"
        class="fotitos__slide estilofotitos">
      <div class="fotitos__snapper"></div>
      <a href="#fotitos__slide3"
         class="fotitos__prev">Go to previous slide</a>
      <a href="#fotitos__slide1"
         class="fotitos__next">Go to first slide</a>
    </li>
  </ol>
  <aside class="fotitos__navigation">
    <ol class="fotitos__navigation-list estilofotitos">
      <li class="fotitos__navigation-item estilofotitos">
        <a href="#fotitos__slide1"
           class="fotitos__navigation-button">Go to slide 1</a>
      </li>
      <li class="fotitos__navigation-item estilofotitos">
        <a href="#fotitos__slide2"
           class="fotitos__navigation-button">Go to slide 2</a>
      </li>
      <li class="fotitos__navigation-item estilofotitos">
        <a href="#fotitos__slide3"
           class="fotitos__navigation-button">Go to slide 3</a>
      </li>
      <li class="fotitos__navigation-item estilofotitos">
        <a href="#fotitos__slide4"
           class="fotitos__navigation-button">Go to slide 4</a>
      </li>
    </ol>
  </aside>
</section>
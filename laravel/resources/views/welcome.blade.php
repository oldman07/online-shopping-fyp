@extends('layouts.frontend.main')

@section('main-section')
    <section>
      <div class="section">
        <div class="section1">
          <div class="img-slider">
            <img src="https://images.pexels.com/photos/6347888/pexels-photo-6347888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/3962294/pexels-photo-3962294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/2292953/pexels-photo-2292953.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="img">
            <img src="https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
          </div>

        </div>
        <h1>Top Products</h1>
        <div id="section2" class="section2">
          <div class="container">

            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "{{ url('/individual') }}"><img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></a></div></button>
              <div class="name">SHOES</div>
              <div class="price">$5</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur.</div>
            </div>
            <div class="items">
              <div class="img img2"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/3649765/pexels-photo-3649765.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a></div></button>
              <div class="name">MEN's T-SHIRT</div>
              <div class="price">$6.34</div>
              <div class="info">Lorem ipsum dolor sit.</div>
            </div>
            <div class="items">
              <div class="img img3"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://media.istockphoto.com/photos/folded-blue-jeans-on-a-white-background-modern-casual-clothing-flat-picture-id1281304280" alt=""></a></div></button>
              <div class="name">JEANS</div>
              <div class="price">$9</div>
              <div class="info">Lorem ipsum dolor sit amet.</div>
            </div>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/8839887/pexels-photo-8839887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></a></div></button>
              <div class="name">WATCH</div>
              <div class="price">$9.1</div>
              <div class="info">Lorem ipsum dolor sit.</div>
            </div>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/6858618/pexels-photo-6858618.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></a></div></button>
              <div class="name">SMART PHONE</div>
              <div class="price">$20</div>
              <div class="info">Lorem ipsum dolor sit.</div>
            </div>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/5552789/pexels-photo-5552789.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></a></div></button>
              <div class="name">TELEVISION</div>
              <div class="price">$18</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur.</div>
            </div>
            <br>
            <section>
            <h1>Sale Products</h1>
         </section>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/4295985/pexels-photo-4295985.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a></div></button>
              <div class="name">HOODIES</div>
              <div class="price">$6.7</div>
              <div class="info">Lorem ipsum dolor sit.</div>
            </div>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://media.istockphoto.com/photos/vintage-plates-with-silver-teaspoons-picture-id184363070" alt=""></a></div></button>
              <div class="name">DINNER SET</div>
              <div class="price">$10</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/6463348/pexels-photo-6463348.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a></div></button>
              <div class="name">BLANKETS</div>
              <div class="price">$9.9</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
            </div>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/2659939/pexels-photo-2659939.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a></div></button>
              <div class="name">LAPTOP</div>
              <div class="price">$99</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
            </div>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://media.istockphoto.com/photos/modern-kitchen-microwave-oven-picture-id1144960519" alt=""></a></div></button>
              <div class="name">MICROWAVE</div>
              <div class="price">$30</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
            </div>
            <h1>New Products</h1>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://media.istockphoto.com/photos/black-coffee-maker-with-green-led-lights-picture-id177395430" alt=""></a></div></button>
              <div class="name">COFFEE MAKER</div>
              <div class="price">$29.7</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
            </div>
            <br>

            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://images.pexels.com/photos/6606354/pexels-photo-6606354.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></a></div></button>
              <div class="name">BED</div>
              <div class="price">$100</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
            </div>
            <div class="items">
              <div class="img img1"><button class="button" id="Ok"><a href= "C:\Users\Administrator\Desktop\basit\FYP\product-page\Pindex.html"><img src="https://media.istockphoto.com/photos/woman-turning-on-air-conditioner-picture-id1325708905" alt=""></a></div></button>
              <div class="name">AIR CONDITIONER</div>
              <div class="price">$78</div>
              <div class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
            </div>

          </div>

        </div>
      </div>

    </section>
@endsection

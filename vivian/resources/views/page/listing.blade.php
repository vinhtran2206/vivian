     <div id="shopify-section-1480804481290" class="shopify-section">
        <section class="content resize-js-1480804481290" data-section-id="1480804481290" data-section-type="resize-section">
          <div class="container collectionsall">
            <div class="row">
              @foreach( $categories as $test )
                <div class="clearfix visible-sm">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <a href="{{ route('collection_women')}}" class="banner zoom-in"> 
                    <span class="figure buttononhover">
                      <img src="image/Categories/{{ $test->image }}" alt="">
                      <span class="figcaption">
                        <span class="block-table">
                          <span class="block-table-cell">
                            <span class="banner__title size40">{{ $test->name }}
                            </span> 
                            <span class="btn btn--ys btn--xl">Shop now!
                            </span> 
                          </span>
                        </span>
                      </span>
                    </span>
                  </a>
                </div>
              @endforeach
              <div class="clearfix hidden-xs hidden-sm">
              </div>
            </div>
          </div>
        </section>
      </div>